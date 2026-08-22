
<?php
// print_r($_POST);


// if(isset($_POST['submit']) == true){

// $num1=  $_POST['num1'];
// $num2=  $_POST['num2'];
// $operation = $_POST['operation'];


// switch($operation){
//     case '+':
//      echo   $num1 + $num2 ;
//      break ;

//       case '-':
//      echo   $num1 - $num2 ;
//      break ;

//       case '*':
//      echo   $num1 * $num2 ;
//      break ;

//       case '/':
//      echo   $num1 / $num2 ;
//      break ;


//      default:
//      echo "not valid operators";
// }



//}




////////////////////////////////////////////////////////////////////////////////


// print_r($_POST);
// if(isset($_POST['submit'])){

//   $username =   $_POST['username'] ;
//   $email =   $_POST['email'] ;
//   $password =   $_POST['password'] ;

// echo "Welcome   $username <br>";

// setcookie('username',$username ,time()+60);
// setcookie('email',$email ,time()+60);
// setcookie('password',$password ,time()+60);

// echo  "user name is : ". $_COOKIE['username'] . "<br>";
// echo  "user email is : ". $_COOKIE['email'] . "<br>";



// //////////////////  Session /////////////////////////////////
// session_start();
// $_SESSION['user_name'] = $username ;
// $_SESSION['email'] = $email ;
// header('location:home.php');
// exit();

// }
// else{
//     header('location:form.php');
// }






//////////////////////////////////////////////////////////////////////////////
/***************************** Server ************************************ */
// echo "<pre>";
// print_r($_SERVER);
session_start();

// if($_SERVER['REQUEST_METHOD']== 'POST'){

//   $username =   $_POST['username'] ;
//   $email =   $_POST['email'] ;
//   $password =   $_POST['password'] ;

//   $errors =[];


// if(strlen($username) <3  ||  strlen($username)  >12   ){

//     $errors[]=   "username between 3  and 12 char";
//      }

// if(strlen($password) <3  ||  strlen($password) >12   ){

//     $errors[]=   "password between 3  and 12 char";
//      }


// if($errors ==true){
//     $_SESSION['errors'] = $errors;
//     header('location:form.php');
//     exit();
// }


// $_SESSION['user_name'] = $username ;
//     header('location:home.php');
//     exit();


// }else{
//     echo "Method must be Post ";
// }











/////////////////////////////////////////////////////////////////////////
/**********************files *********************** */
//  print_r($_POST);

// echo "<pre>";

// // print_r($_FILES['image']['name']);

//  $image = $_FILES['image']  ;  //$image['name']
// //  print_r($image);

//  $image_name = $image['name'] ;
//  $tmp_name = $image['tmp_name'];
// $ext =  pathinfo($image_name , PATHINFO_EXTENSION);
//  $new_name = uniqid().".".$ext;
//  move_uploaded_file($tmp_name ,$new_name  );

?>
<img src="<?php  //echo $new_name  ?>" alt="">



<?php

//////////////////// Request////////////////////////////////

// print_r($_REQUEST);

// echo $_REQUEST['username']; 
// echo "<br>";

// echo $_REQUEST['username']; 
// echo "<br>";


//////////////////////////////////////////////////////////////////////
/*************** FILTER ******************* */
/*

filter-input
filter-var
*/


// $email = "m o@ gmail.com";

// echo filter_var($email,FILTER_SANITIZE_EMAIL);   // true or false


// $number = 15 ;

// echo filter_var($number , FILTER_VALIDATE_INT,
// ['options'=> ['min_range'=>20  , 'max_range'=>60] ]
// );



// $username = "Mohamed";

// echo filter_var($username , FILTER_VALIDATE_REGEXP , [ 'options' => [ 'regexp' => '/^[A-Z][a-z]{3,8}$/' ]  ]);






/////////////////////////////////////////////////////////////////////////////
//Warning error
// echo $x ;


// include('test.php');
// echo "welcome" ;



//syntax 

// echo "welcome;
// echo "welcome" ;



//fatal error

// echo 'm'+'m';

// function calc(){

// }

// function calc(){
    
// }


// require('test.php') ;
// echo "welcome";
// echo "hi""mi" , "nti" , "php"; , 
// print "nti" ,"php";