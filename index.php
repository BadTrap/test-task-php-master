<?
/* Autoloader */
require_once __DIR__.'/vendor/autoload.php';

use Tools\Calculator;

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?
/* UI */
$calculator = new Calculator(40);
$calculator->minus(20);
$calculator->add(20);
$calculator->divide(4);
$calculator->multiply(11);
$calculator->result() ?? $calculator->add(42);

?>
<h1>Result will be:</h1>
<p>
<h2><? echo $calculator->result(); ?></h2>
</p>


</body>
</html>
