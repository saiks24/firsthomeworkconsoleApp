<?php namespace exceptions;
/**
 * Created by PhpStorm.
 * User: Deville
 * Date: 07.01.18
 * Time: 3:21
 */

class FileNotFoundException extends \Exception
{
    public function __construct($message = 'Файл не найден'."\n", $code = 0, \Throwable $previous = null)
    {
        parent::__construct($message, $code, $previous);
    }
}