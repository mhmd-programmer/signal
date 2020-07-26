<template>
    <div>
        <div class="back">
            <video id="a" class="back-video" autoplay>
                <source src="/video/1.mp4" type="video/mp4">
            </video>
            <video id="b" class="back-video" autoplay loop>
                <source src="/video/2.mp4" type="video/mp4">
            </video>
            <video id="c" class="back-video" autoplay="false">
                <source src="/video/3.mp4" type="video/mp4">
            </video>
            <div v-ripple class="form" id="login-form">
                <p v-if="f" style="color:white;opacity:0.8">ورود به حساب کاربری</p>
                <p v-if="e" style="color:white;opacity:0.8">Login To Account</p>
                <form @submit.prevent="Login">
                    <div class="form-group">
                        <v-text-field :label="a" type="email" name="email" v-model="username"></v-text-field>
                    </div>
                    <div class="form-group">
                        <v-text-field :label="b" type="password" name="password" v-model="pass"></v-text-field>
                    </div>
                    <div class="form-group">
                        <button v-if="f" style="color:white" class="btn btn-insta" v-ripple>ورود</button>
                        <button v-if="e" style="color:white" class="btn btn-insta" v-ripple>Login</button>
                    </div>
                    <router-link v-if="f" to="/how-work" id="change-register" class="link decor"> چرا اینجاییم؟</router-link>
                    <router-link v-if="e" to="/how-work" id="change-register" class="link decor">Why are we?</router-link>
                </form>
            </div>
            
            <div class="lang">
                <img style="cursor:pointer;width:57px;border-radius:6px" v-if="en" @click="changeEN" src="/img/english.jpg" class="img-fluid">
                <img style="cursor:pointer;width:57px;border-radius:6px" v-if="fa" @click="changeFA" src="/img/iran.jpg" class="img-fluid">
            </div>
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
                email: '',
                password: '',
                passwords: '',
                username: '',
                pass: '',
                auto: false,
                en: true,
                fa: false,
                f: true,
                e: false,
                a: 'ایمیل',
                b: 'کلمه عبور',
                c: 'نام',
                d: 'ایمیل',
                h: 'کلمه عبور',
                g: 'تکرار کلمه عبور',
                check: '',
            }
        },
        mounted() {
            $("#b").hide();
            $("#c").hide();
            $("#register-form").hide();
-
            $("#change-register").click(function(){
                $("#login-form").fadeOut();
                $("#register-form").fadeIn();
            });
            $("#change-login").click(function(){
                $("#register-form").fadeOut();
                $("#login-form").fadeIn();
            });

            this.Check();

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

               setTimeout(() => {
                    $("#a").hide();
                    $("#b").show();
                }, 7000); 
            // this.changeVideo();
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
            
            Login() {
            let formData = new FormData();
            formData.append('email', this.username);
            formData.append('password', this.pass);
            axios.post('/login', formData).then(response => {
                this.fetchUserId();
                $("#a").attr("src", "/video/3.mp4");
                    $("#b").hide();
                    $("#a").show();
                    if(localStorage.getItem('lang') == 'en'){
                        Swal.fire({
                        icon: 'success',
                        title: 'Login Successful',
                        timer: 2000,
                        timerProgressBar: true,
                        showConfirmButton: false,
                    });
                    }
                    else {
                        Swal.fire({
                        icon: 'success',
                        title: 'شما با موفقیت وارد شدید',
                        dir: 'rtl',
                        timer: 2000,
                        timerProgressBar: true,
                        showConfirmButton: false,
                    });
                    } setTimeout(() => {
                        window.location = '/';
                    }, 5000);
            }).catch(error => {
                if(localStorage.getItem('lang') == 'en'){
                    Swal.fire({
                        icon: 'error',
                        title: 'Login Error!',
                        timer: 2000,
                        timerProgressBar: true,
                        showConfirmButton: false,
                    });
                }
                else {
                    Swal.fire({
                        icon: 'error',
                        title: 'ایمیل یا کلمع عبور شما اشتباه است',
                        dir: 'rtl',
                        timer: 2000,
                        timerProgressBar: true,
                        showConfirmButton: false,
                });
                }
                });
        },
        fetchUserId(){
            axios.get('/fetch/user/id').then(response => {
                localStorage.setItem('auth', response.data);
            });
        },
        Check() {
            axios.get('/fetch/user/data').then(response => {
                if(response.data.role == 1){
                    window.location = '/';
                }
                if(response.data.role == 20){
                    window.location = '/';
                }
                else {
                    this.check = '0';
                    this.AutoLogin();
                }
            });
        },
        AutoLogin() {
            if(localStorage.getItem('auth') == null){
                console.log('Not Auth');
            }
                if(this.check == '0') {
                let formData = new FormData();
                formData.append('id', localStorage.getItem('auth'));
                axios.post('/login/auto', formData).then(response => {
                    this.Check();
                    
                });
            }
        },
        },
    }
</script>

<style scoped>
    .decor:hover {
        color: #0095ff;
        text-decoration: none;
    }
</style>