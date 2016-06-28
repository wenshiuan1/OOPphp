<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>

    <?php
    class Cat
    {
        protected $name;
        protected $position;
        
        public function setName($name)
        {
            $this->name=$name;
        }
        public function getName()
        {
            return $this->name;
        }
       
        
        public function __construct($name)
        {
            $this->name=$name;
            $this->position=['x'=>0,'y'=>0];
            
        }
        public function moveTo($x,$y)
        {
            $this->position['x']=$x;
            $this->position['y']=$y;
            return $this->position;
        }
        
        public function resetPosition()
        {
            $this->moveTo(0,0);
            return $this->position;
        }
        
    }
    
    
    $pet=new Cat('Hello Kitty');
    
    echo $pet->getName();
    
//    echo $pet->name;
    echo "<br>";
//    $pet->name="Hello Kitty";
//    echo $pet->name;
    echo "<br>";
    

    
    
    $movePosition=$pet->moveTo(3,5);
    echo "(".$movePosition['x'].",".$movePosition['y'].")";
    echo "<br>";
//        
//    $movePosition=$pet->resetPosition();
//    echo "(".$movePosition['x'].",".$movePosition['y'].")";
    
    ?>
</body>
</html>