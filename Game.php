<?php

include 'Constant.php';

class Game{

    private $p1, $p2;
    private $p1ScoreHistory = [];
    private $p2ScoreHistory = [];
    private $p1ChoiceHistory = [];
    private $p2ChoiceHistory = [];

    public function __construct($p1, $p2){
        $this->p1 = $p1;
        $this->p2 = $p2;
    }

    public function play($rounds){
        for ($currentRound=0; $currentRound < $rounds; $currentRound++) {

            $p1Choice = $this->p1->getInput($currentRound, $this->p2ChoiceHistory);

            $p2Choice = $this->p2->getInput($currentRound, $this->p1ChoiceHistory);

            array_push($this->p1ChoiceHistory, $p1Choice);
            array_push($this->p2ChoiceHistory, $p2Choice);
            $this->calculateScore();
        }
    }

    private function calculateScore(){
        $p1Choice = $this->p1ChoiceHistory[count($this->p1ChoiceHistory) - 1];
        $p2Choice = $this->p2ChoiceHistory[count($this->p2ChoiceHistory) - 1];

        if($p1Choice === CHOICE[0] && $p2Choice === CHOICE[0] ){
            array_push($this->p1ScoreHistory, 2);
            array_push($this->p2ScoreHistory, 2);
        } else if($p1Choice === CHOICE[1] && $p2Choice === CHOICE[1] ){
            array_push($this->p1ScoreHistory, 0);
            array_push($this->p2ScoreHistory, 0);
        }  else if($p1Choice === CHOICE[0] && $p2Choice === CHOICE[1] ){
            array_push($this->p1ScoreHistory, -1);
            array_push($this->p2ScoreHistory, 3);
        }  else {
            array_push($this->p1ScoreHistory, 3);
            array_push($this->p2ScoreHistory, -1);
        }
    }

    public function  printScore(){

        $p1ScoreTmp = $p2ScoreTmp = 0;

        for ($i=0; $i < count($this->p1ScoreHistory); $i++) {

            $p1ScoreTmp += $this->p1ScoreHistory[$i];
            $p2ScoreTmp += $this->p2ScoreHistory[$i];

            echo "Round " . ($i + 1) . "\n";
            echo "Player 1 " . $this->p1ChoiceHistory[$i] . " Score : " . $p1ScoreTmp . "\n";
            echo "Player 2 " . $this->p2ChoiceHistory[$i] . " Score : " . $p2ScoreTmp . "\n";
            echo "\n";
        }
        $this->announceWinner($p1ScoreTmp, $p2ScoreTmp);

    }

    private function announceWinner($p1Score, $p2Score){

        return array($p1Score, $p2Score);
        if($p1Score === $p2Score){
            echo 'Match is draw';
        } else if($p1Score > $p2Score){
            echo 'P1 won';
        } else {
            echo 'P2 won';
        }
    }


}
