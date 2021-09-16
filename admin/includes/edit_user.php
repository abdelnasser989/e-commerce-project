<?php

$id = $_GET['id'];
$select = "SELECT * FROM practice WHERE id = '$id'";
$result = $connect ->query($select);
$show = $result -> fetch_assoc();


?>


<form   class="form-horizontal"  method = 'post'  action = 'functions/edit_user.php' style = 'width :90%; margin-left: 30px;' >
<div class="form-group">

<label for="exampleInputEmail1">id</label>
<input type="text" name="id" value="<?php echo$id;?>" class="form-control" id="exampleInputEmail1" placeholder="username">
</div>

<div class="form-group">
<label for="exampleInputEmail1">username</label>
<input type="text" name="username"  value = "<?php echo $show['username']?> "  class="form-control" id="exampleInputEmail1" placeholder="address">
</div>  

<div class="form-group">
<label for="exampleInputEmail1">address</label>
<input type="text" name="address"  value = "<?php echo $show['address']?> "  class="form-control" id="exampleInputEmail1" placeholder="address">
</div>

<div class="form-group">
<label for="exampleInputEmail1">phone</label>
<input type="number" name="phone" value="<?php echo $show['phone'] ?>" class="form-control" id="exampleInputEmail1" placeholder="phone">
</div>
<div class="form-group">
<label for="exampleInputEmail1">email</label>
<input type="email" name="email" value="<?php echo $show['email'] ?>" class="form-control" id="exampleInputEmail1" placeholder="email">
</div>

  <div class="form-group">
<label for="exampleInputEmail1">password</label>
<input type="password" name="password" value="<?php echo $show['password'] ?>" class="form-control" id="exampleInputEmail1" placeholder="password">
</div>

 
<div class="form-group">
<label for="exampleInputEmail1">priv</label>
<input type="text" name="priv" value="<?php echo $show['priv'] ?>" class="form-control" id="exampleInputEmail1" placeholder="priv">
</div>


<div class="form-check form-check-inline">
<input class="form-check-input" type="radio"  name="gender" id="inlineRadio1" value="0" 
     <?php if($show['gender'] == 0 ){echo "checked";} ?>>
<label class="form-check-label" for="inlineRadio1">Male</label>
</div>
<div class="form-check form-check-inline">
<input class="form-check-input" type="radio" name="gender" id="inlineRadio2" value= "1" 
    <?php if($show['gender'] == "1" ){echo "cheched";}?>>
<label class="form-check-label" for="inlineRadio2">Female</label>
</div>
      
<br></br>

<div class="form-group" style= 'width:300px;'>
<label for="exampleFormControlSelect1">religion</label>
<select name="religion" class="form-control" id="exampleFormControlSelect1">
  <option value="0" <?php if($show["religion"] == "0"){echo "selected"; } ?>>muslim</option>
  <option value="1" <?php  if($show["religion"] == "1"){echo "selected";}?>>chritian</option>

</select>
</div>
    
<div class="form-group">
<label for="exampleInputEmail1">faqulty</label>
<input type="text" name="faqulty" value="<?php echo $show['faqulty'] ?>" class="form-control" id="exampleInputEmail1" placeholder="faqulty">
</div>
 
<div class="form-group">
<label for="exampleFormControlSelect1">Preveleges</label>
<select name="Preveleges" class="form-control" id="exampleFormControlSelect1">
  <option value="0" <?php if($show["Preveleges"] == "0"){echo "selected"; } ?>>admin</option>
  <option value="1" <?php  if($show["Preveleges"] == "1"){echo "selected";}?>>user</option>

</select>
</div>

<input type = 'submit'  name = 'submit'  class="btn btn-primary"    value = 'submit' ></input>




