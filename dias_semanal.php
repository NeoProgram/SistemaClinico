<?php

    $start_date = $_POST['start_date'];
    $end_date = $_POST['end_date'];

    $day = $start_date;
    do {
        list($day, $month, $year) = explode("-", $date);

    $wkday = date('l',mktime('0','0','0', $month, $day, $year));
        if($wkday == "sunday"){
        echo $day;
        }
        $day++;
    } while ($day < $end_date);
	
	
	//========================================================================================================
	
	
	//Rather than get all days and loop through them all, get the first Monday after the start date and then iterate 7 days at a time:
	
	$endDate = strtotime($endDate);
    for($i = strtotime('Monday', strtotime($startDate)); $i <= $endDate; $i = strtotime('+1 week', $i))
    echo date('l Y-m-d', $i);

    //=========================================================================================================
	
	efficient and mathy solution:

    $start = new DateTime('2013-01-06');
    $end = new DateTime('2013-01-20');
    $days = $start->diff($end, true)->days;

    $sundays = intval($days / 7) + ($start->format('N') + $days % 7 >= 7);

    echo $sundays;

//++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++

Let me break it down for you.

$start = new DateTime('2013-01-06');
$end = new DateTime('2013-01-20');
First, create some DateTime objects, which are powerful built-in PHP objects meant for exactly this kind of problem.

$days = $start->diff($end, true)->days;
Next, use DateTime::diff to find the difference from $start to $end (passing true here as the second parameter ensures that this value is always positive), and get the number of days between them.

$sundays = intval($days / 7) + ($start->format('N') + $days % 7 >= 7);
Here comes the big one - but it's not so complicated, really. First, we know there is one Sunday for every week, so we have at least $days / 7 Sundays to begin with, rounded down to the nearest int with intval.

On top of that, there could be a Sunday in a span of time less than a week; for example, Friday to Monday of the next week contains 4 days; one of them is a Sunday. So, depending on when we start and end, there could be another. This is easy to account for:

$start->format('N') (see DateTime::format) gives us the ISO-8601 day of the week for the start date, which is a number from 1 to 7 (1 is Monday, 7 is Sunday).
$days % 7 gives us the number of leftover days that don't divide evenly into weeks.
If our starting day and the number of leftover days add up to 7 or more, then we reached a Sunday. Knowing that, we just have to add that expression, which will give us 1 if it's true or 0 if it's false, since we're adding it to an int value.

And there you have it! The advantage of this method is that it doesn't require iterating over every day between the given times and checking to see if it's a Sunday, which will save you a lot computation, and also it will make you look really clever. Hope that helps!
	
?>

