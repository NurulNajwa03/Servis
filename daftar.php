<?php 
//sambungan ke pangkalan data
include "config.php";
//sambung fail header
include "header.php";
//mulakan sesi login untuk kekalkan login
if (isset($_POST['email'])){
  //pembolehubah untuk memegang data yang dihantar
  $email = $_POST['email'];
  $nam = $_POST['nama'];
 
  //tambah rekod baru dalam table
  $sql = "INSERT INTO daftar (email,nama) VALUES ('$email','$nam')";
  //melaksanakan pertanyaan sql dengan sambungan ke p.data
  $hasil = mysqli_query($samb, $sql);
  //semak untuk melihat jika ada sebarang rekod dalam pangkalan data
  //papar mesej berjaya atau gagal simpan rekod baharu
  if ($hasil){
      echo "<script>alert('PENDAFTARAN BERJAYA');
      window.Location='index.php'</script> ";
  } else{
      echo "<script>alert('PENDAFTARAN GAGAL');
      window.Location='login.php'</script> ";
  }
}
?>
<html>

  <head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.2/assets/css/docs.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="style.css">
    <title>Servis laptop</title>
  </head>

  <body>
      <h2> Create An Account</h2>
        <fieldset>
            <!-- papar borang pendaftaran -->
            <form style="margin: 30px; " method="POST">
                <label> Email</label><br>
                <input style="border-radius:30px; text-align:center;" type="text" name="email" placeholder="@gmail.com"  size="50" required><br><br>

                <label>Nama Anda</label><br>
                <input style="border-radius:30px; text-align:center;" type="text" name="nama" id="nama" placeholder="Nama Anda" size="50" required> <br><br>

                <!-- butang daftar & reset -->
                <button style="border-radius:10px; text-align:center; padding:10px;" type="submit">register</button>
                <button style="border-radius:10px; text-align:center; padding:10px;" type="reset">Reset</button><br><br>
                *pilihan hanya dibenarkan sekali sahaja.
            </form>
        </fieldset>
  </body>
</html>