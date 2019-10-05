<?php

namespace Tests\Unit;

use App\Services\TestChaptersService;
use App\Teacher;
use App\TestChapters;

use Tests\TestCase;



class TestChaptersServiceTest extends TestCase
{
      protected $testChaptersService;

      public function __construct($name = null, array $data = [], $dataName = '')
      {
            parent::__construct($name, $data, $dataName);
            $this->testChaptersService = new TestChaptersService();
      }

      /**
       * @test
       * Positive test for insertion of test Chapter
       */
      public function it_should_add_test_chapter()
      {
            $this->withoutExceptionHandling();

            // Fetching a random teacher from the database
            $teacher_user = Teacher::all()->first();

            // Getting the old row count before insertion
            $count = TestChapters::all()->count();

            // Mock data
            $data = [
                "test_id" => 1,
                "chapter_id" => 1
            ];

            // Creating a Chapter
            $testChapters = $this->testChaptersService->store($data, $teacher_user['id']);

            // Fetching the row count after insertion
            $new_count = TestChapters::all()->count();

            // The store method should return TestChapter's object on successful insertion
            $this->assertInstanceOf(TestChapters::class, $testChapters);
            // The row count should increase by 1 after successful insertion
            $this->assertEquals($count + 1, $new_count);
      }

      /**
       * @test
       *
       * +ve update test for TestChapter
       */
      public function it_should_update_test_chapter()
      {

            // Fetching a random teacher from the database
            $teacher_user = Teacher::all()->first()->user;

            // Creating a mock entry of testChapter
            $testChapter_to_edit = factory(TestChapters::class)->create();

            // The new values for updation
            $data = [
                "test_id" => 2,
                "chapter_id" => 2,
            ];

            // Updating $Chapter_to_edit
            $new_testChapters = $this->testChaptersService->update($testChapter_to_edit->id, $data, $teacher_user->id);


            // The update method should return TestChapter's object
            $this->assertInstanceOf(TestChapters::class, $new_testChapters);
            // Checking the values
            $this->assertEquals($teacher_user->id, $new_testChapters->updated_by);
            $this->assertEquals("2", $new_testChapters->chapter_id);
      }


      /**
       * @test
       * Tests the destroy functionality of the TestChapterService.
       */
      public function it_should_delete_a_test_chapter()
      {
            $this->withoutExceptionHandling();

            // Creating a mock entry of testChapter
            $testChapter_to_destroy = factory(TestChapters::class)->create();

            $old_count = TestChapters::all()->count();

            $this->testChaptersService->destroy($testChapter_to_destroy->id);

            // Fetching the row count after insertion
            $new_count = TestChapters::all()->count();

            // Checking the the count as decreased by 1 or not. After deletion
            $this->assertEquals($old_count - 1, $new_count);
            // The given id should not be present in the database
            $this->assertNull(TestChapters::find($testChapter_to_destroy->id));
      }


}
