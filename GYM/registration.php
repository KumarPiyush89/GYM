<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>registration</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <script type="text/javascript" src="login.js"></script>
    
  <style>
        
    body
        { 
          margin: 0px;
          padding: 0px;
          text-align: center;
          font-family:'Calibri', Courier, monospace;
          color: rgb(255, 255, 255);
          background:url('img/bgimg.jpg');
          background: opacity 0.1;
          background-repeat: no-repeat;
          background-size: cover;
        }
        .container h1 a{
            text-decoration:none;
            color:white;
          }
          .container h1 a:hover{
           
            color:DodgerBlue;
           }
         
        .input{
         padding-left: 5%;
         background:rgba(0, 0, 0, 0.671);
         border:none;
         border-radius: 20px;
         border-bottom:2px solid rgba(255, 255, 255, 0.459); 
         height: 26px;
         width: 500px; 
         color: rgb(255, 255, 255);
         font-size: 24px;
         font-weight:lighter;
         text-shadow: 1px 1px 10px rgba(255, 255, 255, 0.747);
         word-spacing: 4px;
         letter-spacing: 2px;
         font-family:'Calibri', courier, monospace; 
        }

        .input:hover{
          background-color: rgb(61, 61, 43);
          border-bottom:2px solid rgb(238, 238, 168);
        }
        ::placeholder {
            color: white;
            opacity: 1; 
           
          }

        
        .select{
         
         background:rgba(0, 0, 0, 0.671);
         border:none;
         border-radius: 20px;
         border-bottom:2px solid rgba(255, 255, 255, 0.459); 
         height: 31px;
         width: 560px; 
         color: rgb(255, 255, 255);
         font-size: 24px;
         word-spacing: 4px;
         letter-spacing: 2px;
         font-family:'Calibri', courier, monospace; 
         padding-left: 5%;
         font-weight:lighter;
         text-shadow: 1px 1px 10px rgba(255, 255, 255, 0.747);
          /* text-align-last:center; */
          /* text-transform:lowercase ; */
        }

        .select:hover{
          background-color: rgb(61, 61, 43);
          border-bottom:2px solid rgb(238, 238, 168);
        }
        
        input[type=password]{
          width: 470px;
        }
         
          
        .eye{
          border-radius: 20px;
          padding: 1px;
          cursor: pointer;         
          font-size: 22px;
          color: rgb(255, 255, 255);
          background:rgba(0, 0, 0, 0.671);
          border-bottom:2px solid rgba(255, 255, 255, 0.459);
          
         
        }

        .eye:hover{
          
           background-color: rgb(61, 61, 43);
           border-bottom:2px solid rgb(238, 238, 168);
          
        }

        .container{
         
          width: auto;
          height: auto;
          
          
        }
        
            .form{
              padding: 3%;
              text-align: center;
              background-image: linear-gradient(to bottom, rgba(255, 255, 255, 0), rgba(0, 0, 0, 0.74));
              
            }

            .registerbtn{
                  background:rgba(0, 0, 0, 0.671);
                  border:none;
                  border-radius: 20px;
                  border-bottom:2px solid rgb(238, 238, 168); 
                  height: 35px;
                  width: 600px; 
                  color: rgb(238, 238, 168);
                  font-size: 24px;
                  font-weight: bold;
                  text-transform: uppercase;
                  text-align: center;
                  letter-spacing: 10px;
                  font-family:'Calibri', courier, monospace; 
                  transition: 0.6s;
                 
                  text-shadow: 2px 2px 10px rgba(255, 255, 255, 0.747);
            }
            .registerbtn:hover{
              background-color: aliceblue;
              background-image: linear-gradient(to right, rgb(243, 243, 160),white,rgb(243, 243, 160));
              color: black;
              letter-spacing: 20px;
              
            }

            .avtar
        {
          border: 1px solid white;
          border-radius: 100%;
          width: 100px;
          height: 100px;
          cursor: pointer;
         
        }
        .avtar:hover{
          transition: 0.5s;
         box-shadow: 2px 2px 20px rgba(255, 255, 255, 0.747);
        }
        
       
        .link{
          color:DodgerBlue;
        }
           .upload{
             display: none;
             
           } 
           #upload b{
           
             font-size:30px;
             cursor: pointer;
             
          }
          
           #upload b:hover{
             background-color: rgba(255, 255, 255, 0.521);
            
           }

    </style>

</head>
<body>
    
  
    <form action="signin.html" method="" class="form" name="form" enctype="multipart/form-data">
        <div class="container">
          <h1>RIGISTER YOURSELF WITH <a href="index.html">GYM</a></h1>
          <div class="icon">
           
           
            <input class="upload" type="file" id="file" name="photo" required>
            <label for="file" id="upload">  
              
              <img src="img/s4.jpg" class="avtar" id="avtar">
            </label>
            
          </div>
                    
          <hr>
          <br>
         
          <input type="text" class="input" placeholder="Type your first name" name="firstname" id="firstname" size="15" required/>
           
          <br><br>

          
          <input type="text" class="input" placeholder="& last name" name="lastname" id="lastname" required >
          <br><br>

          <select name="category" class="select" id="category" required>
            <option value="" selected="selected">Category</option>
            <option value="trainer">Trainer</option>
            <option value="customer">Customer</option>
          </select>
          <br><br>

         
          <input type="date" class="input" name="dob" id="dob" placeholder="Date of birth" value=""
          min="1960-01-01" max="2021-12-31" required />
          <br><br>

          
           <select name="gender" class="select" id="gender" required>
             <option value="" selected="selected">Gender</option>
             <option value="male" >Male</option>
             <option value="female" >Female</option>
             <option value="others" >Other</option>
           </select>
           <br><br>

          
          <input type="number" class="input" name="mobileno" id="mobileno"  placeholder="Mobile Number" size="10" required/>
          <br><br>

          
          <input type="email" class="input" placeholder="Enter Email" name="email" id="email" required/>
          <br><br>

        
            
            <input type="password" class="input" placeholder="Enter Password" name="password" id="psw" required/>
            <b class="eye" id="color" onclick="eyeFunction()">👁</b>
            <br><br>

          
            

          
          <input type="text" class="input" name="address" id="address" placeholder="Type your residential address here" required/>
          
          <br><br>
         
          <input type="number" class="input" name="pincode" id="pinc" placeholder="Pin code" size="6" required/>
          <br><br>

         
          <select name="state" class="select" id="state" required >
            <option value="" selected="selected">State</option>
            <option value="ANDAMAN AND NICOBAR ISLANDS">Sample1</option>
            <option value="ANDHRA PRADESH">Sample2</option>
            <option value="ARUNACHAL PRADESH">Sample3</option>
            <option value="ASSAM">Sample4</option>
            <option value="BIHAR">Sample5</option>
           

          </select>
          <br><br>
          
          <input type="text" class="input" name="country" id="country" value="India" required/>
          <br><br>               

          <hr>
          
          
          <p>By creating an account you agree to our <a class="link" href="tc.php">Terms & Privacy Policy</a>.</p>
          <button type="submit" class="registerbtn" name="submit">SUBMIT</button>
          <br>
        </div>
          <br>
        <div class="container">
          <p>Already have an account? <a class="link" href="login.php">Sign in</a>.</p>
        </div>
        <br><br>
      </form>
</body>
</html>

