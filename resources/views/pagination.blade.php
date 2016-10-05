<table class="w3-table w3-hoverable">
<tr class="w3-light-grey">
	<th>Nama Barang</th>
  	<th>Harga</th>
</tr>
<?php foreach ($data as $rows): ?>
		<tr>
			<td class="p"><?php echo $rows->name ; ?></td>
			<td class="i"><?php echo $rows->harga; ?></td>
		</tr>


<?php endforeach; ?>
</table>

<div style="text-align:center">
<?php echo $data->links() ?>
</div>
<script>
$( document ).ready(function() {
	$('.pagination a').on('click', function(event) {
		event.preventDefault();
		if ($(this).attr('href') != '#') {
			$('#ajaxContent').load($(this).attr('href'));
		}
	});

	 $("tbody tr").click(function () {

	 	//$('.selected').removeClass('selected');
        $(this).toggleClass("selected");
        var product = $('.p',this).html();
        var infRate =$('.i',this).html();
        //alert(product +','+ infRate);

	 });
});
</script>