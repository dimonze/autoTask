<?php

use Page\walmartPage;
use Codeception\Step\Assertion;
require_once 'Helper/XLSXReader.php';


/**
 * Inherited Methods
 * @method void wantToTest($text)
 * @method void wantTo($text)
 * @method void execute($callable)
 * @method void expectTo($prediction)
 * @method void expect($prediction)
 * @method void amGoingTo($argumentation)
 * @method void am($role)
 * @method void lookForwardTo($achieveValue)
 * @method void comment($description)
 * @method \Codeception\Lib\Friend haveFriend($name, $actorClass = NULL)
 *
 * @SuppressWarnings(PHPMD)
*/
class AcceptanceTester extends \Codeception\Actor
{
    use _generated\AcceptanceTesterActions;

    private $xlsFile;

    /**
     * @Given I am on :arg1
     */
    public function iAmOn($arg1)
    {
        $this->amOnPage($arg1);
    }

    /**
     * @Given I should see :arg1
     * @throws Exception
     */
    public function iShouldSee($arg1)
    {
        $this->waitForText($arg1);
    }

    /**
     * @Given I fill in :arg1 with :arg2
     */
    public function iFillInWith($arg1, $arg2)
    {
        $this->fillField(walmartPage::$elements[$arg1], $arg2);
    }

    /**
     * @Given I press search btn
     */
    public function iPressSearchBtn()
    {
       $this->click(walmartPage::$elements['searchBtn']);
    }

    /**
     * @Given I click on :arg1
     */
    public function iClickOn($arg1)
    {
        $this->click($arg1);
    }

    /**
     * @Given I open xls file :arg1
     * @throws Exception
     */
    public function iOpenXlsFile($arg1)
    {
        $path = realpath(__DIR__ . '/xls/' . $arg1);
        $this->xlsFile = new XLSXReader($path);
    }

    /**
     * @Given It should contains
     * @param \Behat\Gherkin\Node\TableNode $xls
     * @throws Exception
     */
    public function itShouldContains(\Behat\Gherkin\Node\TableNode $xls)
    {
        $sheets =  $this->xlsFile->getSheetNames();
        foreach ($xls->getRows() as $index => $row) {
            \PHPUnit_Framework_Assert::assertTrue(in_array($row[0], $sheets), true);
        }

//        $data =  $this->xlsFile->getSheetData('Source Data'); same we could do for exact cells
    }


}
