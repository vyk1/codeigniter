const BASE_URL = base_url

function clearErrors() {
    $('.has-error').removeClass("has-error")
    $('.help-block').html("")

}

function showErrors(error_list) {
    clearErrors()
    console.log('====================================');
    console.log(error_list);
    console.log('====================================');
    $.each(error_list, function (id, message) {
        console.log('====================================');
        console.log(id);
        console.log('====================================');
        console.log(message);
        $(id).parent().parent().addClass("has-error")
        $(id).parent().siblings(".help-block").html(message)
    })
}

function loadingImg(message = "") {
    return "<i class='fa fa-circle-o-notch fa-spin'></i>&nbsp;" + message
}