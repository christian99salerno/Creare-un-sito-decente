<?php

require_once("header.php");

?>    

<script>

    $(document).ready( function () {
      console.log('ready');

      var gamesTable = $('#games');
      var gamesTBody = gamesTable.find('tbody');

      $.get('list_games.php', function (data) {
        //console.log('data', data);
        data = JSON.parse(data)
        //console.log('data', data);
        data.forEach( function (gioco) {
          //console.log(utente);
          var tr = $('<tr>',{ 'data-id':'gioco' + gioco.ID });
          var td = $('<td>');
          $('<td>').text(gioco.ID).appendTo(tr);
          $('<td>').text(gioco.Titolo).appendTo(tr);
          $('<td>').text(gioco.Genere).appendTo(tr);
          $('<td>').text(gioco.Data).appendTo(tr);
          $('<td>').text(gioco.Piattaforma).appendTo(tr);
          $('<td>').text(gioco.Sviluppatore).appendTo(tr);
          tr.appendTo(gamesTBody);
        });
      }); 
    });
</script>


<div class="container">
      <table class="table bg-light mt-2" id="games">
        <thead>
          <tr>
            <th>ID</th>
            <th>Titolo</th>
            <th>Genere</th>
            <th>Data</th>
            <th>Piattaforma</th>
            <th>Sviluppatore</th>
          </tr>
        </thead>

        <tbody>
        </tbody>
      </table>
      
    </div>



<?php

require_once("footer.php");

?>