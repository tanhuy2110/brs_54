$(document).ready(function() {
    $('#dataTables-example').DataTable({
        responsive: true
    });
});
$(".menu1").next('ul').toggle();

$(".menu1").click(function(event) {
	$(this).next("ul").toggle(500);
});
