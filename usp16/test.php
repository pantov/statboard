<?
   function get_data($src)
  {
   $arr = simplexml_load_file($src);
   return $arr;
  }
  $obj = get_data("data.xml");
   
        $dd=$obj->pck[0]->date;
  	   // echo $dd;
		//echo "\n";
		
		
		$arr_date = explode(";",$obj->pck[0]->date);
		$menu_date='';
		$d=1;
		//foreach ($arr_date as $dates) {
		//	$menu_date=$menu_date.'<a class="dropdown-item" href="#">'.$dates.'</a>';
		//	echo $dates;
		//	echo "\n";
		//	$d=$d+1;
		//}			
			
		#echo $arr_date;
		//echo $menu_date;


        
		foreach($obj->children() as $pck ) {
			 echo $pck.'ooo\n';
			// attributes()
			foreach($pck->attributes() as $atr ) {
				echo $atr.' atr\n';
			}				
			 
		 }
			 
?>