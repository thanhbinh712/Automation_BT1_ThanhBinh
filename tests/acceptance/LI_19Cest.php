<?php
use Step\Acceptance\Admin as AdminTester;
class LI_19Cest
{
    public function _before(AcceptanceTester $I)
    {
    }

    // tests
    public function tryToTest(AdminTester $I, $scenario )
    {
        $I = new AdminTester($scenario);
        $I->loginAsAdmin('https://accounts.google.com/binhbeo0712@gmail.com','Binh123456');
        $I->see('404 Error');
    }
}
