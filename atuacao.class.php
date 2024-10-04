<?php
    class Atuacao{

        // public function __construct(private string $papel = '', private $ator = null, private $filme = null){}

        public function __construct(private string $papel = '', private Ator $ator = new Ator(), private Filme $filme = new Filme()){}

        public function getPapel(){
            return $this -> papel;
        }

        public function getAtor(){
            return $this -> ator;
        }

        public function getFilme(){
            return $this -> filme;
        }

    }
?>