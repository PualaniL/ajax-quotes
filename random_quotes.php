<?php
// Array of quotes
$quotes = [
"The only way to do great work is to love what you do. - Steve Jobs",
"In three words I can sum up everything I've learned about life: it goes on. - Robert Frost",
"Success is not final, failure is not fatal: It is the courage to continue that counts. - Winston Churchill",
"The only limit to our realization of tomorrow will be our doubts of today. - Franklin D. Roosevelt",
"The greatest glory in living lies not in never falling, but in rising every time we fall. - Nelson Mandela",
];

// Obtain a random index
$randomIndex = array_rand($quotes);

// Get back random quote
echo $quotes[$randomIndex];
?>