<html>
	<title>
    	Stand-1
    </title>
    <head>
		<link rel="stylesheet" type="text/css" href="../stylelogin.css">
	</head>
<body>
<ul>
  <li><a class="active"  href="../index.html".html">Home</a></li>
  <li><a href="#news">Notification</a></li>
  <li><a href="#contact">Contact</a></li>
  <li style="float:right"><a href="#about">About</a></li>
  <li style="float:right"><a href="#about">Log Out</a></li>
</ul>
    <?php
    $user_name = "root";
	$password = "";
	$database = "e-canteen";
	$host_name = "localhost";
 
	$connect_db=mysql_connect($host_name, $user_name, $password);
 
	$find_db=mysql_select_db($database);
 
	if ($find_db) {
 $query = "SELECT * FROM stand1";
 $hasil = mysql_query($query);
 
 while ( $kolom_db = mysql_fetch_assoc($hasil) ) {
 	
  echo $kolom_db['id'];
  echo $kolom_db['namaBarang'] ;
  echo $kolom_db['harga'] . "<br />";
 
 }
 
  mysql_close($connect_db);
 
}
    ?>
</body>
</html>