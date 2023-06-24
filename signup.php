 
 <!DOCTYPE html>
<html lang="en"> 

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Science Lab Management System-Matara Central College</title>
  <style>
    body {
      margin: 0;
      padding: 0;
      font-family: Arial, sans-serif;
    }
    #intro {
       background-image: url("https://img.freepik.com/free-vector/wave-background_53876-115944.jpg?w=1060&t=st=1687141966~exp=1687142566~hmac=bb9d0f7214d98abda58104332edf3dba69bbd7caf29c366840d9251b5967a1a1");
      background-color: #darkblue;
      height: 130vh;
      display: flex;
      align-items: center;
      justify-content: center;
       margin-top: -230px;
       margin-bottom:-290px ;
     
        background-size: cover;
    }
    header {
      background-color: #darkblue;
      color: #darkblue;
      padding: 20px;
      text-align: center;
    }
    .logo {
  max-width: 100px; /* Adjust the logo size as needed */
  margin-right: 10px; /* Add some margin between the logo and the h1 element */
}
    .form-outline {
  position: relative;
  margin-bottom: 70px;
  margin-top: -40px; /* Decrease the margin-bottom value */
}


.form-outline input {
  width: 100%;
  padding: 10px;
   border: 1px solid;
  border-bottom: 1px solid ;
  border-top:1px solid  ;
  
  outline: none;
}

.form-outline label {
  position: absolute;
  top: -50px;
  font-size: 16px;
  color: #999;
  pointer-events: none;
  transition: 0.2s all;
}

.form-outline input:focus ~ label,
.form-outline input:valid ~ label {
  top: -20px;
  font-size: 14px;
  color: #333;
}
#footer {
      background-color: #333;
      color: #fff;
      padding: 20px;
      text-align: center;
    }


    .btn-primary {
      background-color: #07295e;
      color: #fff;
      padding: 10px 20px;
      border: none;
      border-radius: 5px;
      cursor: pointer;
    }

    .btn-primary:hover {
      background-color: #0056b3;
    }
    .forgot-password-link {
  margin-top: 10px; /* Adjust the margin as needed */
}

   .navbar {
    background-color: #333; /* Set the background color of the navbar */
    padding: 15px; /* Add padding to the navbar */
  }

  .navbar-brand {
    color: #fff; /* Set the text color of the navbar brand */
    font-size: 24px; /* Adjust the font size of the navbar brand */
    font-weight: bold; /* Set the font weight of the navbar brand */
    margin-left: 30px; /* Add right margin to the navbar brand */
  }

  .navbar-nav .nav-link {
    color: #fff; /* Set the text color of the navbar links */
    margin-left: 10px; /* Add right margin to the navbar links */
  }

  .btn-outline-light {
    color: #fff; /* Set the text color of the sign-up button */
    border-color: #fff; /* Set the border color of the sign-up button */
  }

  .btn-outline-light:hover {
    background-color: #fff; /* Set the background color on hover for the sign-up button */
    color: #333; /* Set the text color on hover for the sign-up button */
  }

 

    
 </style>
 <style>
  .navbar-dark {
    background-color: #07295e;
  }

  .form-control {
    background-color: #fff;
    color: #000;
  }

  .input-group-text {
    background-color: #fff;
    color: #000;
  }
</style>
 <nav class="navbar navbar-dark">
  <div class="container-fluid">
    <form class="d-flex input-group w-auto">
      <input
        type="search"
        class="form-control rounded"
        placeholder="Search"
        aria-label="Search"
        aria-describedby="search-addon"
      />
      <span class="input-group-text border-0" id="search-addon">
        <i class="fas fa-search"></i>
      </span>
    </form>
  </div>
</nav>


    
  </style>
</head>
 <body> 

  <header>
    <img src="data:image/jpeg;base64,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" alt="Logo" class="logo">
   
        <h1>Science Lab Management System</h1>
  </header>


<div id="intro">

            
               <form action="signup.php" method="post">
                  <div class="form-outline mb-4">
                  <input type="text" id="username" class="form-control form-control-lg" />
                  <label class="form-label" for="username">Username</label>
                </div>
                <div class="form-outline mb-4">
                  <input type="email" id="Email" class="form-control form-control-lg" />
                  <label class="form-label" for="Email">Email</label>
                </div>
                <div class="form-outline mb-4">
                  <input type="password" id="Password" class="form-control form-control-lg" />
                  <label class="form-label" for="Password">Password</label>
                </div>
                <div class="form-outline mb-4">
                  <input type="password" id="Repeat_Password" class="form-control form-control-lg" />
                  <label class="form-label" for="Repeat_Password">Repeat Password</label>
                </div> 
               
                <!-- <div class="form-outline mb-4">
                  <input type="email" name="email" class="form-control form-control-lg" />
                  <label class="form-label" for="email"> Email</label>
                </div>
                 <div class="form-outline mb-4">
                  <input type="text" name="username" class="form-control form-control-lg" />
                  <label class="form-label" for="username">Username</label>
                </div>

                <div class="form-outline mb-4">
                  <input type="password" name="password"  class="form-control form-control-lg" />
                  <label class="form-label" for="password">Password</label>
                </div>

                <div class="form-outline mb-4">
                  <input type="password" id="form3Example4cdg" class="form-control form-control-lg" />
                  <label class="form-label" for="form3Example4cdg">Repeat Password</label>
                </div> -->

                <div class="form-check d-flex justify-content-center mb-5">
                  <input class="form-check-input me-2" type="checkbox" value="" id="form2Example3cg" />
                  <label class="form-check-label" for="form2Example3g">
                    I agree all statements in <a href="#!" class="text-body"><u>Terms of service</u></a>
                  </label>
                </div>
                <button type="submit" class="btn btn-primary btn-block">Sign Up</button>

                <!-- <div class="d-flex justify-content-center">
                  <button type="button"
                    class="btn btn-success btn-block btn-lg gradient-custom-4 text-body">Sign Up</button>
                </div> --> 

                 <p class="text-center text-muted mt-5 mb-0">Have already an account? <a href="login.php"
                    class="fw-bold text-body"><u>Sign In here</u></a></p>

              </form>
</div>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section> 


<div id="footer">
    <p>&copy; 2023 Science Lab Management System. All rights reserved.</p>
  </div>

</body>

</html>

