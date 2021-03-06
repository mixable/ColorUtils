<?php
declare(strict_types=1);

namespace Mixable\Test\TestCase\Color;

use Mixable\Color\Calculate;

/**
 * Class CalculateTest
 *
 * @package Mixable\Test\TestCase\Color
 */
class CalculateTest extends \PHPUnit\Framework\TestCase
{
    /**
     * @return void
     */
    public function testReadableTextColorForBackgroundColor()
    {
        $result = Calculate::readableTextColorForBackgroundColor('#ffffff');
        $expected = '#000000';
        $this->assertEquals($result, $expected);

        $result = Calculate::readableTextColorForBackgroundColor('#555555');
        $expected = '#ffffff';
        $this->assertEquals($result, $expected);

        $result = Calculate::readableTextColorForBackgroundColor('#000000');
        $expected = '#ffffff';
        $this->assertEquals($result, $expected);
    }
}