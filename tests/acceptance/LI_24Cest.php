<?php
use Step\Acceptance\Admin as AdminTester;
class LI_24Cest
{
    public function _before(AcceptanceTester $I)
    {
    }

    // tests
    public function enterKeyboard(AdminTester $I, $scenario)
    {
        $I = new AdminTester($scenario);
        $I->checkEnter('binhbeo0712@gmail.com', 'Binh123456');
        $I->waitForElement(\Page\Login::$continueButton, 5);
        $I->comment('Enter keys is OK');
    }
}