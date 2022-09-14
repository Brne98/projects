<div class="container">
<form action="remove-item.php" method="post">
<table class="table table-dark table-striped mt-2">
<thead>
    <tr>
      <th scope="col"> </th>
      <th scope="col">Ime proizvoda</th>
      <th scope="col">Cena</th>
      <th scope="col">Kolicina</th>
      <th scope="col">Ukupna cena</th>
    </tr>
  </thead>
  <tbody>
  <?php $x=0;foreach($items as $item){; ?>
    <tr>
      <th scope="row">
        <input type="checkbox" name="remove[]" value="<?php echo htmlspecialchars($item['id']); ?>">
      </th>
      <td><?php echo htmlspecialchars( $item['title']); ?></td>
      <td><?php echo htmlspecialchars( $item['price']); ?></td>
      <td><?php echo 1; ?></td>
      <td><?php echo 1*htmlspecialchars($item['price']);?></td>
<?php $x+=$item['price'];} ?>
    </tr>
  </tbody>
</table>
<div class="d-flex justify-content-between">
    <button class="btn btn-primary" type="submit">Remove</button>
    <a href="checkout-page.php" class="btn btn-primary" type="submit">Go to checkout</a>
    <span>Ukupno: <?php echo $x ?></span><!--Nije odradjeno-->
</div>
</form>
</div>