$( function() {

    var base_url = location.protocol + "//" + location.host+"/";

    $('.redactor').redactor({
        minHeight  : '250px',
        maxHeight: '250px',
        removeEmpty : [ 'strong' , 'em' , 'span' , 'p' ],
        lang: 'fr',
        plugins: ['imagemanager','fontsize','fontcolor','alignment'],
        imageUpload: base_url + 'uploadRedactor',
        imageManagerJson: base_url + 'imageJson',
        imageResizable: true,
        imagePosition: true,
        formatting: ['h1', 'h2','h3','p', 'blockquote'],
        buttons: ['format', 'bold', 'italic','lists', 'image', 'link'],
        callbacks: {
            upload: {
                beforeSend: function(xhr) {
                    xhr.setRequestHeader('X-CSRF-Token', $('meta[name="csrf-token"]').attr('content'));
                }
            }
        }
    });

});