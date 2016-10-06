<table class="w3-table w3-hoverable">
<tr class="w3-light-grey">
	<th style="display:">id</th>
	<th>Nama Barang</th>
  	<th>Harga</th>
</tr>
<?php foreach ($data as $rows): ?>
		<tr class="tr{{ $rows->id }}">
			<td id="nama" style="display:"><?php echo $rows->id ; ?></td>
			<td id="nama"><?php echo $rows->name ; ?></td>
			<td id="harga"><?php echo $rows->harga; ?></td>
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

	var selectedRow="";
	$("tbody tr").click(function () {

	 	$('.selected').removeClass('selected');
        $(this).addClass("selected");
        var nama = $('#nama',this).html();
        var harga =$('#harga',this).html();
        selectedRow = $(this);

        var td = $(selectedRow).children('td');

	});

	$("#btnEdit").click(function () {
		if(selectedRow!=""){
			var td = $(selectedRow).children('td');

		    var id = td[0].innerText;
		    var name = td[1].innerText;
		    var harga = td[2].innerText;

		    $("#id_edit").val(id);
		    $("#name_edit").val(name);
		    $("#harga_edit").val(harga);
		    document.getElementById('modal_edit').style.display='block';

		    // for (var i = 0; i < td.length; ++i) {
		    //     alert(i + ': ' + td[i].innerText);
		    // }
		}else{
			document.getElementById('modal_warningEdit').style.display='block';
		}
	    
	});

});
</script>