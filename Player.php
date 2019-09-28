<?php

class Player{
    public $type;

    public function __construct($type){
        $this->type = $type;
    }

    public function getInput($round, $otherChoiceHistory){
        switch($this->type){
            case 'COOPERATIVE':
                return $this->coOperateInput();
            case 'EVILBOT':
                return $this->evilBotInput();
            case 'COPYCAT':
                return $this->copyCatInput($round, $otherChoiceHistory);
            default:
                return $this->normalPlayerInput();
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
