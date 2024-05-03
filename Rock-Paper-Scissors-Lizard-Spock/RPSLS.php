<?php
$checkWinner = [
    "rock" => ["scissors", "lizard"],
    "paper" => ["rock","spock"],
    "scissors" => ["paper","lizard"],
    "lizard" => ["spock","paper"],
    "spock" => ["scissors","rock"]
];

function choices($playerChoice, $checkWinner){
    $choices = array("rock","paper","scissors","lizard","spock");
    $computerChoice = $choices[array_rand($choices)];
    if($playerChoice === $computerChoice ){
        echo "It's a draw \n";
    } elseif (in_array($playerChoice, $checkWinner[$computerChoice])) {
        echo "Computer wins!!\n";
    } else {
        echo "Player wins!\n";
    }
    echo "Player choice was $playerChoice \n";
    echo "Computer choice was $computerChoice \n";
}
$playerChoice = readline("Choose rock, paper, scissors, lizard or spock: ");
choices($playerChoice, $checkWinner);