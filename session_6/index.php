<?php

// echo "welcome";

// $x = 20;   // int x = 20 

// echo $x ;


// $username = "eslam";

// // echo gettype($username);
// var_dump($username);



// $y = '10' + 20 ;
// echo $y ;

// $z = (int)"marwa" + 10 ;  //0+10 10
// echo $z ;


// $age = 20 ;
// $gender = 'male';
// if($age >= 18){
//     echo "enter";
//     if($gender == 'male'){
// echo "login";
//     }
// }
// else{
//     echo "invalid";
// }
//////////////////////////////////////////////

// $favColor = 'red';

// if($favColor== 'white'){
//     echo "my fav_color white";
// }
// elseif($favColor== 'green'){
//     echo "my fav_color green";
// }

// elseif($favColor== 'red'){
//     echo "my fav_color red";
// }
// else{
//     echo "not valid";
// }

////////////////////////////////////////////////

// $favColor = 'red'; 

// switch($favColor ){
// case 'white':
//   echo "my fav_color white"; 
//   break ;  


//   case 'green':
//    echo "my fav_color green"; 
//    break ;


//   case 'red':
//    echo "my fav_color red"; 
//    break ;

//    default:
//     echo "not valid";


//}


////////////////////////////////////////////////////////////////////

// for($i = 0 ;  $i<10  ; $i++ ){
// echo "hello <br>";
// }
// $i = 0 ;
// while(  $i<10   ){
// echo "hello <br>";
//  $i++;
// }

// $i = 0 ;
// do{
// echo "hello <br>";
//  $i++;
// }
// while(  $i<10   );








///////////////////////////////////////////////////////////////////////////////////////////////////
/************************************ Array  ***************************************** */
/**
 * 1-index
 *2- assoc
 * 3-- Multi diminutions array
 */



//  $student = 'ahmed';
//  $student1 = 'mohmaed';
//  $student1 = 'mohmaed';
//  $student1 = 'mohmaed';
//  $student1 = 'mohmaed';
//  $student1 = 'mohmaed';
//  $student1 = 'mohmaed';


// $students = array();
// $students = [];
// echo gettype($students);


//              0           1       2            3      4       5      6   7
//  $students = ['ahmed' , 'mohmed' , 'zain' , 'malik' , 'nour' , 10 , 20 ];
// echo count($students) ;
// echo "<pre>";
// print_r($students[0]) ;

// echo $students[0] ."<br>";
// echo $students[1] ."<br>";
// echo $students[2] ."<br>";
// echo $students[3] ."<br>";
// echo $students[4] ."<br>";
// echo $students[5] ."<br>";


// for($i = 0 ; $i<count($students) ; $i++){
//     echo $students[$i] . "<br>";
// }

////////////////////////////////////////////////////////////////////

// foreach($students as $student){
//    echo  $student ."<br>";
// }

/////////////////////////////// assoc Array  ///////////////////////////////////

// $persons =[
// // key       value   
// 'name' => 'ahmed' ,
// 'age' => 20 ,
// 'gender' => 'male' ,
// 'title'=> 'Doctor'

// ];
// echo "<pre>";
// // print_r($persons['name']);
// // echo $persons['name'];
// // echo $persons['age'];
// // echo $persons['title'];

// // for($i =0 ; $i<5 ; $i++){
// //     echo $persons[$i];
// // }

// foreach($persons as $person_k => $person_v){
    
//   echo "$person_k: $person_v <br>";

// }




/////////////////////////////////////   Multi diminutions array  ////////////////////////////////////////////////////////

// $persons = [
// //  0      1           2
// ['ahmed' , 'nour' , 'green'] , //index 0
//   ['malik' , 'mody' , 'reed'] , //index 1
//   ['mohamed' , 'rah' , 'white'] , //index 2

  
// ];
// echo "<pre>";
// print_r($persons[2][0]);


/////////////////////////////////////////////////////////
// $persons = [
//          //  0      1           2
// 'a' => ['ahmed' , 'nour' , 'green'] , //index 0
// 'b' =>  ['malik' , 'mody' , 'reed'] , //index 1
// 'c' => ['mohamed' , 'rah' , 'white'] , //index 2

  
// ];


// echo "<pre>";
// print_r($persons['b'][0]);

//////////////////////////////////////////////////////

// $persons = [
//          //  0      1           2
// 'a' => ['name' =>  'ahmed' ,'age' => 20 , 'favColor' => 'green'] , //index 0
// 'b' =>  ['name'  => 'malik' ,'age' => 10 ,'favColor' =>  'reed'] , //index 1 
// ];
// // echo "<pre>";
// // print_r($persons['a']['name']);

// foreach($persons as $person => $value){
// //    print_r($persons);
// // echo "$person : $value";

// foreach($value as $k=>$v){
//     echo "$k : $v <br>"; 
// }

// }







/////////////////////////////////////////////////////////////////////
/*********************************** Pass By Value & reference **************************************/


// $x = 20 ;
// echo $x ."<br>";  //20

// $y = &$x ;
// echo $y ."<br>";  //20


// $x = 30 ;
// echo $x ."<br>";    //30
// echo $y ."<br>";    



/////////////////////////////////////////////////////////////////////////////////////////////
/***************************************    Functions    re-use         ********************************************* */


// function calc($rev=500 , $exp=100 ,$taxesRate=0.14 , $otherEsp=10 ){

// $income = $rev-$exp;
// $incomeWithTaxes = $income*$taxesRate ;
// $incomeAfterTaxes = $income-$incomeWithTaxes ;
// $total = $incomeAfterTaxes - $otherEsp ;
// echo $total ;

// }













// function calc($rev=800 , $exp=100 ,$taxesRate=0.14 , $otherEsp=5 ){

// $income = $rev -$exp ;
// $incomeWithTaxes = $income  * $taxesRate ;
// $incomeAfterTaxes = $income - $incomeWithTaxes;
// $total = $incomeAfterTaxes  - $otherEsp  ;
// echo $total ;

// }

// calc(400 , 10 , 0.14 , 2);
// echo "<br>";

// calc(700 , 100 , 0.14 , 10 );
// echo "<br>";

// calc(600 , 20 , 0.14 , 20);
// echo "<br>";

// calc(taxesRate:0.15);
// echo "<br>";




///////////////////////////////////////////////////////////////////////
/** 
 * void
 * return
 */

// function sum($a ,$b){   //void
//     $result = $a +$b ;
//     echo $result ;
// }
// $x =  sum(10,20);  //30
// echo $x +50 ;


// function greet($name){
//     echo "PHP";
//     return "Hello $name" ;

// }
// $username =  greet('mohamed');
// echo $username . " hi php nti" ;
// // function greet($name){  
// //     return "Hello $name" ;
// // }
// echo  greet('mohmed');
//     //  gettype($x);





/////////////////////////////////////////////////
/**
 * write function takes an array [1,2,3,8,5]  return total 
 * 
 */
// $arr = [4,5,8,6,9];

// function sumArray($arr){
// $sum = 0;

// for($i=0 ; $i<count($arr) ; $i++){
//       $sum += $arr[$i]; 
// }
// return $sum;
// }
// echo sumArray($arr);

////////////////////////////////////////////////////////////////////////
/***************************  Scope   ************************* */
/**
 * Global
 * Local
 */

// $x = 20;   //Global
// echo $x ."<br>" ;

// function sum(){
// $y = 10 ;    //local 
// $y++ ;
// echo $y  ;  //11
// echo "<br>";
// //echo $a ;  //20
// global $x ;
// echo $x;
// }
// sum() ;  //11
// echo "<br>";
// // sum() ;  // 11





///////////////////////////////////////////////////////////////////////////
  /********************** static Scope   **************************** */

//   function age(){
//    static  $y = 10 ;
//     $y++ ;
//     echo $y  ;

//   }

//   age();  
//   echo "<br>";        //11

//   age() ;
//   echo "<br>";       //12


//     age() ;
//   echo "<br>";       //13


// function trackVisit(){
//     static $count = 0;
//     $count ++;
//     echo $count ;
// }
// trackVisit();
//  echo "<br>";
// trackVisit();
//  echo "<br>";
// trackVisit();
//  echo "<br>";


///////////////////////////////////////////////////////////////////////////////////
/******************************* Constant *************************************/
// const NAME = "marwa";  //php8
// define('x' , 20);

// const NAME = "Zoona" ;   //GLOBAL

// function greet(){
//     echo "welcom ". NAME;
// }
// greet();



// 

//const NAME = "zain";  //php8

// define('x',10);








////////////////////////////////////////////////////////////////////////////////////////////////
/******************************* Super Global Variable ************************************** */

// $x = 20;
// print_r($GLOBALS);

// echo  $GLOBALS['x'];


// function calc(){
// echo  $GLOBALS['x'];
// }
// calc(); 



/**
 * GET   url
 * POST  body
 */

// print_r($GLOBALS);
//    http 



// echo "welcome";

// print_r($_GET);

// echo "Welcome ". $_GET['username'];

//  print_r($_POST);

// echo "Welcome ". $_POST['username'];

// $arr = [
//     'username'=>'marwa',
//     'password'=>'123456'
// ];




// if(isset($_POST['submit'])){

// $username =  $_POST['username'] ;
// $password =  $_POST['password'] ;


//  if($username == $arr['username'] && $password == $arr['password'] ){
//         header('location:welcome.php');
//         exit();
//  }
//  else{
//     echo "not valid data";
//     // header('location:form.php');
//     // exit();
// }

// }


// else{
//     echo "login first";
//     header('location:form.php');
//     exit();
// }


//////////////////////////////////////////////////////////
/**
 * cookies
 * sessions
 */


// $username =  $_POST['username'] ;
// $password =  $_POST['password'] ;

// setcookie('user_name',$username, time()+60 );
// setcookie('password',$password, time()+60 );


// echo "welcome ". $_COOKIE['user_name'];





if(isset($_POST['submit']) == true){
$username =  $_POST['username'] ;
$password =  $_POST['password'] ;


if(isset($_POST['remember_me']) && $_POST['remember_me'] == true){
    setcookie('user_name',$username, time()+60 );
    setcookie('password',$password, time()+60 );

}

}
else{
    echo "login";
}