# autoTask

**This framework contains 2 tests**

    1) Selenium for walmart
    
    2) Parse xlsx file from local storage  tests/_support/xls/sample.xlsx
Was tested on windows, for mac or linux you need to install local php and use it instead of attached one

        To stasrt testing run:
        - clone repo and cd to repo root and run next commands in cmd
        - php\php composer.phar install
        - run chrome driver in separate console: driver\chromedriver --url-base=/wd/hub
            Run Selenium test:
        - php\php vendor\codeception\codeception\codecept run tests\acceptance\test.feature:"Walmart selenium test"
            Run XLS parse test(it should check that xls contains need sheets):
        - php\php vendor\codeception\codeception\codecept run tests\acceptance\test.feature:"check xls file"