<?php namespace fileSystem;
/**
 * Created by PhpStorm.
 * User: Deville
 * Date: 07.01.18
 * Time: 3:18
 */
use exceptions;
class FileSystem
{
    public static function getContent(String $path) : String {

        if(!file_exists($path)) {
            throw new exceptions\FileNotFoundException();
        }

        $content = file_get_contents($path);

        if(empty($content)) {
            throw new exceptions\EmptyContentException();
        }

        return $content;
    }
}