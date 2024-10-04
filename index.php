<?php
    require_once "ator.class.php";
    require_once "filme.class.php";
    require_once "atuacao.class.php";

    $ator = new Ator('Daniel','britânico');

    $filme = new Filme('Harry Potter e a Pedra Filosofal', 'bla bla bla bla bla');

    $atuacao = new Atuacao('Harry Potter', $ator, $filme);

    // echo '<pre>';
    // echo var_dump($atuacao);
    // echo '</pre';

    echo '<h3>Atuação</h3>';
    echo "Título: {$atuacao -> getFilme() -> getTitulo()} <br>";
    echo "Sinopse: {$atuacao -> getFilme() -> getSinopse()} <br>";
    echo "Ator: {$atuacao -> getAtor() -> getNome()} <br>";
    echo "Nacionalidade: {$atuacao -> getAtor() -> getNacionalidade()} <br>";
    echo "Atuou como: {$atuacao -> getPapel()} <br>";
?>