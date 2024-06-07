<?php include('query.php')?>
<?php include('uheader.php')?>



<?php
if(isset($_GET['id'])){
    $id = $_GET['id'];
    $query = $pdo->prepare('select * from products where id = :id');
    $query->bindParam('id',$id);
    // print_r($query);
    $query->execute();
    $cat = $query->fetch(PDO::FETCH_ASSOC);
    print_r($cat);
    
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
                                    <label for="exampleInputEmail1" class="form-label">Weight</label>
                                    <input value="<?php echo $cat['weight']?>" type="text" name="cDes" id="" class="form-control" aria-describedby="helpId">
                                </div>
                            
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Product ID</label>
                                    <input value="<?php echo $cat['productid']?>" type="text" name="p_id" id="" class="form-control" aria-describedby="helpId">
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Image</label>
                                    <input value="<?php echo $cat['image']?>" type="file" name="cImage" id="" class="form-control" aria-describedby="helpId">
                                </div>
                                
                                <div class="form-floating">
                                <textarea class="form-control" name="details" placeholder="Leave a comment here" id="floatingTextarea"></textarea>
                              <label for="floatingTextarea">Comments</label>
                            </div>
                            <button type="submit" name="reject" class="btn btn-primary">Rejected</button>
                            <button type="submit"  name="move" class="btn btn-primary">Move to Smoke</button>
                        </form>
                    </div>  
                </div>
            </div>

</div>
</div>
</div>
</div>

<?php include('footer.php')?>