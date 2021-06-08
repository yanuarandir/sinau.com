<?php
session_start();
header('location:login.php');
//Include file koneksi ke database
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "userregistration";


//periksa koneksi, tampilkan pesan kesalahan jika gagal
try {
    // untuk koneksi ke database
    $conn = new PDO("mysql:host=$servername;dbname=$dbname",$username,$password);
    // jika ada error, akan menjadi exception dan akan ditangkap catch
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

}  
catch(PDOException $e){
    echo "koneksi gagal ".$e->getMessage();
}

//menerima nilai dari kiriman form input-barang 
$nama=$_POST["nama"];
$sekolah=$_POST["sekolah"];
$email=$_POST["email"];
$pass=$_POST["password"];

//Query input menginput data kedalam tabel barang
  $sql="INSERT into usertable (nama,sekolah,email,password) values
		('$nama','$sekolah','$email','$pass')";
        $stmt = $conn->prepare($sql);
        $stmt->execute();
    echo "Data berhasil di input";

?>