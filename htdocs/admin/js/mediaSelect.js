let currentInputID = "";

// Update the file selection input ID that is currently being edited
function setCurrentInputID(inputID) {
    currentInputID = inputID;
}

// Update selected file
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
