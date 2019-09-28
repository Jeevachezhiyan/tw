<?php
/**
 * 
 */
class Players
{	


	public function play($player1,$player2,$count)
	{
		for($i=1;$i<$count;$i++)
		{	
			$p1 = $this->possiblities($player1);
			// echo "player1".$p1;
			// echo "<pre>";
			
			$p2 = $this->possiblities($player2);
			//echo "player2".$p2;
			// echo "<pre>";
			
			if($p1 == 'Cooperate' && $p2 =='Cooperate')
			{
				$p1score = '2';
				$p2score = '2';
			}
			elseif ($p1 == 'Cooperate' && $p2 == 'Cheat') {
				$p1score = '-1';
				$p2score = '3';
			}
			elseif ($p1 == 'Cheat' && $p2 == 'Cooperate') {
	            $p1score = '3';
	            $p2score = '-1';
			}
			else
			{ 
				$p1score = '0';
	            $p2score = '0';

			}

			$p1total[] = $p1score;
			$p2total[] = $p2score;
		}
		$p1totalfinal1 = array_sum($p1total);
		echo "Player1 total:".$p1totalfinal1;
		echo "<pre>";
		$p1totalfinal2 = array_sum($p2total);
		echo "Player2 total:".$p1totalfinal2;

	}
 
	public function possiblities($player)
	{
		$data = rand(1,2);

		if($player == 'bot')
		{
			echo $player;
			return 'Cooperate';
		}
		elseif ($player == 'critical' ) {
			echo $player;
			return 'Cheat';	
		}
		else
		{
			if($data == 1)
			{
				return 'Cooperate';	
			}
			else
			{
				return 'Cheat';
			}	
		}	
	}
}

$obj = new Players();


$name1 = 'critical';
$name2 = 'bot';

$count =5;
print_r($obj->play($name1,$name2,$count));





