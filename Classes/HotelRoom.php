<?php
class HotelRoom
{
	public $address = '';
	public $price = 0;
	public $description = '';
	public $roomNumber = 0;

	public function __construct($address, $price, $description, $roomNumber)
	{
	$this->address = $address;
	$this->price = $price;
	$this->description = $description;
	$this->roomNumber = $roomNumber;
	}

	public function getSummaryLine() 
	{
		
		$get = '<div>';
		$get .= "<ol>";
		$get .= "<li> Address: ".$this->address."</li>";
        $get .= "<li> Price: ".$this->price. "</li>";
        $get .= "<li> Room number: ".$this->roomNumber . "</li>";
        $get .= "</ol>";
        $get .= '</div>';
        return $get;
	}

}
