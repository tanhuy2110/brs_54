$(document).ready(function() {
    $('#dataTables-example').DataTable({
        responsive: true
    });
});
function ConfirmDelete()
{
    var message = $('#hide').data('data-mesage');
    var x = confirm(message);
    if (x)
        return true;
    else
        return false;
}
$('.alert').delay(500).fadeOut(3500);
