
				<div class="row">
				<div class="col-md-12 ">
					<div class="row">
					<?php 

					require_once("connect.php");
			        $sql = "SELECT * FROM categories";
			        $linkImage = 'Image/';
			        $result = mysqli_query($link,$sql);
			        if($result)
			        {
			          while($row = mysqli_fetch_assoc($result))
				          {?>

				          	<li><a href="#"><img width = 30px height =30px  src="<?php echo $linkImage.$row['icon']; ?>" >
				          		<label><?php echo $row['name']; ?> </label></a>
						    
						</li>
						
							<?php }} ?>
				</div>	
			</div>



</div>

