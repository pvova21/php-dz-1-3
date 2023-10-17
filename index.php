<?php

$variable = true;

if (is_bool($variable)) {
    $type = 'bool';
} elseif (is_float($variable)) {
    $type = 'float';
} elseif (is_int($variable)) {
    $type = 'int';
} elseif (is_string($variable)) {
    $type = 'string';
} elseif (is_null($variable)) {
    $type = 'null';
} else {
    $type = 'other';
}

echo "type is $type<br>";
?>

<?php 

$variable = 3.14;

switch (gettype($variable)) {
    case 'boolean':
        $type = 'bool';
        break;
    case 'double':
        $type = 'float';
        break;
    case 'integer':
        $type = 'int';
        break;
    case 'string':
        $type = 'string';
        break;
    case 'NULL':
        $type = 'null';
        break;
    default:
        $type = 'other';
}

echo "type is $type<br>";

?>