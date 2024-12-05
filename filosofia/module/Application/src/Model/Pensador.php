<?php
namespace Application\Model;

class Pensador
{
    public int $codigo;
    public string $nome;

    public function __construct(array $data = [])
    {
        $this->codigo = $data['codigo'] ?? 0;
        $this->nome = $data['nome'] ?? '';
    }

    public function toArray(): array
    {
        return get_object_vars($this);
    }
}