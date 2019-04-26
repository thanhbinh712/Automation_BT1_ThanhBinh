<?php
use Step\Acceptance\Admin as AdminTester;
class LI_02Cest
{
    public function _before(AcceptanceTester $I)
    {
    }

    // tests
    public function loginPassInvalid(AdminTester $I, $scenario )
        /**
         * @loginPassInvalid to login with an invalid password
         */
    {
        $I = new AdminTester($scenario);
        $I->loginAsAdmin('binhbeo0712@gmail.com','Binh1256');
        $I->waitForText("Followed Sites", 5);
        $I->comment("Wrong password!");
    }
}
