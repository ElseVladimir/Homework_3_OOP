<?php
require_once "ObjectData.php";
require_once "Classes/HotelRoom.php";
require_once "Classes/Apartment.php";
require_once "Classes/House.php";
require_once "Classes/HtmlWriter.php";

$id = $_GET['id'];
$propertyObj = NULL;

switch($objects[$id]['type'])
{
	case "hotel_room":
			$propertyObj = new HotelRoom($objects[$id]['address'],$objects[$id]['price'],$objects[$id]['decription'],$objects[$id]['roomNumber']);
	break;
	case "apartment":
			$propertyObj = new Apartment($objects[$id]['address'],$objects[$id]['price'],$objects[$id]['decription'],$objects[$id]['kitchen']);
	break;
	case "house":
			$propertyObj = new House($objects[$id]['address'],$objects[$id]['price'],$objects[$id]['decription'],$objects[$id]['roomsAmount']);
	break;
}

if(is_null($propertyObj))
{
	header('Location: index.php');
	die();
}
$htmlWriter = new HtmlWriter();
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
	<?php switch($objects[$id]['type']):
		case "hotel_room":?>
		<?= $htmlWriter->writeHtmlHotelRoom($propertyObj);?>
		<?php break; ?>

		<?php case "apartment":?>
		<?= $htmlWriter->writeHtmlApartment($propertyObj);?>
		<?php break; ?>

		<?php case "house":?>
		<?= $htmlWriter->writeHtmlHouse($propertyObj);?>
		<?php break; ?>

	<?php endswitch; ?>
</body>
</html>