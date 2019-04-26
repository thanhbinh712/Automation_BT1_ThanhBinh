<?php
use Page\Login as LoginPage;
class LI_16Cest
{
    public function _before(AcceptanceTester $I)
    {
    }

    // tests
    public function signUp(AcceptanceTester $I )
        /**
         * @signUp to check when clicking on [Sign up]
         */
    {
        $I->amOnPage(LoginPage::$URL);
        $I->waitForElementVisible(LoginPage::$signUp,30);
        $I->click(LoginPage::$signUp);
        $I->waitForText('Let\'s get started', 30);
        //waitForElement(Xpath, time)
        $I->comment('Sign up page');
    }
}
