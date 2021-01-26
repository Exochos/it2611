<?php
// Date

echo date('Y');
echo '<br>';
echo date('H:i A');
echo '<br>';
date_default_timezone_set('America/Los_Angeles');
echo '<br>';

$todayDate = ('H:i A');
if ($todayDate <= 11) {
    echo 'Good Morning!';
}
elseif ($todayDate <= 15) {
    echo 'Good Afternoon';
}
else {
    echo 'Good Evening';
}

// End Date
?>