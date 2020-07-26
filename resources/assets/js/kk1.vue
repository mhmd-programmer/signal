<template>
    <div>
       <div class="form-signal">
            <div class="card-header text-center" style="color:white;">
                <h3 class="card-title" style="font-weight:0;text-shadow: 2px 1px 4px white;">panel Admin </h3>
                <h5 class="description" style="font-weight:0">Panel Admin Signal bedam</h5>
            </div>
            <div class="nav-btn">
                <div class="btn-container" id="cur-btn"><button class="btn-btn-cur"><i  class="fas fa-comments-dollar"></i></button>
                <br>    
                <p style="color:white; font-weight:400; font-size:13px;padding-top:8px ">CURRENCIES</p>
                </div>
                <div class="btn-container biner-btn"><button class="btn-btn-binery"><i class="fas fa-bold"></i> </button>
                <br>
                <p style="color:white; font-weight:400; font-size:13px;padding-top:8px ">BINERY OPTION</p>
                </div>
                <div class="btn-container " id="gold-btn"><button class="btn-btn-gold"> <i class="fas fa-coins"></i></button>
                <br>
                <p style="color:white; font-weight:400; font-size:13px;padding-top:8px ">GOLD</p>
                </div>
         
            </div>
            <form class="form-currencies">
                    
               <div class="currencies">
                    <select class=" arzha col-6 col-lg-3 col-md-3 col-sm-3" name="name" required>
                    <option selected>ONE CURRENCIE</option>
                    <option> EUR</option>
                    <option> USD</option>
                    <option> GBP</option>
                    <option> AUD</option>
                    <option> NZD</option>
                    <option> CAD</option>
                    <option> CHF</option>
                    <option> JPY</option>
                    <option> CNY</option>
                    <option> AED</option>
                    <option> TRY</option>
                    <option> SEK</option>
                    <option> KRW</option>
                    <option> SGD</option>
                    <option> SAR</option>
                    <option> RUB</option>
                    <option> QAR</option>
                    <option> PKR</option>
                    <option> KWD</option>
                    <option> IQD</option>
                    <option> HKD</option>
                    <option> DKK</option>
                    </select>
                    <select class=" arzha col-6 col-lg-3 col-md-3 col-sm-3" label="EUR" name="name" required >
                        <option selected>TWO CURRENCIE</option>
                    <option> EUR</option>
                    <option> USD</option>
                    <option> GBP</option>
                    <option> AUD</option>
                    <option> NZD</option>
                    <option> CAD</option>
                    <option> CHF</option>
                    <option> JPY</option>
                    <option> CNY</option>
                    <option> AED</option>
                    <option> TRY</option>
                    <option> SEK</option>
                    <option> KRW</option>
                    <option> SGD</option>
                    <option> SAR</option>
                    <option> RUB</option>
                    <option> QAR</option>
                    <option> PKR</option>
                    <option> KWD</option>
                    <option> IQD</option>
                    <option> HKD</option>
                    <option> DKK</option>
                    </select>
               </div>
               <div class="row" style="height:56%">
                    <div class="radio-container  col-12 col-sm-4 col-lg-4 col-md-4">
                        <div class="radiobuysell">
                               
                            <input type="radio" id="buy" name="gender" value="male">
                            <label for="buy">BUY</label><br>
                            <input type="radio" id="buylimit" name="gender" value="female">
                            <label for="buylimt">BUY LIMIT</label><br>
                            <input type="radio" id="buystop" name="gender" value="other">
                            <label for="buystop">BUY STOP</label><br>
                        
                        
                            <input type="radio" id="sell" name="gender" value="sell">
                            <label for="sell">SELL</label><br>
                            <input type="radio" id="selllimit" name="gender" value="selllimit">
                            <label for="selllimit">SELL LIMIT</label><br>
                            <input type="radio" id="sellstop" name="gender" value="sellstop">
                            <label for="sellstop">SELL STOP</label>
                        
                    </div>

               </div>
               <div class="table-container col-12 col-sm-4 col-lg-4 col-md-4" style="padding:0">
                   <div id="radioBtn">
                        
                        <input type="radio" id="adad1" name="gender1">
                            <label for="adad1">1</label><br>
                            <div class="check"></div>
                   </div>
                   <div id="radioBtn">
                        <input type="radio" id="adad2" name="gender1">
                            <label for="adad2">2</label><br>
                            <div class="check"></div>
                   </div>
                   <div id="radioBtn">
                        <input type="radio" id="adad3" name="gender1">
                            <label for="adad3">3</label><br>
                            <div class="check"></div>
                   </div>
                   <div id="radioBtn">
                        <input type="radio" id="adad4" name="gender1">
                            <label for="adad4">4</label><br>
                            <div class="check"></div>
                   </div>
                   <div id="radioBtn">
                        <input type="radio" id="adad5" name="gender1">
                            <label for="adad5">5</label><br>
                            <div class="check"></div>
                   </div>
                   <div id="radioBtn">
                        <input type="radio" id="adad6" name="gender1">
                            <label for="adad6">6</label><br>
                            <div class="check"></div>
                   </div>
                   <div id="radioBtn">
                        <input type="radio" id="adad7" name="gender1">
                            <label for="adad7">7</label><br>
                            <div class="check"></div>
                   </div>
                   <div id="radioBtn">
                        <input type="radio" id="adad8" name="gender1">
                            <label for="adad8">8</label><br>
                            <div class="check"></div>
                   </div>
                   <div id="radioBtn">
                        <input type="radio" id="adad9" name="gender1">
                            <label for="adad9">9</label><br>
                            <div class="check"></div>
                   </div>
                   <div id="radioBtn">
                        <input type="radio" id="adad10" name="gender1">
                            <label for="adad10">10</label><br>
                            <div class="check"></div>
                   </div>
                   <div id="radioBtn">
                        <input type="radio" id="adad11" name="gender1">
                            <label for="adad11">11</label><br>
                            <div class="check"></div>
                   </div>
                   <div id="radioBtn">
                        <input type="radio" id="adad12" name="gender1">
                            <label for="adad12">12</label><br>
                            <div class="check"></div>
                   </div>
                   <div id="radioBtn">
                        <input type="radio" id="adad13" name="gender1">
                            <label for="adad13">13</label><br>
                            <div class="check"></div>
                   </div>
                   <div id="radioBtn">
                        <input type="radio" id="adad14" name="gender1">
                            <label for="adad14">14</label><br>
                            <div class="check"></div>
                   </div>
                   <div id="radioBtn">
                        <input type="radio" id="adad15" name="gender1">
                            <label for="adad15">15</label><br>
                            <div class="check"></div>
                   </div>
               </div>

                <div class="table-container col-12 col-lg-4 col-md-4 col-sm-4">
                    <input class="inp-price" type="text" placeholder="PRICE">
                    <input class="inp-price" type="text" placeholder="STOP LOSS">
                    <input class="inp-price" type="text" placeholder="TAKE PROFIT">
                </div>
               </div>
               <button style="outline:none" class="send-btn-price" v-ripple>SEND</button>
            </form>
            <form class="form-gold">
                <h3 style="padding-top:20px">XAU/USD</h3>
                 <div class="table-container col-12 col-lg-6 col-md-6 col-sm-6" style="border-right:1px solid white">
                     <p>Short Time</p>
                    <input class="inp-price-gold" type="text" placeholder="PRICE"><br>
                    <input class="inp-price-gold" type="text" placeholder="STOP LOSS"><br>
                    <input class="inp-price-gold" type="text" placeholder="TAKE PROFIT"><br>
                 <div id="radioBtn" style="width:20%">
                        
                        <input type="radio" id="adada1" name="gender">
                            <label for="adada1">1</label><br>
                            <div class="check"></div>
                   </div>
                   <div id="radioBtn" style="width:20%">
                        <input type="radio" id="adada2" name="gender">
                            <label for="adada2">2</label><br>
                            <div class="check"></div>
                   </div>
                   <div id="radioBtn" style="width:20%">
                        <input type="radio" id="adada3" name="gender">
                            <label for="adada3">3</label><br>
                            <div class="check"></div>
                   </div>
                   <div id="radioBtn" style="width:20%">
                        <input type="radio" id="adada4" name="gender">
                            <label for="adada4">4</label><br>
                            <div class="check"></div>
                   </div>
                   <div id="radioBtn" style="width:20%">
                        <input type="radio" id="adada5" name="gender">
                            <label for="adada5">5</label><br>
                            <div class="check"></div>
                   </div>
                </div>
                 <div class="table-container col-12 col-lg-6 col-md-6 col-sm-6">
                     <p>Long Time</p>
                    <input class="inp-price-gold" type="text" placeholder="PRICE"><br>
                    <input class="inp-price-gold" type="text" placeholder="STOP LOSS"><br>
                    <input class="inp-price-gold" type="text" placeholder="TAKE PROFIT"><br>
                 <div id="radioBtn" style="width:20%" >
                        
                        <input type="radio" id="adadada1" name="gender2">
                            <label for="adadada1">1</label><br>
                            <div class="check"></div>
                   </div>
                   <div id="radioBtn" style="width:20%">
                        <input type="radio" id="adadada2" name="gender2">
                            <label for="adadada2">2</label><br>
                            <div class="check"></div>
                   </div>
                   <div id="radioBtn" style="width:20%">
                        <input type="radio" id="adadada3" name="gender2">
                            <label for="adadada3">3</label><br>
                            <div class="check"></div>
                   </div>
                   <div id="radioBtn" style="width:20%">
                        <input type="radio" id="adadada4" name="gender2">
                            <label for="adadada4">4</label><br>
                            <div class="check"></div>
                   </div>
                   <div id="radioBtn" style="width:20%">
                        <input type="radio" id="adadada5" name="gender2">
                            <label for="adadada5">5</label><br>
                            <div class="check"></div>
                   </div>
                </div>

                <button style="outline:none; width:20%; height:30px; margin-top:1% " class="send-btn-price" v-ripple>SEND</button>
            </form>
       </div>
    </div>
</template>
<script>

    export default {
        data() {
            return {
                name: 'home',

            }
        },
        mounted() {
            $('.form-gold').hide()
             $('.btn-btn-cur').css('backgroundColor' , '#3c0e67' )
                        $('.btn-btn-cur').css('color' , '#fff' )
                        $('.btn-btn-cur').css('border' , '2px solid #fff' )

            $(document).ready(
                
                function () {
                    $('#cur-btn').click(function(){
                        $('.form-currencies').fadeIn(2000)
                        $('.form-gold').hide(100)
                        $('.btn-btn-cur').css('backgroundColor' , '#3c0e67' )
                        $('.btn-btn-cur').css('color' , '#fff' )
                        $('.btn-btn-cur').css('border' , '2px solid #fff' )
                        $('.btn-btn-gold').css('backgroundColor' , '#fff' )
                        $('.btn-btn-gold').css('color' , '#3c0e67' )

                    })
                    
                    $('#gold-btn').click(function(){
                        $('.form-currencies').fadeOut(100)
                        $('.form-gold').fadeIn(2000)
                        $('.btn-btn-gold').css('backgroundColor' , '#3c0e67' )
                        $('.btn-btn-gold').css('color' , '#fff' )
                        $('.btn-btn-gold').css('border' , '2px solid #fff' )
                        $('.btn-btn-cur').css('backgroundColor' , '#fff' )
                        $('.btn-btn-cur').css('color' , '#3c0e67' )
                        $('.btn-btn-cur').css('border' , '2px solid #fff' )
                    })
                    $('.table-number').click(function(){
                    $('.table-number').toggleClass('table-table-1')

                    })
                }
            );

        }
    }
</script>
<style>
body{
    margin: 0;
    font-family: Poppins,sans-serif;
    font-size: .875rem;
    font-weight: 400;
    line-height: 1.5;
    color: #8a8f9c;
    text-align: left;
    background-color: #1e1e2f;
    cursor: url(/img/R_B.cur);
    
}
.form-signal{
    width: 60%;
    height: 90vh;
    position: absolute;
    left: 50%;
    top: 50%;
    transform: translate(-50%,-50%);
}
.btn-container{
    width: 33%;
    float: left;
    text-align: center;
}
.nav-btn{
    width: 100%;
    height: 14%;
    margin-top: 20px;
    margin-bottom:20px ;
}
.btn-container > button {
    width: 50px;
    height: 50px;
    outline: none;
    border-radius: 50%;
    background-color: white;
    font-size: 25px;
     color:#3c0e67
}
.btn-container > button:hover{
    background-color: #3c0e67;
    color: white;
    border: 2px solid #fff;
    transition: 1s;
}
.form-currencies{
    background: #222a42;
    width: 100%;
    height: 60%;
    text-align: center;
    border-radius:50px ;
}
.currencies{
    padding: 15px 30px 0 30px;    

}
.arzha{
    background-color: transparent;
    border: 1px solid dimgray;
    outline: none;
    height: 40px;
    font-size:11px ;
    font-weight: 600;
    margin: 3%;
    border-radius: 10px ;
}
.radiobuysell{
    float: left;
    position: relative;
    left: 30%;
    width: 50%;
   font-size:12px ;
   font-weight:700 ;
}
.radio-container{
   text-align:left;
    height: 100px;
}
.table-container{
    float: left;
  
}

.table-table-1{
    border: 2px solid violet;
    color: violet;
}
.inp-price{
    background-color: transparent;
    border: 1px solid dimgray;
    outline: none;
    height: 35px;
    font-size:11px ;
    font-weight: 600;
    margin: 3%;
    border-radius: 10px ;
    text-indent: 10px;

}
.send-btn-price{
    font-weight: 600;
    border: 1px solid;
    width: 16%;
    height: 40px;
    border-radius: 13px;
    color:#4af64a ;
    outline: none;
}
/* gold-form */
.form-gold{
      background: #222a42;
    width: 80%;
    height: 66%;
    text-align: center;
    border-radius:50px ;
    position: absolute;
    left: 50%;
    transform: translateX(-50%);
}
.inp-price-gold{
    background-color: transparent;
    border: 1px solid dimgray;
    outline: none;
    height: 35px;
    font-size:11px ;
    font-weight: 600;
    margin: 2%;
    border-radius: 10px ;
    text-indent: 10px;


}
#radioBtn{
    width: 25%;
    height: 16%;
    float: left;
}

#radioBtn > input[type=radio]{
  position: absolute;
  visibility: hidden;
}
#radioBtn label{
    position: relative;
    transform: translate(0%, 90%);
    z-index: 999    ;
}
#radioBtn .check{
  display: block;
  border: 1px solid #AAAAAA;
  border-radius: 100%;
  height: 35px;
  width: 35px;
  position: relative;
  left: 50%;
  top: 50%;
  transform: translate(-50%,-50%);
	z-index: 5;
	transition: border .25s linear;
	-webkit-transition: border .25s linear;
}
#radioBtn input[type=radio]:checked ~ .check {
  border: 5px solid #0DFF92;
}
#radioBtn input[type=radio]:checked ~ .check::before{
  background: #0DFF92;
}
.heart-rate {
  width: 150px;
  height: 73px;
  position: relative;
  margin: 20px auto;
}

.fade-in {
  position: absolute;
  width: 100%;
  height: 100%;
  background-color: #1e1e2f;
  top: 0;
  right: 0;
  animation: heartRateIn 2.5s linear infinite;
}

.fade-out {
  position: absolute;
  width: 120%;
  height: 100%;
  top: 0;
  left: -120%;
  animation: heartRateOut 2.5s linear infinite;
  background: #1e1e2f;
  background: -moz-linear-gradient(left, #1e1e2f 0%, #1e1e2f 50%, rgba(255, 255, 255, 0) 100%);
  background: -webkit-linear-gradient(left, #1e1e2f 0%, #1e1e2f 50%, rgba(255, 255, 255, 0) 100%);
  background: -o-linear-gradient(left, #1e1e2f 0%, #1e1e2f 50%, rgba(255, 255, 255, 0) 100%);
  background: -ms-linear-gradient(left, #1e1e2f 0%, #1e1e2f 50%, rgba(255, 255, 255, 0) 100%);
  background: linear-gradient(to right, #1e1e2f 0%, #1e1e2f 80%, rgba(255, 255, 255, 0) 100%);
}

@keyframes heartRateIn {
  0% {
    width: 100%;
  }
  50% {
    width: 0;
  }
  100% {
    width: 0;
  }
}

@keyframes heartRateOut {
  0% {
    left: -120%;
  }
  30% {
    left: -120%;
  }
  100% {
    left: 0;
  }
}


</style>