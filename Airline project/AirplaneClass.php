<?php
class Airplane {
	private $totalseats;
	private $passengers;
	
	function __construct($t,$p){
		$this->totalseats = $t;
		$this->passengers = $p;
	}
	
	function setSeats($b){
		$this->totalseats = $b;
	}
	
	function getSeats(){
		return $this->totalseats;
	}
	
	function setPassengers($p){
		$this->passengers = $p;
	}
	
	function getPassengers(){
		return $this->passengers;
	}
	/*function setLeftSeats($s){
		$this->leftseats = $s;
	}
	function getsetLeftSeats(){
		return $this->leftseats;
	}
	*/
	function calculateLeftSeats(){
		$leftseats = $this->totalseats - $this->passengers;
		if($leftseats>=0)
			return $leftseats;
		else
			return "Airplane overbooked" ;
	}
	
	 function toString(){
		return "Seats:" . $this->totalseats . "<br> Passangers:" . $this->passengers . "<br> Left seats:" . $this->calculateLeftSeats() . "<br><br>";
	}
	
	
	
	
} 