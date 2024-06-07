<?php include('query.php')?>
<?php include('header.php')?>


<div class="app-container">
  
<div class="app-main" id="main">
<!-- begin container-fluid -->
<div class="container-fluid">

<div class="container">

<div class="container-fluid pt-4 px-4">
                <div class="row vh-100 bg-light rounded align-items-center justify-content-center mx-0">
                    <div class="col-md-6 text-center">
                        <h3 class="mt-30">Add Products</h3>

                        <form action="" method="post" enctype="multipart/form-data">

        <div class="form-group">
          <label for="">NAME</label>
          <input type="text" name="pName" required id="" class="form-control" placeholder="" aria-describedby="helpId">
          <div class="form-group ">
          <label for="">weight</label>
          <input type="text" name="pweight" required id="" class="form-control" placeholder="" aria-describedby="helpId">
          <div class="form-group">
          
          <div class="form-group">
          <label for="">image</label>
          <input type="file" name="pImg" required id=""  class="form-control" placeholder="" aria-describedby="helpId">
          <div class="form-group">
          <label for="">category</label>
         <select class="form-control" required name="cId" id="">
            <option> SELECT CATEGORY</option>

            <?php
            $query = $pdo->query("select * from catogary");
            $res= $query->fetchAll(PDO::FETCH_ASSOC);
            foreach($res as $cat){

             ?>
             <option value="<?php echo $cat['id']?>"><?php echo $cat['name']?></option>

           <?php
            };
            ?>

         </select>
         
         <div class="form-floating">
         <label for="floatingTextarea">Remarks</label>
                                <textarea class="form-control" name="details" placeholder="Leave a comment here" id="floatingTextarea"></textarea>
                              
                            </div>

          <button name="addproducts" class="btn btn-info mt-30" type="submit"> ADD</button>
         
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

