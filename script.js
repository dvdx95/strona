$(function() {

      $("#button").click( function()
           {
             load_items();
           }
      );
      $("#button-add").click( function()
           {
             display_form();
           }
      );
});

function load_items(){
  $.ajax({
        type: 'GET',
        url: 'display.php',
        datatype: 'json',
        cache: false,
        success: function (data, status) {
          try {
            var data = JSON.parse(data);

            var repleace = '<table style="width:100%">';
                repleace += '<tr>';
                repleace += '<th>ID</th>';
                repleace += '<th>NAME</th>';
                repleace += '<th>PRICE</th>';
                repleace += '<th>QUANTITY</th>';
                repleace += '<th>OPTIONS</th>';
                repleace += '</tr>';
                j = 1;
            for(i=0; i<data['items'].length; i++){
                repleace += '<tr>';
                  repleace += '<td>'+j+'</td>';
                  repleace += '<td>'+data['items'][i].name+'</td>';
                  repleace += '<td>'+data['items'][i].price+'</td>';
                  repleace += '<td>'+data['items'][i].quantity+'</td>';
                  repleace += '<td> <a href="/remove.php?id='+data['items'][i].id+'" class="remove" > REMOVE </a></td>';
                repleace += '</tr>';
                j++;
            }
            repleace += '</table>';
            $('#items').html(repleace);
          } catch (error) {
          console.error(error);
          }
        }
    });
}

function display_form(){
    var form = '<form>';
    form += '<label for="itemname">Item Name</label>';
    form += '<input type="text" id="itemname" name="item-name" placeholder="Item name here..">';
    form += '<label for="itemprice">Item Price</label>';
    form += '<input type="text" id="itemprice" name="item-price" placeholder="Item price here..">';
    form += '<label for="itemquantity">Item Quantity</label>';
    form += '<input type="text" id="itemquantity" name="item-quantity" placeholder="Item quantity here..">';
    form += '</form>';
    form += '<button id="add" class="button"> Add </button>';
    $('#add-item-form').html(form);
    $("#add").click( function()
         {
             var r = confirm("Do you confirm?");
             if (r) {
               post_add();
             } else {
               //
             }
         }
    );
}

function post_add(){

  var values = new Object();
  values.name = $( "#itemname" ).val();
  values.price = $( "#itemprice" ).val();
  values.quantity = $( "#itemquantity" ).val();

  $.ajax({
        url: "additem.php",
        type: "post",
        data: values ,
        success: function (response) {
          try {
            const data = JSON.parse(response);
            var r = confirm("Item added, do you want reload the items list?");
            if (r) {
              load_items();
            } else {
              //
            }
          } catch(err) {
            alert(err);
          }
        },
        error: function(jqXHR, textStatus, errorThrown) {
           console.log(textStatus, errorThrown);
        }
    });
}
