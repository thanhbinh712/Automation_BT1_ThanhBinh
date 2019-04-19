<?php
use Page\Login as LoginPage;
class LI_14Cest
{
    public function _before(AcceptanceTester $I)
    {
    }

    // tests
    public function tryToTest(AcceptanceTester $I )
    {
        $I->amOnPage('//log-in?redirect_to=https%3A%2F%2Fwordpress.com%2F');
        //$I = new AdminTester($scenario);
        $I->wait(5);
        $I->doubleClick(LoginPage::$usernameField);
        $I->wait(2);
        $I->see('Show remembered account');
    }
}
