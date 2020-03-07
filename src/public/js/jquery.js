$(document).ready(function(){
    $('.delete-post').click(function(event){
        event.preventDefault();
        var ajaxurl = `src/actions/actions.php?action=delete&id=${event.target.id.replace('del', '')}`; 
        if(confirm('Are you sure than you want delete this post?')){
            $.post(ajaxurl, {});
            $('body').load('/');
        }
    });

    $('.edit-post').click(function(event){
        
        const id = event.target.id;
        let preview = $(`#${id.replace('edit', '')}`);
        if(!$(preview).find('textarea').length){
            preview.find('.post-container').removeAttr('href');
            preview.find('.post-title')
                        .replaceWith(`<input class='post-title' value='${$.trim(preview.find('.post-title').html())}'>`).removeAttr();

            preview.find('.post-subtitle')
                        .replaceWith(`<textarea class="post-subtitle" style='width: 100%; font-size: 30px'>${$.trim(preview.find('.post-subtitle').html())}</textarea>`);

            preview.find('.post-autor')
                        .replaceWith(`<input class='post-autor' value='${$.trim(preview.find('.post-autor').html())}'>`);
        }

        if(!$(preview).find('button').length){
            
            preview.append(`<button class="btn btn-secondary cancel">Cancel</button>`);
            preview.append('<button class="btn btn-primary save">Save</button>');
        }

        if($('body').find('.cancel')){
            $('.edit-post').addClass("disabled");
        }

        $('.cancel').click(function(){
            $('body').load('/');
        });

        $('.save').click(function(event){
            event.preventDefault();
            const id = jQuery(preview).attr('id');
            const postTitle = preview.find('.post-title').val();
            const postSubtitle = preview.find('.post-subtitle').val();
            const postAutor = preview.find('.post-autor').val();

            const data ={
                'titleSave': postTitle,
                'contentSave':postSubtitle,
                'autorSave': postAutor,
            };
            
            var ajaxurl = `src/actions/actions.php/?action=save&id=${id}`; 
            if(confirm('Do you want update this post?')){
                $.post(ajaxurl, data);
                $('body').load('/');
            }
        });
    });
});