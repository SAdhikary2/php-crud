<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    class fruit
    {
        public $name;
        public $cost;

        public function set_Name($name)
        {
            $this->name = $name;
        }

        function __construct($name)
        {
            $this->name = $name;
            echo $this->name;
            echo "<br>";
        }


        public function hello()
        {
            echo "This is the hello function" . "<br>";
        }

        protected function intro(){
            echo "This is an introduction";
        }


        function __destruct()
        {
            echo "The fruit is {$this->name}";
        }



        // public function get_Name(){
        //     return $this->name;
        // }
    }


class strawberry extends fruit{

    function __construct(){
        $this->intro();

    }

    public function message(){
        echo "This is the inheritesd class message ";
        $this->intro();
        
  
    }


    //another option for accessing the protected method in the derived class 

    public function intro()

    {
        echo "This is introduction from <br>";
        parent::intro();
    }
    

}


echo "<br>";
class Goodbye{
    const LEAVING_MESSAGE="Thank You for leaving me !!";

}

echo Goodbye::LEAVING_MESSAGE ."<br>";


//using trait for achieving the multiple inheritence 
trait message1{
    public function msg1(){
        echo" This is a trait function ";

    }
}

class message2{
    use message1;

}

$obj= new message2();
$obj->msg1();

$straw= new strawberry("Apple");

$straw->message();
$straw->hello();
    // $apple = new fruit();
    // $banana = new fruit();

    // $banana->set_Name("Bananan");
    // $a= $banana->get_Name();
    // echo $a ;

    // echo"<br>";


    // $apple->set_Name("Apple") ;
    // echo $apple->get_Name();


    // echo"<br>";


    //to check if an object belongs to an specified class 
    // var_dump($apple instanceof fruit);

    // $kala = new fruit("Kalalkanad");

    // $kala->hello();



    //static method
    class greeting{
        public static function msg3(){
            echo "This is the msg3 function  ";
        }

        public function __construct()
        {
            self::msg3();
        }

    }

    
echo"<br>";
echo"<br>";
    // acessing the static method
    greeting::msg3();



    ?>
</body>

</html>