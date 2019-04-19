<?php 

class FirstCest
{
    public function _before(AcceptanceTester $I)
    {
    }

    public function frontpageWorks(AcceptanceTester $I)
    {
        $I->amOnPage('//log-in?redirect_to=https%3A%2F%2Fwordpress.com%2F');
        $I->fillField('//*[@id="usernameOrEmail"]', 'binhbeo0712@gmail.com');
        $I->click('//*[@id="primary"]/div/main/div/div[1]/div/form/div[1]/div[2]/button');
        $I->wait(2);
        $I->fillField('//*[@id="password"]', 'Binh123456');
        $I->click('//*[@id="primary"]/div/main/div/div[1]/div/form/div[1]/div[2]/button');
        $I->wait(3);
        $I->see('Welcome');

    }
}

