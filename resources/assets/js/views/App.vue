<template>
    <div>    
        <div id="payment-access">
            <span style="position:fixed;top:3%;right:5%;cursor:pointer;font-size:39px;opacity:0.8;" @click="CloseWindow">&times;</span>
            <div class="modal fade" id="payment_confirmation" tabindex="-1" role="dialog"
    aria-labelledby="paymentConfirmationLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" id="close-modal" class="reset-menu close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" id="myModalLabel">Waiting for payment...</h4>
      </div>
      <div id="menu_list" class="modal-body">
          <div id="invoiceid"></div>
          <div id="exchange_rate"></div>
          <div id="total_price"></div>
          <div id="qrcode" align="middle"></div>
          <a id="qrcode-text" align="middle"></a>
      </div>
    </div>
  </div>
</div>

<div id="order_form">
    <center><h1><img height="250" width="250" src="/bitcoin/img/logo.png" alt="Bitcoin Payment" style="margin-top:15px"></h1><h1>Payment Request<a rel="license"
     href="https://www.gnu.org/copyleft/gpl.html"></a>

    </h1>
    <p><span ng-show="status.didInitializeHD" single-click-select=""><span ng-hide="(fields.amount || fields.label) && showPaymentRequestURL" style="font-size:14px">1BXehuemC9QUjZRd9exANiAoBY1ewKLv2z</span></span></p>
    </center>
    <div class="input-group" id="select-resp">
        <span class="input-group-btn">
            <button id="currency" type="button" class="btn btn-default"></button>
        </span>

        <!-- <input type="number" id="input_form" class="form-control" placeholder="0"> -->
        <select name="plan" id="input_form" class="form-control" aria-placeholder="0">
            <option value="0.23">0.23</option>
        </select>
        <span class="input-group-btn">
            <button id="order" disabled type="button" class="btn btn-primary">Pay</button>
        </span>
    </div>
    <div id="order_amount" align="middle"></div>
    <div style="margin-bottom: 20%;"></div>
</div>
        </div>
        <router-view></router-view>
        
    </div>
</template>

<script>
import axios from 'axios';
import Swal from 'sweetalert2';
import { createChart } from 'lightweight-charts';
    export default {
        data() {
            return {
                check: '',
                rate: 'gold',
            }
        },
        mounted() {
            $("#payment-access").hide();

                if(/iPad|iPhone|iPod/.test(navigator.userAgent) && !window.MSStream){
        document.querySelector('meta[name=viewport]')
          .setAttribute(
            'content',
            'initial-scale=1.0001, minimum-scale=1.0001, maximum-scale=1.0001, user-scalable=no'
          );
      }
    function RESTget(url) {
        var xmlHttp = new XMLHttpRequest();
        xmlHttp.open( "GET", url, false );
        xmlHttp.send( null );
        return JSON.parse(xmlHttp.responseText);
    }
    
    $(document).ready(function() {
    
      var payeeName = RSBP_CONFIG.payee.name;
      var address = RSBP_CONFIG.payee.address;
      var currency = RSBP_CONFIG.payee.currency;
      var amount = RSBP_CONFIG.payee.amount;
      var discount = RSBP_CONFIG.payee.discount;
    
      $('#currency').text(currency);
      $("#input_form").val(amount);
    
            // get rate from bitcoin average every minute
    
            var rate = 1;
            if (currency != "BTC") {
              setInterval((function() {
                  $.ajax("https://api.bitcoinaverage.com/ticker/"+currency+"/last").done(function(x) {
                      rate = x * (1 + discount);
                      $("#order").removeAttr("disabled");
                      });
                  })(), 1000*60);
            } else {
              $("#order").removeAttr("disabled");
            }
    
            $("#order").click(function(e){
                var invoiceID = Math.floor(Math.random() * (900000 - 100000 + 1)) + 100000;
    
                amount = $("#input_form").val();
                if (payeeName) {
                  var payment_uri = 'bitcoin:'+address+'?amount='+(amount/rate).toFixed(8)+'&message=invoice'+invoiceID+'&label='+payeeName;
                } else {
                  var payment_uri = 'bitcoin:'+address+'?amount='+(amount/rate).toFixed(8);
                }
                $('#qrcode').html("");  // reset from previous qrcode
                $('#qrcode').qrcode(payment_uri);
                $('#qrcode-text').text(payment_uri);
                $('#qrcode-text').attr("href", payment_uri);
    
                if (currency != "BTC") {
                  $('#exchange_rate').text('Rate 1 BTC = ' + rate.toLocaleString() + ' ' + currency);
                  $('#total_price').text('Total ' + amount.toLocaleString() + ' ' + currency + ' (' +
                        (amount/rate).toFixed(8) + ' BTC)' );
                } else {
                  $('#total_price').text('Total ' + amount.toLocaleString() + ' BTC');
                }
    
                $("#payment_confirmation").modal('toggle');
    
                // waiting animation
                $("#myModalLabel").text("Waiting for payment");
                var ellipsis = setInterval(function(){
                    for (i = 1; i <= 3; i++) {
                    setTimeout(function() {
                        $("#myModalLabel").append(".");
                        }, i * 250);
                    }
                    $("#myModalLabel").text("Waiting for payment");
                    },1000);
    
                var initial_balance = RESTget("https://blockchain.info/q/addressbalance/"+address+"?cors=true");
                var blockchain_check = setInterval(function() {
                        balance = RESTget("https://blockchain.info/q/addressbalance/"+address+"?cors=true");
                        if (balance > initial_balance) {
                          if ((balance - initial_balance - (amount/rate).toFixed(8)) > 0) {
                            clearInterval(blockchain_check);
                            clearInterval(ellipsis);
                            $("#myModalLabel").text();
                            $("#myModalLabel").append('<div class="alert alert-success"><strong>Success!</strong> The payment has been received.</div>');
                            let formData = new FormData();
                            formData.append('plan', this.rate);
                            axios.post('/upgrade/plan', formData).then(response => {
                                    Swal.fire({
                                        icon: 'success',
                                        title: 'Pament Success',
                                    });
                            });
                          } else {
                            clearInterval(blockchain_check);
                            clearInterval(ellipsis);
                            $("#myModalLabel").text("Amount received is insufficient");
    
                            // close after modal 1 s
                            setTimeout(function(){$("#close-model").trigger('click');}, 1000);
                            $("#input_form").val(amount/rate - rate*(balance - initial_balance));
                            $("#order").trigger('click')
                          }
                        }
                        }, 5*1000);
    
             });
    
            // interpret <enter> keypress as click on the 'order' button
            $('#input_form').keyup(function (e) {
                    if(e.which == 13) {
                    $('#order').trigger('click');
                    }
                    });
    
            $("#close-modal").click(function(e){
                    clearInterval(blockchain_check);
                    });
            $('#payment_confirmation').on('hidden.bs.modal', function () {
                    clearInterval(blockchain_check);
                    });
    });

            $("#register-form").hide();

                if(localStorage.getItem('lang') != 'fa' && localStorage.getItem('lang') != 'en'){
                    localStorage.setItem('lang', 'fa');
                }




            
        this.AutoLogin();
        // this.Check();
        },
        methods: {
            CloseWindow() {
                $("#payment-access").hide();
                $("#pay-acc").fadeIn();
            },
        
            AutoLogin() {
            let formData = new FormData();
            formData.append('id', localStorage.getItem('auth'));
            axios.post('/login/auto', formData).then(response => {
                // this.Check();
            });
        },
        Check() {
            axios.get('/fetch/user/data').then(response => {
                if(response.data.role == 1){
                    this.auth = true;
                }
                else if(response.data.role == 20){
                    this.auth = true;
                }
                else if(localStorage.getItem('auth') == null) {
                    this.auth = false;
                    window.location = '/login';
                }
                else {
                    this.AutoLogin();
                }
            });
        },
        },
    }
</script>

<style scoped>
    @media(max-width:767px){
        #select-resp {
            position:absolute;left:50%;transform:translateX(-50%);width:100%;
        }
    }
    @media(min-width:768px){
        #select-resp {
            position:absolute;left:50%;transform:translateX(-50%);width:50%;
        }
    }
</style>