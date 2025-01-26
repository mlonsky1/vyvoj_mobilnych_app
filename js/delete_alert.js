$(document).ready(function () {
      // Handle the sorting form submission
      $('#sortForm').on('submit', function (e) {
        e.preventDefault(); // Prevent the form from submitting traditionally
        var zoradenie = $('select[name="zoradenie"]').val(); // Get selected sort option

        $.ajax({
          url: 'index.php',  // Use the same page for sorting
          method: 'GET',
          data: { zoradenie: zoradenie },
          success: function (response) {
            // Update the table data
            $('#table-data').html($(response).find('#table-data').html());
          },
          error: function () {
            swal("Error", "Unable to fetch data", "error");
          }
        });
      });

      // Handle item deletion
      $('.btn-danger').click(function (e) {
        e.preventDefault();
        var id = $(this).data('id');

        swal({
          title: "Ste si istý?",
          text: "Po vymazaní nie je možné položku obnoviť!",
          icon: "warning",
          buttons: true,
          dangerMode: true,
        })
        .then((willDelete) => {
          if (willDelete) {
            $.ajax({
              url: 'zmazanietov.php',
              type: 'GET',
              data: { k: id },
              success: function(response) {
                swal("Položka bola úspešne vymazaná", "success")
                .then(() => {
                  location.reload();
                });
              },
              error: function() {
                swal("Error", "Pri odstraňovaní sa vyskytol problém", "error");
              }
            });
          } else {
            swal("Položka nebola vymazaná");
          }
        });
      });

      // Handle search functionality
      $("#search").on("keyup", function() {
        var value = $(this).val().toLowerCase();
        $("#data-table tbody tr").filter(function() {
          $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
        });
      });
    });