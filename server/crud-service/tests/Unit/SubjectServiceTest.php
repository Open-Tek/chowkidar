<?php

namespace Tests\Unit;

use App\Services\SubjectService;
use App\Subject;
use App\Teacher;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class SubjectServiceTest extends TestCase
{
//      use DatabaseMigrations;
//      use RefreshDatabase;

      protected $subjectService;

      public function __construct($name = null, array $data = [], $dataName = '')
      {
            parent::__construct($name, $data, $dataName);
            $this->subjectService = new SubjectService();
      }

      /**
       * @test
       * Tests the positive insertion of the subject
       */
      public function it_should_add_subject()
      {
            // Fetching a random teacher from the database
            $teacher_user = Teacher::all()->first()->user;

            // The name for the subject
            $subject_name = "TestSubject";

            // Getting the old row count before insertion
            $count = Subject::all()->count();

            // Mock data
            $data = [
                "name" => $subject_name
            ];

            // Creating a subject
            $subject = $this->subjectService->store($data, $teacher_user->id);

            // Fetching the row count after insertion
            $new_count = Subject::all()->count();

            // The store method should return Subject's object on successful insertion
            $this->assertInstanceOf(Subject::class, $subject);
            // The row count should increase by 1 after successful insertion
            $this->assertEquals($count + 1, $new_count);
            // Checking the values
            $this->assertEquals($data["name"], $subject->name);
      }

      /**
       * @test
       *
       * +ve update operation testing
       */
      public function it_should_update_subject()
      {
            // Fetching a random teacher from the database
            $teacher_user = Teacher::all()->first()->user;

            // Creating a mock entry of subject
            $subject_to_edit = factory(Subject::class)->create();

            // The new values for updation
            $data = [
                "name" => "TestSubject"
            ];

            // Updating $subject_to_edit
            $new_subject = $this->subjectService->update($subject_to_edit->id, $data, $teacher_user->id);


            // The update method should return Subject's object
            $this->assertInstanceOf(Subject::class, $new_subject);
            // Checking the values
            $this->assertEquals("TestSubject", $new_subject->name);
            $this->assertEquals($teacher_user->id, $new_subject->updated_by);
      }

      /**
       * @test
       * Tests the destroy functionality of the SubjectService.
       */
      public function it_should_delete_a_subject()
      {
            // Creating a mock entry of subject
            $subject_to_destroy = factory(Subject::class)->create();

            $old_count = Subject::all()->count();

            $this->subjectService->destory($subject_to_destroy->id);

            // Fetching the row count after insertion
            $new_count = Subject::all()->count();

            // Checking the the count as decreased by 1 or not. After deletion
            $this->assertEquals($old_count - 1, $new_count);
            // The given id should not be present in the database
            $this->assertNull(Subject::find($subject_to_destroy->id));
      }
}
