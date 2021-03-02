<?php declare(strict_types=1);

use PHPUnit\Framework\TestCase;
use mreko\mrz\Mrz;

final class MrzTest extends TestCase
{
    /**
     *
     */
    public function testTd1Case01(): void
    {
        $mrz = new Mrz("ID", "ESP", "BAA000589", "800101", "F", "250101", "ESP",
            "ESPAÑOLA ESPAÑOLA", "CARMEN", "99999999R");


        $this->assertEquals(
            "IDESPBAA000589599999999R<<<<<<" . PHP_EOL . "8001014F2501017ESP<<<<<<<<<<<7" . PHP_EOL . "ESPANOLA<ESPANOLA<<CARMEN<<<<<",
            $mrz->TD1CodeGenerator()
        );
    }

    public function testTd1Case02(): void
    {
        $mrz = new Mrz("id", "srb", "955555546", "680229", "f", "130724", "seRbIA",
            "Test", "milica", "2902968000000", "");


        $this->assertEquals(
            "IDSRB95555554612902968000000<<" . PHP_EOL . "6802295F1307245SRB<<<<<<<<<<<6" . PHP_EOL . "TEST<<MILICA<<<<<<<<<<<<<<<<<<",
            $mrz->TD1CodeGenerator()
        );
    }

    public function testTd1Case03(): void
    {
        $mrz = new Mrz("id", "BRA", "9234", "870322", "M", "130724", "BRA",
            "Kondrat", "Evandro");


        $this->assertEquals(
            "IDBRA9234<<<<<0<<<<<<<<<<<<<<<" . PHP_EOL . "8703226M1307245BRA<<<<<<<<<<<4" . PHP_EOL . "KONDRAT<<EVANDRO<<<<<<<<<<<<<<",
            $mrz->TD1CodeGenerator()
        );
    }
}
