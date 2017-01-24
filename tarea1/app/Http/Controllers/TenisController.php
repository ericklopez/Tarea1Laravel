<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TenisController extends Controller
{
    public function index(){
    	return view ('tenis.index');
    }

    /**
	*Retorna el formulario de creación de un nuevo tenis
    */
    public function create(){
    	$validator = Validator::make(Input::all(), Tenis::$rules);
    	if($validator->pases()){
    		$tenis = new Tenis;
    		$tenis->marca = Input::get('marca');
    		$tenis->numero = Input::get('numero');
    		$tenis->color = Input::get('color');
    		$tenis->save();
    		return Redirect::to('tenis/list')->with('message','Tenis registrado!');
    	}else{
    		return Redirect::to('clients/')->with('message', 'Ha ocurrido un error!')->withErrors($validator)->withInput();
    	}
    }

    public function listTenis(){
    	$dats = Tenis::all();
    	return View::make('tenis.list',arra('datos'=>$datos));
    }
}
