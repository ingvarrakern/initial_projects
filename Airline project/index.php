<?php
include('AirplaneClass.php');
include('AirlineClass.php');

function main(){
	$firstairpline = new Airplane(25,10);

	//echo " 1 Airpline:" . "<br><br>";
	//echo $firstairpline->toString();

	//echo " 2 Airpline:" . "<br><br>";
	$sa = new Airplane(200,50);
	//echo $sa->toString();

	//echo " 3 Airpline:" . "<br><br>";
	$ta = new Airplane(10,43);
	//echo $ta->toString();

	//echo " 4 Airpline:" . "<br><br>";
	$fa = new Airplane(70,66);
	//echo $fa->toString();

	$stock = [
		"airplane1" => $firstairpline,
		"airplane2" => $sa,
		"airplane3" => $ta,
		"airplane4" => $fa
	];

	$airline = new Airline("Emirate",$stock,30);

	echo "<pre>".print_r($airline,true)."</pre>";

	echo "after 20 days an airplane crashed (airplane 2) <br>";

	$airline->deleteAirplane("airplane1");

	echo "<pre>".print_r($airline,true)."</pre>";

	echo "after two months I bought one extra airplane<br>";

	$extraair = new Airplane(10,10);

	$airline->addAirplane("extraAirplane",$extraair);
	
	echo "And after week I bought one more airplane<br>";
	$fiveair = new Airplane(50,40);

	$airline->addAirplane("FiveAirplane",$fiveair);

	echo "<pre>".print_r($airline,true)."</pre>";

	$airline->getTotalSeatsAirplanes();
	$airline->getTotalPassangers();

	/*$a = 4;
	if($a<3){
		echo "a is less than 3";
	}else{
		echo "a is bigger than 3" ;
	}*/
}

main();

?>
