<?

$errorPath = ini_get('error_log');
echo 'Error path: ' . $errorPath . '<br />';

echo 'Changing log location' . '<br />';

ini_set("log_errors", 1);
ini_set("error_log", "/home/baskcom/logs/custom/errors.log");

error_reporting(E_ALL);

echo 'Writing log message' . '<br />';
error_log( "Hello, errors!" );

$errorPath = ini_get('error_log');
echo 'Error path: ' . $errorPath;

?>