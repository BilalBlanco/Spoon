<?php

function uploadImage($fileName,$fileSize,$fileType,$fileTemp,$imageDirectory,$thumbnailDirectory){
	

			list($fileType,$fileExtension)= explode("/",$fileType);
						
				if(!(isImageExtension($fileExtension))){
					$error[]="Extension is not png or jpeg";	
				}
				if(!(isFileType($fileType))){
					$error[]="File Type is not image";
				}
				if(!(isImageSize($fileSize,5000000))){
					$error[]="Size is too large";
				}
				
			
			
				if(empty($error)){
					$randomFileName=rand()*Time().$fileName;
					$uploadFile=move_uploaded_file($fileTemp,$imageDirectory.$randomFileName);
					
						if($uploadFile){
							$imageLinks[0]=true;
							$imageLinks[1]="recipts/".$randomFileName;//// image link
							$imageLinks[2]=generateThumbnail($imageDirectory.$randomFileName,$thumbnailDirectory,$randomFileName,100,$fileExtension);///thumbnail Link
							return $imageLinks;
						}
				}
				
				else{
					print_r($error);
				}
				
		}
		
		
		function generateThumbnail($source,$destination,$thumbnailName,$newWidth,$fileExtension){
			list($widthOri,$heightOri)=getImageSize($source);
			$ratioOri=$widthOri/$heightOri;
			$newHeight=$newWidth*$ratioOri;
			$imageCreateFrom=generateThumbnailFrom($source,$fileExtension);
			$imageCreateTo=imagecreatetruecolor($newWidth,$newHeight);
			$imageCreated=imagecopyresampled($imageCreateTo,$imageCreateFrom,0,0,0,0,$newWidth,$newHeight,$widthOri,$heightOri);
				if($imageCreated){
					$generatedThumbnail=generateThumbnailTo($imageCreateTo,$destination,$thumbnailName,$fileExtension);
						if($generatedThumbnail){
							return $destination.$thumbnailName;
						}
				}
		}
		
		function generateThumbnailTo($imageCreateTo,$destination,$thumbnailName,$fileExtension){
			
				if($fileExtension=="jpeg"){
					imagejpeg($imageCreateTo,$destination.$thumbnailName,100);
					return true;
				}
				else if($fileExtension=="png"){
					imagepng($imageCreateTo,$destination.$thumbnailName,9);
					return true;
				}
				else if($fileExtension=="gif"){
					imagegif($imageCreateTo,$destination.$thumbnailName,100);
					return true;
				}
				
			return false;	
		}
		
		
		function generateThumbnailFrom($source,$imageExtension){
			$imageCreateFrom="";
				

			
				if($imageExtension=="jpeg"){
					$imageCreateFrom=imagecreatefromjpeg($source);
				}
				else if($imageExtension=="png"){
					$imageCreateFrom=imagecreatefrompng($source);
				}
				else if($imageExtension=="gif"){
					$imageCreateFrom=imagecreatefromgif($source);
				}
			return $imageCreateFrom;	
		}
		
		
		
		function isFileType($fileType){
			
			if($fileType=="image"){
				return true; 
			}
			else{
				return false;
			}
		}
		
		
		function isImageExtension($fileExtension){
			
			if($fileExtension=="jpeg" || $fileExtension=="png" ){
				return true;
			}
			else{
				return false;
			}
			
		}
		
		function isImageSize($fileSize,$limit){
			
			if($fileSize<=$limit){
				return true;
			}
			else{
				return false;
			}
		}
		 		 


?>