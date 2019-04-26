<?php
use Page\Login as LoginPage;
class LI_12Cest
{
    public function _before(AcceptanceTester $I)
    {
    }

    // tests
    public function checkEmailALink(AcceptanceTester $I )
        /**
         * @checkEmailALink to check [Email me a login link] link
         */
    {
        $I->amOnPage(LoginPage::$URL);
        $I->waitForElement(LoginPage::$emailMeLink, 30);
        $I->click(LoginPage::$emailMeLink);
        $I->waitForText('Email me a login link', 30);
        $I->comment('Email me a login link page');
    }
}
