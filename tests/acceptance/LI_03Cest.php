<?php
use Step\Acceptance\Admin as AdminTester;
class LI_03Cest
{
    public function _before(AcceptanceTester $I)
    {
    }

    // tests
    public function loginEmailInvalid(AdminTester $I, $scenario )
        /**
         * @loginEmailInvalid to login with an invalid Email address
         */
    {
        $I = new AdminTester($scenario);
        $I->loginAsAdmin('bbinhbeo0712@gmail.com','Binh123456');
        $I->waitForText('User does not exist');
        $I->comment("Invalid email address");
    }
}
