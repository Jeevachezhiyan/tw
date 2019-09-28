<?php
/**
 * 
 */
class Players
{
	
	public function __construct($player1, $player2, $state)
	{
		$this->player1 = $player1;
		$this->player2 = $player2;
		$this->state = $state;
		$this->count = $count;
	}

	public function playersReturn()
	{
		return $this;
	}

}

$player_obj = new Players('p1','p2','state','3');
$game_obj = new Game($player_obj->playersReturn());

