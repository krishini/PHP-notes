<?php
//PUBLIC
//Propiedades y métodos pueden ser accedidos y alterados desde cualquier parte fuera de la clase

//PRIVATE
// solo se pueden ver y modificar dentro de la propia clase - osea, no puedo extenderlas a una clase hijo

class Auto {
    private $ano = 2001;
    private $potencia;

    // se necesita un metodo SETTER public para definir una propiedad private en un objeto. Ej:
    public function setPotencia($potencia) {
        if(!is_numeric($potencia)){
        return 'Potencia no valida : "'. $potencia."\"";
        } else {
        return $this->potencia = $potencia;
        }
    }

    // se necesita un GETTER para poder acceder al valor que tiene establecido la propiedad. Ej:
    public function getAno() {
        return $this->ano;
    }
}


$miAuto = new Auto();
echo $miAuto->setPotencia('muy potente').'<br>';
echo $miAuto->getAno();


//PROTECTED [las clases que se EXTTIENDEN pueden acceder por HERENCIA a protected y public]
//Una clase puede heredar métodos y propiedades de otra clase, y éstos se pueden sobreescribir empleando el mismo nombre que en la clase madre.
//La clase hijo que se extiende puede emplear y modificar las propiedades y métodos PROTECTED y PUBLIC de la madre, *pero no las private*. 

class Coche {
    private $color = 'Negro'; //PRIVATE solo se pueden acceder dentro de la misma clase y con get o set con metodos publicos
    protected $asientos = 4; //se pueden heredar
    protected $kilometraje = 0;
    public $model = 'N/A'; //se pueden heredar
    public $marca = 'Audii';

    public function getColor() {
        return $this->color;
    }
    public function setColor($color) {
        return $this->color = $color;
    }
    //Este metodo me trae el valor definido por default para la propiedad de la clase
    public function getAsientos() {
        return $this->asientos;
      }
    //Este metodo levanta el valor que yo le asigne a la propiedad en mi objeto
    public function setAsientos($asientos) {
        return $this->asientos = $asientos;
    }
    public function getKilometraje(){
        return $this->kilometraje;
    }
    public function setKilometraje($kilometraje) {
        return $this->kilometraje = $kilometraje;
    }
   
    public function printSpecs(){
        
        //para permitir que el objeto pueda usar las propiedades por defecto de la clase, tuve que declararlas en esta funcion publica asi:
        echo '<br><br>Caracteristicas del Automovil:';
        echo '<br>Color: '.$this->getColor($color);
        echo '<br>Asientos: '.$this->getAsientos($asientos);
        echo '<br>Kilometraje: '.$this->kilometraje;
        echo '<br>Modelo: '.$this->model;
        //puedo acceder directamente a marca porque es una propiedad publica
        echo '<br>Marca: '.$this->marca;
    }
}

$cocheStandard = new Coche();
$cocheStandard->printSpecs();

$miCoche = new Coche();
$miCoche->setColor('Rojo');
$miCoche->setAsientos(6);
$miCoche->setKilometraje(200);
$miCoche->model = 'Toro';
$miCoche->marca = 'Fiat';
$miCoche->printSpecs();


class CocheDeLujo extends Coche {
    protected $extras; 
    public function setExtras($extras) {
        return $this->extras = $extras;
    }
    // public function getExtras(){
    //     return $this->extras;
    // }
    public function printSpecs(){
        echo '<br><br>Caracteristicas del Automovil:';
        echo '<br>Color: '.$this->getColor($color);
        echo '<br>Asientos: '.$this->getAsientos($asientos);
        echo '<br>Kilometraje: '.$this->kilometraje;
        echo '<br>Modelo: '.$this->model;
        echo '<br>Marca: '.$this->marca;
        echo '<br>Extras: ' . $this->extras;
        }
 }

$otroCoche = new CocheDeLujo();
$otroCoche->setAsientos('2');
$otroCoche->setExtras ('TV');
$otroCoche->printSpecs();





