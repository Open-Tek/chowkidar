Feature: Student
  I should be able to add, view, manage and edit students.

  Scenario: Add Student with valid credentials
    Given I am logged in
    And I am a teacher
    When I fill in the following:
      | email | student@gmail.com |
      | phone_number | 8828262618 |
      | name | Gaurav Punjabi |
      | college | KJSCE |
      | doj | 20/12/2015 |
    And |I press "add"
    Then I should see "Student added successfully"

  Scenario: Add Student with invalid credentials
    Given I am not logged in
    And I am a teacher
    When I fill in the following:
      | email | student |
      | phone_number | 8828262618 |
      | name | Gaurav Punjabi |
      | college | KJSCE |
      | doj | 20/12/2015 |
    And I press "add"
    Then I should see "Email id not valid"
