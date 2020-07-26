<template>
    <div>
        <div class="modal fade" id="myModal" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content" style="border-radius:25px">
                <div class="modal-header">
                <button type="button" class="close" style="padding:1rem 1rem;margin:0" data-dismiss="modal">&times;</button>
                <h4 class="modal-title" style="position:absolute;left:50%;transform:translateX(-50%)">{{signals.a.name}} / {{signals.a.pips}}</h4>
                </div>
                <div class="modal-body">
					
                        <div class="card card-default">
							<div class="card card-header" style="text-align:center;border:none;">
									{{date}} | {{city}} | {{time}}
							</div>
							<div class="card card-body" style="text-align:center">
								<p :style="'color:white;font-size:14px;position:absolute;left:50%;top:50%;transform:translate(-50%, -50%);padding:5px;border-radius:16px;background: ' + signals.a.status">Buy Signal {{signals.a.pip}}pip</p><br>
							</div>
							<div class="card card-footer" style="border:none">
								<span><span style="display:block;text-align:center">Price: {{signals.a.price}}</span><span class="stop">Stop Loss: {{signals.a.stop}}</span><span class="lost">Stop Profit: {{signals.a.profit}}</span></span>
							</div>
						</div>
                </div>
                
            </div>
        </div>
        </div>
        <div class="modal fade" id="myModal1" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content" style="border-radius:25px">
                <div class="modal-header">
                <button type="button" class="close" style="padding:1rem 1rem;margin:0" data-dismiss="modal">&times;</button>
                <h4 class="modal-title" style="position:absolute;left:50%;transform:translateX(-50%)">{{signals.a.name}} / {{signals.a.pips}}</h4>
                </div>
                <div class="modal-body">
					
                        <div class="card card-default">
							<div class="card card-header" style="text-align:center;border:none;">
									{{date}} | {{city}} | {{time}}
							</div>
							<div class="card card-body" style="text-align:center">
								<p :style="'color:white;font-size:14px;position:absolute;left:50%;top:50%;transform:translate(-50%, -50%);padding:5px;border-radius:16px;background: ' + signals.a.status">Buy Signal {{signals.a.pip}}pip</p><br>
							</div>
							<div class="card card-footer" style="border:none">
								<span><span style="display:block;text-align:center">Price: {{signals.a.price}}</span><span class="stop">Stop Loss: {{signals.a.stop}}</span><span class="lost">Stop Profit: {{signals.a.profit}}</span></span>
							</div>
						</div>
                </div>
                
            </div>
        </div>
        </div>
        <div class="modal fade" id="myModal2" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content" style="border-radius:25px">
                <div class="modal-header">
                <button type="button" class="close" style="padding:1rem 1rem;margin:0" data-dismiss="modal">&times;</button>
                <h4 class="modal-title" style="position:absolute;left:50%;transform:translateX(-50%)">{{signals.a.name}} / {{signals.a.pips}}</h4>
                </div>
                <div class="modal-body">
					
                        <div class="card card-default">
							<div class="card card-header" style="text-align:center;border:none;">
									{{date}} | {{city}} | {{time}}
							</div>
							<div class="card card-body" style="text-align:center">
								<p :style="'color:white;font-size:14px;position:absolute;left:50%;top:50%;transform:translate(-50%, -50%);padding:5px;border-radius:16px;background: ' + signals.a.status">Buy Signal {{signals.a.pip}}pip</p><br>
							</div>
							<div class="card card-footer" style="border:none">
								<span><span class="prifor">price: {{signals.a.price}}</span><span class="stop">Stop Loss: {{signals.a.stop}}</span><span class="lost">Stop Profit: {{signals.a.profit}}</span></span>
							</div>
						</div>
                </div>
                
            </div>
        </div>
        </div>
        <div class="modal fade" id="myModal3" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content" style="border-radius:25px">
                <div class="modal-header">
                <button type="button" class="close" style="padding:1rem 1rem;margin:0" data-dismiss="modal">&times;</button>
                <h4 class="modal-title" style="position:absolute;left:50%;transform:translateX(-50%)">{{signals.a.name}} / {{signals.a.pips}}</h4>
                </div>
                <div class="modal-body">
					
                        <div class="card card-default">
							<div class="card card-header" style="text-align:center;border:none;">
									{{date}} | {{city}} | {{time}}
							</div>
							<div class="card card-body" style="text-align:center">
								<p :style="'color:white;font-size:14px;position:absolute;left:50%;top:50%;transform:translate(-50%, -50%);padding:5px;border-radius:16px;background: ' + signals.a.status">Buy Signal {{signals.a.pip}}pip</p><br>
							</div>
							<div class="card card-footer" style="border:none">
								<span><span class="prifor">price: {{signals.a.price}}</span><span class="stop">Stop Loss: {{signals.a.stop}}</span><span class="lost">Stop Profit: {{signals.a.profit}}</span></span>
							</div>
						</div>
                </div>
                
            </div>
        </div>
        </div>
        <div class="modal fade" id="myModal4" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content" style="border-radius:25px">
                <div class="modal-header">
                <button type="button" class="close" style="padding:1rem 1rem;margin:0" data-dismiss="modal">&times;</button>
                <h4 class="modal-title" style="position:absolute;left:50%;transform:translateX(-50%)">{{signals.a.name}} / {{signals.a.pips}}</h4>
                </div>
                <div class="modal-body">
					
                        <div class="card card-default">
							<div class="card card-header" style="text-align:center;border:none;">
									{{date}} | {{city}} | {{time}}
							</div>
							<div class="card card-body" style="text-align:center">
								<p :style="'color:white;font-size:14px;position:absolute;left:50%;top:50%;transform:translate(-50%, -50%);padding:5px;border-radius:16px;background: ' + signals.a.status">Buy Signal {{signals.a.pip}}pip</p><br>
							</div>
							<div class="card card-footer" style="border:none">
								<span><span class="prifor">price: {{signals.a.price}}</span><span class="stop">Stop Loss: {{signals.a.stop}}</span><span class="lost">Stop Profit: {{signals.a.profit}}</span></span>
							</div>
						</div>
                </div>
                
            </div>
        </div>
        </div>
        <div class="modal fade" id="myModal5" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content" style="border-radius:25px">
                <div class="modal-header">
                <button type="button" class="close" style="padding:1rem 1rem;margin:0" data-dismiss="modal">&times;</button>
                <h4 class="modal-title" style="position:absolute;left:50%;transform:translateX(-50%)">{{signals.a.name}} / {{signals.a.pips}}</h4>
                </div>
                <div class="modal-body">
					
                        <div class="card card-default">
							<div class="card card-header" style="text-align:center;border:none;">
									{{date}} | {{city}} | {{time}}
							</div>
							<div class="card card-body" style="text-align:center">
								<p :style="'color:white;font-size:14px;position:absolute;left:50%;top:50%;transform:translate(-50%, -50%);padding:5px;border-radius:16px;background: ' + signals.a.status">Buy Signal {{signals.a.pip}}pip</p><br>
							</div>
							<div class="card card-footer" style="border:none">
								<span><span class="prifor">price: {{signals.a.price}}</span><span class="stop">Stop Loss: {{signals.a.stop}}</span><span class="lost">Stop Profit: {{signals.a.profit}}</span></span>
							</div>
						</div>
                </div>
                
            </div>
        </div>
        </div>
        <div class="modal fade" id="myModal6" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content" style="border-radius:25px">
                <div class="modal-header">
                <button type="button" class="close" style="padding:1rem 1rem;margin:0" data-dismiss="modal">&times;</button>
                <h4 class="modal-title" style="position:absolute;left:50%;transform:translateX(-50%)">{{signals.a.name}} / {{signals.a.pips}}</h4>
                </div>
                <div class="modal-body">
					
                        <div class="card card-default">
							<div class="card card-header" style="text-align:center;border:none;">
									{{date}} | {{city}} | {{time}}
							</div>
							<div class="card card-body" style="text-align:center">
								<p :style="'color:white;font-size:14px;position:absolute;left:50%;top:50%;transform:translate(-50%, -50%);padding:5px;border-radius:16px;background: ' + signals.a.status">Buy Signal {{signals.a.pip}}pip</p><br>
							</div>
							<div class="card card-footer" style="border:none">
								<span><span class="prifor">price: {{signals.a.price}}</span><span class="stop">Stop Loss: {{signals.a.stop}}</span><span class="lost">Stop Profit: {{signals.a.profit}}</span></span>
							</div>
						</div>
                </div>
                
            </div>
        </div>
        </div>
        <div class="modal fade" id="myModal7" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content" style="border-radius:25px">
                <div class="modal-header">
                <button type="button" class="close" style="padding:1rem 1rem;margin:0" data-dismiss="modal">&times;</button>
                <h4 class="modal-title" style="position:absolute;left:50%;transform:translateX(-50%)">{{signals.a.name}} / {{signals.a.pips}}</h4>
                </div>
                <div class="modal-body">
					
                        <div class="card card-default">
							<div class="card card-header" style="text-align:center;border:none;">
									{{date}} | {{city}} | {{time}}
							</div>
							<div class="card card-body" style="text-align:center">
								<p :style="'color:white;font-size:14px;position:absolute;left:50%;top:50%;transform:translate(-50%, -50%);padding:5px;border-radius:16px;background: ' + signals.a.status">Buy Signal {{signals.a.pip}}pip</p><br>
							</div>
							<div class="card card-footer" style="border:none">
								<span><span class="prifor">price: {{signals.a.price}}</span><span class="stop">Stop Loss: {{signals.a.stop}}</span><span class="lost">Stop Profit: {{signals.a.profit}}</span></span>
							</div>
						</div>
                </div>
                
            </div>
        </div>
        </div>
        <div class="modal fade" id="myModal8" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content" style="border-radius:25px">
                <div class="modal-header">
                <button type="button" class="close" style="padding:1rem 1rem;margin:0" data-dismiss="modal">&times;</button>
                <h4 class="modal-title" style="position:absolute;left:50%;transform:translateX(-50%)">{{signals.a.name}} / {{signals.a.pips}}</h4>
                </div>
                <div class="modal-body">
					
                        <div class="card card-default">
							<div class="card card-header" style="text-align:center;border:none;">
									{{date}} | {{city}} | {{time}}
							</div>
							<div class="card card-body" style="text-align:center">
								<p :style="'color:white;font-size:14px;position:absolute;left:50%;top:50%;transform:translate(-50%, -50%);padding:5px;border-radius:16px;background: ' + signals.a.status">Buy Signal {{signals.a.pip}}pip</p><br>
							</div>
							<div class="card card-footer" style="border:none">
								<span><span class="prifor">price: {{signals.a.price}}</span><span class="stop">Stop Loss: {{signals.a.stop}}</span><span class="lost">Stop Profit: {{signals.a.profit}}</span></span>
							</div>
						</div>
                </div>
                
            </div>
        </div>
        </div>
        <div class="modal fade" id="myModal9" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content" style="border-radius:25px">
                <div class="modal-header">
                <button type="button" class="close" style="padding:1rem 1rem;margin:0" data-dismiss="modal">&times;</button>
                <h4 class="modal-title" style="position:absolute;left:50%;transform:translateX(-50%)">{{signals.a.name}} / {{signals.a.pips}}</h4>
                </div>
                <div class="modal-body">
					
                        <div class="card card-default">
							<div class="card card-header" style="text-align:center;border:none;">
									{{date}} | {{city}} | {{time}}
							</div>
							<div class="card card-body" style="text-align:center">
								<p :style="'color:white;font-size:14px;position:absolute;left:50%;top:50%;transform:translate(-50%, -50%);padding:5px;border-radius:16px;background: ' + signals.a.status">Buy Signal {{signals.a.pip}}pip</p><br>
							</div>
							<div class="card card-footer" style="border:none">
								<span><span class="prifor">price: {{signals.a.price}}</span><span class="stop">Stop Loss: {{signals.a.stop}}</span><span class="lost">Stop Profit: {{signals.a.profit}}</span></span>
							</div>
						</div>
                </div>
                
            </div>
        </div>
        </div>
        <div class="modal fade" id="myModal10" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content" style="border-radius:25px">
                <div class="modal-header">
                <button type="button" class="close" style="padding:1rem 1rem;margin:0" data-dismiss="modal">&times;</button>
                <h4 class="modal-title" style="position:absolute;left:50%;transform:translateX(-50%)">{{signals.a.name}} / {{signals.a.pips}}</h4>
                </div>
                <div class="modal-body">
					
                        <div class="card card-default">
							<div class="card card-header" style="text-align:center;border:none;">
									{{date}} | {{city}} | {{time}}
							</div>
							<div class="card card-body" style="text-align:center">
								<p :style="'color:white;font-size:14px;position:absolute;left:50%;top:50%;transform:translate(-50%, -50%);padding:5px;border-radius:16px;background: ' + signals.a.status">Buy Signal {{signals.a.pip}}pip</p><br>
							</div>
							<div class="card card-footer" style="border:none">
								<span><span class="prifor">price: {{signals.a.price}}</span><span class="stop">Stop Loss: {{signals.a.stop}}</span><span class="lost">Stop Profit: {{signals.a.profit}}</span></span>
							</div>
						</div>
                </div>
                
            </div>
        </div>
        </div>
        <div class="modal fade" id="myModal11" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content" style="border-radius:25px">
                <div class="modal-header">
                <button type="button" class="close" style="padding:1rem 1rem;margin:0" data-dismiss="modal">&times;</button>
                <h4 class="modal-title" style="position:absolute;left:50%;transform:translateX(-50%)">{{signals.a.name}} / {{signals.a.pips}}</h4>
                </div>
                <div class="modal-body">
					
                        <div class="card card-default">
							<div class="card card-header" style="text-align:center;border:none;">
									{{date}} | {{city}} | {{time}}
							</div>
							<div class="card card-body" style="text-align:center">
								<p :style="'color:white;font-size:14px;position:absolute;left:50%;top:50%;transform:translate(-50%, -50%);padding:5px;border-radius:16px;background: ' + signals.a.status">Buy Signal {{signals.a.pip}}pip</p><br>
							</div>
							<div class="card card-footer" style="border:none">
								<span><span class="prifor">price: {{signals.a.price}}</span><span class="stop">Stop Loss: {{signals.a.stop}}</span><span class="lost">Stop Profit: {{signals.a.profit}}</span></span>
							</div>
						</div>
                </div>
                
            </div>
        </div>
        </div>
        <div class="modal fade" id="myModal12" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content" style="border-radius:25px">
                <div class="modal-header">
                <button type="button" class="close" style="padding:1rem 1rem;margin:0" data-dismiss="modal">&times;</button>
                <h4 class="modal-title" style="position:absolute;left:50%;transform:translateX(-50%)">{{signals.a.name}} / {{signals.a.pips}}</h4>
                </div>
                <div class="modal-body">
					
                        <div class="card card-default">
							<div class="card card-header" style="text-align:center;border:none;">
									{{date}} | {{city}} | {{time}}
							</div>
							<div class="card card-body" style="text-align:center">
								<p :style="'color:white;font-size:14px;position:absolute;left:50%;top:50%;transform:translate(-50%, -50%);padding:5px;border-radius:16px;background: ' + signals.a.status">Buy Signal {{signals.a.pip}}pip</p><br>
							</div>
							<div class="card card-footer" style="border:none">
								<span><span class="prifor">price: {{signals.a.price}}</span><span class="stop">Stop Loss: {{signals.a.stop}}</span><span class="lost">Stop Profit: {{signals.a.profit}}</span></span>
							</div>
						</div>
                </div>
                
            </div>
        </div>
        </div>
        <div class="modal fade" id="myModal13" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content" style="border-radius:25px">
                <div class="modal-header">
                <button type="button" class="close" style="padding:1rem 1rem;margin:0" data-dismiss="modal">&times;</button>
                <h4 class="modal-title" style="position:absolute;left:50%;transform:translateX(-50%)">{{signals.a.name}} / {{signals.a.pips}}</h4>
                </div>
                <div class="modal-body">
					
                        <div class="card card-default">
							<div class="card card-header" style="text-align:center;border:none;">
									{{date}} | {{city}} | {{time}}
							</div>
							<div class="card card-body" style="text-align:center">
								<p :style="'color:white;font-size:14px;position:absolute;left:50%;top:50%;transform:translate(-50%, -50%);padding:5px;border-radius:16px;background: ' + signals.a.status">Buy Signal {{signals.a.pip}}pip</p><br>
							</div>
							<div class="card card-footer" style="border:none">
								<span><span class="prifor">price: {{signals.a.price}}</span><span class="stop">Stop Loss: {{signals.a.stop}}</span><span class="lost">Stop Profit: {{signals.a.profit}}</span></span>
							</div>
						</div>
                </div>
                
            </div>
        </div>
        </div>
        <div class="modal fade" id="myModal14" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content" style="border-radius:25px">
                <div class="modal-header">
                <button type="button" class="close" style="padding:1rem 1rem;margin:0" data-dismiss="modal">&times;</button>
                <h4 class="modal-title" style="position:absolute;left:50%;transform:translateX(-50%)">{{signals.a.name}} / {{signals.a.pips}}</h4>
                </div>
                <div class="modal-body">
					
                        <div class="card card-default">
							<div class="card card-header" style="text-align:center;border:none;">
									{{date}} | {{city}} | {{time}}
							</div>
							<div class="card card-body" style="text-align:center">
								<p :style="'color:white;font-size:14px;position:absolute;left:50%;top:50%;transform:translate(-50%, -50%);padding:5px;border-radius:16px;background: ' + signals.a.status">Buy Signal {{signals.a.pip}}pip</p><br>
							</div>
							<div class="card card-footer" style="border:none">
								<span><span class="prifor">price: {{signals.a.price}}</span><span class="stop">Stop Loss: {{signals.a.stop}}</span><span class="lost">Stop Profit: {{signals.a.profit}}</span></span>
							</div>
						</div>
                </div>
                
            </div>
        </div>
        </div>
        <div class="modal fade" id="myModal15" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content" style="border-radius:25px">
                <div class="modal-header">
                <button type="button" class="close" style="padding:1rem 1rem;margin:0" data-dismiss="modal">&times;</button>
                <h4 class="modal-title" style="position:absolute;left:50%;transform:translateX(-50%)">{{signals.a.name}} / {{signals.a.pips}}</h4>
                </div>
                <div class="modal-body">
					
                        <div class="card card-default">
							<div class="card card-header" style="text-align:center;border:none;">
									{{date}} | {{city}} | {{time}}
							</div>
							<div class="card card-body" style="text-align:center">
								<p :style="'color:white;font-size:14px;position:absolute;left:50%;top:50%;transform:translate(-50%, -50%);padding:5px;border-radius:16px;background: ' + signals.a.status">Buy Signal {{signals.a.pip}}pip</p><br>
							</div>
							<div class="card card-footer" style="border:none">
								<span><span class="prifor">price: {{signals.a.price}}</span><span class="stop">Stop Loss: {{signals.a.stop}}</span><span class="lost">Stop Profit: {{signals.a.profit}}</span></span>
							</div>
						</div>
                </div>
                
            </div>
        </div>
        </div>
        
    </div>
</template>
<script>
import axios from 'axios';
export default {
    name: 'Cadr',
    data() {
        return {
            signals: [],
            time: '',
			date: '',
			city: '',
        }
    },
    mounted() {
        this.fetchSignals();
        this.fetchDate();
    },
    methods: {
        OpenEye() {
            alert('Hi')
        },
        fetchDate() {
            axios.get('/fetch/date').then(response => {
                this.time = response.data.time;
                this.date = response.data.date;
                this.city = response.data.city;
            });
        },
        fetchSignals() {
      		  axios.get('/fetch/signal/free').then(response => {
					 this.signals = response.data;
					 this.fetchSignal();
        });
    },
    },
}
</script>
<style scoped>
    #myModal {
        position: fixed;
        top: 20%;
        left: 50%;
        transform: translateX(-50%);
        width:330px;
        padding: 20px;
        border-radius: 25px;
    }
</style>