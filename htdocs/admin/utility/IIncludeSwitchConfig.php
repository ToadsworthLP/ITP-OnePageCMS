<?php


interface IIncludeSwitchConfig
{
    /**
     * Provides a page map for IncludeSwitch instances.
     * @return array Associative array with the format ["key" => "path/to/file_to_include.php", ...]
     */
    public function getMapping() : array;

    /**
     * Provides the name of the HTTP request parameter for IncludeSwitch instances.
     * @return string The request parameter
     */
    public function getParameterName() : string;

    /**
     * Provides the array of HTTP request parameters for IncludeSwitch instances.
     * Recommended values are $\_GET and $\_POST.
     * @return array The array the result of getParameterName() is passed into.
     */
    public function getParameterArray() : array;
}