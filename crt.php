<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="lab.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<style>
body {font-family: Arial, Helvetica, sans-serif;}

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
  <a href="crt.php"> Simulation</a>
  <a href="exer.html">Exercise</a>
  <a href="conclu.html">Conclusion</a>
  </div>
        <form method="Post">
            <p>Enter a1 and m1</p>
			<input type="number" name="a1" > MOD <input type="number" name="m1">
			<p>Enter a2 and m2</p>
			<input type="number" name="a2"> MOD <input type="number" name="m2">
			<p>Enter a3 and m3</p>
			<input type="number" name="a3"> MOD <input type="number" name="m3"><br/><br/>
			<input type="submit" name="submit"  value="submit"><br/><br/>
        </form>
        <?php
        if(isset($_POST['submit']))
        {
            $a1 = $_POST['a1'];
			$m1 = $_POST['m1'];
            $a2 = $_POST['a2'];
			$m2 = $_POST['m2'];
            $a3 = $_POST['a3'];
			$m3 = $_POST['m3'];
			echo $a1." MOD ".$m1."<br/>";
			echo $a2." MOD ".$m2."<br/>";
			echo $a3." MOD ".$m3."<br/>";
			for ($i = 1; $i <= $m1 && $i <= $m2; ++$i) {
               if ($m1 % $i == 0 && $m2 % $i == 0) {
                     $g1 = $i;
                }
            }
			for ($i = 1; $i <= $m2 && $i <= $m3; ++$i) {
               if ($m2 % $i == 0 && $m3 % $i == 0) {
                     $g2 = $i;
                }
            }
			if($g1==1 && $g2==1)
			{
			   $M = $m1*$m2*$m3;
			   echo "M = " .$M."<br/>";
			   $M1 = $M/$m1;
			   echo "M1 = " .$M1."<br/>";
			   $M2 = $M/$m2;
			   echo "M2 = " .$M2."<br/>";
			   $M3 = $M/$m3;
			   echo "M3 = " .$M3."<br/>";
			   //M1 inverse
			   $r1 = $m1;
               $r2 = $M1;
			   $t1 = 0;
			   $t2 = 1;
               while($r2>0)
              {
                $q = intdiv($r1, $r2);
                $r = fmod($r1,$r2);
                $r1 =$r2;
                $r2 = $r;
                $t = $t1-($q*$t2);
                $t1 = $t2;
                $t2 = $t;
              }
             if($r1==1)
			 { 
				if($t1<0)
				{
                 $t1 = $t1 + $m1;
				}	
                $I1 = $t1;				
			 }
			 else
			 {
				 $I1 = 0;
			 }
			  //echo "Inverse of M1: ".$I1."<br/>";
			  //M2 inverse
			   $r1 = $m2;
               $r2 = $M2;
			   $t1 = 0;
			   $t2 = 1;
               while($r2>0)
              {
                $q = intdiv($r1, $r2);
                $r = fmod($r1,$r2);
                $r1 =$r2;
                $r2 = $r;
                $t = $t1-($q*$t2);
                $t1 = $t2;
                $t2 = $t;
              }
             if($r1==1)
			 { 
				if($t1<0)
				{
                 $t1 = $t1 + $m2;
				}
				$I2 = $t1;
			 }
			 else
			 {
				 $I2 = 0;
			 }
			 // echo "Inverse of M2: ".$I2."<br/>";
			  //M3 inverse
			   $r1 = $m3;
               $r2 = $M3;
			   $t1 = 0;
			   $t2 = 1;
               while($r2>0)
              {
                $q = intdiv($r1, $r2);
                $r = fmod($r1,$r2);
                $r1 =$r2;
                $r2 = $r;
                $t = $t1-($q*$t2);
                $t1 = $t2;
                $t2 = $t;
              }
             if($r1==1)
			 { 
				if($t1<0)
				{
                 $t1 = $t1 + $m3;
				}
				$I3 = $t1;
			 }
			 else
			 {
				 $I3 = 0;
			 }
			 // echo "Inverse of M3: ".$I3."<br/>";
			  //checking
			  if($I1>0 && $I2>0 && $I3>0)
			  {
				echo "Inverse of M1: ".$I1."<br/>"; 
				echo "Inverse of M2: ".$I2."<br/>";
				echo "Inverse of M3: ".$I3."<br/>";
				$x1 = ($a1*$M1*$I1)+($a2*$M2*$I2)+($a3*$M3*$I3);
				$x = fmod($x1,$M);
				echo "X = ".$x."<br/>";
			  }
			  else
			  {
				  echo "Inverse of M1: ".$I1."<br/>"; 
				  echo "Inverse of M2: ".$I2."<br/>";
				  echo "Inverse of M3: ".$I3."<br/>";
				  echo "Inverse of M's dosent exist.Thus Crt dosent exist";
			  }
            }
			else
			{
				echo " m's are not coprime,thus crt dosent exist";
			}
		}
        ?>
    </body>
</html>