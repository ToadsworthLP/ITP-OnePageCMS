// Save sortable order change to DB
$('#siteeditor-item-list').sortable({
    update: function(event, ui){
        let postData = $(this).sortable('serialize');
        $.post('admin.php?action=11', {'list': postData});
    }
});

// Write selected tab to hidden field
function setTemplate(block, id) {
    $("#selectedTemplate-" + block).val(id.toString());
}