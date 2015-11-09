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

?>