<?php
use Step\Acceptance\Admin as AdminTester;
class LI_04Cest
{
    public function _before(AcceptanceTester $I)
    {
    }

    // tests
    public function tryToTest(AdminTester $I, $scenario )
    {
        $I = new AdminTester($scenario);
        $I->loginAsAdmin('','Binh123456');
        $I->see('Enter email address or username');
    }
}
