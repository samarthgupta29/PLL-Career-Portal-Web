
$(document).ready(function () {
    debugger
   gettilte();
    var IP;
    var Title = jQuery(this).attr('title');
    $.get('http://jsonip.com', function (res) {
        debugger;
        IP = res.ip;
        $.ajax({

            url: 'https://gailebank.gail.co.in/spandan/PFWebService.asmx/SaveIPAddress',
            type: 'post',
            contentType: 'application/json; charset=utf-8',
            data: "{IPAddress:'" + IP + "',PageName:'" + Title + "'}",
            dataType: 'json',
            async:false,
            success: function (data) { },
            error: function (data) { }
        });

    });
    
    console.log(IP);
   // console.log(url);
   
});

function gettilte()
{
    debugger
    var Title = document.title;
    console.log(document.title)
    
}