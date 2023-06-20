<?php
$servername = "";
$username = "bloodmay";
$password = "123321";
$dbname = "bloodonatesql";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Conexão bem-sucedida";
} catch(PDOException $e) {
    echo "Erro na conexão: " . $e->getMessage();
}

$nome = $_POST['nome'];
$data_nascimento = $_POST['data_nascimento'];
$genero = $_POST['genero'];
$altura = $_POST['altura'];
$peso = $_POST['peso'];
$tipo_sanguineo = $_POST['tipo_sanguineo'];
$email = $_POST['email'];
$numero_contato = $_POST['numero_contato'];
$cpf = $_POST['cpf'];
$rua = $_POST['rua'];
$numero = $_POST['numero'];
$complemento = $_POST['complemento'];
$bairro = $_POST['bairro'];
$cidade = $_POST['cidade'];
$estado = $_POST['estado'];
$cep = $_POST['cep'];

try {
    $stmt = $conn->prepare("INSERT INTO userregister (nome, data_nascimento, genero, altura, peso, tipo_sanguineo, email, numero_contato, cpf) VALUES (:nome, :data_nascimento, :genero, :altura, :peso, :tipo_sanguineo, :email, :numero_contato, :cpf)");
    $stmt->bindParam(':nome', $nome);
    $stmt->bindParam(':data_nascimento', $data_nascimento);
    $stmt->bindParam(':genero', $genero);
    $stmt->bindParam(':altura', $altura);
    $stmt->bindParam(':peso', $peso);
    $stmt->bindParam(':tipo_sanguineo', $tipo_sanguineo);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':numero_contato', $numero_contato);
    $stmt->bindParam(':cpf', $cpf);
    $stmt->execute();

    $userregister_id = $conn->lastInsertId();

    $stmt = $conn->prepare("INSERT INTO endereco (rua, numero, complemento, bairro, cidade, estado, cep, id_userregister) VALUES (:rua, :numero, :complemento, :bairro, :cidade, :estado, :cep, :id_userregister)");
    $stmt->bindParam(':rua', $rua);
    $stmt->bindParam(':numero', $numero);
    $stmt->bindParam(':complemento', $complemento);
    $stmt->bindParam(':bairro', $bairro);
    $stmt->bindParam(':cidade', $cidade);
    $stmt->bindParam(':estado', $estado);
    $stmt->bindParam(':cep', $cep);
    $stmt->bindParam(':id_userregister', $userregister_id);
    $stmt->execute();

    echo "Dados inseridos com sucesso!";
} catch(PDOException $e) {
    echo "Erro ao inserir dados: " . $e->getMessage();
}
?>