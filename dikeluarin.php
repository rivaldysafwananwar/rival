Skip to content
Search or jump to…

Pull requests
Issues
Marketplace
Explore
 
@rivaldysafwananwar 
Learn Git and GitHub without any code!
Using the Hello World guide, you’ll start a branch, write comments, and open a pull request.

  

<?php
$nampes=$_POST['nama_siswa'];
$usia=$_POST['usia'];
$Materi=$_POST['Materi'];
$TypeKursus=$_POST['typekursus'];
$pembayaran=$_POST['pembayaran'];



if ($materi == "Fullstack Developer"){
    $harga = 25000000;
    $class = "Fullstack";
}else if( $materi == "Devops"){
    $harga = 30000000;
    $class = "Devops";
}else{
    $harga = 15000000;
    $class = "Sysadmin";
}

if($usia <= 20){
    $diskon = $harga*20/100;
    // $diskon=(($harga*30)/100);
}else{
    $diskon = 10/100;
}

if($pembayaran == 5){
    $harbag=100000;
}elseif($pembayaran == 10){
    $harbag=150000;
}else{
    $harbag=200000;

}
    
$hartot = $harga*$jumtik-$diskon+$harbag;

?>


<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LIHAT DATA</title>

     <!-- CSS BOOSTRAP -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <!-- FONT -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito&display=swap" rel="stylesheet">

    <!-- MY CSS -->
    <link rel="stylesheet" href="style.css">

</head>
<body>
    <div class="container">
    <h1 class="mt-4">***Data Pendaftaran Khursus***</h1>
    <table class="table table-dark table-sm">
        <tr>
            <th>Nama Siswa</th><th>:</th><th><?= $nampes;?></th>
        </tr>
        <tr>
            <td>Usia</td><td>:</td><td><?= $usia;?></td>
        </tr>
        <tr>
            <td>Materi</td><td>:</td><td><?= $Materi;?></td>
        </tr>
        <tr>
            <td>Type Kursus</td><td>:</td><td><?= $TypeKursus;?></td>
        </tr>
        <tr>
            <td>Pembayaran</td><td>:</td><td><?= $pembayaran;?></td>
        </tr>
        <tr>
            <td>Total Harga</td><td>:</td><td><?= $hartot;?></td>
        </tr>
    </table>
    <a href="pemesanan.php" class="btn btn-success" type="reset">Kembali</a>
    </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
</body>
</html>
