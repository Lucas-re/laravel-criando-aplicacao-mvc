<?php
/**
 * Um comportamento que esperamos de um controller é que ele receba uma requisição e nos retorne uma resposta.
 * 
 * Por isso que quando criamos uma classe controller no laravel ela ja vem com a classe Request importada
 * use Illuminate\Http\Request;
 * 
 * Dessa forma conseguimos obter varias informações da requisição, por exemplo: pegar a url, detalhes da query string, um input que viria do
 * formulario e etc. E podemos também retornar uma resposta
 * 
 * 
 * # REQUEST
 * Como conseguimos pegar parametros pelo requisição? 
 * No metodo do controle adicionamos adicionamos o pametro (Request $request).
 * Caso queiramos pegar, por exemplo, o id de uma serie, atraves do request, acessamos o metodo get, passando por parametro a chave id. 
 * Exemplo:
 * 
 * public function index (Request $request)
 * {
 *      $request->get('id);
 * }
 * 
 * 
 * # RESPONSE
 * Oque o laravel faz, por baixo dos panos, é pegar o retorno e analisar a melhor forma de transformar isso em uma resposta; seja diretamente como 
 * um texto, no caso de um html ou transformando em Json, no caso de array, objetos 
 * 
 * Poderiamos ter como resposta um redirecionamento. Exemplo:
 * 
 * return response('', 302, ['location' => 'https://www.google.com']); 
 * 
 * ou
 * 
 * 
 * 
 */
