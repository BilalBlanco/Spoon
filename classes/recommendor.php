<?php 
ini_set('max_execution_time', 300); //5 minuts
//require_once("db/dbcon.php");

class Recommendor{
		


	// PHP implementation of Pearson's product-moment correlation coefficient
	function PCC($a, $b) {
		$mean_a = array_sum($a)/count($a);
		$mean_b = array_sum($b)/count($b);
		$sum_ab = 0;
		$sum_a = 0;
		$sum_b = 0;
		$sum_a_sqr = 0;
		$sum_b_sqr = 0;
		//$n = min(array(count($a), count($b)));
		for ($i = 0; $i < count($a); $i++) {
			if (!isset($a[$i]) || !isset($b[$i])) { continue; }
			$sum_ab += ($a[$i]-$mean_a) * ($b[$i]-$mean_b);
			$sum_a += $a[$i]-$mean_a;
			$sum_b += $b[$i]-$mean_b;
			$sum_a_sqr += pow($a[$i]-$mean_a, 2);
			$sum_b_sqr += pow($b[$i]-$mean_b, 2);
		}
		if((sqrt($sum_a_sqr) * sqrt($sum_b_sqr))!=0){
			return $sum_ab / (sqrt($sum_a_sqr) * sqrt($sum_b_sqr));		
		}else{
			return -1;// not similar
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
	
	
	function getUsers(){
		$dbCon = new databaseManager();
		$query="select distinct(userID) as userID from rating where ratingValue is not null";
		$userData = $dbCon->executeQuery($query, array(0), "sread");
		$users = array();
		foreach($userData as $userKey => $userValue){
			$users[] = $userValue['userID'];
		}
		return $users;
	}
	
	
	function getUnratedProductsOfUser($userID, $itemID){
		$dbCon = new databaseManager();
		$query="select distinct(userID) as user from rating where itemID=? and ratingValue is null";
		$userData = $dbCon->executeQuery($query, array($userID, $itemID), "cread");
		$p = array();
		foreach($userData as $userKey => $userValue){
			$p[] = $userValue['item'];
		}
		return $p;
	}
	
	
	function predictToAllUsers(){
		$recommendor = new Recommendor();
		$p = $recommendor->getRatedProduct();
		$pridictedProducts = array();
		for($i=0;$i<count($p);$i++){
			$users = $recommendor->getUnratedItems($p[$i]);
			for($j=0;$j<count($users);$j++){			
				//echo "Predict product $p[$i] to user $users[$j] on the basis of: ";
				$recommendor->predictProduct($p[$i], $users[$j]);
				//echo "<br>";
				$pridictedProducts[]=array($users[$j]=>$p[$i]);
			}
		}
		return $pridictedProducts;
	}
	
	
	/* function getProducts(){
		$dbCon = new databaseManager();
		$query="select distinct(itemID) as productID from rating where ratingValue is not null";
		$ratedProducts = $dbCon->executeQuery($query, array(0), "sread");
		$products = array();
		foreach($ratedProducts as $productKey => $productValue){
			$products[] = $productValue['productID'];
		}
		//var_dump($products);
		return $products;
	} */
	

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
	
	
	function getUnratedItems($itemID){
		$unrated=array();
		$dbCon = new databaseManager();
		$query="select userID from rating where itemID=? and ratingValue is null";
		$data = $dbCon->executeQuery($query, array($itemID), "cread");
		foreach($data as $key=>$value){
			$unrated[] = $value['userID'];
		}
		return $unrated;
	}



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
		$recommendor = new Recommendor();
		$dbCon = new databaseManager();
		$query="select itemID, ratingValue from rating where userID=? and ratingValue is not null";
		$data = $dbCon->executeQuery($query, array($toUser), "cread");
		/* $sum_sim_r = 0;
		$sum_sim = 0; */
		$threshold=0.2;//75%
		$rv =array();
		$similarProducts =array();
		foreach($data as $key=>$value){
			//echo "ItemID". $value['itemID']."====>".$value['ratingValue']."<br>";
			$rv[]=$value['ratingValue'];
		}
		foreach($data as $key=>$value){
			//echo "ItemID". $value['itemID']."====>".$value['ratingValue']."<br>";
			
			//$sum_sim_r += PCC(getRatedColumnValues($productID), $rv)*$value['ratingValue'];
			//$sum_sim += PCC(getRatedColumnValues($productID), $rv);
			//print_r(PCC($rv,getRatedColumnValues($productID)));
			if($recommendor->PCC($rv,$recommendor->getRatedColumnValues($productID)) > $threshold){
				$similarProducts[] = $value['itemID'];
			}
			
		}
		/* if($sum_sim !=0){
			return $sum_sim_r/$sum_sim;
		}else{
			return 0;
		} */
		return $similarProducts;
	}//function predictProduct($productID, $toUser)

	//echo "Rating Prediction of item: 84 for user: 52 is:  ";print_r(predictProduct(15, 51));echo "<br>";
	//echo "Rating Prediction of item: 84 for user: 52 is:  ";print_r(predictProduct(8, 53));echo "<br>";
	//echo "Rating Prediction of item: 84 for user: 52 is:  ";print_r(predictProduct(8, 54));echo "<br>";
	
	
	function displayRatedProducts(){
		$ratedItem = getRatedProduct();
		echo "<h1>Rated Product ID's</h1>";
		foreach($ratedItem as $item){
			echo $item."\n<br>";
		}
		echo "<hr>";
	}
	
	
	function displayUnratedProducts(){
		echo "<h1>Un-rated Product ID's</h1>";
		$a =getUnratedItems(7);
		for($i=0;$i<sizeOf($a);$i++){
			echo $a[$i]."\n<br>";
		}
		echo "<hr>";
	}
	

	//displaySimilarValues(getSimilarValues());
	/* echo "<pre>";
	print_r(predictToAllUsers());
	echo "</pre>"; */

	function predictToSingleUser($userID){
		$recommendor = new Recommendor();
		$userItems=array();
		$data = $recommendor->predictToAllUsers();
		for($i=0;$i<count($data);$i++){
			foreach($data[$i] as $key=>$value){
				if($key==$userID){
					//echo $userItems[] = $data[$i][$key]."<br>";
				    $userItems[] = $data[$i][$key]."<br>";
				}
			}
		}
		return $userItems;
	}
	//print_r(predictToSingleUser(55));

}
?>