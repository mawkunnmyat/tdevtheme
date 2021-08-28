<?php get_header(); ?>

<?php
//require_once ("header.php");
if(isset($_POST["submit"])){
    $username = $_POST["email"];
    $password = $_POST["password"];
    if($email == "admin@gmail.com" && $password == "demo") {
        header("Location:menu.php");
    } else {
        echo "Username and password do not match";
    }
}
?>
<html>
<head>
    <title>Login</title>
</head>
<body>
<div class="container">
            <h2>Log In To Your Account</h2>
            <hr class="hr"/>
            <form class="form" action="#" method="post">
                <div class="form-control">
                    <label for="email">Email</label>
                    <input type="email" name="email" id="email" class="input" placeholder="Enter Email" autocomplete="off"/>
                </div>
                <div class="form-control">
                    <label for="password">Password</label>
                    <input type="password" name="password" id="password" class="input" placeholder="Enter Password"/>
                </div>
               
                <h3>Forgot your password?</h3>
                
                <button type="submit" name="sumit" id="sumit" class="btn" >SING IN</button>
                <hr/>
                <h3>No account? Create one here</h3>
            </form>
        </div>

</body>
</html>
<?php get_footer(); ?>