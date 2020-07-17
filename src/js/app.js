var $ = require( "jquery" );
var Handlebars = require("handlebars");

$(document).ready(function() {

  $.ajax(
    {
      url: 'http://localhost:8888/php-ajax-dischi/server.php',
      method: 'GET',

      success: function(data) {
        printDisk(data);
        printAuthor(data)
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

    $('main .container').append(html);
  }
}

function printAuthor(array) {

  var source = $("#author-template").html();
  var template = Handlebars.compile(source);

  for (var i = 0; i < array.length; i++) {
    var element = array[i];

    var context = {
      author: element.author
    }

    console.log(context);

    var html = template(element);

    $('select').append(html);
  }
}
