<?php

class CreateQueue {
  public $front;
  public $rear;

  public $queue = array();

  function __construct() {
    $this->rear = -1;
    $this->front = -1;
  }
 
  public function size()
  {
     return ($this->rear - $this->front);
  }
  public function push($x)
  {
    $this->queue[++$this->rear] = $x;
    echo $x." đã được thêm vào. \n";
  }
  public function show()
  {
      foreach($this->queue as $key => $value)
      {
            print($value . " ");
      }
  }
  

  
}
$MyQueue = new CreateQueue();
$MyQueue->push(10);
$MyQueue->push(20);
$MyQueue->push(30);
$MyQueue->push(40);
$MyQueue->show();

?>