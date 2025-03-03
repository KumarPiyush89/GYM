
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <title>about us</title>
    <style>
        body{
        background:url('img/bggml.jpg');
        font-family: Bradley Hand ITC;
        font-size: 20px;
        background-repeat: no-repeat;
        background-size: cover;
        }
        header{
            padding: 0px;
            margin: 0px;
            position: absolute;
            color: rgba(255, 255, 255, 0.966);
            border-radius: 10px;
            width: 98.5%;
            height: 15%;
            
        }
        a{
            text-decoration: none;
            color: dodgerblue;
            text-shadow: 3px 3px 30px rgb(0, 0, 0);
        }
       
        .heading img{
            padding:0px;
            width: 120px;
            height: 120px;
            left: 1px;
            position: absolute;        
        }
        h1{
            padding: 6px;
            margin-left: 100px;
            position: absolute;
            
        }
       
        .head{
            text-align:center;
            padding: 10px;
            margin-left: 500px;
            text-shadow: 2px 2px 20px rgb(0, 0, 0);
            position: absolute;
        }
        .head span{
            font-size: small;
            font-weight: lighter;
            letter-spacing: 4px;
            text-shadow: 2px 2px 20px rgb(0, 0, 0);
        }
        
        .pera{
           
            padding: 0px;
            margin-top: 100px;
            position: absolute;
            color: rgba(0, 0, 0, 0.966);
            width: 90%;
            height: 80%;
            font-size: 25px;
        }
       
        .photo{
            
            margin-left: 20%;
            border-radius: 100%;
            box-shadow: 1px 1px 40px white;
            width: 250px;
            height: 250px;
        }
        
        .pera2{
            text-align: center;
            color: white;
            font-weight: lighter;
            word-spacing: 3px;
            font-size:large;
            font-family:'Calibri', courier, monospace;
            
            
        }

        @media screen and (max-width:600px){
           
           *{
               margin:0;
               padding:0;
           }
            body{
            display:flex;
            align-items:center;
            justify-content:center;
            background: rgb(0, 0, 0);
            width:4%;
            
            }
           .heading img{
               margin: 0%;
               padding:0%;
               width: 80px;
               height: 80px;
            
           }
           .h1{
               margin-left: 65px;
               margin-top:5px;
           }
            .heading .head{
                padding-top:20%;
                margin: 0%;
               
            }
           
            .pera{
           display: inline-block;
           position: absolute;
           color: rgba(0, 0, 0, 0.966);
           width: 100%;
           height: 100%;
           font-size: 25px;
       }
      
       .photo{
           position: absolute;
           display: inline-block;
           margin-top: 0px;
           border-radius: 100%;
           box-shadow: 1px 1px 40px white;
           width: 250px;
           height: 250px;
       }
       .pera .box{
           margin: 15%;
           margin-top: 40%;
           padding: 0%;
           position: absolute;
          
       }
       
       .pera2{
            margin-top: 450px;
           text-align: center;
           color: white;
           font-weight: lighter;
           word-spacing: 3px;
           font-size:large;
           font-family:'Calibri', courier, monospace;
           
           
       }
            
        }
      
    </style>
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <!--<div class="col-sm-12"><?php include "nav.php";?><br/><br/><br/></div>-->
        
    <div>
        <header class="heading">
            <div id="nav">
                <a href="index.php">
                    <img class="logo" src="img/gyml3w.png" alt="">
                </a>
                <h1 class="h1">GYM</h1>
            </div>
            <div>
                <h1 class="head">"Let's Make Healthy Happen"<br><span>STOP WiSHiNG START DOiNG</span></h1>
                
            </div>
        </header>
        

        <table class="pera" >
            <tr>
                <td class="box">
                    <img src="img/train.jpg" class="photo"  >
                </td>
                <td >
                   
                   <p class="pera2">
                    
                    Let's Make Healthy Happen at GYM! <br>
                    Our friendly, professional staff are trained to help you on your fitness journey,<br> No matter how much support you need.
                    <br><br><br>Membership includes a free, no-pressure fitness consultation,<br> access to more than 160 in MP and 4,500+ gyms worldwide, and always open 24/7 convenience.
                    <br>All in a welcoming club and supportive member community.
                   <br><br><br><br>
                    <a href="registration.php">Let’s get started!</a> Visit during staffed hours or call for an appointment today!
                    <br>
                    By creating an account you agree to our<a href="tc.php">Terms & Privacy Policy.</a><br><br><br>
                    </p>
                </td>
            </tr>
        </table>
            
        
    </div>
</div>
</div>
</body>
</html>