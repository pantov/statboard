<?
  function get_data($src)
  {
   $arr = simplexml_load_file($src);
   return $arr;
  }
  $filename = 'data.xml';
  if (file_exists($filename)) {
	date_default_timezone_set('UTC');
	date_default_timezone_set("Europe/Moscow");
	$xml_update_time = date("d.m.Y-H:i:s", filectime($filename));
  }  
if (isset($_GET['update'])) {
  $xml="http://i48s-d-db1/ina/st/hs/sttst/data/3";
  $objxml = get_data($xml);
  if ($objxml) {$objxml->saveXML("data.xml");}
};
  $obj = get_data("data.xml");
  if (!$obj) { die("<h1>Нет данных для отображения </h1>"); 
  
  } else {
    ?>
<!DOCTYPE html>
<html lang="ru">
<head>
  <title>HR-аналитика (УСП)</title>
  <meta http-equiv="Cache-Control" content="no-cache">
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
   <script src="https://cdnjs.cloudflare.com/ajax/libs/chartjs-plugin-annotation/0.5.7/chartjs-plugin-annotation.min.js"></script>
 
--> 
  <script src="scripts/jquery.min.js"></script>
  <script src="scripts/popper.min.js"></script>
  
  <link rel="stylesheet" href="scripts/bootstrap.min.css">
  <script src="scripts/bootstrap.min.js"></script>
 
   <script src="scripts/Chart.bundle.min.js"></script>
   
   <script src="scripts/vue.global.prod.js"></script>
   <script src="scripts/gsap.min.js"></script>
   <script src="scripts/chartjs-plugin-annotation.min.js"></script>
  

 
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

   .colortext {
     color: #2FA6DA; /* Красный цвет выделения */
   }
   .color2 {
    color: yellow; 
   }
   .color3 {
    color: #bf9000; 
   }
  
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
	   <p><center><img src="images/atv.png" class="img-circle" width="200" height="200"/></center></p>
	   </div>
	   <div class="col-lg-6">
	   <p></p>
				  <tr>
					<td><h2><strong>Андреева <br>Татьяна  <br>Викторовна </strong></h2></td>
					<td><h5 style="color: black" ><p></p>Начальник управления</h5></td>
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
    <h5 class="text-white">Учреждения социальной политики</h5>
    </button> 
    <div class="dropdown-menu">
	<?
         
      $gods=substr($obj->pck[0]->date,0,4);
      $kvartalm = substr($obj->pck[0]->date,5,2);
      if ($kvartalm=='01') $kvartal='1 квартал'; if ($kvartalm=='04') $kvartal='1 полугодие'; if ($kvartalm=='07') $kvartal='9 месяцев'; if ($kvartalm=='10') $kvartal='';
		  $i=0;
		  $menu1=''; 
		  
          foreach($obj->children() as $pck ) {
	      $name=str_replace('"', '', $obj->pck[$i]->y);	
		  $menu01=$name.'\','
		  .$obj->pck[$i]->a1.','.$obj->pck[$i]->a2.','		  
		  .$obj->pck[$i]->b1.','.$obj->pck[$i]->b2.','.$obj->pck[$i]->b3.','		  
		  .$obj->pck[$i]->i1.','.$obj->pck[$i]->i2.','.$obj->pck[$i]->i11.','.$obj->pck[$i]->i12.','
		  .$obj->pck[$i]->c1.','.$obj->pck[$i]->c2.','
		  .$obj->pck[$i]->d1.','
		  .$obj->pck[$i]->e1.','.$obj->pck[$i]->e2.','
		  .$obj->pck[$i]->f1.','.$obj->pck[$i]->f2.','.$obj->pck[$i]->f11.','.$obj->pck[$i]->f12.','.$obj->pck[$i]->f21.','.$obj->pck[$i]->f22.','
		  .$obj->pck[$i]->g1.','.$obj->pck[$i]->g2.','.$obj->pck[$i]->g11.','.$obj->pck[$i]->g12.','.$obj->pck[$i]->g21.','.$obj->pck[$i]->g22.','
		  .$obj->pck[$i]->h1.','.$obj->pck[$i]->h2.','.$obj->pck[$i]->h3.','.$obj->pck[$i]->h4.','.$obj->pck[$i]->h5.','.$obj->pck[$i]->h11.','
		  .$obj->pck[$i]->h12.','.$obj->pck[$i]->h13.','.$obj->pck[$i]->h14.','.$obj->pck[$i]->h15.','.$obj->pck[$i]->h21.','.$obj->pck[$i]->h22.','
		  .$obj->pck[$i]->h23.','.$obj->pck[$i]->h24.','.$obj->pck[$i]->h25.','
		  .$obj->pck[$i]->j1.','.$obj->pck[$i]->j2.','.$obj->pck[$i]->j3.','.$obj->pck[$i]->j11.','.$obj->pck[$i]->j12.','.$obj->pck[$i]->j13.','
		  .$obj->pck[$i]->j21.','.$obj->pck[$i]->j22.','.$obj->pck[$i]->j23.','			
		  .$obj->pck[$i]->k0.','.$obj->pck[$i]->k1.','.$obj->pck[$i]->k2.','.$obj->pck[$i]->k3.','.$obj->pck[$i]->k4.','.$obj->pck[$i]->k5.','.$obj->pck[$i]->k6.','.$obj->pck[$i]->k7.','.$obj->pck[$i]->k8.','.$obj->pck[$i]->k9.','.$obj->pck[$i]->k10.','
		  .$obj->pck[$i]->l1.','.$obj->pck[$i]->l2.','.$obj->pck[$i]->l3.','.$obj->pck[$i]->l11.','.$obj->pck[$i]->l12.','.$obj->pck[$i]->l13.','.$obj->pck[$i]->l21.','.$obj->pck[$i]->l22.','.$obj->pck[$i]->l23.','.'0';
			
		  if ($i<1) { 
		  
          $menu1=$menu1.'<a class="dropdown-item" href="#" onclick="Paint1(\''
		  .$menu01.	  
		  ')" > <b>'.$pck->y.'</b></a> <div class="dropdown-divider"></div>' ;
		  
		  $menu100="Paint1('".$menu01.")";

		  } else {
          $menu1=$menu1.'<a class="dropdown-item" href="#" onclick="Paint1(\''
		  .$menu01.	  
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
       <div class="col-lg-12"><!-- i0 -->
	   		<p></p>
			<div id="card_i1" class="card border bg-dark text-white  rounded" >
			<div  class="card-header text-center"> <h4> АНАЛИТИКА<br>численности и заработной платы<br>по итогам <?echo $gods?> года  <br>с аналогичными данными за предыдущие года</h4> </div>
			 
			</div>	
			<p></p>	  
	   
	   </div>   
   </div>
 
      <div class="row bg-dark">
       <div class="col-lg-12"><!-- i -->
	   		<p></p>
			<div id="card_i1" class="card border bg-dark text-white  rounded" >
			<div  class="card-header text-center"> <h4> Средняя зарплата, руб. </h4> </div>
			 
				<table text-align="center" style="width:100%">
				  <tr>
					<td><center><p>Руководители</p></center></td>
					<td><center><p>Все работники <br> (за исключением АУП)</p></center></td>
				  </tr>
				  <tr>
					<td colspan="2" align="center"><h5> <?echo $kvartal?> <?echo $gods-1?> год</h5></td>
				  </tr>				  
				  <tr>
					<td><center><h3 id="i1"> <animated-integer :value="i1"></animated-integer> </h3></center></td>
					<td><center><h3 id="i2"> <animated-integer :value="i2"></animated-integer> </h3></center></td>
				  </tr>
				  <tr>
					<td colspan="2" align="center"><h5><?echo $kvartal?> <?echo $gods?> год</h5></td>
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
			<div  class="card-header text-center"> <h4> Численность, сотр. </h4> </div>
			 
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
			<div  class="card-header text-center"> <h4> Должности, сотр. </h4> </div>
				<table text-align="center" style="width:100%">
				  <tr>
					<td><center><h5>АУП</h5></center></td>
					<td><center><h5>Отраслевое специалисты</h5></center></td>
					<td><center><h5>Прочие</h5></center></td>
				  </tr>
				  <tr>
					<td><center><h3 id="b1">0</h3></center></td>
					<td><center><h3 id="b2">0</h3></center></td>
					<td><center><h3 id="b3">0</h3></center></td>
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
			<div  class="card-header text-center"> <h4 id="tec"> Текучесть за период, сотр.</h4></div>
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
			<div  class="card-header text-center"> <h4> Средний возраст, лет. </h4> </div>
				<table text-align="center" style="width:100%">
				<tr>
					<td><center><h5> &nbsp </h5></center></td>
				  </tr> 
				<tr>
					<td><center><h3 id="d1">0</h3></center></td>
				  </tr>
				</table>
			</div>	
			<p></p>	   	   
	   </div>
	   <div class="col-lg-4"><!-- e -->
			<p></p>
			<div class="card border bg-dark text-white  rounded" >
			<div class="card-header text-center"> <h4> Гендерный состав, %</div>
				<table text-align="center" style="width:100%">
				<table text-align="center" style="width:100%">
				  <tr>
					<td><center><h5>Муж.</h5></center></td>
					<td><center><h5>Жен.</h5></center></td>
				  </tr>
				  <tr>
					<td><center><h3 id="e1">0</h3></center></td>
					<td><center><h3 id="e2">0</h3></center></td>
				  </tr>
				</table>
			</div>	
			<p></p>	   
	   </div>
   </div>
   
   
   <div class="row bg-dark">
       <div class="col-lg-4"><!-- Chart1-->
	   <p></p>
			<div class="card border bg-dark text-white  rounded" >
			<div  class="card-header text-center"> <h4>Среднесписочная численность, сотр. <br> и темп её роста, %</h4></div>
     	     <div class="container">
              <canvas id="Chart1" width="200" height="100"></canvas>
	          <p></p>
             </div>	  
			</div>	
		 <p></p>
	   </div>
       <div class="col-lg-4"><!-- Chart2-->
	   <p></p>
			<div  class="card border bg-dark text-white  rounded" >
			<div  class="card-header text-center"> <h4>Среднемесячная з/плата, руб. <br> и темп её роста, % </h4></div>
     	     <div class="container">
              <canvas id="Chart2" width="200" height="100"></canvas>
	          <p></p>
             </div>	  
			</div>	
		 <p></p>
	   </div>
	   <div class="col-lg-4"><!--Chart3 -->
	   <p></p>
			<div  class="card border bg-dark text-white  rounded" >
			<div  class="card-header text-center"> <h4>Структура з/платы, % <br> <span style="color:#548235">■</span> - Оклад. <span style="color:#bf9000">■</span> - Комп. <span style="color:#fe5f35">■</span> - Стим. <span style="color:#952101">■</span> - Проч.</h4></div>
     	     <div class="container">
              <canvas id="Chart3" width="200" height="100"></canvas>
	          <p></p>
             </div>	  
			</div>	
		 <p></p>
	   </div>   
   </div>
   
   <div class="row bg-dark">
        <div class="col-lg-4"><!-- Chart4 -->
		  <p></p>
			<div id="card_j1" class="card border bg-dark text-white  rounded" >
			<div  class="card-header text-center"> <h4> ПДД в структуре заработной платы, % <br> <span style="color:#bf9000">■</span> - ПДД <span style="color:#fe5f35">■</span> - Бюджет </h4> </div>
     	     <div class="container">
              <canvas id="Chart4" width="200" height="100"></canvas>
	          <p></p>
             </div>	  
			</div>	
		 <p></p>
		</div>
        <div class="col-lg-4"><!-- Chart5 -->
		<p></p>
			<div  class="card border bg-dark text-white  rounded" >
			<div  class="card-header text-center"> <h4>Работники по диапазонам з/платы, сотр. / тыс. руб.<br> <span style="color:yellow">■</span> - Медианная з/плата, руб.</h4></div>
     	     <div class="container">
              <canvas id="Chart5" width="200" height="100"></canvas>
	          <p></p>
             </div>	  
			</div>	
		 <p></p>
		</div>  

		<div class="col-lg-4"><!-- Chart6 -->
		<p></p>
			<div  class="card border bg-dark text-white  rounded" >
			<div  class="card-header text-center"> <h4>Работников всего и получавших МРОТ, сотр. <br> <span style="color:#bf9000">■</span> - доля МРОТ, % </h4></div>
     	     <div class="container">
              <canvas id="Chart6" width="200" height="100"></canvas>
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
 
	
	 <? echo $menu100 ?>

	  var maxHeight = 0;

	  let elem_j1 = document.getElementById("card_j1");
	  let coords_j1 = elem_j1.getBoundingClientRect();

	  let elem_i1 = document.getElementById("card_i1");
	  let coords_i1 = elem_i1.getBoundingClientRect();
	  
	  let elem_menu1 = document.getElementById("card_menu1");
	  let coords_menu1 = elem_menu1.getBoundingClientRect();
	  
	  var card_menu1_Height = $('#card_menu1').height();
	  
	 // if (coords_menu1.left < coords_j1.left) {
		//  var maxHeight = (card_menu1_Height + (coords_j1.bottom - coords_i1.bottom)*1.09);
	//	  $('#card_menu1').css('min-height', maxHeight);
	 // };

      });
	
   
    //	
	  
    </script>
	 <script src="charts.js" type="text/javascript"></script>


	<script>
    function Paint1(name,a1,a2,b1,b2,b3,i1,i2,i11,i12,c1,c2,d1,e1,e2,f1,f2,f11,f12,f21,f22,g1,g2,g11,g12,g21,g22,h1,h2,h3,h4,h5,h11,h12,h13,h14,h15,h21,h22,h23,h24,h25,j1,j2,j3,j11,j12,j13,j21,j22,j23,k0,k1,k2,k3,k4,k5,k6,k7,k8,k9,k10,l1,l2,l3,l11,l12,l13,l21,l22,l23,tmp0)
	{
  //var dataxml=<?echo "'".$obj->pck[0]->date."'"?> 
  //var gods=dataxml.substr(0,4);
  //var kvartalm=dataxml.substr(5,2);
  //var kvartal='1';
  //if (kvartalm=='01') kvartal='1'; if (kvartalm=='04') kvartal='2'; if (kvartalm=='07') kvartal='3'; if (kvartalm=='10') kvartal='4';
	//debugger;
	document.getElementById('name1').innerHTML = name;
	document.getElementById('a1').innerHTML = numberWithSpaces(a1);
	document.getElementById('a2').innerHTML = numberWithSpaces(a2);
	document.getElementById('b1').innerHTML = numberWithSpaces(b1);
	document.getElementById('b2').innerHTML = numberWithSpaces(b2);
	document.getElementById('b3').innerHTML = numberWithSpaces(b3);
	document.getElementById('c1').innerHTML = numberWithSpaces(c1);
	document.getElementById('c2').innerHTML = numberWithSpaces(c2);  		
   	document.getElementById('d1').innerHTML = d1;
	document.getElementById('e1').innerHTML = e1;
	document.getElementById('e2').innerHTML = e2;
	vm.i1=i11;
	vm.i2=i12;
	vm.i3=i1;
	vm.i4=i2;

	PaintChart1(f1,f2,f11,f12,f21,f22);
	PaintChart2(g1,g2,g11,g12,g21,g22);
	PaintChart3(h1,h2,h3,h4,h5,h11,h12,h13,h14,h15,h21,h22,h23,h24,h25);
	PaintChart4(j1,j2,j3,j11,j12,j13,j21,j22,j23);
	PaintChart5(k0,k1,k2,k3,k4,k5,k6,k7,k8,k9,k10);
	PaintChart6(l1,l2,l3,l11,l12,l13,l21,l21,l22,l23);
  
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

function PaintChart1(f1,f2,f11,f12,f21,f22) {
   Chart1.data.datasets[0].data = [f21,f11,f1];
   Chart1.data.datasets[1].data = [f22,f12,f2];
   Chart1.update();
};
function PaintChart2(g1,g2,g11,g12,g21,g22) {
   Chart2.data.datasets[0].data = [g21,g11,g1];
   Chart2.data.datasets[1].data = [g22,g12,g2];
   Chart2.update();
};
function PaintChart3(h1,h2,h3,h4,h5,h11,h12,h13,h14,h15,h21,h22,h23,h24,h25) {
   Chart3.data.datasets[0].data = [h22,h12,h2];
   Chart3.data.datasets[1].data = [h23,h13,h3];
   Chart3.data.datasets[2].data = [h24,h14,h4];
   Chart3.data.datasets[3].data = [h25,h15,h5];
   Chart3.update();
  
};

function PaintChart4(j1,j2,j3,j11,j12,j13,j21,j22,j23) {
   Chart4.data.datasets[1].data = [j22,j12,j2];
   Chart4.data.datasets[0].data = [j23,j13,j3];
   Chart4.update();
   //debugger;
};
function PaintChart5(k0,k1,k2,k3,k4,k5,k6,k7,k8,k9,k10) {
   //Chart5.data.datasets[0].data = [k1,k2,k3,k4,k5];
   Chart5.data.datasets[0].data = [{x: 1, y: k1}, {x: 2, y: k2}, {x: 3, y: k3}, {x: 4, y: k4},{x: 5, y: k5},{x: 6, y: k6}, {x: 7, y: k7}, {x: 8, y: k8}, {x: 9, y: k9},{x: 10, y: k10}];
   //Chart4.config.options.annotations[0].value=4;
   var razdel = (k0-21000)/(71000-21000)*9+1;
  // if (k0<21000) razdel=1;
  // if (k0>71000) razdel=10;
   var R = k0/1000;
   var X=1;
   if (R <= 10)  X =  1 + ( 1 / 40 ) * 0;
   if ((10 < R) && (R <= 20))  X =  1 + ( 1 / 40 ) * R;
   if ((20 < R) && (R <= 50))  X =  1 + ( 1 / 40 ) * (   20 + 8 * ( R - 20 ) );
   if ((50 < R) && (R <= 75))  X =  1 + ( 1 / 40 ) * ( 260 + 4 * ( R - 50 ) );
   if (R > 75)   X =  1 + ( 1 / 40 ) * 360;
   X = X.toFixed(2);

 //  var razdel = Math.floor(Math.random() * 10); 
  //debugger;
   var     options = {
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
                ctx.font = 'bold 20px "Helvetica Neue", "Helvetica", "Arial", sans-serif';
                this.data.datasets.forEach(function (dataset) {
                    for (var i = 0; i < dataset.data.length; i++) {
                        var model = dataset._meta[Object.keys(dataset._meta)[0]].data[i]._model,
                            scale_max = dataset._meta[Object.keys(dataset._meta)[0]].data[i]._yScale.maxHeight;
                        ctx.fillStyle = 'white';
                        var y_pos = model.y + 5;
						
                        if ((scale_max - model.y) / scale_max >= 0.93)
                            y_pos = model.y + 20; 
						ctx.fillText(dataset.data[i].y, model.x, y_pos);

                        }
                });               
            }
        },
        legend: {
            display: false,
            labels: {
                fontColor: 'white',
                fontSize: 20,
                padding: 1
            }
        },
    tooltips: {
        enabled: false
    },
    title: {
        display: false,
        text: '',
        position: 'top',
        fontSize: 18,
        padding: 1,
        fontColor: 'white',
        fontStyle: 'normal'
    },  		
      annotation: {
      annotations: [
          {
            type: "line",
            mode: "vertical",
            scaleID: "x-axis-0",
            value:  X,
            borderWidth: 3,
            borderColor: "yellow",
			label: {
        content: numberWithSpaces(k0)+' руб.',
       // content: numberWithSpaces(k0)+' руб. ('+X+')',
              enabled: true,
              position: "center",
              xAdjust: 40,
            }
          },
		  {
            type: "line",
            mode: "horizontal",
            scaleID: "left",
            value: 0,
            borderColor: '#2FA6DA',
			borderWidth: 3,
          }
        ]
      },
      scales: {
        yAxes: [{
            stacked: true,
            display: false,
            "id": "left",
            "position": "left",
            ticks: {
                beginAtZero:true,
                fontColor: '#2FA6DA',
                fontSize: 14
            }
               },
            {
              stacked: true,
            display: false,
            "id": "right",
            "position": "right",
            ticks: {
                beginAtZero:true,
                fontColor: '#2FA6DA',
                fontSize: 14
            },
        }],
        xAxes: [{
          type: 'linear',
          position: 'bottom',
          ticks: {
                max: 10,
                min: 1,
                stepSize: 1,
                fontColor: '#2FA6DA',
			    fontSize: 24,
                callback: function(value, index, values) {
                     return chartData.labels[index];
                //  return this.datasets[0].labels[index];
                }
           }
        }]
      }
    };


   Chart5.options =  options;

   Chart5.update();
  // debugger;
};
function PaintChart6(l1,l2,l3,l11,l12,l13,l21,l22,l23) {
   Chart6.data.datasets[1].data = [l21,l11,l1];
   Chart6.data.datasets[0].data = [l22,l12,l2];
   Chart6.data.datasets[2].data = [l23,l13,l3];
   Chart6.update();
   //debugger;
};
    </script>

 <footer>
      <div class="container-fluid">
        <div class="row">
		   <div class="col-lg-12"> <center><h6 data-toggle="tooltip" title=<? echo $xml_update_time ?>>&copy; 2023</h6></center> </div>
        </div>
      </div>
 </footer>
</body>
</html>
    <?
  }
 ?>
