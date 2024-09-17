<?php
/**
 * O que é o blade no php? 
 * 
 * De acordo com a documentação do laravel o blasde é basicamente uma template engine que o laravel utiliza. Template engine é um componente
 * que auxilia na criação templates de views. com ele é possivel utilizarmos uma sintaxe um pouco diferente nas views 
 * 
 * Para criar um aquivo com o blade utilizamos a seguinte nomeclatura: <nome_do_arquivo>.blade.php
 * 
 * Ao inves de utilizarmos as tags do php, utilizamos o @ (arroba) como assinatura, para executar scripts php. exemplo:

 * @foreach ($aSeries as $serie)
 *      <li>{{$serie}}</li>
 * @endforeach
 * 
 * Podemos utilizar as chaves duplas {{}} para substituir o echo do php imprimindo valores de variaveis, chamada de metodo, chamada de funções e
 * etc. Exemplo:
 * 
 * <li>{{$serie}}</li>
 * 
 * Além de tudo que temos do php como por exemplo if, elseif, else; com o blade temos algumas outras coisas, por exemplo: unless que é utilizado
 * caso precisamos fazer um negação de forma mais clara ao inves de utilizar um if com uma negação. Exemplo:
 * 
 * @unless (Auth::check())
 *      you are not signed in.
 * @endunless
 */
