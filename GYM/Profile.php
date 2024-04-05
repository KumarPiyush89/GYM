<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>user profile</title>
    <script type="text/javascript" src="login.js"></script>
    <script type="text/javascript">
        function update()
        {
           
            alert(" Now You Can Update Your Profile \nYou Can't Update Some fields Like Id, Name, Mail etc.");
        }

        function del()
        {
            alert("Are you sure...? \nIf realy want to delete your PROFILE so ReEnter your password");
           
        }
    </script>

   


    <style>
        body{
            background-image:url(img/gym1.jpg);
            background-repeat: no-repeat;
            background-size: cover;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            overflow-y: hidden;
            
        }
        h3{
            position: absolute;
            color:white;
            margin-left:40%;
            margin-top:10%;
            font-size:20px;
            text-transform:uppercase;
            font-weight:lighter;
            letter-spacing:3px;
            
        }

        h3:hover{
            text-shadow: 1px 1px 10px white;
        }

        .header{
           
            height:45px;
            padding-left: 40%;
           }
        
        
      
       
        .navbar li{
            display: inline-block;
            font:18px solid;
            background-color: rgba(0, 0, 0, 0.582);
            margin-left:16px;
            height: 32px;
            
            
           
        }
        .navbar li a{
           
            color:#ffffff;
            text-decoration-line: none;
            padding:34px 20px;
            transition:1s;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            font-weight: normal;
            text-shadow: 2px 2px 20px black;
            
        }
        .navbar li:hover {
           
            
            background-color:#ffffff;
                       
        }
        .navbar li a:hover{
            color: black;
            font-weight: normal;
        }

        .c1 img{
           margin: 16% auto;
           margin-left: 2%;
            /* border-radius: 100%; */
            width: 120px;
            /* height: 120px; */
            height: auto;
            box-shadow: 2px 2px 30px rgb(255, 255, 255);
        }

        input{
         
         background:none;
         border:none;
         font-weight:lighter;
         border-bottom:1px solid rgba(51, 51, 51, 0); 
         height: 26px;
         width: 220px; 
         color: rgb(255, 255, 255);
         font-size: 20px;
         text-shadow: 1px 1px 10px rgba(0, 0, 0, 0.712);
         font-family:'Calibri', courier, monospace; 
         text-transform: uppercase;
         cursor:pointer;
         outline:none;
        }

        input:hover{
          text-shadow: 1px 1px 10px rgba(255, 255, 255, 0.616);
          border-bottom:1px solid rgb(0, 128, 255);
        }
        .input2{
            width: 110px; 
        }

       .input3{
        width: 190px;
       }

        .table {
           
            margin: 10% auto;
            padding: 1%;
            background-color: rgba(0, 0, 0, 0.582);
        }

        
        .td{
            
            padding: 70px;
            
        }
        #td{
            border:1px red;
        }

        .eye {
            position: absolute;
            width: 20px;
            height: 20px;
            font-size: 22px;
            color: white;
            cursor: pointer;
            
            /* filter:invert(200%);    for inverting image color; */
           
        }

        button{
            padding:5px;
            color:white;
            background-color:transparent;
            font-size:18px;
            border:1px solid white;
            border-radius:5px;
            outline:none;
        }
        button a{
            text-decoration:none;
            color:white;
        }
        button:hover{
            background-color:rgba(240, 248, 255, 0.39);
        }
    </style>
</head>
<body>




    <h3>Welcome sample User</h3>

<div class="header">
    
           <ul class="navbar">
               <li><a href="index.php">HOME</a></li>
               <li><a href="about.php">ABOUT US</a></li>
               <li><a href="Contact.php">CONTACT US</a></li>
               <li><a href="Login.php">LOGOUT</a></li>             
            </ul>
          
        </div>
    <table class="table">
    
        <tr>

            <td class="c1">
                <img src="img\AAryan2.jpg" >
            </td>
            <td class="td">
                <input type="text" class="input2" name='id' value="01" readonly>
                <input type=" text" class="input2"  name="category" value="Trainer" readonly>
            
            <br>
                <input type="text" class="input2"  name="firstname" value="Aaryan" readonly>
                
                
                <input type="text" class="input2"  name="lastname" value="Raj" readonly>
                <br> 

                <input type=" text" class="input2"  name="gender" value="Male" readonly>
                
                <input type="text" class="input2" name="dob" value="21" readonly>
                
                
                <br>
                
               
                
                               
                <input type="email" class="input"  name="email" value="aaryan@gym.com" readonly>
                <br>

                <input type="password" class="input3"  name="password" id="psw" value="Pass#word" readonly>
                <b class="eye" id="color" onclick="eyeFunction()">👁</b>
                <br><br>
                <button   name="delprofile" id="del" onclick="del()"><a href="#" id="delete" >Delete Profile</a></button>
                    
                
                
                </td>
            <td class="td" id="td">
                
            <input type="number" class="input" name="mobileno"  value="1234567890" readonly >
            <br>          
                
            
            <input type="text" class="input" name="address" value="Previt Drive" readonly>
            
            <br>
            
                       
            <input type="text" class="input" name="state" value="Gaya" readonly>
            <br>
            
            <input type="number" class="input" name="pincoad" value="1234" readonly>
            <br>
            <input type="text" class="input" name="country"  value="India" readonly>
                    <br><br>
            
            <button  name="update" id="update" onclick="update()"><a href="#" >Update Profile</a></button>
            
            
        </tr>
</table>
</body>
</html>