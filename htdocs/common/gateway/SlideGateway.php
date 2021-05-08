<?php
include_once "common/gateway/DatabaseGateway.php";
include_once "common/utility/DB.php";
include_once "common/model/Slide.php";

class SlideGateway extends DatabaseGateway
{
    public static function fetchAll(?array $params = null): array
    {
        $result = self::fetchFromTable("slides", $params);

        $instances = array();
        foreach ($result as $entry) {
            $slide = new Slide($entry["id"]);
            $slide->slideOrder = $entry["slide_order"];
            $slide->title = $entry["title"];
            $slide->text = $entry["text"];
            $slide->buttonText = $entry["button_text"];
            $slide->buttonLink = $entry["button_link"];
            $slide->buttonColor = $entry["button_color"];
            $slide->buttonHoverColor = $entry["button_hover_color"];
            $slide->buttonTextColor = $entry["button_text_color"];
            $slide->forceImageID($entry["image"]);

            array_push($instances, $slide);
        }

        return $instances;
    }

    public static function fetch(?array $params = null): ?Slide
    {
        $result = self::fetchAll($params);
        return count($result) > 0 ? $result[0] : null;
    }

    public static function create(object $object): int
    {
        /** @var Slide $slide */
        $slide = $object;

        DB::get()->run("INSERT INTO `slides` (slide_order, title, text, button_text, button_link, button_color, button_hover_color, button_text_color, image) 
                            VALUES (:slideOrder, :title, :text, :buttonText, :buttonLink, :buttonColor, :buttonHoverColor, :buttonTextColor, :image)",
            [
                "slideOrder" => $slide->slideOrder,
                "title" => $slide->title,
                "text" => $slide->text,
                "buttonText" => $slide->buttonText,
                "buttonLink" => $slide->buttonLink,
                "buttonColor" => $slide->buttonColor,
                "buttonHoverColor" => $slide->buttonHoverColor,
                "buttonTextColor" => $slide->buttonTextColor,
                "image" => $slide->imageID
            ]);

        return DB::get()->pdo()->lastInsertId();
    }

    public static function update(object $object): void
    {
        /** @var Slide $slide */
        $slide = $object;

        DB::get()->run("UPDATE `slides`
                            SET slide_order = :slideOrder, title = :title, text = :text, button_text = :buttonText, button_link = :buttonLink, button_color = :buttonColor, button_hover_color = :buttonHoverColor, button_text_color = :buttonTextColor, image = :image
                            WHERE id = :id",
            [
                "slideOrder" => $slide->slideOrder,
                "title" => $slide->title,
                "text" => $slide->text,
                "buttonText" => $slide->buttonText,
                "buttonLink" => $slide->buttonLink,
                "buttonColor" => $slide->buttonColor,
                "buttonHoverColor" => $slide->buttonHoverColor,
                "buttonTextColor" => $slide->buttonTextColor,
                "image" => $slide->imageID,
                "id" => $slide->getID()
            ]);
    }

    public static function delete(object $object): void
    {
        /** @var Slide $slide */
        $slide = $object;

        DB::get()->run("DELETE FROM `slides` WHERE `id` = :id",
            ["id" => $slide->getID()]);
    }
}
