<?php 
$xmlFile = 'database.xml';
$xml = simplexml_load_file($xmlFile);

$arr=array();
foreach($xml->blog as $aTask)
{
    $arr[]=$aTask;
}

/* uncomment the above line to debug */
usort($arr,function($a,$b){
    return strtotime($b->date)-strtotime($a->date);
});
/* uncomment the above line to debug */

//$shuffleArray = [];
/*$lastWeek = strtotime("-2 week");
$i = 0;
foreach($arr as $aTask)
{
    $rssTime = strtotime($aTask->date); 
  	if($rssTime > $lastWeek){

  		$shuffleArray[$i]["time"] = $rssTime;
      echo "<br/>" . $rssTime;
      $shuffleArray[$i]["title"] = $aTask->title;
      echo "<br/>" . $aTask->title;
  		$i++;
  	}
}
//shuffle($shuffleArray);
$shuffleSize = $i;
$i = 0;

//Creating a random array position list
for($j = 0; $j < $shuffleSize; $j++){
 $randomArray[$j] = $j;
 echo "<br/>" .  $j;
}
shuffle($randomArray);
echo "<br/><br/>";
print_r($randomArray);


foreach($arr as $aTask)
{
	if($i < $shuffleSize ){
       echo "<br/>  Before  " . $shuffleArray[$i]["title"] . " ";
       echo "<br/> random array number is " . $randomArray[$i]; 

   	 // $aTask->date = $shuffleArray[$randomArray[$i]]["time"];
      $aTask->title = $shuffleArray[$randomArray[$i]]["title"];
      echo " <br/> After  " . $aTask->title . "  <br/> "; 
   	$i++;
  	}
  	
}


*/


$xml=simplexml_load_string(<<<XML
<?xml version="1.0"?>
<blogs>
</blogs>
XML
);
foreach($arr as $aTask)
{

    $tTask=$xml->addChild($aTask->getName());
    $tTask->addChild($aTask->author->getName(),(string)$aTask->author);
    $tTask->addChild($aTask->date->getName(),(string)$aTask->date);
    $tTask->addChild($aTask->title->getName(),(string)$aTask->title);
    $tTask->addChild($aTask->description->getName(),(string)$aTask->description);
        $tTask->addChild($aTask->link->getName(),(string)$aTask->link);

}

//echo $xml->asXML();

$newfile = 'databasesorted.xml';
file_put_contents($newfile, $xml->asXML());