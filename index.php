<html>
  <head>
    <title>TYT Hesaplama</title>
      <style>
      body {
        font-family: Arial, sans-serif;
        text-align: center;
        background-color: lightgray;
      }
      h1 {
        font-size: 36px;
        margin-bottom: 50px;
        color: darkblue;
      }
      .logo {
        background-image: url(https://sinavdostu.com/uploads/logo/logo_63eab6a8b3ab15-91501029-74645268.png);
        background-repeat: no-repeat;
        background-position: center;
        width: 100%;
        height: 200px;
      }
      form {
        width: 500px;
        margin: 0 auto;
        text-align: left;
        padding: 20px;
        border: 1px solid gray;
        border-radius: 10px;
        background-color: white;
        box-shadow: 10px 10px 10px gray;
      }
      input[type="text"] {
        width: 100%;
        padding: 10px;
        font-size: 18px;
        margin-bottom: 20px;
        border-radius: 5px;
        border: 1px solid gray;
      }
      input[type="submit"] {
        width: 100%;
        padding: 15px;
        font-size: 18px;
        background-color: lightblue;
        border-radius: 5px;
        border: none;
        cursor: pointer;
        color: white;
      }
      p {
        font-size: 24px;
        margin-top: 50px;
      }
      header {
  background-color: lightblue;
  display: flex;
  justify-content: center;
  padding: 20px 0;
}
nav ul {
  display: flex;
  justify-content: center;
  list-style-type: none;
  margin: 0;
  padding: 0;
}
nav a {
  display: block;
  padding: 30px;
  font-size: 24px;
  color: red;
  text-decoration: none;
}
    </style>
    
    <nav>
    <ul>
      <li><a href="https://sinavdostu.com">Anasayfa</a></li>
      <li><a href="#">AYT Hesapla</a></li>
    </ul>
  </nav>
  
  
  </head>
  <body>
    <h1>TYT Hesaplama</h1>
    <div class="logo"></div>
    <form action="" method="post">
      <p>Türkçe net sayısı: <input type="text" name="turkce_net"></p>
      <p>Sosyal Bilimler net sayısı: <input type="text" name="sosyal_net"></p>
      <p>Matematik net sayısı: <input type="text" name="matematik_net"></p>
      <p>Fen Bilimleri net sayısı: <input type="text" name="fen_net"></p>
      <p>Diploma Puanınız: <input type="text" name="mezun_net"></p>
      <input type="submit" value="Hesapla">
    </form>
    <?php
      if ($_POST) {
        $turkce_net = $_POST['turkce_net'];
        $sosyal_net = $_POST['sosyal_net'];
        $matematik_net = $_POST['matematik_net'];
        $fen_net = $_POST['fen_net'];
        $mezun_net = $_POST['mezun_net'];
        
        $turkce_puani = $turkce_net * 2.92;
        $sosyal_puani = $sosyal_net * 2.98;
        $matematik_puani = $matematik_net * 4.53;
        $fen_puani = $fen_net * 3.18;
        $mezun_puani = $mezun_net * 5 * 0.12;
        
        $tyt_ham_puani = $turkce_puani + 120 + $sosyal_puani + $matematik_puani + $fen_puani;
        
        $tyt_yerlestirme_puani = $turkce_puani + 120 + $sosyal_puani + $matematik_puani +$mezun_puani + $fen_puani;
        
        echo "<p>TYT Ham Puanınız: " . $tyt_ham_puani . "</p>";
        echo "<p>TYT Yerleştirme Puanınız: " . $tyt_yerlestirme_puani . "</p>";
      }
    ?>
  </body>
</html>
