<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up in Bata</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/bootstrap.bundle.min.js"></script>
</head>
<body class="bg-light">
    <div class="container mt-5">
        <div class="bg-white text-center p-4 fs-4">
            <b>SIGN IN TO YOUR ACCOUNT</b>
            <div class="container mt-5 my-3">
                <center>
                    <form action="sign.php" method="post">
                        
                            <div class="row text-start fs-5 container ms-5 my-3">
                                <div class="col-lg-12 col-md-6 col-sm-12 mt-3 ">
                                    <label class=" fw-bold">Email / Phone <span class="text-danger">*</span></label>
                                    <div class="row ">
                                        <div class="col-md-12 col-lg-8 col-sm-12 my-2"> <input type="text" name="email"  class="form-control input-group-lg input-group" required></div>
                                    </div>
                                </div>
                            </div>
                            <div class="row text-start fs-5 container ms-5 my-3">
                                <div class="col-lg-12 col-md-6 col-sm-12 mt-3">
                                    <label class="ms-2 fw-bolder ">Password <span class="text-danger">*</span></label> 
                                    <div class="row ">
                                        <div class="col-md-12 col-lg-8 col-sm-12 my-2"> <input type="password" name="password" placeholder="Password"  class="form-control input-group-lg input-group" required></div>
                                    </div>
                                </div>
                            </div>
                    
    
                        
                        <div class="p-5 me-5">
                            <button type="submit" class="btn  fs-4" style="float: right; background: rgba(3, 56, 92, 0.673);" >Submit</button>
                        </div>
                    
                    </form>
                </center>
            </div>
        </div>
    </div>
</body>
</html>