<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="profile.css"/> <link href="https://cdn.jsdelivr.net/npm/remixicon@3.0.0/fonts/remixicon.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <style>
            ::-webkit-scrollbar
        {
            width: 20px;
        }
        ::-webkit-scrollbar-track{
            background: none;
            
        }
        ::-webkit-scrollbar-thumb
        {
            background: none;
        }
    </style>
    <title>Customer Profile</title>
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12 text-center">
                <h1><i class=" text-light ri-customer-service-2-fill"> &nbsp; </i><b style="color:red;">CUST</b><b class="text-light">OMER</b></h1>

            </div>
        </div>
        <div class="row">
            <div class="col-sm-3 "><h1 class="text-end"><a href="index.php"><i class="ri-home-office-fill"></i></a></h1></div>
            <div class="col-sm-6"  style=" height:600px; overflow:scroll;">

            <?php
    //connection
    $conn=new PDO("mysql:host =localhost;dbname=Kumarpiyush;","root","");

    $stmt=$conn->prepare("SELECT * FROM `gym` WHERE Category LIKE'C%';");

    $stmt->execute();
    $gyms=$stmt->fetchAll();
    ?>
    <table class="text-light text-center table  table-borderless" ><br/>
        <?php

        foreach ($gyms as $gym)
        {
            echo"<tr>
                    <td colspan=3 class='text-start'>".$gym['Id']."</td>
                </tr>
                <tr>
                    <td class='text-end'>".$gym['FirstName']."</td>
                    <td class='text-start'>".$gym['LastName']."</td>
                </tr>
                <tr>
                    <td class='text-end'>".$gym['Gender']."</td>
                    <td class='text-start'>".$gym['Email']."</td>
                    <td class='text-start'>".$gym['Category']."</td>
                </tr>
                <tr>
                    <td class='text-end'>".$gym['Mobile']."</td>
                    <td class='text-start'>".$gym['State']."</td>
                    <td class='text-start'>".$gym['PinCode']."</td>
                </tr>
                <tr>
                <td colspan=3 class='text-center' >".$gym['Country']."<hr/></td>
                </tr>";
        }
        ?>
    </table>
            </div>
            <div class="col-sm-3 "></div>
        </div>


    </div>    
</body>
</html>