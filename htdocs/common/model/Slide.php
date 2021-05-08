<?php
include_once "common/model/DatabaseObject.php";
include_once "common/gateway/SlideGateway.php";
include_once "common/gateway/FileGateway.php";

class Slide extends DatabaseObject
{
    public int $slideOrder;
    public string $title;
    public string $text;
    public string $buttonText;
    public string $buttonLink;
    public string $buttonColor;
    public string $buttonHoverColor;
    public string $buttonTextColor;
    public ?int $imageID = null;

    public function getImage() : ?File {
        return FileGateway::fetch(["id" => $this->imageID]);
    }

    public function setImage(?File $image) : void {
        if($image == null) {
            $imageID = null;
        } else {
            $this->imageID = $image->getID();
        }
    }

    public function forceImageID(?int $id) : void {
        $this->imageID = $id;
    }

    protected function getGatewayClass(): string
    {
        return SlideGateway::class;
    }
}
