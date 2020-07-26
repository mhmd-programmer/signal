<template>
    <div style="background:#131722;position:absolute;height:100%;width:100%;">
			<Cadr></Cadr>
            
		

        <div class="setting" v-ripple>
            <router-link title="Settings" to="/settings" class="sett"><span v-ripple style="font-size:42px;cursor:pointer" class="far fa-sun"></span></router-link>
        </div>
        <div class="support" v-ripple>
            <router-link title="Support" to="/support" class="sett"><span v-ripple style="font-size:42px;cursor:pointer" class="far fa-user-headset"></span></router-link>
        </div>
		<div class="store" v-ripple>
            <router-link title="Store" to="/store" class="sett"><span v-ripple style="font-size:42px;cursor:pointer" class="far fa-shopping-cart"></span></router-link>
        </div>
		<div class="archive" v-ripple>
            <router-link title="Archive" to="/archive" class="sett"><span v-ripple style="font-size:42px;cursor:pointer" class="far fa-archive"></span></router-link>
        </div>
		<div class="work" v-ripple>
            <router-link title="How Work" to="/how-work" class="sett"><span v-ripple style="font-size:42px;cursor:pointer" class="far fa-kossher"></span></router-link>
        </div>
		<div class="targets" v-ripple>
            <router-link title="targets" to="/targets" class="sett"><span v-ripple style="font-size:42px;cursor:pointer" class="far fa-target"></span></router-link>
        </div>
    <div class="container-fluid" style="background:#131722">
        <div class="row">
            <div class="col-lg-2" style="padding:15px 0 15px 0;margin:0 15px 0 15px;position:relative">
            <div class="tradingview-widget-container">
                <div id="tradingview_a4878"></div>
            </div>
			<button id="Ahojkas" class="fast-eye" style="z-index:20"><span class="fas fa-eye"></span></button>
        </div>
        <div class="col-lg-2" style="padding:15px 0 15px 0;margin:0 15px 0 15px;position:relative">
            <div class="tradingview-widget-container">
  			<div id="tradingview_fb4de"></div>
		</div>
        <div v-if="silverlocka" style="position:absolute;top:0;left:0;width:100%;height:100%;background:rgba(0, 0, 0, 0.5)">
                <span class="fa fa-lock" style="color:white;position:absolute;left: 50%;top: 50%;font-size: 45px;transform: translate(-50%, -50%);"></span>
        </div>
		<button v-if="silvera" data-toggle="modal" data-target="#myModal" class="fast-eye" style="z-index:20"><span class="fas fa-eye"></span></button>
        </div>
        <div class="col-lg-2" style="padding:15px 0 15px 0;margin:0 15px 0 15px;position:relative">
            <div class="tradingview-widget-container">
                <div id="tradingview_cd5bc"></div>
            </div>
			<button v-if="silverb" data-toggle="modal" data-target="#myModal" class="fast-eye" style="z-index:20"><span class="fas fa-eye"></span></button>
            <div v-if="silverlockb" style="position:absolute;top:0;left:0;width:100%;height:100%;background:rgba(0, 0, 0, 0.5)">
                <span class="fa fa-lock" style="color:white;position:absolute;left: 50%;top: 50%;font-size: 45px;transform: translate(-50%, -50%);"></span>
            </div>
        </div>
        <div class="col-lg-2" style="padding:15px 0 15px 0;margin:0 15px 0 15px;position:relative">
            <div class="tradingview-widget-container">
                <div id="tradingview_26f12"></div>
            </div>
			<button v-if="golda" data-toggle="modal" data-target="#myModal" class="fast-eye" style="z-index:20"><span class="fas fa-eye"></span></button>
            <div  v-if="goldlocka" style="position:absolute;top:0;left:0;width:100%;height:100%;background:rgba(0, 0, 0, 0.5)">
                <span class="fa fa-lock" style="color:white;position:absolute;left: 50%;top: 50%;font-size: 45px;transform: translate(-50%, -50%);"></span>
            </div>
		</div>
		<div class="col-lg-2" style="padding:15px 0 15px 0;margin:0 15px 0 15px;position:relative">
			<div class="tradingview-widget-container">
  			<div id="tradingview_27a61"></div>
    	</div>
		<button v-if="goldb" data-toggle="modal" data-target="#myModal" class="fast-eye" style="z-index:20"><span class="fas fa-eye"></span></button>
        <div v-if="goldlockb" style="position:absolute;top:0;left:0;width:100%;height:100%;background:rgba(0, 0, 0, 0.5)">
                <span class="fa fa-lock" style="color:white;position:absolute;left: 50%;top: 50%;font-size: 45px;transform: translate(-50%, -50%);"></span>
            </div>
		</div>
        <div class="col-lg-2" style="visibility:hidden"></div>
        </div>
    </div>
	<div class="container-fluid" style="background:#131722">
		<div class="row">
            <div class="col-lg-2" style="padding:15px 0 15px 0;margin:0 15px 0 15px;position:relative">
				<div class="tradingview-widget-container">
  					<div id="tradingview_5664a"></div>
				</div>
				<button v-if="goldc" data-toggle="modal" data-target="#myModal" class="fast-eye" style="z-index:20"><span class="fas fa-eye"></span></button>
                <div v-if="goldlockc" style="position:absolute;top:0;left:0;width:100%;height:100%;background:rgba(0, 0, 0, 0.5)">
                    <span class="fa fa-lock" style="color:white;position:absolute;left: 50%;top: 50%;font-size: 45px;transform: translate(-50%, -50%);"></span>
                </div>
			</div>
		
			<div class="col-lg-2" style="padding:15px 0 15px 0;margin:0 15px 0 15px;position:relative">
				<div class="tradingview-widget-container">
  					<div id="tradingview_565ef"></div>
				</div>
				<button v-if="goldd" data-toggle="modal" data-target="#myModal" class="fast-eye" style="z-index:20"><span class="fas fa-eye"></span></button>
                <div v-if="goldlockd" style="position:absolute;top:0;left:0;width:100%;height:100%;background:rgba(0, 0, 0, 0.5)">
                <span class="fa fa-lock" style="color:white;position:absolute;left: 50%;top: 50%;font-size: 45px;transform: translate(-50%, -50%);"></span>
            </div>
			</div>
		
			<div class="col-lg-2" style="padding:15px 0 15px 0;margin:0 15px 0 15px;position:relative">
				<div class="tradingview-widget-container">
  					<div id="tradingview_b3eca"></div>
				</div>
				<button v-if="diamonda" data-toggle="modal" data-target="#myModal" class="fast-eye" style="z-index:20"><span class="fas fa-eye"></span></button>
                <div v-if="diamondlocka" style="position:absolute;top:0;left:0;width:100%;height:100%;background:rgba(0, 0, 0, 0.5)">
                <span class="fa fa-lock" style="color:white;position:absolute;left: 50%;top: 50%;font-size: 45px;transform: translate(-50%, -50%);"></span>
            </div>
			</div>
		
			<div class="col-lg-2" style="padding:15px 0 15px 0;margin:0 15px 0 15px;position:relative">
				<div class="tradingview-widget-container">
  					<div id="tradingview_39c7f"></div>
				</div>
				<button v-if="diamondb" data-toggle="modal" data-target="#myModal" class="fast-eye" style="z-index:20"><span class="fas fa-eye"></span></button>
                <div v-if="diamondlockb" style="position:absolute;top:0;left:0;width:100%;height:100%;background:rgba(0, 0, 0, 0.5)">
                <span class="fa fa-lock" style="color:white;position:absolute;left: 50%;top: 50%;font-size: 45px;transform: translate(-50%, -50%);"></span>
            </div>
			</div>
		
			<div class="col-lg-2" style="padding:15px 0 15px 0;margin:0 15px 0 15px;position:relative">
				<div class="tradingview-widget-container">
  					<div id="tradingview_48291"></div>
				</div>
				<button v-if="diamondc" data-toggle="modal" data-target="#myModal" class="fast-eye" style="z-index:20"><span class="fas fa-eye"></span></button>
                <div v-if="diamondlockc" style="position:absolute;top:0;left:0;width:100%;height:100%;background:rgba(0, 0, 0, 0.5)">
                <span class="fa fa-lock" style="color:white;position:absolute;left: 50%;top: 50%;font-size: 45px;transform: translate(-50%, -50%);"></span>
            </div>
			</div>
            <div class="col-lg-2" style="visibility:hidden"></div>
        </div>
	</div>
	<div class="container-fluid" style="background:#131722">
		<div class="row">
            <div class="col-lg-2" style="padding:15px 0 15px 0;margin:0 15px 0 15px;position:relative">
				<div class="tradingview-widget-container">
  					<div id="tradingview_7824e"></div>
				</div>
				<button v-if="diamondd" data-toggle="modal" data-target="#myModal" class="fast-eye" style="z-index:20"><span class="fas fa-eye"></span></button>
                <div v-if="diamondlockd" style="position:absolute;top:0;left:0;width:100%;height:100%;background:rgba(0, 0, 0, 0.5)">
                <span class="fa fa-lock" style="color:white;position:absolute;left: 50%;top: 50%;font-size: 45px;transform: translate(-50%, -50%);"></span>
            </div>
			</div>
		
			<div class="col-lg-2" style="padding:15px 0 15px 0;margin:0 15px 0 15px;position:relative">
				<div class="tradingview-widget-container">
  					<div id="tradingview_27410"></div>
				</div>
				<button v-if="diamonde" data-toggle="modal" data-target="#myModal" class="fast-eye" style="z-index:20"><span class="fas fa-eye"></span></button>
                <div v-if="diamondlocke" style="position:absolute;top:0;left:0;width:100%;height:100%;background:rgba(0, 0, 0, 0.5)">
                <span class="fa fa-lock" style="color:white;position:absolute;left: 50%;top: 50%;font-size: 45px;transform: translate(-50%, -50%);"></span>
            </div>
			</div>
		
			<div class="col-lg-2" style="padding:15px 0 15px 0;margin:0 15px 0 15px;position:relative">
				<div class="tradingview-widget-container">
  					<div id="tradingview_2e41a"></div>
				</div>
				<button v-if="diamondf" data-toggle="modal" data-target="#myModal" class="fast-eye" style="z-index:20"><span class="fas fa-eye"></span></button>
                <div v-if="diamondlockf" style="position:absolute;top:0;left:0;width:100%;height:100%;background:rgba(0, 0, 0, 0.5)">
                <span class="fa fa-lock" style="color:white;position:absolute;left: 50%;top: 50%;font-size: 45px;transform: translate(-50%, -50%);"></span>
            </div>
			</div>
		
			<div class="col-lg-2" style="padding:15px 0 15px 0;margin:0 15px 0 15px;position:relative">
				<div class="tradingview-widget-container">
  					<div id="tradingview_2b211"></div>
				</div>
				<button v-if="diamondg" data-toggle="modal" data-target="#myModal" class="fast-eye" style="z-index:20"><span class="fas fa-eye"></span></button>
                <div v-if="diamondlockg" style="position:absolute;top:0;left:0;width:100%;height:100%;background:rgba(0, 0, 0, 0.5)">
                <span class="fa fa-lock" style="color:white;position:absolute;left: 50%;top: 50%;font-size: 45px;transform: translate(-50%, -50%);"></span>
            </div>
			</div>
		
			<div class="col-lg-2" style="padding:15px 0 15px 0;margin:0 15px 0 15px;position:relative">
				<div class="tradingview-widget-container">
  					<div id="tradingview_3c129"></div>
				</div>
				<button v-if="diamondh" data-toggle="modal" data-target="#myModal" class="fast-eye" style="z-index:20"><span class="fas fa-eye"></span></button>
                <div v-if="diamondlockh" style="position:absolute;top:0;left:0;width:100%;height:100%;background:rgba(0, 0, 0, 0.5)">
                <span class="fa fa-lock" style="color:white;position:absolute;left: 50%;top: 50%;font-size: 45px;transform: translate(-50%, -50%);"></span>
            </div>
			</div>
            <div class="col-lg-2" style="visibility:hidden"></div>
        </div>
	</div>	
    
</div>
</template>
<script>
import axios from 'axios';
import TableFree from './TableFree';
import TableSilver from './TableSilver';
import TableGold from './TableGold';
import TableDiamond from './TableDiamond';
import Cadr from './Cadr';
export default {
    components: { TableFree, TableSilver, TableGold, TableDiamond, Cadr },
    data() {
        return {
			time: '',
			date: '',
			city: '',
			signals: [],
            auth: false,
            free: false,
            silver: false,
            gold: false,
            diamond: false,
			dialog:false,
            eye:false,
			silverlocka: true,
			silvera: false,
			silverlockb: true,
			silverb: false,
			goldlocka: true,
			golda: false,
			goldlockb: true,
			goldb: false,
			goldlockc: true,
			goldc: false,
			goldlockd: true,
			goldd: false,
			diamondlocka: true,
			diamonda: false,
			diamondlockb: true,
			diamondb: false,
			diamondlockc: true,
			diamondc: false,
			diamondlockd: true,
			diamondd: false,
			diamondlocke: true,
			diamonde: false,
			diamondlockf: true,
			diamondf: false,
			diamondlockg: true,
			diamondg: false,
			diamondlockh: true,
			diamondh: false,
        }
	},
	created() {
		$(".change-pass").hide();
        $("#back").hide();
        $("#myModal").css('display', 'hidden');
	},

    mounted(){
        
        $(".fast-eye").click(function(){
            $("#myModal").fadeIn();
        });
		
	new TradingView.widget(
  {
  "autosize": true,
  "symbol": "OANDA:EURUSD",
  "interval": "D",
  "timezone": "Etc/UTC",
  "theme": "dark",
  "style": "1",
  "locale": "en",
  "toolbar_bg": "#f1f3f6",
  "enable_publishing": false,
  "hide_top_toolbar": true,
  "allow_symbol_change": true,
  "container_id": "tradingview_a4878"
},
  );
  new TradingView.widget(
  {
  "autosize": true,
  "symbol": "FX_IDC:USDEUR",
  "interval": "D",
  "timezone": "Etc/UTC",
  "theme": "dark",
  "style": "1",
  "locale": "en",
  "toolbar_bg": "#f1f3f6",
  "enable_publishing": false,
  "hide_top_toolbar": true,
  "allow_symbol_change": true,
  "container_id": "tradingview_fb4de"
}
  );
  new TradingView.widget(
  {
  "autosize": true,
  "symbol": "OANDA:GBPUSD",
  "interval": "D",
  "timezone": "Etc/UTC",
  "theme": "dark",
  "style": "1",
  "locale": "en",
  "toolbar_bg": "#f1f3f6",
  "enable_publishing": false,
  "hide_top_toolbar": true,
  "allow_symbol_change": true,
  "container_id": "tradingview_cd5bc"
}
  );
  new TradingView.widget(
  {
  "autosize": true,
  "symbol": "OANDA:USDTRY",
  "interval": "D",
  "timezone": "Etc/UTC",
  "theme": "dark",
  "style": "1",
  "locale": "en",
  "toolbar_bg": "#f1f3f6",
  "enable_publishing": false,
  "hide_top_toolbar": true,
  "allow_symbol_change": true,
  "container_id": "tradingview_26f12"
}
  );
    new TradingView.widget(
  {
  "autosize": true,
  "symbol": "OANDA:USDCAD",
  "interval": "D",
  "timezone": "Etc/UTC",
  "theme": "dark",
  "style": "1",
  "locale": "en",
  "toolbar_bg": "#f1f3f6",
  "enable_publishing": false,
  "allow_symbol_change": true,
  "container_id": "tradingview_27a61"
}
  );
  new TradingView.widget(
  {
  "autosize": true,
  "symbol": "FX_IDC:JPYEUR",
  "interval": "D",
  "timezone": "Etc/UTC",
  "theme": "dark",
  "style": "1",
  "locale": "en",
  "toolbar_bg": "#f1f3f6",
  "enable_publishing": false,
  "allow_symbol_change": true,
  "container_id": "tradingview_5664a"
}
  );
   new TradingView.widget(
  {
  "autosize": true,
  "symbol": "FX_IDC:DKKEUR",
  "interval": "D",
  "timezone": "Etc/UTC",
  "theme": "dark",
  "style": "1",
  "locale": "en",
  "toolbar_bg": "#f1f3f6",
  "enable_publishing": false,
  "allow_symbol_change": true,
  "container_id": "tradingview_565ef"
}
  );
  new TradingView.widget(
  {
  "autosize": true,
  "symbol": "CURRENCYCOM:CHFRUB",
  "interval": "D",
  "timezone": "Etc/UTC",
  "theme": "dark",
  "style": "1",
  "locale": "en",
  "toolbar_bg": "#f1f3f6",
  "enable_publishing": false,
  "allow_symbol_change": true,
  "container_id": "tradingview_b3eca"
}
  );
  new TradingView.widget(
  {
  "autosize": true,
  "symbol": "FX_IDC:TRYEUR",
  "interval": "D",
  "timezone": "Etc/UTC",
  "theme": "dark",
  "style": "1",
  "locale": "en",
  "toolbar_bg": "#f1f3f6",
  "enable_publishing": false,
  "allow_symbol_change": true,
  "container_id": "tradingview_39c7f"
}
  );
  new TradingView.widget(
  {
  "autosize": true,
  "symbol": "FX_IDC:AEDAUD",
  "interval": "D",
  "timezone": "Etc/UTC",
  "theme": "dark",
  "style": "1",
  "locale": "en",
  "toolbar_bg": "#f1f3f6",
  "enable_publishing": false,
  "allow_symbol_change": true,
  "container_id": "tradingview_48291"
}
  );
  new TradingView.widget(
  {
  "autosize": true,
  "symbol": "CURRENCYCOM:SEKTRY",
  "interval": "D",
  "timezone": "Etc/UTC",
  "theme": "dark",
  "style": "1",
  "locale": "en",
  "toolbar_bg": "#f1f3f6",
  "enable_publishing": false,
  "allow_symbol_change": true,
  "container_id": "tradingview_7824e"
}
  );
  new TradingView.widget(
  {
  "autosize": true,
  "symbol": "FX_IDC:KRWUSD",
  "interval": "D",
  "timezone": "Etc/UTC",
  "theme": "dark",
  "style": "1",
  "locale": "en",
  "toolbar_bg": "#f1f3f6",
  "enable_publishing": false,
  "allow_symbol_change": true,
  "container_id": "tradingview_27410"
}
  );
  new TradingView.widget(
  {
  "autosize": true,
  "symbol": "OANDA:SGDJPY",
  "interval": "D",
  "timezone": "Etc/UTC",
  "theme": "dark",
  "style": "1",
  "locale": "en",
  "toolbar_bg": "#f1f3f6",
  "enable_publishing": false,
  "allow_symbol_change": true,
  "container_id": "tradingview_2e41a"
}
  );
  new TradingView.widget(
  {
  "autosize": true,
  "symbol": "FX_IDC:SAREUR",
  "interval": "D",
  "timezone": "Etc/UTC",
  "theme": "dark",
  "style": "1",
  "locale": "en",
  "toolbar_bg": "#f1f3f6",
  "enable_publishing": false,
  "allow_symbol_change": true,
  "container_id": "tradingview_2b211"
}
  );
  new TradingView.widget(
  {
  "autosize": true,
  "symbol": "FX_IDC:QARUSD",
  "interval": "D",
  "timezone": "Etc/UTC",
  "theme": "dark",
  "style": "1",
  "locale": "en",
  "toolbar_bg": "#f1f3f6",
  "enable_publishing": false,
  "allow_symbol_change": true,
  "container_id": "tradingview_3c129"
}
  );

        if(localStorage.getItem('lang') == 'en'){
            this.e = true;
            this.f = false;
        }
        else {
            this.e = false;
            this.f = true;
        }

        this.Check();
    	setTimeout(() => {
			this.fetchRate();
		}, 6000);
        
		this.fetchSignals();
		this.fetchDate();
    },
    methods: {
        
		fetchDate() {
            axios.get('/fetch/date').then(response => {
                this.time = response.data.time;
                this.date = response.data.date;
                this.city = response.data.city;
            });
        },
        Open() {
            $(".change-pass").fadeIn();
            $("#back").fadeIn();
        },
        Close() {
            $(".change-pass").fadeOut();
            $("#back").fadeOut();
        },
        fetchSignal() {
			let ehem = 'USD';
			let formData = new FormData();
			formData.append('name', this.signals.a.name);
			formData.append('pips', this.signals.a.pips);
            axios.get('/signal', formData).then(response => {
				
				this.signala = response.data.daya.rates.USD;
				this.signalb = response.data.dayb.rates.USD;
				this.signalc = response.data.dayc.rates.USD;
				this.signald = response.data.dayd.rates.USD;
				this.signale = response.data.daye.rates.USD;
				this.signalf = response.data.dayf.rates.USD;
				this.signalg = response.data.dayg.rates.USD;
				this.signalh = response.data.dayh.rates.USD;
				this.signali = response.data.dayi.rates.USD;
				this.signalj = response.data.dayj.rates.USD;
				this.signalk = response.data.dayk.rates.USD;
				this.signall = response.data.dayl.rates.USD;
				this.signalm = response.data.daym.rates.USD;
				this.signaln = response.data.dayn.rates.USD;
				this.signalo = response.data.dayo.rates.USD;
				this.signalp = response.data.dayp.rates.USD;
				this.signalq = response.data.dayq.rates.USD;
				this.signalr = response.data.dayr.rates.USD;
				this.signals = response.data.days.rates.USD;
				this.signalt = response.data.dayt.rates.USD;
				this.signalu = response.data.dayu.rates.USD;
				this.signalv = response.data.dayv.rates.USD;
				this.signalw = response.data.dayw.rates.USD;
				this.signalx = response.data.dayx.rates.USD;
				this.signaly = response.data.dayy.rates.USD;
				this.signalz = response.data.dayz.rates.USD;
				this.signalaa = response.data.dayaa.rates.USD;
				this.signalbb = response.data.dayabbrates.USD;
				this.signalcc = response.data.daya.ccates.USD;
				this.signaldd = response.data.daya.rddtes.USD;
                // this.signalb = response.data.dayb.this.signals.a.pips;
               
                console.log(this.signal);
            });
        },
		fetchSignals() {
      		  axios.get('/fetch/signal/free').then(response => {
					 this.signals = response.data;
					//  this.fetchSignal();
        });
    },
        fetchRate() {
            axios.get('/fetch/rate/user').then(response => {
                if(response.data == 'free'){
                    
                }
                else if(response.data == 'silver'){
                    this.silvera = true;
					this.silverlocka = false;
					this.silverb = true;
					this.silverlockb = false;
                }
                else if(response.data == 'gold'){
					this.silvera = true;
					this.silverlocka = false;
					this.silverb = true;
					this.silverlockb = false;
                    this.golda = true;
					this.goldlocka = false;
					this.goldb = true;
					this.goldlockb = false;
					this.goldc = true;
					this.goldlockc = false;
					this.goldd = true;
					this.goldlockd = false;
                }
                else if(response.data == 'diomond'){
                    this.diamonda = true;
					this.diamondlocka = false;
					this.diamondb = true;
					this.diamondlockb = false;
                    this.diamondc = true;
					this.diamondlockc = false;
					this.diamondd = true;
					this.diamondlockd = false;
					this.diamonde = true;
					this.diamondlocke = false;
					this.diamondf = true;
					this.diamondlockf = false;
					this.diamondg = true;
					this.diamondlockg = false;
					this.diamondh = true;
					this.diamondlockh = false;
					this.silvera = true;
					this.silverlocka = false;
					this.silverb = true;
					this.silverlockb = false;
                    this.golda = true;
					this.goldlocka = false;
					this.goldb = true;
					this.goldlockb = false;
					this.goldc = true;
					this.goldlockc = false;
					this.goldd = true;
					this.goldlockd = false;
                }
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
        AutoLogin() {
            let formData = new FormData();
            formData.append('id', localStorage.getItem('auth'));
            axios.post('/login/auto', formData).then(response => {
                this.Check();
            });
        },
    },
}
</script>
<style scoped>
@media(max-width:767px){
	.responsive-pos {
		display: block;
		background:#131722
	}
}
@media(min-width:768px){
	.responsive-pos {
		display: flex;
		background:#131722
	}
}
    .sett {
        color: black;
        opacity: 0.75;
    }
    .sett:hover {
        color: black;
        opacity: 0.75;
    }
	.canvasjs-chart-credit {
		display: none;
	}
</style>