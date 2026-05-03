<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Explicacao sobre Sessions em PHP</title>
</head>
<body>
    <h1>Explicacao sobre Sessions em PHP</h1>

    <p>
        <strong>SESSION</strong> em PHP serve para guardar informacoes de um usuario
        enquanto ele navega pelo site.
    </p>

    <p>
        Por exemplo: voce entra em um site, faz login, adiciona produtos no carrinho
        ou muda alguma preferencia. O PHP precisa lembrar essas informacoes entre uma
        pagina e outra.
    </p>

    <p>
        Como cada requisicao HTTP e independente, o PHP usa <code>$_SESSION</code>
        para manter esses dados salvos temporariamente no servidor.
    </p>

    <h2>Como iniciar uma sessao</h2>

    <p>
        Para usar sessoes, o primeiro passo e sempre iniciar a sessao com:
    </p>

    <pre><code>&lt;?php
session_start();
?&gt;</code></pre>

    <p>
        O <code>session_start()</code> precisa vir antes de qualquer HTML ou texto ser
        enviado para o navegador.
    </p>

    <h2>Como guardar valores na sessao</h2>

    <p>
        Depois de iniciar a sessao, voce pode guardar valores assim:
    </p>

    <pre><code>&lt;?php
session_start();

$_SESSION['nome'] = 'Franklyn';
$_SESSION['sobrenome'] = 'Santos';
?&gt;</code></pre>

    <h2>Como recuperar valores da sessao</h2>

    <p>
        Em outra pagina, desde que ela tambem tenha <code>session_start()</code>,
        voce pode recuperar esses valores:
    </p>

    <pre><code>&lt;?php
session_start();

echo $_SESSION['nome'];
echo $_SESSION['sobrenome'];
?&gt;</code></pre>

    <h2>Onde ficam os dados da sessao</h2>

    <p>
        Quando usamos <code>session_start()</code>, o PHP cria ou continua uma
        sessao para aquele navegador.
    </p>

    <p>
        O navegador nao guarda diretamente todos os dados que estao em
        <code>$_SESSION</code>. Ele guarda principalmente o ID da sessao.
    </p>

    <p>
        Esse ID normalmente fica em um cookie chamado <code>PHPSESSID</code>.
        Voce consegue ver esse cookie no navegador, abrindo as ferramentas de
        desenvolvedor e indo em <code>Application</code>, depois em
        <code>Cookies</code>.
    </p>

    <p>
        Os dados reais da sessao ficam no servidor. O PHP salva esses dados em
        arquivos temporarios de sessao.
    </p>

    <p>
        Entao, se voce estiver com uma sessao ativa e for ate a pasta onde o servidor
        guarda esses arquivos temporarios, podera encontrar um arquivo relacionado
        ao ID da sua sessao. Esse arquivo pode conter os dados que voce colocou em
        <code>$_SESSION</code>.
    </p>

    <p>
        Para descobrir onde o PHP esta salvando os arquivos de sessao, voce pode usar:
    </p>

    <pre><code>&lt;?php
echo session_save_path();
?&gt;</code></pre>

    <p>
        Resumindo: o navegador guarda o ID da sessao, e o servidor guarda os dados
        da sessao.
    </p>

    <h2>O que acontece ao fechar o navegador</h2>

    <p>
        Se voce fechar o navegador e abrir novamente, normalmente os dados da sessao
        nao estarao mais disponiveis.
    </p>

    <p>
        Isso acontece porque o cookie <code>PHPSESSID</code> costuma ser um cookie
        de sessao. Quando o navegador e fechado, esse cookie pode ser apagado.
    </p>

    <p>
        Ao voltar para o site, o PHP pode criar um novo ID de sessao. Como esse ID
        novo e diferente do anterior, ele nao encontra mais os dados antigos daquela
        sessao.
    </p>

    <p>
        O arquivo antigo da sessao pode ate continuar por um tempo no servidor, mas
        sem o mesmo <code>PHPSESSID</code>, o PHP nao consegue ligar o navegador aos
        dados antigos.
    </p>

    <h2>Exemplo pratico</h2>

    <p>
        No exemplo da pasta <code>exemplo-01</code>, quando voce acessa
        <code>adicionar1.php</code>, ele salva o nome na sessao:
    </p>

    <pre><code>&lt;?php
session_start();
$_SESSION['nome'] = 'Franklyn';
?&gt;</code></pre>

    <p>
        Depois, quando voce volta para <code>index.php</code>, o PHP ainda lembra esse
        valor porque ele ficou salvo na sessao.
    </p>

    <h2>Como remover valores da sessao</h2>

    <p>
        Para remover um valor especifico da sessao, o ideal e usar:
    </p>

    <pre><code>&lt;?php
session_start();
unset($_SESSION['nome']);
?&gt;</code></pre>

    <p>
        No seu codigo, voce esta fazendo assim:
    </p>

    <pre><code>&lt;?php
$_SESSION['nome'] = '';
?&gt;</code></pre>

    <p>
        Isso funciona visualmente porque deixa o valor vazio, mas a variavel ainda
        existe na sessao. Com <code>unset()</code>, ela e realmente removida.
    </p>

    <h2>Como destruir a sessao inteira</h2>

    <p>
        Para destruir a sessao inteira, usamos:
    </p>

    <pre><code>&lt;?php
session_start();
session_destroy();
?&gt;</code></pre>

    <p>
        Isso e comum quando o usuario faz logout de um sistema.
    </p>

    <h2>Analogia simples</h2>

    <p>
        Imagine que a sessao e uma mochila que o servidor entrega para cada visitante
        do site.
    </p>

    <p>
        Quando o usuario entra no site, ele ganha uma mochila propria. Dentro dela, o
        PHP pode guardar informacoes como nome, login, carrinho de compras ou
        preferencias.
    </p>

    <p>
        Cada vez que o usuario muda de pagina, ele continua carregando a mesma mochila.
        Entao o site consegue lembrar quem ele e e o que ele fez antes.
    </p>

    <p>
        Quando voce usa <code>unset()</code>, e como tirar apenas um objeto da mochila.
    </p>

    <p>
        Quando voce usa <code>session_destroy()</code>, e como jogar a mochila inteira
        fora.
    </p>
</body>
</html>
