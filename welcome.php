<?php
// get the user starting number
$counter = $_POST['number'];
// initialize numbers as an empty string
$numbers = "";

// get the user ending number
$userNum = $_POST['number1'];

// use a while loop to display the numbers from user starting number to the user ending number
while ($counter <= $userNum){
  // build the string of numbers with a line break each time
  $numbers = $numbers . $counter . "<br>";

  // increment the counter
  $counter++;
}

echo $numbers;

?>


