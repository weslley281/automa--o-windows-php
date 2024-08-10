<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "codigos_liberacao";

// Criar conexão
$conn = new mysqli($servername, $username, $password, $dbname);

// Checar conexão
if ($conn->connect_error) {
    die("Falha na conexão: " . $conn->connect_error);
}

if (isset($_POST['codigo'])) {
    $codigo = $_POST['codigo'];
    $sql = "SELECT * FROM codigos_liberacao WHERE id_loja=2 AND codigo='$codigo'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        echo "Código válido";
    } else {
        echo "Código inválido";
    }
} else {
    echo "Nenhum código fornecido";
}

$conn->close();
?>
