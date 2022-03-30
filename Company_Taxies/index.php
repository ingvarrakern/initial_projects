<?php
include('CompanyTaxiesClass.php');
include('TaxiesClass.php');

function main(){
	$firstcar = new Taxies(4,"sedan","red","s34fg",3,);

	$secondcar = new Taxies(4,"sedan","blue","XK210",1,);
	
	$thirdcar = new Taxies(4,"sedan","green","IHH54",4,);
	
	$fourthcar = new Taxies(4,"sedan","gray","666fg",0,);

	$stock = [
		"Car1" => $firstcar,
		"Car2" => $secondcar,
		"Car3" => $thirdcar,
		"Car4" => $fourthcar
	];

	$companytaxi = new TaxiesCompany(); /// in this way i can make instance of TaxiesCompany class
    echo $companytaxi->toString(); /// in this way i can call a function into  TaxiesCompany class
	echo "<br>";
	$companytaxi->setName("My new name"); /// in this way i CHANGE attr
	$companytaxi->setId("My new id");
	$companytaxi->setRepairS("My new repairs store");
	echo $companytaxi->toString(); /// in this way i can call a function into  TaxiesCompany class
	
	$companytaxi->setStock($stock);
		
	echo $companytaxi->toString();
	
	$companytaxi->getStock()["Car1"]->setTrip(120,200);
	$companytaxi->getStock()["Car2"]->setTrip(120,150);

	foreach($companytaxi->getStock() as $taxi){
		echo $taxi->toString();
	}
	
	$total = 0;
	foreach($companytaxi->getStock() as $taxi){
		$total = $total + $taxi->getTrip()["howmuch"];
	}
	echo "Money report: ". $total;

	
	$totalFree = 0;
	foreach ($companytaxi->getStock() as $taxi) {
		if($taxi->getStatus() == "Busy")
			$totalFree = $totalFree + 1;
	}
	echo "<br>Taxis free: " . $totalFree;
	
}


main();


?>
