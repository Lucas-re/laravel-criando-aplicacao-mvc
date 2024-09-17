<?php
/**
 * Vamos entender como podemos criar layouts usando blade para reutilizar componentes.
 * 
 * OBS: Assim como temos um padrão para nomear as actions dos controllers, também existe um certo padrão para nomear as views.
 * é comum que a gente siga o mesmo padrão do nome da nossa action para o nome da nossa view, exemplo: se a action se chama index a
 * view também ira se chamar index.
 * 
 * No controller, para indicar a separação de diretórios no retorno da view, utilizamos o ponto (.). Exemplo:
 * 
 * return view('series.index')->with('aSeries', $aSeries);
 * 
 * Agora vamos criar um componente:
 * dentro do diretório views criamos a pasta componentes e criamos o arquivo layout.blade.php dentro do arquivo adicionamos as variaveis de
 * referencia. 
 * 
 * Para utilizarmos o componente adicionando uma tag html personalizada ao aquivo da view passando o title como parametro e dentro
 * da tag passamos o conteudo que será exibido pelo slot. Exemplo: 
 * 
 * <x-layout title=''>
 *      conteudo que será exibido pelo slot
 * </x-layout>
 * 
 * Caso queira criar o componente pela linha de comando executamos o comando: ´´´ php artisan make:component <nome_do_componente>
 * Além de criar uma view ele também cria uma classe de componente no diretório app/View/Components
 */