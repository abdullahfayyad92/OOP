<?php

//part1 overload , override , final

// class car {
//     final function move (){
//         echo 'hi maher';
//     }
// }

// class bmw extends car{
//     function move (){
//         echo 'hi toha';
//     }
// }

// $b1 = new bmw();
// $b1->move();


//part2 magic method , overload with __call

// class person{
//     function __construct($n){
//         echo $n;
//     }
//     function name(){
//         echo ' we need some body to ';
//     }
//     function __destruct()
//     {
//         echo ' end of object';
//     }

// }

// $m =new person('ali');
// $m->name();

//call ex


// class persons{
//     function __call($n, $a){
//         echo 'this method : (' .$n .' ) is not exist';
//         print_r($a);  
//     }

// }

// $m =new persons('ali');
// $m->name(1,2);


//overload  call ex

// class persons{
//     function __call($n, $a){
//         if($n == 'name'){
//             if(count($a) == 1){
//                 return $this->name1($a[0]);

//             }elseif(count($a) == 2){
//                 return $this->name2($a[0],$a[1]);

//             }
//         }
//     }

//     function name1($n){
//         echo $n;
//     }
//     function name2($n,$s){
//         echo $n + $s;
//     }


// }

// $m =new persons('ali');
// $m->name(2);



//part3 get, set


// class person{
//     public function __get($name)
//     {
//         echo 'this var not found '.$name .'(get)';
//     }
//     public function __set($name, $value)
//     {
//         echo 'this var not found '.$name . $value.'(set)';
//     }

// }



// $m = new person();
// $m->color='red';
// echo $m->color;



//part5 trait

// trait pone {
//     public function ponef(){
//         echo 'ponef';
//     }
// }
// trait ptwo {
//     public function ptwof(){
//         echo 'ptwof';
//     }
// }

// class person{
//     use pone , ptwo ;
// }

// $p = new person();
// $p->ponef();
// $p->ptwof();



//part6 namespace

// require_once 'person.php';

// class person{
//     public function welcome(){
//         echo 'welcome';
//     }
// }


// $n = new home\person();
// $n->move();

//part7 mysqli in oop

// $con = mysqli_connect("localhost","root","","fs8_proone");
// $query = "SELECT * FROM `user` ";
// $q= mysqli_query($con,$query);


// $all =[];
// while($d= ( mysqli_fetch_assoc($q))){
//     $all[] = $d;
// }
// echo '<pre>';
// print_r($all);

// $con = new mysqli("localhost","root","","fs8_proone");
// $q =$con->query("SELECT * FROM `user` ");
// $all=[];

// while($d= $q->fetch_assoc()){
//     $all[]=$d;
// }
// echo '<pre>';
// print_r($all);


//part7
// $con = new mysqli("localhost","root","","fs8_proone");
// $q =$con->query("INSERT INTO `user`( `name`, `email`, `password`) VALUES ('abdul','abdul@fah','1234')");

// $res =$con->affected_rows;

// echo $res;

