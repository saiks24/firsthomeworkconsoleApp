<?php
/**
 * Created by PhpStorm.
 * User: Deville
 * Date: 07.01.18
 * Time: 3:24
 */

namespace exceptions;


use Throwable;

class EmptyContentException extends \Exception
{
    public function __construct($message = 'Содержимое файла пустое'."\n", $code = 0, Throwable $previous = null)
    {
        parent::__construct($message, $code, $previous);
    }
}