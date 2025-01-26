$(document).ready(function() {
    $('#sortButton').click(function() {
      var sortOption = $('#zoradenie').val();
      $.ajax({
        url: 'vypis_tovar.php',
        type: 'GET',
        data: { zoradenie: sortOption },
        success: function(response) {
          $('#data-table tbody').html(response);
        },
        error: function() {
          alert('Error sorting data');
        }
      });
    });
  });