<?php
use Step\Acceptance\Admin as AdminTester;
class LI_04Cest
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
    public function emptyEmailLogin(AdminTester $I, $scenario )
        /**
         * @emptyEmailLogin is to login without type on Email address field
         */
    {
        $I = new AdminTester($scenario);
        $I->loginAsAdmin('','Binh123456');
        $I->waitForText('Please enter a username or email address', 5);
        $I->comment('Password is empty');
    }
}
