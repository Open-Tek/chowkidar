<?php

namespace Tests\Unit;

use App\Services\TestResponseDetailService;
use App\Teacher;
use App\TestResponseDetail;

use Tests\TestCase;

class TestResponseDetailServiceTest extends TestCase
{
	protected $testResponseDetailService;

      public function __construct($name = null, array $data = [], $dataName = '')
      {
            parent::__construct($name, $data, $dataName);
            $this->testResponseDetailService = new TestResponseDetailService();
      }

    /**
       * @test
       * Positive test for insertion of test Response
       */
      public function it_should_add_test_response_Detail()
      {

            // Fetching a random teacher from the database
            $teacher_user = Teacher::all()->first();

            // Getting the old row count before insertion
            $count = TestResponseDetail::all()->count();

            // Mock data
            $data = [
                "test_response_id" => 1,
                "question_id" => 1,
                "option_id" => 2
            ];

            // Creating a Response
            $test_response_detail = $this->testResponseDetailService->store($data, $teacher_user['id']);

            // Fetching the row count after insertion
            $new_count = TestResponseDetail::all()->count();

            // The store method should return TestResponseDetail object on successful insertion
            $this->assertInstanceOf(TestResponseDetail::class, $test_response_detail);
            // The row count should increase by 1 after successful insertion
            $this->assertEquals($count + 1, $new_count);
      }

      /**
       * @test
       *
       * +ve update test for TestResponseDetail
       */
      public function it_should_update_test_response_Detail()
      {

            // Fetching a random teacher from the database
            $teacher_user = Teacher::all()->first()->user;

            // Creating a mock entry of TestResponseDetail
            $test_response_Detail_to_edit = factory(TestResponseDetail::class)->create();

            // The new values for updation
            $data = [
                "test_response_id" => 1,
                "question_id" => 2,
                "option_id" => 4
            ];

            // Updating $Response_to_edit
            $new_test_response_Detail = $this->testResponseDetailService->update($test_response_Detail_to_edit->id, $data, $teacher_user->id);


            // The update method should return TestResponseDetail object
            $this->assertInstanceOf(TestResponseDetail::class, $new_test_response_Detail);
            // Checking the values
            $this->assertEquals($teacher_user->id, $new_test_response_Detail->updated_by);
      }


      /**
       * @test
       * Tests the destroy functionality of the TestResponseDetailService.
       */
      public function it_should_delete_a_test_response_Detail()
      {

            // Creating a mock entry of TestResponseDetail
            $test_response_Detail_to_destroy = factory(TestResponseDetail::class)->create();

            $old_count = TestResponseDetail::all()->count();

            $this->testResponseDetailService->destroy($test_response_Detail_to_destroy->id);

            // Fetching the row count after insertion
            $new_count = TestResponseDetail::all()->count();

            // Checking the the count as decreased by 1 or not. After deletion
            $this->assertEquals($old_count - 1, $new_count);
            // The given id should not be present in the database
            $this->assertNull(TestResponseDetail::find($test_response_Detail_to_destroy->id));
      }
}
