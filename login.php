
<?php
  include "session.php";
  if(!($username && $password && $fname))
  {
?>


 <html>
 <head>
 <meta name='viewport' content='width=device-width, initial-scale=1.0'/>
 <link rel="stylesheet" type="text/css" href="style4.css"/>
 <link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.css"/>
 <link rel="icon" href="shoutbox_logo_invert.png"/>
 </head>
 <body>
  <div class='innerdiv' style="height:90%" >
     <h1 id='welcome' >WELCOME TO SHoutBox<span id='beta'>Beta</span></h1>
                 <form action='login1.php' method='post' id='myForm'>
                     <h3><i class='fa fa-sign-in'aria-hidden='true'></i> Login</h3>
                     <div  id='er'  style='font-size:10px;height:20px;'></div>
                     <table >
                         <tr>
                             <td><lable class='la'>Admission No. : <lable></td>
                             <td><input type='text' name='username' class='in' id='adminno' onblur='validate(this.name, this.value)'></td>
                             <td><div class='error' id='username'></div></td>
                         </tr>
                         <tr>
                             <td><lable class='la'>Password :<lable></td>
                             <td><input type='password' name='password' class='in'id='pass' onblur='validate(this.name, this.value)'></td>
                             <td><div class='error' id='password'></div></td>
                         </tr>

                           <tr ><td colspan=3 align='center'><input type='submit' value='Login'  onclick='checkForm()'></td></tr>
                     </table>

                 </form>
                 <h4 id='log'>Don't have an account?  <a href='signup.php'>Sign Up!</a></h4>
                 <h4 id='log'><a href='forgetpassword.php'>Forget Password ?</a></h4>
             </div>
      <div style=" height : 10% ;width:100%; text-align:center;background-color:" class="footer">
        <div class="" >

        </div>
        <div class="" >


        <a href="about.php" style="margin-top: 5px;"><span style="line-height:30px;">About Developer</span></a><br>
        <span class="bodymain_text"style="">Accidental Engineer : Move To Next Generation</span>
        </div>
      </div>
   </body>
   </html>

   <?php
   }
     else
     {
       header("Location: index.php");

     }
