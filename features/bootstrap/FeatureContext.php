<?php

use Behat\Behat\Context\Context;
use Behat\Behat\Context\SnippetAcceptingContext;


require_once __DIR__ . '/../../classes/Calculator/Calculator.php';

/**
 * Defines application features from the specific context.
 */
class FeatureContext implements Context, SnippetAcceptingContext
{
    private $first_value;
    private $result;

    /**
     * Initializes context.
     *
     * Every scenario gets its own context instance.
     * You can also pass arbitrary arguments to the
     * context constructor through behat.yml.
     */
    public function __construct()
    {
    }

    /**
     * @Given I have a value :arg1
     */
    public function iHaveAValue($arg1)
    {
        $this->first_value = $arg1;

    }

    /**
     * @When I use GRAMM2NAEL function
     */
    public function iUseGRAMM2NAELFunction()
    {
        $calc = new Calculator();

        $this->result = $calc->GRAMM2NAEL($this->first_value);


    }

    /**
     * @When I use NAEL2GRAMM function
     */
    public function iUseNAEL2GRAMMFunction()
    {
        $calc = new Calculator();

        $this->result = $calc->NAEL2GRAMM($this->first_value);


    }

    /**
     * @Then I should get :arg1
     */
    public function iShouldGet($arg1)
    {
        if ($this->result != $arg1) {
            throw new Exception("Converting {$this->first_value} to other currency did not equal ".
             "to {$arg1} but instead returned '{$this->result}'");
        }
    }
}
