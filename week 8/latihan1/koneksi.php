<html>
<head>
<title> Koneksi Database MySQL</title>
</head>
<body>
<h1>Demo koneksi database MySQL</h1>
<?php
$conn=mysqli_connect
("localhost", "root","");
if($conn){
echo "ok";
}else{
echo "server not connected";
}
?>
</body>
</html>

