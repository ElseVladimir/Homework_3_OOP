<?php

class HtmlWriter
{
	public function writeHtmlHotelRoom(HotelRoom $hroom)
	{
		$get = '<div>';
		$get .= "<ol>";
		$get .= "<li> Address: ".$hroom->address."</li>";
        $get .= "<li> Price: ".$hroom->price. "</li>";
        $get .= "<li> Description: ".$hroom->description. "</li>";
        $get .= "<li> Room number: ".$hroom->roomNumber . "</li>";
        $get .= "</ol>";
        $get .= '</div>';
        return $get;
	}

		public function writeHtmlApartment(Apartment $apart)
	{
		$kitchen = 'No';
		if($apart->kitchen)
			{
			 $kitchen = 'Yes'; 
			}

		$get = '<div>';
		$get .= "<ol>";
		$get .= "<li> Address: ".$apart->address."</li>";
        $get .= "<li> Price: ".$apart->price. "</li>";
        $get .= "<li> Description: ".$apart->description. "</li>";
        $get .= "<li> Kitchen: ".$kitchen. "</li>";
        $get .= "</ol>";
        $get .= '</div>';
        return $get;
	}
		public function writeHtmlHouse(House $house)
	{
		$get = '<div>';
		$get .= "<ol>";
		$get .= "<li> Address: ".$house->address."</li>";
        $get .= "<li> Price: ".$house->price. "</li>";
        $get .= "<li> Description: ".$house->description. "</li>";
        $get .= "<li> Rooms amount: ".$house->roomsAmount . "</li>";
        $get .= "</ol>";
        $get .= '</div>';
        return $get;
	}
}