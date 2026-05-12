# File System em PHP - Revisao rapida

Este modulo mostra como trabalhar com pastas e arquivos usando PHP.

## Funcoes principais

- `__DIR__`: caminho absoluto da pasta onde o arquivo PHP atual esta.
- `scandir($path)`: lista os itens de uma pasta.
- `is_file($path)`: verifica se o caminho e um arquivo.
- `is_dir($path)`: verifica se o caminho e uma pasta.
- `file_exists($path)`: verifica se um arquivo ou pasta existe.
- `mkdir($path)`: cria uma pasta.
- `mkdir($path, recursive: true)`: cria pastas dentro de pastas.
- `rmdir($path)`: remove uma pasta vazia.
- `filesize($path)`: retorna o tamanho de um arquivo em bytes.
- `pathinfo($path)`: retorna informacoes sobre o caminho de um arquivo.
- `file_put_contents($path, $content)`: cria ou substitui o conteudo de um arquivo.
- `file_put_contents($path, $content, FILE_APPEND)`: adiciona conteudo ao final do arquivo.

## Cuidados importantes

- `.` representa a pasta atual.
- `..` representa a pasta anterior.
- Use `__DIR__` para evitar erros de caminho relativo.
- Antes de criar uma pasta, confirme se ela ainda nao existe.
- Antes de remover uma pasta, confirme se ela existe.
- `rmdir()` so remove pastas vazias.
- `file_put_contents()` sem `FILE_APPEND` substitui o conteudo atual.

## Exercicio para corrigir

Abra o arquivo `exercicio-03/index.php`.

O script tem varios problemas de filesystem. Corrija para que ele:

1. Crie a pasta `logs` se ela nao existir.
2. Crie ou atualize o arquivo `logs/app.log`.
3. Adicione 5 linhas novas ao arquivo, sem apagar o conteudo anterior.
4. Liste apenas arquivos dentro da pasta `logs`.
5. Mostre o tamanho de `logs/app.log` em bytes.

Depois de corrigir, execute:

```bash
php exercicio-03/index.php
```
