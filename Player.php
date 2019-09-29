<?php

class Player{
    public $type;

    public function __construct($type){
        $this->type = $type;
    }

    public function getInput($round, $otherChoiceHistory){        
        switch($this->type){
            case 'KINDBOT':
                return $this->coOperateInput();
            case 'EVILBOT':
                return $this->evilBotInput();
            case 'COPYBOT':
                return $this->copyCatInput($round, $otherChoiceHistory);
            case 'GRUDGE':
                return $this->grudgeInput($round, $otherChoiceHistory);
            default:
                return $this->normalPlayerInput();
        }
    }

    private function getTournment()
    {
        $game = new Game();
        $game->printScore();
    }

    private function grudgeInput($currentRound,$otherChoiceHistory) {

        if($currentRound === 0)
        {
            return CHOICE[0];
        }
        else{
                if(in_array(CHOICE[1], $otherChoiceHistory)) {
                    return $this->evilBotInput();
                }
                else{
                    return $this->coOperateInput();
                }
        }
    }

    private function coOperateInput(){
        return CHOICE[0];
    }

    private function evilBotInput(){
        return CHOICE[1];
    }

    private function copyCatInput($currentRound, $otherChoiceHistory){
        if($currentRound === 0){
            return CHOICE[0];
        } else {
                return $otherChoiceHistory[count($otherChoiceHistory) - 1];
        }
    }

    private function normalPlayerInput(){
        return CHOICE[$this->getRandom()];
    }

    private function getRandom(){
        return rand(0, count(CHOICE) - 1 );
    }
}
