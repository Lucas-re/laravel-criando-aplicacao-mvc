<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SeriesController extends Controller
{
    public function index(Request $request)
    {
        // return $request->get('id');
        // return $request->url();
        // return response('', 302, ['location' => 'https://www.google.com']);
        // return redirect('https://www.google.com');
        
        $aSeries = [
            'Suits',
            'Madmen',
            'Smallville'
        ];

        $html = '<ul>';

        foreach($aSeries as $serie){
            $html .= "<li>$serie</li>";
        }
        $html .= '</ul>'; 

        return $html;
    }
}
