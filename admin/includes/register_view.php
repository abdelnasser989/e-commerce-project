<?php
require_once 'functions/register.php';

?>
<div class="table-responsive">
<table  class="table table-hover table-fixed" style="width: 80%; margin:auto;">
<thead>
<tr>
<th>id</th>
<th>first_name</th>
<th>last_name</th>
<th>email</th>
<th>password</th>
<!-- <th>confirm password</th> -->
</tr>
</thead>
<tbody>
<?php
$select_register = 'SELECT * FROM register';
$register = $connect -> query($select_register);
$counter = 0;
foreach($register as $show_register){
   ?>

    <tr>
    <td><?php echo++$counter; ?></td>
    <td><?php echo $show_register['first_name']?></td>
    <td><?php echo $show_register['last_name']?></td>
    <td><?php echo $show_register['email']?></td>
    <td><?php echo $show_register['password']?></td>
  
    </tr>

     <?php } ?>
    </tbody>
     </table>
     <div>