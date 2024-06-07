<?php 
include('query.php');
include('uheader.php');
checkSession();
?>
<div class="app-container">
  <div class="app-main" id="main">
<div class="container-fluid">
<div class="container">

<div class="container-fluid pt-4 px-4 text-dark">
                <div class="row vh-100 bg-light rounded align-items-center justify-content-center mx-0">
                    <div class="col-md-12 text-center">
                        <h3 class="mt-20">Initial Test</h3>
                        <table class= "table">
                            <thead>
                                <tr>
                                    <th>NAME</th>
                                    <th>weight</th>
                                    <th> productid</th>
                                    <th> image</th>
                                    <th> c-id</th>
                                    <th> Status</th>
                                    <th>ACTION</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $query= $pdo->query("SELECT * FROM products WHERE status = 'pending';");
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
                                        <td> <?php echo $singleproducts['STATUS']?></td>
                                        <td><a class="btn btn-primary" href="initialform.php?id=<?php echo $singleproducts['id']?>">Start Test</a></td>


                                        
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