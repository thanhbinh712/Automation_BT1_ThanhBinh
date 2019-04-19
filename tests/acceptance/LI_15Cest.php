<?php
use Step\Acceptance\Admin as AdminTester;
class LI_15Cest
{
    public function _before(AcceptanceTester $I)
    {
    }

    // tests
    public function tryToTest(AdminTester $I, $scenario )
    {
        $I = new AdminTester($scenario);
        $I->loginAsAdmin('binhbeo0712@gmail.com','Binh123456');
        $I->see('Pass/HomePage');
        $I->closeTab();
        $I->openNewTab();
        $I->see('Login');
    }
}
