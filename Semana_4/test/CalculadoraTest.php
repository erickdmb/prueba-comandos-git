<?php
namespace ErickPcgamer\Semana4\Tests;

use PHPUnit\Framework\TestCase;
use ErickPcgamer\Semana4\Calculadora;

class CalculadoraTest extends TestCase {
    public function test_debe_sumar_dos_numeros() {
        $calc = new Calculadora();
        $this->assertEquals(10, $calc->sumar(7, 3));
    }
}