$( document ).ready(function() {

    $("#searchTags").keyup(function() {
        var tagsData = "";
        var name = $("#searchTags").val();
        if (name == "") {
            tagsData = "Type something in to search for a tag";
            $("#searchedTags").html(tagsData);
        } else {
            $.ajax({
                method: "GET",
                url: "../tags/"+name,
            })
            .done(function( data ) {
                $.each(jQuery.parseJSON(data), function( index, data ) {
                    tagsData += "<button type='button' onclick='selectTag("+data.id+")'>"+data.name+"</button>";
                });
                $("#searchedTags").html(tagsData);
            });
        }
    });
});

function selectTag(id)
{
    var inside = false;
    var val = $("#selectedTagsHidden").val();
    if (val == "") {
        $("#selectedTagsHidden").val(JSON.stringify([id]));
        inside = true;
    } else {
        var valJson = jQuery.parseJSON(val);
        if (jQuery.inArray(id, valJson) == -1) {
            valJson.push(id);
            $("#selectedTagsHidden").val(JSON.stringify(valJson));
            inside = true;
        }
    }

    if (inside) {
        var selected = $("#selectedTags").html();

        $.ajax({
            method: "GET",
            url: "../tag/"+id,
        })
            .done(function( data ) {
                var newData = jQuery.parseJSON(data);
                $("#selectedTags").html(selected + "<button type='button' id='button"+id+"' onclick='removeTag("+id+")'>"+newData.name+"</button>");
            });
    }
    inside = false;
}

function removeTag(id)
{
    var val = $("#selectedTagsHidden").val();
    var valJson = jQuery.parseJSON(val);

    console.log(valJson);

    var index = valJson.indexOf(id);
    if (index > -1) {
        valJson.splice(index, 1);
    }
    console.log(valJson);

    $("#selectedTagsHidden").val(JSON.stringify(valJson));

    $("#button"+id).remove();
}
