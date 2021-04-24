// Save sortable order change to DB
$('#siteeditor-item-list').sortable({
    update: function(event, ui){
        let postData = $(this).sortable('serialize');
        $.post('admin.php?action=11', {'list': postData});
    }
});