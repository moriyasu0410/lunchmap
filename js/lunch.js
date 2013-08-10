var options = {
        enableHighAccuracy:false,
        timeout:5000,
        maximumAge:600000
    };
$(function(){
    navigator.geolocation.getCurrentPosition(
        success,
        error,
        options
    );
});
function success(position) {
    var latitude = position.coords.latitude;
    var longitude = position.coords.longitude;
    $("#latitude").text(latitude);
    $("#longitude").text(longitude);
    getLunchList(longitude, latitude, 0);
}
function error(error) {
    $('#lunch_list').html("位置情報が取得出来ませんでした");
}
function moreLunch() {
    $('#more_button').hide();
    var latitude = $('#latitude').text();
    var longitude = $('#longitude').text();
    var page = parseInt($('#now_page').text());
    page = page + 1;
    $('#now_page').text(page);
    getLunchList(longitude, latitude, page);
}
function getLunchList(longitude, latitude, page) {
    $.ajax({
        url: '/ajax/getLunchList',
        type: 'get',
        cache : false,
        data: {
            'longitude': longitude,
            'latitude': latitude,
            'page': page,
        },
        dataType: "html",
        success: function (res) {
            $('#lunch_list').append(res);
            if ($('#total').text() == 0) {
                $("#lunch_list").html('ランチ情報がありません。');
            }
            $('#total').remove();
            if ($('#has_next').text() == true) {
                $('#more_button').show();
            }
            $('#has_next').remove();
        },
        error: function(XMLHttpRequest, textStatus, errorThrown){
            $('#lunch_list').html("ランチ情報の取得に失敗しました");
        }
    });
}