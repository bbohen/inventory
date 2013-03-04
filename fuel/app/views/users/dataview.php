<h2><?=  $account->email ?></h2>

<table class="table-striped table-hover">
  <caption>Caption</caption>
  <thead>
    <tr>
      <th>Title</th>
      <th>Quantity</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach($products as $product) : ?>
		 <tr>
      		<td><?= $product->title ?></td>
      		<td><?= $product->quantity ?></td>
    	</tr>
	<?php endforeach ?>
  </tbody>
</table>