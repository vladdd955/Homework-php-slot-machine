<?php

namespace App;



class SlotLogic
{
    private int $cash;
    private int $payedForSpin;

    public function __construct(int $cash, int $payedForSpin)
    {
        $this->cash = $cash;
        $this->payedForSpin = $payedForSpin;
    }

    public function userMoney(int $cash, int $payedForSpin): int
    {
        return $this->cash - ($this->payedForSpin * 4);
    }


    public function getColumns($board, $fourth, $columnWin)
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


    public function getRows($board, $fourth, $rowsWin)
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


    public function getEpic($board, $fourth, $epicWin)
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

}