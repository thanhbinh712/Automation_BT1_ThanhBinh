<?php
use Step\Acceptance\Admin as AdminTester;
class LI_02Cest
{
    public function _before(AcceptanceTester $I)
    {
    }

    // tests
    public function tryToTest(AdminTester $I, $scenario )
    {
        $I = new AdminTester($scenario);
        $I->loginAsAdmin('binhbeo0712@gmail.com','Binh1256');
        $I->see('Wrong password');
    }
}