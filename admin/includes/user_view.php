<a href="?do=add" class="btn btn-primary m-3" >Add User</a>
<div class="table-responsive">
<table class="table table-hover table-fixed" style="width: 80%; margin:auto;">
<thead>
  <tr>
  <th>id</th>
  <th>username	</th>
  <th>address	</th>
  <th>phone	</th>
  <th>email</th>
  <th>priv</th>
  <th>gender	</th>
  <th>religion	</th>
  <th>faqulty	</th>
  <th>Preveleges</th>
  <th>Controrls</th>   
  </tr>  
 </thead>
 <tbody>
 <?php
 $select = 'SELECT * FROM users';
 $result_user  = $connect -> query($select);
 $counter = 0;
 foreach($result_user as $show ){
    ?>
     <tr>
       <td><?php echo++$counter;  ?></td> 
       <td><?php echo $show['username']  ?></td> 
       <td><?php echo $show['address']  ?></td> 
       <td><?php echo $show['phone']  ?></td> 
       <td><?php echo $show['email']  ?></td> 
       <td><?php echo $show['priv']  ?></td> 
       <td><?php if($show['gender'] == 0){echo 'male';} else{echo 'female';}?></td> 
       <td><?php if($show['religion'] == 0 ){echo 'muslim';}else{echo 'chritaian';}?></td> 
       <td><?php echo $show['faqulty']  ?></td>
       <td><?php if( $show['Preveleges'] == 0){echo 'admin';}
       elseif($show['Preveleges'] == 1){echo 'user';}?></td> 
       <td> 

       <?php
      //     if($_SESSION['login'] == 1 ){             
      //    if($show['Preveleges'] < 1){

      //       echo  "hidden";


      //    }

      // }

         // else{
         //    echo "visible";
         //  
 


       
       
       
         ?>
         
          <a href="?do=edit&id=<?php echo $show['id']?>" class ='btn btn-primary' <?php if ($show['Preveleges'] == 'user') echo 'hidden';?>>edit user</a>
          
          <br></br>
          <a href="functions/delete_user.php?id=<?php echo $show['id'];?>" class= 'btn btn-danger'<?php if ($show['Preveleges'] == 'user') echo 'hidden' ;?>>delete</a>
          </td>

       </tr> 


<?php } ?>
</tboby>
</table>

 </div>