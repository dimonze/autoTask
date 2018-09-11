<?php
namespace Page;

class walmartPage
{
    // include url of current page
    public static $URL = '/';


    /**
     * Declare UI map for this page here. CSS or XPath allowed.
     * public static $usernameField = '#username';
     * public static $formSubmitButton = "#mainForm input[type=submit]";
     */

    public static $elements = [
        'searchFiled' => 'input[name=query]',
        'searchBtn' => 'button[name=elc-icon-search-nav]',
        ];
    static $searchFiled = 'input[name=search]';
    static $passwordField = '#mainForm input[name=password]';
    static $loginButton = "#mainForm input[type=submit]";


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
