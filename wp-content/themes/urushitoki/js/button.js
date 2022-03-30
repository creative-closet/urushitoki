
$(".smf-button-control__control").prop("disabled", true);
$('.p-contact__checkbox').prop('checked', false);

$('.p-contact__checkbox').change(function() {
    // チェックが入っていたら有効化
    if ( $(this).is(':checked') ){
        // ボタンを有効化
        $('.smf-button-control__control').prop('disabled', false);
    } else {
        // ボタンを無効化
        $('.smf-button-control__control').prop('disabled', true);
    }
});