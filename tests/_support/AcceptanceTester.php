<?php
require_once 'Helper/Excel/reader.php';
use Page\walmartPage;



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
     */
    public function iOpenXlsFile($arg1)
    {
        $data = new Spreadsheet_Excel_Reader();
        $data->setOutputEncoding('CP1251');
        $data->read($arg1);
    }

    /**
     * @Given It should contains
     * @param \Behat\Gherkin\Node\TableNode $xls
     */
    public function itShouldContains(\Behat\Gherkin\Node\TableNode $xls)
    {
        foreach ($xls->getRows() as $index => $row) {
            if ($index === 0) { // first row to define fields
                $keys = $row;
                continue;
            }
            //$this->haveRecord('Product', array_combine($keys, $row));
        }
    }



}
