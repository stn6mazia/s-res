<?php

class GeriatriaController extends Controller
{
    public function index()
    {
        $this->title = "Prontuário Digital | Operações";

      
        $this->loadView('geriatria.index');
    }
    
     public function formulario()
    {
        $this->title = "Prontu�rio Digital | Opera��es";

      
       $this->loadView('geriatria.formulario', ['up'=>'../']);
    }

  
}
