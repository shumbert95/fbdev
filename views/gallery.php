<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" type="text/css"  href="../public/css/gallery.css">
        <link rel="stylesheet" type="text/css"  href="../public/css/front.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </head>
    <body>
        <?php include('navbar.php'); ?>
        <div class="container">
            <div class="row">
                <h1 class="col-md-9 col-md-offset-1">Concours photo du 12/11/2016 au 01/01/2017</h1>
                <div class="filters col-md-2">
                    <div class="dropdown">
                        <button class="btn btn-secondary btn-border dropdown-toggle" type="button" data-toggle="dropdown">Filtrer par
                            <span class="caret"></span></button>
                        <br>
                        <ul class="dropdown-menu">
                            <li><a href="#">Date d'ajout (croissante)</a></li>
                            <li><a href="#">Date d'ajout (décroissante)</a></li>
                            <li><a href="#">Nombre de j'aime (croissant)</a></li>
                            <li><a href="#">Nombre de j'aime (décroissant)</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <ul class="list-photos">
                <li class="col-md-4 picture-block">
                    <img src="../public/img/img_fjords.jpg">
                    <div class="picture-info">
                        <span class="nb-likes col-md-4">15 <span class="glyphicon glyphicon-heart"></span></span>
                        <span class="picture-owner col-md-4">Clément S.</span>
                        <span class="date-add col-md-4">10/12/2016</span>
                    </div>
                </li>
                <li class="col-md-4 picture-block">
                    <img src="../public/img/img_fjords.jpg">
                    <div class="picture-info">
                        <span class="nb-likes col-md-4">15 <span class="glyphicon glyphicon-heart"></span></span>
                        <span class="picture-owner col-md-4">Clément S.</span>
                        <span class="date-add col-md-4">10/12/2016</span>
                    </div>                </li>
                <li class="col-md-4 picture-block">
                    <img src="../public/img/img_fjords.jpg">
                    <div class="picture-info">
                        <span class="nb-likes col-md-4">15 <span class="glyphicon glyphicon-heart"></span></span>
                        <span class="picture-owner col-md-4">Clément S.</span>
                        <span class="date-add col-md-4">10/12/2016</span>
                    </div>                </li>
                <li class="col-md-4 picture-block">
                    <img src="../public/img/img_fjords.jpg">
                    <div class="picture-info">
                        <span class="nb-likes col-md-4">15 <span class="glyphicon glyphicon-heart"></span></span>
                        <span class="picture-owner col-md-4">Clément S.</span>
                        <span class="date-add col-md-4">10/12/2016</span>
                    </div>                </li>
                <li class="col-md-4 picture-block">
                    <img src="../public/img/img_fjords.jpg">
                    <div class="picture-info">
                        <span class="nb-likes col-md-4">15 <span class="glyphicon glyphicon-heart"></span></span>
                        <span class="picture-owner col-md-4">Clément S.</span>
                        <span class="date-add col-md-4">10/12/2016</span>
                    </div>                </li>
                <li class="col-md-4 picture-block">
                    <img src="../public/img/img_fjords.jpg">
                    <div class="picture-info">
                        <span class="nb-likes col-md-4">15 <span class="glyphicon glyphicon-heart"></span></span>
                        <span class="picture-owner col-md-4">Clément S.</span>
                        <span class="date-add col-md-4">10/12/2016</span>
                    </div>                </li>
            </ul>
        </div>
        <button type="button" class="btn btn-secondary btn-border btn-see-more">Voir plus d'images</button>
    </body>
</html>