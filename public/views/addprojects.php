
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
<a href="projects" class="home-icon">
    <img src="public/JPG/home-icon.svg" alt="Strona główna">
</a>
<body>
  <img src="public/JPG/logo.svg" alt="Logo OTOLOTO" class="logo" />
  <h1>OTOLOTO</h1>
    <form class="form-container" action="addPlane" method="Post" enctype="multipart/form-data">
        <input name="marka" type="Text" placeholder="Marka">
        <input name="model" type="Text" placeholder="Model">
        <input name="Cena" type="number" placeholder="Cena">
        <input name="Rocznik" type="number" placeholder="Rocznik">
        <input name="zastosowanie" type="Text" placeholder="Zastosowanie">

        <div> <input type="file" name="file">  </div>
        <button type="submit" class="search-button" >Dodaj Zgłodzenie</button>

    </form>

</body>

</html>