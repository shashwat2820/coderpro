<! doctype html>
<html>
<head>
<title style="background-color:green">Krishi सहायता Kendra</title>

<style>
  #i1
  {
    float:right;
    background-color:tomato;
  }
  #i2
  {
    background-color:rgb(11, 94, 109);
    color:white;
  }

.dropbtn {
  background-color: #4CAF50;
  color: white;
  padding: 16px;
  font-size: 16px;
  border: none;
  margin:0px;
}

.dropdown {
  position:relative;
  display: inline;
  float:left;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f1f1f1;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;

  }
  
}

ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
}

li
{
  display:inline;
}

.extra{float: right;font-size: x-large;}

.dropdown-content a:hover {background-color: #ddd;}

.dropdown:hover .dropdown-content {display: block;}

.dropdown:hover .dropbtn {background-color: #3e8e41;}

.plugs
{
  text-align:center;
  background-color: lavender ;
}

.entire
{
  background-color: lavender;
}

#imgmap
{
  height: 100%;
  width: 100%;
}

</style>

</head>


<body>
<div class="entire">
  <div class="plugs">
<h1> Krishi सहायता Kendra</h1>
<h3>(Help portal)</h3>
</div>
<ul >
  <li id="nav1">
<div class="dropdown">
<button class="dropbtn">Register</button>
  <div class="dropdown-content">
    <a href="krishi.php">Sign-up</a>
    <a href="#">Location</a>
  </div>
</div>
</li>
  <li id="nav1">
<div class="dropdown">
<button class="dropbtn">Bulletin-board</button>
  <div class="dropdown-content">
    <a href="#">New</a>
    <a href="#">News</a>
<a href="#">Alert</a>
  </div>
</div>
</li>
  <li id="nav1">
<div class="dropdown">
<button class="dropbtn">Gov. aids</button>
  <div class="dropdown-content">
    <a href="#">Budget</a>
    <a href="#">State</a>
<a href="#">Import</a>
  </div>
</div>
</li>
  <li id="nav1">
<div class="dropdown">
<button class="dropbtn">Personal</button>
  <div class="dropdown-content">
    <a href="#">Tools</a>
    <a href="#">Buyers</a>
<a href="#">Output</a>
  </div>
</div>
</li>
  <li id="nav1">
<div class="dropdown">
<button class="dropbtn">Loan/Trade</button>
  <div class="dropdown-content">
    <a href="">Loan</a>
    <a href="trade.php">Trade</a>
  </div>
</div>
</li>

<li class="extra">
  <div class="dropdown">
    <button class="dropbtn">Language</button>
      <div class="dropdown-content">
        <a href="">English</a>
        <a href="#">Hindi</a>
      </div>
      </div>
</li>
<li class="extra">
  <div class="dropdown">
    <button class="dropbtn">A - -</button>
    </div>
</li>
<li class="extra">
  <div class="dropdown">
    <button class="dropbtn">A + +</button>
    </div>
</li>

<li class="extra">
  <div class="dropdown">
   <button class="dropbtn" onclick="document.location='login.php'">Log-in</button>
    </div>
</li>
</ul>


<br>
<br>

<div id="imgmap" >

<img src="KRISHI.jpg" alt="server issues" usemap="#farmmap" height="100%" width="100%">
<map name="farmmap">
<area shape="circle" coords="750,362,173" alt="crops info" href="crops.php">
<area shape="circle" coords="400,363,123" alt="latest tech news" href="tech.php">
<area shape="circle" coords="138,367,82" alt="weather news" href="coffee.jpg">
<area shape="circle" coords="1103,366,123" alt="farming tips" href="coffee.jpg">
<area shape="circle" coords="1366,367,85" alt="soil health" href="coffee.jpg">
</map>

</div>
<hr>
<br>

<ul>
  <li>
    <div id="i1">
      <iframe src="alert.txt" alt="" name="iframe_a" height="10%" width="100%" title="IframeA"></iframe>
    </div>
  </li>
  
</ul>
<hr>

</div>
</body>

</html>