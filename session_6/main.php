<?php


// echo "Hello World <br>";



// echo "marw  <br>";
// echo "marw  <br>";
// echo "marw <br>";
// echo "marw <br>";
// echo "marw <br>";
// echo "marw  <br>";
// echo "marw <br>";


/////////////////////////////////////////////////////////////
/*     variables
strongly type    int x = 5  string name= "marwa"
loosely php js    $name="marwa"    $x=10
*/

// echo 5+5 ;


// $x = 10 ;   //integer
// $x = "malik";  //string

// // echo $x+20 ."<br>";

// echo gettype($x) ."<br>";


// $user_name = "mohamed";
// echo $user_name ."<br>";

// echo gettype($user_name) ."<br>";

/**          Datatype     */

/**
 * number    $age =20 
 * float   $money = 15.5
 * boolean  $active = true
 * object  $color ={}
 * array   $friends = []
 * resource
 */


// $txt = "W3Schools.com";
// echo 'I love !'.$txt;


// $x = 5;
// var_dump($x);


// $cars = array("Volvo","BMW","Toyota");
// var_dump($cars);






/////////////////////////////////////////////////////////////////////////////////
/*  Casting
*1-automatic casting 
*2-manual casting
*/

// $num = "5" + 5 ;  //5+5 = 10     55 
// echo $num;


// $number = (int)"marwa" + 5 ;   // 0+5 => 5
// echo $number ;


// $number = (int)15.5 +15 ;
// echo $number ;


// $number = 15.5  . 15 ;
// echo $number ;



/////////////////////////////////////////////////////////////////////////////////////////////
/**If statement */

// $age = 10 ;
// $gender = "male";

// if($age >= 18){
//     echo "you can register <br>";
//     if($gender == "female"){
//     echo "welcome <br>";
// }
// }

// else{
//     echo "kkk";
// }

// if($age > 18){
//     echo "you can register";
// }else{
//     echo "sorry you can`t";
// }




/****short if */
// $x =   $age > 18 ? "you can register" : "sorry you can`t" ;
//   echo $x ;









// $age = 10 ;
// $gender = "male"; 
// if($gender == "female"){
//     echo "welcome";
// }else{
//     echo "invalid";
// }

// if(""){
//     echo "enter";
// }
/**
 * ""  ||  ''   false   0
 * " "  || ' ' true
 * 
 */




// $age = 10 ;
// $gender = "male"; 
// if($gender = "female"){
//     echo "welcome";
// }else{
//     echo "invalid";
// }

/**
 * = assignment
 * ==   value
 * === vale datatype
 */

// $x = 10 ;  //int
// $y = "10";  //string

// if($x === $y){
//     echo "equal";
// }
// else{
//     echo "not equal";
// }


$age = 20;
$gender = "male";
$is_active = true;
//    true   &&    false =>false          &&   true   =>  false
// if($age > 15 && $gender == "female" && $is_active == true){
//     echo "enter";
// }

//     true   || false => true    || true  =>true
//     true   || false => true    || false  =>true
// if($age > 15 || $gender == "female" || $is_active == false){
//     echo "enter";






//     $a = 5;
// //   false   ||   false||   false||   true   ||   false ||  false    =>true
// if ($a == 2 || $a == 3 || $a == 4 || $a == 5 || $a == 6 || $a == 7) {
//   echo "$a is a number between 2 and 7";
// }





$day = 1;
// if ($day == 1) {
//     echo "Saturday";
// } elseif ($day == 2) {
//     echo "sunday";
// } elseif ($day == 3) {
//     echo "monday";
// } elseif ($day == 4) {
//     echo "thursday";
// } elseif ($day == 5) {
//     echo "wednesday";
// } elseif ($day == 6) {
//     echo "tu";
// } elseif ($day == 7) {
//     echo "fri";
// } else {
//     echo "invalid";
// }


/////////////////////////////////////////
/**Switch */

// switch ($day) {
//     case 1:
//         echo "Saturday";
//         break;

//     case 2:
//         echo "sunday";
//         break;


//     case 3:
//         echo "monday";
//         break;


//     case 4:
//         echo "thursday";
//         break;


//     case 5:
//         echo "wednesday";
//         break;

//     case 6:
    
//         echo "tu";
//         break;
//     case 7:
//         echo "fri";
//         break;

//     default:
//         echo "invalid";
// }




// $fruit = 'tomato';

// switch($fruit){
//     case "apple" :
//         echo "this ia a Fruit" ;
//         break ; 

//           case "orange" :
//         echo "this ia a Fruit" ;
//         break ; 

//           case "carrot" :
//         echo "this ia a vegetable" ;
//         break ; 

//           case "tomato" :
//         echo "this ia a vegetable" ;
//         break ; 

//         default :
//         echo "invalid";

// }

/**DRY   don`t repeat your self */

// $fruit = 'apple';
// switch($fruit){
//     case "apple" :
//     case "orange" :
//         echo "this ia a Fruit" ;
//         break ; 

//           case "carrot" :
//           case "tomato" :
//              echo "this ia a vegetable" ;
//              break ; 

//         default :
//         echo "invalid";

// }



//////////////////////////////////////////////////////////////

// if(true):

//     echo "welcome" ;

// endif;


//////////////////////////////////////////////////////////
/**          Assignment Operators    */

// $x =  10 ;
// $x += 20 ;
// echo $x ;


/////////////////////////////////////////////////////////////////
/**Increment       
 * Pre-increment  ++$i
 * Post-increment   $i++
 */

// $i = 5 ;
// echo $i++ ;  // 5
// echo $i ;

////////////////////////////
// $i = 5 ;
// echo ++$i ;  // 6
// echo $i ;
// $i = 5;
// //    5    2    7   =>14
// $y = $i++ + 2 + ++$i ;
// echo $y ;


//////////////////////////////

// $a = 10 ;
// $b = ++$a ;  // 10    11

// echo $a ."<br>" ;  //10   11 
// echo $b ."<br>" ;   //10   10


/////////////////////////////////////
// $x = 6 ; //7  8
// //    6   + 4  + 7  +  3 + 9   29
// $y = $x++ + 4 + $x++ + 3 + ++$x ;
// echo $y ;



/////////////////////////////////// LOOPS   ///////////////////////////////////////////////
/**
 * for
 * while
 * do while
 * foreach  => array
 */


////////////////////for///////////////////////////

// for(  ;    ;  ){   infinite loop
//   echo "welcome  <br>";
// }



// for($i=0 ; $i<= 10 ; $i++){
//     echo "welcome PHP   $i <br>";
// }


////////////////////// while ///////////////////////////////

// $i=0 ;

// while($i<= 10){
//    echo "welcome PHP   $i <br>"; 
//    $i++;
// }


// $correctPin = 1278 ;
// $enterPin = null;

// while($correctPin != $enterPin){
//     echo "please enter your pin";
//     $enterPin = 1278;
// }


/////////////////////////////////////do while  ///////////////////////////////
// $age = 18;
// while($age >20){
//     echo "enter";

// }

// $age = 18;
// do{
//     echo "enter"; 
// }while($age >20);

//////////////////////////////////////////////////////////////////////////////
/**two words 
 * break
 * continue
 * 
 */

// for($i = 1 ; $i<=10 ; $i++){
//     //  echo $i ."<br>";
//     if($i== 5 ){
//      continue ;
//     }
//      echo $i ."<br>";
// }


// /** 1234  BOOM   6789 BOOM 11 12 13 14 BOOM                                */

// for($i = 1 ; $i<=50 ; $i++){
//     //  echo $i ."<br>";
//     if($i % 5 == 0 ){
//          echo "BOOM <br>";
//      continue ;
    
//     }
//      echo $i ."<br>";
// }






////////////////////////////////////////////    Array    ////////////////////////////////////////////////
/*****************
 **************************************1- indexed array ***************************** 
 * ********************** */
// $students_name1 = "ahmed";
// $students_name2 = "mohamed";
// $students_name3 = "mohamed";

// echo $students_name1;

// $students = [];
// $students = array();
// echo gettype($students);

//             0             1      2       3         4        5      6  7    8     9
// $students = ['ahmed' , 'mohamed','mona','asmaa' , 'eman','malik' , true ,10   ];
// echo count($students);
// print_r($students);
// var_dump($students);
// echo $students[0]."<br>";
// echo $students[1]."<br>";
// echo $students[2]."<br>";
// echo $students[3]."<br>";
// $students[1] = "marwa";

// print_r($students);

// for($i=0 ; $i<count($students) ; $i++){
//     echo $students[$i] ."<br>";
// }

/////////////////////////////////////////////////////////////////////
   /********** foreach  ********** */

//    $students = ['ahmed' , 'mohamed','mona','asmaa' , 'eman','malik' , true    ];

//    foreach($students  as $student){
//      echo $student . '<br>' ;
//    }


////////////////////////////////////////////////////////////////////////
//************ 2- Assoc Array******************** */
/** key => value   */

// $persons = [
// 'name' => 'malik' ,
// 'age' => 5 ,
// 'gender'=> 'male',
// 'title' =>'Engineer' 
// ];
// print_r($person);
// echo $person['name'] ."<br>";
// echo $person['age'] ."<br>";
// echo $person['gender'] ."<br>";
// $person['name'] = "mohamed";

// $person['title'] = "doctor";

// print_r($person);

// for($i =0 ;$i< 5 ; $i++){
//     echo $person[$i];
// }

// foreach($persons as $key=>$value){
//     echo "The Person $key is : " . $value ."<br>";
// }


////////////////////////////////////////////////////////////////////////////////////////////
/***************************3- Multi diminutions array  *********************************** */

// $students = [
// // 0      1       2    
// ['marwa',25 , 'female'],      //0
// ['mohamed' , 28 , 'male'],     //1
// ['zain' , 1 , 'male']          // 2

// ];
// echo "<pre>";

// print_r($students[2][2]);
// echo $students[1][0];

///////////////////////////////////////////

// $students = [
//       //  0     1     2
// 'a'=> ['marwa',25 , 'female'],
// 'b'=> ['mohamed' , 28 , 'male'], 
// 'c'=> ['zain' , 1 , 'male']  ,
// 'd' =>['name'=>'malik' , 'age'=>20 , 'gender'=> 'male']
// ];
// // echo $students['a'][0];

// echo $students['d']['name'];
///////////////////////////////////////////////



// $students =[
//     'a' =>['name'=>'zain' , 'age'=>10 , 'gender'=> 'male'],
//     'b' =>['name'=>'nour' , 'age'=>20 , 'gender'=> 'female'],
//     'c' =>['name'=>'mody' , 'age'=>15 , 'gender'=> 'male']
// ];
// // echo $students['c']['name'];
// foreach($students as $key=>$value){
//  foreach($value as $k=> $v){
//     echo  $k ." : ". $v . "<br>" ;
// }
// }

// $x = 10 ;



///////////////////////////////////////////////////////////////////////////
/*********************************** Pass By Value & reference **************************************/

// $x=10;
// echo $x."<br>";   //10

// $y= &$x ;
// echo $y."<br>";    //10


// echo "<hr>";


// $x=20;              //overwrite
// echo $x."<br>";   //20  20

// echo $y."<br>";  //10  20


/////////////////////////////////////////////////////////////////////////////////////////////
/***************************************    Functions    re-use         ********************************************* */


// function calc($rev=500 , $exp=100 ,$taxesRate=0.14 , $otherEsp=10 ){

// $income = $rev-$exp;
// $incomeWithTaxes = $income*$taxesRate ;
// $incomeAfterTaxes = $income-$incomeWithTaxes ;
// $total = $incomeAfterTaxes - $otherEsp ;
// echo $total ;

// }

// calc(500 , 10,0.14 , 20);
// echo "<br>";

// calc(600 , 100 , 0.14 , 10);
// echo "<br>";

// calc(600 , 200 , 0.14 , 30);
// echo "<br>";
// $x1 = 700 ;
// calc($x1 , 150 , 0.14 , 30);
// echo "<br>";

// calc(taxesRate:0.15);  //334  php8


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
//     return "Hello $name" ;
// }

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

// $x = 10;    //global


// function age($x){   //1
//     $y = 10;    //local
//     $y++ ;  
//     echo $y ;//11
//     // global $x;  //2
//     echo $x;
//     echo $GLOBALS['x'];   //3
// }
// age($x) ;  //11
// echo "<br>";
// // age() ;  //11

// print_r($GLOBALS);
// echo "<br>";
// echo $GLOBALS['x'];





///////////////////////////////////////////////////////////////////////////
  /********************** static Scope   **************************** */

//   function age(){
//     static $y = 10 ;
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


////////////////////////////////////////////////////////////////////////////////////////////////
/******************************* Super Global Variable ************************************** */
/**
 * GET   url
 * POST  body
 */

// print_r($GLOBALS);
//    http 



/////////////////////////////////////////////////////////////////////////////////

// echo "welcome";
// print_r($_GET);



// if(isset($_GET['submit']) == true){
// echo "Welcom ". $_GET['name'] ."<br>";
// echo "password ". $_GET['password'];
// }
// else{
//     echo "Login First";
// }




///////////////////////post////

// if(isset($_POST['submit']) == true){
// echo "Welcom ". $_POST['name'] ."<br>";
// echo "password ". $_POST['password'];
// }

// else{
//     echo "Login First";
// }


/////////////////////////////////////////

// print_r($_POST);




// if(isset($_POST['submit'])){

// echo $_POST['username'];
// echo $_POST['password'];

// }
// else{
//     echo "Please Login";
//     header('location:form.php');
// }

///////////////////////////////////
$arr = [
    'username'=>'marwa',
    'password'=>'123456'
];

if(isset($_POST['submit'])){ 

 $username =   $_POST['username'] ;
 $password =  $_POST['password'];


 if($username == $arr['username']  && $password == $arr['password']){
    echo "welcome  $username";
 }
 else{
    echo "please Enter valid data";
 }

}

else{
    echo "Please Login";
    header('location:form.php');
}





// if(isset($_POST['submit'])){
//    $user_name = $_POST['name'] ;
//    $password = $_POST['password'] ;

//    if($user_name == $arr['username'] 
//    && $password == $arr['password']){
//     echo "welcome $user_name" ;
//    }
//    else{
//     echo "invalid data";
//    }

// }