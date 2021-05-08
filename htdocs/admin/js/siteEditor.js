let currentInputID = "";

// Save Editor-Sections sortable order change to DB
$('#siteeditor-item-list').sortable({
    update: function(event, ui){
        let postData = $(this).sortable('serialize');
        $.post('admin.php?action=11', {'list': postData});
    }
});

// Save Slider sortable order to DB
$('#slider-item-list').sortable({
    update: function(event, ui){
    let postData = $(this).sortable('serialize');
        $.post('admin.php?action=18', {'list': postData});
    }
});

// Save Socialmedialinks sortable order to DB
$('#socialmedia-item-list').sortable({
    /*update: function(event, ui){
    let postData = $(this).sortable('serialize');
        $.post('admin.php?action=18', {'list': postData});
    }*/
});

// Write selected tab to hidden field
function setTemplate(block, id) {
    $("#selectedTemplate-" + block).val(id.toString());
}

// Update the file selection input ID that is currently being edited
function setCurrentInputID(inputID) {
    currentInputID = inputID;
}

// Update selected file in site editor
function updateSelectedFile(fileID, fileName) {
    $("#" + currentInputID).val(fileID);
    $("#" + currentInputID + "-button").text(fileName + " ausgewählt");
    $("#media-selection-modal").modal("hide");
}

// Empties file selection
function resetSelectedFile() {
    $("#" + currentInputID).val("");
    $("#" + currentInputID + "-button").text("Nichts ausgewählt");
    $("#media-selection-modal").modal("hide");
}
