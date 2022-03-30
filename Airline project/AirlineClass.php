<?php
class Airline{
	private $name;
	private $airplanes;
	private $totalPassangers;
	
	function __construct($n, $a, $t){
		$this->name  = $n;
		$this->airplanes = $a;
		$this->totalPassangers = $t;
	}
	
	function setName($n){
		$this->name  = $n;
	}
	
	function getName(){
		return $this->name;
	}
	
	function setAirplanes($a){
		$this->airplanes = $a;
	}
	
	function getAirplanes(){
		return $this->airplanes;
	}
	//from where you tiik associatename??
	function addAirplane($a,$airplane){
		$this->airplanes[$a]=  $airplane;
	}
	
	function deleteAirplane($pos){
		unset($this->airplanes[$pos]);
	}
	
	function setTotalPassangers($t){
		$this->totalPassangers = $t;
	}
	
	function getTotalPassangers(){
		$total = 0;
		
		foreach($this->airplanes as $index => $airplane){
			//echo $index . "=>" . $airplane->toString();
			$total = $total + $airplane->getPassengers();
		}
		echo "Total Passangers:". $total;
	}
	
	function getTotalSeatsAirplanes(){
		$total = 0;
		
		foreach($this->airplanes as $index => $airplane){
			echo $index . "=>" . $airplane->toString();
			$total = $total + $airplane->getSeats();
		}
		
		echo "Total of seat:". $total;

	}
		
	function toString(){
		return "Name:" . $this->name . "<br> Airplanes:" . $this->airplanes . "<br> TotalPassangers:" . $this->totalPassangers .  "<br><br>";
	}
	
	
	
}