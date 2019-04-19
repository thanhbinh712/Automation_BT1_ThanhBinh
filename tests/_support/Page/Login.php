<?php
namespace Page;//noi dinh danh dia chi class

class Login
{
    // include url of current page
    public static $URL = 'https://wordpress.com/log-in?redirect_to=https%3A%2F%2Fwordpress.com%2F';
    public static $usernameField = '//*[@id="usernameOrEmail"]';
    public static $passwordField = '//*[@id="password"]';
    public static $ContinueButton = '//*[@id="primary"]/div/main/div/div[1]/div/form/div[1]/div[2]/button';
    public static $LoginButton = '//*[@id="primary"]/div/main/div/div[1]/div/form/div[1]/div[2]/button';
    public static $headerSignUp = '//*[@id="header"]/div/a/span';
    public static $Logo = '//*[@id="header"]/a[1]/span/svg[2]';
    public static $HyperlinkTermsOfService = '//*[@id="primary"]/div/main/div/div[1]/div/form/div[1]/p/a';
    public static $HyperlinkCreateNewAccount = '//*[@id="primary"]/div/main/div/div[2]/a[1]';
    public static $ContinueWithGGButton = '//*[@id="primary"]/div/main/div/div[1]/div/form/div[2]/div[2]/div/div/div/button/span';
    public static $HyperlinkLostPass = '//*[@id="primary"]/div/main/div/div[2]/a[3]';
    public static $HyperlinkEmailALoginLink = '//*[@id="primary"]/div/main/div/div[2]/a[2]';
    public static $HyperlinkBackToWP = '//*[@id="primary"]/div/main/div/div[2]/a[4]';

    /**
     * Declare UI map for this page here. CSS or XPath allowed.
     * public static $usernameField = '#username';
     * public static $formSubmitButton = "#mainForm input[type=submit]";
     */

    /**
     * Basic route example for your current URL
     * You can append any additional parameter to URL
     * and use it in tests like: Page\Edit::route('/123-post');
     */
    public static function route($param)
    {
        return static::$URL.$param;
    }


}
