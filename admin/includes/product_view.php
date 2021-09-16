<a href="?do=add"  class='btn btn-primary m-3'>Add Product</a>
<div class="table-responsive">
<table  class="table table-hover table-dark" style="width: 94%; margin:auto;">
<thead>
  <tr>
  <th>id</th>
  <th>sellar</th>
  <th>client</th>
  <th>price</th>
  <th>img</th>
  <th>description</th>
  <th>Controls</th>
  </tr>  
</thead>

   <?php
   
   $select_product = "SELECT * FROM products";
   $result_product = $connect -> query($select_product);
   $counter =0;

   foreach($result_product as $final_product) {

      
    $img = $final_product['img'];
    $img_implode= explode(",",$img);


    ?>
    <tbody>
      <tr>
      <td><?php echo ++$counter;?></td>
     
      <td><?php echo $final_product['sellar']?></td>
      <td><?php echo $final_product['client']?></td>
      <td><?php echo $final_product['price']?></td>
      <td><img src =  "img/<?php echo $img_implode[0] ?>" style="width:100px;height:100px;border-radius:50%;"></td>
      <td><?php echo $final_product['description']?></td>

      <td> 
          <a href="?do=edit&id=<?php echo $final_product['id']?>"class='btn btn-info m-3'>edit user</a>
          
          <a href="functions/delete_product.php?id=<?php echo $final_product['id']?>" class='btn btn-warning m-3'>Delete</a>
      </tr>


      <?php } ?>

</tbody>
</table>
   </div>