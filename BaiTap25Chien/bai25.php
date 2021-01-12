<?php

  class CreateStack {
    public $top;
    public $stack = array();

    function __construct() {
      $this->top = -1;
    }

    public function size()
    { 
       return $this->top+1;
    }

    
    public function push($x)
    {
      $this->stack[++$this->top] = $x;
    }
    public function show()
    {
      foreach($this->stack as $key => $value)
      {
          print($value . "  ");
      }
    }

  }
 
$MyStack = new CreateStack();
$MyStack->push(10);
$MyStack->push(20);
$MyStack->push(30);
$MyStack->push(40);
$MyStack->show();

?>