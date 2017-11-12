						
                     <div class="row"><fieldset id='demo1' class="rating">
                        <input class="stars" type="radio" id="star5<?php echo $data["SKU"];?>" name="rating<?php echo $data["SKU"];?>" value="5" onclick="displayValue(this.value,<?php echo $data["SKU"];?>)" />
                        <label class = "full" for="star5<?php echo $data["SKU"];?>" title="Awesome - 5 stars"></label>
                        <input class="stars" type="radio" id="star4<?php echo $data["SKU"];?>" name="rating<?php echo $data["SKU"];?>" value="4" onclick="displayValue(this.value,<?php echo $data["SKU"];?>)" />
                        <label class = "full" for="star4<?php echo $data["SKU"];?>" title="Pretty good - 4 stars"></label>
                        <input class="stars" type="radio" id="star3<?php echo $data["SKU"];?>" name="rating<?php echo $data["SKU"];?>" value="3" onclick="displayValue(this.value,<?php echo $data["SKU"];?>)" />
                        <label class = "full" for="star3<?php echo $data["SKU"];?>" title="Meh - 3 stars"></label>
                        <input class="stars" type="radio" id="star2<?php echo $data["SKU"];?>" name="rating<?php echo $data["SKU"];?>" value="2" onclick="displayValue(this.value,<?php echo $data["SKU"];?>)" />
                        <label class = "full" for="star2<?php echo $data["SKU"];?>" title="Kinda bad - 2 stars"></label>
                        <input class="stars" type="radio" id="star1<?php echo $data["SKU"];?>" name="rating<?php echo $data["SKU"];?>" value="1" onclick="displayValue(this.value,<?php echo $data["SKU"];?>)" />
                        <label class = "full" for="star1<?php echo $data["SKU"];?>" title="Sucks big time - 1 star"></label>
						
 
                    </fieldset></div>
			
			
  <script>
  function displayValue(value,id){
	
	$.ajax({
		url:"rateItem.php",
		type:"post",
		data:{itemId:id,rateValue:value},
		success:function(data){
			
			alert(data);
		}
		
		
		
	});
	
  }
  
  </script>
  
  
  