<?php
	$dsn = 'mysql:host=127.0.0.1:3307;dbname=phpbook';
	$user = "root";
	$password = "";

	try{
		$pdo = new PDO($dsn, $user, $password,[PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
	} catch (Exception $e){
		echo "Не удалось соединиться с БД! ".$e;
	}


	$rss_wraper = '<?xml version="1.0" encoding="utf-8"?><rss version="2.0"></rss>';

	$xml = new SimpleXMLElement($rss_wraper);

	$rss = $xml->addChild('chanel');

	$rss->addChild('title','PHP');
	$rss->addChild('link','http://example.com');
	$rss->addChild('description','Портал, посвященный PHP');
	$rss->addChild('language','ru');
	$rss->addChild('pubDate',date('r'));

	try{

		$query = "select * from news order by putdate DESC limit 20";

		$response = $pdo->prepare($query);

		$response->execute();

		while ($news = $response->fetch(PDO::FETCH_ASSOC)){
			$item=$rss->addChild('item');
			$item->addChild('title',$news['name']);
			$item->addChild('description',$news['content']);
			$item->addChild('link',"http://example.com/news/{$news['id']}");
			$item->addChild('guid',"news/{$news['id']}");
			$item->addChild('pubDate',date('r',strtotime($news['putdate'])));

			if(!empty($news['media'])){
				$enclosure = $item->addChild('enclosure');
				$url = "images/{$news['id']}/{$news['media']}";

				$enclosure->addAttribute('url',$url);

			}
		}

	}catch (Exception $e){
		echo "123".$e;
	}

	$xml->asXML('build.xml');








