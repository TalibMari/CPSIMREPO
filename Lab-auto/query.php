<?php
include('dbcon.php');
session_start(); // Start the session at the beginning of your PHP file

// Place this function at the beginning of your PHP file
function checkSession() {
    if (!isset($_SESSION['email'])) {
        header("Location: index.php"); // Redirect to your login page
        exit();
    }
}

if (isset($_POST['login'])) {
    $useremail = $_POST['email'];
    $userpassword = $_POST['password'];

    $query = $pdo->prepare("SELECT * FROM admin WHERE email = :Email AND password = :Password");
    $query->bindParam(':Email', $useremail);
    $query->bindParam(':Password', $userpassword);
    $query->execute();
    $res = $query->fetch(PDO::FETCH_ASSOC);

    if ($res && $res['role'] == 1) {
        // Valid login, set session and redirect
        $_SESSION['email'] = $res['email'];
        header("Location: main.php");
        exit();
    } else if ($res && $res['role'] == 0) {
        // Valid login, set session and redirect
        $_SESSION['email'] = $res['email'];
        header("Location: uindex.php");
        exit();
    } else {
        // Invalid login, show error message
        echo "<script>alert('Invalid credentials')</script>";
    }
}



if (isset($_POST['signup'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
$query = $pdo->prepare("INSERT INTO admin (name,email, password) VALUES (:name,:email, :password)");
    $query->bindParam(':name', $name);
    $query->bindParam(':email', $email);
    $query->bindParam(':password', $password);

    if ($query->execute()) {
        echo "User registered successfully!";
    } else {
        echo "Error registering user!";
    }
}





if (isset($_POST['addCategory'])) {
    $cName = $_POST['cName'];
    $cDes = $_POST['cDes'];
    $imageName = $_FILES['cImage']['name'];
    $imagetmpName=$_FILES['cImage']['tmp_name'];
    $extension=pathinfo($imageName,PATHINFO_EXTENSION);
    $destination= 'assets/pics/'.$imageName;
    if($extension == "jpg" || $extension == "png" || $extension == "jpeg" ){
       if(move_uploaded_file($imagetmpName,$destination)){
        $query = $pdo->prepare("INSERT INTO catogary (name, `cat-id`, image) VALUES (:cname, :cDes, :cImage)");
        $query->bindParam('cname',$cName);
          $query->bindParam('cDes',$cDes);
          $query->bindParam('cImage',$imageName);
          $query->execute();
          echo "<script> alert('category added succesfully');
          </script>";
       }
    }
    if($extension == "jpg" || $extension == "png" || $extension == "jpeg"){
        echo "<script> alert('category added succesfully');
        </script>";
    }else{
        echo "<script> alert('Please Check The File Format');
        </script>";
    }
}


if (isset($_POST['addproducts'])) {
    $pName = $_POST['pName'];
    $pweight = $_POST['pweight'];
    $cId = $_POST['cId'];
    $remarks=$_POST['details'];
    $imageName = $_FILES['pImg']['name'];
    $imagetmpName = $_FILES['pImg']['tmp_name'];
    $extension = pathinfo($imageName, PATHINFO_EXTENSION);
    $destination = 'assets/pics/' . $imageName;

    if ($extension == "jpg" || $extension == "png" || $extension == "jpeg") {
        if (move_uploaded_file($imagetmpName, $destination)) {
            $query = $pdo->prepare("INSERT INTO products (`name`, `weight`, `image`, `c-id`,`remarks`) VALUES (:pName, :pweight,:pImage, :cId , :remarks)");
            $query->bindParam(':pName', $pName);
            $query->bindParam(':pweight', $pweight);
            
            $query->bindParam(':pImage', $imageName);
            $query->bindParam(':cId', $cId);
            $query->bindParam('remarks', $remarks);
            
            if ($query->execute()) {
                echo "<script>alert('Product added successfully');</script>";
            } else {
                echo "<script>alert('Error adding product');</script>";
            }
        }
    }
}
if (isset($_POST['move'])) {
    $details = $_POST['details'];
    $productId = $_POST['p_id'];

    $query = $pdo->prepare("UPDATE products SET `STATUS` = 'Moved to smoke test', remarks = :details WHERE `productid` = :productId");
    $query->bindParam(':details', $details);
    $query->bindParam(':productId', $productId);

    // Execute the prepared statement
    if ($query->execute()) {
        // Update successful
        echo "<script>alert('Product moved to smoke test')</script>";
    } else {
        // Handle error
        echo "<script>alert('Error updating product')</script>";
    }
}

if (isset($_POST['reject'])) {
    $details = $_POST['details'];
    $productId = $_POST['p_id'];

    $query = $pdo->prepare("UPDATE products SET `STATUS` = 'Rejected in intaial test', remarks = :details WHERE `productid` = :productId");
    $query->bindParam(':details', $details);
    $query->bindParam(':productId', $productId);

    // Execute the prepared statement
    if ($query->execute()) {
        // Update successful
        echo "<script>alert('rejected')</script>";
    } else {
        // Handle error
        echo "<script>alert('Error updating product')</script>";
    }
}
if (isset($_POST['reject2'])) {
    $details = $_POST['details'];
    $productId = $_POST['p_id'];

    $query = $pdo->prepare("UPDATE products SET `STATUS` = 'Rejected in smoke test', remarks = :details WHERE `productid` = :productId");
    $query->bindParam(':details', $details);
    $query->bindParam(':productId', $productId);

    // Execute the prepared statement
    if ($query->execute()) {
        // Update successful
        echo "<script>alert('rejected ')</script>";
    } else {
        // Handle error
        echo "<script>alert('Error updating product')</script>";
    }
}


if (isset($_POST['approve'])) {
    $details = $_POST['details'];
    $productId = $_POST['p_id'];

    $query = $pdo->prepare("UPDATE products SET `STATUS` = 'Approved', remarks = :details WHERE `productid` = :productId");
    $query->bindParam(':details', $details);
    $query->bindParam(':productId', $productId);

    // Execute the prepared statement
    if ($query->execute()) {
        // Update successful
        echo "<script>alert('rejected')</script>";
    } else {
        // Handle error
        echo "<script>alert('Error updating product')</script>";
    }
}
 
 
 
 


if (isset($_POST['updatecat'])) {
    $id = $_GET['id'];
    $newName = $_POST['cName'];
    $newDescription = $_POST['cDes'];
    $updateQuery = $pdo->prepare('UPDATE Catogary SET name = :newName, `cat-id` = :newDescription WHERE id = :id');
    $updateQuery->bindParam(':newName', $newName);
    $updateQuery->bindParam(':newDescription', $newDescription);
    $updateQuery->bindParam(':id', $id);

    if ($updateQuery->execute()) {
        echo "Category updated successfully!";
    } else {
        echo "Error updating category!";
    }
}






if (isset($_POST['updatecat'])) {
    $id = $_GET['id'];
    $newName = $_POST['cName'];
    $newDescription = $_POST['cDes'];
    $updateQuery = $pdo->prepare('UPDATE Catogary SET name = :newName, `cat-id` = :newDescription WHERE id = :id');
    $updateQuery->bindParam(':newName', $newName);
    $updateQuery->bindParam(':newDescription', $newDescription);
    $updateQuery->bindParam(':id', $id);

    if ($updateQuery->execute()) {
        echo "Category updated successfully!";
    } else {
        echo "Error updating category!";
    }
}




?>