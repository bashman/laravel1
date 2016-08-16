<?php

namespace Cinema\Http\Controllers;


use Cinema\Http\Requests\Request;

class PruebaController extends Controller
{
    public function index($id){

        return "<h1>Ola k ase, este es prueba controller $id </h1>";
    }
}