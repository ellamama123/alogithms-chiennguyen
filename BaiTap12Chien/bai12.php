<?php 

class Product {
    private $name,$price,$quality,$categoryId;
    public function __construct($name,$price,$quality,$categoryId)
    {
        $this->name = $name;
        $this->price = $price;
        $this->quality = $quality;
        $this->categoryId = $categoryId;
    }
    public function __construct1()
    {
        $this->name = '';
        $this->price = 0;
        $this->quality = 0;
        $this->categoryId = 0;
    }
    public function getName()
    {
        return $this->name;
    }
    public function getPrice()
    {
        return $this->price;
    }
    public function getQuality()
    {
        return $this->quality;
    
    }
    public function getCategoryId()
    {
        return $this->categoryId;
    }
    public function show()
    {
        print( 'Name : ' . $this->name . '  Price : '. $this->price . '  Quality : '. $this->quality . '   CategoryID : ' . $this->categoryId . '<br/>');
    }
    

}
$products = array(
    new Product("CPU",750,10,1),
    new Product("RAM",50,2,2),
    new Product("HDD",70,1,2),
    new Product("Main",400,3,1),
    new Product("Keyboadrd",40,8,4),
    new Product("Mouse",25,50,4),
    new Product("VGA",60,3,3),
    new Product("Monitor",120,28,2),
    new Product("Case",120,28,5),
);
function sortByName($listProduct)  { 
    $countList = count($listProduct);
    for ($i = 0; $i < $countList; $i++)
    {       
        $loop = $i; 
        $current = $listProduct[$i];
        while($loop > 0 && (strlen($listProduct[$loop - 1]->getName()) < strlen($current->getName())))
        {
            $listProduct[$loop] = $listProduct[$loop - 1];
            $loop -= 1;
        }
  
        $listProduct[$loop] = $current;
    }
  
    return $listProduct;
}
var_dump(sortByName($products));

?>
