<?php

namespace molina\cep;

use molina\cep\ws\ViaCep;

class Search
{
    public function getAddressFromZipcode(string $zipcode): array
    {
        $zipcode = preg_replace('/[^0-9]/im', '', $zipcode);

        $get = new ViaCep();

        return $get->get($zipcode);
    }
}
