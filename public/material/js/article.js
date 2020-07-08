$(document).ready(function() {
    $(".article-form").on("submit", function(e) {
        // let quillEditor = new Quill('.editor-content');
        let value = $('.editor-content > div.ql-editor').html();
        if (quillEditor.getLength() > 1) {
            $(this).append("<textarea name='content' style='display:none'>" + value + "</textarea>");
        }
    });
});