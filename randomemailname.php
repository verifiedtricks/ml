<?php
$names = array(
    'ramu',
    'shamu',
    'motu',
    'patlu',
    'amar',
    'shreya',
    'ramesh',
    'suresh',
    'akbar',
    'anthony'
);

$surnames = array(
    'bachan',
    'oberoi',
    'malothra',
    'padukone',
    'kothari',
    'metha',
    'ambani',
    'birla',
    'agarwal',
    'ahuja'
);
echo "<p>\n";

for ($i = 0; $i < 5; $i++) {

$random_name = $names[mt_rand(0, sizeof($names) - 1)];

$random_surname = $surnames[mt_rand(0, sizeof($surnames) - 1)];
$x = "@gmail.com" ;
echo $random_name .  $random_surname . mt_rand (100,999) . $x  . "<br>\n";
}

   ?>