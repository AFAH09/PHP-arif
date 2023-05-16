 <!DOCTYPE HTML>  
<html>
<head>
   <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar PHP</title>
</head>
<body>  

<?php
$nameErr = $kelasErr = "";
$name = $kelas = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } else {
    $name = test_input($_POST["name"]);{
      $nameErr = "Hanya huruf dan spasi putih yang diperbolehkan"; 
    }
  }
}
  if (empty($_POST["kelas"])) {
    $kelas = "";
  } else {
    $kelas = test_input($_POST["kelas"]);
      $kelasErr = "URL tidak valid"; 
  }
  


function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<h2>Contoh Validasi Formulir PHP</h2>
<p><span class="error">* kolom yang harus diisi.</span></p>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  Name: <input type="text" name="name" value="<?php echo $name;?>">
  <span class="error">* <?php echo $nameErr;?></span>
  <br><br>
  Kelas: <input type="text" name="kelas" value="<?php echo $kelas;?>">
  <span class="error">* <?php echo $kelasErr;?></span>
  <input type="submit" name="submit" value="Submit">  
</form>

<?php
echo "<h2>Masukan anda :</h2>";
echo $name;
echo "<br>";
echo $kelas;
?>

</body>
</html>