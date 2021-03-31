<?php


/**
 * Handles dynamic inclusion of PHP files based on the mapping provided by an instance of a class implementing the IIncludeSwitchConfig interface.
 */
class IncludeSwitch
{

    private IIncludeSwitchConfig $config;

    /**
     * Creates a new IncludeSwitch instance using the given configuration.
     * @param IIncludeSwitchConfig $config An instance of a class implementing the IIncludeSwitchConfig interface
     */
    public function __construct(IIncludeSwitchConfig $config)
    {
        $this->config = $config;
    }

    /**
     * Dynamically includes a PHP file corresponding to the configuration of this instance.
     * @param string|null $defaultKey The map key to use if the parameter set in the configuration is not set in the current request.
     */
    public function include(string $defaultKey = null)
    {
        $params = $this->config->getParameterArray();
        if(isset($params[$this->config->getParameterName()])) {
            $key = $params[$this->config->getParameterName()];
        } else {
            $key = $defaultKey;
        }

        $map = $this->config->getMapping();

        if (isset($map[$key])) {
            include $map[$key];
        } else {
            throw new InvalidArgumentException("No page entry was found for key " . $key . " in config " . get_class($this->config));
        }
    }
}