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
class Category  {
    private $id,$name;
    public function __construct($id , $name)
    {
        $this->id = $id;
        $this->name = $name;
    }
    public function getId()
    {
        return $this->id;
    }
    public function getName()
    {
        return $this->name;
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
$category = array(
    new Category(1,"Computer"),
    new Category(2,"Memory"),
    new Category(3,"Card"),
    new Category(4,"Acsesory"),
);

function sortByCategoryName($listProduct,$listCategory)  { 
    $countList = count($listCategory);
    $countProduct = count($listProduct);
    for($i = 0; $i < $countList-1; $i++){
        for($j = $i+1; $j < $countList; $j++){
            if(strcmp($listCategory[$i]->getName(), $listCategory[$j]->getName()) < 0){
                $tmp = $listCategory[$i];
                $listCategory[$i] = $listCategory[$j];
                $listCategory[$j] = $tmp;
            }
        }
    }
    $resultList = array();
    for($j= 0 ; $j < $countList ; $j++)
        for($i = 0 ; $i<$countProduct-1  ; $i++)       
        {
            if($listProduct[$i]->getCategoryId() == $listCategory[$j]->getId())
            {
                array_push($resultList,$listProduct[$i]);
            }
        }
    return $resultList;
}
var_dump(sortByCategoryName($product,$category));

?>
