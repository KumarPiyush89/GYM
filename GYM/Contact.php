
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>contact</title>

    <style>
      body{
        
        display: block;   
        padding: 100px 150px;
        font-family: 'Calibri', Courier, monospace;
        background:url('img/contactbg.jpg');
        background-repeat: no-repeat;
        background-size: cover;
       
      }
      table{
        padding: 2%;
        border: 1px solid rgba(68, 66, 66, 0.377);
        border-radius: 15px;
        width: 50%;
        height: 50%;
        background-color: rgba(0, 0, 0, 0.39);
        transition:1s;
      }
      .contact{
        padding: 20px;
        /* border: 2px solid ; */
        border-radius: 15px;
        background-color: rgba(240, 248, 255, 0.534);
      }
      .container{
        padding: 20px;
      }
      .input{
         border:none;
         border-radius: 4px;
         border-bottom:2px solid rgb(99, 96, 96); 
         height: 20px;
         width: 250px; 
         color: rgb(110, 108, 108);
         font-size: 16px ;
         font-weight: bold;
         text-align: center;
         font-family: 'Calibri', Courier, monospace;
         transition:1ms;
         
      }

      #Category{                    /* for select tag*/
          text-align-last:center;
          height: 24px;
          width: 255px;
        }

      .input:hover{

        background-color: rgba(255, 255, 255, 0.671);
        }
       
    
     
      table:hover{
        background-color: rgba(240, 248, 255, 0.39);
      }

      button{
         border:none;
         border-radius: 4px;
         /* border-bottom:2px solid rgb(255, 255, 255);  */
         height: 28px;
         width: 255px; 
         color: rgb(0, 0, 0);
         font-size: 20px ;
         font-weight: bold;
         text-align: center;
         font-family: 'Calibri', Courier, monospace;
         
         transition:0.5s;
      }

      button:hover{
        color: rgb(255, 255, 255);
        background-color: rgba(0, 0, 0, 0.644);
        text-shadow: 1px 1px 10px rgb(255, 255, 255);
      }
      
      .contact h3 img{
        padding: 5px;
        margin:0px;
        position: absolute;
        width: 20px;
        height: 20px;             
      }     
      .contact h3 b{
       
        margin-left: 40px;
        font-size: 16px;
        font-weight: bold;
        
        
      }

      .contact h3 a{
        text-decoration:none;
        color:black;
      }

       /* social media icon */
      .col{
        text-align:center;
        
      }
      
      .col a{
        text-decoration: none;
        padding: 0px;
        margin:9px;
        width: 35px;
        height: 35px;
        
        
      }
      .col a:hover{
        filter:invert(100%);    /* for inverting image color */
       
      }

      .rate{
        width: 300px;
        padding: 10px;
        position: absolute;   
        margin-left: 55%;
        font-size: 20px;
        font-weight: bold;     
        border-radius: 15px;
        color: white;
        text-shadow: 2px 2px 2px rgb(0, 0, 0);
      }


      .rate .raticon{
        margin-left: 30%;
        width: 100px;
        height: 100px;
        box-shadow:  4px 4px 4px black;
        border-radius: 50%;
      }
      
      .opt{
        margin-left: 20%;
      }

      .opt input{
        cursor: pointer;
        
      }

      .submit{
        background-color:rgba(0, 0, 0, 0.486);
        
        color:white;
        font-size: 18px;
        margin-left: 20px;
        margin-top: 8px;
        letter-spacing: 2px;
        border:1px solid white;
        text-shadow: 2px 2px 2px rgba(0, 0, 0, 0.911);
        font-weight: bold; 
        cursor:pointer;
      }
      .submit:hover{
        background-color:rgba(0, 0, 0, 0);
        
      }
     
    </style>
</head>
<body>
  <table>
      <tr>
         
            <td>
            <div class="contact">
                <h1>How to find US</h1>
                
                <h3>
                  <img src="img/mail-i.png" alt=""><b>gymindia@gmail.com</b>
                </h3>
                
                <h3>
                    <img src="img/phone-i.png" alt=""><b>6205059314</b>
                </h3>
                
                <h3>
                  
                   <img src="img/add-i.png"  ><b>Deo Aurangabad<br> &emsp;&emsp;&nbsp;&nbsp;pin : 824202</b>
                  </a>
                </h3>

                <div class="col">
                  
                  <a href="#" class="twitter btn">
                     <img class="twitter" src="img/tweet-i.webp">
                  </a>
                  <a href="#" class="fb btn">
                     <img class="facebook" src="img/fb-i.webp">
                  </a>
                  <a href="#" class="insta btn">
                     <img class="instagram" src="img/insta-i.webp">
                  </a>
                </div>
            </div>

          </td>

          <td>
            <form action="" method="" >
                <div class="container">
                                                  
                                    
                  <input type="text" class="input" placeholder="Type your first name" name="firstname" id="firstname" required/>
                  <br>
                  <br>
                  <input type="text" class="input" placeholder=" & last name" name="lastname" id="lastname" >
                  <br>
                  <br>        
                                   
                  <input type="text" class="input" placeholder="Enter Email" name="email" id="email" required/>
                  <br>
                  <br>     
                  <input type="number" class="input" name="mobileno" id="mobileno" placeholder=" +91 Mobile Number" size="10" required/>
                  <br> 
                  <br>
                  
                  <select class="input"  name="category" id="Category" required>
                    <option value="" name="category" selected="selected">Category</option>
                    <option name="category" value="trainer" >Trainer</option>
                    <option name="category" value="customer" >Customer</option>
                  </select>
                  <br>
                  <br>

                  <textarea name="textarea" class="input" id="textarea" cols="" rows="" placeholder="Type Something / Take Appointment" required></textarea>
                       
                  <br>
                  <br>
                  
                  <button type="submit" name="submit">Submit</button>
                </div>
              
               
              </form>

          </td>
         
      </tr>
      




      <div class="rate">
        <a href="index.php">
          <img class="raticon" src="img/gyml3w.png" alt="">
        </a>
        
           
            <div class="opt" >
              <form action="rate.php" method="POST" >
                <h3>give rating to our...<br>perfomance</h3>
                <input  type="radio" name="rate" value="Best" /> Best 
                <br>
                <input  type="radio" name="rate" value="Better" /> Better
                <br>
                <input  type="radio" name="rate" value="Good" /> Good
                <br>
                <input  type="radio" name="rate" value="Need effort"/> Need effort
                <br>
              
                <input type="submit" value="Send" name="send" class="submit"/>
              </form>
            </div>
            
      </div>


  </table>

  
     
</body>
</html>


     