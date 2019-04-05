$(document).ready(function(){
    function handleLike($roots){
        $roots.each(function(i){
            var $likesCountContainer = $(this).find('.likes-count'),
                $likesNumber = Number($likesCountContainer.text()),
                $heartIcon = $(this).find('i');
            if(!$(this).hasClass('liked')){
                $(this).addClass('liked');
                $likesCountContainer.html($likesNumber + 1);
                $heartIcon.removeClass('far');
                $heartIcon.addClass('fas');
            }
            else{
                $(this).removeClass('liked');
                $likesCountContainer.html($likesNumber - 1);
                $heartIcon.removeClass('fas');
                $heartIcon.addClass('far');
            }
        });
    }

    $(document).on('click', '.likes', function(e){
        var $root = $(e.target).closest('.likes');

        handleLike($root);

        if($root.hasClass('modal-likes')){
            var $workId = $root.closest('form').find('input[name="work-id"]').val();
            handleLike($('.work-' + $workId + '-form .likes'));
        }
    });
});
