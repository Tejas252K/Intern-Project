<!DOCTYPE html>
<html>
  <head>
    <title>Sign Up</title>
    <link rel="stylesheet" href="signup.css" />
    <script src="validatepassword.js"></script>
  </head>
  <body
    style="
      background: -webkit-gradient(#006a8a, #52ebff);
      background: -moz-linear-gradient(#006a8a, #52ebff);
      background: radial-gradient(#006a8a, #52ebff);
    "
  >
    <h2 style="text-align: center; font-size: 45px; color: #ffffff">Sign Up</h2>
    <br />

    <div class="container">
      <form action="insert.php" method="POST" onSubmit="return checkPassword(this)">
        <div class="row">
          <div class="col-75">
            <input
              type="text"
              id="fname"
              name="firstname"
              placeholder="First name.."
              required
            />
          </div>
        </div>
        <div class="row">
          <div class="col-75">
            <input
              type="text"
              id="mname"
              name="middlename"
              placeholder="Middle name.."
            />
          </div>
        </div>
        <div class="row">
          <div class="col-75">
            <input
              type="text"
              id="lname"
              name="lastname"
              placeholder="Last name.."
            />
          </div>
        </div>
        <div class="row">
          <div class="col-75">
            <input
              type="email"
              id="email"
              name="email"
              placeholder="Email id.."
              required
            />
          </div>
        </div>
        <div class="row">
          <div class="col-75">
            <input
              type="password"
              id="password"
              name="password"
              placeholder="New Password.."
              required
            />
          </div>
        </div>
        <div class="row">
          <div class="col-75">
            <input
              type="password"
              id="cpassword"
              name="cpassword"
              placeholder="Confirm Password.."
              required
            />
          </div>
        </div>
        <br />
        <div class="row">
          <input type="submit" value="Signup" name="submit-btn">
          <p style="text-align: right;">Already have an Account? <a href="login.php" ><b>Login</b></a></p>
        </div>
      </form>
    </div>
  </body>
</html>
