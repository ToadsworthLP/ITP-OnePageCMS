<?php
include_once "common/model/Slide.php";
include_once "admin/utility/AttributeSet.php";

function SlideEditorItemBlock(Slide $slide) {
    $id = $slide->getID();
    $title = $slide->title;
    $text = $slide->text;
    $buttonText = $slide->buttonText;
    $buttonLink = $slide->buttonLink;
    $buttonColor = $slide->buttonColor;
    $buttonHoverColor = $slide->buttonHoverColor;
    $buttonTextColor = $slide->buttonTextColor;
    $image = $slide->getImage();

    include "admin/template/SlideEditorItemTemplate.php";
}
