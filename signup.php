<?php get_header(); ?>

<?php
//require_once ("header.php");
if(isset($_POST["submit"])){
    $username = $_POST["radio"];
    $username = $_POST["username"];
    $username = $_POST["email"];
    $password = $_POST["password"];
    if($email == "admin@gmail.com" && $password == "demo" && $username == "demo" && $radio == "demo") {
        header("Location:menu.php");
    } else {
        echo "Username and password do not match";
    }
}
?>
<html>
<head>
    <title>Sing Up</title>
</head>
<body>
<div class="container">
            <h2>Create An Account</h2>
            <hr class="hr"/>
            <form class="form" action="#" method="post">
                <h3>Already have an account? Log in insted!</h3>
                <div class="form-control">
                    <label for="socialtitle">Social Title</label>
                    <input type="radio" name="genter" id="genterm" class="" value="1"/><label for="genterm">Mr.</label>
                    <input type="radio" name="genter" id="genterf" class="" value="2"/><label for="genterf">Mrs.</label>
                </div>
                <div class="form-control">
                    <label for="username">First name</label>
                    <input type="text" name="username" id="username" class="input" placeholder="Enter Username" autocomplete="off"/>
                </div>
                <div class="form-control">
                    <label for="username">Last name</label>
                    <input type="text" name="username" id="username" class="input" placeholder="Enter Username" autocomplete="off"/>
                </div>
                <div class="form-control">
                    <label for="email">Email</label>
                    <input type="email" name="email" id="email" class="input" placeholder="Enter Email" autocomplete="off"/>
                </div>
                <div class="form-control">
                    <label for="password">Password</label>
                    <input type="password" name="password" id="password" class="input" placeholder="Enter Password"/>
                </div>
                <div>
                    <label for="datetime">Birthday</label>
                    <input type="datetime" name="datetime" id="time" class=""/>
                </div>
                <h3>(E.g.: 05/31/1970)</h3>
                <div>
                    <input type="checkbox" name="color" id="colorred" class="" value="colr"/><label for="red">Receive offers from our partners
                    </label>
            <input type="checkbox" name="color" id="colorblavk" class="" value="colbk" checked/><label for="black">Sign up for our newsletter
                You may unsubscribe at any moment. For that purpose, please find our contact info in the legal notice.</label>
                </div>
                
                <button type="submit" name="sumit" id="sumit" class="btn" >SAVE</button>
                
                
            </form>
        </div>

</body>
</html>
<?php get_footer(); ?>