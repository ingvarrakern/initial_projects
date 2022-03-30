<?php
class TaxiesCompany{
	private $id;
	private $name;
	private $repairs;
	private $stock;
	
	function __construct(){
		$this->id = "1434 8567";
		$this->name = "Avrora";
		$this->repairs = "Flying_Taxi";
		
	}
	
	function setId($b){
		$this->id = $b;
	}
	
	function getId(){
		return $this->id;
	}
	
	function setName($c){ // with setter we can CHANGE attributes
		$this->name = $c;
	}
	
	function getName(){
		return $this->name;
	}
	
	function setRepairS($p){
		$this->repairs = $p;
	}
		
	function setStock($b){
		$this->stock = $b;
	}
	
	function getStock(){
		return $this->stock;
	}
	
	function toString(){
		return "Name of Company:" . $this->name . "<br> Goverment reg:" . $this->id . "<br> Repair Store:" . $this->repairs ."<br> taxi park:<pre>" . print_r($this->stock,true) . "</pre><br><br>";
	}
	
	
	
}