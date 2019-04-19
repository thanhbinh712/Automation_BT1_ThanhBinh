<?php 

class LI_01Cest
{
    public function _before(AcceptanceTester $I)
    {
    }

    // tests
    public function tryToTest(AcceptanceTester $I, $scenario )
    {
        $I = new AcceptanceTester($scenario);
        $I->loginAsAdmin('binhbeo0712@gmail.com', 'Binh123456');
        $I->see('Login success');
    }
}
