<?php

require_once "vendor/autoload.php";
use App\Board;
use App\SlotLogic;


$board = [
    [" "," "," "," "],
    [" "," "," "," "],
    [" "," "," "," "],
];


$desk = new Board();
$desk->display($board);


echo "Try to win :) \n";


$slotSymbols = ['7', 'X', 'O', '#', '%', '$'];

$payedForSpin = 1;
$columnWin = 15;
$rowsWin = 20;
$epicWin = 100;


do {
    $cash = readline("How much money do you have. One try costs is {$payedForSpin} -> ");

} while($cash <= 0);

$userSelection =  readline("Press 1 if you want try to win something -> ");


$money = new SlotLogic($cash, $payedForSpin);


    if ($userSelection != 1) {
        echo "invalid input \n";
        exit;
    }
//line nr. 1

    if ($userSelection == 1) {
        $board[0][0] = $slotSymbols[array_rand($slotSymbols)];
        $board[1][0] = $slotSymbols[array_rand($slotSymbols)];
        $board[2][0] = $slotSymbols[array_rand($slotSymbols)];
        $desk->display($board) . "\n";
        echo "Fortune's choice. \n";
        echo "\n";
    }
//line nr 2

    $userSelection = readline("Press 1 if you want try to win something -> ");

    if ($userSelection == 1) {
        $board[0][1] = $slotSymbols[array_rand($slotSymbols)];
        $board[1][1] = $slotSymbols[array_rand($slotSymbols)];
        $board[2][1] = $slotSymbols[array_rand($slotSymbols)];
        $desk->display($board) . "\n";
        echo "Fortune's choice. \n";
        echo "\n";
    }

//line nr 3
    $userSelection = readline("Press 1 if you want try to win something -> ");

    if ($userSelection == 1) {
        $board[0][2] = $slotSymbols[array_rand($slotSymbols)];
        $board[1][2] = $slotSymbols[array_rand($slotSymbols)];
        $board[2][2] = $slotSymbols[array_rand($slotSymbols)];
        $desk->display($board) . "\n";
        echo "Fortune's choice. \n";
        echo "\n";
    }

//line nr. 4
    $userSelection = readline("Press 1 if you want try to win something -> ");

    if ($userSelection == 1) {
        $board[0][3] = $slotSymbols[array_rand($slotSymbols)];
        $board[1][3] = $slotSymbols[array_rand($slotSymbols)];
        $board[2][3] = $slotSymbols[array_rand($slotSymbols)];
        $desk->display($board) . "\n";
        echo "Fortune's choice. \n";
        echo "\n";
    }

    echo "Current money -> " . $fourthCount = $money->userMoney($cash, $payedForSpin) . "\n";

//Column combination.
    $money->getColumns($board, $fourthCount, $columnWin);

// Rows combination.
    $money->getRows($board, $fourthCount, $rowsWin);

//Epic combination.
    $money->getEpic($board, $fourthCount, $epicWin);

