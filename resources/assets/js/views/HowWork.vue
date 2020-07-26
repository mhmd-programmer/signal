<template>
    <div>
        <div v-ripple class="forms bstni">
                <p v-if="f" style="color:black;opacity:0.8">ثبت نام</p>
                <p v-if="e" style="color:black;opacity:0.8">reqister</p>
                <form @submit.prevent="Register">
                    <div class="form-group">
                        <v-text-field :label="c" name="name" v-model="name"></v-text-field>
                    </div>
                    <div class="form-group">
                        <v-text-field :label="d" type="email" name="email" v-model="email"></v-text-field>
                    </div>
                    <div class="form-group">
                        <v-text-field :label="h" type="password" name="password" v-model="password"></v-text-field>
                    </div>
                    <div class="form-group">
                        <v-text-field :label="g" type="password" name="confirmation_password" v-model="passwords"></v-text-field>
                    </div>
                    <div class="form-group">
                        <button v-if="f" style="color:white" class="btn btn-insta" v-ripple>ثبت نام</button>
                        <button v-if="e" style="color:white" class="btn btn-insta" v-ripple>Reqister</button>
                        
                    </div>
                </form>
            </div>
            <div @click="Close" id="back" style="background:rgba(0, 0, 0, 0.34);position:fixed;left:0;top:0;right:0;bottom:0;width:100%;height:100%;z-index:9"></div>
        <div class="background">
            <span></span>
            <span></span>
            <span></span>
            <span></span>

            <p v-if="f" style="text-align:right" class="p-head">چرا اینجاییم؟؟</p>
            <p v-if="e" class="p-heads" dir="ltr">Why are we here ?! </p>
            <p v-if="f" style="text-align:right;margin-top:90px ;width:95%" dir="rtl">
              من سيد مهدى حسينى كار آفرين و فعال حوزه هاى مالى و مدير شركت گاما همراه تيمم براى ساده و راحت تر كردن معاملات در بازارهاى فاركس و ارزهاى ديجيتال سيگنال هاى مطمئنى را در اختیار كاربران قرار ميدهيم.
            </p>
            <p dir="ltr" v-if="e" style="margin-top:90px ;width:95%">
                I am Seyed Mehdi hosseini Entrepreneur and Active in the financial field and a chairman of GAMA company . 
Me and my team are here to make the forex and digital currencies bargain more easier and we give you trusted signals.
            </p>
            <p v-if="f" style="text-align:right;margin-top:0; width:95%">
                هدف اصلى اين مجموعه بالا بردن اطلاعات كاربران در مورد بازارهاى مالى ميباشد و نتيجه اى كه قراره ما هر روز از اين بازارا بگيريم:      
                <br>
                ١- حفظ سرمايه اوليه
                <br>
                ٢- دريافت سودهاى پلّه اى
            </p>
            <p dir="ltr" v-if="e" style="margin-top:0; width:95%">
Our company main goal is to give our members more information about financial market and The result that we are supposed to get every day in this market : 
                <br>
                -Save the first investment 
                <br>
                -Receiving profit step by step ( each step ) 
            </p>
            <p v-if="f" style="text-align:right;margin-top:-4px; width:95%">
                شما فقط با ثبت نام كردن داخل سايت ما هر روز يك سيگنال رايگان با سود مطمئن ٥٠+ پيپ دريافت ميكنيد.
                <br>
                راستى !! حتى بعد از تهيه اشتراك از ما ، به هر دليلى از زمان خريد تا يك هفته فرصت داريد ٨٠٪؜ از مبلغ پرادختى خود دريافت كرده و اشتراك خود را لغو كنيد.
                
            </p>
            <p dir="ltr" v-if="e" style="margin-top:-4px; width:95%">
                You just need to register in our website , everyday you will receive 1 signal with  Reliable profit and 50+ pip .
Oh I almost forgot !! (By the way!!) 
                <br>
                Even after registered with us , for any reason from the time of purchase you have the opportunity to receive 80% of your peyment , and cancel your subscription.
                
            </p>
            <p v-if="f" style="text-align:right;width:95%;">
                شما اومديد اينجا پول در بياريد ، ما هم اومديم اينجا پول در بياريم؛
            </p>
            <p dir="ltr" v-if="e" style="width:95%; ">
                You came here to make money , We came here to make money also .
            </p>
            <button @click="Open" v-if="f" style="text-align:right;background:white;color:#1779ff;border:1px solid;float:right;margin:14px 62px 0 0" class="btn" v-ripple>همین الان ثبت نام کن</button>
            <button @click="Open" v-if="e" class="btn" style="background:white;color:#1779ff;border:1px solid" v-ripple>Now Register</button>
            <br>    
        </div>
        <div class="lang">
            <img style="cursor:pointer;width:57px;border-radius:6px" v-if="en" @click="changeEN" src="/img/english.jpg" class="img-fluid" v-ripple>
            <img style="cursor:pointer;width:57px;border-radius:6px" v-if="fa" @click="changeFA" src="/img/iran.jpg" class="img-fluid" v-ripple>
        </div>
    </div>
</template>
<script>
import axios from 'axios';
import Swal from 'sweetalert2';
export default {
        data() {
            return {
                e: false,
                f: false,
                en: false,
                fa: false,
                a: 'ایمیل',
                b: 'کلمه عبور',
                c: 'نام',
                d: 'ایمیل',
                h: 'کلمه عبور',
                g: 'تکرار کلمه عبور',
                name: '',
                email: '',
                password: '',
                passwords: '',
                username: '',
                pass: '',
            }
        },
        mounted() {
            $(".forms").css('display', 'none');
            $("#back").hide();

            if(localStorage.getItem('lang') == 'en'){
                this.en = false;
                this.fa = true;
                this.f = false;
                this.e = true;
                this.a = 'Email';
                this.b = 'Password';
                this.c = 'Name';
                this.d = 'Email';
                this.h = 'Password';
                this.g = 'Confirm Password';
                localStorage.setItem('lang', 'en');
            }
            else {
                this.en = true;
                this.fa = false;
                this.f = true;
                this.e = false;
                this.a = 'ایمیل';
                this.b = 'کلمه عبور';
                this.c = 'نام';
                this.d = 'ایمیل';
                this.h = 'کلمه عبور';
                this.g = 'تکرار کلمه عبور';
                localStorage.setItem('lang', 'fa');
            }
        },
        methods: {
            changeEN() {
                this.en = false;
                this.fa = true;
                this.f = false;
                this.e = true;
                this.a = 'Email';
                this.b = 'Password';
                this.c = 'Name';
                this.d = 'Email';
                this.h = 'Password';
                this.g = 'Confirm Password';
                localStorage.setItem('lang', 'en');
            },
            changeFA() {
                this.en = true;
                this.fa = false;
                this.f = true;
                this.e = false;
                this.a = 'ایمیل';
                this.b = 'کلمه عبور';
                this.c = 'نام';
                this.d = 'ایمیل';
                this.h = 'کلمه عبور';
                this.g = 'تکرار کلمه عبور';
                localStorage.setItem('lang', 'fa');
            },
            Register() {
                let formData = new FormData();
                formData.append('name', this.name);
                formData.append('email', this.email);
                formData.append('password', this.password);
                formData.append('password_confirmation', this.passwords);
                axios.post('/register', formData).then(response => {
                    if(localStorage.getItem('lang') == 'en'){
                        Swal.fire({
                        icon: 'success',
                        title: 'Register Successfuly! Plz Confirm Email',
                    });
                    }
                    else {
                        Swal.fire({
                        icon: 'success',
                        title: 'ثبت نام شما با موفقیت انجام شد لطفا ایمیل خود را تایید کنید',
                        dir: 'rtl',
                    });
                    } setTimeout(() => {
                        window.location = '/login';
                    }, 2000);
                }).catch(error => {
                    if(localStorage.getItem('lang') == 'en'){
                        Swal.fire({
                        icon: 'error',
                        title: 'Not Registred Yet, Plz Check Form Data',
                    });
                    }
                    else {
                        Swal.fire({
                        icon: 'error',
                        title: 'اطلاعات وارد شده رابررسی کنید، ممکنه ایمیل تکراری باشه یا کلمه عبور تطابق نداشته باشه',
                        dir: 'rtl',
                    });
                    }
                    
                    
                });
            },
            
        Open() {
            $(".forms").fadeIn();
            $("#back").fadeIn();
        },
        Close() {
            $(".forms").fadeOut();
            $("#back").fadeOut();
        },
        },
}
</script>
<style scoped>
@media(max-width:767px){
    .background{
    color: #3e3b3b;
    font-weight: 600;
    width: 100%;
    letter-spacing: 1px;
    height: 100%;
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50% , -50%);
    /* box-shadow: 0 20px 50px rgba(0, 0, 0, .5); */
    
    padding: 20px;
    
}
}
@media(min-width:768px){
    .background{
    color: #3e3b3b;
    font-weight: 600;
    width: 60%;
    letter-spacing: 1px;
    height: 600px;
    position: absolute;
    top: 50%;
    left: 50%;
    background-color: #eeeeee;
    transform: translate(-50% , -50%);
    box-shadow: 0 20px 50px rgba(0, 0, 0, .5);
    overflow: hidden;
    
    padding: 20px;
    
}
.background span:nth-child(3){
    position: absolute;
    bottom: 0;
    right: 0;
    width: 90%;
    height: 4px;
    background: linear-gradient(to left,#0c002b,#1779ff);
    animation: animate3 4s linear infinite;
    animation-delay: 2s;
}
.background span:nth-child(1){
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 4px;
    background: linear-gradient(to right,#0c002b,#1779ff);
    animation: animate1 4s linear infinite;
    animation-delay: 2s;
}
@keyframes animate1
{
    0%{
        transform: translateX(-100%);
    }
    100%{
        transform: translateX(100%);
    }
}

.background span:nth-child(2){
    position: absolute;
    top: 0;
    right: 0;
    width: 4px;
    height: 100%;
    background: linear-gradient(to bottom,#0c002b,#1779ff);
    animation: animate2 4s linear infinite;
}

@keyframes animate2
{
    0%{
        transform: translateY(-100%);
    }
    100%{
        transform: translateY(100%);
    }
}


@keyframes animate3
{
    0%{
        transform: translateX(100%);
    }
    100%{
        transform: translateX(-100%);
    }
}
.background span:nth-child(4){
    position: absolute;
    top: 0;
    left:  0;
    width: 4px;
    height: 100%;
    background: linear-gradient(to top,#0c002b,#1779ff);
    animation: animate4 4s linear infinite;
    
}
@keyframes animate4
{
    0%{
        transform: translateY(100%);
    }
    100%{
        transform: translateY(-100%);
    }
}
}
.p-head{
    float: right;
    color: #3e3b3b;
    font-size: 25px;
    text-indent: -5px;
    font-weight: 800;
    margin-right: 15px;
}
.p-heads{
    float: left;
    color: #3e3b3b;
    font-size: 25px;
    text-indent: -5px;
    font-weight: 800;
    margin-left: 15px;
}



</style>