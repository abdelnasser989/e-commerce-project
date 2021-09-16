<form method="post" action="functions/add_plogs.php" enctype="multipart/form-data" style="margin:10px;">
  
    <div class="form-group">
    <label for="exampleInputEmail1">Title</label>
    <input type="text" name="title"  class="form-control" id="exampleInputEmail1" placeholder="title">
  </div>
  <!-- <textarea name="area1" cols="40"></textarea><br> -->


    <div class="form-group">
    <label for="exampleInputEmail1">Author</label>
    <input type="text"  name="author" value="" class="form-control" id="exampleInputEmail1" placeholder="Author" style='width:600px;'></input>
  </div>

  <div class="form-group">
    <label for="exampleInputEmail1">Post</label>
    <textarea type="text"rows="4" cols="50"  name="post" value="" class="form-control" id="exampleInputEmail1" placeholder="Post"></textarea>
  </div>

   
  <div class="form-group">
    <label for="exampleInputEmail1"> Full Post</label>
    <textarea type="text" rows="5" cols="60"  name="full_post" value="" class="form-control" id="exampleInputEmail1" placeholder="Post"></textarea>
  </div>

   
  <div class="form-group">
    <label for="exampleInputEmail1">img</label>
    <input type="file" name="image[]" value="" class="form-control" id="exampleInputEmail1" placeholder="img" multiple>
  </div>


  <input type="submit" name="submit" class="btn btn-primary" value="Submit">
<!--   <button type="submit" class="btn btn-primary">Submit</button> -->
</form>
