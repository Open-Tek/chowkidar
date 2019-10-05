<?php

namespace Tests\Browser;

use App\Subject;
use App\Teacher;
use Facebook\WebDriver\Chrome\ChromeOptions;
use Facebook\WebDriver\Remote\DesiredCapabilities;
use Facebook\WebDriver\Remote\RemoteWebDriver;
use Faker\Factory as Faker;
use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class SubjectTest extends DuskTestCase
{

//      use DatabaseMigrations;
//      use RefreshDatabase;

    /**
     * @test
     */
    public function it_should_add_a_subject()
    {

        $this->browse(function (Browser $browser) {
            $faker = Faker::create();

            $browser->loginAs(factory(Teacher::class)->create()->user->id)
                ->visitRoute("subject.create")
                ->assertSee("Add Subject")
                ->value("#name", $faker->name)
                ->click("#add")
                ->waitFor(".toast")
                ->assertSee("The given subject was added successfully");
        });
    }

    /**
     * @test
     */
    public function it_should_update_a_subject()
    {
        $this->browse(function (Browser $browser) {
            $subject = factory(Subject::class)->create();
            $faker = Faker::create();

            $browser->loginAs(factory(Teacher::class)->create()->user->id)
                ->visitRoute("subject.index")
                ->assertSee("Manage Subjects")
                ->click(".edit")
                ->waitForText("Edit Subject")
                ->value("#name", $faker->name)
                ->click("#edit")
                ->waitFor(".toast")
                ->assertSee("The given subject was updated successfully");

        });
    }

    /**
     * @test
     */
    public function it_should_delete_a_subject()
    {
        $this->browse(function (Browser $browser) {
            $subject = factory(Subject::class)->create();
            $faker = Faker::create();

            $browser->loginAs(factory(Teacher::class)->create()->user->id)
                ->visitRoute("subject.index")
                ->assertSee("Manage Subjects")
                ->click(".delete")
                ->waitFor(".modal")
                ->press("Confirm")
                ->waitFor(".toast")
                ->assertSee("The given subject was deleted successfully");

        });
    }

    /**
     * @test
     */
    public function it_should_open_view_subjects()
    {
        $this->browse(function (Browser $browser) {
            $subject = factory(Subject::class)->create();

            $browser->loginAs(factory(Teacher::class)->create()->user->id)
                ->visit("/subject/" . $subject->id)
                ->assertSee("Subject Details")
                ->assertValue("#name", $subject->user->name);

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
