<?php 
//part 1

// class human {
//     public $color;
//     public $name ;
//     function move(){
//         echo'move ya '.$this->name;
//     }
// }


// $h1 = new human();
// $h1->name='ali';
// $h1->move();


// class person extends human{

//     function passy(){
//         echo 'human is passy ya '.$this->name;
//     }

// }


// class baird extends human{

// }

// $p1=new person();
// $p1->name='maher';
// // $p1->move();
// $p1->passy();


//part2 public , protected ,private (access modifier)


// class human {
//     public $color;
//     // public $name ;
//     // protected $name='toha' ;
//     private $name='abdul' ;
//     function move(){
//         echo'move ya '.$this->name;
//     }
// }


// $h1 = new human();
// $h1->name='ali';
// $h1->move();


// class person extends human{

//     function passy(){
//         echo 'human is passy ya '.$this->name;
//     }

// }


// class baird extends human{

// }

// $p1=new person();
// // $p1->name='maher';
// // $p1->move();
// // $p1->passy();

// $h1 = new human();
// $h1->move();


// part3 encapsolation


// class human {
//     public $color;
//     private $name;

//     function setname($n){
//         $this->name= md5($n);
//     }

//     function getname(){
//         return $this->name ;
//     }

//     function move(){
//         echo'move ya '.$this->name;
//     }
// }


// $b =new human();
// $b->setname('hussin');
// // $b->move();
// echo $b->getname();


//part5 abstraction

// abstract class car{

//     abstract function move();
//     function welcome(){
//         echo 'hello world';
//     }
// }

// class bmw extends car{
//     function move(){
//         echo 'toha';
//     }
// }


// $b1=new bmw();
// $b1->move();
// echo '<pre>';
// $b1->welcome();


//part6 polymorphism


// interface guid {
//     public function help();
// }

// interface car {
//     public function move();
//     public function drive();
// }

// class bmw implements car , guid {
//     function move(){

//     }
//     function drive(){

//     }
//     function help(){
        
//     }
// }

//part7 const  A.M static

class car {
    public static $name ;
    const con ='127.0.0.1';

    public static function move(){
        echo 'move '.self::$name;
        echo'<pre>';
        echo 'the connection ip is '.self::con;
    }
}

car::$name='ali';
// echo car::$name;
car::move();