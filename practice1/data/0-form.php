<?php

$lecture_time = array("rust"    => "14:10",
                      "cxx"     => "10:00",
                      "unix"    => "12:00",
                      "infosec" => "16:30");

$lecture_lectors = array("rust"    => "S Tupid",
                         "cxx"     => "D Ank",
                         "unix"    => "E Rror",
                         "infosec" => "C Ode");

define("SIGNATURE", "<br>Best regards,\nThe Estate<br>");
define("MEETING_TIME", "17:00");
$date = "March 29th, 2023";

if(!isset($_POST["first_name"])) {
    header("Location: /0-form.html");
    exit();
}

$fname = $_POST["first_name"];
$lname = $_POST["last_name"];
// Check name validity (cyrillic letters only and first letter **must** be uppercase)
if(!preg_match("/^[А-Я][а-я]+$/u", $fname) || !preg_match("/^[А-Я][а-я]+$/u", $lname)) {
    die("Invalid name!");
}

$email = $_POST["email"];
// Check email validity (<english letters>@<english letters>.<english letters>)
if(!preg_match("/^[a-zA-Z]+@[a-zA-Z]+\.[a-zA-Z]+$/", $email)) {
    die("Invalid email!");
}

$phone = $_POST["phone"];
// Check phone validity (+71231234567 OR 81231234567)
if(!preg_match("/^\+?[0-9]{11}$/", $phone)) {
    die("Invalid phone!");
}

$final_text = "Hello, " . $fname . " " . $lname . "!<br>";
$final_text .= "We are happy to inform you that ";

$courses = $_POST["courses"];

if(!isset($courses)) {
    $event .= "the next student assembly";
    $final_text .= "$event is due on " . $date . " at " . MEETING_TIME . ".<br>";
} else {
    $event = "the lectures you selected will take place on $date @" . MEETING_TIME . ".<br>";
    for($i=0; $i<count($courses); $i++) {
        $course = $courses[$i];
        $lect = $lect . "<li>lecture on $course at " . $lecture_time[$course] . " (by " . $lecture_lectors[$course] . ")</li>";
    }
    $event = $event . $lect . "</ul>";
    $final_text .= $event;
}
$final_text .= SIGNATURE;
$final_text .= "<br>Addressed to $email ($phone)";
echo $final_text;
?>
