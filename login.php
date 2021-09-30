<!DOCTYPE html>
<html>
  <head>
    <title>Login</title>
    <link rel="stylesheet" href="login.css" />
    <script src="validateuser.js"></script>
  </head>
  <body
    style="
      background: -webkit-gradient(#006a8a, #52ebff);
      background: -moz-linear-gradient(#006a8a, #52ebff);
      background: radial-gradient(#006a8a, #52ebff);"
  >
    <h2 style="text-align: center; font-size: 45px; color: #ffffff">Login</h2>
    <br />

    <div class="container">
      <form action="validate.php" method="POST">
        <div class="row">
          <div class="col-25">
            <label for="email">Email id</label>
          </div>
          <div class="col-75">
            <input
              type="email"
              id="email"
              name="email"
              placeholder="Enter your email"
            />
          </div>
        </div><br>
        <div class="row">
          <div class="col-25">
            <label for="password">Password</label>
          </div>
          <div class="col-75">
            <input
              type="password"
              id="password"
              name="password"
              placeholder="Password"
            />
          </div>
        </div>
        <br />
        <div class="row">
          <input type="submit" value="Login" id="login-btn">
          <p style="text-align: right;">Don't have an Account? <a href="Signup.php" ><b>Signup</b></a></p>
        </div>
      </form>
    </div>
  </body>
</html>
