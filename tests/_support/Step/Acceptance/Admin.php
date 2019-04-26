<?php
namespace Step\Acceptance;
use Page\Login as LoginPage;
use Page\Login;

class Admin extends \AcceptanceTester
{

    public function loginAsAdmin($name,$password)
        /**
         * @loginAsAs=dmin to create the Login function
         */
    {
        $I = $this;
        $I->amOnPage(LoginPage::$URL);
        $I->wait(2);
        $I->fillField(LoginPage::$usernameField, $name);
        $I->click(LoginPage::$continueButton);
        $I->wait(2);
        $I->fillField(LoginPage::$passwordField, $password);
        $I->click(LoginPage::$loginButton);
        $I->waitForText('Welcome', 15);
    }

    public function showPassword($name,$password)
        /**
         * @showPassword to check when clicking on eye icon
         */
    {
        $I = $this;
        $I->amOnPage(LoginPage::$URL);
        $I->waitForElementVisible(LoginPage::$usernameField, 30);
        $I->fillField(LoginPage::$usernameField, $name);
        $I->waitForElementVisible(LoginPage::$continueButton, 30);
        $I->click(LoginPage::$continueButton);
        $I->waitForElementVisible(LoginPage::$passwordField, 30);
        $I->fillField(LoginPage::$passwordField, $password);
        $I->waitForElementVisible(LoginPage::$eyeIcon, 30);
        $I->click(LoginPage::$eyeIcon);
        $I->waitForElementVisible(LoginPage::$passwordText, 30);
    }

    public function checkHidePassword($name,$password)
        /**
         * @checkHidePassword to check password if it's hidden as • when we type
         */
    {
        $I = $this;
        $I->amOnPage(LoginPage::$URL);
        $I->waitForElementVisible(LoginPage::$usernameField, 30);
        $I->fillField(LoginPage::$usernameField, $name);
        $I->waitForElementVisible(LoginPage::$continueButton, 30);
        $I->click(LoginPage::$continueButton);
        $I->waitForElementVisible(LoginPage::$passwordField, 30);
        $I->fillField(LoginPage::$passwordField, $password);
       // $I->waitForElementVisible(LoginPage::$eyeIcon, 5);
//        $I->click(LoginPage::$eyeIcon);
        $I->waitForElementVisible(LoginPage::$passwordText, 30);
    }
    public function checkEnter($name, $password)
        /**
         * @checkEnter to check keys Enter
         */
    {
        $I = $this;
        $I->amOnPage(LoginPage::$URL);
        $I->waitForElementVisible(LoginPage::$usernameField, 30);
        $I->fillField(LoginPage::$usernameField, $name);
        $I->pressKey(Login::$continueButton,\Facebook\WebDriver\WebDriverKeys::ENTER);
    }
}