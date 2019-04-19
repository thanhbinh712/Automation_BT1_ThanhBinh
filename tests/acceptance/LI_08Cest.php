<?php
//use Step\Acceptance\Admin as AdminTester;
use Page\Login as LoginPage;
class LI_08Cest
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
        $I->click(LoginPage::$HyperlinkTermsOfService);
        $I->wait(3);
        $I->see('Terms of service page');
    }
}
