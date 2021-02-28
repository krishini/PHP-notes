<?php

class listaDePersonas {

    //Atributos
    public $nombre = [];
    public $apellido = [];
    //estoy haciendo que nombre y apellido sean arrays

    //Metodos 
    public function guardar($nombre, $apellido){
        //la pallabra reservada this hace referencia a un atributo o un metodo
        //quiero guardar en el array nombre lo que estoy recibiendo como parametro en este metodo que seria la variable nombre
        $this->nombre[] = $nombre;
        $this->apellido[] = $apellido;

    }
    public function mostrar(){
        //count va a devolver el numero de elementos que contiene nuestro array
        //para acceder a un atributos desde un metodo tengo que usar $this->nombre
        for($i = 0; $i < count($this->nombre); $i++) {
        // la linea de abajo es para pasarle a la funcion que tengo abajo los nombre y apellidos que tengo
        $this->formato($this->nombre[$i], $this->apellido[$i]);
        }
    }
    //como llamar aun metodo dentro de otro metodo
    public function formato($nombre, $apellido){
            echo 'Nombre Completo: '.$nombre.' '.$apellido.'<br>';

    }
}

//instanciando una clase para crear un objeto
//new nombredelaclase() lo guardo dentro de mi variable / objeto
//luego voy llamando con -> a los metodos o atributos que quiero llamar y guardar en mi variable / objeto

    $persona = new ListaDePersonas();
    $persona->guardar('Lucila', 'Pesaro');
    $persona->guardar('Uriel', 'Miguens');
    $persona->guardar('Carla', 'Kalo');
    $persona->guardar('Mauricio', 'Marqui');
    $persona->mostrar();
?>