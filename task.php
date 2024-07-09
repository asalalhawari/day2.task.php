<?php
//PHP String and String Functions	         	


//ex1(a+b+c+d)
$String = "abdallahawaysheh";
$uppercase = strtoupper($String);
echo $uppercase;
////
echo "<br>";

$String = "abdullahadaileh";
$lowercase = strtolower ($String);
echo $lowercase;
echo "<br>";
$String = "heba";                       
$capitlString = ucfirst($String);
echo $capitlString;
echo "<br>";
$String = "new life with me";
$capitalString = ucwords($String);
echo $capitalString;
echo "<br>";
//ex2
$cString = "20010906";                                 //substrبستعملها عشان استخرج اوكي ولا مش اوكي 
$cString = "20010906";                                 

$year = substr($cString, 0, 4); 
$month = substr($cString, 4, 2); 
$day = substr($cString, 6, 2); 

$formattedDate = $year . ":" . $month . ":" . $day;

echo $formattedDate;


echo "<hr>";
//ex(3)
$keywords = "If you are not a wolf, lions will eat you.";

$word = "lions";
                                                   //strpos (You search for the word you want)

if (strpos($keywords, $word) !== false) {
    echo "'$word' Available";
} else {
    echo 
        "'$word'  not Available";
}

echo "<hr>";


//ex4
$url = "https://github.com/asalalhawari/php";
$path = parse_url($url, PHP_URL_PATH);                          

                                           //basename بتخليني استخرج اسم الملف 
$name = basename($path);


echo $name;


echo "<hr>";


//ex5
$email = "ASALHAWARI2000@gmail.com";
$parts = explode('@', $email);                                    //explode فاصل 
$username = $parts[0];                                       
echo $username;
echo "<hr>";


//ex6


$string = "ASALHAWARI2000@gmail.com";                     //substr تستخرج
$laststring = substr($string, -3);
echo $laststring; 
echo "<hr>";

//ex7

$characters = 'ASALHAWARI06092001@@@alkarakalmzar';                         //shuffle تعمل على خلط
$password_length = 10;
$password = str_shuffle($characters);


$password = substr($password,2, $password_length);
echo $password;
echo "<hr>";
//ex8



$word= "Hello Moamen, welcome to orange Academy";


$new_word = "Amro";


$parts = explode(' ', $word);                //explode فاصل 
$parts[0] = $new_word;

$new_words= implode(' ', $parts);

echo $new_words;

echo "<hr>";

//ex9
echo "<hr>";
//ex10


$string = "Hello, world!";
$array = array($string);
var_dump($array);
echo "<hr>";
                                           
// $input_letter = 'A';
// $next_letter = ++$input_letter;
// echo $input_letter . $next_letter;



$main_string = "asall, zaina!";
$insert_string = "beautiful";
$number = 7;
$new_string = substr_replace($main_string, $insert_string, $number, 0);

echo $new_string;















// [host] => example.com
// [port] => 8080
// [user] => username
// [pass] => password
// [path] => /path/file.html
// [query] => arg=value
// [fragment] => anchor








?>