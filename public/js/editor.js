var select = false;
var idSelect;
var numberOfElements = 0;

function selected(id) {
 if (select) {
   if (id == idSelect) {
     select = false;
     $('#'+idSelect).css('background-color','white');
     $('#' + idSelect + ' > p:first').css('color','#3CB46D');
     idSelect = '';
   } else {
     $('#'+id).css('background-color','#3CB46D');
     $('#' + id + ' > p:first').css('color','white');
     $('#'+idSelect).css('background-color','white');
     $('#' + idSelect + ' > p:first').css('color','#3CB46D');
     idSelect = id;
   }
 } else {
   select = true;
   $('#'+id).css('background-color','#3CB46D');
   $('#' + id + ' > p:first').css('color','white');
   idSelect = id;
 }
 console.log(select);
}

function createDiv() {

  numberOfElements++;

  var heightClass = $(".height").html();
  var createDivs = $("#createDivs").html();

  var addClass = '';
  switch (idSelect) {
    case 1:
        addClass = "<div>"+
        "<textarea name='text:" + numberOfElements + "' class='form-control designPage' placeholder='Typ your text here...'></textarea>"+
        "</div><hr />";
        break;
    case 2:
        addClass = "<div>"+
        "<input type='text' name='title:" + numberOfElements + "' class='form-control designPage' placeholder='Typ your title here...'>"+
        "</div><hr />";
        break;
    case 3:
        addClass = "<div class='custom-file'>"+
        "<input type='file' class='custom-file-input designPage' id='customFile' name='fileI0nput'" + numberOfElements + ">"+
        "<label class='custom-file-label' for='customFile'>Choose file</label>"+
        "</div><hr />";
        break;
  }

  $('#exampleModal').modal('hide');
  $("#createDivs").html(createDivs+addClass);

}
