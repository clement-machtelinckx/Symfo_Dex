<?php

namespace App\Controller;

use App\Repository\PokemonRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class PokemonController extends AbstractController
{

    #[Route('/api/pokemons', name: 'get_pokemons', methods: ['GET'])]
    public function getPokemons(PokemonRepository $pokemonRepository): JsonResponse
    {
        $pokemons = $pokemonRepository->findAllOrderedByPokeIdDesc();
        return new JsonResponse($pokemons);
    }
    
    #[Route('/api/pokemons/pokeId/{pokeId}', name: 'check_pokemon', methods: ['GET'])]
    public function checkPokemon(int $pokeId, PokemonRepository $pokemonRepository): JsonResponse
    {
        $pokemon = $pokemonRepository->findOneByPokeId($pokeId);

        if ($pokemon) {
            return new JsonResponse(['exists' => true, 'pokemon' => $pokemon->getName()]);
        }

        return new JsonResponse(['exists' => false]);
    }
}