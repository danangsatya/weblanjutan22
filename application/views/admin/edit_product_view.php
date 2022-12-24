<!DOCTYPE html>
<html lang="en">

<head>
	<?php $this->load->view('admin/_partials/head.php') ?>
</head>

<body>
	<main class="main">
		<?php $this->load->view('admin/_partials/side_nav.php') ?>

		<div class="content">
			<h1><center>Edit Product</center></h1>
			<div class="col-md-6 offset-md-3">
		<form action="<?php echo site_url('admin/product/update');?>" 
		method="post">
		 <div class="form-group">
		 <label>Product Name</label>
		 <input type="text" class="form-control" name="product_name" 
		value="<?php echo $product_name;?>" placeholder="Product Name">
		 </div>
		 <div class="form-group">
		 <label>Price</label>
		 <input type="text" class="form-control" name="product_price" 
		value="<?php echo $product_price;?>" placeholder="Price">
		 </div>
		 <input type="hidden" name="product_id" value="<?php echo 
		$product_id?>">
		 <button type="submit" class="btn btn-primary">Update</button>
		 </form>
		 </div>
		 </div>
			
			<?php $this->load->view('admin/_partials/footer.php') ?>
		</div>
	</main>
</body>

</html>