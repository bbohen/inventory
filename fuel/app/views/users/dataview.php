<div class="alert alert-block alert-error fade in">
  This will be an instructional notification about editing the inventory.
  <a class="close" data-dismiss="alert" href="#">&times;</a>
</div>
<h2 class="pull-left">Inventory</h2>
<p>
  <a href="create"><button class="btn btn-success pull-right" type="button">Add A Product</button></a>
  <a href="edit"><button class="btn btn-primary pull-right" id="edit-btn" type="button">Edit</button></a>
</p>
<table class="table table-striped table-hover">
  <thead>
    <tr>
      <th>Title</th>
      <th>Product #</th>
      <th>Quantity</th>
      <th>Table Item</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach($products as $product) : ?>
		 <tr>
      		<td><?= $product->title ?> <i class="icon-edit"></i></td>
      		<td><?= $product->product_number  ?> <i class="icon-edit"></i></td>
      		<td><?= $product->quantity ?> <i class="icon-edit"></i></td>
      		<td></td>
    	</tr>
	<?php endforeach ?>
  </tbody>
</table>