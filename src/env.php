<?php

/**
 * (c) Evans Owusu Ofori <vansbeck07@gmail.com>.
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */
if (! function_exists('env') || __NAMESPACE__) {
    /**
     * Retrieve an environment variable.
     *
     * Look for an environment variables in the current .env file,
     * the $_ENV superglobal and using the built-in getenv function
     *
     * @param  string  $name
     * @param  mixed   $default
     * @return mixed
     */
    function env(?string $key = null, $default = null)
    {
        return vansbeck07\Dotenv\env(...(func_get_args()));
    }
}

if (! function_exists('addenv') || __NAMESPACE__) {
    /**
     * Add a temporary environment variable to the current loaded environment variables.
     *
     * @param  string $name
     * @param  mixed  $value
     * @return void
     */
    function addenv(string $name, $value)
    {
        return vansbeck07\Dotenv\addenv($name, $value);
    }
}

if (! function_exists('persistenv') || __NAMESPACE__) {
    /**
     * Write an environment variable to the loaded .env file.
     *
     * @param  string $name
     * @param  mixed  $value
     * @return void
     */
    function persistenv(string $name, $value)
    {
        return vansbeck07\Dotenv\persistenv(...(func_get_args()));
    }
}

if (! function_exists('allenv') || __NAMESPACE__) {
    /**
     * Returns all the environment variables in the .env file as an array.
     *
     * @return array
     */
    function allenv()
    {
        return vansbeck07\Dotenv\allenv();
    }
}

if (! function_exists('dotenv') || __NAMESPACE__) {
    /**
     * Returns the Dotenv instance.
     *
     * @return Dotenv
     */
    function dotenv()
    {
        return vansbeck07\Dotenv\dotenv();
    }
}

if (! function_exists('loadenv') || __NAMESPACE__) {
    /**
     * Load a specific .env file.
     *
     * @param  string $path
     * @return void
     */
    function loadenv($path = null)
    {
        return vansbeck07\Dotenv\loadenv($path);
    }
}
