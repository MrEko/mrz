<?php declare(strict_types=1);

use PHPUnit\Framework\TestCase;
use mreko\mrz\Helper;

final class HelperTest extends TestCase
{
    /**
     *
     */
    public function testField(): void
    {
        $this->assertEquals(
            'STRING<<',
            Helper::field('string', 8)
        );
    }

    public function testTransliterate(): void
    {
        $this->assertEquals(
            'EVANDRO<KONDRAT',
            Helper::transliterate('evandro kondrat')
        );
    }

    public function testSex(): void
    {
        $this->assertEquals(
            'M',
            Helper::sex('m')
        );
    }

    public function testSex1(): void
    {
        $this->expectException(Exception::class);
        $this->expectExceptionMessage('Sex Error');

        Helper::sex('X');
    }

    public function testCountry(): void
    {
        $this->assertEquals(
            'ALB',
            Helper::country('alb')
        );
    }

    public function testCountry1(): void
    {
        $this->assertEquals(
            'YEM',
            Helper::country('yemen')
        );
    }

    public function testCountry2(): void
    {
        $this->assertEquals(
            'SRB',
            Helper::country('seRbIA')
        );
    }

    public function testHash(): void
    {
        $this->assertEquals(
            '7',
            Helper::hash_string('ABCDEFGHIJKLMNOPQRSTUVWXYZ')
        );

        $this->assertEquals(
            '7',
            Helper::hash_string('0123456789')
        );

        $this->assertEquals(
            '0',
            Helper::hash_string('0123456789ABCDEF')
        );

        $this->assertEquals(
            '0',
            Helper::hash_string('0')
        );
    }
}
