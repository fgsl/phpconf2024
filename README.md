# Aprendendo padrões de projeto com Laminas

Este curso tem como objetivo introduzir o framework Laminas, mostrando como ele pode ser usado para criar aplicações PHP sem, entretanto, criar um forte acoplamento da aplicação com os componentes do framework. Ao longo do curso, que consiste na criação de um cadastro, veremos como os componentes do Laminas implementam diversos padrões de projeto e arquitetura de software.

## Primeira aula

Na primeira aula aprendemos:

* Como criar a estrutura de projeto PHP orientado a objetos usando o esqueleo de aplicação do Laminas;
* Qual a função de cada pasta na estrutura de projeto Laminas;
* Onde a aplicação se inicia (index.php) e como ocorre a [Inversão de Controle](https://martinfowler.com/bliki/InversionOfControl.html);
* Como o [Module Manager](https://docs.laminas.dev/laminas-modulemanager) funciona;
* Como a classe [Application](https://github.com/laminas/laminas-mvc/blob/3.9.x/src/Application.php) do Laminas implementa o padrão de projeto [Application Controller](https://martinfowler.com/eaaCatalog/applicationController.html);
* Como a classe [AbstractActionController](https://github.com/laminas/laminas-mvc/blob/3.9.x/src/Controller/AbstractActionController.php) do Laminas implementa o padrão de projeto [Page Controller](https://martinfowler.com/eaaCatalog/pageController.html);
* Como a camada de visão do Laminas implementa o padrão de projeto [Two Step View](https://martinfowler.com/eaaCatalog/twoStepView.html);
* Como funciona a configuração dos módulos (roteamento, fábricas de controlares e gerenciamento das páginas);
* Qual é o padrão de nomes que conecta os métodos dos controladores com as páginas;
* Como gerar URLs a partir de rotas com o método $this->url() nos arquivos .phtml;
* Como criar uma fábrica para um controlador de página usando a classe [InvokableFactory](https://github.com/laminas/laminas-servicemanager/blob/4.4.x/src/Factory/InvokableFactory.php) como exemplo;
* Como criar uma conexão para banco de dados usando a [fábrica do Laminas Db](https://github.com/laminas/laminas-db/blob/2.21.x/src/Adapter/AdapterServiceFactory.php);
* Como a classe [TableGateway](https://github.com/laminas/laminas-db/blob/2.21.x/src/TableGateway/TableGateway.php) do Laminas implementa o padrão de projeto [Table Data Gateway](https://www.martinfowler.com/eaaCatalog/tableDataGateway.html).

Referências:

* [Esqueleto de aplicação do Laminas](https://github.com/laminas/laminas-mvc-skeleton)
* [Documentação oficial do Laminas](https://docs.laminas.dev/)
* [Configuração da classe Adapter do Laminas Db](https://docs.laminas.dev/laminas-db/adapter/#creating-an-adapter-using-configuration)
* [Configuração do Service Manager no MVC do Laminas](https://docs.laminas.dev/laminas-mvc/services/#servicemanager)

## Segunda aula

Na segunda aula aprendemos:

* Como criar, recuperar, atualizar e apagar registros de uma tabela usando a classe TableGateway do Laminas;
* Como criar filtros com [Laminas Filter](https://docs.laminas.dev/laminas-filter)
* Como criar validadores com [Laminas Validator](https://docs.laminas.dev/laminas-validator/)
* Como combinar filtros e validadores com [Laminas Input Filter](https://docs.laminas.dev/laminas-inputfilter/)

O componente Laminas Input Filter implementa o padrão de projeto [Chain of Responsibility](https://refactoring.guru/design-patterns/chain-of-responsibility)
