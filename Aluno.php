<?php

require_once 'Pessoa.php';

class Aluno extends Pessoa {
    private string $matricula;
    private bool $ativo;

    public function __construct(string $nome, string $cpf, string $email, string $matricula) {
        parent::__construct($nome, $cpf, $email);
        $this->matricula = $matricula;
        $this->ativo = true;
    }

    public function getMatricula(): string {
        return $this->matricula;
    }

    public function isAtivo(): bool {
        return $this->ativo;
    }

    public function desativar(): void {
        $this->ativo = false;
    }

    public function exibirDados(): void {
        echo "=== ALUNO ===<br>";
        parent::exibirDados();
        echo "Matrícula: " . $this->matricula . "<br>";
        echo "Situação: " . ($this->ativo ? "Ativo" : "Inativo") . "<br>";
    }
}