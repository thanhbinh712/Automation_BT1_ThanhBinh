<?php
use Page\Login as LoginPage;
class LI_11Cest
{
    public function _before(AcceptanceTester $I)
    {
    }

    // tests
    public function checkCreateAccountLink(AcceptanceTester $I )
        /**
         * @checkCreateAccountlink to check when clicking on [Create a new account] link
         */
    {
        $I->amOnPage(LoginPage::$URL);
        $I->waitForElement(LoginPage::$createNewAccountLink, 30);
        $I->click(LoginPage::$createNewAccountLink);
        $I->waitForText('Let\'s get started', 30);
        $I->comment('Sign up page');
    }
}
