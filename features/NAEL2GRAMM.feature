Feature: GRAMM2NAEL
  In order to convert GRAMM to NAEL
  As a calculator user
  I need to be able to separate 453.59237 from first value

  Scenario:
    Given I have a value "453.59237"
    When I use GRAMM2NAEL function
    Then I should get "1"

  Scenario:
    Given I have a value "54431.0844"
    When I use GRAMM2NAEL function
    Then I should get "120"
