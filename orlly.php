<?php
print 'How are you?';
print "I'm fine!";
print 'I\'m fine!';

$humburgur = 4.95;
$shake = 1.95;
$cola = 0.85;

$tip_rate = 0.16;
$tax_rate = 0.76;

$food = ($humburgur * 2) + $shake + $cola;
$tax = $food * $tax_rate;
$tip = $food * $tip_rate;

$total = $food + $tip + $tax;

print 'The total cost of meals is $' . $total . "<br>";

printf("%d %-9s at \$%.2f each: \$%5.2f\n", 2, 'Humburgur', $humburgur, 2 * $humburgur);
printf("%d %-9s at \$%.2f each: \$%5.2f\n", 1, 'Shake', $shake, $shake);
printf("%d %-9s at \$%.2f each: \$%5.2f\n", 1, 'Cola', $cola, $cola);

printf("%25s at \$%5.2f\n", 'Food Total', $food);
printf("%25s at \$%5.2f\n", 'Food and Tax Total', $food + $tax);
printf("%25s at \$%5.2f\n", 'Food ,Tax, and Tip Total', $total);


$first_name = 'Mayumi';
$last_name = 'Oka';
$name = "$first_name $last_name ";
print $name;
print strlen($name);

$first_name = 'Mayumi';
$last_name = 'Oka';
$name = "$first_name $last_name ";
print $name;
print strlen($name);

$prepareation = 'braise';
$meat = 'beaf';
print "{$prepareation}d $meat with Vegitables";
