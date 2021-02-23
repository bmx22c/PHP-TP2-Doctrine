<?php
namespace App\Entity;

// use App\Controller\PlayerController;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity()
 * @ORM\Table(name="Game")
 */
class Game
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
    private $name;

    /**
     * @ORM\Column(type="string")
     */
    private $image;

	/**
	 * @ORM\ManyToMany(targetEntity="Player", inversedBy="games")
	 */
	private $owners;

	/**
	 * @ORM\OneToMany(targetEntity="Score", mappedBy="game")
	 */
	private $scores;

	public function getId() { 
 		return $this->id; 
	}

	public function getName() { 
 		return $this->name; 
	} 

	public function setName($name) {  
		$this->name = $name; 
	} 

	public function getImage() { 
 		return $this->image; 
	} 

	public function setImage($image) {  
		$this->image = $image; 
	}

	public function getOwners() { 
 		return $this->owners; 
	} 

	public function setOwners($owners) {  
		$this->owners = $owners; 
	} 

	public function getScores() { 
 		return $this->scores; 
	} 

	public function setScores($scores) {  
		$this->scores = $scores; 
	} 
}