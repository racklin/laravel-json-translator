<?php

namespace Racklin\JsonTranslator;

use Illuminate\Translation\FileLoader;

class JsonFileLoader extends FileLoader
{
    /**
     * Load the messages for the given locale.
     *
     * @param  string  $locale
     * @param  string  $group
     * @param  string  $namespace
     * @return array
     */
    public function load($locale, $group, $namespace = null)
    {
        if ($group == '*' && $namespace == '*') {
            return $this->loadJsonPath($this->path, $locale);
        }
        if (is_null($namespace) || $namespace == '*') {
            return $this->loadPath($this->path, $locale, $group);
        }
        return $this->loadNamespaced($locale, $group, $namespace);
    }

    /**
     * Load a locale from the given JSON file path.
     *
     * @param  string  $path
     * @param  string  $locale
     * @return array
     */
    protected function loadJsonPath($path, $locale)
    {
        if ($this->files->exists($full = "{$path}/{$locale}.json")) {
            return json_decode($this->files->get($full), true);
        }
        return [];
    }
}