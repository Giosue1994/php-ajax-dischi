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

  var source = $("disk-template").html();
  var template = Handlebars.compile(source);

  for (var i = 0; i < array.length; i++) {
    var element = array[i];
    console.log(element);

    var context = {
      poster: element.poster,
      title: element.title,
      author: element.author,
      year: element.year,
     };

    var html = template(context);
    $('.card').append(html);

  }
}
