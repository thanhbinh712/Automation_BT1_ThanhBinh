<?php
use Page\Login as LoginPage;
class LI_10Cest
{
    public function _before(AcceptanceTester $I)
    {
    }

    // tests
    public function checkContinueGGButton(AcceptanceTester $I )
        /**
         * @checkContinueGGButton to check when clicking on [Continue with Google] button
         */
    {
        $I->amOnPage(LoginPage::$URL);
        $I->waitForElementVisible(LoginPage::$continueGGButton,5);
        $I->click(LoginPage::$continueGGButton);
        $I->waitForText('Sign in with google', 5);
        //waitForElement(Xpath, time)
        $I->comment('Continue with Google page');
    }
}
