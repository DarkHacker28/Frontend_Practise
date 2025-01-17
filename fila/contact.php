<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact to Fila</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/bootstrap.bundle.min.js"></script>
</head>
<body class="bg-light">
    <div class="container mt-5">
        <div class="bg-white text-center p-3 fs-4">
            <em class="text-secondary">If you want, you can also write us directly here.</em>
            <div class="container mt-5 my-3">
                <center>
                    <form action="cont.php" method="post">
                        <div class="row text-start fs-5 container ms-2 my-3">
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <label class="ms-2 fw-bold">First Name <span class="text-danger">*</span></label>
                                <div class="row ">
                                    <div class="col-md-10 col-lg-10 my-2"> <input type="text" name="firstname" placeholder="First Name" class="form-control input-group-lg input-group" required></div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <label class="ms-2 fw-bolder">Last Name <span class="text-danger">*</span></label> 
                                <div class="row">
                                    <div class="col-md-10 col-lg-10 my-2"> <input type="text" name="lastname" placeholder="Last Name" class="form-control input-group-lg input-group" required></div>
                                </div>
                            </div>
                        </div>
    
                        <div class="row text-start fs-5 container ms-2 my-3">
                            <div class="col-lg-6 col-md-6 col-sm-12 mt-3">
                                <label class="ms-2 fw-bold">Email <span class="text-danger">*</span></label>
                                <div class="row ">
                                    <div class="col-md-10 col-lg-10 my-2"> <input type="text" name="email" placeholder="Email" class="form-control input-group-lg input-group" required></div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 mt-3">
                                <label class="ms-2 fw-bolder">Phone <span class="text-danger">*</span></label> 
                                <div class="row">
                                    <div class="col-md-10 col-lg-10 my-2"> <input type="text" name="phone" placeholder="Phone" value="+91" class="form-control input-group-lg input-group" required></div>
                                </div>
                            </div>
                        </div>
    
                        <div class="row text-start fs-5 container ms-2 my-3">
                            <div class="col-lg-12 col-md-12 col-sm-12 mt-3">
                                <label class="ms-2 fw-bolder">Your Massage <span class="text-danger">*</span></label> 
                                <div class="row">
                                    <div class="col-md-11 col-sm-11 col-lg-11 my-2">
                                        <textarea name="address" cols="20" rows="5" placeholder=" Massage"  class="form-control input-group-lg form-control-lg"></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="p-5 me-5">
                            <button type="submit" class="btn fs-4 text-white"  style="float: right; background: rgba(3, 56, 92, 0.673);" >Submit</button>
                        </div>
                    
                    </form>
                </center>
            </div>
        </div>
    </div>
</body>
</html>