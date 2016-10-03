<!-- 
// BayChat ..
// Versi : 2.1
// Created : 29 Jul 2016
// Updated : 27 Sep 2016
-->
<!DOCTYPE html>
<html>
   <head> 
   <title>BayChat</title>
   <link rel="shortcut icon" href="http://chat.bayyu.me/image/BChat.png">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
        <meta charset="utf-8">
        <meta name="keywords" content="BayChat, Chat Aplikasi, Chatting">
        <meta name="description" content="Aplikasi Chat sederhana.">
        <meta name="author" content="Mochammad Bayu Nugraha" />
        <meta name="geo.placement" content='Indonesia' />
        <meta name="audience" content='all' />
        <meta name='rating' content='general' />
        <meta name="viewport" content="initial-scale=1">
    <meta property="og:image" content="http://www.bayyu.me/favicon.ico" />
     <!-- CSS -->
     <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
     <link href="css/main.css" rel="stylesheet"/>
   </head>
   <body>
     <!-- HTML -->
     <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container-fluid">
        <div class="navbar-header">
              <a class="navbar-brand" href="#logout" title="Log-out" onClick="javascript: loadd();">BayChat</a>
                  <span id="welc" class="navbar-text pull-right" style="color:#415763;margin-right:10px;"><strong>Hi, <i>Guest.</i></strong> <img src="https://uxcam.com/images/join-uxcam.png" class="img-circle" height="22px"></span>
        </div>

        
      </div><!-- /.container-fluid -->  
</nav>
<div id="loadmain">
  <div style="margin:10% auto;">
  <img src="http://chat.bayyu.me/image/BChat.png" height="70px">
  <h3>Siapa Nama Anda?</h3><br>
    <input type="text" minlength="4" required="" class="user-text" id="ses_user" maxlength="12"><br><br>
    <button type="button" id="masuk" class="btn-primary">Mulai Chat</i>
  </div>
</div>
<div id="wrapper" class="konten">
  <div class="container">
    <div class="row">
      <div id="pesan_nya">
          <div id="typ"></div>
      </div>
    </div> <!-- / Konten ISI -->
  </div>
</div>
<div class="kirim_pesan" id="msg_form">
<input type="text" placeholder="Masukan pesan..." maxlength="850" id="message" class="text-pesan">
<input type="hidden" id="user" value="<?php echo $_SERVER['REMOTE_ADDR']; ?>" />
<input type="hidden" id="alamat" value="<?php echo $_SERVER['REMOTE_ADDR']; ?>" />
 
</div>
     <!-- jQuery -->
     <script src="//code.jquery.com/jquery-2.1.3.min.js"></script>
     <!-- Lib -->
     <script src="https://cdn.firebase.com/js/client/2.2.3/firebase.js"></script>
     <script src="js/BChat v2.js"></script>
     <script>
      $(document).ready(function(){
        $(window).scroll(function(){
            var posNya= 630;
            if ($(window).scrollTop() > posNya){
                $('.navbar.navbar-default').css('background','rgba(255, 255, 255, 0.69)');
            }
            else if ($(window).scrollTop() < posNya){
                $('.navbar.navbar-default').css('background','rgba(255, 255, 255, 0.92)');
            }
        });
      });
     </script>
   </body>
</html>

