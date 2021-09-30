<html>
    <head>
        <style>
            * {
              box-sizing: border-box;
            }
            
            .column {
             float: left;
  width: 33%;
 
  height: 300px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}
            h4{
            text-align: center;
            font-size: 30px;
            }
            body {
  background-image: url('back.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed; 
  background-size: 100% 100%;
                 }
 
    
    /* Header/logo Title */
    .header {
      padding: 80px;
      text-align: center;
     
      color:black;
    }
    
    /* Increase the font size of the heading */
    .header h1 {
      font-size: 40px;
    }
    
    /* Sticky navbar - toggles between relative and fixed, depending on the scroll position. It is positioned relative until a given offset position is met in the viewport - then it "sticks" in place (like position:fixed). The sticky value is not supported in IE or Edge 15 and earlier versions. However, for these versions the navbar will inherit default position */
    .navbar {
      overflow: hidden;
      background-color: #333;
      position: sticky;
      position: -webkit-sticky;
      top: 0;
    }
    
    /* Style the navigation bar links */
    .navbar a {
      float: left;
      display: block;
      color: white;
      text-align: center;
      padding: 14px 20px;
      text-decoration: none;
    }
    
    
    /* Right-aligned link */
    .navbar a.right {
      float: right;
    }
    
    /* Change color on hover */
    .navbar a:hover {
      background-color: #ddd;
      color: black;
    }
    
    /* Active/current link */
    .navbar a.active {
      background-color: #666;
      color: white;
    }
    
    /* Column container */
    .row {  
      display: -ms-flexbox; /* IE10 */
      display: flex;
      -ms-flex-wrap: wrap; /* IE10 */
      flex-wrap: wrap;
    }
    
    /* Create two unequal columns that sits next to each other */
    /* Sidebar/left column */
    .side {
      -ms-flex: 30%; /* IE10 */
      flex: 30%;
      
      padding: 20px;
    }
    
    /* Main column */
    .main {   
      -ms-flex: 70%; /* IE10 */
      flex: 70%;
      
      padding: 20px;
    }
    
    /* Fake image, just for this example */
    .fakeimg {
      width: 100%;
      padding: 20px;
    }
    
    /* Footer */
    .footer {
      padding: 20px;
      text-align: center;
    
    }
    
    /* Responsive layout - when the screen is less than 700px wide, make the two columns stack on top of each other instead of next to each other */
    @media screen and (max-width: 100px) {
      .row {   
        flex-direction: column;
      }
    }
    
    /* Responsive layout - when the screen is less than 400px wide, make the navigation links stack on top of each other instead of next to each other */
    @media screen and (max-width: 100px) {
      .navbar a {
        float: none;
        width: 100%;
      }
    }
    </style>
    </head>
    <body>
    
    <div class="header">
      <h1>My Resume</h1>
      <p>A <b>responsive</b> website created by me.</p>
    </div>
    
    <div class="navbar">
      <a href="#" class="active">Home</a>
      <a href="resume.php">Create your Resume here</a>
      <a href="Signup.php" class="right">Signup/Login</a>
    </div>
    
    <div class="row">
      <div class="side">
        <h2>About Us</h2>
        <p>click on the photo to know more about us</p>
        <div class="row">
  <div class="column">
    <a href="dheeraj.html"> <img src="Dheeraj pic.jpeg" alt="Snow" style="width:400px; height: 500px;" ></a>
    <h4>Dheeraj Kumar R</h4>
  </div>
  <div class="column">
    <a href="tejas.html"><img src="avatar.jpg" alt="Forest" style="width:400px; height: 500px;"></a>
    <h4>Tejas M</h4>
  </div>
  <div class="column">
    <a href="Milan.html"><img src="milan.jpeg" alt="Mountains" style="width:400px; height: 500px;"></a>
     <h4>Milan N P</h4>
</div>

</div>
        
    </div>
    </body>
</html>