<h2 class="pull-left">Inventory</h2>
<p>
  <a href="create"><button class="btn btn-success btn-primary pull-right" type="button">Add A Product</button></a>
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
      		<td><?= $product->title ?></td>
      		<td><?= $product->product_number  ?></td>
      		<td><?= $product->quantity ?></td>
      		<td></td>
    	</tr>
	<?php endforeach ?>
  </tbody>
</table>