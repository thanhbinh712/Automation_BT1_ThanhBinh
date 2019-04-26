<?php
use Step\Acceptance\Admin as AdminTester;

class LI_07Cest
{
    public function _before(AcceptanceTester $I)
    {
    }

    // tests
    public function showPass(AdminTester $I, $scenario )
        /**
         * @showPass is to show the password when clicking on eye icon
         */
    {
        $I = new AdminTester($scenario);
        $I->showPassword('binhbeo0712@gmail.com','Binh123456');
        $I->comment('Show password');
    }
}
