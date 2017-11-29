$(function () {
    var lastBlockContainer = $("#lastBlockInfoWraper");
    lastBlockContainer.hide();

    $("#connectButton").click(function (e) {
        e.preventDefault();
        console.log("Connecting...");
        $.ajax({
            method:"GET",
            url:"/api/connect",
            data:""
        }).done(function (res) {
           console.log(res);
           $("#connectStatusLabel").html(res);
        }).fail(function (res) {
           console.log("error");
            $("#connectStatusLabel").html("error");
        });

    });

    $("#newAddrButton").click(function (e) {
        e.preventDefault();
        console.log("Getting new address...");
        $.ajax({
            method:"GET",
            url:"/api/addr/new",
            data:""
        }).done(function (res) {
            console.log(res);
            $("#newAddrLabel").html(res);
        }).fail(function(){
            console.log("error");
        });
    });

    $("#getLastBlock").click(function (e) {
        e.preventDefault();
        console.log("Getting last block...");
        $.ajax({
            method:"GET",
            url:"/api/block/last",
            data:""
        }).done(function (res) {
            console.log(res);
            var content = '';
            for(elem in res) {
                content += '<tr>';
                content += '<td>' + elem + '</td>';
                content += '<td>' + res[elem] + '</td>';
                content += '</tr>';
            }
            $("#lastBlockInfo").html(content);
            lastBlockContainer.show();
        });
    });

});