<!Doctype html>
<html>
<head>
<link rel="stylesheet" href="lab.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body {font-family: Arial, Helvetica, sans-serif;}
	p{
		text-indent: 300px;
	}
.navbar {
  width: 100%;
  background-color: rgb(93, 84, 84);
  overflow: auto;
}

.navbar a {
  float: left;
  padding: 12px;
  color: white;
  text-decoration: none;
  font-size: 17px;
}

.navbar a:hover {
  background-color: #000;
}

.active {
  background-color: #eeac90;
}

@media screen and (max-width: 500px) {
  .navbar a {
    float: none;
    display: block;
  }
}
</style>
</head>
<body>
<div class="navbar">
  <a class="active" href="home.html"><i class="fa fa-fw fa-home"></i> Home</a>
  <a href="aim.html">Aim</a>  
  <a href="lab.php">Algorithm</a>
  <a href="crt.php">Simulation</a>
  <a href="exer.html">Exercise</a>
  <a href="conclu.html">Conclusion</a>
</div>
<center>

		 <h1>ALGORITHM<h1><br />
		 
</center>
<p>1] Start.</p>
<p>2] Input the equation with a1,m1;a2,m2 and a3,m3.</p>
<p>3] Check if all the moduli are relatively prime number using euclidean theorem.</p>
<p>4] If they are prime:</p>
   <p>i) Compute M=m1*m2*m3</p>
   <p>ii) M1=M/m1 ; M2=M/m2 ; M3=M/m3</p>
   <p>iii) Find multiplicative inverse of M1,M2,M3 using corresponding moduli(m1,m2,m3) using extended euclid algorithm.</p>
   <p>iv) The solution is :</p>
   <p>x= (a1*M1*M1^-1 + a2*M2*M2^-1 + a3*M3*M3^-1)mod M</p>
<p>5] Else if the module are not relatively prime x cannot e computed.</p>
<p>6] Stop.</p>
		<center><b> Let us try to understand the theorem with the help of simulation.</b></p></center>
		<center>
<?php 
 echo '<form method="POST" action="crt.php">
    <input type="submit"  value="Simulation"/>
  </form>';
?>
     </center>
</body>
</html