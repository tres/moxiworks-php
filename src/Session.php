<?php

namespace MoxiworksPlatform;

/** Object used to manage Moxi Works Platform Session
 *
 */
class Session
{
    /**
     * @var Session instance -- Singleton instance of Session
     */
    protected static $instance = null;

    /**
     * @var StringClass cookie for session
     *
     *
     */
    public static $cookie;


    /**
     * Does not construct a new MoxiworksPlatform\Session object. Use Instance instead.
     *
     */
    private function __construct(){

    }

    /**
     * Does not construct a new MoxiworksPlatform\Session object. Use Instance instead.
     *
     */
    protected function __clone() {

    }


    /**
     * Get the Session
     *
     * @return Session
     */
    public static function Instance() {
        if (!isset(static::$instance)) {
            $instance = new Session();
        }
        return $instance;
    }




}