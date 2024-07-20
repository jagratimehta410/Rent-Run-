
<!DOCTYPE html>
<html>
    <head>
    <title>Login  page </title>
      
   <style>
        body {
                   margin: 0 ;
                   padding : 0 ;
                  background :  url(Image/img32.jpg) ;
                  background-size :  cover ; 
                  width : 200px ;
                  height : 100vh ; 
                 background-repeat : no-repeat;
                background-attachment : fixed ;
                 font family : sans-serif;
              }
    .center  {
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
 form  .txt_field {
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
 .txt_field label {
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
 .pass {
            margin: -5px  0  20px 5px;
            color : #a6a6a6;
           cursor : pointer ;
        }
 .pass:hover{
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
  .signup_link {
                      margin : 30px 0;
                     text-align : center;
                    font-size :16;
                    color : #666666;
                  }
 .signup_link a {
                    color : #2691d9;
                   text-decoration : none;
                  }
 .signup_link a:hover{
                    text-decoration : underline ;
                }
   </style>

    </head>
    <body>
        
        <div class="center">
            <h1>Login</h1>

            <form method="post"> 
             <div class="txt_field">
              <input type="text" name="email" required>
               <label>Username</label>
                 </div>

               <div class="txt_field">
              <input type="password"name="password" required>
               <label>Password</label>
                  </div>
     
                <div class="pass"><a href="forgotpassword.html">Forgot Password?</div>
                 <input type="submit" value="login"  name="login">
                <div class ="signup_link">
                Not a member ? <a href="signup.php">Sign Up</a>
                  </div>
                  </form>
                  <?php
  if(isset($_POST["login"]))
  {
   // echo "test";
    //die;

      require './_dbconnect.php';

      extract($_POST);
      $s="select * from user where emailid='$email' and password ='$password'";
      // echo $s;
      // die;

      $result=mysqli_query($link,$s);
      $n=mysqli_num_rows($result);
      if($n>0)
      {
       echo "<script>alert('login Successful')</script>";
       header("location:R&R3.php");
      }
      else{
        echo"Not Successful";
      }
  }
?>
                 
                  
            
    </body>
</html>