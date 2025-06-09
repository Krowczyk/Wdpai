
<!DOCTYPE html>
<html lang="pl">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Otoloto - Rejestracja</title>
  <link rel="stylesheet" type="text/css" href="public/styles/style.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css"/>
</head>

<body>
  <div class="container">
    <div class="left-panel">
      <div class="logo">
        <img src="public/JPG/logo.svg" alt="Logo">
      </div>
      <div class="logo-text">OTOLOTO</div>
    </div>

    <div class="right-panel">
      <h2>REJESTRACJA</h2>

      <form action="register" method="POST">
        <div class="messeges">
          <?php if (isset($messages)) {
            foreach ($messages as $message) {
              echo "<p>$message</p>";
            }
          } ?>
        </div>

        <div class="input-group">
          <i class="fas fa-envelope"></i>
          <input name="email" type="email" placeholder="E-MAIL" required />
        </div>

        <div class="input-group">
          <i class="fas fa-lock"></i>
          <input name="password" type="password" placeholder="HASŁO" required />
        </div>

        <div class="input-group">
          <i class="fas fa-lock"></i>
          <input name="confirm_password" type="password" placeholder="POTWIERDŹ HASŁO" required />
        </div>

        <div class="buttons">
          <button type="submit" class="btn" style="margin-bottom: 10px;">Zarejestruj</button>
        </div>
      </form>

      <!-- Przycisk powrotu do logowania -->
      <form action="login" method="GET">
        <div class="buttons">
          <button type="submit" class="btn">Powrót do logowania</button>
        </div>
      </form>

    </div>
  </div>
</body>
</html>
