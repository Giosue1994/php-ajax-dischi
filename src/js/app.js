var $ = require( "jquery" );
var Handlebars = require("handlebars");

$(document).ready(function() {

  $.ajax(
    {
      url: 'http://localhost:8888/php-ajax-dischi/server.php',
      method: 'GET',

      success: function(data) {
        printDisk(data)
      },

      error: function() {
        alert('Error');
      }

    }
  );

});

function printDisk(array) {

  var source = $("#disk-template").html();
  var template = Handlebars.compile(source);

  for (var i = 0; i < array.length; i++) {
    var element = array[i];

    var html = template(element);
    $('.card').append(html);

  }
}
