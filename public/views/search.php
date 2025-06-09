<!DOCTYPE html>
<html lang="pl">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>OTOLOTO - Oferty</title>
  <link rel="stylesheet" href="public/styles/oferty.css">
</head>
<body>

  <header>
    <a href="projects" class="home-icon">
      <img src="public/JPG/home-icon.svg" alt="Strona główna">
    </a>
    <h1>OTOLOTO</h1>
  </header>

  <main class="offer-list">

      <?php foreach ($planes as $Plane): ?>
          <div class="offer">
              <img src="public/uploads/<?= $Plane->getImage()?>">
              <div class="offer-details">
                  <h2><?=$Plane->getMarka()?>  <?=$Plane->getModel()?></h2>
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
                  <p class="price">CENA : <?=$Plane->getCena()?></p>
              </div>
          </div>
      <?php endforeach; ?>



    <div class="pagination">
      <button>1</button>
      <button>2</button>
      <button>3</button>
      <button>4</button>
      <button>5</button>
      <span>...</span>
      <button>48</button>
    </div>

  </main>

</body>
</html>
