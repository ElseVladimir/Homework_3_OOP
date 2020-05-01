<?php
class House
{
	public $address = '';
	public $price = 0;
	public $description = '';
	public $roomsAmount = 0;

	public function __construct($address, $price, $description, $roomsAmount)
	{
	$this->address = $address;
	$this->price = $price;
	$this->description = $description;
	$this->roomsAmount = $roomsAmount;
	}


	public function getSummaryLine() 
	{
		
		$get = '<div>';
		$get .= "<ol>";
		$get .= "<li> Address: ".$this->address."</li>";
        $get .= "<li> Price: ".$this->price. "</li>";
        $get .= "<li> Room amount: ".$this->roomsAmount. "</li>";
        $get .= "</ol>";
        $get .= '</div>';
        return $get;
	}
}