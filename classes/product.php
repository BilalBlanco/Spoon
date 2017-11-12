<?php
	//require("../db/dbcon.php");
	//session_start();
	class Product{
		private $query;
		private $db;
		private $productId;
		private $orderId;
		private $categoryId;
		private $productName;
		private $categoryName;
		private $packingId;
		private $parentId;
		private $userId;
		private $total;
		private $orderStatus;
		private $shipName;
		private $shipPhone;
		private $shipAddress;
		private $packingName;
		private $productPrice;
		private $productDescription;
		private $productPacking;
		private $productCategory;
		private $productUnit;
		private $productImage;
		private $logDescription;
		private $ratingValue;
		
		//private $parentId;
		
		public function __construct(){
			$this->db=new databaseManager();
		}
		
		
		
		public function viewProducts(){
			$this->query="select * from product";
			$data=$this->db->executeQuery($this->query,array(),"sread");
			return $data;
		}
		
		public function viewProductsByID($productId){
			$this->productId=$productId;
			$this->query ="select * from product WHERE product_id=?";
			 $result=$this->db->executeQuery($this->query,array($this->productId),"cread");
			return $result;
		}
		
		public function viewRecentProducts(){
			$this->query="SELECT * FROM PRODUCT ORDER BY PRODUCT_DATE DESC LIMIT 30;";
			$data=$this->db->executeQuery($this->query,array(),"sread");
			return $data;			
		}
		
		public function mostlySoldProducts(){
			$this->query="select product_id, sum(quantity)'quantity' from orderitems group by product_id order by sum(quantity) desc";
			$data=$this->db->executeQuery($this->query,array(),"sread");
			return $data;			
		}
		
		public function viewProductsWithCategory(){
			$this->query="SELECT  p.product_name,p.product_id, c.category_name FROM product AS p,category AS c where p.category_id=c.category_id ";
			$data=$this->db->executeQuery($this->query,array(),"sread");
			return $data;
		}
		
		public function viewOrderDetails($orderId){
			$this->orderId=$orderId;
			$this->query ="select p.product_id'SKU',p.img_src'img',p.product_name'Product',o.order_status'Order Status',c.category_name'Category',p.product_price'Unit Price',oi.quantity'Quantity',p.product_price*oi.quantity'XPrice',o.total_price'Total Price' from user as u,category as c,product as p,orderitems as oi,order1 as o where p.product_id=oi.product_id and o.order_id=oi.order_id and c.category_id=p.category_id and u.user_id=o.user_id and o.order_id=? ";
			$result=$this->db->executeQuery($this->query,array($this->orderId),"cread");
			return $result;
		}
		
		
		public function getProductsByCategory($categoryId){
			$this->$categoryId=$categoryId;
			$this->query ="select * from product WHERE category_id=?";
			 $result=$this->db->executeQuery($this->query,array($this->catagoryId),"cread");
			return $result;
		}
		
		public function getProductsByName($productName){
			$this->$productName=$productName;
			$this->query ="select * from product WHERE product_name=?";
			 $result=$this->db->executeQuery($this->query,array($this->productName),"cread");
			return $result;
		}
		
		public function getCategoryId($categoryName){
			$this->$categoryName=$categoryName;
			$this->query ="select catagory_id from category WHERE category_name=?";
			 $result=$this->db->executeQuery($this->query,array($categoryName),"cread");
			return $result;
		}
		
		public function getCategoryName($categoryId){
			$this->$categoryId=$categoryId;
			$this->query ="select category_name from category WHERE category_id=?";
			 $result=$this->db->executeQuery($this->query,array($this->categoryId),"cread");
			return $result;
		}
		
		public function getPackingName($packingId){
			$this->$packingId=$packingId;
			$this->query ="select packing_name from packing WHERE packing_id=?";
			 $result=$this->db->executeQuery($this->query,array($this->packingId),"cread");
			return $result;
		}
		
		function getCategory(){
			$this->query ="select category_name,category_id from category WHERE parent_id=0";
			 $result=$this->db->executeQuery($this->query,array(),"sread");
			return $result;
		}
		
		function getChildCategories($parentId){
			$this->$parentId=$parentId;
			$this->query ="select category_name,category_id from category WHERE parent_id=?";
			 $result=$this->db->executeQuery($this->query,array($this->parentId),"cread");
			return $result;
		}
		
		function getParentCategories(){
			$this->query="SELECT distinct c.category_id,c.category_name from category as c,category as ct where c.category_id=ct.parent_id";
			$data=$this->db->executeQuery($this->query,array(),"sread");
			return $data;	
		}
		
	
		
		public function viewCategories(){
			$this->query="select * from category";
			$data=$this->db->executeQuery($this->query,array(),"sread");
			return $data;
		}
		
		public function viewPackings(){
			$this->query="select * from packing";
			$data=$this->db->executeQuery($this->query,array(),"sread");
			return $data;
		}
		
		public function getSpecificProduct($productId){
			$this->productId=$productId;
			$this->query="select * from product where product_id=?";
			$data=$this->db->executeQuery($this->query,array($this->productId),"cread");
			return $data;
			
			
		}
		
		
		public function getLogs(){
			$this->query="select l.log_id'logid',u.user_name'admin',l.log_description'logdes',l.item_id'itemid',l.time'time' from log as l,user as u where u.user_id=l.user_id";
			$data=$this->db->executeQuery($this->query,array(),"sread");
			return $data;
		}
		
		
		public function orderPlace($userId,$total,$orderStatus,$shipName,$shipPhone,$shipAddress){
			$this->userId=$userId;
			$this->total=$total;
			$this->orderStatus=$orderStatus;
			$this->shipName=$shipName;
			$this->shipPhone=$shipPhone;
			$this->shipAddress=$shipAddress;
	        $this->query="insert into order1(user_id,total_price,order_status,ship_name,ship_phone,ship_address) values(?,?,?,?,?,?)";
		
			$result=$this->db->executeQuery($this->query,array($this->userId,$this->total,$this->orderStatus,$this->shipName,$this->shipPhone,$this->shipAddress),"create");
			
			if($result>0){
				echo "<script type='text/javascript'>alert('Order Placed successfully!')</script></br>";
				$this->itemInsert($result);
				}
		
	    }
		
		
		public function addCategory($categoryName,$parentId){
	 	   $this->categoryName=$categoryName;
		   $this->parentId=$parentId;
	      $this->query="insert into category(category_name,parent_id) values(?,?)";
		
			$result=$this->db->executeQuery($this->query,array($this->categoryName,$this->parentId),"create");
			
			if($result){
				echo "Category Added Successfully!!!</br>";				
			}
			else{
				echo "Category not Added Successfully!!!";
			}
		
	    }
		
		
			public function addPacking($packingName){
			$this->packingName=$packingName;
	      $this->query="insert into packing(packing_name) values(?)";
		
			$result=$this->db->executeQuery($this->query,array($this->packingName),"create");
			
			if($result){
				echo "Packing Added Successfully!!!</br>";				
			}
			else{
				echo "Packing not Added Successfully!!!";
			}
		
	    }
		
		
		public function itemInsert($orderId){
		$this->orderId=$orderId;
	    $cart=$_SESSION["ca"];	
			for($i=0;$i<count($cart);$i++) {				
			    $this->query="insert into orderitems(product_id,order_id,quantity)  values(?,?,?)";
			    $result=$this->db->executeQuery($this->query,array($cart[$i]["product_id"],$this->orderId,$cart[$i]["quantity"]),"create");
		        
			}
			if($result>0){
					echo count($_SESSION["ca"])."item inserted in orderline items";		
					return true;
			}
		}
		
		
		public function getOrderOfSpecificUser($userId){
			  $this->userId=$userId;
			  $this->query="select * from order where user_id=?";
			  $data=$this->db->executeQuery($this->query,array($this->userId),"cread");
		      return $data;	  
	    }
		
		
		function addProduct($productName,$productPrice,$productDescription,$productPacking,$productCategory,$productUnit,$productImage){			
			$this->productName=$productName;
			$this->productDescription=$productDescription;
			$this->productPacking=$productPacking;
			$this->productCategory=$productCategory;
			$this->productUnit=$productUnit;
			$this->productImage=$productImage;
			$this->query="insert into product(product_name,product_price,product_description,packing_type,category_id,product_unit,img_src) values(?,?,?,?,?,?,?)";
			$result=$this->db->executeQuery($this->query,array($this->productName,$this->productPrice,$this->productDescription,$this->productPacking,$this->productCategory,$this->productUnit,$this->productImage),"create");
				if($result){echo " Product Added";}
			    else{echo "Product not added";}
		}
		
		
		function addLog($userId,$logDescription,$productId){
			$this->userId=$userId;
			$this->logDescription=$logDescription;
			$this->productId=$productId;
			$this->query="INSERT INTO log( user_id,log_description,item_id) VALUES (?,?,?)";
			$result=$this->db->executeQuery($this->query,array($this->userId,$this->logDescription,$this->productId),"create");
			if($result){
				echo " Log Added";
			}
			else{
				echo "Log not added";
			}
			
				
		}
		
		public function getLastProductId(){
			$this->query="select product_id from product order by product_id desc limit 1";
			$data=$this->db->executeQuery($this->query,array(),"sread");
			return $data;
		}
		
		public function getLastCategoryId(){
			$this->query="select category_id from category order by category_id desc limit 1";
			$data=$this->db->executeQuery($this->query,array(),"sread");
			return $data;
		}
		
		public function getLastPackingId(){
			$this->query="select packing_id from packing order by packing_id desc limit 1";
			$data=$this->db->executeQuery($this->query,array(),"sread");
			return $data;
		}
		
		function fileUpload(){
			
			
			if(isset($_FILES["image"])){
				$fileName = $_FILES["image"]["name"];
				$fileType = $_FILES["image"]["type"];
				$fileSize = $_FILES["image"]["size"];
				$fileTemp = $_FILES["image"]["tmp_name"];
				
				move_uploaded_file($fileTemp,"images/".$fileName);
				$fileInfo[0] = true;
				$fileInfo[1] ="images/".$fileName;
				return $fileInfo;
			}
		}
		
		
		
		function updateProduct($productName,$productPrice,$productDescription,$productPacking,$productCategory,$productUnit,$productImage,$productId){			
			$this->productName=$productName;
			$this->productDescription=$productDescription;
			$this->productPacking=$productPacking;
			$this->productCategory=$productCategory;
			$this->productUnit=$productUnit;
			$this->productUnit=$productUnit;
			$this->productId=$productId;			
			$this->query="update product set product_name=?,product_price=?,product_description=?,packing_type=?,category_id=?,product_unit=?,img_src=? where product_id=?";
			$result=$this->db->executeQuery($this->query,array($this->productName,$this->productPrice,$this->productDescription,$this->productPacking,$this->productCategory,$this->productUnit,$this->productImage,$this->productId),"update");
				if($result){
					echo "<script type='text/javascript'>alert('Product Updated Successfully');</script>";
					
				}
			    else{echo "Product updation Fail";}
		}
		
		function updateCategory($categoryName,$parentId, $categoryId){			
			$this->categoryName=$categoryName;
			$this->parentId=$parentId;
			$this->categoryId=$categoryId;
			$this->query="update category set category_name=?,parent_id=? where category_id=?";
			$result=$this->db->executeQuery($this->query,array($this->categoryName,$this->parentId, $this->categoryId),"update");
				if($result){
					echo "<script type='text/javascript'>alert('Category Updated Successfully');</script>";
				}
			    else{echo "Category updation Failed";}
		}
		
		
		function deleteProduct($productId){	
			$this->productId=$productId;			
			$this->query="delete from product where product_id = ?";
			$result=$this->db->executeQuery($this->query,array($this->productId),"delete");
				if($result){
					echo "<script type='text/javascript'>alert('Product Deleted Successfully');</script>";
				}
			    else{echo "Product delete Fail";}
		}
		
			function updatePacking($packingName,$packingId){	
			$this->packingName=$packingName;
			$this->packingId=$packingId;
			$this->query="update packing set packing_name=? where packing_id=?";
			$result=$this->db->executeQuery($this->query,array($this->packingName, $this->packingId),"update");
				if($result){
					echo "<script type='text/javascript'>alert('Packing Updated Successfully');</script>";
				}
			    else{echo "Packing updation Failed";}
		    }
		
		function deleteCategory($categoryId){
			$this->categoryId=$catagoryId;
			$this->query="delete from category where category_id = ?";
			$result=$this->db->executeQuery($this->query,array($this->categoryId),"delete");
				if($result){echo "<script type='text/javascript'>alert('Category Deleted Successfully');</script>";}
			    else{echo "Category delete Fail";}
		}
		
		
		/*public function viewProducts(){
			$this->query="select * from product";
			$data=$this->db->executeQuery($this->query,array(),"sread");
			return $data;
		}
		
		public function getSpecificProduct($productId){
			$this->query="select * from product where product_id=?";
			$data=$this->db->executeQuery($this->query,array($productId),"cread");
			return $data;
			
			
		}
		
		
		
		public function orderPlace($userId,$total,$orderStatus){
	 	
	      $this->query="insert into order1(user_id,total_price,order_status) values(?,?,?)";
		
			$result=$this->db->executeQuery($this->query,array($userId,$total,$orderStatus),"create");
			
			if($result>0){
				echo "order place successfully";
				$this->itemInsert($result);
				}
		
	    }
		
		
		
		public function itemInsert($orderId){
	    $cart=unserialize(serialize($_SESSION["ca"]));	
		for($i=0;$i<count($cart);$i++) {
			   $this->query="insert into orderitems(product_id,order_id,quantity)  values(?,?,?)";
			    $result=$this->db->executeQuery($this->query,array($cart[$i][0]["product_id"],$orderId,$cart[$i][0]["quantity"]),"create");
		        if($result>0){
					echo "insert item in orderline items";
					
					}
		}
		}
		
		
		public function getOrderOfSpecificUser($userId){
			
			  $this->query="select * from order1 where user_id=?";
			  $data=$this->db->executeQuery($this->query,array($userId),"cread");
		      return $data;	  
	    }*/
		
		
		function category(){
			$this->query ="select category_name,category_id from category  order by category_id";
			 $result=$this->db->executeQuery($this->query,array(),"sread");
			return $result;}
		
		public function getProductByCategory($categoryId,$categoryId1){
			  $this->categoryId=$categoryId;
			  $this->query="SELECT * from product,category where product.category_id = category.category_id 
and (category.parent_id = ?  or category.category_id = ?)";
			  $data=$this->db->executeQuery($this->query,array($this->categoryId,$categoryId1),"cread");
		      return $data;	  
	    }
		
		
		function getPacking(){
			$this->query ="select * from packing";
			 $result=$this->db->executeQuery($this->query,array(),"sread");
			return $result;}
		
		function getAllCategory(){
			$this->query ="select sub_category,category_name,category_id from category;   ";
			 $result=$this->db->executeQuery($this->query,array(),"sread");
			return $result;}
	
	
		function getAllCategoryWithSubcategory($categoryId){
		   $this->categoryId=$catagoryId;
	       $this->query="select distinct  category2.category_name,category2.category_id from category category1,category category2  where category2.category_id=category1.sub_category and category1.category_id=? ";
		   $result=$this->db->executeQuery($this->query,array($this->categoryId),"cread");
		   return $result;
     		
		}
		
		
function getProductCount(){
			$this->query="select count(product_id) from product";
		   $result=$this->db->executeQuery($this->query,array(),"sread");
			$result=$result[0]["count(product_id)"];
			return $result;
     	}
		
		
		function getRecordByPaging($pageNo,$recordPerPage){
			$limit=($pageNo*$recordPerPage)-$recordPerPage;
			$this->query="select * from product limit $limit,$recordPerPage";
		   $result=$this->db->executeQuery($this->query,array(),"sread");
		   
			return $result;
     	}
		
		
		
		
		function generateLinks($totalRecords,$recordPerPage){
			$numbers="";
			$next="";
			$previous="";
			$currentPage=$_GET["pageNo"];
			$numberOfPages=ceil($totalRecords/$recordPerPage);
				for($pagrLinkNo=$currentPage-3;$pagrLinkNo<=$currentPage+3;$pagrLinkNo++){
						if($pagrLinkNo>0 && $pagrLinkNo<=$numberOfPages){
						$numbers.="&nbsp;<a href='main1.php?pageNo=".$pagrLinkNo."'>".$pagrLinkNo."</a>";
						}
					}
			
				if($currentPage<$numberOfPages){
					$nextPage=$currentPage+1;
					$next.="&nbsp;<a href='main1.php?pageNo=".$nextPage."'>Next</a>";
				}
			
				if($currentPage>1){
					$previousPage=$currentPage-1;
					$previous.="&nbsp;<a href='main1.php?pageNo=".$previousPage."'>Previous</a>";
				}
			return $previous.$numbers.$next;					
		}
		
			function rateItems($userId,$productId,$ratingValue){
		   $this->userId=$userId;
		   $this->productId=$productId;
		   $this->ratingValue=$ratingValue;
	       $this->query="insert into rating(userID,itemID,ratingValue) values (?,?,?)";
		   $result=$this->db->executeQuery($this->query,array($this->userId,$this->productId,$this->ratingValue),"create");
		   if($result){
			   echo "inserted successfully";
		   }else{
			   echo "insertion failed";
		   }
     		
		}
		
		
	}
  //$p=new Product();
  
?>