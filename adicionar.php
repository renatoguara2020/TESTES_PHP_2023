<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet/>

<?

include_once('connection.php');

if (empty($_POST['nome'] || empty($_POST['email']) || empty($_POST['cidade']) || empty($_POST['idade']))){

    if(!isset($_POST['nome'])){

        echo " <div class=\"alert alert-danger\">Digite seu Nome</div>";
}
if(!isset($_POST['email'])){

echo "<div class=\"alert alert-danger\"> Digite seu Email</div>";
}

if(!isset($_POST['cidade'])){

echo "<div class=\"alert alert-danger\">Digite sua cidade </div>";
}

if(!isset($_POST['idade'])){

echo "<div class=\"alert alert-danger\">Digite sua idade </div>";


}


}else{


}