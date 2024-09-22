<?php
/**
 * A Classe DB nos fornece acesso diretamente ao banco de dados só que temos que escrever a query sql.
 * 
 * O laravel também oferece um ORM (Object Relational Mapping), só que o Eloquent segue um padrão bem diferente do Doctrine.
 * No Dctrine temos uma entidade, que é uma classe do negocio que não conhece qual é a tabela, quais são as colunas e etc, e outra 
 * classe que é o entity manager, que faz com que essa tabela seja inserida no banco de dados e se precisamos buscar alguma coisa utilizamos 
 * repositório
 * 
 * Com o Eloquent, que é o nome do ORM do laravel, utilizamos outro padrão onde a mesma classe faz isso tudo.
 * Ela representa a tabela, ela insere um novo dado no banco de dados, e ela busca os dados no banco.
 * 
 * 
 * ###### Estrutura
 * 
 * Como poderiamos criar isso?
 * Podemos ir diretamente no diretório app/Models e criar uma nova Model ou atraves do artisan executar o comando:
 * ´´´ php artisan make:model <nome_da_model> ´´´ 
 * 
 * Quando temos uma model do Eloquent ORM essa model é mapeada para uma tabela do banco. Então se temos uma classe chamada serie, por exemplo,
 * o Eleoquent ORM vai buscar uma tabela no banco chamada 'series'; mas se o nome fosse 'seriados', poderiamos criar um atributo e redefinir o 
 * nome. Exemplo:
 * 
 * protected $table = 'seriados';
 * 
 * 
 * 
 * ###### Consultar
 * 
 * E como essa classe esta extendendo a classe Model, temos varios metodos que podemos utilizar, exemplo o metodo all()
 * 
 * $aSeries = Serie::all();
 * 
 * Ela nos retorna todos os dados da tabela em um tipo diferente, uma Collection. Então o eloquente além de ter um ORM tem uma biblioteca de 
 * Coleções.
 * Temos os itens dessa collection e cada item é um grupo de dados retornados tendo elas varias informações da conexão com banco de dados e 
 * etc 
 * 
 * 
 * ###### Inserir
 * 
 * Para inserir dados atraves do Eloquent ORM Instaciamos a classe Series e utilizamos o metod save(); Exemplo:
 * 
 * $serie = new Serie();
 * $serie->nome = $nomeSerie; // que vem do request
 * $serie->save();
 * 
 * Com isso, o Eloquent preeche até os timestamps da tabela, caso não queira que eles sejam preechidos, não informamos eles na criação da
 * tabela na migration ou na model Series informamos que o timestamps seja false. exemplo:
 * 
 * public $timestamps = false;  
 * 
 * 
 * ###### Consultas com querys
 * 
 * O Eloquent também nos permite consultas personalizadas. Com o metodo query() estamos criando um query Builder. Exemplo: 
 * 
 * $aSeries = Serie::query()->orderBy('nome')->get();
 * 
 */