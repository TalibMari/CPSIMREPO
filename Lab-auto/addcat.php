<?php include('header.php')?>
<?php include('query.php')?>


<div class="app-container">
  
<div class="app-main" id="main">
<!-- begin container-fluid -->
<div class="container-fluid">

<div class="container">
  
<div class="container-fluid pt-4 px-4">
                <div class="row vh-100 bg-light rounded align-items-center justify-content-center mx-0">
                    <div class="col-md-6 text-center">
                        <h3 class="mt-30">Add category</h3>

                        <form action="addcat.php" method="post" enctype="multipart/form-data">
                        <div class="form-group">
          <label for="">NAME</label>
          <input type="text" name="cName" id="" required class="form-control" placeholder="" aria-describedby="helpId">
          <div class="form-group">
          <label for="">Description</label>
          <input type="text" name="cDes" id="" required class="form-control" placeholder="" aria-describedby="helpId">
          <div class="form-group">
          <label for="">image</label>
          <input type="file" name="cImage" id="" required class="form-control" placeholder="" aria-describedby="helpId">
          <a href="" name="addCategory" class="btn btn-info mt-30" type="submit">Addcategory</a>
          <button name="addCategory" type="submit" class="btn btn-info mt-30" > ADD </button>
         
        </div>
 </form>



                        
                    </div>
                </div>
            </div>
</div>
</div>
</div>
</div>


<?php include('footer.php')?>