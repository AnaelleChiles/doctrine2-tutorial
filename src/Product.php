<?php
// src/Product.php
use Doctrine\ORM\Mapping as ORM;
#[ORM\Entity]
#[ORM\Table(name: 'products')]

class Product
{
    #[ORM\Id]
    #[ORM\Column(type: 'integer')]
    #[ORM\GeneratedValue]
    private int|null $id = null;
    #[ORM\Column(type: 'string')]
    private string $name;
// coder ici le getter de l'attribut $id
    public function getId(){
        return $this->id;
    }
// et les getter/setter de l'attribut $name
    public function getName(){
        return $this->name;
    }
    public function setName(string $name){
        $this->name = $name;
    }
}