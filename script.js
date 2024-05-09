$(document).ready(function() {
    $("#fecha").datepicker({
      dateFormat: "dd/mm/yy",
      onSelect: function(dateText, inst) {
        // Aquí puedes añadir código para manejar la selección de fecha
        console.log("Fecha seleccionada:", dateText);
      }
    });
  
    // Marcar la fecha de hoy
    var today = new Date();
    var dd = String(today.getDate()).padStart(2, '0');
    var mm = String(today.getMonth() + 1).padStart(2, '0'); // Enero es 0!
    var yyyy = today.getFullYear();
  
    today = dd + '/' + mm + '/' + yyyy;
    $("#fecha").val(today);
  });
  
  