<?php
// Array with names
$a[] = "Barn burner";
$a[] = "Bat hide";
$a[] = "Be on one’s beanwater";
$a[] = "Bonnyclabber";
$a[] = "Counterpin";
$a[] = "Croker sack";
$a[] = "Cuddy";
$a[] = "Cup towel";
$a[] = "Daddock";
$a[] = "Dish wiper";
$a[] = "Dozy";
$a[] = "Dropped egg";
$a[] = "Ear screw";
$a[] = "Emptins";
$a[] = "Farmer match";
$a[] = "Fleech";
$a[] = "Fogo";
$a[] = "Frog strangler";
$a[] = "Goose drownder";
$a[] = "I vum";
$a[] = "Larbo";
$a[] = "Last button on Gabe’s coat";
$a[] = "Leader";
$a[] = "Nasty-neat";
$a[] = "Parrot-toed";
$a[] = "Pin-toed";
$a[] = "Popskull";
$a[] = "Pot cheese";
$a[] = "Racket store";
$a[] = "Sewing needle";
$a[] = "Shat";
$a[] = "Shivering owl";
$a[] = "Skillpot";
$a[] = "Sonsy";
$a[] = "Spill";
$a[] = "Spin street yarn";
$a[] = "Spouty: of ground";
$a[] = "Suppawn";
$a[] = "Supple-sawney";
$a[] = "Tacker";
$a[] = "Tag";
$a[] = "To bag school";
$a[] = "Tow sac";
$a[] = "Trash mover";
$a[] = "Tumbleset";
$a[] = "Wamus";
$a[] = "Whistle pig";
$a[] = "Winkle-hawk";
$a[] = "Work brittle";
$a[] = "Zephyr";



// get the q parameter from URL
$q = $_REQUEST["q"];

$hint = "";

// lookup all hints from array if $q is different from ""
if ($q !== "") {
    $q = strtolower($q);
    $len=strlen($q);
    foreach($a as $name) {
        if (stristr($q, substr($name, 0, $len))) {
            if ($hint === "") {
                $hint = $name;
            } else {
                $hint .= "<br> $name ";
            }
        }
    }
}

// Output "no suggestion" if no hint was found or output correct values
echo $hint === "" ? "no suggestion" : $hint;
?>