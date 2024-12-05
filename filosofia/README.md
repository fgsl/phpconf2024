Esta aplicação foi criada com o [esqueleto de aplicação do Laminas](https://github.com/laminas/laminas-mvc-skeleton), usando o [Composer](https://getcomposer.org/):

```bash
$ composer create-project -sdev laminas/laminas-mvc-skeleton filosofia
```

Para rodar a aplicação você precisa iniciar um servidor web apontando a pasta public como _web root_. Para desenvolvimento, você pode usar o servidor embutido do PHP, assim:

```bash
$ cd filosofia
$ php -S localhost:8008 -t public
```
O comando acima inicia a aplicação na porta 8008, mas você pode iniciar na porta que quiser, desde que ela esteja livre.

Você também pode usar o Composer para iniciar a aplicação, pois o arquivo [composer.json](composer.json) tem a configuração de inicialização.

```bash
$ composer serve
```

## Modo de desenvolvimento 

Por padrão, a aplicação é iniciada em modo de desenvolvimento, o que significa que ela usa configuração de desenvolvimento. Você pode habilitar e desabilitar esse modo usando o Composer.

```bash
$ composer development-enable  # habilita o modo de desenvolvimento
$ composer development-disable # desabilita o modo de desenvolvimento
$ composer development-status  # mostra se o modo de desenvolvimento está desabilitado ou não
```

## Rodando testes unitários

Para rodar os testes unitários você precisa instalar o laminas-test.

  ```bash
  $ composer require --dev laminas/laminas-test
  ```

Uma vez que ele esteja instalado, basta executar o PHPUnit embarcado na aplicação com o Composer.

```bash
$ ./vendor/bin/phpunit
```

