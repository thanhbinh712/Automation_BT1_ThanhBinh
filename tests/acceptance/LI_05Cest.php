<?php
use Step\Acceptance\Admin as AdminTester;
class LI_05Cest
{
    public function _before(AcceptanceTester $I)
    {
    }

    // tests
    public function tryToTest(AdminTester $I, $scenario )
    {
        $I = new AdminTester($scenario);
        $I->loginAsAdmin('binhbeo0712@gmail.com','    ');
        $I->see('Password field is emty');
    }
}
