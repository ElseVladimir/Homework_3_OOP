<?php
class Apartment
{
	public $address = '';
	public $price = 0;
	public $description = '';
	public $kitchen = false;

	public function __construct($address, $price, $description, $kitchen)
	{
	$this->address = $address;
	$this->price = $price;
	$this->description = $description;
	$this->kitchen = $kitchen;
	}


	public function getSummaryLine() 
	{
		$kitchen = 'No';
		if($this->kitchen)
			{
			 $kitchen = 'Yes'; 
			}

		$get = '<div>';
		$get .= "<ol>";
		$get .= "<li> Address: ".$this->address."</li>";
        $get .= "<li> Price: ".$this->price. "</li>";
        $get .= "<li> Kitchen: ".$kitchen. "</li>";
        $get .= "</ol>";
        $get .= '</div>';
        return $get;
	}
}