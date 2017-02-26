<?php
use PHPUnit\Framework\TestCase;

class Issue2526Test extends TestCase
{
    public function dataProvider()
    {
        throw new \Exception('oops');
    }

    /**
     * @dataProvider dataProvider
     */
    public function testFilterThisName()
    {
        $this->assertTrue(true);
    }
}
