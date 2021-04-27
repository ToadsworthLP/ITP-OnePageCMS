<?php
include_once "homepage/model/SiteTreeNode.php";

/**
 * Represents the content of a site, including all its blocks and attributes.
 */
class SiteTree
{
    public array $nodes;

    /**
     * Creates a new SiteTree from the given site data array.
     * @param array $siteData The site data, as obtained using HomepageGateway::getSiteData
     */
    public function __construct(array $siteData)
    {
        $this->nodes = array();

        $uniqueIndex = -1;
        $lastId = -1;

        foreach ($siteData as $entry) {
            if($lastId != $entry["block_id"]) {
                array_push($this->nodes, new SiteTreeNode($entry["block_type"], $entry["block_id"]));
                $lastId = $entry["block_id"];
                $uniqueIndex++;
            }

            if($entry["attribute"] !== null) {
                $this->nodes[$uniqueIndex]->addAttribute($entry["attribute"], $entry["text"].$entry["file"]);
            }
        }
    }
}