<?php namespace App;

use Illuminate\Log\Writer;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Foundation\Bootstrap\ConfigureLogging as BaseConfigureLogging;
use Monolog\Handler\ErrorLogHandler;

/**
 * @see https://laracasts.com/discuss/channels/general-discussion/advance-logging-with-laravel-and-monolog
 * @see http://www.lornajane.net/posts/2014/logging-to-stdout-with-monolog
 */
class ConfigureLogging extends BaseConfigureLogging {

    /**
     * OVERRIDE PARENT
     * Configure the Monolog handlers for the application.
     *
     * @param  \Illuminate\Contracts\Foundation\Application  $app
     * @param  \Illuminate\Log\Writer  $log
     * @return void
     */
    protected function configureHandlers(Application $app, Writer $log)
    {
        $log->getMonolog()->pushHandler( new ErrorLogHandler() );
    }
}