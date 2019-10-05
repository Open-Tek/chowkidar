Feature:
  To test all the auth features of our application

  Scenario: Negative Login Test
    Given I am on "/login"
    And I am not logged in
    When I fill in "email" with "gaurav.bpunjab@gmail.com"
    And I fill in "password" with "password"
    And I press "submit"
    Then I should see "These credentials do not match our records."

  Scenario: Positive Login Test
    Given I am on the login page
    When I fill in "email" with "gaurav.bpunjabi@gmail.com"
    And I fill in "password" with "password"
    And I press "submit"
    Then I should be on users home page
