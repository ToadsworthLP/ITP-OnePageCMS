<?php
include_once "common/utility/DB.php";

/**
 * Provides read-only access to homepage data stored in the database.
 * For manipulation purposes, the classes in common/gateway should be used instead.
 */
class HomepageGateway
{
    /**
     * Gets a list of all sites matching the optional criteria.
     * @param bool $onlyPublished If true, only published pages will be included
     * @param bool $onlyWithMenuOption If true, only pages which should be linked in the navigation menu will be included
     * @return array Associative array
     */
    public static function getSites(bool $onlyPublished = false, bool $onlyWithMenuOption = false) : array {
        $sql = "SELECT id, name, required_permissions, published, menu_option, theme FROM site
                WHERE 1";
        $menuOptionCheck = "AND menu_option = 1";
        $publishedCheck = "AND published = 1";

        if($onlyWithMenuOption) $sql .= $menuOptionCheck;
        if($onlyPublished) $sql .= $publishedCheck;

        return DB::get()->run($sql)->fetchAll();
    }

    /**
     * Gets all data associated with the site with the given ID.
     * @param int $id The ID if the site to get data of
     * @return array Associative array
     */
    public static function getSiteData(int $id) : array {
        $sql = "SELECT b.id AS 'block_id', block_order, b.filename AS 'block_type', a.name AS 'attribute', ta.text AS 'text', f.id AS 'file' FROM block
                JOIN blocktype b on block.type = b.id
                JOIN attribute a ON block.id = a.block
                LEFT JOIN text_attribute ta on a.id = ta.id
                LEFT JOIN file_attribute fa on a.id = fa.id
                LEFT JOIN file f on fa.file = f.id
                WHERE site = :site
                ORDER BY block_order, b.id";

        $result = DB::get()->run($sql, [
            "site" => $id
        ]);

        return $result->fetchAll();
    }
}