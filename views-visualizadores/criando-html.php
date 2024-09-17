<?php
/**
 * Vamos criar um arquivo que contenha o html e a partir do controller, incluir esse arquivo.
 * Dentro do diretório resources/views ficam os arquivos de views. Nesse diretório criamos o arquivo listar-series.php
 * 
 * Após criado a estrutura que será responsavel pela exibição dentro do arquivo listar-series.php, no controller SeriesController alteramos
 * a estrutura de retorno para que ela agora nos retone a view criada.
 * 
 * No controller adicionamos um função do laravel que busca um arquivo de visualização, e desse arquivo ele vai montar o conteudo
 * da resposta
 * 
 * Passamos para a função: o nome do arquivo de visualização (view), os dados que serão exibidos na view.
 * podemos passar os dados como um array informando o nome da variavel que vai ser criada e qual o valor que será enviado para essa variavel
 * que vai ser criada. Exemplo:
 * 
 * return view('listar-series', [
 *   'aSeries' => $aSeries
 * ]);
 * 
 * A função compoct pega o argumento que passamos como uma string; pega a variavel com o mesmo nome e ter um array com a chave e a variavel
 * com esse nome. Basicamente ela faz a mesma coisa que o array no return.
 * 
 * return view('listar-series', compact('aSeries'));
 * 
 * Uma outra forma de passar valores para view é utilizando o metodo with 
 * 
 * return view('listar-series')->with('aSeries', $aSeries); 
 */

