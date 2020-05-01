<?php
require_once "ObjectData.php";
require_once "Classes/HotelRoom.php";
require_once "Classes/Apartment.php";
require_once "Classes/House.php";

$propertyObjs = [];

foreach($objects as $key => $objectsElements)
{
	switch($objectsElements['type'])
	{
		case "hotel_room":
			$propertyObjs[] = new HotelRoom($objectsElements['address'],$objectsElements['price'],$objectsElements['decription'],$objectsElements['roomNumber']);
		break;
		case "apartment":
			$propertyObjs[] = new Apartment($objectsElements['address'],$objectsElements['price'],$objectsElements['decription'],$objectsElements['kitchen']);
		break;
		case "house":
			$propertyObjs[] = new House($objectsElements['address'],$objectsElements['price'],$objectsElements['decription'],$objectsElements['roomsAmount']);
		break;
	}
}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Homework 3</title>
</head>
<body>
<?php foreach($propertyObjs as $propertyKey => $propertyObj) :?>
	<?=$propertyObj->getSummaryLine();?>
	<a href="details.php?id=<?=$propertyKey;?>">Описание</a>

<?php endforeach; ?>
</body>
</html>
