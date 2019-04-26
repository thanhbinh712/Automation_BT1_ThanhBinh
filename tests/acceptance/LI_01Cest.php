<?php
use Step\Acceptance\Admin as AdminTester;
class LI_01Cest
{
    public function _before(AcceptanceTester $I)
    {
    }

    // tests

    /**
     * @param AdminTester $I
     * @param $scenario
     * @throws Exception
     */
    public function loginSuccess(AdminTester $I, $scenario )
    {
        $I = new AdminTester($scenario);
        $I->loginAsAdmin('binhbeo0712@gmail.com','Binh123456');
        $I->waitForText('Welcome!', 30);
        $I->comment('Login Success');
    }
}
