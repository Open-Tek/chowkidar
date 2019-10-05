<?php

namespace Tests\Unit;

use App\Services\TestParticipantService;
use App\Teacher;
use App\Student;
use App\TestParticipant;

use Tests\TestCase;

use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class TestParticipantServiceTest extends TestCase
{
    protected $testParticipantService;

      public function __construct($name = null, array $data = [], $dataName = '')
      {
            parent::__construct($name, $data, $dataName);
            $this->testParticipantService = new TestParticipantService();
      }

      /**
       * @test
       * Positive test for insertion of test subject
       */
      public function it_should_add_test_participant()
      {

            // Fetching a random teacher from the database
            $teacher_user = Teacher::all()->first();

            // Getting the old row count before insertion
            $count = TestParticipant::all()->count();

            // Mock data
            $data = [
                "test_id" => 1,
                "student_id" => 1
            ];

            // Creating a subject
            $testParticipant = $this->testParticipantService->store($data, $teacher_user['id']);

            // Fetching the row count after insertion
            $new_count = TestParticipant::all()->count();

            // The store method should return TestSubject's object on successful insertion
            $this->assertInstanceOf(TestParticipant::class, $testParticipant);
            // The row count should increase by 1 after successful insertion
            $this->assertEquals($count + 1, $new_count);
      }

      /**
       * @test
       *
       * +ve update test for TestSubject
       */
      public function it_should_update_test_participant()
      {

            // Fetching a random teacher from the database
            $teacher_user = Teacher::all()->first()->user;

            // Creating a mock entry of testSubject
            $test_participant_to_edit = factory(TestParticipant::class)->create();

            // The new values for updation
            $data = [
                "test_id" => 1,
                "student_id" => 2,
            ];

            // Updating $subject_to_edit
            $new_test_participant = $this->testParticipantService->update($test_participant_to_edit->id, $data, $teacher_user->id);


            // The update method should return TestSubject's object
            $this->assertInstanceOf(TestParticipant::class, $new_test_participant);
            // Checking the values
            $this->assertEquals($teacher_user->id, $new_test_participant->updated_by);
      }

      /**
       * @test
       * Tests the destroy functionality of the TestSubjectService.
       */
      public function it_should_delete_a_test_participant()
      {

            // Creating a mock entry of testSubject
            $test_participant_to_destroy = factory(TestParticipant::class)->create();

            $old_count = TestParticipant::all()->count();

            $this->testParticipantService->destroy($test_participant_to_destroy->id);

            // Fetching the row count after insertion
            $new_count = TestParticipant::all()->count();

            // Checking the the count as decreased by 1 or not. After deletion
            $this->assertEquals($old_count - 1, $new_count);
            // The given id should not be present in the database
            $this->assertNull(TestParticipant::find($test_participant_to_destroy->id));
      }

}
