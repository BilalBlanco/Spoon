
   <?php
    require_once("db/dbcon.php");
//session_start();

    class User{
		private $db;
		private $query;
		private $user_id;
		private $password;
		private $login_status;
		private $user_name;
		private $user_age;
		private $user_gender;
		private $user_address;
		private $user_DOB;
		private $user_phone;
		private $cnic;
		private $user_date;
		private $user_status;
		private $addressId;
		private $user_role;
	    public $message="";
		
	    function __construct(){
			$this->db=new databaseManager();
			//$this->userId = $userId;
		
			
		}		


		public function registerUser($user_name,$user_DOB,$cnic,$password,$user_phone,$user_gender,$user_type,$user_date,$user_status,$user_province,$user_district,$user_city,$user_tehsil,$user_comAddress,$user_img){
			$this->user_name = $user_name;
			$this->user_DOB   = $user_DOB;
			$this->cnic = $cnic;
			$this->password = $password;
			$this->user_phone = $user_phone;
			$this->user_gender = $user_gender;
			$this->user_type = $user_type;
			$this->user_status = $user_status;
			$this->user_date = $user_date;
			$this->user_province = $user_province;
			$this->user_district = $user_district;
			$this->user_city = $user_city;
			$this->user_tehsil = $user_tehsil;
			$this->user_comAddress = $user_comAddress;
			$this->user_img = $user_img;
			$this->query="insert into user (user_name,user_DOB,cnic,password,user_phone,user_gender,user_type,user_date,user_status,user_province,user_district,user_city,user_tehsil,user_comAddress,user_img) values (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";
				if($row=$this->db->executeQuery($this->query,array($this->user_name,$this->user_DOB,$this->cnic,$this->password,$this->user_phone,$this->user_gender,$this->user_type,$this->user_date,$this->user_status,$this->user_province,$this->user_district,$this->user_city,$this->user_tehsil,$this->user_comAddress,$this->user_img),"create")){
				echo "user registered";}
				else{
					echo "error occured during user regestration";					
				}
			}
		  
	    public function logIn($cnic,$password){	
            $this->cnic = $cnic;
			$this->password = $password;
			 if ( session_status() == PHP_SESSION_NONE ) {
				session_start();
			} 
		    $this->query="select * from user where cnic=? AND password=?";			   
			   if($row=$this->db->executeQuery($this->query,array($this->cnic,$this->password),"cread")){				   
				  $_SESSION["user"]=$row[0]["user_id"];
				  echo "login ".$_SESSION["user"];	
				   header('Location: ..\main1.php');
				}				
				else{
					$message = "Username and/or Password incorrect.\\nTry again.";
					
  									//echo "<script >show();</script>";
					
			    }				   
			}
		
		
		 function  viewUser($userId){
			 $this->userId=$userId;
			 $this->query="select * from user where user_id=?";
			 $result=$this->db->executeQuery($this->query,array($this->userId),"cread");
			 return $result;
			}
	
 function updateUser($user_name,$user_DOB,$cnic,$password,$user_phone,$user_gender,$user_type,$user_date,$user_status,$user_province,$user_district,$user_city,$user_tehsil,$user_comAddress,$user_img,$userId){
			$this->user_name = $user_name;
			$this->user_DOB   = $user_DOB;
			$this->cnic = $cnic;
			$this->password = $password;
			$this->user_phone = $user_phone;
			$this->user_gender = $user_gender;
			$this->user_type = $user_type;
			$this->user_status = $user_status;
			$this->user_date = $user_date;
			$this->user_province = $user_province;
			$this->user_district = $user_district;
			$this->user_city = $user_city;
			$this->user_tehsil = $user_tehsil;
			$this->user_comAddress = $user_comAddress;
			$this->user_img = $user_img;
			$this->userId = $userId;
			$this->query="update user set user_name=?,user_DOB=?,cnic=?,password=?,user_phone=?,user_gender=?,user_type=?,user_date=?,user_status=?,user_province=?,user_district=?,user_city=?,user_tehsil=?,user_comAddress=?,user_img=? where user_id=?";
				if($row=$this->db->executeQuery($this->query,array($this->user_name,$this->user_DOB,$this->cnic,$this->password,$this->user_phone,$this->user_gender,$this->user_type,$this->user_date,$this->user_status,$this->user_province,$this->user_district,$this->user_city,$this->user_tehsil,$this->user_comAddress,$this->user_img,$this->userId),"update")){
				echo "user Updated";}
				else{
					echo "error occured during user Updation";					
				}
			}
			
			
	}
	 
	
	/*class Customer extends User{
		function __construct(){
			
		}
		
		public function register(){}
	}*/
	//$t= new DATE();
	//$b = new User();
	//$b->registerUser("ubaid","12/12/12","1234567890","asd",3344246365,1,1,'Y-m-d H:i:s',1,"KPK","Abbottabad","Havailian","Havailian","mera pain PO Bodla","");
	
	
?>






