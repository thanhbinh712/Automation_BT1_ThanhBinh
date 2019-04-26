<?php
//use Step\Acceptance\Admin as AdminTester;
use Page\Login as LoginPage;
class LI_09Cest
{
    public function _before(AcceptanceTester $I)
    {
    }
    /**
     * @param AcceptanceTester $I
     * @throws Exception
     */

    // test2s
    public function clickOnTOSLink(AcceptanceTester $I )
        /**
         * @clickOnTOSLink to click on link Terms of Service
         */

    {
        $I->amOnPage(LoginPage::$URL);
        $I->waitForElement(LoginPage::$termsOfServiceLink, 10);
        $I->click(LoginPage::$termsOfServiceLink);
        $I->waitForText('Terms of Service', 5);
        //waitForElement(Xpath, time)
        $I->comment('Terms of service page');

    }
}
