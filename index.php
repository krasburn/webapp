<html>
<title>Flipp SRE Assignment</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<body class="w3-content" style="max-width:1300px">

<!-- First Grid: Logo & About -->
<div class="w3-row">
  <div class="w3-half w3-black w3-container w3-center" style="height:700px">
    <div class="w3-padding-64">
      <img src="flipp_logo-white.png" width="150" height="150"></img>
    </div>
    <div class="w3-padding-64">
      <?php
        $public_ip = file_get_contents("http://ipecho.net/plain");
        echo "<h2>My public ip is: </h2>" . $public_ip;
      ?>
    </div>
  </div>
  <div class="w3-half w3-white w3-container" style="height:700px">
    <div class="w3-padding-64 w3-center">
      <h1>Technologies</h1>
      <img src="aws-terraform.png" width="284" height="177"></img>
      <div class="w3-left-align w3-padding-large">
        <p>Application Load Balancer</p>
        <p>Autscaling Group using Simple Scaling policy</p>
        <p>Two Subnets and Security Groups allowing only HTTP and HTTPS</p>
      </div>
    </div>
  </div>
</div>

</body>
</html>
