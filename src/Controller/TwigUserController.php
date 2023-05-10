<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TwigUserController extends AbstractController
{
    // Define the basic route with the path "/" and the name "twig_examples"
    /**
     * @Route("/", name="twig_examples")
     */
    public function basic(): Response
    {
        // Render the examples.html.twig template
        return $this->render('examples.html.twig');
    }

    // Define the states route with the path "/states" and the name "state_list"
    /**
     * @Route("/states", name="state_list")
     */
    public function states(): Response
    {
        // Create an array of states with their id, abbreviation, and name
        $states = [
            ['idTypeState' => 1, 'dsAbbreviation' => 'AC', 'dsType' => 'Acre'],
            ['idTypeState' => 2, 'dsAbbreviation' => 'AL', 'dsType' => 'Alagoas'],
            ['idTypeState' => 3, 'dsAbbreviation' => 'AP', 'dsType' => 'Amapá'],
            ['idTypeState' => 4, 'dsAbbreviation' => 'AM', 'dsType' => 'Amazonas'],
            ['idTypeState' => 5, 'dsAbbreviation' => 'BA', 'dsType' => 'Bahia'],
            ['idTypeState' => 6, 'dsAbbreviation' => 'CE', 'dsType' => 'Ceará'],
            ['idTypeState' => 7, 'dsAbbreviation' => 'DF', 'dsType' => 'Distrito Federal'],
            ['idTypeState' => 8, 'dsAbbreviation' => 'ES', 'dsType' => 'Espírito Santo'],
            ['idTypeState' => 9, 'dsAbbreviation' => 'GO', 'dsType' => 'Goiás'],
            ['idTypeState' => 10, 'dsAbbreviation' => 'MA', 'dsType' => 'Maranhão'],
            ['idTypeState' => 11, 'dsAbbreviation' => 'MT', 'dsType' => 'Mato Grosso'],
            ['idTypeState' => 12, 'dsAbbreviation' => 'MS', 'dsType' => 'Mato Grosso do Sul'],
            ['idTypeState' => 13, 'dsAbbreviation' => 'MG', 'dsType' => 'Minas Gerais'],
            ['idTypeState' => 14, 'dsAbbreviation' => 'PA', 'dsType' => 'Pará'],
            ['idTypeState' => 15, 'dsAbbreviation' => 'PB', 'dsType' => 'Paraíba'],
            ['idTypeState' => 16, 'dsAbbreviation' => 'PR', 'dsType' => 'Paraná'],
            ['idTypeState' => 17, 'dsAbbreviation' => 'PE', 'dsType' => 'Pernambuco'],
            ['idTypeState' => 18, 'dsAbbreviation' => 'PI', 'dsType' => 'Piauí'],
            ['idTypeState' => 19, 'dsAbbreviation' => 'RJ', 'dsType' => 'Rio de Janeiro'],
            ['idTypeState' => 20, 'dsAbbreviation' => 'RN', 'dsType' => 'Rio Grande do Norte'],
            ['idTypeState' => 21, 'dsAbbreviation' => 'RS', 'dsType' => 'Rio Grande do Sul'],
            ['idTypeState' => 22, 'dsAbbreviation' => 'RO', 'dsType' => 'Rondônia'],
            ['idTypeState' => 23, 'dsAbbreviation' => 'RR', 'dsType' => 'Roraima'],
            ['idTypeState' => 24, 'dsAbbreviation' => 'SC', 'dsType' => 'Santa Catarina'],
            ['idTypeState' => 25, 'dsAbbreviation' => 'SP', 'dsType' => 'São Paulo'],
            ['idTypeState' => 26, 'dsAbbreviation' => 'SE', 'dsType' => 'Sergipe'],
            ['idTypeState' => 27, 'dsAbbreviation' => 'TO', 'dsType' => 'Tocantins'],
        ];
        // Render the state/list.html.twig template and pass the 'states' array to it
        return $this->render('state/list.html.twig', [
            'states' => $states,
        ]);
    }


}
