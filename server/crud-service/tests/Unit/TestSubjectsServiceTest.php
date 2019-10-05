<?php

namespace Tests\Unit;

use App\Services\TestSubjectsService;
use App\Teacher;
use App\TestSubjects;

use Tests\TestCase;


class TestSubjectsServiceTest extends TestCase
{
      protected $testSubjectsService;

      public function __construct($name = null, array $data = [], $dataName = '')
      {
            parent::__construct($name, $data, $dataName);
            $this->testSubjectsService = new TestSubjectsService();
      }

      /**
       * @test
       * Positive test for insertion of test subject
       */
      public function it_should_add_testsubject()
      {
            $this->withoutExceptionHandling();

            // Fetching a random teacher from the database
            $teacher_user = Teacher::all()->first();

            // Getting the old row count before insertion
            $count = TestSubjects::all()->count();

            // Mock data
            $data = [
                "test_id" => 1,
                "subject_id" => 1,
                "marks" => 20
            ];

            // Creating a subject
            $testSubjects = $this->testSubjectsService->store($data, $teacher_user['id']);

            // Fetching the row count after insertion
            $new_count = TestSubjects::all()->count();

            // The store method should return TestSubject's object on successful insertion
            $this->assertInstanceOf(TestSubjects::class, $testSubjects);
            // The row count should increase by 1 after successful insertion
            $this->assertEquals($count + 1, $new_count);
      }

      /**
       * @test
       *
       * +ve update test for TestSubject
       */
      public function it_should_update_testsubject()
      {
            $this->withoutExceptionHandling();

            // Fetching a random teacher from the database
            $teacher_user = Teacher::all()->first()->user;

            // Creating a mock entry of testSubject
            $testsubject_to_edit = factory(TestSubjects::class)->create();

            // The new values for updation
            $data = [
                "test_id" => 1,
                "subject_id" => 2,
                "marks" => 30
            ];

            // Updating $subject_to_edit
            $new_testsubjects = $this->testSubjectsService->update($testsubject_to_edit->id, $data, $teacher_user->id);


            // The update method should return TestSubject's object
            $this->assertInstanceOf(TestSubjects::class, $new_testsubjects);
            // Checking the values
            $this->assertEquals($teacher_user->id, $new_testsubjects->updated_by);
      }


      /**
       * @test
       * Tests the destroy functionality of the TestSubjectService.
       */
      public function it_should_delete_a_test_subject()
      {
            $this->withoutExceptionHandling();

            // Creating a mock entry of testSubject
            $testsubject_to_destroy = factory(TestSubjects::class)->create();

            $old_count = TestSubjects::all()->count();

            $this->testSubjectsService->destroy($testsubject_to_destroy->id);

            // Fetching the row count after insertion
            $new_count = TestSubjects::all()->count();

            // Checking the the count as decreased by 1 or not. After deletion
            $this->assertEquals($old_count - 1, $new_count);
            // The given id should not be present in the database
            $this->assertNull(TestSubjects::find($testsubject_to_destroy->id));
      }


}
