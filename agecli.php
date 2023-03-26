<?php	

$userName = $argv[1];
$userAge = $argv[2];

function AgeCalculator($userAge)
    {
        return date("Y") - $userAge;
    };

echo "Your name is " . $userName . ", and your age is " . AgeCalculator($userAge);

if (AgeCalculator($userAge) >= 18){
    echo "\nYou are a voter.";
};

if (AgeCalculator($userAge) >= 60){
    echo "\nYou are a senior citizen.";
};

?>