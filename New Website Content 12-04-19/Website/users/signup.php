<!-- name in input tags -->
<!DOCTYPE HTML>
<html>
<head>
    <title></title>

    <link href="css/signup.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
</head>
<body>
<form action="include/sign_up_inc.php" method="POST">
<div class="container register-form">
            <div class="form">
                <div class="note">
                    <p>Sign Up Form</p>
                </div>

                <div class="form-content">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" class="form-control" name="user_first" placeholder="First Name *" value=""/>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" name="user_last" placeholder="Last Name" value=""/>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" name="user_name" placeholder="User Name" value=""/>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" name="user_email" placeholder="E-mail" value=""/>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="Password" class="form-control" name="Password" placeholder="Your Password *" value=""/>
                            </div>
                            <div class="form-group">
                                <input type="Password" class="form-control" name="confpassword" placeholder="Confirm Password *" value=""/>
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btnSubmit" name="submit">Submit</button>
                </div>
            </div>
        </div>
    </form>
  </body>
</html>
