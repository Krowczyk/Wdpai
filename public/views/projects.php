
<!DOCTYPE html>
<html lang="pl">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Otoloto - Strona Glowna</title>
  <link rel="stylesheet" type="text/css" href="public/styles/mainboard.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css"/>
  <script src="https://kit.fontawesome.com/45b458fc94.js" crossorigin="anonymous"></script>
</head>
<body>
  <img src="public/JPG/logo.svg" alt="Logo OTOLOTO" class="logo" />
  <h1>OTOLOTO</h1>

  <form class="form-container" action="search" method="post">
    <select name="marka"><option disabled selected>MARKA</option></select>
    <select name="model"><option disabled selected>MODEL</option></select>
    <select name="rocznik"><option disabled selected>ROCZNIK</option></select>
    <select name="zastosowanie"><option disabled selected>ZASTOSOWANIE</option></select>
    <select name="cena_od"><option disabled selected>CENA OD</option></select>
    <select name="cena_do"><option disabled selected>CENA DO</option></select>
    <button type="submit" class="search-button">WYSZUKAJ</button>
  </form>
  <form class="form-container" action="addprojects" method="post">
      <div></div>
      <button type="submit"  class="search-button">DODAJ OGŁOSZENIE</button>
  </form>

  <div class="offer">
      <img src="public/uploads/<?= $Plane->getImage()?>">
      <div class="offer-details">
          <h2>Airbus A320</h2>
          <div class="columns">
              <div>
                  <p><strong>Marka:</strong> <?=$Plane->getMarka()?></p>
                  <p><strong>Model:</strong> <?=$Plane->getModel()?></p>
                  <p><strong>Rocznik:</strong> <?=$Plane->getRocznik()?></p>
              </div>
              <div>
                  <p><strong>Zastosowanie:</strong> <?=$Plane->getZastosowanie()?></p>
                  <p><strong>Lokalizacja:</strong> Szwajcaria</p>
              </div>
          </div>
          <p class="price">CENA : 20 000 000 zł</p>
      </div>
  </div>

</body>
</html>