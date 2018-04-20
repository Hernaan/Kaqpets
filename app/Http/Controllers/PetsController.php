<?php

namespace App\Http\Controllers;
use App\Noticia;
use Illuminate\Http\Request;

class PetsController extends Controller
{
    //
	public function index () {
		return view('pets.index');
	}
	
    public function about () {
    	return view('pets.about');
    }

    public function photo () {
    	return view('pets.photo');
    }

    public function adopcion () {
    	return view('pets.adopcion');
    }

    public function voluntario () {
    	return view('pets.voluntario');
    }

    public function noticia () {
        $noticias = Noticia::all();
        return view('pets.noticia')->with('noticias',$noticias);
    	
    }

    public function contacto () {
    	return view('pets.contacto');
    }
}
