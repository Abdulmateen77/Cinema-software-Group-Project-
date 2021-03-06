<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
* {box-sizing: border-box;}

body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

.topnav {
  overflow: hidden;
  background-color:  	#80C4FF;
  border: 2px solid #000;
}

.topnav a {
  float: left;
  display: block;
  color: black;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}

.topnav a.active {
  background-color: #2196F3;
  color: white;
}

.topnav .search-container {
  float: right;
}

.topnav input[type=text] {
  padding: 6px;
  margin-top: 8px;
  font-size: 17px;
  border: none;
}

.topnav .search-container button {
  float: right;
  padding: 6px 10px;
  margin-top: 8px;
  margin-right: 16px;
  background: #ddd;
  font-size: 17px;
  border: none;
  cursor: pointer;
}

.topnav .search-container button:hover {
  background: #ccc;
}

@media screen and (max-width: 600px) {
  .topnav .search-container {
    float: none;
  }
  .topnav a, .topnav input[type=text], .topnav .search-container button {
    float: none;
    display: block;
    text-align: left;
    width: 100%;
    margin: 0;
    padding: 14px;
  }
  .topnav input[type=text] {
    border: 1px solid #ccc;  
  }
}
</style>
</head>
<body>

<div class="topnav">
<a href='<?php echo site_url('')?>'><strong>MICE</strong></a>
	<a href='<?php echo site_url('main/cinema')?>'><strong>Cinema</strong></a> 
	<a href='<?php echo site_url('main/screen')?>'><strong>Screen</strong></a>
	<a href='<?php echo site_url('main/film')?>'><strong>Films</strong></a> 
    <a href='<?php echo site_url('main/performance')?>'><strong>Performance</strong></a> 
	<a href='<?php echo site_url('main/booking')?>'><strong>Booking</strong></a>
	 <a href='<?php echo site_url('main/member')?>'><strong>Members</strong></a>
  <div class="search-container">
    <form action="/action_page.php">
		<a href='<?php echo site_url('main/managebookings')?>'><strong>Cancellations</strong></a> 
		<a href='<?php echo site_url('main/login')?>'><strong>Login</strong></a>
		<a href='<?php echo site_url('main/faq')?>'><strong>FAQ</strong></a>
      <!--(<input type="text" placeholder="Search.." name="search">)"
      <button type="submit"><i class="fa fa-search"></i></button>  
		search bar looked silly so commented out -->
    </form>
  </div>
</div>

<div style="padding-left:16px">
  
</div>

</body>
</html>
