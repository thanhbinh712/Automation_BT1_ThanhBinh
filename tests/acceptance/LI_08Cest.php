<?php
use Step\Acceptance\Admin as AdminTester;

class LI_08Cest
{
    public function _before(AcceptanceTester $I)
    {
    }

    // tests
    public function hidePass(AdminTester $I, $scenario )
        /**
         * @hidePass to check the password is *** when typing a password
         */
    {
        $I = new AdminTester($scenario);
        $I->checkHidePassword('binhbeo0712@gmail.com','Binh123456');
        $I->comment('Password is hidden as •');
    }
}