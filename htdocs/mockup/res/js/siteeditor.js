// Change Order
$('#siteeditor-item-list').sortable({
    update: function(event, ui){
    let postData = $(this).sortable('serialize');
        console.log(postData);

        $.post('moveBlockHandler.php', {'list': postData});
    }
});

