<?php
class Taxies {
	private $seats;
	private $types;
	private $color;
	private $serialnumber;
	private $passangers;
	private $status; 
	private $trip = [
		"howlong" => 0,
		"howmuch" => 0
		]; 
	
	function __construct($t,$p,$c,$sn,$st){
		$this->seats = $t;
		$this->types = $p;
		$this->color = $c;
		$this->serialnumber = $sn;
		$this->passangers = $st;
		//$this->status = $r;
	}
	
	function setSeats($b){
		$this->totalseats = $b;
	}
	
	function getSeats(){
		return $this->totalseats;
	}
	
	function setTypes($p){
		$this->types = $p;
	}
	
	function getTypes(){
		return $this->types;
	}
	
	function setColor($c){
		$this->color = $c;
	}
	
	function getColor(){
		return $this->color;
	}
	
	function setSerialNumber($sn){
		$this->serialnumber = $sn;
	}
	
	function getSerialNumber(){
		return $this->serialnumber;
	}
	
	function setPassangers($st){
		$this->passangers = $st;
	}
	
	function getPassangers(){
		return $this->passangers;
	}
	
	function setStatus($r){
		$this->status = $r;
	}
	
	function getStatus(){
		if($this->passangers>0){
			$this->status = "Busy";
		}else{
			$this->status = "Not busy";
			
		}
		return $this->status;
	}
	
	
	
	
	function setTrip($howL,$howM){
		$this->trip = [
			"howlong" => $howL,
			"howmuch" => $howM
		];
	}
	
	function getTrip(){
		return $this->trip;
	} 
	
	/*function calculateStatus(){
		$status = $this->seats - $this->passangers;
		if($status>=0)
			return $status;
		else
			return "Taxi full" ;
	}
	$a = 4;
	if($a<3){
		echo "a is less than 3";
	}else{
		echo "a is bigger than 3" ;
	}*/
	
	 function toString(){
		return "Type of taxi:" . $this->types . "<br> Number of taxi:" . $this->serialnumber . "<br> Color:" . $this->color . "<br> Passangers:" . $this->passangers . "<br> Status of taxi:" . $this->getStatus() . "<br> Trip:" . print_r($this->trip,true) . "<br><br>";
	}
	
	
	
	
} 