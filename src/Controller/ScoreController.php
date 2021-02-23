<?php

namespace App\Controller;

use App\Entity\Score;
use App\Entity\Game;
use App\Entity\Player;
use App\FakeData;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Doctrine\ORM\EntityManagerInterface;

class ScoreController extends AbstractController
{


    public function index(Request $request, EntityManagerInterface $entityManager): Response
    {
        // $scores = FakeData::scores();

        // $games = FakeData::games();
        // $players = FakeData::players();

        $scores = $entityManager
            ->getRepository(Score::class)
            ->findAll();
        $games = $entityManager
            ->getRepository(Game::class)
            ->findAll();
        $players = $entityManager
            ->getRepository(Player::class)
            ->findAll();

        return $this->render("score/index", ["scores" => $scores,
            "games" => $games, "players" => $players]);
    }

    public function add(Request $request, EntityManagerInterface $entityManager): Response
    {
        $score = new Score();

        if ($request->getMethod() == Request::METHOD_GET) {
            /**
             * @todo enregistrer l'objet
             */

            $game = $entityManager
                ->getRepository(Game::class)
                ->find($request->get('game'));
            $player = $entityManager
                ->getRepository(Player::class)
                ->find($request->get('player'));
            
            $score->setScore($request->get('score'));
            $score->setGame($game);
            $score->setPlayer($player);
            $score->setCreatedAt();

            $entityManager->persist($score);
            $entityManager->flush();

            return $this->redirectTo("/score");
        }
    }

    public function delete($id, EntityManagerInterface $entityManager): Response
    {
        /**
         * @todo supprimer l'objet
         */
        $score = $entityManager
            ->getRepository(Score::class)
            ->find($id);

        $entityManager->remove($score);
        $entityManager->flush();

        return $this->redirectTo("/score");

    }

}