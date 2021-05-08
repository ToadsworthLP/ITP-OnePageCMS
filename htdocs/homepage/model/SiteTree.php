<?php
include_once "homepage/model/SiteTreeNode.php";
include_once "homepage/model/SlideNode.php";

/**
 * Represents the content of a site, including all its blocks and attributes.
 */
class SiteTree
{
    public ?array $slides = null;
    public array $nodes = array();

    /**
     * Creates a new SiteTree from the given site data array.
     * @param array $siteData The site data, as obtained using HomepageGateway::getSiteData
     * @param array|null $slides The array of slides inside the slider displayed on this page
     */
    public function __construct(array $siteData, array $slides = null)
    {
        if($slides != null) { // Build slide list
            $this->slides = array();
            foreach ($slides as $slide) {
                $new = new SlideNode(
                    $slide["title"],
                    $slide["text"],
                    $slide["button_text"],
                    $slide["button_link"],
                    $slide["button_color"],
                    $slide["button_hover_color"],
                    $slide["button_text_color"],
                    $slide["file"]
                );

                array_push($this->slides, $new);
            }
        }

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
