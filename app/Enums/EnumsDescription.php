<?php

namespace App\Enums;

/**
 * PHP純正ENUMの多言語化対応トレイト
 */
trait EnumsDescription
{
    /**
     * ENUM::Name->description()で、言語ファイルでの設定文字列を返す
     */
    public function description(): string
    {
        $enumName = get_class($this);
        $case = $this->name;
        $tmpClassDir = explode('\\', $enumName);
        array_pop($tmpClassDir);
        $tmpClassDir[0] = 'app';
        $classDir = implode('/', $tmpClassDir);
        if (file_exists(base_path($classDir.'/translator.php'))) {
            include_once base_path($classDir.'/translator.php');

            return $translator[$enumName][$case];
        }

        return __('enums.'.$enumName.'.'.$case);
    }
}
