Feature: test
  In order to ...
  As a ...
  I need to ...

  Scenario: Walmart selenium test
    Given I am on "/"
    And I should see "Shop by Category"
    And I fill in "searchFiled" with "U750CV-U"
    And I press search btn
    And I click on "U750CV-U"
    And I click on "Add to Cart"
    And I should see "You just added"
    And I am on "/cart"
    Then I should see "Class 4K (2160P) LED TV"

  Scenario: check xls file
    And I open xls file "sample.xlsx"
    And It should contains
      | Source Data |
      | By Product |
