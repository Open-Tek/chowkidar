<?php

namespace Tests\Unit;

use App\Services\TestResponseService;
use App\Teacher;
use App\TestResponse;

use Tests\TestCase;

class TestResponseServiceTest extends TestCase
{
	protected $testResponseService;

      public function __construct($name = null, array $data = [], $dataName = '')
      {
            parent::__construct($name, $data, $dataName);
            $this->testResponseService = new TestResponseService();
      }

    /**
       * @test
       * Positive test for insertion of test Response
       */
      public function it_should_add_test_response()
      {

            // Fetching a random teacher from the database
            $teacher_user = Teacher::all()->first();

            // Getting the old row count before insertion
            $count = TestResponse::all()->count();

            // Mock data
            $data = [
                "test_id" => 1,
                "student_id" => 1,
                "marks" => 20
            ];

            // Creating a Response
            $test_response = $this->testResponseService->store($data, $teacher_user['id']);

            // Fetching the row count after insertion
            $new_count = TestResponse::all()->count();

            // The store method should return TestResponse object on successful insertion
            $this->assertInstanceOf(TestResponse::class, $test_response);
            // The row count should increase by 1 after successful insertion
            $this->assertEquals($count + 1, $new_count);
      }

      /**
       * @test
       *
       * +ve update test for TestResponse
       */
      public function it_should_update_test_response()
      {

            // Fetching a random teacher from the database
            $teacher_user = Teacher::all()->first()->user;

            // Creating a mock entry of testResponse
            $test_response_to_edit = factory(TestResponse::class)->create();

            // The new values for updation
            $data = [
                "test_id" => 1,
                "student_id" => 2,
                "marks" => 30
            ];

            // Updating $Response_to_edit
            $new_test_response = $this->testResponseService->update($test_response_to_edit->id, $data, $teacher_user->id);


            // The update method should return TestResponse object
            $this->assertInstanceOf(TestResponse::class, $new_test_response);
            // Checking the values
            $this->assertEquals($teacher_user->id, $new_test_response->updated_by);
      }


      /**
       * @test
       * Tests the destroy functionality of the TestResponseService.
       */
      public function it_should_delete_a_test_response()
      {

            // Creating a mock entry of testResponse
            $test_response_to_destroy = factory(TestResponse::class)->create();

            $old_count = TestResponse::all()->count();

            $this->testResponseService->destroy($test_response_to_destroy->id);

            // Fetching the row count after insertion
            $new_count = TestResponse::all()->count();

            // Checking the the count as decreased by 1 or not. After deletion
            $this->assertEquals($old_count - 1, $new_count);
            // The given id should not be present in the database
            $this->assertNull(TestResponse::find($test_response_to_destroy->id));
      }
}
