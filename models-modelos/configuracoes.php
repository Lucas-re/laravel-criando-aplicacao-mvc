<?php
/**
 * Vamos falar um pouco sobre as configurações do laravel, porque agora vamos precisar acessar um banco de dados. vejamos como as 
 * configurações funcionam:
 * 
 * Dentro do diretório config temos varios arquivos de configuração. Temos arquivos especificos como por exemplo arquivo de log (logging.php),
 * envio de email (mail.php), de filas (queue.php) e um arquivo generico (app.php), ou seja, da aplicação como um todo.
 * 
 * No arquivo app.php podemos ver coisas genericas da aplicação como: o nome da aplicação, o ambiente no qual ela esta rodando, se é produção ou
 * desenvolvimento, ambiente local, se o debug vai esta habilitado e etc, inclusive alguns providers (provedores de serviços que podemos utilizar 
 * como: autenticação e etc) 
 * 
 * No arquivo database.php temos as configurações de banco de dados. E a primeira coisa é o tipo de conexão que iremos utilizar: pode ser mysql, 
 * postgres, sqlite e etc
 * 
 * Cada um dos tipos de banco de dados, ou seja, para cada valor que passarmos para BD_CONNECTION iremos ter uma conexão possivel previamente
 * definida; para algum banco de dados diferente vamos precisar mexer nas configurações e lidar com código mais denso dentro do 
 * framework ou usar uma biblioteca externa, por exemplo o oracle, não vamos ter de forma padrão o suporte nativo. 
 * 
 * Como vamos configurar para o sqlite, precisamos passar algumas informações, sendo elas: qual é o banco de dados, que por padrão ele esta dentro 
 * de um database_path com um nome 'database.sqlite', ou seja, se dentro do diretório database criarmos um arquivo database.sqlite a configuração 
 * vai esta pronta
 * 
 * OBS: NUNCA COLOQUE CREDENCIAIS, SEJA TOKEN, CHAVE DE ACESSO, OU SENHAS DENTRO DE CÓDIGO. ESSAS INFORMAÇÕES VÃO FICAR EM VARIAVEIS DE AMBIENTE 
 * DO SEU SISTEMA; ELA É BASICAMENTE UM VALOR QUE FICA NO SEU SISTEMA OPERCAIONAL E QUE AS APLICAÇÕES CONSEGUEM LER.
 * 
 * O arquivo .env te permite criar varias variaveis de ambiente e na hora que o framework vai subir, ele pega todas essa variaveis e ler como se 
 * fossem variaveis de ambiente.
 * 
 * Note que no arquivo database.sqlite as variaveis de ambiente estão sendo lidas atraves de env, essa função env ler uma variavel de ambiente e
 * retorna o seu valor. Exemplo: em BD_CONNECTION ele esta lendo a variavel de ambiente chamada BD_CONNECTION, e o valor dela foi definido como
 * sqlite no arquivo .env; se não fosse definido ele utilizaria o valor padrão que é mysql
 */