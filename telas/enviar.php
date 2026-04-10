<?php
if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $tempo = $_POST['tempo'];
    $nome = $_POST['nome'];
    $ra = $_POST['RA'];
    $maquinario = isset ($_POST['maquinario']) ? $_POST['maquinario']:"Maquinario não selecionado.";
    $radio = isset ($_POST['tipo']) ? $_POST['tipo']:"É necessario informar se a maquina esta operando.";
    $mensagem = $_POST['mensagem'];

    echo"<h1>Seu Relatorio foi enviado.</h1>";
    echo"<p>Aguarde o mecânico já está se preparando para etendelo.</p>";
    echo "<hr>";
    echo "<p><strong>Operário:</strong>$nome (RA:$ra)</p>";
    echo "<p><strong>Data do ocorrido:</strong>$tempo</p>";
    echo "<p><strong>Maquina defeituosa:</strong>$maquinario</p>";
    echo "<p><strong>Maquina ainda operante:</strong>$radio</p>";
    echo "<p><strong>Problema descrito:</strong>$mesagem</p>";

    echo "<br><button onclick='window.history.back()'>Voltar</button>";
}