<?php
/*
 * This file is part of App Project.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace Tests\app\Languages;

use App;
use Tests\TestCase;

final class LanguagesTest extends TestCase
{
    protected string $langDir = APP_DIR . 'Languages/';

    public function testKeys() : void
    {
        $defaultLocale = App::language()->getDefaultLocale();
        foreach ($this->getFiles($defaultLocale) as $file) {
            $rules = require $this->langDir . $defaultLocale . '/' . $file;
            $rules = \array_keys($rules);
            foreach ($this->getCodes() as $code) {
                $lines = require $this->langDir . $code . '/' . $file;
                $lines = \array_keys($lines);
                \sort($lines);
                self::assertSame(
                    $rules,
                    $lines,
                    \sprintf(
                        'Comparing "%s" with "%s"',
                        $defaultLocale . '/' . $file,
                        $code . '/' . $file
                    )
                );
            }
        }
    }

    /**
     * @return array<int,string>
     */
    protected function getCodes() : array
    {
        // @phpstan-ignore-next-line
        $codes = \array_filter((array) \glob($this->langDir . '*'), 'is_dir');
        $length = \strlen($this->langDir);
        $result = [];
        foreach ($codes as $dir) {
            if ($dir === false) {
                continue;
            }
            $result[] = \substr($dir, $length);
        }
        return $result;
    }

    /**
     * @return array<int,string>
     */
    protected function getFiles(string $locale) : array
    {
        $filenames = App::locator()->listFiles($this->langDir . $locale);
        foreach ($filenames as $filename) {
            $files[] = \substr($filename, \strrpos($filename, \DIRECTORY_SEPARATOR) + 1);
        }
        return $files ?? [];
    }
}
