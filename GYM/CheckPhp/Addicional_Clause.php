<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.0.0/fonts/remixicon.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <div class="container-fluid">
        <div class="row text-center">
            <div class="col-sm-12 bg-info"><h1><hr/><br/>
            Add an Additional Selection Clause<br/>Include an additional pointer that indicates what type of data do you need.<br/>
            SELECT * FROM movies WHERE budget=’1’;<br/>
SELECT * FROM movies WHERE year=’2020’ AND rating=’9’;
<hr/><br/>
            </h1></div>
        </div>
        <div class="row">
            <div class="col-sm-12"><h1 class="text-center"> HERE TO DATA</h1>
            <?php
    //connection
    $conn=new PDO("mysql:host =localhost;dbname=Kumarpiyush;","root","");

    //$stmt=$conn->prepare("SELECT * FROM `gym` WHERE Date BETWEEN'30-11-2010' AND '12-12-2022'");
    $stmt=$conn->prepare("SELECT * FROM gym WHERE FirstName IN ('PIYUSH','KUMAR') ");
    
    $stmt->execute();
    $gyms=$stmt->fetchAll();
    ?>
    <table class=" text-center table  table-borderless" >
        <?php

        foreach ($gyms as $gym)
        {
            echo"<tr></i>
                    <td col-span=3 class='text-center'>".$gym['Id']."</td>
                </tr>
                <tr>
                    <td  class='text-end'>".$gym['FirstName']."</td>
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
            </div>
        </div>
    </div>
</body>     
</html>