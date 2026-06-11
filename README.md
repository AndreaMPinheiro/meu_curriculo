# Currículo Online

Este projeto é um currículo profissional online desenvolvido como atividade acadêmica, utilizando tecnologias fundamentais do desenvolvimento web: HTML, CSS, JavaScript, PHP e GitHub.

O objetivo do projeto é apresentar minhas informações pessoais, formação acadêmica, experiências, habilidades e formas de contato em uma página web responsiva, organizada e publicada online.

## Projeto publicado

Link do projeto online:

[Ver currículo online](https://andreampinheiro.github.io/meu_curriculo/)

## Repositório GitHub

Link do repositório:

[Ver o repositório no GitHub](https://github.com/AndreaMPinheiro/meu_curriculo)

## Tecnologias utilizadas

* HTML5: estrutura da página;
* CSS3: estilização, layout, responsividade e animações;
* JavaScript: interatividade, validação do formulário, tema claro/escuro e botão de impressão;
* PHP: processamento simples do formulário de contato;
* Git: controle de versão;
* GitHub: armazenamento do código-fonte;
* GitHub Pages: publicação do projeto online.

## Estrutura do projeto

```txt
meu_curriculo
│
├── index.html
├── style.css
├── script.js
├── contato.php
├── README.md
├── .gitignore
│
└── img
    └── perfil.png
```

## Descrição dos arquivos

* `index.html`: página principal do currículo.
* `style.css`: arquivo de estilos, cores, layout, responsividade e animações.
* `script.js`: arquivo responsável pelas interações com JavaScript.
* `contato.php`: arquivo responsável pelo processamento do formulário de contato.
* `.gitignore`: arquivo utilizado para impedir o envio de arquivos desnecessários ao GitHub.
* `img/`: pasta onde fica armazenada a imagem de perfil utilizada no currículo.

## Funcionalidades implementadas

* Layout responsivo para computador, tablet e celular.
* Currículo dividido em seções organizadas.
* Foto de perfil com animação circular.
* Paleta de cores personalizada em tons de verde e roxo.
* Tema claro e tema escuro.
* Botão para imprimir ou salvar o currículo como PDF.
* Validação do formulário de contato com JavaScript.
* Processamento do formulário de contato com PHP.
* Salvamento local das mensagens em arquivo `.txt` durante os testes.
* Publicação do projeto com GitHub Pages.

## Instruções de execução

### Executar o projeto pelo navegador

Para visualizar o currículo sem o PHP, basta abrir o arquivo `index.html` no navegador ou utilizar a extensão Live Server no Visual Studio Code.

### Executar o projeto com PHP localmente

Para testar o formulário de contato com PHP, é necessário ter o PHP instalado no computador.

Com o terminal aberto dentro da pasta do projeto, execute:

```bash
php -S localhost:8000
```

Caso esteja utilizando XAMPP no Windows, o comando pode ser:

```bash
C:\xampp\php\php.exe -S localhost:8000
```

Depois, acesse no navegador:

```txt
http://localhost:8000/index.html
```

Ao enviar uma mensagem pelo formulário, o PHP processa os dados e cria um arquivo chamado `mensagens.txt` localmente.

## Observação sobre o GitHub Pages e PHP

O projeto foi publicado utilizando GitHub Pages, que executa páginas feitas com HTML, CSS e JavaScript.

O GitHub Pages não executa PHP. Por isso, o recurso em PHP deve ser testado localmente com o servidor embutido do PHP ou com XAMPP.

Mesmo assim, o arquivo `contato.php` está presente no repositório para demonstrar o uso básico de PHP conforme solicitado na atividade.

## Aprendizados

Durante o desenvolvimento deste projeto, foram praticados conceitos de estruturação HTML, estilização com CSS, responsividade, interatividade com JavaScript, uso básico de PHP, versionamento com Git e publicação de projeto no GitHub Pages.

## Autora

Desenvolvido por **Andréa Moraes**.

Projeto acadêmico de currículo online.
