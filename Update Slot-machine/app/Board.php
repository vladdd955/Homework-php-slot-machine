<?php

namespace App;

class Board
{
    public function display(array $board)
    {
        echo " {$board[0][0]}  | {$board[0][1]}  |  {$board[0][2]}  | {$board[0][3]} \n";
        echo " ---+----+-----+---\n";
        echo " {$board[1][0]}  | {$board[1][1]}  |  {$board[1][2]}  | {$board[1][3]} \n";
        echo " ---+----+-----+---\n";
        echo " {$board[2][0]}  | {$board[2][1]}  |  {$board[2][2]}  | {$board[2][3]}  \n";

    }

}


