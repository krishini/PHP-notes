<?php

//creando una clase con sus atributos y metodos [la clase es un molde que sirve para luego crear un objeto real]
    class Persona {

        //Atributos 
        //las propiedades o atributos pueden tener valores por defecto:
        public $nombre = "Pedro";

        //Metodos
        public function hablar($mensaje){
            echo $mensaje;
        }
    }

    class Coche {
        public $dueno;
        public $color;
        public $ano;
        public $marca;
        public $model;
        public function getOwner(){
            return $this->dueno;
        }
        public function getColor() {
            return $this->color;
        }
        public function getYear(){
            return $this->ano;
        }
        public function getMarca(){
            return $this->marca;
        }
        public function getModel(){
            return $this->model;
        }
        public function masNuevo($autoParaComparar) {
            if ($autoParaComparar->ano > $this->ano) {
                echo 'El ' . $autoParaComparar->marca .' de '.$autoParaComparar->dueno.' es más nuevo<br>';
            } else {
                echo 'El ' . $this->marca . ' de '.$this->dueno.' es más nuevo<br>';
            }
        }
    }

//a esta funcion le voy a pasar el auto que yo quiera para que me imprima todas las caracteristicas de mi auto
    function printSpecs($autoX){
        echo "Color: ".$autoX->getColor();
        echo "<br>";
        echo "Año: ".$autoX->getYear();
        echo "<br>";
        echo "Marca: ".$autoX->getMarca();
        echo "<br>";
        echo "Modelo: ".$autoX->getModel();
        echo "<br>";
        echo "Dueño: ".$autoX->getOwner();
        echo "<br><br>";
    }
//ATRIBUTOS
//simples variables o arrays
//pueden ser public, private o protected

//METODOS
//los metodos tb pueden ser public, private o protected
//accede a atributos con $this->nombre
//podemos acceder a otros metodos de la misma clase con $this o self::

//para crear un objeto hay que instanciar una clase
//instanciando una clase para crear un objeto
//tengo que usar -> para extraer el atributo o metodo de la clase y traerlo al objeto
 

    $miAuto = new Coche();
    $miAuto->dueno = "Lucila Belen Pésaro";
    $miAuto->color = "Rojo Fuego";
    $miAuto->ano =  2021;
    $miAuto->marca = "Fiat";
    $miAuto->model = "Toro";

    echo printSpecs($miAuto);

    $otroAuto = new Coche();
    $otroAuto->dueno = "Farvicio Igua";
    $otroAuto->color = "verde";
    $otroAuto->ano = 1999;
    $otroAuto->marca = "Honda";
    $otroAuto->model = "CR-V";

    echo printSpecs($otroAuto); 

    $otroAutoMas = new Coche();
    $otroAutoMas->dueno = "Luis Igua";
    $otroAutoMas->color = "Azul cop";
    $otroAutoMas->ano = 2015;
    $otroAutoMas->marca = "Ford";
    $otroAutoMas->model = "Ranger";

    echo printSpecs($otroAutoMas); 
    $miAuto->masNuevo($otroAuto);

    $persona = new Persona();
    echo $persona->nombre;
    $persona->hablar(": este es mi mensaje<br><br>");
    echo "mi auto es color ".$miAuto->color."<br>";
    echo "mi auto es color ".$miAuto->getColor()."<br>";
   
//     Anteriormente hemos definido todas las propiedades y métodos como public. 
//Esto significa que pueden ser accedidos y alterados desde cualquier parte fuera de la clase. 
//En el ejemplo anterior hemos podido definir $miCoche->potencia sin ningún problema, y podríamos aplicarle cualquier valor (un número, un string...).
// Cuando se define una propiedad como private, se indica que ésta no puede verse o modificarse a no ser que sea desde la propia clase. 
//Si utilizamos $miCoche->potencia para verla o definirla, nos dará error. Si queremos definirla, se utiliza un setter, 
//un método public para definir una propiedad private:

//https://diego.com.es/programacion-orientada-a-objetos-en-php

?>