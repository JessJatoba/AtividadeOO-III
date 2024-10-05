<?php
include 'OperacaoVinho.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $tipo = $_POST['tipo'];
    $nome = $_POST['nome'];
    $marca = $_POST['marca'];
    $volume = $_POST['volume'];
    $preco = $_POST['preco'];

    switch ($tipo) {
        case 'vinho':
            $bebida = new Vinho($nome, $marca, $volume);
            break;
        case 'refrigerante':
            $bebida = new Refri($nome, $marca, $volume);
            break;
        case 'suco':
            $bebida = new Suco($nome, $marca, $volume);
            break;
    }

    echo $bebida->mostrarBebida() . "<br>";
    
    if ($bebida->verificarPreco($preco)) {
        echo "O preço é aceitável para essa bebida.";
    } else {
        echo "O preço não é aceitável para essa bebida.";
    }
}
?>
