<?php
use Step\Acceptance\Admin as AdminTester;
class LI_20Cest
{
    public function _before(AcceptanceTester $I)
    {
    }

    // tests
    public function loginWithURL(AdminTester $I, $scenario )
        /**
         * @loginWithURL to check when login with an URL
         */
    {
        $I = new AdminTester($scenario);
        $I->loginAsAdmin('https://accounts.google.com/binhbeo0712@gmail.com','Binh123456');
        $I->waitForText('404', 5);
        $I->comment('404 Error');
    }
}
