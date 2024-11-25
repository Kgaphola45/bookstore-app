<?php include 'inc/header.php'; ?>
<?php include 'inc/slider.php'; ?>


 <div class="main">
    <div class="content">
    	<div class="content_top">
    		<div class="heading">
    		<h3>Feature Books</h3>
    		</div>
    		<div class="clear"></div>
    	</div>
	      <div class="section group">
	      	<?php 
              $getFpd = $pd->getFeaturedProduct();
              if ($getFpd) {
                  while ($result = $getFpd->fetch_assoc()) {
                      ?>
				<div class="grid_1_of_4 images_1_of_4">
					 <a href="details.php?proId=<?php echo $result['productId']; ?>"><img src="admin/<?php echo $result['image']; ?>" alt="" /></a>
					 <h2><?php echo $result['productName']; ?></h2>
					 <p><span class="price">R<?php echo $result['price']; ?></span></p>
				     <div class="button"><span><a href="details.php?proId=<?php echo $result['productId']; ?>" class="details">Details</a></span></div>
				</div>
				<?php
                  }
              } ?>
			</div>
			<div class="content_bottom">
    		<div class="heading">
    		<h3>New Books</h3>
    		</div>
    		<div class="clear"></div>
    	</div>
			<div class="section group">
				<?php 
              $getNpd = $pd->getNewProduct();
              if ($getNpd) {
                  while ($result = $getNpd->fetch_assoc()) {
                      ?>
				<div class="grid_1_of_4 images_1_of_4">
					 <a href="details.php?proId=<?php echo $result['productId']; ?>"><img src="admin/<?php echo $result['image']; ?>" alt="" /></a>
					 <h2><?php echo $result['productName']; ?></h2>
					 <p><span class="price">R<?php echo $result['price']; ?></span></p>
				     <div class="button"><span><a href="details.php?proId=<?php echo $result['productId']; ?>" class="details">Details</a></span></div>
				</div>
				
				<?php
                  }
              } ?>
				
			</div>
    </div>
 </div>

<?php include 'inc/footer.php'; ?>
