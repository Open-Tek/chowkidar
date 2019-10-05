<?php

namespace Tests\Browser;

use App\Student;
use App\Teacher;
use Facebook\WebDriver\Remote\DesiredCapabilities;
use Facebook\WebDriver\Remote\RemoteWebDriver;
use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Facebook\WebDriver\Chrome\ChromeOptions;
use Faker\Factory as Faker;

class StudentTest extends DuskTestCase
{
//      use DatabaseMigrations;
//      use RefreshDatabase;

    /**
     * @test
     */
    public function it_should_add_a_student()
    {

        $this->browse(function (Browser $browser) {
            $faker = Faker::create();

            $browser->loginAs(factory(Teacher::class)->create()->user->id)
                ->visitRoute("student.create")
                ->assertSee("Add Student")
                ->value("#name", $faker->name)
                ->value("#email", $faker->email)
                ->value("#phone_number", $faker->phoneNumber)
                ->value("#college", $faker->company)
                ->type("#doj", date("m-d-Y"))
                ->click("#add")
                ->waitFor(".toast")
                ->assertSee("The given student was added successfully");
        });
    }

    /**
     * @test
     */
    public function it_should_update_a_student()
    {
        $this->browse(function (Browser $browser) {
            $student = factory(Student::class)->create();
            $faker = Faker::create();

            $browser->loginAs(factory(Teacher::class)->create()->user->id)
                ->visitRoute("student.index")
                ->assertSee("Manage Students")
                ->click(".edit")
                ->waitForText("Edit Student")
                ->value("#name", $faker->name)
                ->value("#email", $faker->email)
                ->value("#phone_number", $faker->phoneNumber)
                ->value("#college", $faker->company)
                ->type("#doj", date("m-d-Y"))
                ->click("#edit")
                ->waitFor(".toast")
                ->assertSee("The given student was updated successfully");

        });
    }

    /**
     * @test
     */
    public function it_should_delete_a_student()
    {
        $this->browse(function (Browser $browser) {
            $student = factory(Student::class)->create();
            $faker = Faker::create();

            $browser->loginAs(factory(Teacher::class)->create()->user->id)
                ->visitRoute("student.index")
                ->assertSee("Manage Students")
                ->click(".delete")
                ->waitFor(".modal")
                ->press("Confirm")
                ->waitFor(".toast")
                ->assertSee("The given student was deleted successfully");

        });
    }

    /**
     * @test
     */
    public function it_should_open_view_students()
    {
        $this->browse(function (Browser $browser) {
            $student = factory(Student::class)->create();

            $browser->loginAs(factory(Teacher::class)->create()->user->id)
                ->visit("/student/" . $student->id)
                ->assertSee("Student Details")
                ->assertValue("#name", $student->user->name)
                ->assertValue("#email", $student->user->email)
                ->assertValue("#phone_number", $student->user->phone_number)
                ->assertValue("#college", $student->college)
                ->assertSee("Phone Number");

        });
    }

//    protected function driver()
//    {
//        $options = (new ChromeOptions)->addArguments([
//            '--disable-gpu',
//            '--headless',
//            '--window-size=1920,1080',
//            '--no-sandbox'
//        ]);
//
//        return RemoteWebDriver::create(
//            'http://localhost:9515', DesiredCapabilities::chrome()->setCapability(
//            ChromeOptions::CAPABILITY, $options
//        )
//        );
//    }
}
