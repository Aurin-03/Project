<!DOCTYPE html>
<html lang="en">
<head>
    <meta charser="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale-1.0">
    <title>Easy Travel</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">

    <link rel="stylesheet" href="style.css">
</head>
   
<body>
    <header class="header">
        <a href="#" class="logo"> <i class="fa fa-paper-plane"></i>EasyTravel </a>
      
         <nav class="navbar">
                      <a href=#>Home</a>
                      <a href=#>About</a>
                      <a href=#>Services</a>
                      <a href=#>Gallery</a>
                      <a href=#>Blogs</a>
                      <a href=#>Contact</a>
                      <a href="#login-form" class="loginbtn" onclick="document.getElementById('login-form').style.display='block'">LogIn</a>
         </nav>
         
         <a href="#book-form" class="bookbtn">Book Now</a>
      </header>
      <!---->
    
        <div id='login-form' class='login-page'>
            <div class="form-box">
               <!--  <div class="button-box">
                    <div id='btn'></div>
                    <button type="button" onclick="login()"
                    class='toggle-btn'>LogIn</button>
                    <button type="button" onclick="register()"
                    class='toggle-btn'>Register</button> 
                </div>---->
                <!--login er jnno-->
                <form id ='login' class='input-group-login'>
                  <input type='text' class='input-field'placeholder='Email Id'>
                  <input type='password' class='input-field'placeholder='Enter Password'>
                  <input type='checkbox' class='check-box'><span>Remember Password</span>
                  <button type='submit' class='loginsubmitbtn'>Log in</button>
                  <h2>Haven't registered yet?</h2>
                  <button type='button' class='regbtn' onclick="document.getElementById('reg-form').style.display='block'">Register</button>  
                </form>
                <!--reg er jnno
                <form id ='registration' class='input-group-reg'>
                  <input type='text' class='input-field'placeholder='First Name'required>
                  <input type='text' class='input-field'placeholder='LastName' required>
                  <input type='text' class='input-field'placeholder='Email Id'required>
                  <input type='password' class='input-field'placeholder='Enter Password' required>
                  <input type='password' class='input-field'placeholder='Confirm Password' required>
                  <button type='submit' class='regsubmitbtn'>Register</button>
                </form>    ----->
            </div>
        </div>

        <!--reg er form box-->
        <div id='reg-form' class='reg-page'>
            <div class="form-box">
                <form id ='registration' class='input-group-reg'>
                    <input type='text' class='input-field'placeholder='First Name'required>
                    <input type='text' class='input-field'placeholder='LastName' required>
                    <input type='text' class='input-field'placeholder='Email Id'required>
                    <input type='password' class='input-field'placeholder='Enter Password' required>
                    <input type='password' class='input-field'placeholder='Confirm Password' required>
                    <button type='submit' class='submitbtn'>Submit</button>
                  </form>
            </div>
        </div>
      
    <!--log in er jnno java script-->
    <script>
        var log=document.getElementById('login');
        var reg=document.getElementById('registration');
        var but=document.getElementById('btn');
        function register()
        {
            log.style.left='-400px';
            reg.style.left='50px';
            but.style.left='110px';
        }
        function login()
        {
            log.style.left='50px';
            reg.style.left='-450px';
            but.style.left='0px';
        }
    </script>
    <script>
        var modal = document.getElementById('login-form');
        window.onclick = function(event)
        {
            if(event.target == modal)
            {
                modal.style.display = "none";
            }
        }
    </script>
</body>
</html>
<!DOCTYPE html>