<!DOCTYPE html>
<html>
<head>

</head>
<body>
    <h1>Find the longtitude and Latitude of your Location</h1>
    <form action="" method="get">
        <input type="text" name="location">
        <input type="submit" value="Get Geocode!">
    </form>
    <br>
<?php
    if (!empty($_GET['location'])){
        $opts = array('http'=>array('header'=>"User-Agent:StevesCleverAddressScript 3.7.6\r\n"));
        $context = stream_context_create($opts);
        $location=$_GET['location'];

        $maps_url = 'https://'.
		'nominatim.openstreetmap.org/'.
		'search?q='.urlencode($location).
		'&format=json&limit=1';
        
        $maps_json = file_get_contents($maps_url, false, $context);
        $maps_array = json_decode($maps_json, true);

        $lat = $maps_array[0]['lat'];
        $lng = $maps_array[0]['lon'];
        $address=$maps_array[0]['display_name'];
        $category=$maps_array[0]['class'];
		$typ=$maps_array[0]['type'];
    }


?>
<?php
    if (!empty($_GET['location'])){
        echo "Latitude" .$lat."<br>";
        echo "Longtitude" .$lng."<br>";
        echo "Address: " . $address ."<br>";
        echo "Class: " . $category ."<br>";
        echo "Type: " . $typ;	
    }

?>

</body>
</html>