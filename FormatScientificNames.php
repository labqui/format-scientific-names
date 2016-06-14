<?php

/*
 * Criado por thalles ramon rosa <labufes@gmail.com>
 * Data: 14/06/2016
 * v 1.0
 */

//INPUT: "JONES BROWN MARSHALL SMITH" -> OUTPUT: SMITH, J. B. M.

$name1 = "Jones Brown";
$name2 = "Marshall";
$name3 = "Smith";

$explode = preg_split("/\s/", $name3);
$last = strtoupper($explode[count($explode) - 1]);

$output = $last . ", ";

if (!empty($name1)) {
    $explode = preg_split("/\s/", $name1);
    $first = "";
    foreach ( $explode as $name1 ) {
        $first .= strtoupper($name1)[0] . ". ";
    }
    $output .= $first;
}
if (!empty($name2)) {
    $explode = preg_split("/\s/", $name2);

    $middle = "";
    foreach ( $explode as $name2 ) {
        $middle .= strtoupper($name2)[0] . ". ";
    }
    $output .= $middle;
}
$output = preg_replace("/^(\s\W)/", "", $output);

echo $output; //print SMITH, J. B. M.
