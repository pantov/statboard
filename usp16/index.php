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
  $xml="http://i48s-d-db1/ina/st/hs/sttst/data/4";
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
   .scrollable-menu {
    height: auto;
    max-height: 400px;
    overflow-x: hidden;
}
.scrollable-menu2 {
    height: auto;
    max-height: 120px;
    overflow-x: hidden;
}
  </style>
</head>
<body>
	<script type="text/javascript">
  var Gdate=1;Ggods=2024;
	var Ga1;Ga2;Gb1;Gb1;Gb2;Gb3;Gi1;Gi2;Gi11;Gi12;Gc1;Gc2;Gd1;Ge1;Ge2;Gf1;Gf2;Gf11;Gf12;Gf21;Gf22;Gg1;Gg2;Gg11;Gg12;Gg21;Gg22;Gh1;Gh2;Gh3;Gh4;Gh5;Gh11;Gh12;Gh13;Gh14;Gh15;Gh21;Gh22;Gh23;Gh24;Gh25;Gj1;Gj2;Gj3;Gj11;Gj12;Gj13;Gj21;Gj22;Gj23;Gk0;Gk1;Gk2;Gk3;Gk4;Gk5;Gk6;Gk7;Gk8;Gk9;Gk10;Gl1;Gl2;Gl3;Gl11;Gl12;Gl13;Gl21;Gl22;Gl23;Gtmp0;
	  </script>
	
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
    <div class="dropdown-menu scrollable-menu">
	<?
      $gods=substr($obj->pck[0]->date,1,4);
      $kvartalm = substr($obj->pck[0]->date,6,2);
      if ($kvartalm=='01') $kvartal='1 квартал'; if ($kvartalm=='04') $kvartal='1 полугодие'; if ($kvartalm=='07') $kvartal='9 месяцев'; if ($kvartalm=='10') $kvartal='';
      if ($kvartalm=='01') $kvartal2='1 квартала'; if ($kvartalm=='04') $kvartal2='1 полугодия'; if ($kvartalm=='07') $kvartal2='9 месяцев'; if ($kvartalm=='10') $kvartal2='';
		  $i=0;
		  $menu1=''; 
		  
          foreach($obj->children() as $pck ) {
	      $name=str_replace('"', '', $obj->pck[$i]->y);
	      $name=str_replace(',', ' ', $name);
		  $menu01=$name.','
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
			
		  $menu01=str_replace(',', '\',\'', $menu01);
		  
		  if ($i<1) { 
		  
          $menu1=$menu1.'<a class="dropdown-item" href="#" onclick="Paint1(\''
		  .$menu01.	  
		  '\')" > <b>'.$pck->y.'</b></a> <div class="dropdown-divider"></div>' ;
		  
		  $menu100="Paint1('".$menu01.'\''.")";

		  } else {
          $menu1=$menu1.'<a class="dropdown-item" href="#" onclick="Paint1(\''
		  .$menu01.	  
		  '\')" >'.$pck->y.'</a>';		  
		  }
		  $i=$i+1;
		  } 
          echo $menu1;
		  ?> 
     </div>		  
    </div>
	
  </div>			
		
<div class="card-body text-center"><h4 id="name1"></h4></div>
			<p></p>						
			</div>	
	   </div>   
   </div>
   <div class="row bg-dark">
       <div class="col-lg-12"><!-- i0 -->
	   		<p></p>
			<div id="card_i1" class="card border bg-dark text-white  rounded" >
			<div  class="card-header text-center"> <h4> АНАЛИТИКА<br>численности и заработной платы<br>
			
<p></p>			
<div class="dropdown dropup">
 
    <button id="Btn1" type="button" class="btn-sm btn-secondary dropdown-toggle" data-toggle="dropdown" >
    <h5 id="select_date" class="text-white">На дату: 01-01-2024</h5>
    </button> 
<div class="dropdown-menu scrollable-menu2">
	<?
	  $dats = substr($obj->pck[0]->date,1);
		$arr_date = explode(";",$dats);
		$menu_date='';
		$d=0;
		foreach ($arr_date as $dates) {
        $gods1=substr($dates,0,4);
        $k = substr($dates,5,2);
        if ($k=='01') $kv='на 1 квартал'; if ($k=='04') $kv='на 1 полугодие'; if ($k=='07') $kv='на 9 месяцев'; if ($k=='10') $kv='за';
			if ($d==0) $dats0=$kv.' '.$gods1.' г.';
			$menu_date=$menu_date.'<a class="dropdown-item" href="#" onclick="Select_date('.$d.',\''.$kv.' '.$gods1.' г.'.'\','.$gods1.')" >'.$kv.' '.$gods1.' г.'.'</a>';
			$d=$d+1;
		}			
		echo $menu_date;	
		  ?> 
		  
     </div>	
</div> 				
			
			
			
			<br>с аналогичными данными за предыдущие года  </h4> </div>
			 
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
					<td colspan="2" align="center">
					
					
			
					
                  <h5 id="God01">предыдущий период</h5>					
					
					
					
					</td>
				  </tr>				  
				  <tr>
					<td><center><h3 id="i1"> <animated-integer :value="i1"></animated-integer> </h3></center></td>
					<td><center><h3 id="i2"> <animated-integer :value="i2"></animated-integer> </h3></center></td>
				  </tr>
				  <tr>
					<td colspan="2" align="center">
					<h5 id="God02"><?echo $dats0?></h5>
					</td>
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
			<div  class="card-header text-center"> <h4> Численность, ставок. </h4> </div>
			 
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
			<div  class="card-header text-center"> <h4> Факт по категориям должностей, ставок. </h4> </div>
				<table text-align="center" style="width:100%">
				  <tr>
					<td><center><h5>АУП</h5></center></td>
					<td><center><h5>Отраслевые специалисты</h5></center></td>
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
			<div  class="card-header text-center"> <h4 id="tec"> Текучесть <?echo $dats0?>  чел.</h4></div>
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
			<div  class="card-header text-center"> <h4>Среднемесячная зарплата, руб. <br> и темп её роста, % </h4></div>
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
			<div  class="card-header text-center"> <h4>Структура зарплаты, % <br> <span style="color:#548235">■</span> - Оклад. <span style="color:#bf9000">■</span> - Комп. <span style="color:#fe5f35">■</span> - Стим. <span style="color:#952101">■</span> - Проч.</h4></div>
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
			<div  class="card-header text-center"> <h4>Работники по уровню зарплаты, тыс.руб.<br> <span style="color:yellow">■</span> - Медианная зарплата, руб.</h4></div>
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
			<div  class="card-header text-center"> <h4>Работников всего и получавших МРОТ <br> <span style="color:#bf9000">■</span> - доля МРОТ, % </h4></div>
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
 
	//debugger;
	
	 <? echo $menu100 ?>
     
     document.getElementById('select_date').innerHTML = '<?echo $dats0?>';
     document.getElementById('God02').innerHTML = '<?echo $dats0?>';

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
	function Select_date(d,name,g)
	{
	
  Ggods=g;
  Chart1.data.labels = [Ggods-2, Ggods-1, Ggods];
  Chart2.data.labels = [Ggods-2, Ggods-1, Ggods];
  Chart3.data.labels = [Ggods-2, Ggods-1, Ggods];
  Chart4.data.labels = [Ggods-2, Ggods-1, Ggods];
  Chart5.data.labels = [Ggods-2, Ggods-1, Ggods];
  Chart6.data.labels = [Ggods-2, Ggods-1, Ggods];
  debugger;
	document.getElementById('select_date').innerHTML = name;
  Gdate=d+1;
	Ggods=name.substring(0,4);
	
  document.getElementById('tec').innerHTML =  "Текучесть "+name+" чел.";

    document.getElementById('God02').innerHTML = name;
    
    Paint0();
	}

    function Paint0(){
	//document.getElementById('gods').innerHTML = Ggods+' год';
	
	document.getElementById('a1').innerHTML = numberWithSpaces(Ga1.split(';')[Gdate]);
	document.getElementById('a2').innerHTML = numberWithSpaces(Ga2.split(';')[Gdate]);
	document.getElementById('b1').innerHTML = numberWithSpaces(Gb1.split(';')[Gdate]);
	document.getElementById('b2').innerHTML = numberWithSpaces(Gb2.split(';')[Gdate]);
	document.getElementById('b3').innerHTML = numberWithSpaces(Gb3.split(';')[Gdate]);
	document.getElementById('c1').innerHTML = numberWithSpaces(Gc1.split(';')[Gdate]);
	document.getElementById('c2').innerHTML = numberWithSpaces(Gc2.split(';')[Gdate]);  		
    document.getElementById('d1').innerHTML = Gd1.split(';')[Gdate];
	document.getElementById('e1').innerHTML = Ge1.split(';')[Gdate];
	document.getElementById('e2').innerHTML = Ge2.split(';')[Gdate];
	vm.i1=Gi11.split(';')[Gdate];
	vm.i2=Gi12.split(';')[Gdate];
	vm.i3=Gi1.split(';')[Gdate];
	vm.i4=Gi2.split(';')[Gdate];

	PaintChart1(Gf1.split(';')[Gdate],Gf2.split(';')[Gdate],Gf11.split(';')[Gdate],Gf12.split(';')[Gdate],Gf21.split(';')[Gdate],Gf22.split(';')[Gdate]);
	PaintChart2(Gg1.split(';')[Gdate],Gg2.split(';')[Gdate],Gg11.split(';')[Gdate],Gg12.split(';')[Gdate],Gg21.split(';')[Gdate],Gg22.split(';')[Gdate]);
	PaintChart3(Gh1.split(';')[Gdate],Gh2.split(';')[Gdate],Gh3.split(';')[Gdate],Gh4.split(';')[Gdate],Gh5.split(';')[Gdate],Gh11.split(';')[Gdate],Gh12.split(';')[Gdate],Gh13.split(';')[Gdate],Gh14.split(';')[Gdate],Gh15.split(';')[Gdate],Gh21.split(';')[Gdate],Gh22.split(';')[Gdate],Gh23.split(';')[Gdate],Gh24.split(';')[Gdate],Gh25.split(';')[Gdate]);
	PaintChart4(Gj1.split(';')[Gdate],Gj2.split(';')[Gdate],Gj3.split(';')[Gdate],Gj11.split(';')[Gdate],Gj12.split(';')[Gdate],Gj13.split(';')[Gdate],Gj21.split(';')[Gdate],Gj22.split(';')[Gdate],Gj23.split(';')[Gdate]);
	PaintChart5(Gk0.split(';')[Gdate],Gk1.split(';')[Gdate],Gk2.split(';')[Gdate],Gk3.split(';')[Gdate],Gk4.split(';')[Gdate],Gk5.split(';')[Gdate],Gk6.split(';')[Gdate],Gk7.split(';')[Gdate],Gk8.split(';')[Gdate],Gk9.split(';')[Gdate],Gk10.split(';')[Gdate]);
	PaintChart6(Gl1.split(';')[Gdate],Gl2.split(';')[Gdate],Gl3.split(';')[Gdate],Gl11.split(';')[Gdate],Gl12.split(';')[Gdate],Gl13.split(';')[Gdate],Gl21.split(';')[Gdate],Gl22.split(';')[Gdate],Gl23.split(';')[Gdate]);	
//debugger;	
	}

	
  function Paint1(name,a1,a2,b1,b2,b3,i1,i2,i11,i12,c1,c2,d1,e1,e2,f1,f2,f11,f12,f21,f22,g1,g2,g11,g12,g21,g22,h1,h2,h3,h4,h5,h11,h12,h13,h14,h15,h21,h22,h23,h24,h25,j1,j2,j3,j11,j12,j13,j21,j22,j23,k0,k1,k2,k3,k4,k5,k6,k7,k8,k9,k10,l1,l2,l3,l11,l12,l13,l21,l22,l23,tmp0)
	{
  Ga1=a1;Ga2=a2;Gb1=b1;Gb2=b2;Gb3=b3;Gi1=i1;Gi2=i2;Gi11=i11;Gi12=i12;Gc1=c1;Gc2=c2;Gd1=d1;Ge1=e1;Ge2=e2;Gf1=f1;Gf2=f2;Gf11=f11;Gf12=f12;Gf21=f21;
	Gf22=f22;Gg1=g1;Gg2=g2;Gg11=g11;Gg12=g12;Gg21=g21;Gg22=g22;Gh1=h1;Gh2=h2;Gh3=h3;Gh4=h4;Gh5=h5;Gh11=h11;Gh12=h12;Gh13=h13;Gh14=h14;Gh15=h15;Gh21=h21;
	Gh22=h22;Gh23=h23;Gh24=h24;Gh25=h25;Gj1=j1;Gj2=j2;Gj3=j3;Gj11=j11;Gj12=j12;Gj13=j13;Gj21=j21;Gj22=j22;Gj23=j23;
	Gk0=k0;Gk1=k1;Gk2=k2;Gk3=k3;Gk4=k4;Gk5=k5;Gk6=k6;Gk7=k7;Gk8=k8;Gk9=k9;Gk10=k10;Gl1=l1;Gl2=l2;Gl3=l3;Gl11=l11;Gl12=l12;Gl13=l13;Gl21=l21;Gl22=l22;Gl23=l23; 
	
	document.getElementById('name1').innerHTML = name;
	//document.getElementById('gods1').innerHTML = Ggods+' год';
	//debugger;
	Paint0();
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
  // debugger;
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
              position: "bottom",
              xAdjust: -40,
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
