<?php


// echo "Hello World" ;




/**   datatype  variable   value    
 * strongly    int x = 5   string name = "marwa"
 * losslay js php       js =>   var let x=5   php  $x=5
 * 
 */


// echo 5+5 ;

// echo "marw";
// echo "marw";
// echo "marwa";
// echo "marwa";
// echo "marwa";
// echo "marwa";

// echo 5+5 ;
// $x = 10 ;
// echo $x+30 ;



//////////////////////////////   Datatype   /////////////////////////////////////////////////
/**
 * number   $x = 5
 * float   $x = 5.3 
 * array   $x =[]     $x=array()
 * boolean   true or false
 * object    
 * null   $x = null
 * undefined    js    $x ;  var $x ;
 */


// $x = 20 ;   //integer
// $x = 30;     //integer
// $user_name = "ahmed";   //string

// echo $x ."<br>" ;
// echo gettype($x);

// var_dump($user_name);
// print_r($x);

// echo 'welcome '.$user_name;  





////////////////////////////////////////  Casting ///////////////////////////////////////////////////
/**
 * automatic casting
 * manual casting
 */

// $number = "5" + 5 ;  //10   automatic casting   engine
// echo $number ;



// $number = (int)"marwa" + 5 ;  //0+5 =>5    manual casting
// echo $number ;


// $number = '5' + 15 ;  
// echo gettype($number);   //integer


// $number = '5' . 15 ;  
// echo gettype($number);   //string

// echo $number ;


// $number = (int)5.5 +15 ;   //20.2   20
// echo $number;


/////////////////////////////////////////////// if   ///////////////////////////////////////////////////
/**if
 * switch
 */


// $age = 18 ;

// if($age >= 18){
//     echo "enter  grater than 18 <br>";
// }else{
//     echo "invalid <br>";
// }

/////////////////////////////////////////////////////////////////////
/**Short if */
   
// $x =  $age > 18 ? "enter  grater than 18" : "invalid" ;
// echo $x ;


////////////////////////////////////////////////////////////////////////////
// $gender = "female";
// if($gender == 'male'){
//     echo "hi <br>";
// }
// elseif($gender == 'female'){
//     echo "welcome <br>";
// }
// else{
//     echo "invalid <br>";
// }
// if($gender == "male"){
//     echo "enter";
// }


///////////////////////////////////////////////////////////////////////////////////
// if(" ")  //true
// {
//     echo "welcome";
// }


// if("")  //false   0
// {
//     echo "welcome";
// }

///////////////////////////////////////////////////////////

/**           Comparison Operators
 * 
 * =    assignment
 * ==    value value 
 * ===   value datatype
 */

// $x = 10;          //integer
// $y = '10';        // string
// if($x !==  $y){
//     echo "equal";
// }
// else{
//      echo "not equal"; 
// }


//////////////////////////////////////////////////////////////////////////
/**   Logical Operators    */

// $age = 10 ;
// $gender = "male";
// $is_active = false ;  //1  boolean   => true = 1   false =0
// $is_admin = false;

//And    true         true           true    => true
// if($age >15  && $gender== "male" && $is_active == false){
//     echo "welcome";
// }
// else{
//     echo "mm,kl;k";
// }


//OR  false       false               true         false ||true =>true
// if($age >15 || $gender== "female" || $is_active == 0){
//     echo "welcome";
// }
// else{
//     echo "mm,kl;k";
// }


// $age = 12 ;
// if($age > 10):
//     echo "valid" ;
// endif ;

/////////////////////////////////////////////////////////////////////////////

// $day = 1;
// if ($day == 1) {
//     echo "saturday";
// } elseif ($day == 2) {
//     echo "sunday";
// } elseif ($day == 3) {
//     echo "monday";
// } elseif ($day == 4) {
//     echo "thursday";
// } elseif ($day == 5) {
//     echo "wednesday";
// } elseif ($day == 6) {
//     echo "thursday";
// } elseif ($day == 7) {
//     echo "friday";
// } else {
//     echo "invalid day";
// }


////////////////////////////////////////////
/**switch */
// $day = 7;
// switch ($day) {
//     case 1:
//         echo "saturday";
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
//         echo "thursday";
//         break;

//     case 7:
//         echo "friday";
//         break;

//         default:
//           echo "invalid day";
// }



// $fruit = "carrot";
// switch($fruit){
//  case "apple" :
//     echo "this is a fruit";
//     break ;
    
//     case "orange" :
//     echo "this is a fruit";
//     break ;


//     case "carrot" :
//     echo "this is a vegetable";
//     break ;

//       case "tomato" :
//     echo "this is a vegetable";
//     break ;

//     default:
//     "not found";
// }



/************************************************************ */
/**  DRY   Don`t repeat yourself */



// $fruit = "orange";
// switch($fruit){
//  case "apple" :
//     case "orange" :
//     echo "this is a fruit";
//     break ;


//     case "carrot" :
//       case "tomato" :
//     echo "this is a vegetable";
//     break ;

//     default:
//     "not found";
// }



// $favcolor = "red";

// switch ($favcolor) {
//   case "red":
//     echo "Your favorite color is red!";
//   case "blue":
//     "Your favorite color is blue!";
//     break;
//   case "green":
//     echo "Your favorite color is green!";
//     break;
//   default:
//     echo "Your favorite color is neither red, blue, nor green!";
// }




/************** nested if ************************** */
// $age = 10 ;
// $gender = "male";

// if($age >12 ){
//     echo "good <br>";
//     if($gender == "male"){
//         echo "nice day <br>";
//     }
// }


///////////////////////////////////////////////////////////////////////////
/**Assignment Operators */
// $x = 10;
// $x *= 20;
// echo $x ;
///////////////////////////////////////////////////////////////////////

/**  Increment / Decrement Operators
 * Pre-increment    ++$i
 * Post-increment   $i++
 */

// $i = 5 ;
// echo $i++ ;   //5 
// echo $i ;    // 6


// $i = 5 ;
// echo ++$i;   //5 
// echo $i ;    // 6



// $i =5;  // 6  7
// //   5      2    7    =>14
// $y = $i++ + 2 + ++$i ;
// echo $y;



// $a = 10 ;  //11
// $b= $a++ ;  // 10

// echo $a ."<br>";  //11
// echo $b ."<br>";  //10


// $x = 6 ; // 7  8
// //    6      4    7    3    9  
// $x = $x++  + 4 + $x++ + 3 + ++$x ;
// echo $x ;

////////////////////////////////////////////////////////////////////////////
/**
 * for
 * while
 * do while
 * foreach array
 */

// for(  ;  ;  ){
//   echo "Welcome  <br>" ;

// }


// for( $i=10 ; $i>=0  ; $i-- ){
//   echo "Welcome $i <br>" ;

// }



/////////////////////////////////
/*while */

// for($i=0 ; $i<10 ; $i++){
//     echo "Welcome $i <br>";
// }

// $i=0 ;
// while($i<10){
// echo "Welcome $i <br>";
//  $i++ ;
// }


// $correctPin = 123456 ;
// $enterPin = null;

// while($correctPin != $enterPin){
//     echo "Please enter your pin";
//     $enterPin = 123456;
// }


///////////////////////////////////////////////////
//do while

// $age = 18;
// while($age >20){
//     echo "hello";
// }

// do{
//    echo "hello";  
// }while($age >20);


/////////////////////////////////////////////////////////
/**  two words
 * Break 
 * continue
 */

// for($i = 1 ; $i <= 10 ;$i++){
//     if($i == 6){
//         continue;
//     }
//     echo $i ."<br>"
// ;}





/**      1=>50        1234 Boom 6789 BOOM 11 12 13 14 BOOM             */


for($i = 1 ; $i <= 50 ;$i++){
    if($i %5 == 0 ){
        echo "BOOM <br>";
        continue;
    }
    echo $i ."<br>"
;}
