<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SeriesController extends Controller
{
    public function index(Request $request)
    {
        /**
         * pega o parametro id passado pela url
         */
        // return $request->get('id');

        /**
         * pega a url
         */
        // return $request->url();

        /**
         * faz o redirecionamento da pagina colocando o status code
         */
        // return response('', 302, ['location' => 'https://www.google.com']);

        /**
         * faz o redirecionamento de forma simples
         */
        // return redirect('https://www.google.com');
        
        $aSeries = [
            'Suits',
            'Madmen',
            'Smallville'
        ];

        /**
         * temos essa forma de se retorna para uma view
         */
        
        // return view('listar-series', [
        //     'aSeries' => $aSeries
        // ]);

        /**
         * forma mais compacta
         */
        // return view('listar-series', compact('aSeries'));

        /**
         * com o metodo with 
         */
         return view('series.index')->with('aSeries', $aSeries);
        
    }

    public function create()
    {
        return view('series.create');
    }
}
