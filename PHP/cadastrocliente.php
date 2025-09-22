<?php
// conectar ao banco de dados
require_once __DIR__ ."/conexao.php";

//função para capturar os dados passados de uma página a outra
function redirecWhith($url,$params=[]){
// verifica se os parametros não vieram vazios
    if(empty($params)){
// separar os parametros em espaços diferentes
$qs= http_build_query($params);
$sep = (strpos($url, '?') === false) ? '?': '&';
$url .= $sep . $qs;    
}
// joga a url para o cabeçalho no navegador
header("Location: $url");
exit;
}



// capturando os dados e jogando em variaveis
try{
    if($_SERVER["REQUEST_METHOD"] !=="POST"){
        //VOLTAR Á TELA DE CADASTRO E EXIBIR ERRO
        redirecWhith("../paginas/cadastro.html",
           ["erro "=> "Metodo invaldo"]);
    }
    //jogando os dados dentro de váriaveis
    $nome =$_POST["nome"];
    $email =$_POST["email"];
    $senha =$_POST["senha"];
    $telefone =$_POST["telefone"];
    $cpf = $_POST["cpf"];
    $confirmarsenha =$_POST["confirmar"];

    //VALIDANDO OS CAMPOS
//criar uma variavel para receber os erros de validação
    $erros_validacao=[];
    if($nome ==="" || $email ==="" || $senha === ""
    || $telefone === "" || $cpf==="" || $confirmarsenha===""){
        $erros_validacao[]="Preencha todos os campos";
}

// validação para verificar se o email tem @
if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
    $erros_validacao[]= "E-mail inválido";
}
// verificando se senha e confirmar senha são diferentes
if($senha !== $confirmarsenha){
    $erros_validacao[]= "As senhas não conferem";
}
// verificar se a senha tem mais de 8 dígitos
if(strlen($senha)<8){
    $erros_validacao[]= "Senha devge ter pelo o menos 8 caracteres";
}
// verificar se o telefone tem pelo o menos 11 digitos
if(strlen($telefone)<8){
    $erros_validacao[]= "Telefone incorreto";
}
//verificar se o cpf tem pelo o menos 11 digitos
if(strlen($cpf)<11){
    $erros_validacao[]= "CPF inválido";

// agora é enviar os erros para a tela de cadastro
if($erros_validacao){
    redirecWhith("../paginas/cadastro.html" , 
["erro " => urlencode($erros_validacao[0])]);
}

// verificar se o cpf já foi cadastrado no banco de dados
$stmt = $pdo->prepare("SELECT * From Cliente
Where cpf= :cpf  LIMIT 1");
// joga o cpf digitado dentro do banco de dados
$stmt ->execute([':cpf =>$cpf']);
if($stmt->fetch()){
    redirecWhith('../paginas/cadastro.html',["erro "
    =>urldecode("CPF já está cadastrado")]);
}




?>