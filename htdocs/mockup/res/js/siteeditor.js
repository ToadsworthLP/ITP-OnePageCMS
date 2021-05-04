// Change Order site-section
$('#siteeditor-item-list').sortable({
    update: function(event, ui){
    let postData = $(this).sortable('serialize');
        console.log(postData);

        $.post('moveBlockHandler.php', {'list': postData});
    }
});

// Change Order slider
$('#slider-item-list').sortable({
    update: function(event, ui){
    let postData = $(this).sortable('serialize');
        console.log(postData);

        //$.post('moveBlockHandler.php', {'list': postData});
    }
});

