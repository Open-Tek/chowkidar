<?php

use Behat\Behat\Context\Context;
use Behat\Gherkin\Node\PyStringNode;
use Behat\Gherkin\Node\TableNode;
use Illuminate\Support\Facades\Auth;

/**
 * Defines application features from the specific context.
 */
class FeatureContext extends \Behat\MinkExtension\Context\MinkContext
{
    /**
     * @Given I am on the login page
     */
    public function iAmOnTheLoginPage()
    {
        $this->visitPath("/login");
    }

    /**
     * @param $email
     *
     * @When I fill :field with :value
     */
    public function ifillInSomething($field, $value)
    {
        $this->fillField($field, $value);
    }

    /**
     * @When I hit :arg1 button
     */
    public function iHitButton($arg1)
    {
        throw new PendingException();
    }


    /**
     * @Then I should be on users home page
     */
    public function iShouldBeOnUsersHomePage()
    {
        $this->assertPageContainsText('Dashboard');
    }

    /**
     * @Given /^I am not logged in$/
     */
    public function iAmNotLoggedIn()
    {
        Auth::logout();
    }
}
