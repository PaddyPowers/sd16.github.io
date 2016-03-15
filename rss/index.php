<?php

// include lastRSS
include "lastRSS.php";

$file = 'database.xml';
// Deletes database.txt content
file_put_contents($file, $current);

function ShowOneRSS($url) {
	global $rss;
	$clear = false;
	if ($rs = $rss->get($url)) {


		echo "<big><b><a href=\"$rs[link]\">$rs[title]</a></b></big><br />\n";
		
		echo "<ul>\n";

		//start Container
		$file = 'database.xml';
			// Open the file to get existing content
		$current = file_get_contents($file);

		//loop items
		foreach($rs['items'] as $item) {
			
			// Append a new person to the file
			$current .= "<blog>\n<author>$rs[title]</author>\n<title>".$item['title']."</title>\n<date>".$item['pubDate']."</date>\n<description>". $item['description']. "</description>\n<link>". $item['link']. "</link>\n</blog>\n\n";
			echo "$rs[title] \t<li><a href=\"$item[link]\">".$item['title']."</a><br />".$item['pubDate']."<br />".$item['description']."</li>\n";
		}

		//end container



		// Write the contents back to the file
		file_put_contents($file, $current);
		
		if ($rs['items_count'] <= 0) { echo "<li>Sorry, no items found in the RSS file :-(</li>"; }
			echo "</ul>\n";
		} else {
		echo "Sorry: It's not possible to reach RSS file $url\n<br />";
		// you will probably hide this message in a live version
		}
	}

// =============================================================================



// List of RSS URLs
$rss_left = array(
	//HAZEL
	'https://hazelwyllie.wordpress.com/feed/',
	'http://www.deantaylordesign.com/words/?feed=rss2',
	'http://petrchutny.cz/?feed=rss2',
	'https://ionabroadhurst.wordpress.com/feed/',
	'http://socialdigital.dundee.ac.uk/~chynd/blog/?feed=rss2',
	'https://stronska.wordpress.com/feed/',
	'http://www.duncanstuartgordon.com/?feed=rss2',
	//'http://www.ryanhutcheon.co.uk/blog?format=RSS',
	'https://awjstewart.wordpress.com/feed/',
	'http://patrickdrabble.co.uk/rss.php',
	



	
);
$rss_right = array(
	
);

// Create lastRSS object
$rss = new lastRSS;

// Set cache dir and cache time limit (5 seconds)
// (don't forget to chmod cahce dir to 777 to allow writing)
$rss->cache_dir = './temp';
$rss->cache_time = 1200;
$rss->CDATA = content;
$rss->items_limit = 1;

// Show all rss files
echo "<table cellpadding=\"10\" border=\"0\"><tr><td width=\"50%\" valign=\"top\">";
foreach ($rss_left as $url) {
	ShowOneRSS($url);
}
echo "</td><td width=\"50%\" valign=\"top\">";
foreach ($rss_right as $url) {
	ShowOneRSS($url);
}
echo "</td></tr></table>";
?>



<?php

//$xml = new SimpleXMLElement('<blogRss/>');
//
//for ($i = 1; $i <= 8; ++$i) {
//    $channel = $xml->addChild('channel');
//    $channel->addChild('blogTitle', "THIS IS TITLE $i");
//    $channel->addChild('blogDate', "PUBLISHED 0$i/11/15");
//    $channel->addChild('blogLink', "www.gofuckyourself.com");
//    $channel->addChild('blogDesc', "This Blog Is Only Going To Be Read By You");
//}

//Header('Content-type: text/xml');
//print($xml->asXML());

	
		$file = 'database.xml';
		// Open the file to get existing content
		$current = file_get_contents($file);
		// Append a new person to the file
		$current = "<blogs>" . "\n" . $current . "</blogs>";

		file_put_contents($file, $current);

		include 'timesort.php';

?>

