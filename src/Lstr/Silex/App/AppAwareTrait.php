<?php
/*
 * Lstr/Silex source code
 *
 * Copyright Matt Light <matt.light@lightdatasys.com>
 *
 * For copyright and licensing information, please view the LICENSE
 * that is distributed with this source code.
 */

namespace Lstr\Silex\App;

use Silex\Application;

trait AppAwareTrait
{
    private $silex_app;

    public function setSilexApplication(Application $app)
    {
        $this->silex_app = $app;
    }

    public function getSilexApplication()
    {
        return $this->silex_app;
    }
}
