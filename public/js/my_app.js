/*load table paging*/
var Url = '/master-barang-pagination';
$('#ajaxContent').load(Url);

/*saat add data modal*/
function openAdd(){
	document.getElementById('modal_add').style.display='block';
}

$('.pagination a').on('click', function(event) {
	event.preventDefault();
	if ($(this).attr('href') != '#') {
		$('#ajaxContent').load($(this).attr('href'));
	}
});