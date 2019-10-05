<?php

namespace Tests\Unit;

use App\Services\TestQuestionsService;
use App\Teacher;
use App\TestQuestions;

use Tests\TestCase;

class TestQuestionsServiceTest extends TestCase
{
    protected $testQuestionsService;

  	public function __construct($name = null, array $data = [], $dataName = '')
  	{	
        parent::__construct($name, $data, $dataName);
        $this->testQuestionsService = new TestQuestionsService();
  	}

  	/**
       * @test
       * Positive test for insertion of test Questions
       */
      public function it_should_add_test_question()
      {
            $this->withoutExceptionHandling();

            // Fetching a random teacher from the database
            $teacher_user = Teacher::all()->first();

            // Getting the old row count before insertion
            $count = TestQuestions::all()->count();

            // Mock data
            $data = [
                "test_id" => 1,
                "question_id" => 1
            ];

            // Creating a Question
            $testQuestions = $this->testQuestionsService->store($data, $teacher_user['id']);

            // Fetching the row count after insertion
            $new_count = TestQuestions::all()->count();

            // The store method should return TestQuestions object on successful insertion
            $this->assertInstanceOf(TestQuestions::class, $testQuestions);
            // The row count should increase by 1 after successful insertion
            $this->assertEquals($count + 1, $new_count);
      }
      /**
       * @test
       *
       * +ve update test for TestQuestions
       */
      public function it_should_update_test_question()
      {

            // Fetching a random teacher from the database
            $teacher_user = Teacher::all()->first()->user;

            // Creating a mock entry of testQuestions
            $test_question_to_edit = factory(TestQuestions::class)->create();

            // The new values for updation
            $data = [
                "test_id" => 2,
                "question_id" => 2
            ];

            // Updating $questions_to_edit
            $new_test_question = $this->testQuestionsService->update($test_question_to_edit->id, $data, $teacher_user->id);


            // The update method should return TestQuestions object
            $this->assertInstanceOf(TestQuestions::class, $new_test_question);
            // Checking the values
            $this->assertEquals($teacher_user->id, $new_test_question->updated_by);
            $this->assertEquals("2", $new_test_question->question_id);
      }


      /**
       * @test
       * Tests the destroy functionality of the TestQuestionsService.
       */
      public function it_should_delete_a_test_question()
      {
            $this->withoutExceptionHandling();

            // Creating a mock entry of testQuestions
            $test_question_to_destroy = factory(TestQuestions::class)->create();

            $old_count = TestQuestions::all()->count();

            $this->testQuestionsService->destroy($test_question_to_destroy->id);

            // Fetching the row count after insertion
            $new_count = TestQuestions::all()->count();

            // Checking the the count as decreased by 1 or not. After deletion
            $this->assertEquals($old_count - 1, $new_count);
            // The given id should not be present in the database
            $this->assertNull(TestQuestions::find($test_question_to_destroy->id));
      }
}
