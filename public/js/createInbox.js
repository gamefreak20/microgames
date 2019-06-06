$( document ).ready(function() {

    $("#searchUser").keyup(function() {
        var tagsData = "";
        var name = $("#searchUser").val();
        if (name == "") {
            tagsData = "Type something in to search for a user";
            $("#searchedUsers").html(tagsData);
        } else {
            $.ajax({
                method: "GET",
                url: "../users/"+name,
            })
                .done(function( data ) {
                    if (data == "[]") {
                        tagsData = "We could not find anybody with that name";
                    } else {
                        $.each(jQuery.parseJSON(data), function( index, data ) {
                            tagsData += "<button type='button' class='userButtons' id='user"+data.name+"' onclick='selectUser(\""+data.id+"\", \""+data.name+"\")'>"+data.name+"</button>";
                        });
                    }

                    $("#searchedUsers").html(tagsData);
                });
        }
    });
});

function selectUser(id, name)
{
    $(".userButtons").css('border-color', 'white');
    // this.style('color: blue');
    $("#user_id_receiver").val(id);
    $("#user"+name).css('border-color', 'blue');
}
