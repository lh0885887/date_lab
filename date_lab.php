<?php



function showNow(): string
{
    // Sets timestamp for current datetime
    $timestamp = time();

    // formats timestamp
    $formatted_timestamp = date('m/d/Y g:i a', $timestamp);

    return $formatted_timestamp;
}

function showStringDate(string $str)
{
    // converts str to time
    $timestamp = strtotime($str);
    $formatted_timestamp = date('m/d/Y g:i a', $timestamp);
    $output = "Raw timestamp: " . $timestamp . ", Formatted timestamp: " . $formatted_timestamp;
    return $output;
}

function showFourthOfJuly()
{
    // Create/Get a unix timestamp
    $fourth_of_july = mktime(9, 00, 0, 7, 4, 2026);

    $formatted_fourth = date('F j, Y \a\t g:i a', $fourth_of_july);
    return $formatted_fourth;
}

function addThirtyDaysBySeconds()
{

}




echo '1. showNow(): ' . showNow() . "\n";
echo "2a. showStringDate('next Friday'): " . showStringDate("next Friday") . "\n";
echo "2b. showStringDate('2025-12-25'): " . showStringDate("2025-12-25") . "\n";
echo "3. showFourthOfJuly(): " . showFourthOfJuly() . "\n";
echo addThirtyDaysBySeconds();
?>