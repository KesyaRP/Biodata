<html>
<head>
<title> BERANDA </title>
<link rel="stylesheet" type="text/css" href="uts_web.css"></link>
</head>
<body>

<table border = "1" cellpadding = "20" width= "100%">
 <tr height="170">
 <td background= "awan2.gif"  style="color : #444444; font-size : 35; font-family : MV boli; background-color : #ffffff; text-align : center"; colspan ="3">
   </td>
 </tr>
 
 <table border="0" cellpadding="20" style="border-collapse: collapse;width: 
    100%;background: #444444;">
 <tr width = "100%">
 
 <td style="text-align: left">
 <div id="menu_atas">
 <center>
 <a href="homee.php" style="color:#fff;">Home</a>
<a href="aboutt.php" style="color:#fff;">About</a>
<a href="contactt.php" style="color:#fff;">Contact</a>


</center>
</div>
</td>



 </tr>
 
 </table>
 
 <table border = "1" cellpadding = "50%" width= "100%">
 <td style="background-color: #dca876" width="20%">

  <a href="isi_biodata.php">Isi Biodata</a><br><br>


  
  </div>
  </td>
  
<td style="background-color : #dca876; color : #ffffff" width="60%" padding-top="10px">

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  Nim: <input type="text" name="NIM">
  <br><br>
  Nama: <input type="text" name="Nama">
  <br><br>
  Umur: <input type="text" name="Umur">
  <br><br>
  Alamat: <textarea name="Alamat" rows="5" cols="40"></textarea>
  <br><br>
  Jenis Kelamin:
  <input type="radio" name="Jk" value="Pria">Pria
  <input type="radio" name="Jk" value="Wanita">Wanita
  <br><br>
  Status :
  <input type="Checkbox" name="status" value="Menikah">Menikah
  <input type="Checkbox" name="status" value="Tidak">Tidak  
  <br><br>
  Fakultas
  <select name="fakultas">
  <option>Pertanian</option>
  <option>Teknik</option>
  <option>MIPA</option>
  </select>
  
  <input type="submit" name="submit" value="Submit">  
</form>

<?php
if(isset($_POST["submit"])) { ?>
NIM			: <b><?php echo $_POST["NIM"]; ?></b><br>
Your Name	: <b><?php echo $_POST["Nama"]; ?></b><br>
Your Age	: <b><?php echo $_POST["Umur"]; ?></b><br>
Your Address: <b><?php echo $_POST["Alamat"]; ?></b><br>
Your Gender	: <b><?php echo $_POST["Jk"]; ?></b><br>
Your Status	: <b><?php echo $_POST["Status"]; ?></b><br>
Your Facultas	: <b><?php echo $_POST["fakultas"]; ?></b><br>


<?php } ?>

	</td>
	
	
<td style="background-color : #dca876" width ="20%"> 

<?php session_start(); 

if(isset($_POST['kirim'])){
	if(($_POST['user']=='admin')and($_POST['pass']=='admin')){
		$_SESSION["login"] = $_POST['user'];
		echo "Anda Berhasil Login. <a href='homee.php?logout'>Logout</a><br><br>";
	}
	else{
		echo"Username & Password Salah <br><br>
		<form action='' method='post'>
		Username: <input type='text' name='user'><br><br>
		Password: <input type='password' name='pass'><br><br>
		<input type='submit' name='kirim' value='Login'>
		</form>"; 
	}
}
else if(isset($_GET['logout'])){ 
	unset($_SESSION['login']);
}
else if($_SESSION['login']!=""){
	echo "Anda Berhasil Login. <a href='homee.php?logout'>Logout</a><br><br>";
}
else{ ?>
	<form action="" method="post">
	Username: <input type="text" name="user"><br><br>
	Password: <input type="password" name="pass"><br><br>
	<input type="submit" name='kirim' value='Login'>
	</form>
<?php } ?>


</td> 
	
  
  
 
</table>

</html>
</body>