<?php

// require_once 'functions/connect.php';
$id = $_GET['id'];

$select_blog = "SELECT *FROM blog WHERE id ='$id'";
$result_blog = $connect ->query($select_blog);
$row_blog = $result_blog ->fetch_assoc();


?>

<form method="post" action="functions/edit_blog.php" enctype="multipart/form-data" style="margin:10px;">
  
<input type="hidden" name="id"  class="form-control" value="<?php echo $row_blog['id']?>">


    <div class="form-group">
    <label for="exampleInputEmail1">Title</label>
    <input type="text" name="title"  value="<?php echo $row_blog['title']?>" class="form-control" id="exampleInputEmail1" placeholder="title">
  </div>
  <!-- <textarea name="area1" cols="40"></textarea><br> -->


    <div class="form-group">
    <label for="exampleInputEmail1">Author</label>
    <input type="text"   name="author" value="<?php echo $row_blog['author']?>" class="form-control" id="exampleInputEmail1" placeholder="Author" style='width:600px;'></input>
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Post</label>
    <textarea type="text" rows="4" cols="50" name="post" value="<?php echo $row_blog['post']?>" class="form-control" id="exampleInputEmail1" placeholder="Post"></textarea>
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Full_Post</label>
    <textarea type="text" rows="6" cols="70" name="post" value="<?php echo $row_blog['full_post']?>" class="form-control" id="exampleInputEmail1" placeholder="Post"></textarea>
  </div>

   
  <div class="form-group">
    <label for="exampleInputEmail1">img</label>
    <input type="file" name="image"  value="<?php echo $row_blog['img']?>" class="form-control" id="exampleInputEmail1" placeholder="description">
  </div>


  <input type="submit" name="submit" class="btn btn-primary" value="Submit">
<!--   <button type="submit" class="btn btn-primary">Submit</button> -->
</form>


<?php

include 'design/footer.php';

?>
