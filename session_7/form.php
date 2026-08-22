


<?php     

include('layout/errors.php');
include('layout/header.php');
?>

   <!-- <form method="post" action="index.php" class="w-75 m-auto mt-4">
    <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">username</label>
    <input type="text"  name="username" class="form-control" id="exampleInputPassword1">
  </div>

  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>

  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" name="password" class="form-control" id="exampleInputPassword1">
  </div>

  <div class="mb-3 form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <button type="submit" name="submit" class="btn btn-primary">Submit</button>
</form> -->







   <!-- <form method="post" action="index.php" 
   class="w-75 m-auto mt-4" enctype="multipart/form-data">


  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Upload img</label>
    <input type="file" name="image" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>




  <button type="submit" name="submit" class="btn btn-primary">Submit</button>
</form> -->







   <form method="post" action="index.php?username=ahmed" 
   class="w-75 m-auto mt-4">


  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Upload img</label>
    <input type="text" name="username" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>


  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Upload img</label>
    <input type="password" name="password" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>



  <button type="submit" name="submit" class="btn btn-primary">Submit</button>
</form>



<!-- 
 <form method="post" action="index.php" class="w-75 m-auto my-3">

  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">First Number</label>
    <input type="number" name="num1" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>

  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Second Number</label>
    <input type="number" name="num2" class="form-control" id="exampleInputPassword1">
  </div>

 <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Select Operation</label>
   <select name="operation" class="form-control" id="">
    <option value="+">Select</option>
    <option value="+">+</option>
    <option value="-">-</option>
    <option value="*">*</option>
    <option value="/">/</option>
   </select>
  </div>


  <button type="submit" name="submit" class="btn btn-primary">Submit</button>
</form>  -->




<?php 

include('layout/footer.php');
?>