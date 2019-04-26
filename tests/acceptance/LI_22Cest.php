<?php
use Step\Acceptance\Admin as AdminTester;
class LI_22Cest
{
    public function _before(AcceptanceTester $I)
    {
    }

    // tests
    public function tryToTest(AdminTester $I, $scenario)
    {
        $I = new AdminTester($scenario);
        $I->loginAsAdmin('binhbeo0712@gmail.com', 'Binh123456');
        $I->waitForText('Followed Sites', 30);
        $I->closeTab(\Page\Login::$URL);
        $I->openNewTab(\Page\Login::$URL);
        $I->waitForText('Log in', 10);
        $I->comment('Log out mode');
    }
}