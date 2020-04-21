<?php
namespace exo;

class Smartphone
{
    private $brand;
    private $model;

    public function __construct($brand, $model)
    {
        $this->brand = $brand;
        $this->model = $model;
    }
    public function sayHello()
    {
        echo "Bonjour ma marque est : " . $this->brand = "Honor" . " et mon modèle est : " . $this->model = "Play";
    }
}

