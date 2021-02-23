<?php
namespace App\Entity;

// use App\Controller\PlayerController;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity()
 * @ORM\Table(name="Player")
 */
class Player
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string")
     */
    private $username;

    /**
     * @ORM\Column(type="string")
     */
    private $email;

	/**
	 * @ORM\ManyToMany(targetEntity="Game", mappedBy="owners")
	 */
	private $games;

	/**
	 * @ORM\OneToMany(targetEntity="Score", mappedBy="player")
	 */
	private $scores;

	public function getId() { 
 		return $this->id; 
	}

	public function getUsername() { 
 		return $this->username; 
	} 

	public function setUsername($username) {  
		$this->username = $username; 
	} 

	public function getEmail() { 
 		return $this->email; 
	} 

	public function setEmail($email) {  
		$this->email = $email; 
	}

	public function getGames() { 
 		return $this->games; 
	} 

	public function setGames($games) {  
		$this->games = $games; 
	} 

	public function getScores() { 
 		return $this->scores; 
	} 

	public function setScores($scores) {  
		$this->scores = $scores; 
	} 
}