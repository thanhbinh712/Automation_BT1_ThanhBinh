<?php
use Page\Login as LoginPage;
class LI_13Cest
{
    public function _before(AcceptanceTester $I)
    {
    }

    // tests
    public function checkLostPass(AcceptanceTester $I )
        /**
         * @checkLostPass to check when clicking on [Lost your password] link
         */
    {
        $I->amOnPage(LoginPage::$URL);
        $I->waitForElement(LoginPage::$forgotPassLink, 30);
        $I->click(LoginPage::$forgotPassLink);
        $I->waitForText('Lost your password', 30);
        $I->comment('Lost password page');
    }
}
