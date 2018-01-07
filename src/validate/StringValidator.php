<?php namespace validate;
/**
 * Created by PhpStorm.
 * User: Deville
 * Date: 07.01.18
 * Time: 3:16
 */
use Saiks;
use exceptions;
use fileSystem;
class StringValidator
{
    public static function validateString(String $filePath) : void {
        try {
            $content = fileSystem\FileSystem::getContent($filePath);
            $result =  Saiks\StringValidator::validateString($content);
            if($result === true) {
                echo "\n".'Введенная строка коректна';
            } else {
                echo "\n".'Введеная строка некоректна';
            }
        } catch (\InvalidArgumentException $e) {
            echo "\n".'Содержимое файла содержит некоректные символы';
        } catch (exceptions\EmptyContentException $e) {
            echo "\n".'Содержимое найденого файла пустое';
        } catch (exceptions\FileNotFoundException $e) {
            echo "\n".'Файл не найден';
        } catch (\Exception $e) {
            echo "\n".'Что то пошло не так:'.$e->getMessage()."\n";
        }
    }
}