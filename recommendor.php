<?php 

// PHP implementation of Pearson's product-moment correlation coefficient
function PCC($a, $b) {
    $sum_ab = 0;
    $sum_a = 0;
    $sum_b = 0;
    $sum_a_sqr = 0;
    $sum_b_sqr = 0;
    $n = min(array(count($a), count($b)));
    for ($i = 0; $i < $n; $i++) {
        if (!isset($a[$i]) || !isset($b[$i])) { continue; }
        $sum_ab += $a[$i] * $b[$i];
        $sum_a += $a[$i];
        $sum_b += $b[$i];
        $sum_a_sqr += pow($a[$i], 2);
        $sum_b_sqr += pow($b[$i], 2);
    }
	try{
		return ($sum_ab/$n - $sum_a/$n * $sum_b/$n) / (sqrt($sum_a_sqr/$n - pow($sum_a/$n, 2)) * sqrt($sum_b_sqr/$n - pow($sum_b/$n, 2)));
	}catch(Exception $e){
		echo 'A product must be rated by atleast two users to get similarity', $e->getMessage();
	}
    
}
/* 
$a1 = array(0, 1, 1, 0, 1, 0, 0, 1, 1, 0, 0, 0, 1, 0);
$b1 = array(1, 0, 0, 1, 1, 1, 1, 0, 0, 1, 1, 1, 0, 1);
echo corr($a1, $b1) . "\n<br/>";

$a2 = array(1, 1, 1, 1, 0, 0, 1, 1, 1, 0, 0, 1, 0, 1);
$b2 = array(1, 1, 0, 1, 0, 1, 1, 0, 1, 1, 0, 1, 0, 0);
echo corr($a2, $b2) . "\n<br/>";

$a3 = array(1, 0, 0, 0, 1, 0, 0, 1, 1, 0, 0, 0, 1, 0);
$b3 = array(1, 0, 0, 0, 1, 0, 0, 1, 1, 0, 0, 0, 1, 0);
echo corr($a3, $b3) . "\n<br/>"; */
require_once("db/dbcon.php");
function getUsers(){
	$dbCon = new databaseManager();
	$query="select distinct(userID) as userID from rating";
	$userData = $dbCon->executeQuery($query, array(0), "sread");
	$users = array();
	foreach($userData as $userKey => $userValue){
		$users[] = $userValue['userID'];
		
	}
	return $users;
}
function getRatedProduct(){
	$dbCon = new databaseManager();
	$query="select distinct(itemID) as productID from rating where ratingValue is not null";
	$ratedProducts = $dbCon->executeQuery($query, array(0), "sread");
	$products = array();
	foreach($ratedProducts as $productKey => $productValue){
		$products[] = $productValue['productID'];
	}
	//var_dump($products);
	return $products;
}
function getRatedColumnValues($itemID){
	$dbCon = new databaseManager();
	$query="select ratingValue from rating where itemID=?";
	$data = $dbCon->executeQuery($query, array($itemID), "cread");
	$a =array();
	foreach($data as $key=>$value){
		$a[] = $value['ratingValue'];
	}
	return $a;
}
function getUnratedItemsUsers($itemID){
	$unrated=array();
	$dbCon = new databaseManager();
	$query="select userID from rating where itemID=? and ratingValue is null";
	$data = $dbCon->executeQuery($query, array($itemID), "cread");
	foreach($data as $key=>$value){
		$unrated[] = $value['userID'];
	}
	return $unrated;
}

function getUnratedItems($userID){
	$unrated=array();
	$dbCon = new databaseManager();
	$query="select itemID from rating where userID=? and ratingValue is null";
	$data = $dbCon->executeQuery($query, array($userID), "cread");
	foreach($data as $key=>$value){
		$unrated[] = $value['itemID'];
		echo "Rating Prediction of item: 8 for user: 51 is:  ".predictProduct(8, 51)."<br>";
		//echo $value['itemID']."&nbsp&nbsp&nbsp&nbsp";
		break;
	}
	return $unrated;
}
 $abcd =getUnratedItems(51);
//echo "<h1>unrated items</h1>";
//for($i=0;$i<sizeOf($abcd);$i++){
//	echo $abcd[$i]."\n<br>";
//}
//echo "<hr>"; */



$ratedItem = getRatedProduct();
echo "<h1>Rated Product ID's</h1>";
foreach($ratedItem as $item){
	echo $item."\n<br>";
}
echo "<hr>";
echo "<h1>Un-rated Product ID's</h1>";
$a =getUnratedItemsUsers(7);
for($i=0;$i<sizeOf($a);$i++){
	echo $a[$i]."\n<br>";
}
echo "<hr>";
//$users= getUsers();\

function getSimilarValues(){
	$products = getRatedProduct();
	$simValues = array(array());
	for($j=0;$j<sizeOf($products);$j++){
		$valueOfj = getRatedColumnValues($products[$j]);
		for($k = 0; $k <sizeOf($products); $k++){
			$valueOfk = getRatedColumnValues($products[$k]);
			//echo "similarity of product ".$products[$j]." with ".$products[$k]." is ".PCC($valueOfj,$valueOfk)."\n<br/>";
			$simValues[$j][$k] = PCC($valueOfj,$valueOfk);
		}
	}
	return $simValues;
}
function displaySimilarValues($simValues){
	echo "<h1>Similarity Values Table</h1><hr>";
	echo "<table border='1'>";
	for($i=0; $i<sizeOf($simValues); $i++){
		echo "<tr>";
		for($j=0;$j<sizeOf($simValues); $j++){
			echo "<td>".$simValues[$i][$j]."</td>";
		}
		echo "</tr>";
	}
	echo "</table >";
}
displaySimilarValues(getSimilarValues());


function getSimilarityOf($itemID){
	$products = getRatedProduct();
	$simValues = array();
	for($j=0;$j<sizeOf($products);$j++){
		for($k = 0; $k <sizeOf($products); $k++){
			if($products[$k] == $itemID){
				$valueOfj = getRatedColumnValues($products[$j]);
				$valueOfk = getRatedColumnValues($products[$k]);
				$simValues[$j] = PCC($valueOfj,$valueOfk);	
				
			}
		}
	}
	
	return $simValues;
}

#$users = getUsers();
function predictProduct($productID, $toUser){
	$dbCon = new databaseManager();
	$query="select itemID, ratingValue from rating where userID=? and ratingValue is not null";
	$data = $dbCon->executeQuery($query, array($toUser), "cread");
	$sum_sim_r = 0;
	$sum_sim = 0;
	$rv =array();
	foreach($data as $key=>$value){
		//echo "ItemID". $value['itemID']."====>".$value['ratingValue']."<br>";
		$rv[]=$value['ratingValue'];
	}
	foreach($data as $key=>$value){
		//echo "ItemID". $value['itemID']."====>".$value['ratingValue']."<br>";
		$sum_sim_r += PCC(getRatedColumnValues($productID), $rv)*$value['ratingValue'];
		$sum_sim +=PCC(getRatedColumnValues($productID), $rv);
	}
	return $sum_sim_r/$sum_sim;
}	

echo "Rating Prediction of item: 9 for user: 53 is:  ".predictProduct(9, 53)."<br>";
echo "Rating Prediction of item: 84 for user: 51 is:  ".predictProduct(84,51)."<br>";
echo "Rating Prediction of item: 8 for user: 53 is:  ".predictProduct(8,53)."<br>";

?>