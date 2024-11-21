<div class="header_bottom">
		<div class="header_bottom_left">
			<div class="section group">
				
				<?php 
                $getCluster = $pd->latestFromCluster();
                if ($getCluster) {
                    while ($result = $getCluster->fetch_assoc()) {
                        ?>
				<div class="listview_1_of_2 images_1_of_2">
					<div class="listimg listimg_2_of_1">
						 <a href="details.php?proId=<?php echo $result['productId']; ?>"> <img src="admin/<?php echo $result['image']; ?>" alt="" /></a>
					</div>
				    <div class="text list_2_of_1">
						<h2>Cluster</h2>
						<p><?php echo $result['productName']; ?></p>
						<div class="button"><span><a href="details.php?proId=<?php echo $result['productId']; ?>">Add to cart</a></span></div>
				   </div>
			   </div>
<?php
                    }
                } ?>

<?php 
                $getDocker = $pd->latestFromDocker();
                if ($getDocker) {
                    while ($result = $getDocker->fetch_assoc()) {
                        ?>
				<div class="listview_1_of_2 images_1_of_2">
					<div class="listimg listimg_2_of_1">
						 <a href="details.php?proId=<?php echo $result['productId']; ?>"> <img src="admin/<?php echo $result['image']; ?>" alt="" /></a>
					</div>
				    <div class="text list_2_of_1">
						<h2>Docker</h2>
						<p><?php echo $result['productName']; ?></p>
						<div class="button"><span><a href="details.php?proId=<?php echo $result['productId']; ?>">Add to cart</a></span></div>
				   </div>
			   </div>
<?php
                    }
                } ?>

				
			</div>
			<div class="section group">
				<?php 
                $getTensflow = $pd->latestFromTensflow();
                if ($getTensflow) {
                    while ($result = $getTensflow->fetch_assoc()) {
                        ?>
				<div class="listview_1_of_2 images_1_of_2">
					<div class="listimg listimg_2_of_1">
						 <a href="details.php?proId=<?php echo $result['productId']; ?>"> <img src="admin/<?php echo $result['image']; ?>" alt="" /></a>
					</div>
				    <div class="text list_2_of_1">
						<h2>C#</h2>
						<p><?php echo $result['productName']; ?></p>
						<div class="button"><span><a href="details.php?proId=<?php echo $result['productId']; ?>">Add to cart</a></span></div>
				   </div>
			   </div>
<?php
                    }
                } ?>			
				<?php 
                $getDocker = $pd->latestFromDocker();
                if ($getDocker) {
                    while ($result = $getDocker->fetch_assoc()) {
                        ?>
				<div class="listview_1_of_2 images_1_of_2">
					<div class="listimg listimg_2_of_1">
						 <a href="details.php?proId=<?php echo $result['productId']; ?>"> <img src="admin/<?php echo $result['image']; ?>" alt="" /></a>
					</div>
				    <div class="text list_2_of_1">
						<h2>Security</h2>
						<p><?php echo $result['productName']; ?></p>
						<div class="button"><span><a href="details.php?proId=<?php echo $result['productId']; ?>">Add to cart</a></span></div>
				   </div>
			   </div>
<?php
                    }
                } ?>

				
			</div>
		  <div class="clear"></div>
		</div>
			 <div class="header_bottom_right_images">
		   <!-- FlexSlider -->
             
			<section class="slider">
				  <div class="flexslider">
					<ul class="slides">
						<li><img src="images/custom-illustrated-book-cover-design.jpg" alt=""/></li>
						<li><img src="images/large_dissecting-the-cover-of-a-book-ee0d6a.jpg" alt=""/></li>
						<li><img src="images/cover-design-hero-illustration@2x.png" alt=""/></li>
						<li><img src="images/1200x628_instagrammable.jpg" alt=""/></li>
				    </ul>
				  </div>
	      </section>
<!-- FlexSlider -->
	    </div>
	  <div class="clear"></div>
  </div>
