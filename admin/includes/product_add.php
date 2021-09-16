<form method="post" action="functions/add_product.php" enctype="multipart/form-data" style="margin:10px;">
  
    <div class="form-group">
    <label for="exampleInputEmail1">sellar</label>
    <input type="text" name="sellar"  class="form-control" id="exampleInputEmail1" placeholder="Brand name">
  </div>

    <div class="form-group">
    <label for="exampleInputEmail1">client</label>
    <input type="text" name="client" value="" class="form-control" id="exampleInputEmail1" placeholder="Client Name">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">price</label>
    <input type="text" name="price" value="" class="form-control" id="exampleInputEmail1" placeholder="Price">
  </div>

   
  <div class="form-group">
    <label for="exampleInputEmail1">image</label>
    <input type="file" name="image[]" value="" class="form-control" id="exampleInputEmail1" placeholder="description" multiple>
  </div>

   
  <div class="form-group">
    <label for="exampleInputEmail1">description</label>
    <input type="text" name="description" value="" class="form-control" id="exampleInputEmail1" placeholder="description">
  </div>


  <input type="submit" name="submit" class="btn btn-primary" value="Submit">
<!--   <button type="submit" class="btn btn-primary">Submit</button> -->
</form>
