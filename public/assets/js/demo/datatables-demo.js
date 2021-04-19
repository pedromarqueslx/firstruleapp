// Call the dataTables jQuery plugin
$(document).ready(function() {
  //$('#users-table').DataTable();
  // Setup - add a text input to each footer cell
/*  $('#dataTable tfoot th').each( function () {
    var title = $(this).text();
    //$(this).html( '<input type="text" placeholder=" '+title+'" />' );
    $(this).html( '<input type="text" placeholder="*"/>' );
  } );*/

  // DataTable
  var table = $('#dataTable').DataTable( {
        dom: 'Blfrtip',
        buttons: ['excel', 'print'],
        order:[ 2, "asc" ],

        "language": {
          "sProcessing":   "A processar...",
          "sLengthMenu":   "_MENU_",
          "sZeroRecords":  "Não foram encontrados resultados",
          "sInfo":         "Mostrando _START_ a _END_ de _TOTAL_ registos",
          "sInfoEmpty":    "Mostrando 0 a 0 de 0 registos",
          "sInfoFiltered": "(filtrado de _MAX_ registos no total)",
          "sInfoPostFix":  "",
          "sSearch":       "Procurar:",
          "sUrl":          "",
          "oPaginate": {
            "sFirst":    "Primeiro",
            "sPrevious": "Anterior",
            "sNext":     "Seguinte",
            "sLast":     "Último"
          }
        }
      }
  );

  // Apply the search
  table.columns().every( function () {
    var that = this;
    $( 'input', this.footer() ).on( 'keyup change', function () {
      if ( that.search() !== this.value ) {
        that
            .search( this.value )
            .draw();
      }
    } );
  } );
} );
