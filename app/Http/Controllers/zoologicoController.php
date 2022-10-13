<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;





class zoologicoController extends Controller
{
    public function principal(){

        echo"MENU, ELIGE UN ANIMAL";
        echo"";
        echo '<img src="data:image/jpeg;base64,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">';

        echo '<a href="http://127.0.0.1:8000/zoologico/raton">'."Raton".'</a></a>';

        echo '<a href="http://127.0.0.1:8000/zoologico/chivo">'."Chivo".'</a></a>';

        echo '<a href="http://127.0.0.1:8000/zoologico/perro">'."Perro".'</a></a>';

    }

    public function raton(){
        echo"RATON";
        echo '<img src="https://th.bing.com/th/id/OIP.v8qy-Z1alFOsgycPyS83AgHaEW?w=261&h=180&c=7&r=0&o=5&pid=1.7">';
        echo '<a href="http://127.0.0.1:8000/zoologico">'."PRINCIPAL".'</a>';

        echo '<a href="http://127.0.0.1:8000/zoologico/raton">'."Raton".'</a></a>';

        echo '<a href="http://127.0.0.1:8000/zoologico/chivo">'."Chivo".'</a></a>';

        echo '<a href="http://127.0.0.1:8000/zoologico/perro">'."Perro".'</a></a>';



    }
    public function chivo(){
        echo"CHIVO";
        echo '<img src="https://diariobitcoin.b-cdn.net/wp-content/uploads/2021/06/chivo-wallet-unsplash.jpg">';
        echo '<a href="http://127.0.0.1:8000/zoologico">'."PRINCIPAL".'</a>';
        echo '<a href="http://127.0.0.1:8000/zoologico/raton">'."Raton".'</a></a>';
        echo '<a href="http://127.0.0.1:8000/zoologico/chivo">'."Chivo".'</a></a>';
        echo '<a href="http://127.0.0.1:8000/zoologico/perro">'."Perro".'</a></a>';
    }
    public function perro(){
        echo"PERRO";
        echo '<img src="http://c.files.bbci.co.uk/48DD/production/_107435681_perro1.jpg">';
        echo '<a href="http://127.0.0.1:8000/zoologico">'."PRINCIPAL".'</a>';
        echo '<a href="http://127.0.0.1:8000/zoologico/raton">'."Raton".'</a></a>';
        echo '<a href="http://127.0.0.1:8000/zoologico/chivo">'."Chivo".'</a></a>';
        echo '<a href="http://127.0.0.1:8000/zoologico/perro">'."Perro".'</a></a>';
    }

}
