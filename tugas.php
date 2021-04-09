<?php
    // untuk output data diri
    $nama = "Sultan Pengkuh Al-Fatah";
    $kelas = "12.1A.39";
    $nim = "12200487";

    // proses php
  	$s = null;
    $proses = $s * $s * $s ;
    if ( isset($_POST['s']) == null ) {
      $s = "sisi" ;
      $proses = (string)"volume" ;
    }
    else {
      $s = (int)$_POST['s'];
      $proses = $s * $s * $s ;
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tugas 04 - Web Programing </title>
  <style>
    body {
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      width: 800px;
      margin: auto;
    }

    .rumus {
      background-color: #292929;
      color: turquoise;
      width: 200px;
      padding: 20px;
      border-left: 10px solid palevioletred;
    }
    
    .rumus span {
      color: white;
    }
    label{
      font-size:.8em ;
      opacity: .7;
    }
    input {
      width: 300px;
      height: 30px;
      font-size: 1.3em;
      padding: 10px;
      color: #eee;
      background-color: #292929;
      border: none;
      border-bottom:4px solid turquoise ;
    }
    button {
      background-color: palevioletred;
      padding: 10px;
      border: none;
      color: #eee;
    }
  
  </style>
</head>
<body>

  <!-- Konten -->
  <h2><?= "Belajar menghitung volume <br>"; ?></h2>
  <p> Cara menghitung volume kubus yaitu : </p>
  <p class="rumus"> volume <span>=</span> sisi <span>*</span> sisi <span>*</span> sisi</p>

  <?php 
  // untuk menghitung volume kubus
  $sisi = 15;
  $volume = $sisi * $sisi * $sisi ;

  // output
  echo "Panjang Sisi Kubus : $sisi<br>";
  echo "volume Kubus : $volume cm3";

  ?>

  <br>
  <p>Atau mau mencoba menghitung ? </p>

  <!-- Form Input -->
  <form action="" method="post">
    <label for="s"><i>Masukan sisi</i></label>
    <br>
    <input type="text" name="s" id="s">
    <button type="submit" > Hitung</button>
  </form>

  <!-- proses dan output -->
  <div class="output">

    <p>Volume kubus dari <span> <?= $s ; ?>  </span>  adalah</p>
    <p class="rumus"> volume <span>=</span> <?= $s ; ?>  <span>*</span> <?= $s ; ?>  <span>*</span> <?= $s ; ?> 
    <br>
    volume <span> = </span>
    <?php     
    echo $proses;
    ?>
    <span>cm3</span>
    </p>
  </div>
  
  <!-- Bio Data -->
 
  <table border="0">
    <h3>Author by</h3>
    <tr>
      <td>Nama</td>
      <td>:</td>
      <td><?= $nama; ?></td>
    </tr>
    <tr>
      <td>NIM</td>
      <td>:</td>
      <td><?= $nim; ?></td>
    </tr>
    <tr>
      <td>Kelas</td>
      <td>:</td>
      <td><?= $kelas; ?></td>
    </tr>
  </table>
  
</body>
</html>