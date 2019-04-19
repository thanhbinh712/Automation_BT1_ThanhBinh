<?php
use Step\Acceptance\Admin as AdminTester;
class LI_06Cest
{
    public function _before(AcceptanceTester $I)
    {
    }

    // tests
    public function tryToTest(AdminTester $I, $scenario )
    {
        $I = new AdminTester($scenario);
        $I->loginAsAdmin('binhbeo0712@gmail.com','');
        $I->see('Enter password');
    }
}
