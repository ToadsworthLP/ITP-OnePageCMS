<?php
include_once "common/gateway/BlockGateway.php";
include_once "common/gateway/AttributeGateway.php";
include_once "admin/utility/RequirePermissions.php";
include_once "admin/utility/AttributeSet.php";

if(isset($_POST["_targetBlock"])) {
    $block = BlockGateway::fetch(["id" => $_POST["_targetBlock"]]);
    unset($_POST["_targetBlock"]);

    RequirePermissions($block->getSite()->requiredPermissions);

    // Update block type if needed
    if(isset($_POST["_template"])) {
        if($_POST["_template"] != $block->getType()->getID()) {
            $block->forceTypeID($_POST["_template"]);
            $block->update();
            echo "a";
        }

        unset($_POST["_template"]);
    }

    $current = new AttributeSet($block);

    foreach ($_POST as $key => $value) {
        echo $key." ".$value."<br>";

        $currentValue = $current->get($key);
        if($currentValue == "" && $value != "") { // Attribute doesn't exist and the new value isn't empty, create it
            if($key[0] == "@") { // Treat value as file reference
                $newAttribute = new FileAttribute();
                $newAttribute->name = substr($key, 1); // Remove @ from name
                $newAttribute->forceFileID($value);
                $newAttribute->setBlock($block);
                $newAttribute->create();
            } else { // Treat value as normal text
                $newAttribute = new TextAttribute();
                $newAttribute->name = $key;
                $newAttribute->text = $value;
                $newAttribute->setBlock($block);
                $newAttribute->create();
            }
        } else if($currentValue != "") { // Attribute already exists
            if($value == "") { // New value is empty, delete it
                $target = AttributeGateway::fetch(["block" => $block->getID(), "name" => $key]);
                $target->delete();
            } else if($value != $currentValue) { // New value is different from previous one, update it
                $target = AttributeGateway::fetch(["block" => $block->getID(), "name" => $key]);
                if($target instanceof TextAttribute) $target->text = $value;
                if($target instanceof FileAttribute) $target->forceFileID($value);

                $target->update();
            } // Do nothing if previous value is equal to the new one
        }
    }
}

header("Location: ".ReturnUtility::getLink());