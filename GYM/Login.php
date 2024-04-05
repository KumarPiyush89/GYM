<?php
$err = "";
if(isset($_GET['Email']))
{
    try
    {
        $con=new PDO("mysql:host=localhost;dbname=kumarpiyush","root","");
        $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
         // Create Prepare Statement
        $stmt = $con->prepare("select * from gym where Email=:Email and Password=:Password");
        $stmt->bindValue(":Email", $_GET['Email']);
        $stmt->bindValue(":Password", $_GET['Password']);

        $stmt->execute();

        $recs = $stmt->fetchAll();

        if(count($recs)==1)
        {
            session_start();
            $_SESSION['Email'] = $recs[0]['Email'];
            $_SESSION['FirstName']= $recs[0]['FirstName'];
            $_SESSION['Gender'] = $recs[0]['Gendr'];
            //redirect to index page
            header("location:index.php");
        }
        else
        {   
            
            $err = "Invalid id or password";
        }

echo"<h1>HELLO PIYUSH</h1>";
    }catch(Exception $ex)
    {
        $err = $ex->getMessage();
echo"<h1>HELLO PIYUSH</h1>";
}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Joining page</title>
    <link rel="stylesheet" href="stylesheet1.css"/>
    
</head>
<body>
    <?php
        if($err!="")
        {
            echo '<h1 class="animate__animated animate__shakeY " style="color:red; text-align:center;">' . $err . '</h1>';
        }

        if(isset($_GET['signup']))
        {
            echo'<p class="text-success">User created successfully with id <b>'.$_GET['Email'].'</b></p>';
        }

        if(isset($_GET['Password'])&& $_GET['Password']=="1")
        {
            echo'<p class="text-success">Password Changed Successfully. Re-Login with new Password.</p>';
        }
    ?>
    <div class="container">
        <div class="form_area">
            <h4 class="title">LOG IN</h4>
            <form action="Login.php" method="get">
                <div class="form_group">
                    <label for="email" class="sub_title">Email<br/></label>
                    <input type="email" name="Email" placeholder="Enter your email"<?php if(isset($_GET['Email'])){ echo $_GET['Email'];} ?> id="email" class="from_style" value="
                    <?php if(isset($_GET['Email']))
                        {
                    echo $_GET['Email'];
                }?>
                    " required/>
                    
                </div>
                <div class="form_group">
                    <label for="password" class="sub_title">Password<br/></label>
                    <input type="password" name="Password" placeholder="Enter your password" id="password" class="from_style"/>
                </div>
                <div>
                    <input type="submit" class="btn" value="LOGIN"/>
                    <p class="link"><a href="#" class="link">Forgot your password</a></p>
                    <p>don't have an account?<a href="signup.php">signup</a></p>
                </div>
            </form>
        </div>
    
    </div>
</body>
</html>
