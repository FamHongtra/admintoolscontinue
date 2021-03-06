<?php

/*
 * This file is part of Laravel GitLab.
 *
 * (c) Vincent Klaiber <hello@vinkla.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

return [

    /*
    |--------------------------------------------------------------------------
    | Default Connection Name
    |--------------------------------------------------------------------------
    |
    | Here you may specify which of the connections below you wish to use as
    | your default connection for all work. Of course, you may use many
    | connections at once using the manager class.
    |
    */

    'default' => 'main',

    /*
    |--------------------------------------------------------------------------
    | GitLab Connections
    |--------------------------------------------------------------------------
    |
    | Here are each of the connections setup for your application. Example
    | configuration has been included, but you may add as many connections as
    | you would like.
    |
    */

    'connections' => [

        'main' => [

          // 'token' => 'Y4j5tRnMsaBpF7JzgxZX',
            'token' => 'emBTcr-fGss3FM7iXv5k',
            'base_url' => 'http://13.228.10.174/api/v3/',
        ],

        'alternative' => [
            'token' => 'your-token',
            'base_url' => 'http://git.yourdomain.com/api/v3/',
        ],

    ],

];
