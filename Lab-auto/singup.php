<?php
include("dbcon.php");
include("query.php");

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
    .disply {
        display: flex;
        justify-content: center;
        align-items: center;
        margin-top: 150px;

    }
</style>
</style>
</head>
<body>
    <div class="container disply">
    <!-- <h2>Login</h2>
    <form method="post" action="login.php">
        <label for="email">Username:</label>
        <input type="text" name="email" required><br>
        <label for="password">Password:</label>
        <input type="password" name="password" required><br>
        <button type="submit" name="login">Login</button>
    </form> -->
    <div class="col-xl-6 ">
                                <div class="card card-statistics " >
                                    <div class="card-header">
                                        <div class="card-heading">
                                            <h4 class="card-title">Login</h4>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <form method="post" action="main.php">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">NAME</label>
                                                <input type="text" name="name" class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Email address</label>
                                                <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                                                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputPassword1">Password</label>
                                                <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                                            </div>
                                            
                                            <button type="submit" name="signup" class="btn btn-primary">Sign Up</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        
                        </div>
</body>
</html>
