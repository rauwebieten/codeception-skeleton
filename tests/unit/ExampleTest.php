<?php

class ExampleTest extends \Codeception\Test\Unit
{
    /**
     * @var \UnitTester
     */
    protected $tester;
    
    protected function _before()
    {
    }

    protected function _after()
    {
    }

    // tests
    public function testSomeFeature()
    {
        $example = new \Src\Example();
        $result = $example->getNumber(0);

        $this->assertEquals('zero', $result);
    }
}