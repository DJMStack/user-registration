<html>
<head>
    <title> User login</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">



</head>

<body>

<div class="container">
    <div class="login-box">
    <div class="row">
    <div class="coL-md-6 login-left">
        <h2>Login Here</h2>
        <form action="validation.php" method="post">

            <div class="form-group">
              <label>Username</label>
              <input type="text" name="user" class=" form-control" required>
            </div>

            <div class="form-group">
              <label>Password</label>
              <input type="password" name="password" class=" form-control" required>
            </div>

            <button type="submit" class="btn btn-primary">Login</button>
    </div>

    </form>





    <div class="coL-md-6 login-right">
        <h2>Register Here</h2>
        <form action="registration.php" method="post">
         <div class="form-group">

            <div class="form-group">
            <label>Username</label>
            <input type="text" name="user" class=" form-control" required>
            </div>
         <div class="form-group">
            <label>Password</label>
            <input type="password" name="password" class=" form-control" required>
            </div>
            <div class="form-group">
            <label>Email</label>
            <input type="email" name="email" class=" form-control" required>
            </div>
            <button type="submit" class="btn btn-primary">Register</button>
    </div>
    </form>
    </div>
</div>
</body>
</html>
