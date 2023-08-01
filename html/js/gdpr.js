$("#gdpr_accept").on("click touchstart", function (e){
    e.preventDefault();
    var dataurl=$("#gdpr_container").data('url');
    console.log(dataurl);
    $.ajax({
       url:dataurl,
        success: function (data){
           /* remove box when selected */
            $("#gdpr_container").remove();
        }
    });
});