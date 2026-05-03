<?php
$titulo = 'Include e Require em PHP';
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $titulo ?></title>
    <link rel="stylesheet" href="../../style.css">
</head>
<body>
    <h1><?= $titulo ?></h1>

    <p>
        <code>include</code> e <code>require</code> servem para trazer o conteudo
        de outro arquivo PHP para dentro do arquivo atual.
    </p>

    <p>
        Isso ajuda a dividir o codigo em partes menores e reaproveitar arquivos,
        como funcoes, dados, cabecalho e rodape.
    </p>

    <h2>Include</h2>

    <p>O <code>include</code> inclui um arquivo dentro de outro.</p>

    <pre><code>include 'script.php';</code></pre>

    <p>
        Se o arquivo existir, o PHP executa o conteudo dele. No exemplo do projeto,
        o arquivo <code>script.php</code> mostra uma mensagem.
    </p>

    <pre><code>echo 'ola,' . ' vindo de fora do arquivo principal';</code></pre>

    <p>
        Se o arquivo chamado no <code>include</code> nao existir, o PHP mostra um
        aviso, mas continua executando o restante do codigo.
    </p>

    <h2>Require</h2>

    <p>O <code>require</code> tambem inclui um arquivo dentro de outro.</p>

    <pre><code>require 'script.php';</code></pre>

    <p>
        A diferenca principal e que, se o arquivo nao existir, o PHP mostra um erro
        e para a execucao do codigo.
    </p>

    <ul>
        <li><code>include</code>: tenta incluir o arquivo, mas continua se der erro.</li>
        <li><code>require</code>: exige o arquivo, e para tudo se ele nao existir.</li>
    </ul>

    <h2>Include_once e Require_once</h2>

    <p>
        <code>include_once</code> e <code>require_once</code> incluem o arquivo
        apenas uma vez.
    </p>

    <p>
        Mesmo que voce chame o mesmo arquivo varias vezes, ele nao sera carregado
        de novo.
    </p>

    <pre><code>include_once 'script.php';
include_once 'script.php';

require_once 'script.php';
require_once 'script.php';</code></pre>

    <p>
        Isso e util para evitar erro ao carregar duas vezes arquivos que possuem
        funcoes, classes ou configuracoes.
    </p>

    <h2>Usando com funcoes</h2>

    <p>
        No projeto, o arquivo <code>functions.php</code> guarda funcoes matematicas.
        Depois, o arquivo <code>index-04.php</code> usa:
    </p>

    <pre><code>require_once('functions.php');</code></pre>

    <p>Assim, as funcoes de <code>functions.php</code> ficam disponiveis no arquivo principal.</p>

    <pre><code>echo adicionar(20, 5);</code></pre>

    <h2>Usando com dados</h2>

    <p>Tambem e possivel usar <code>require_once</code> para pegar dados de outro arquivo.</p>

    <p>No projeto, <code>dados.php</code> retorna uma lista:</p>

    <pre><code>return [
    'joao', 'ana'. 'carlos', 'antonio', 'sara', 'maria'
];</code></pre>

    <p>E o arquivo <code>index-05.php</code> recebe esses dados assim:</p>

    <pre><code>$nomes = require_once('dados.php');</code></pre>

    <p>Ou seja, o arquivo incluido pode devolver um valor usando <code>return</code>.</p>

    <h2>Usando com header e footer</h2>

    <p>
        Nos exemplos da pasta <code>exemplo-outros-usos</code>, existe uma pagina
        com muito codigo repetido.
    </p>

    <p>
        No <code>exemplo-01</code>, cada pagina tem seu proprio HTML completo,
        incluindo menu, abertura e fechamento do documento.
    </p>

    <p>No <code>exemplo-02</code>, o codigo foi separado:</p>

    <ul>
        <li><code>header.php</code>: guarda o inicio do HTML e o menu.</li>
        <li><code>footer.php</code>: guarda o fechamento do HTML.</li>
        <li><code>index.php</code>, <code>about.php</code> e <code>contact.php</code>: ficam apenas com o conteudo principal da pagina.</li>
    </ul>

    <pre><code>&lt;?php require 'header.php'?&gt;

&lt;h1&gt;Home&lt;/h1&gt;
&lt;p&gt;This is the HomePage&lt;/p&gt;

&lt;?php require 'footer.php'?&gt;</code></pre>

    <p>
        Isso evita repeticao. Se o menu mudar, voce altera apenas o
        <code>header.php</code>, e todas as paginas que usam esse arquivo recebem
        a mudanca.
    </p>

    <h2>Resumo</h2>

    <p>Use <code>include</code> quando o arquivo nao for obrigatorio.</p>
    <p>Use <code>require</code> quando o arquivo for necessario para o sistema funcionar.</p>
    <p>Use <code>include_once</code> ou <code>require_once</code> quando o arquivo nao deve ser carregado mais de uma vez.</p>
    <p>Na pratica, <code>require_once</code> e muito usado para arquivos importantes como funcoes, configuracoes e classes.</p>
</body>
</html>
