<div class="table-responsive">
<table class="table table-hover table-fixed" style="width: 90%; margin:auto;">
<thead>
  <tr>
  <th>id</th>
  <th>first_name</th>
  <th>last_name</th>
  <th>email	</th>
  <th>subject</th>
  <!-- <th>message</th> -->
  <th>status</th> 
  <th>Controrls</th>   

  </tr>  
 </thead>
 <tbody>
 <?php
//  require_once 'functions/connect.php';
 $select = 'SELECT * FROM message';
 $result_messages  = $connect -> query($select);
 $counter = 0;
 foreach($result_messages as $show_messages){
    ?>
     <tr>
       <td><?php echo++$counter;  ?></td> 
       <td><?php echo $show_messages ['first_name']  ?></td> 
       <td><?php echo $show_messages ['last_name']  ?></td> 
       <td><?php echo $show_messages ['email'] ?></td> 
       <td><?php echo $show_messages ['subject']  ?></td> 
       <td class = 'status'><?php if($show_messages ['status'] == 0){echo 'unread';} 
       elseif($show_messages ['status'] == 1){echo 'readed';} ?></td> 
       <td>
                    <!-- Button trigger modal -->
<button type="button" class="btn btn-primary mass_view" data-toggle="modal" data-target="#exampleModal<?php echo$show_messages['id'] ?>"
 data=<?php echo$show_messages['id']?>>
View Massage
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal<?php echo$show_messages['id'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">First Name <span style="color: blue;"><?php echo $show_messages['first_name'] ?></span></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Your Massage Is <span style="color: blue;"><?php echo $show_messages['message'] ?></span> 
      </div>
      <!-- <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Confirm</button>
      </div> -->
    </div>
  </div>
</div>

<a href="functions/delete_massages.php?id=<?php echo $show_messages['id'];?>" class= 'btn btn-danger'>delete</a>

            
       
<?php } ?>
</tboby>
</table>

 </div>