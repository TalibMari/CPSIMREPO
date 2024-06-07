


<?php 
include('query.php');
include('uheader.php');
 ?>
  

<div class="app-container">
  
<div class="app-main" id="main">
                    <!-- begin container-fluid -->
                    <div class="container-fluid">
<div class="row">
<div class="container-fluid pt-4 px-4">
                <div class="row vh-100 bg-light rounded align-items-center justify-content-center mx-0">
                    <div class="col-md-12 text-center">
                        <h3>All products</h3>
                        <table class= "table" methd="post">
                            <thead>
                                <tr>
                                    <th>NAME</th>
                                    <th>weight</th>
                                    <th> productid</th>
                                    <th> image</th>
                                    <th> c-id</th>
                                    <th>Status</th>

                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $query= $pdo->query("select * from products");
                                $allproducts=$query->fetchAll(PDO::FETCH_ASSOC);
                                foreach($allproducts as $singleproducts){

                                    ?>
                                    <tr>
                                        <td scope="row"> 
                                        <?php echo $singleproducts['name']?></td>
                                        <td> <?php echo $singleproducts['weight']?></td>
                                        <td> <?php echo $singleproducts['productid']?></td>
                                        <td> <img height="100px"src="assets/pics/<?php echo $singleproducts['image']?>" alt=""></td>
                                        <td> <?php echo $singleproducts['c-id']?></td>
                                        <td><a class="btn btn-info" href="updateproduct.php?id=<?php echo $singleproducts['id']?>">Edit</a></td>
                                        <td><a class="btn btn-danger" href="deletepro.php?id=<?php echo $singleproducts['id']?>">Delete</a></td>
                                      </tr>
                                
                                <?php
                                }
                                ?>
                        
                            </tbody>



                        </table>



                        
                    </div>
                </div>
            </div>
                        </div>
                        </div>
                        </div>
                        
      </div>
<?php include('footer.php')?>
