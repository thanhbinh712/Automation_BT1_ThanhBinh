<?php
use Step\Acceptance\Admin as AdminTester;
class LI_03Cest
{
    public function _before(AcceptanceTester $I)
    {
    }

    // tests
    public function tryToTest(AdminTester $I, $scenario )
    {
        $I = new AdminTester($scenario);
        $I->loginAsAdmin('bbinhbeo0712@gmail.com','Binh123456');
        $I->see('Email address or username is not correct');
    }
}
