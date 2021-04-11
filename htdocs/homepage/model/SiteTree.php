<?php
include_once "homepage/model/SiteTreeNode.php";

class SiteTree
{
    public array $nodes;

    /**
     * SiteTree constructor.
     * @param array $siteData
     */
    public function __construct(array $siteData)
    {
        $this->nodes = array();

        $uniqueIndex = -1;
        $lastId = -1;

        foreach ($siteData as $entry) {
            if($lastId != $entry["block_id"]) {
                array_push($this->nodes, new SiteTreeNode($entry["block_type"]));
                $lastId = $entry["block_id"];
                $uniqueIndex++;
            }

            $this->nodes[$uniqueIndex]->addAttribute($entry["attribute"], $entry["text"].$entry["file"]);
        }
    }
}