<?php
use Step\Acceptance\Admin as AdminTester;
class LI_05Cest
{
    public function _before(AcceptanceTester $I)
    {
    }
    /**
     * @param AdminTester $I
     * @param $scenario
     * @throws Exception
     */

    // tests
    public function spacePassLogin(AdminTester $I, $scenario )
        /**
         * @spacePassLogin is to login with password is spaces
         */
    {
        $I = new AdminTester($scenario);
        $I->loginAsAdmin('binhbeo0712@gmail.com','    ');
        $I->waitForText('ERROR', 30);
        $I->comment('The password field is emmty');
    }
}
