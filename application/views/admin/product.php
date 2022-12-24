<!DOCTYPE html>
<html lang="en">

<head>
	<?php $this->load->view('admin/_partials/head.php') ?>
</head>

<body>
	<main class="main">
		<?php $this->load->view('admin/_partials/side_nav.php') ?>

		<div class="content">
			<h1>Product</h1>
			
			<div class="toolbar">
				<a href="<?php echo site_url('admin/product/add_new');?>" class="button button-primary" role="button">+ Tambah Product</a>
			</div>
			
				 <h1><center>Product List</center></h1>
				 <table class="table table-striped">
				 <thead>
				 <tr>
				 <th scope="col">#</th>
				 <th scope="col">Product Name</th>
				 <th scope="col">Price</th>
				 <th width="200">Action</th>
				 
				 </tr>
				 </thead>
				 <?php
				 $count = 0;
				 foreach ($product->result() as $row) :
				 $count++;
				 ?>
				 <tr>
				 <th scope="row"><?php echo $count;?></th>
				 <td><?php echo $row->product_name;?></td>
				 <td><?php echo number_format($row->product_price);?></td>
					<td>		 
					<a href="<?php echo site_url('admin/product/delete/'.$row->product_id);?>" class="btn btn-sm btn-danger">Delete</a>		 
					<a href="<?php echo site_url('admin/product/get_edit/'.$row->product_id);?>" class="btn btn-sm btn-danger">Update</a>
					</td>
					</tr>
				 <?php endforeach;?>
				 </tbody>
				 </table>
				 </div>
			
			<?php $this->load->view('admin/_partials/footer.php') ?>
		</div>
	</main>
</body>

</html>