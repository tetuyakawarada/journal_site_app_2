
$(function(){
    console.log('走る！ jquery');
    console.log('回る！ jquery');
    $('#title').css('color','white');

    $('#hede-sample').click(function(){
        $(this).hide(1000);
    });

    $('#fadeout-sample').click(function(){
        $(this).fadeOut(2000);
    });

    $('#slideup-sample').click(function(){
        $(this).slideUp(3000);
    });

    $('#hover-test').hover(
        function(){
            // $('#hover-body').fadeIn();
            $('#hover-body').slideDown();
        },
        function(){
            // $('#hover-body').fadeOut();
            $('#hover-body').slideUp();
        }
    );

    $('.hyouji').click(function(){
        $('#title').slideDown('slow');
    });

    $('#title').click(function(){
        $(this).css('color','red');
    });





        // モーダルを開く
    $(document).on('click', '[data-modal-link]', function(e) {
        e.preventDefault();
        var target = $(this).val();
        console.log(target);
        // var target = $(this).data('modalLink');
        modal_open(target);
    });

    // モーダルを閉じる
    $('.close-modal').on('click', function(e) {
        e.preventDefault();
        modal_close();
    });


});

// モーダルを開く
function modal_open(target) {
    $('[data-modal-content = ' + target + ']').addClass('is-show');
    $('.modal-bg').addClass('is-show');
}

// モーダルを閉じる
function modal_close() {
    $('[data-modal-content]').removeClass('is-show');
    $('.modal-bg').removeClass('is-show');
}
