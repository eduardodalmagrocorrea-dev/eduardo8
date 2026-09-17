<?php
session_start();
require "conexao.php";

$email = trim($_POST["email"] ?? "");
$senha = $_POST["senha"] ?? "";

if (!filter_var($email, FILTER_VALIDATE_EMAIL) || $senha == "") {
    header("Location: index.php?erro=1");
    exit;
}

$stmt = $conn->prepare("SELECT id, nome, senha FROM alunos WHERE email = ?");
$stmt->bind_param("s", $email);
$stmt->execute();

$resultado = $stmt->get_result();
$aluno = $resultado->fetch_assoc();

if ($aluno && password_verify($senha, $aluno["senha"])) {
    $_SESSION["usuario"] = $aluno["nome"];
    $_SESSION["id_usuario"] = $aluno["id"];
    header("Location: cadastro.php");
    exit;
}

header("Location: index.php?erro=1");
exit;
