

<?php include('query.php')?>
<?php include('header.php')?>



<?php
if(isset($_GET['id'])){
    $id = $_GET['id'];
    $query = $pdo->prepare('select * from Catogary where id = :id');
    $query->bindParam('id',$id);
    // print_r($query);
    $query->execute();
    $cat = $query->fetch(PDO::FETCH_ASSOC);
    // print_r($cat);
    
}

?>


<div class="app-container">
  <div class="app-main" id="main">
<div class="container-fluid">
<div class="container">


<div class="container-fluid pt-4 px-4">
<div class="row vh-100 bg-light rounded align-items-center justify-content-center mx-0">
                    <div class="col-md-6">
                        <h3>Update Category</h3>
                        <form action="" method="post" enctype="multipart/form-data">
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Name</label>
                                    <input value="<?php echo $cat['name']?>" type="text" name="cName" id="" class="form-control" aria-describedby="helpId">
                                </div>

                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Descriptipn</label>
                                    <input value="<?php echo $cat['cat-id']?>" type="text" name="cDes" id="" class="form-control" aria-describedby="helpId">
                                </div>
                            
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Image</label>
                                    <input value="<?php echo $cat['image']?>" type="file" name="cImage" id="" class="form-control" aria-describedby="helpId">
                                </div>
                            <button type="submit" name="updatecat" class="btn btn-primary">Update</button>
                            
                            
                        </form>
                    </div>  
                </div>
            </div>

</div>
</div>
</div>
</div>

<?php include('footer.php')?>