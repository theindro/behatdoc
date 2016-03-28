Feature: NAEL2GRAMM
  In order to convert NAEL to GRAMM
  As a calculator user
  I need to be able to multiply 453.59237 with first value

  Scenario:
    Given I have a value "1"
    When I use NAEL2GRAMM function
    Then I should get 453.59237

  Scenario:
    Given I have a value "120"
    When I use NAEL2GRAMM function
    Then I should get "54431.0844"
