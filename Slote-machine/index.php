<?php


$board = [
   [" "," "," "," "],
   [" "," "," "," "],
   [" "," "," "," "],
];



function display(array $board)
{
    echo " {$board[0][0]}  | {$board[0][1]}  |  {$board[0][2]}  | {$board[0][3]} \n";
    echo " ---+----+-----+-----\n";
    echo " {$board[1][0]}  | {$board[1][1]}  |  {$board[1][2]}  | {$board[1][3]} \n";
    echo " ---+----+-----+-----\n";
    echo " {$board[2][0]}  | {$board[2][1]}  |  {$board[2][2]}  | {$board[2][3]}  \n";

}

display($board);
echo "Try to win :) \n";


$slotSymbols = [':)', 'X', 'O', '#', '%', '$'];





$payedForSpin = 1;
$columnWin = 15;
$rowsWin = 20;
$epicWin = 100;

$cash = readline("How much money do you have. One try costs is {$payedForSpin} -> ");

$userSelection =  readline("Press 1 if you want try to win something -> ");


function userMoney($cash, $payedForSpin)
{
    return $cash - $payedForSpin;
};

if ($userSelection != 1) {
    echo "invalid input";
    exit;
}

//line nr. 1

       if ($userSelection == 1) {
           $symbol = array_rand($slotSymbols);
           $chose = $slotSymbols[$symbol];

           $board[0][0] = $chose;
           display($board) . "\n";
           echo "Fortune's choice. \n";
           echo "\n";
       }
       if ($userSelection == 1) {
           $symbol = array_rand($slotSymbols);
           $chose = $slotSymbols[$symbol];

           $board[1][0] = $chose;
           display($board) . "\n";
           echo "Fortune's choice. \n";
           echo "\n";
       }
       if ($userSelection == 1) {
           $symbol = array_rand($slotSymbols);
           $chose = $slotSymbols[$symbol];

           $board[2][0] = $chose;
           display($board);
           echo "\n";
           echo "\n";

       }
            echo "Current money -> " . $firstCount = userMoney($cash, $payedForSpin) . "\n";
//line nr 2

       $userSelection = readline("Press 1 if you want try to win something -> ");


       if ($userSelection == 1) {
           $symbol = array_rand($slotSymbols);
           $chose = $slotSymbols[$symbol];

           $board[0][1] = $chose;
           display($board) . "\n";
           echo "Fortune's choice. \n";
           echo "\n";
       }
       if ($userSelection == 1) {
           $symbol = array_rand($slotSymbols);
           $chose = $slotSymbols[$symbol];

           $board[1][1] = $chose;
           display($board) . "\n";
           echo "Fortune's choice. \n";
           echo "\n";
       }
       if ($userSelection == 1) {
           $symbol = array_rand($slotSymbols);
           $chose = $slotSymbols[$symbol];

           $board[2][1] = $chose;
           display($board);
           echo "\n";
           echo "\n";

       }
        echo "Current money -> " . $secondCount = userMoney($firstCount, $payedForSpin) . "\n";
//line nr 3
       $userSelection = readline("Press 1 if you want try to win something -> ");
       if ($userSelection == 1) {
           $symbol = array_rand($slotSymbols);
           $chose = $slotSymbols[$symbol];

           $board[0][2] = $chose;
           display($board) . "\n";
           echo "Fortune's choice. \n";
           echo "\n";
       }
       if ($userSelection == 1) {
           $symbol = array_rand($slotSymbols);
           $chose = $slotSymbols[$symbol];

           $board[1][2] = $chose;
           display($board) . "\n";
           echo "Fortune's choice. \n";
           echo "\n";
       }
       if ($userSelection == 1) {
           $symbol = array_rand($slotSymbols);
           $chose = $slotSymbols[$symbol];

           $board[2][2] = $chose;
           display($board);
           echo "\n";
           echo "\n";
       }
        echo "Current money -> " . $third = userMoney($secondCount, $payedForSpin) . "\n";
//line nr. 4
       $userSelection = readline("Press 1 if you want try to win something -> ");
       if ($userSelection == 1) {
           $symbol = array_rand($slotSymbols);
           $chose = $slotSymbols[$symbol];

           $board[0][3] = $chose;
           display($board) . "\n";
           echo "Fortune's choice. \n";
           echo "\n";
       }
       if ($userSelection == 1) {
           $symbol = array_rand($slotSymbols);
           $chose = $slotSymbols[$symbol];

           $board[1][3] = $chose;
           display($board) . "\n";
           echo "Fortune's choice. \n";
           echo "\n";
       }
       if ($userSelection == 1) {
           $symbol = array_rand($slotSymbols);
           $chose = $slotSymbols[$symbol];

           $board[2][3] = $chose;
           display($board);

}
       echo "Current money -> " . $fourth = userMoney($third, $payedForSpin) . "\n";


        //Column combination.

function columns($board, $fourth, $columnWin)
{

    if ($board[0][0] === $board[1][0] && $board[0][0] === $board[2][0] ) {
        $resultColumn  = $fourth + $columnWin;
        echo  "You EARN in column line -> " . $columnWin . " In your wallet have -> ". $resultColumn . "\n";
    }
    if ($board[0][1] === $board[1][1] && $board[0][1] === $board[2][1] ) {
        $resultColumn = $fourth + $columnWin;
        echo  "You EARN in column line -> " . $columnWin . " In your wallet have -> ". $resultColumn . "\n";
    }
    if ($board[0][2] === $board[1][2] && $board[0][2] === $board[2][2] ) {
        $resultColumn = $fourth + $columnWin;
        echo  "You EARN in column line -> " . $columnWin . " In your wallet have -> ". $resultColumn . "\n";
    }
    if ($board[0][3] === $board[1][3] && $board[0][3] === $board[2][3] ) {
        $resultColumn = $fourth + $columnWin;
        echo  "You EARN in column line -> " . $columnWin . " In your wallet have -> ". $resultColumn . "\n";
    }

}
columns($board, $fourth, $columnWin);

        // rows combination.

function rows($board, $fourth, $rowsWin)
{
    if ($board[0][0] === $board[0][1] && $board[0][0] === $board[0][2] && $board[0][0] === $board[0][3] ) {
        $resultRows  = $fourth + $rowsWin;
        echo  "You EARN in row line -> " . $rowsWin . " In your wallet have -> ". $resultRows . "\n";
    }
    if ($board[1][0] === $board[1][1] && $board[1][0] === $board[1][2] && $board[1][0] === $board[1][3] ) {
        $resultRows = $fourth + $rowsWin;
        echo  "You EARN in row line -> " . $rowsWin . " In your wallet have -> ". $resultRows . "\n";
    }
    if ($board[2][0] === $board[2][1] && $board[2][0] === $board[2][2] && $board[2][0] === $board[2][3] ) {
        $resultRows = $fourth + $rowsWin;
        echo  "You EARN in row line -> " . $rowsWin . " In your wallet have -> ". $resultRows . "\n";
    }


}
rows($board, $fourth, $rowsWin);

        //epic combination.

function epic($board, $fourth, $epicWin)
{
    if($board[0][0] === $board[1][0] && $board[0][0] === $board[2][1] && $board[0][0] === $board[2][2]) {
        $resultEpic = $fourth + $epicWin;
        echo  "You EARN in epic line -> " . $epicWin . " In your wallet have -> ". $resultEpic . "\n";
    }
    if($board[0][3] === $board[1][3] && $board[0][3] === $board[1][2] && $board[0][3] === $board[1][1]) {
        $resultEpic = $fourth + $epicWin;
        echo  "You EARN in epic line -> " . $epicWin . " In your wallet have -> ". $resultEpic . "\n";
    }
    if($board[2][0] === $board[2][1] && $board[2][0] === $board[1][2] && $board[2][0] === $board[0][3]) {
        $resultEpic = $fourth + $epicWin;
        echo  "You EARN in epic line -> " . $epicWin . " In your wallet have -> ". $resultEpic . "\n";
    }
    if($board[2][0] === $board[1][0] && $board[2][0] === $board[0][1] && $board[2][0] === $board[1][2] && $board[2][0] === $board[2][2]) {
        $resultEpic = $fourth + $epicWin;
        echo  "You EARN in epic line -> " . $epicWin . " In your wallet have -> ". $resultEpic . "\n";
    }

}
epic($board, $fourth, $epicWin);

