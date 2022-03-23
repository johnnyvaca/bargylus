<!DOCTYPE html>
<html lang="fr">

<head>
    <title><?= $title; ?> </title>
    <meta charset="utf-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/css/bootstrap-select.min.css">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/js/bootstrap-select.min.js"></script>

    <!-- (Optional) Latest compiled and minified JavaScript translation files -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/js/i18n/defaults-*.min.js"></script>


</head>

<body style="background-color: #D1D3D4">
<div style="  border-style: solid;background-color: #ffffff ;border-color: #00549b;border-width: 10px;position: absolute; left: 30%;right: 30%; min-height: 100%">
    <div style="width: 100%; background-color: rgb(101,0,222);height: 100px;  " class="shadow p-3 mb-5 bg-white rounded">
        <p style="text-align: center; width:400px;font-family: 'Arial' ;color: #00549b;position: absolute; top: 5px;left: 20px; font-size: 30px">
            ASSISTENCE EEANJESUS</p>
        <div style="position: absolute; top: 50px">



            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
                Ajouter un utilisateur
            </button>

            <!-- Modal -->
            <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLongTitle">Ajouter un utilisateur</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <form id="form2"  method="post" action="index.php?action=addUser">
                        <div class="modal-body">

                                <div class="form-row">
                                    <div class="col">
                                        <input type="text" name="firstname" required class="form-control" placeholder="Prénom">
                                    </div>
                                    <div class="col">
                                        <input type="text" name="lastname" required class="form-control" placeholder="Nom de famille">
                                    </div>
                                </div>

                        </div>

                        </form>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Annuler</button>
                            <button type="button" id="save" class="btn btn-primary">Sauvegarder</button>
                        </div>
                    </div>
                </div>
            </div>



            <button class="btn btn-primary">Ajouter un service</button>
        </div>
    </div>
    <?= $content2; ?>
</div>

</body>
</html>