<?php

//* Number Classifier
// The program will classify the number as positive, negative, or zero.

echo "The Number Classifier \n";
echo "Enter only a whole number: \n";

$number = (int)readline();

if ($number > 0) {
    echo "$number is a positive number. \n \n";
} elseif ($number < 0) {
    echo "$number is a negative number. \n \n";
} else {
    echo "The number is zero \n \n";
}
/* Question to Instructor:
1. How do i only accept a whole or decimal number?
2. How do i handle decimal numbers?
2. How do I reject non-numeric input?
3. How do I ask the user to enter a number again if they enter a non-numeric value?
*/
/*--------------------------------*/


//* Basic Authentication
// The program will authenticate the user based on the username and password.

echo "User Authentication System \n";

define("USERNAME", "admin");
define("PASSWORD", "123456");

echo "Enter your username: ";
$inputUsername = (string)readline();

echo "Enter your password: ";
$inputPassword = (string)readline();

if ($inputUsername === USERNAME && $inputPassword === PASSWORD) {
    echo "Login successful \n";
    echo "Welcome $inputUsername.\n \n";
} else {
    echo "Invalid username or password \n \n";
}
/*--------------------------------*/


//* SimpleElectricity Bill Calculator
// The program will calculate the electricity bill based on the units consumed.
/* Billing Slabs:
1. 0-100 units = 5 tk
2. 100-200 units = 10 tk
3. 200+ units = 15 tk
*/

echo "Electricity Bill Calculator \n";

echo "Enter consumed electricity units: \n";

$units = (int)readline();

if ($units <= 100) {
    $bill = $units * 5;
} elseif ($units > 100 && $units <= 200) {
    $bill = (100 * 5) + (($units - 100) * 10);
} elseif ($units > 200) {
    $bill = (100 * 5) + (100 * 10) + (($units - 200) * 15);
}

echo "Your electricity bill is: $bill tk \n \n";
/*--------------------------------*/


//* Temperature Converter
// The program will convert the temperature from Celsius to Fahrenheit and vice versa.
/* Conversion Formulas:
1. Fahrenheit = (Celsius * 9 / 5) + 32
2. Celsius = (Fahrenheit - 32) / 9 / 5
*/

define("FACTOR", 9 / 5);
define("OFFSET", 32);

echo "Temperature Converter \n";

echo "Enter temperature value: ";
$temperature = (float)readline();

echo "Convert to (1: for Fahrenheit, 2: for Celsius): ";
$choice = (int)readline();

switch ($choice) {
    case 1:
        $fahrenheit = ($temperature * FACTOR) + OFFSET;
        echo "The temperature in Fahrenheit: $fahrenheit °F \n \n";
        break;

    case 2:
        $celsius = ($temperature - OFFSET) / FACTOR;
        echo "The temperature in Celsius: $celsius °C \n \n";
        break;
    default:
        echo "Invalid choice \n \n";
        break;
}
/*--------------------------------*/
