<html>
<head>
<title> User Login and Registration </title>
<link rel = "stylesheet" type="text/css" href="happy1.css">
<link rel = "stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
</head>
<body>
    
    <div class="container">
        <div class = "login-box">
            <div class = "row">
                
            <div class ="col-md-6 login-left">
                <h2 style = "color: white; font-family: courier;"> Login Here </h2>
                <form action = "validation.php>" method="post">
                    <div class = "form-group">
                        <label>Username</label>
                        <input type = "text" name="user" class="form-control" required>
                    </div>

                    <div class = "form-group">
                        <label>Password</label>
                        <input type = "password" name="password" class="form-control" required>
                    </div>

                    <button type ="submit" class="btn btn-primary"> Get Started </button>
                </form>
            </div>

        <div class="col-md-6 register">
        <div class="col-md-6 login-down">

            <h2> Register Here </h2>
            <form action = "register.php>" method="post">
                 <div class = "form-group">
                    <label>Username</label>
                    <input type = "text" name="user" class="form-control" required>
                </div>

                <div class = "form-group">
                    <label>Password</label>
                    <input type = "password" name="password" class="form-control" required>
                </div>

                <div class = "form-group">
                    <label>Email</label>
                    <input type = "text" name="emailid" class="form-control" required>
                </div>

                <div class = "form-group">
                    <label>PhoneNo</label>
                    <input type = "text" name="phoneno" class="form-control" required>
                </div>

                <button type ="submit" class="btn btn-primary"> Get Started </button>   
            </form>
        </div> 
        </div>
    </div>
</div>
</body>
</html>
