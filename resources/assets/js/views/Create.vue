<template>
    <div>
        <div class="form">
            <p>ارسال سیگنال</p>
            <form @submit.prevent="Submit">
                <div class="form-group">
                    <label>ارز اول</label>
                    <select class="form-control" label="EUR" name="name" v-model="name">
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
                        <label> ارز دوم</label>
                    <select class="form-control" label="USD" name="pips" v-model="pips">
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
                <div class="form-group">
                    <v-text-field label="( 50 pip )" name="pip" v-model="pip"></v-text-field>
                </div>
                <div class="form-group">
                    <v-text-field label="Number" type="number" name="number" v-model="number"></v-text-field>
                </div>
                <div class="form-group">
                    <span class="green" v-ripple @click="Green">as</span>
                    <span class="red" v-ripple @click="Red">as</span>
                </div>
                <div class="form-group">
                    <v-text-field label="Buy Price" name="price" v-model="price"></v-text-field>
                </div>
                <div class="form-group">
                    <v-text-field label="stop Loss" name="stop" v-model="stop"></v-text-field>
                </div>
                <div class="form-group">
                    <v-text-field label="Take profit" name="profit" v-model="profit"></v-text-field>
                </div>
                <div class="form-group">
                    <button class="btn" style="background:green;color:white" v-ripple>ارسال</button>
                </div>
            </form>
        </div>
    </div>
</template>
<script>
import axios from 'axios';
import Swal from 'sweetalert2';
export default {
    data() {
        return {
            name: '',
            pip: '',
            price: '',
            stop: '',
            profit: '',
            status: '',
            pips:'',
        }
    },
    mounted() {
        this.Check();
    },
    methods: {
        Check() {
            axios.get('/fetch/user/data').then(response => {
                if(response.data.role == 20){
                    //
                }
                else {
                    window.location.href = '/';
                }
            });
        },
        Submit() {
            let formData = new FormData();
            formData.append('name', this.name);
            formData.append('number', this.number);
            formData.append('pip', this.pip);
            formData.append('price', this.price);
            formData.append('stop', this.stop);
            formData.append('profit', this.profit);
            formData.append('status', this.status);
            formData.append('pips', this.pips);
            axios.post('/save/signal', formData).then(response => {
                Swal.fire({
                        icon: 'success',
                        title: 'سیگنال با موفقیت ذخیره شد',
                        showConfirmButton: 'باشه',
                        dir: 'rtl',
                    });
                    this.name = '';
                    this.pip = '';
                    this.price = '';
                    this.stop = '';
                    this.profit = '';
                    this.status = '';
                    $(".red").css('box-shadow', 'none');
                    $(".green").css('box-shadow', 'none');
            });
        },
        Green() {
            $(".green").css('box-shadow', '0px 0px 0px 6px #00800054');
            $(".red").css('box-shadow', 'none');
            this.status = '#18c518c7';
        },
        Red() {
            $(".red").css('box-shadow', '0px 0px 0px 6px #80000054');
            $(".green").css('box-shadow', 'none');
            this.status = '#ff0000c9';
        }
    },
}
</script>