<?php
/**
 * Created by PhpStorm.
 * User: gauravpunjabi
 * Date: 4/24/19
 * Time: 12:02 AM
 */

use Behat\Behat\Context\Context;

class AuthFeatureContext extends FeatureContext
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
     * @Given /^I hit "([^"]*)" button$/
     */
    public function iHitButton($arg1)
    {
        $this->pressButton($arg1);
    }

    /**
     * @Then I should be on users home page
     */
    public function iShouldBeOnUsersHomePage()
    {
        $this->assertPageContainsText('Dashboard');
    }
}
