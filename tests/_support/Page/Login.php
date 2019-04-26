<?php
namespace Page;//noi dinh danh dia chi class

class Login
{
    public static $URL = '/log-in?redirect_to=https%3A%2F%2Fwordpress.com%2F';

    public static $usernameField = '//input[@id="usernameOrEmail"]';

    public static $passwordField = '//input[@id="password"]';

    public static $eyeIcon = '//span[@class="form-password-input__toggle form-password-input__toggle-visibility"]';

    public static $continueButton = 'Continue';

    public static $loginButton = 'Log In';

    public static $signUp = 'Sign Up';

    public static $logoWordpress = '//span[@class="masterbar__item-content"]';

    public static $termsOfServiceLink = '(//p[@class="login__form-terms"])/a[1]';

    public static $createNewAccountLink = '(//div[@class="wp-login__links"])/a[1]';

    public static $emailMeLink = '(//div[@class="wp-login__links"])/a[2]';

    public static $forgotPassLink = '((//div[@class="wp-login__links"])/a[3]';

    public static $backToWordpressLink = '(//div[@class="wp-login__links"])/a[4]';

    public static $passwordText = '//input[@type="password"][@class="form-text-input"]';

    public static $continueGGButton = 'Continue with Google';

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
