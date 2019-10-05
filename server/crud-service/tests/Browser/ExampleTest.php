<?php

namespace Tests\Browser;

use Facebook\WebDriver\Remote\DesiredCapabilities;
use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Facebook\WebDriver\Chrome\ChromeOptions;
use Facebook\WebDriver\Remote\RemoteWebDriver;


class ExampleTest extends DuskTestCase
{
      /**
       * A basic browser test example.
       *
       * @return void
       * @throws \Throwable
       */
      public function testBasicExample()
      {
            $this->browse(function (Browser $browser) {
                  $this->assertTrue(true);
            });
      }

//      protected function driver()
//      {
//            $options = (new ChromeOptions)->addArguments([
//                '--disable-gpu',
//                '--headless',
//                '--window-size=1920,1080',
//                '--no-sandbox'
//            ]);
//
//            return RemoteWebDriver::create(
//                'http://localhost:9515', DesiredCapabilities::chrome()->setCapability(
//                ChromeOptions::CAPABILITY, $options
//            )
//            );
//      }
}
