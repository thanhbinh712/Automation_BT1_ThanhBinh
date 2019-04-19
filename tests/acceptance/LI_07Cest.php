<?php
use Step\Acceptance\Admin2 as AdminTester;
use Page\Login as LoginPage;
class LI_07Cest
{
    public function _before(AcceptanceTester $I)
    {
    }

    // tests
    public function tryToTest(AdminTester $I, $scenario )
    {
        $I = new AdminTester($scenario);
        $I->loginAsAdmin('binhbeo0712@gmail.com','Binh1256');
        $I->see('Show password');
    }
}
