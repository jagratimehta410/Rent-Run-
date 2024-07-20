
<!DOCTYPE html>
<html>
    <head>
        <title>Sign Up page</title>
      
        
   <style>
    body {
                 margin: 0 ;
                 padding : 0 ;
                 background :  url(Image/img31.jpg) ;
                 background-size :  cover ; 
                 width : 200px ;
                height : 100vh ; 
                background-repeat : no-repeat;
                background-attachment : fixed ;
                font family : sans-serif;
              }

  .center {
                  position : absolute;
                  top : 50%;
                 left :50%;
                transform : translate(-50%, -50%);
                width : 400px;
                 background : white;
                 border-radius :10px;
            }
  .center h1 {
                      text-align : center;
                      padding : 0 0 20px 0;
                      border-bottom : 1px solid black;
                  }
  .center form {
                         padding : 0 40px;
                         box-sizing : border-box;
                      }
  form  .txt_field  {
                               position : relative;
                               border-bottom : 2px  solid  #adadad;
                               margin : 30px 0;
                           }
   .txt_field input {
                           width : 100%;
                          padding : 0 5px;
                          height : 40px;
                          font-size: 16px;
                          border : none;
                          background : none;
                         outline : none;
                         }
 .txt_field label  {
                         position: absolute; 
                         top:50%;
                         left : 5px;
                        color : #adadad;
                       transform : translateY(-50%);
                       font-size : 16px;
                      pointer-events : none;
                       transition : .5s;
                       }
   .txt_field span : : before {
                                           content:  ' ' ;
                                           position : absolute;
                                           top : 40px;
                                           left : 0;
                                           width : 0%;
                                           height : 2px;
                                           background : #2691d9;
                                     }

   .txt_field input:focus ~ label,
    .txt_field input:valid ~ label {
            top : -5px;
           color: #2691d9;
    }
   .txt_field input : focus ~ span : : before,
   .txt_field input : valid ~ span : : before {
       width : 100%;
     }
 .pass{
        margin: -5px  0  20px 5px;
       color : #a6a6a6;
       cursor : pointer ;
      }
 .pass:hover {
                text-decoration :  underline ;
               }
input[type="submit"] {
                                    width : 100%;
                                    height : 50px;
                                    border : 1px solid ;
                                    background : #2691d9;
                                    border-radius : 25px ;
                                   font-size : 18px;
                                   color : #e9f4fb;
                                  font-weight : 700;
                                  cursor : pointer;
                                 outline : none;
                          }
 input[type="submit"]:hover {
                                          border-color: #2691d9;
                                          transition : .5s;
                                        }
  .login_link {
                  margin : 30px 0;
                 text-align : center;
                 font-size :16;
                 color : #666666;
             }
 .login_link a {
                     color : #2691d9;
                     text-decoration : none;
                    }
 .login_link a:hover {
                             text-decoration : underline ;
                          }
  </style>
  </head>

  <body>
       
    <div class="center">   
 
             <h1>Sign Up</h1>

               <form method ="post"> 
             <div class="txt_field">
             <input type="text"name="firstname" required>
                <label> First Name</label>
                  </div>

                    <div class="txt_field">
                  <input type="text"name="lastname" required>
                  <label> Last Name</label>
                   </div>
 
                   <div class="txt_field">
              <input type="email"name="emailid" required>
                  <label> Email id</label>
                    </div>
  
                     <div class="txt_field">
              <input type="password" name="password"required>
               <label>Password</label>
                  </div>
 
                    <div class="txt_field">
              <input type="password" name="confirmpass" required>
               <label>Confirm Password</label>
                  </div>
      
            
                  <input type="submit" value="save" name="save">
                <div class ="login_link">
                    Already have an Account ? <a href="login.php">Login</a>
                   </div>
            </form>

           <?php
           if(isset($_POST["save"]))
           {
            extract($_POST);
            require'./_dbconnect.php';
          
           $s="insert into user values('$firstname','$lastname','$emailid','$password','$confirmpass')";
           
        
           mysqli_query($link,$s);
           $n=mysqli_affected_rows($link);
           if($n>0)
           echo "succesfully inserted";
           else
           echo "try again";
           }
           ?>
          
     </body>
</html>
