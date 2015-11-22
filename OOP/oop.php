<?php
class A
{
    public $a = 'a';
    protected $b  = 'b';
    private $c = 'c';
    
    public function x ()
    {
      echo $this->c;
    }
      
      
    public function b()
    {
      echo $this->b;
    }
}

class B extends A
{
  private $c = 'ca';
  
  public function x ()
    {
      echo $this->c;
    }
}

$a = new A;
$b = new B;

// echo $a->a . $b->b;
// $a->x();
$b->x();


?>