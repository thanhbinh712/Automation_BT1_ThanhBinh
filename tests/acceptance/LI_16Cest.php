<?php
use Page\Login as LoginPage;
class LI_16Cest
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
        $I->click(LoginPage::$ContinueWithGGButton);
        $I->wait(3);
        $I->see('Continue with Google account');
    }
}