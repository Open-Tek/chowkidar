<?php

namespace Tests\Unit;

use App\Services\TestService;
use App\Teacher;
use App\Test;

use Tests\TestCase;

class TestServiceTest extends TestCase
{
    protected $testService;

    public function __construct($name = null, array $data = [], $dataName = '')
    {
        parent::__construct($name, $data, $dataName);
        $this->testService = new TestService();
    }

    /**
    * @test
    * Positive test for insertion of test
    */
    public function it_should_add_test()
   	{

        // Fetching a random teacher from the database
        $teacher_user = Teacher::all()->first();

        // Getting the old row count before insertion
        $count = Test::all()->count();

        // Mock data
        $data = [
        	"name" => "Test 1",
            "marks" => 30,
            "negative_marking" => 1,
            "duration" => 1,
            "start_date" => "2019-07-15 18:00:00",
            "end_date" => "2019-07-16 18:00:00"
        ];

        // Creating a Test
        $test = $this->testService->store($data, $teacher_user['id']);

        // Fetching the row count after insertion
        $new_count = Test::all()->count();

        // The store method should return Test object on successful insertion
        $this->assertInstanceOf(Test::class, $test);
        // The row count should increase by 1 after successful insertion
        $this->assertEquals($count + 1, $new_count);
    }

    /**
    * @test
    *
    * +ve update test for Test
    */
    public function it_should_update_test()
    {

        // Fetching a random teacher from the database
        $teacher_user = Teacher::all()->first()->user;

        // Creating a mock entry of test
        $test_to_edit = factory(Test::class)->create();

        // The new values for updation
        $data = [
            "name" => "Test 1",
            "marks" => 50,
            "negative_marking" => 0.5,
            "duration" => 2,
            "start_date" => "2019-07-16 18:00:00",
            "end_date" => "2019-07-18 18:00:00"
        ];

        // Updating $test_to_edit
        $new_test = $this->testService->update($test_to_edit->id, $data, $teacher_user->id);


        // The update method should return Test object
        $this->assertInstanceOf(Test::class, $new_test);
        // Checking the values
        $this->assertEquals($teacher_user->id, $new_test->updated_by);
    }

    /**
    * @test
    * Tests the destroy functionality of the TestService.
    */
    public function it_should_delete_a_test()
    {
        // Creating a mock entry of test
        $test_to_destroy = factory(Test::class)->create();

        $old_count = Test::all()->count();

        $this->testService->destroy($test_to_destroy->id);

        // Fetching the row count after insertion
        $new_count = Test::all()->count();

        // Checking the the count as decreased by 1 or not. After deletion
        $this->assertEquals($old_count - 1, $new_count);
        // The given id should not be present in the database
        $this->assertNull(Test::find($test_to_destroy->id));
    }
}
