<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet/>

<?

include_once('connection.php');

if (!empty($_POST['nome'] || !empty($_POST['email']) || !empty($_POST['cidade']) || !empty($_POST['idade']))){

    if(isset($_POST['nome'])){

   $nome = filter_input(INPUT_POST ,'nome', FILTER_SANITIZE_SPECIAL_CHARS);
}
if(isset($_POST['email'])){

   $email = filter_input(INPUT_POST ,'email', FILTER_SANITIZE_SPECIAL_CHARS);
}

if(isset($_POST['cidade'])){

   $cidade = filter_input(INPUT_POST ,'cidade', FILTER_SANITIZE_SPECIAL_CHARS);
}

if(isset($_POST['idade'])){

$idade = filter_input(INPUT_POST ,'idade', FILTER_SANITIZE_SPECIAL_CHARS);


}
//link to the previous page
echo " <br /><a href='javascript:self.history.back();'>Go Back</a>";

}else{

$stmt = $conn->prepare("INSERT INTO users (nome, email, cidade, idade) VALUES (:nome, :email, :cidade, :idade)");
}