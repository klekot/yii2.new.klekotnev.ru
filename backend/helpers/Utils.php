<?php
namespace backend\helpers;
use Yii;
class Utils
{
    public static function commonModelsNames()
    {
        $names = [];
        $allFiles = scandir(\Yii::getAlias('@webroot') . '/../../' . 'common' . DIRECTORY_SEPARATOR . 'models');
        foreach ($allFiles as $file) {
            if (!in_array($file, ['.', '..'])) {
                $parts = explode('.', $file);
                $parts = preg_split('/(?=[A-Z])/',$parts[0]);
                array_shift($parts);
                $names[] = strtolower(implode('-', $parts));
            }
        }

        return $names;
    }
}