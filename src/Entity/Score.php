<?php
namespace App\Entity;

// use App\Controller\PlayerController;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity()
 * @ORM\Table(name="Score")
 */
class Score
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer")
     */
    private $score;

    /**
     * @ORM\Column(type="datetime")
	 * @var string A "Y-m-d H:i:s" formatted value
     */
    private $created_at;

	/**
	 * @ORM\ManyToOne(targetEntity="Game", inversedBy="scores")
	 */
	private $game;

	/**
	 * @ORM\ManyToOne(targetEntity="Player", inversedBy="scores")
	 */
	private $player;

	public function getId() { 
 		return $this->id; 
	}

	public function getScore() { 
 		return $this->score; 
	} 

	public function setScore($score) {  
		$this->score = $score; 
	} 

	public function getCreatedAt() { 
 		return $this->created_at; 
	} 

	public function setCreatedAt() {  
		$this->created_at = new \DateTime("now"); 
	} 

	public function getGame() { 
 		return $this->game; 
	} 

	public function setGame($game) {  
		$this->game = $game; 
	} 

	public function getPlayer() { 
 		return $this->player; 
	} 

	public function setPlayer($player) {  
		$this->player = $player; 
	} 
}