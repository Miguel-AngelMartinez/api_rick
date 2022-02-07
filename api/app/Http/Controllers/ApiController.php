<?php

namespace App\Http\Controllers;
use resource\views\index;
use resource\views\inicio;
use resource\views\jalar2;

use Illuminate\Http\Request;
use phpDocumentor\Reflection\Types\This;


class ApiController extends Controller
{
    public function jalar(){
        $cliente = new \GuzzleHttp\Client();
        $response = $cliente->request('GET', 'https://rickandmortyapi.com/api/character/?page=1');
        $resultado = json_decode($response->getBody()->getContents(), true);
        $personajes = [];
        foreach ($resultado['results'] as $personaje) {
            $personajes[] = [
                'id' => $personaje['id'],
                'nombre' => $personaje['name'],
                'imagen' => $personaje['image'],
                'especie' => $personaje['species'],
                'genero' => $personaje['gender'],
                'origen' => $personaje['origin']['name'],
                'estado' => $personaje['status'],
                'episodios' => $personaje['episode'],
                'created' => $personaje['created'],
            ];
        }
        $random1 = random_int(1,5);
        $random2 = random_int(5,10);
        $random3 = random_int(10,15);
        $random4 = random_int(15,20);
        return view('inicio',['personajes' => $personajes, 'random1' => $random1, 'random2' => $random2, 'random3' => $random3, 'random4' => $random4]);
        
    }
    public function jalar2(){

        $cliente = new \GuzzleHttp\Client();
        $response = $cliente->request('GET', 'https://rickandmortyapi.com/api/character/?page=1');
        $resultado = json_decode($response->getBody()->getContents(), true);
        $personajes = [];
        foreach ($resultado['results'] as $personaje) {
            $personajes[] = [
                'id' => $personaje['id'],
                'nombre' => $personaje['name'],
                'imagen' => $personaje['image'],
                'especie' => $personaje['species'],
                'genero' => $personaje['gender'],
                'origen' => $personaje['origin']['name'],
                'estado' => $personaje['status'],
                'episodios' => $personaje['episode'],
                'created' => $personaje['created'],
            ];
        }

        $id=request("id");
        $nombre=request("nombre");
        $imagen=request("imagen");
        $especie=request("especie");
        $genero=request("genero");
        $estado=request("estado");
        $random1 = random_int(1,5);
        $random2 = random_int(5,10);
        $random3 = random_int(10,15);
        $random4 = random_int(15,20);
        return view('jalar2',['personajes' => $personajes,'id' => $id, 'nombre' => $nombre, 'imagen' => $imagen, 'especie' => $especie, 'genero' => $genero, 'estado' => $estado,'random1' => $random1, 'random2' => $random2, 'random3' => $random3, 'random4' => $random4]);
    }
    
    }

    



