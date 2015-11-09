<?php

class Circle
{
  protected $_square;
  protected $_perimetr;

  /**
   * @return mixed
   */
  public function getSquare()
  {
    return $this->_square;
  }

  /**
   * @param int $param
   * @throws Exception
   */
  public function setSquare($param)
  {

    if (is_int($param))
    {
      $this->_square = M_PI * pow($param, 2);
    } else
    {
      throw new Exception('$param is not integer type');
    }
  }

  /**
   * @return mixed
   */
  public function getPerimetr()
  {
    return $this->_perimetr;
  }

  /**
   * @param int $param
   * @throws Exception
   */
  public function setPerimetr($param)
  {
    if (is_int($param))
    {
      $this->_perimetr = 2 * M_PI * $param;
    } else
    {
      throw new Exception('$param is not integer type');
    }
  }

}

class Square extends Circle
{
  /**
   * @param int $param
   * @throws Exception
   */
  public function setSquare($param)
  {
    if (is_int($param))
    {
      $this->_square = pow($param, 2);
    } else
    {
      throw new Exception('$param is not integer type');
    }
  }

  public function setPerimetr($param)
  {
    if (is_int($param))
    {
      $this->_perimetr = ($param + $param) * 2;
    } else
    {
      throw new Exception('$param is not integer type');
    }


  }
}

class Rectangle extends Square
{

  /**
   * @param int $param
   * @param int $param2
   * @throws Exception
   */
  public function setSquare($param, $param2)
  {
    if (is_int($param) || is_int($param2))
    {
      $this->_square = $param * $param2;
    } else
    {
      throw new Exception('$param or $param2 are not integer type');
    }
  }


  /**
   * @param int $param
   * @param int $param2
   * @throws Exception
   */
  public function setPerimetr($param, $param2)
  {
    if (is_int($param) || is_int($param2))
    {
      $this->_perimetr = ($param + $param2) * 2;
    } else
    {
      throw new Exception('$param or $param2 are not integer type');
    }


  }

}


$b = new Circle;
$b->setSquare(5);
$b->setPerimetr(5);
var_dump($b->getSquare());
var_dump($b->getPerimetr());
$a = new Square;
$a->setSquare(5);
$a->setPerimetr(5);
var_dump($a->getSquare());
var_dump($a->getPerimetr());
$c = new Rectangle;
$c->setPerimetr(5,3);
$c->setSquare(5,3);
var_dump($c->getPerimetr());
var_dump($c->getSquare());
?>