// Update modal fields
function updateInfoModal(source) {
    let id = $(source).attr("data-id");
    let fileUrl = $(source).attr("data-fileurl");
    let filename = $(source).attr("data-filename");
    let filesize = ($(source).attr("data-filesize") / 1000).toFixed(2) + " KB";
    let timestamp = new Date($(source).attr("data-timestamp") * 1000).toLocaleDateString("de-DE");

    $("#media-modal-fileurl").attr("placeholder", fileUrl);
    $("#media-modal-filename").text(filename);
    $("#media-modal-filesize").text(filesize);
    $("#media-modal-timestamp").text(timestamp);
    $("#media-modal-fullimg").attr("src", fileUrl);

    $(".form-target").val(id);

    // Update next and previous button
    let allEntries = $(".media-list-entry").get();
    let thisIndex = allEntries.indexOf(source);

    $("#media-modal-previous").off("click").on("click", function () {
        if(thisIndex > 0) updateInfoModal(allEntries[thisIndex - 1]);
    })

    $("#media-modal-next").off("click").on("click", function () {
        if(thisIndex < allEntries.length - 1) updateInfoModal(allEntries[thisIndex + 1]);
    })
}