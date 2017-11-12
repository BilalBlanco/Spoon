   
                    <tr>
                                	<th>Comments </th>
                                    <td><div class="col-lg-8 col-md-8 col-sm-8">
                                    	<textarea rows="4" cols="50" name="comments" id="comments"  ></textarea>
                                    </div>	<?php //echo $data["time"]; ?></td>
                                </tr>
                                
                                <tr>
                                	<th>Stars</th>
                                    <td>
										<div class="row"><fieldset id='demo1' class="rating">
                        <input class="stars" type="radio" id="star5" name="rating" value="5" onclick="displayValue1(this.value)" />
                        <label class = "full" for="star5" title="Awesome - 5 stars"></label>
                        <input class="stars" type="radio" id="star4" name="rating" value="4" onclick="displayValue1(this.value)" />
                        <label class = "full" for="star4" title="Pretty good - 4 stars"></label>
                        <input class="stars" type="radio" id="star3" name="rating" value="3" onclick="displayValue1(this.value)" />
                        <label class = "full" for="star3" title="Meh - 3 stars"></label>
                        <input class="stars" type="radio" id="star2" name="rating" value="2" onclick="displayValue1(this.value)" />
                        <label class = "full" for="star2" title="Kinda bad - 2 stars"></label>
                        <input class="stars" type="radio" id="star1" name="rating" value="1" onclick="displayValue1(this.value)" />
                        <label class = "full" for="star1" title="Sucks big time - 1 star"></label>
 
                    </fieldset></div>
									</td>
							   </tr>
			
			
  <script>
  
	function displayValue1(value){
		//alert("hi how");
	var	commentTxt=$("#comments").val();
	var	orderId=$("#orderIdColumn").html();
	var bhaiId=$("#bhaiId").html();
	
	//alert(orderId);
		$.ajax({
			url:"updatefeedback.php",
			type:"post",
			data:{starvalue:value,comment:commentTxt,id:orderId,bhai:bhaiId,actionName:"updateFeedback"},
			success:function(data){
				
					alert(data);
				
			}
			
			
			
		});
		
	}
  
  
  </script>
  
  
  