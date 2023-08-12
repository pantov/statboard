<?
  function get_data($src)
  {
   $arr = simplexml_load_file($src);
   return $arr;
  }

if (isset($_GET['update'])) {
  $xml="http://i48s-d-db1/ina/st/hs/sttst/data";
  $objxml = get_data($xml);
  if ($objxml) {$objxml->saveXML("data.xml");}
};
  $obj = get_data("data.xml");
  if (!$obj) { die("<h1>Нет данных для отображения</h1>"); 
  
  } else {
    ?>
<!DOCTYPE html>
<html lang="ru">
<head>
  <title>HR-аналитика</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
<!--  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
  
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
 
   <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.bundle.min.js"></script>
   
   <script src="https://unpkg.com/vue@3.2.36"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.2.4/gsap.min.js"></script>
--> 
  <script src="scripts/jquery.min.js"></script>
  <script src="scripts/popper.min.js"></script>
  
  <link rel="stylesheet" href="scripts/bootstrap.min.css">
  <script src="scripts/bootstrap.min.js"></script>
 
   <script src="scripts/Chart.bundle.min.js"></script>
   
   <script src="scripts/vue.global.prod.js"></script>
   <script src="scripts/gsap.min.js"></script>

 
  <style>
    .card { padding: 1px;  border-width: 3px !important; }
    h5 { color: #2FA6DA ; }
    h3 { color: white ; font-weight: bold; font-size: 2.0rem;}
	.btn { color: white ; font-weight: bold; font-size: 1.7rem;}
    .card {height: 90%;}
    #container1 {border-radius: 1px;border: 1px solid #787878;padding: 20px; padding-left: 35px; padding-right: 35px;}
	#container2 {padding: 20px; }
	.card-header {padding: 3px; background-color: #3B3838 !important;}
    .bg-dark {background-color: #3B3838 !important;}
	.card-header{ display: flex; height: 100%; align-items: center; justify-content: center;}
	h4{flex: 1;}
  </style>
</head>
<body>

<div class="container-fluid bg-light" id="container2">
<div id="container1" class="container-fluid bg-white" style="padding-top: 1px">
 
 <div class="row bg-white" >
 <div class="col-lg-4"> </div>
 <div class="col-lg-8"> <center><h4><strong>HR-аналитика</strong></h4></center> </div>
 </div>
 
  <div class="row bg-dark">
   <div id="col1" class="col-lg-4"> <!-- left col pole-->
 
   <div id="logo1" class="row bg-white">
       <div class="col-lg-12"><!-- foto1 pole-->
	   <div class="row bg-white">
	   <div class="col-lg-6">
	   <p><center><img src="images/aig.png" class="img-circle" width="200" height="200"/></center></p>
	   </div>
	   <div class="col-lg-6">
	   <p></p>
				  <tr>
					<td><h2><strong>Артамонов <br> Игорь <br> Георгиевич</strong></h2></td>
					<td><h5 style="color: black" ><p></p>Губернатор <br> Липецкой области</h5></td>
				  </tr>
	   </div> 
	   </div>
	   
	   </div> 
    </div>
   
   
      <div class="row bg-dark">
       <div class="col-lg-12"><!-- menu1 -->
	   
			<p></p>
			<div id="card_menu1" class="card border bg-dark text-white rounded"  >
<p></p>
<div  class="card-header" style="flex:0">  			
<div class="dropdown text-center">
    <button id="Btn1" type="button" class="btn-sm btn-secondary dropdown-toggle" data-toggle="dropdown" >
    <h5 class="text-white">Исполнительный орган государственной власти</h5>
    </button> 
    <div class="dropdown-menu">
	  <?
          $i=0;
		  $menu1=''; 
		  
          foreach($obj->children() as $pck ) {
		  if ($i<1) { 
		  
          $menu1.='<a class="dropdown-item" href="#" onclick="Paint1(\''
		  .$obj->pck[$i]->y.'\','
		  .$obj->pck[$i]->a1.','.$obj->pck[$i]->a2.','		  
		  .$obj->pck[$i]->b1.','.$obj->pck[$i]->b2.','		  
		  .$obj->pck[$i]->c1.','.$obj->pck[$i]->c2.','		  
		  .$obj->pck[$i]->d1.','.$obj->pck[$i]->e1.','		  
		  .$obj->pck[$i]->f1.','.$obj->pck[$i]->f2.','.$obj->pck[$i]->f3.','		  
		  .$obj->pck[$i]->g1.','.$obj->pck[$i]->g2.','		  
		  .$obj->pck[$i]->h1.','.$obj->pck[$i]->h2.','		  
		  .$obj->pck[$i]->i1.','.$obj->pck[$i]->i2.','.$obj->pck[$i]->i3.','.$obj->pck[$i]->i4.','
		  .$obj->pck[$i]->j1.','.$obj->pck[$i]->j2.','.$obj->pck[$i]->j3.','.$obj->pck[$i]->j4.','		  
          .$obj->pck[$i]->k1.','.$obj->pck[$i]->k2.','.$obj->pck[$i]->k3.','.$obj->pck[$i]->k4.','.$obj->pck[$i]->k5.	  
		  ')" > <b>'.$pck->y.'</b></a> <div class="dropdown-divider"></div>' ;
		  } else {
          $menu1.='<a class="dropdown-item" href="#" onclick="Paint1(\''
		  .$obj->pck[$i]->y.'\','
		  .$obj->pck[$i]->a1.','.$obj->pck[$i]->a2.','		  
		  .$obj->pck[$i]->b1.','.$obj->pck[$i]->b2.','		  
		  .$obj->pck[$i]->c1.','.$obj->pck[$i]->c2.','		  
		  .$obj->pck[$i]->d1.','.$obj->pck[$i]->e1.','		  
		  .$obj->pck[$i]->f1.','.$obj->pck[$i]->f2.','.$obj->pck[$i]->f3.','		  
		  .$obj->pck[$i]->g1.','.$obj->pck[$i]->g2.','		  
		  .$obj->pck[$i]->h1.','.$obj->pck[$i]->h2.','		  
		  .$obj->pck[$i]->i1.','.$obj->pck[$i]->i2.','.$obj->pck[$i]->i3.','.$obj->pck[$i]->i4.','
		  .$obj->pck[$i]->j1.','.$obj->pck[$i]->j2.','.$obj->pck[$i]->j3.','.$obj->pck[$i]->j4.','		  
          .$obj->pck[$i]->k1.','.$obj->pck[$i]->k2.','.$obj->pck[$i]->k3.','.$obj->pck[$i]->k4.','.$obj->pck[$i]->k5.	  
		  ')" >'.$pck->y.'</a>';		  
		  }
		  $i=$i+1;
		  } 
          echo $menu1;
		  ?> 
     </div>		  
    </div>
  </div>			
<p></p>				


<div class="card-body text-center"><h4 id="name1"></h4></div>
			<p></p>						
			</div>	
	   </div>   
   </div>
   
 
      <div class="row bg-dark">
       <div class="col-lg-12"><!-- i -->
	   		<p></p>
			<div id="card_i1" class="card border bg-dark text-white  rounded" >
			<div  class="card-header text-center"> <h4> Средняя зарплата, руб. </h4> </div>
			 
				<table text-align="center" style="width:100%">
				  <tr>
					<td><center><p>по всем сотрудникам </p></center></td>
					<td><center><p>по рядовым сотрудникам</p></center></td>
				  </tr>
				  <tr>
					<td colspan="2" align="center"><h5>2021 год</h5></td>
				  </tr>				  
				  <tr>
					<td><center><h3 id="i1"> <animated-integer :value="i1"></animated-integer> </h3></center></td>
					<td><center><h3 id="i2"> <animated-integer :value="i2"></animated-integer> </h3></center></td>
				  </tr>
				  <tr>
					<td colspan="2" align="center"><h5>2022 год</h5></td>
				  </tr>				  
				  <tr>
					<td><center><h3 id="i3"> <animated-integer :value="i3"></animated-integer> </h3></center></td>
					<td><center><h3 id="i4"> <animated-integer :value="i4"></animated-integer> </h3></center></td>
				  </tr>
				
				</table>
			</div>	
			<p></p>	  
	   
	   </div>   
   </div>

   </div>
   <div class="col-lg-8"> <!-- right col -->
   <div class="row bg-dark">
       <div class="col-lg-6"><!-- a -->
	   
			<p></p>
			<div class="card border bg-dark text-white  rounded" >
			<div  class="card-header text-center"> <h4> Численность, чел. </h4> </div>
			 
				<table text-align="center" style="width:100%">
				  <tr>
					<td><center><h5>Штат</h5></center></td>
					<td><center><h5>Факт</h5></center></td>
				  </tr>
				  <tr>
					<td><center><h3 id="a1">0</animated-integer> </h3></center></td>
					<td><center><h3 id="a2">0</animated-integer> </h3></center></td>
				  </tr>
				</table>
		  
			</div>	
			<p></p>
	   
	   </div>
       <div class="col-lg-6"><!-- b -->
	   
			<p></p>
			<div class="card border bg-dark text-white  rounded" >
			<div  class="card-header text-center"> <h4> Должности, чел. </h4> </div>
			 
				<table text-align="center" style="width:100%">
				  <tr>
					<td><center><h5>Руководители</h5></center></td>
					<td><center><h5>Специалисты</h5></center></td>
				  </tr>
				  <tr>
					<td><center><h3 id="b1">0</h3></center></td>
					<td><center><h3 id="b2">0</h3></center></td>
				  </tr>
				</table>
		  
			</div>	
			<p></p>
	   
	   </div>
   </div>
   <div class="row bg-dark">
       <div class="col-lg-4"><!-- c -->
			<p></p>
			<div class="card border bg-dark text-white  rounded" >
			<div  class="card-header text-center"> <h4> Текучесть, чел. </h4> </div>
			 
				<table text-align="center" style="width:100%">
				  <tr>
					<td><center><h5>Назначено</h5></center></td>
					<td><center><h5>Уволено</h5></center></td>
				  </tr>
				  <tr>
					<td><center><h3 id="c1">0</h3></center></td>
					<td><center><h3 id="c2">0</h3></center></td>
				  </tr>
				</table>
		  
			</div>	
			<p></p>	   
	   </div>
       <div class="col-lg-4"><!-- d -->
			<p></p>
			<div class="card border bg-dark text-white  rounded" >
			<div  class="card-header text-center"> <h4> Средний возраст </h4> </div>
			 
				<table text-align="center" style="width:100%">
				  <tr>
					<td><center><h3 id="d1">0</h3></center></td>
				  </tr>
				  <tr>
					<td><center><h5> &nbsp </h5></center></td>
				  </tr> 

				</table>
			</div>	
			<p></p>	   	   
	   
	   </div>
	   <div class="col-lg-4"><!-- e -->
	  
			<p></p>
			<div class="card border bg-dark text-white  rounded" >
			<div  style="width:100%; padding: 0px; margin: 0px" class="card-header text-center"> <h4> Развитие </h4> </div>
			 
				<table text-align="center" style="width:100%; padding: 0px; margin: 0px">
				  <tr>
					<td style="padding: 0px; margin: 0px"><center><h5 style="font-size: 100%;">Количество участников, принявших участие в образовательных мероприятиях</h5></center></td>
				  </tr>
				  <tr>
					<td style="width:100%; padding: 0px; margin: 0px"><center><h3 style="width:100%; padding: 0px; margin: 0px" id="e1">0</h3></center></td>
				  </tr>
				</table>
		  
			</div>	
			<p></p>	   
	   
	   </div>
   </div>
   
   
   <div class="row bg-dark">
       <div class="col-lg-4"><!-- f -->
	  
			<p></p>
			<div class="card border bg-dark text-white  rounded" >
			<div  class="card-header text-center"> <h4> Награды, чел.</h4> </div>
			 
				<table text-align="center" style="width:100%">
				  <tr>
					<td><center><h5>Госуд.</h5></center></td>
					<td><center><h5>Ведом.</h5></center></td>
					<td><center><h5>Регион.</h5></center></td>
				  </tr>
				  <tr>
					<td><center><h3 id="f1">0</h3></center></td>
					<td><center><h3 id="f2">0</h3></center></td>
					<td><center><h3 id="f3">0</h3></center></td>
				  </tr>
				</table>
		  
			</div>	
			<p></p>
			
	   </div>
       <div class="col-lg-4"><!-- g -->
	   
			<p></p>
			<div class="card border bg-dark text-white  rounded" >
			<div  class="card-header text-center"> <h4> Служ. проверки/ дисципл. взыскания </h4> </div>
			 
				<table text-align="center" style="width:100%">
				  <tr>
					<td><center><h3 id="g1">0</h3></center></td>
				  </tr>
				  <tr>
					<td><center><h5> &nbsp </h5></center></td>
				  </tr>
				   
				</table>
		  
			</div>	
			<p></p>	 	   
	   
	   </div>
	   <div class="col-lg-4"><!-- h -->
	  
			<p></p>
			<div class="card border bg-dark text-white  rounded" >
			<div  class="card-header text-center"> <h4> Гендерный состав, % </h4> </div>
			 
				<table text-align="center" style="width:100%">
				  <tr>
					<td><center><h5>Муж.</h5></center></td>
					<td><center><h5>Жен.</h5></center></td>
				  </tr>
				  <tr>
					<td><center><h3 id="h1">0</h3></center></td>
					<td><center><h3 id="h2">0</h3></center></td>
				  </tr>
				</table>
		  
			</div>	
			<p></p>
	   
	   </div>   
   </div>
   
   <div class="row bg-dark">
        <div class="col-lg-6"><!-- j -->
		
		<p></p>
			<div id="card_j1" class="card border bg-dark text-white  rounded" >
			<div  class="card-header text-center"> <h4> Возрастной состав, чел. </h4> </div>
	<div class="container">
     <canvas id="Chart1" width="200" height="100"></canvas>
	 <p></p>
    </div>	  
			</div>	
			<p></p>
		
		
		</div>
        <div class="col-lg-6"><!-- k -->
		
		<p></p>
			<div class="card border bg-dark text-white  rounded" >
			<div  class="card-header text-center"> <h4> Кол-во сотрудников со стажем работы в органах власти, чел. </h4> </div>
	<div class="container">
     <canvas id="Chart2" width="200" height="100"></canvas>
	 <p></p>
    </div>	  

	  
			</div>	
			<p></p>
		
		
		</div>  
   </div>
   
   </div>
  </div>




</div>
</div>
<script>

const app = Vue.createApp({
  data() {
    return {
      i1: 0,
 	  i2: 0,
 	  i3: 0,
	  i4: 0,
    }
  },
 })

app.component('animated-integer', {
  template: '<span>{{ fullValue }}</span>',
  props: {
    value: {
      type: Number,
      required: true
    }
  },
  data() {
    return {
      tweeningValue: 0
    }
  },
  computed: {
    fullValue() {
   //   return Math.floor(this.tweeningValue)
	  return Math.floor(this.tweeningValue).toString().replace(/\B(?=(\d{3})+(?!\d))/g, " ")
    }
  },
  methods: {
    tween(newValue, oldValue) {
      gsap.to(this.$data, {
        duration: 0.5,
        tweeningValue: newValue,
        ease: 'sine'
      })
    }
  },
  watch: {
    value(newValue, oldValue) {
      this.tween(newValue, oldValue)
    }
  },
  mounted() {
    this.tween(this.value, 0)
  }
})

const vm = app.mount('#container2')
</script>

    <script type="text/javascript">

	
      $(document).ready(function() {
        <?
		  $Firts1='Paint1(\''
		  .$obj->pck[0]->y.'\','
		  .$obj->pck[0]->a1.','.$obj->pck[0]->a2.','		  
		  .$obj->pck[0]->b1.','.$obj->pck[0]->b2.','		  
		  .$obj->pck[0]->c1.','.$obj->pck[0]->c2.','		  
		  .$obj->pck[0]->d1.','.$obj->pck[0]->e1.','		  
		  .$obj->pck[0]->f1.','.$obj->pck[0]->f2.','.$obj->pck[0]->f3.','		  
		  .$obj->pck[0]->g1.','.$obj->pck[0]->g2.','		  
		  .$obj->pck[0]->h1.','.$obj->pck[0]->h2.','		  
		  .$obj->pck[0]->i1.','.$obj->pck[0]->i2.','.$obj->pck[0]->i3.','.$obj->pck[0]->i4.','
		  .$obj->pck[0]->j1.','.$obj->pck[0]->j2.','.$obj->pck[0]->j3.','.$obj->pck[0]->j4.','		  
          .$obj->pck[0]->k1.','.$obj->pck[0]->k2.','.$obj->pck[0]->k3.','.$obj->pck[0]->k4.','.$obj->pck[0]->k5.
		  ')';
          echo $Firts1;
		  ?>    
	//  $('#name2').innerHTML = '123';
	  var maxHeight = 0;

	  let elem_j1 = document.getElementById("card_j1");
	  let coords_j1 = elem_j1.getBoundingClientRect();

	  let elem_i1 = document.getElementById("card_i1");
	  let coords_i1 = elem_i1.getBoundingClientRect();
	  
	  let elem_menu1 = document.getElementById("card_menu1");
	  let coords_menu1 = elem_menu1.getBoundingClientRect();
	  
	  var card_menu1_Height = $('#card_menu1').height();
	  
	  if (coords_menu1.left < coords_j1.left) {
		  var maxHeight = (card_menu1_Height + (coords_j1.bottom - coords_i1.bottom)*1.09);
		  $('#card_menu1').css('min-height', maxHeight);
	  };
	  
	//  maxHeight = $('#col1').height() - $('#logo1').height() - $('#card_i1').height();
	//  let box = $(elem).getBoundingClientRect();
	//  debugger;
   //   card_j1 = bottom: box.bottom;
  
	  
//	  document.getElementById('name2').innerHTML = $('#logo1').height()+" "+$('#card_menu1').height()+" "+$('#card_i1').height()+" "+$('#col1').height()+" = "+ maxHeight;
	//  document.getElementById('name2').innerHTML = card_j1;
	//  $('#card_menu1').css('min-height', maxHeight-60);
      });
	




	
//
const $ctx1 = document.querySelector("#Chart1");;
Chart1 = new Chart($ctx1, {
    type: 'bar',
    data: {
        labels: ['0-30', '30-40', '40-50', 'от 50'],
        datasets: [{
            label: ' ',
            data: [0,0,0,0],
            backgroundColor: [
                'rgba(255, 69, 0, 0.6)',
                'rgba(255, 140, 0, 0.6)',
                'rgba(255, 69, 0, 0.6)',
                'rgba(255, 140, 0, 0.6)'
            ],
            borderColor: [
                'rgba(255, 69, 0, 1)',
                'rgba(255, 140, 0, 1)',
                'rgba(255, 69, 0, 1)',
                'rgba(255, 140, 0, 1)'
            ],
            borderWidth: 1
        }]
    },
    options: {
	   hover: {
        animationDuration: 1
        },
        animation: {
            duration: 500,
            easing: "easeOutQuart",
            onComplete: function () {
                var ctx = this.chart.ctx;
                ctx.font = Chart.helpers.fontString(Chart.defaults.global.defaultFontFamily, 'normal', Chart.defaults.global.defaultFontFamily);
                ctx.textAlign = 'center';
                ctx.textBaseline = 'bottom';
                this.data.datasets.forEach(function (dataset) {
                    for (var i = 0; i < dataset.data.length; i++) {
                        var model = dataset._meta[Object.keys(dataset._meta)[0]].data[i]._model,
                            scale_max = dataset._meta[Object.keys(dataset._meta)[0]].data[i]._yScale.maxHeight;
                        ctx.fillStyle = 'white';
                        var y_pos = model.y - 5;
                        if ((scale_max - model.y) / scale_max >= 0.93)
                            y_pos = model.y + 20; 
                        ctx.fillText(dataset.data[i], model.x, y_pos);
                    }
                });               
            }
        },		
        legend: {
            display: false
        },
		tooltips: {
            enabled: false
        },
        title: {
            display: true,
            text: '',
            position: 'top',
            fontSize: 24,
            padding: 1,
			fontColor: 'white',
			fontStyle: 'normal'
        },
        scales: {
            yAxes: [{
				display: false,
                ticks: {
                    beginAtZero:true,
                    fontColor: '#2FA6DA',
					fontSize: 18
                },
            }],
          xAxes: [{
                ticks: {
                    fontColor: '#2FA6DA',
					fontSize: 24
                },
            }]
        } 
    }
});	
 

    	
//
const $ctx2 = document.querySelector("#Chart2");;
Chart2 = new Chart($ctx2, {
    type: 'bar',
    data: {
        labels: ['0-5', '5-10', '10-15', '15-20', 'от 20'],
        datasets: [{
            label: ' ',
            data: [0,0,0,0,0],
            backgroundColor: [
                'rgba(255, 69, 0, 0.6)',
                'rgba(255, 140, 0, 0.6)',
                'rgba(255, 69, 0, 0.6)',
                'rgba(255, 140, 0, 0.6)',
				'rgba(255, 69, 0, 0.6)'
            ],
            borderColor: [
                'rgba(255, 69, 0, 1)',
                'rgba(255, 140, 0, 1)',
                'rgba(255, 69, 0, 1)',
                'rgba(255, 140, 0, 1)',
				'rgba(255, 69, 0, 0.6)'
            ],
            borderWidth: 1
        }]
    },
    options: {
	   hover: {
        animationDuration: 1
        },
        animation: {
            duration: 500,
            easing: "easeOutQuart",
            onComplete: function () {
                var ctx = this.chart.ctx;
                ctx.font = Chart.helpers.fontString(Chart.defaults.global.defaultFontFamily, 'normal', Chart.defaults.global.defaultFontFamily);
                ctx.textAlign = 'center';
                ctx.textBaseline = 'bottom';
               this.data.datasets.forEach(function (dataset) {
                    for (var i = 0; i < dataset.data.length; i++) {
                        var model = dataset._meta[Object.keys(dataset._meta)[0]].data[i]._model,
                            scale_max = dataset._meta[Object.keys(dataset._meta)[0]].data[i]._yScale.maxHeight;
                        ctx.fillStyle = 'white';
                        var y_pos = model.y - 5;
                        if ((scale_max - model.y) / scale_max >= 0.93)
                            y_pos = model.y + 20; 
                        ctx.fillText(dataset.data[i], model.x, y_pos);
                    }
                });               
            }
        },				
        legend: {
            display: false
        },
		tooltips: {
            enabled: false
        },
        title: {
            display: true,
            text: '',
            position: 'top',
            fontSize: 24,
            padding: 1,
			fontColor: 'white',
			fontStyle: 'normal'
          },
        scales: {
            yAxes: [{
				display: false,
                ticks: {
                    beginAtZero:true,
                    fontColor: '#2FA6DA',
					fontSize: 18
                },
            }],
          xAxes: [{
                ticks: {
                    fontColor: '#2FA6DA',
					fontSize: 24
                },
            }]
        } 
    }
});	

    //	
	  
    </script>
	
	<script>
    function Paint1(name,a1,a2,b1,b2,c1,c2,d1,e1,f1,f2,f3,g1,g2,h1,h2,i1,i2,i3,i4,j1,j2,j3,j4,k1,k2,k3,k4,k5) {

	document.getElementById('name1').innerHTML = name;
	document.getElementById('a1').innerHTML = a1;
	document.getElementById('a2').innerHTML = a2;
	document.getElementById('b1').innerHTML = b1;
	document.getElementById('b2').innerHTML = b2;
	document.getElementById('c1').innerHTML = c1;
	document.getElementById('c2').innerHTML = c2;  		
   	document.getElementById('d1').innerHTML = d1;
	document.getElementById('e1').innerHTML = e1;
	document.getElementById('f1').innerHTML = f1;
	document.getElementById('f2').innerHTML = f2;	
	document.getElementById('f3').innerHTML = f3;
	document.getElementById('g1').innerHTML = g1+"\/"+g2;	
	document.getElementById('h1').innerHTML = h1;
	document.getElementById('h2').innerHTML = h2;
	//document.getElementById('i1').innerHTML = numberWithSpaces(i1);
	//document.getElementById('i2').innerHTML = numberWithSpaces(i2);
	//document.getElementById('i3').innerHTML = numberWithSpaces(i3);
	//document.getElementById('i4').innerHTML = numberWithSpaces(i4);
	vm.i1=i1;
	vm.i2=i2;
	vm.i3=i3;
	vm.i4=i4;
	PaintChart1(j1,j2,j3,j4);
	PaintChart2(k1,k2,k3,k4,k5);
    }
	
   function numberWithSpaces(x) {
   return x.toString().replace(/\B(?=(\d{3})+(?!\d))/g, " ");
   }
   
	   function AllHeight() {   
		var maxHeight = 0;
	  $('.card').each(function(){
		if ($(this).height() > maxHeight) {
		  maxHeight = $(this).height();
		}
	  });
	  $('.card').each(function(){
		$(this).css('min-height', maxHeight);
	  });
	   };
    </script>

    <script type="text/javascript">

function PaintChart1(j1,j2,j3,j4) {
    Chart1.data.datasets[0].data = [j1,j2,j3,j4];
    Chart1.update();
}


function PaintChart2(k1,k2,k3,k4,k5) {
    Chart2.data.datasets[0].data = [k1,k2,k3,k4,k5];
    Chart2.update();
}


    </script>

 <footer>
      <div class="container-fluid">
        <div class="row">
		   <div class="col-lg-12"> <center><h6>&copy; 2022</h6></center> </div>
        </div>
      </div>
 </footer>
</body>
</html>
    <?
  }
 ?>
