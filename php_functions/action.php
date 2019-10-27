<?php
include('db_connection.php');

// connect to the database
$db = connect();

$motivation = '';
$confidence = '';
$oppertunity = '';
$physical_competence = '';

$options = [];

//confidence 1, 8
//motivation 6, 7
//oportunity 2, 4
//competence 3, 5

$array = $_GET;
$keys = array_keys($array);

for ($i=0; $i<7; $i++){
    $options[$i] = getnum($keys[$i]) - (5*$i);
    print_r($options[$i]. ' ');
}

//get user data
$username = 'john@john.com';
$user_check_query = "SELECT * FROM users WHERE email_address='$username' LIMIT 1";
$result = mysqli_query($db, $user_check_query);
$user = mysqli_fetch_assoc($result);

$motivation =  $user['motivation'] + $options[5] + $options[6];
$confidence =  $user['confidence'] + $options[0] + $options[7];
$oppertunity =  $user['oppertunity'] + $options[1] + $options[3];
$physical_competence =  $user['physical_competence'] + $options[2] + $options[4];

echo $motivation.' ';
echo $confidence.' ';
echo $oppertunity.' ';
echo $physical_competence.' ';


$user_check_query = "UPDATE users SET motivation='$motivation', confidence='$confidence', oppertunity='$oppertunity', physical_competence='$physical_competence' WHERE id=1";
$result = mysqli_query($db, $user_check_query);

header('location: ../pages/profile.php');


//extract question number from array key
function getnum($str){
    return $int = (int) filter_var($str, FILTER_SANITIZE_NUMBER_INT);
}

//echo $option1;

?>