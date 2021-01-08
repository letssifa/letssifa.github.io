<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Pegawai</title>
    <link rel="stylesheet" href="stylesheet2.css">
    <link rel="stylesheet" href="responsive.css">
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
  </head>
  <body>
    
    <header>
      <div class="container">
        <div class="header-left">
          <img class="logo" src="Logo2.png">
        </div>
        <!-- Tambahkan ikon menu disini -->
        
        <div class="header-right">
          <a href="https://pa-painan.go.id/">Home</a>
          <a href="#">Daftar</a>
          <a href="logout.php">Log Out</a>
        </div>
      </div>
    </header>
    
     <div class="top-wrapper">
      <div class="container">
      <?php 
	session_start();
 
	// cek apakah yang mengakses halaman ini sudah login
	if($_SESSION['level']==""){
		header("location:halaman_pegawai.php?pesan=gagal");
	}
 
	?>
  
	<h1>Halaman Pegawai</h1>
 
	<p>Halo <b><?php echo $_SESSION['username']; ?></b> Anda telah login sebagai <b><?php echo $_SESSION['level']; ?></b>.</p>

 
	<br/>
	<br/>
        <div class="btn-wrapper">
          <a href="#" class="btn signup">Daftar dengan Email</a>
          <p>atau</p>
          <a href="#" class="btn facebook"><span class="fa fa-facebook"></span>Daftar dengan Facebook</a>
          <a href="#" class="btn twitter"><span class="fa fa-twitter"></span>Daftar dengan Twitter</a>
        </div>
      </div>
    </div>
    
    <div class="lesson-wrapper">
      <div class="container">
        <div class="heading">
          <h2>Jadwal Sidang Pengadilan Agama Painan</h2>
    <?php
        function resourceWeb($url){
        $data = curl_init();
        curl_setopt($data, CURLOPT_URL, $url);
        curl_setopt($data, CURLOPT_RETURNTRANSFER, 1);
        $hasil = curl_exec($data);
        curl_close($data);
        return $hasil;
        }
        $sumber =  resourceWeb('http://sipp.pa-negara.go.id/list_jadwal_sidang/search/2/01/09/2020');
        $split = explode('<div id="pageTitle">', $sumber);
        $splitLagi = explode('</div>', $split[1]);

        $split2 = explode('<div class="cssTable">', $sumber);
        $splitLagi2 = explode('</div>', $split2[1]);

        echo $splitLagi[0];
        echo $splitLagi[1];
        echo $splitLagi2[0];
    ?>
   
    <div class="message-wrapper">
      <div class="container">
        <div class="heading">
        <iframe width="743" height="418" src="https://www.youtube.com/embed/gIB2egm7tL8" frameborder="0" allow="accelerometer; 
    autoplay; 
    clipboard-write; 
    encrypted-media; 
    gyroscope; 
    picture-in-picture" allowfullscreen>
</iframe>
    </div>
    
    <footer>
      <div class="container">
        <img src="Logo2.png">
        <p>Copyright Pengadilan Agama</p>
        <p>All trademarks, service marks, trade names, product names, logos and trade dress appearing on our website are the property of their respective owners. Sifa.</p>
      </div>
    </footer>
    
    
  </body>
</html>
