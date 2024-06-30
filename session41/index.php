<?php
//part1-2 

// class car{
//     public $color;

//     function move(){
//         echo 'move f'.$this->color;
//     }
// }

// $bmw = new car();
// $bmw2 =new car();
// var_dump($bmw2); 
// $bmw->move();
// $bmw->color = ' red';
// echo $bmw->color; 
// $bmw->move();
// echo '<pre>';
// $bmw2 =new car();
// $bmw2->color ='green';
// echo $bmw2->color; 
// $bmw2->move(); 


//part1-5

// class pro{
//     public $sql = "select * From `userportfolio`";
//     public $con;
//     function connect(){
//         return  mysqli_connect("localhost","root","","fs8_proone");

//     }

//     function GetProtofolios(){
        
//         echo '<pre>';
        
//         $q = mysqli_query($this->connect(),$this->sql);
    
//         $projects = [];
    
//         while($res =  mysqli_fetch_assoc($q)){
//             $projects[] = $res;
//         }
    
//         return $projects;
//     }

// }

// $pro = new pro();
// $pro->GetProtofolios();
// var_dump($pro->GetProtofolios());

//part1-6  magic methods


// class select{

//     // public $ss ;
//     function connect(){
//         return mysqli_connect("localhost","root","","fs8_proone");
//     }

//     function GetProtofolioById($ss){ 
    
//         $sql = "select * From `$ss`";
//         $q = mysqli_query($this->connect(),$sql);
    
    
//         $res =  mysqli_fetch_assoc($q);
    
//         return $res;
//     }
// }

// $c = new select();
// // $c->ss='protofolio';
// var_dump($c->GetProtofolioById('protofolio'));

// function getuser(){
//     $c = new select();
//     var_dump($c->GetProtofolioById('user'));
// }


// class car{
//     function __construct(){
//         echo 'ali';
//     }
// }

// $s = new car();

class car{
    function __construct($aa){
        echo $aa;
    }
}

$s = new car('maher adel');
























