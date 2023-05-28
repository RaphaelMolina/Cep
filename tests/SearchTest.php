<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;
use \molina\cep\Search;

class SearchTest extends TestCase{

    /**
     * @dataProvider dadosTeste
     */

    public function testGetAddressFromZipcodeDefaultUsage(string $input, array $esperado){
        // $result = "ok1";
        // $this->assertEquals("ok", $result);

        $resultado = new Search;
        // $resultado = $resultado->getAddressFromZipcode('11665310');
        $resultado = $resultado->getAddressFromZipcode($input);
        // $esperado = [

        //     "cep" => "11665-310",
        //     "logradouro" => "Avenida Rio Grande do Norte",
        //     "complemento" => "até 800/801",
        //     "bairro" => "Indaiá",
        //     "localidade" => "Caraguatatuba",
        //     "uf" => "SP",
        //     "ibge" => "3510500",
        //     "gia" => "2549",
        //     "ddd" => "12",
        //     "siafi" => "6311"
        // ];

        // print_r($resultado);
        // exit();
        $this->assertEquals($esperado, $resultado);
    }

    public static function dadosTeste(): array{
        return [
            "Praça da Sé" => 
            [
                "01001000",
                [
                    "cep"=> "01001-000",
                    "logradouro"=> "Praça da Sé",
                    "complemento"=> "lado ímpar",
                    "bairro"=> "Sé",
                    "localidade"=> "São Paulo",
                    "uf"=> "SP",
                    "ibge"=> "3550308",
                    "gia"=> "1004",
                    "ddd"=> "11",
                    "siafi"=> "7107"
                ]
            ],
            "Indaiá" => 
            [
                "11665310",
                [
                    "cep" => "11665-310",
                    "logradouro" => "Avenida Rio Grande do Norte",
                    "complemento" => "até 800/801",
                    "bairro" => "Indaiá",
                    "localidade" => "Caraguatatuba",
                    "uf" => "SP",
                    "ibge" => "3510500",
                    "gia" => "2549",
                    "ddd" => "12",
                    "siafi" => "6311"
                ]
            ]
        ];
    }

}