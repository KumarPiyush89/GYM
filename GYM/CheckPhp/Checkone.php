<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.0.0/fonts/remixicon.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <title>CheckOneCOnditon</title>
</head>
<body style="background-color: skyblue;">
    <div class="container-fluid" >
        <div class="row">
            <div class="col-sm-12">
                <h1 class="text-center">SELECT DATA FROM THE ROW</h1>
            </div>
            <?php
    //connection
    $conn=new PDO("mysql:host =localhost;dbname=Kumarpiyush;","root","");

    $stmt=$conn->prepare("SELECT Id,FirstName,LastName FROM gym;");

    $stmt->execute();
    $gyms=$stmt->fetchAll();
    ?>
    <table class="text-light text-center table  table-hover table-borderless" >
        <?php

        foreach ($gyms as $gym)
        {
            echo"
                <tr>
                
                <td class='text-start'><br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".  $gym['Id'] .'&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'.$gym['FirstName'] .'&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'. $gym['LastName']."</td>
                
                    
                    
                    
                </tr>";
        }
        ?>
        <!--
-->
        </div>
        
    </div>
</body>
</html>