<?php

namespace Alura\Banco\Modelo\Conta;

class contaPoupanca extends Conta
{
    protected function percentualTarifa(): float
    {
        return 0.03;
    }
}