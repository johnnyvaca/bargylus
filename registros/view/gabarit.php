<!DOCTYPE html>
<html lang="fr">

<head>
    <title><?= $title; ?> </title>
    <meta charset="utf-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
            crossorigin="anonymous"></script>
</head>

<body style="background-color: #D1D3D4">
<div style="  border-style: solid;background-color: #ffffff ;border-color: #00549b;border-width: 10px;position: absolute; left: 30%;right: 30%; min-height: 100%">
    <div style="width: 100%; background-color: rgb(101,0,222);height: 100px;  " class="shadow p-3 mb-5 bg-white rounded">
        <p style="text-align: center; width:400px;font-family: 'Arial' ;color: #00549b;position: absolute; top: 5px;left: 20px; font-size: 30px">
            ASSISTENCE EEANJESUS</p>
        <div style="position: absolute; top: 50px">
            <button class="btn btn-primary">Ajouter une personne</button>
            <button class="btn btn-primary">Ajouter un service</button>
        </div>
    </div>
    <?= $content2; ?>
</div>

</body>
</html>