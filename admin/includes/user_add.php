<form   class="form-horizontal"  method = 'post'  action = 'functions/add_user.php' style = 'width :90%; margin-left: 30px;' >
<div class="form-group">

<label for="exampleInputEmail1">username</label>
<input type="text" name="username" value="" class="form-control" id="exampleInputEmail1" placeholder="username">
</div>
<div class="form-group">
<label for="exampleInputEmail1">address</label>
<input type="text" name="address"  class="form-control" id="exampleInputEmail1" placeholder="address">
</div>

<div class="form-group">
<label for="exampleInputEmail1">phone</label>
<input type="number" name="phone" value="" class="form-control" id="exampleInputEmail1" placeholder="phone">
</div>
<div class="form-group">
<label for="exampleInputEmail1"> email</label>
<input type="email" name="email" value="" class="form-control" id="exampleInputEmail1" placeholder="email">
</div>

  <div class="form-group">
<label for="exampleInputEmail1">password</label>
<input type="password" name="password" value="" class="form-control" id="exampleInputEmail1" placeholder="password">
</div>

 
<div class="form-group">
<label for="exampleInputEmail1">priv</label>
<input type="text" name="priv" value="" class="form-control" id="exampleInputEmail1" placeholder="priv">
</div>


<div class="form-check form-check-inline">
<input class="form-check-input" type="radio"  name="gender" id="inlineRadio1" value="0" >
<label class="form-check-label" for="inlineRadio1">Male</label>
</div>
<div class="form-check form-check-inline">
<input class="form-check-input" type="radio" name="gender" id="inlineRadio2" value="1" >
<label class="form-check-label" for="inlineRadio2">Female</label>
</div>
      
    <br>
    <br>
<div class="form-check form-check-inline">
<input class="form-check-input" type="radio"  name="religion" id="inlineRadio1" value="0" >
<label class="form-check-label" for="inlineRadio1">muslim</label>
</div>

<div class="form-check form-check-inline">
<input class="form-check-input" type="radio" name="religion" id="inlineRadio2" value="1" >
<label class="form-check-label" for="inlineRadio2">christian</label>
</div>

    
<div class="form-group">
<label for="exampleInputEmail1">faqulty</label>
<input type="text" name="faqulty" value="" class="form-control" id="exampleInputEmail1" placeholder="faqulty">
</div>
 
<div class="form-group">
<label for="exampleFormControlSelect1">Preveleges</label>
<select name="Preveleges" class="form-control" id="exampleFormControlSelect1" required>
  <option value="0" >admin</option>
  <option value="1" >user</option>

</select>
</div>

<input type = 'submit'  name = 'submit'  class="btn btn-primary"    value = 'submit' ></input>






</form>