<a href="?do=add" class="btn btn-primary m-3" style='height:80px; width:100px;'>Add Blogins</a>
<div class="table-responsive">
<table class="table table-hover table-fixed" style="width: 95%; margin-top:50px;">
<thead>
  <tr>
  <th>id</th>
  <th>title</th>
  <th>Author</th>
  <th>post</th>
  <th>img</th>
  <th>Controrlos</th>
  </tr>  
 </thead>
 <tbody>
 <?php
  require_once 'functions/connect.php';

 $select = 'SELECT * FROM blog';
 $result_user  = $connect -> query($select);
 $counter = 0;
 foreach($result_user as $show_blog){
    ?>
     <tr>
       <td><?php echo++$counter;  ?></td> 
       <td><?php echo $show_blog['title']?></td> 
       <td><?php echo $show_blog['author']?></td> 
       <td><?php echo $show_blog['post']?></td>
       <td><?php echo $show_blog['full_post']?></td>  
       <td><img src="img_blogs/<?php echo $show_blog['img']?>" style="width:100px;height:100px;border-radius:50%;"></td> 
       <td>

       <!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalLong<?php echo $show_blog['id']?>">
  View Posts
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModalLong<?php echo $show_blog['id']?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle"><?php echo $show_blog['title'] ?></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <?php echo $show_blog['post']?>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>

<a href="?do=edit&id=<?php echo $show_blog['id']?>" class='btn btn-secondary'>edit post</a>
<br>
 <a href="functions/delete_blogs.php?id=<?php echo $show_blog['id']?>" class='btn btn-danger'>Delete post</a>


       </td> 
       </tr> 
       


        
<?php } ?>
</tboby>
</table>

 </div>

    

 <?php
 
 include 'design/footer.php';
 
 
 ?>