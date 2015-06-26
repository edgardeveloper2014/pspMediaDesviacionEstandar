<?php

/*
 centro de gestion de mercados,logistica y tecnologias de la información
 
  Módulo: PSP
  author Edgar Duarte
  author edgarduarte18@misena.edu.co
  Función de la Clase: crear los calculos correspondientes para el calculo de la media y desviacion estandar .
  Fecha de Codificación: 26 de junio del 2015
 */
class Media {
    //atributos de la clase
    public $numeros;
    public $cantidad;
    public $suma;
    public $media;
    public $varianza;
    public $desviacion;
    
    // funcion constructora para calcular la media
    function __construct($numero) {
        $this->numeros = $numero;
        $this->cantidad = count($this->numeros);
        $this->suma = array_sum($this->numeros);
        if ($this->cantidad > 0){
           $this->media = $this->suma / $this->cantidad; 
        }
        else{
           $this->media = NULL;
        }
            
    }
    // eleva al cuadrado y resta el numero con la media para calcular la varianza
    function elevarCuadrado($numeroIndice) {
        return pow($this->numeros[$numeroIndice] - $this->media, 2);
    }
    // calcula la desviacion estandar 
    function CalcularDesviacionEstandar() {
        try {
            $this->varianza = 0;
            for ($numero = 0; $numero < $this->cantidad; $numero++) {
                $this->varianza = $this->varianza + $this->elevarCuadrado($numero);
                $this->desviacion = sqrt($this->varianza / $this->cantidad);
            return array($this->cantidad, $this->suma, $this->media, $this->varianza, $this->desviacion);
            }
            
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }
    
    
}
