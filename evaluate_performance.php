<?php

// Measuring deployment time with array_search
$start_time = microtime(true);

// ... Implementation code with array_search ...

$end_time = microtime(true);
$execution_time = $end_time - $start_time;
echo "Tiempo de ejecución con array_search: $execution_time seconds\n";

// Timing for manual deployment
$start_time = microtime(true);

// ... Manual implementation code ...

$end_time = microtime(true);
$execution_time = $end_time - $start_time;
echo "Manual execution time: $execution_time seconds\n";

?>