<?php

include('query.php')?>
<?php include('header.php')?>

<div class="app-container">
  <div class="app-main" id="main">
<div class="container-fluid">
<div class="container">

<div class="container-fluid pt-4 px-4 text-dark">
                <div class="row vh-100 bg-light rounded align-items-center justify-content-center mx-0">
                    <div class="col-md-12 text-center">
                        <h3 class="mt-30">All categories</h3>
                        <table class= "table">
                            <thead>
                                <tr>
                                    <th>NAME</th>
                                    <th>Description</th>
                                    <th> IMAGE</th>
                                    <th> ACTION</th>
                                    <th> ACTION</th>
                                    
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $query= $pdo->query("select * from catogary");
                                $allcategories=$query->fetchAll(PDO::FETCH_ASSOC);
                                foreach($allcategories as $singlecategory ){

                                    ?>
                                    <tr>
                                        <td scope="row"> <?php echo $singlecategory['name']?></td>
                                        <td scope="row"> <?php echo $singlecategory['cat-id']?></td>
                                        <td> <img height="100px" src="assets/pics/<?php echo $singlecategory['image']?>" alt=""></td>
                                        
                                        <td><a class="btn btn-info" href="updatecat.php?id=<?php echo $singlecategory['id']?>">Edit</a></td>
                                        <td><a class="btn btn-danger" href="deletecat.php?id=<?php echo $singlecategory['id']?>">Delete</a></td>

                                        
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