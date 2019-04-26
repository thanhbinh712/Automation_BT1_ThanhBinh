<?php
use Step\Acceptance\Admin as AdminTester;
class LI_06Cest
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
    public function emptyPassLogin(AdminTester $I, $scenario )
        /**
         * @emtyPassLogin is to login without type password
         */
    {
        $I = new AdminTester($scenario);
        $I->loginAsAdmin('binhbeo0712@gmail.com','');
        $I->waitForText('enter your password', 30);
        $I->comment('Can not login with an empty password');
    }
}
