var $ = require( "jquery" );
var Handlebars = require("handlebars");

$(document).ready(function() {

  // al cambio della select mostro a schermo l'autore selezionato
  $('select').change(function() {
    var author = $(this).val();
    diskAuthor(author);
  });

  $.ajax(
    {
      url: 'http://localhost:8888/php-ajax-dischi/server.php',
      method: 'GET',

      success: function(data) {
        printDisk(data);
        printAuthors(data);
      },

      error: function() {
        alert('Error');
      }

    }
  );

});


//////////////// FUNZIONI ////////////////////

// funzione che ricerca l'autore del disco
// l'argomento da passare è l'autore
function diskAuthor(author) {
  $.ajax(
    {
      url: 'http://localhost:8888/php-ajax-dischi/server.php',
      method: 'GET',

      success: function(data) {
        $('main .container').html('');

        var source = $("#disk-template").html();
        var template = Handlebars.compile(source);

        for (var i = 0; i < data.length; i++) {
          var disk = data[i];

          // se l'argomento passato è uguale all'autore del disco
          // appendo solo quel disco
          if (author === disk.author) {
            var html = template(disk);
            $('main .container').append(html);
          }
        }
      },

      error: function() {
        alert('Error');
      }

    }
  );
};

// funzione che stampa i dischi
// l'argomento da passare è l'array dei dischi
function printDisk(array) {

  var source = $("#disk-template").html();
  var template = Handlebars.compile(source);

  for (var i = 0; i < array.length; i++) {
    var element = array[i];

    var html = template(element);

    $('main .container').append(html);
  }
};

// funzione che stampa il nome dell'autore
// l'argomento da passare è l'array dei dischi
function printAuthors(array) {

  var source = $("#author-template").html();
  var template = Handlebars.compile(source);

  for (var i = 0; i < array.length; i++) {
    var element = array[i];

    var context = {
      author: element.author
    }

    var html = template(element);

    $('select').append(html);
  }
};
