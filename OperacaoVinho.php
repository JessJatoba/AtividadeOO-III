<?php
abstract class Bebida {
    protected $nome;
    protected $marca;
    protected $volume; //litros

    public function __construct($nome, $marca, $volume) {
        $this->nome = $nome;
        $this->marca = $marca;
        $this->volume = $volume;
    }

    abstract public function mostrarBebida();
    abstract public function verificarPreco($preco);
}

class Vinho extends Bebida {
    public function mostrarBebida() {
        return "Vinho: Nome: $this->nome, Marca: $this->marca, Volume: $this->volume L.";
    }

    public function verificarPreco($preco) {
        return $preco < 25;
    }
}

class Refri extends Bebida {
    public function mostrarBebida() {
        return "Refrigerante: Nome: $this->nome, Marca: $this->marca, Volume: $this->volume L.";
    }

    public function verificarPreco($preco) {
        return $preco < 5;
    }
}

class Suco extends Bebida {
    public function mostrarBebida() {
        return "Suco: Nome: $this->nome, Marca: $this->marca, Volume: $this->volume L.";
    }

    public function verificarPreco($preco) {
        return $preco < 2.5;
    }
}
?>
