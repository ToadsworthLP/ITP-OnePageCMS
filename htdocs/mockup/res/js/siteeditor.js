// Change Order
$('#siteeditor-item-list').sortable({
    update: function(event, ui){
    var postData = $(this).sortable('serialize', {key: 'id'});
        console.log(postData);

        $.post('mockup/res/js/siteEditorTest.php', {'list': postData});
    }
});

