<?php
include_once "admin/config/SessionConfig.php";

/**
 * Manages links to the previously visited page.
 */
class ReturnUtility
{
    /**
     * Updates the stored link to the previous page.
     */
    public static function update()
    {
        if (isset($_GET["action"])) return;

        $requestUrl = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
        parse_str(parse_url($requestUrl, PHP_URL_QUERY), $pageArgs);

        $paramsList = "";
        $i = sizeof($pageArgs);

        foreach ($pageArgs as $key => $value) {
            if ($key == "action") continue; // Don't include the action itself

            $paramsList .= $key . "=" . $value;
            $i--;

            if ($i > 0) $paramsList .= "&";
        }

        $_SESSION[SessionConfig::RETURN_TO_PAGE] = $paramsList;
    }

    /**
     * Provides a link to the page the user was on before.
     * Since action parameters will be filtered out, this can be used to redirect the user back to the page they were on before starting an action.
     * @return string The link to the previously visited page
     */
    public static function getLink(): string
    {
        if (isset($_SESSION[SessionConfig::RETURN_TO_PAGE])) {
            return "admin.php?" . $_SESSION[SessionConfig::RETURN_TO_PAGE];
        } else
            return "admin.php";
    }
}