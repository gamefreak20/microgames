setInterval(function()
{

    getGameExp();

}, 300000);

$( document ).ready(function() {
    getGameExp(true)
});

function getGameExp(empty = false)
{
    $.ajax({
        method: "GET",
        url: "../../randomNumber",
    })
    .done(function( data ) {
        $.ajax({
            method: "GET",
            url: "../../getExp",
            data: { number: data, empty: empty }
        })
        .done(function ( data )  {
            var newData = JSON.parse(data);
            $("#xp").text(newData.currentExp + " | " + newData.neededExp);
            $(".levelTitle").text(newData.level);
        });
    });
}
