<?php
$content = file_get_contents('xml/page.xml');

$xml = new SimpleXMLElement($content);
$a = $xml->xpath("page[@id='first']");

print_r($a);
print_r($xml->xpath("page[@id='first']")[0]);
?>
<div>

	<a href="index.php">Главная</a>
	<a href="index.php?id=first">First</a>
	<a href="index.php?id=second">Second</a>
</div>

<?php
//echo $xml->page[0]->title."<br>";
//echo $xml->page[0]->attributes()."<br>";
//echo $xml->page->description."<br>";
//echo $xml->page[1]->title."<br>";
//echo $xml->page[1]->description."<br>";
//echo $xml->title;
//
//print_r($xml->page[0]);
//print_r($xml->page[1]);
//echo "<pre>";
//print_r($xml);
//	echo "</pre>";

	if(isset($_GET['id'])){
		foreach ($xml->page as $page){
			if($page->attributes()['id'] == $_GET['id']){
				echo $page->title."<br>";
				echo $page->description."<br>";
				echo $page['id'];
			}



		}
	}else {
		echo "Главная";
	}


?>

