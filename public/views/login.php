<!DOCTYPE html>
<html lang="pl">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Otoloto - Panel logowania</title>
  <link rel="stylesheet" type="text/css" href="public/styles/style.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css"/>
</head>
<body>
  <div class="container">
    <div class="left-panel">
        <div class="logo">
            <img src="public/JPG/logo.svg">
        </div>
      <div class="logo-text">OTOLOTO</div>
    </div>
    <div class="right-panel">
      <h2>PANEL LOGOWANIA</h2>
      <form  action="login" method="POST">
          <div class="messeges">
              <?php if(isset($messages)){
                  foreach($messages as $message){
                      echo $message;
                  }
                  } ?>
          </div>
        <div class="input-group">
          <i class="fas fa-house"></i>
          <input name="email" type="text" placeholder="LOGIN" />
        </div>
        <div class="input-group">
          <i class="fas fa-lock"></i>
          <input name="password" type="password" placeholder="PASSWORD" />
        </div>
        <div class="buttons">
          <button type="submit" class="btn">Login</button>
        </div>
      </form>
    </div>
  </div>
</body>
</html>
