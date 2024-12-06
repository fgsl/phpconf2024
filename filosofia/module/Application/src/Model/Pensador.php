<?php
namespace Application\Model;

use Laminas\Filter\Digits;
use Laminas\Filter\StringToUpper;
use Laminas\I18n\Filter\Alpha;
use Laminas\InputFilter\InputFilter;
use Laminas\InputFilter\InputFilterInterface;
use Laminas\Validator\StringLength;
use Laminas\InputFilter\Input;

class Pensador
{
    public int $codigo;
    public string $nome;

    private InputFilterInterface $inputFilter; 

    public function __construct(array $data = [])
    {
        $codigo = new Input('codigo');
        $codigo->getFilterChain()
        ->attach(new Digits());

        $nome = new Input('nome');
        $nome->getFilterChain()
        ->attach(new Alpha(true))
        ->attach(new StringToUpper());
        $nome->getValidatorChain()->attach(new StringLength(['min' => 3,'max'=>80]));

        $this->inputFilter = new InputFilter();
        $this->inputFilter
            ->add($codigo)
            ->add($nome);

        $data = ($data == [] ? ['codigo'=>0,'nome' => ''] : $data);
        $this->inputFilter->setData($data);

        $filteredValues = $this->inputFilter->getValues();

        $this->codigo = $filteredValues['codigo'];
        $this->nome = $filteredValues['nome'];
    }

    public function toArray(): array
    {
        return $this->inputFilter->getValues();
    }

    public function isValid(): bool
    {
        return $this->inputFilter->isValid();
    }
}