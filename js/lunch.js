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
    getLunchList(longitude, latitude);
}
function error(error) {
    $('#lunch_list').html("位置情報が取得出来ませんでした");
}
function getLunchList(longitude, latitude) {
    $.ajax({
        url: '/ajax/getLunchList',
        type: 'get',
        cache : false,
        data: {
            'longitude': longitude,
            'latitude': latitude
        },
        dataType: "html",
        success: function (res) {
            $('#lunch_list').append(res);
        },
        error: function(XMLHttpRequest, textStatus, errorThrown){
            $('#lunch_list').html("ランチ情報の取得に失敗しました");
        }
    });
}