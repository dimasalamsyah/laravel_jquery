<html>
<head>
<title>Laravel</title>
<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
</head>

<style>

table tr.selected {
	background-color: #bfbfbf !important;
	vertical-align: middle;
	padding: 1.5em;
}

/*#2196F3!important*/
.pagination {
	display: inline-block; padding-right: 0; margin: 20px 0; border-radius: 4px; float: right;
}
.pagination>li {
	display: inline
}
.pagination>li>a, .pagination>li>span {
	position: relative;
	float: left;
	padding: 6px 12px;
	line-height: 1.428571429;
	text-decoration: none;
	color: #333333;
	background-color: #fff;
	border: 1px solid #e4e4e4;
}
/*.pagination>li:first-child>a, .pagination>li:first-child>span {
	margin-right: 0; border-bottom-right-radius: 4px; border-top-right-radius: 4px
}
.pagination>li:last-child>a, .pagination>li:last-child>span {
	border-bottom-left-radius: 4px; border-top-left-radius: 4px
} */
.pagination>li>a:hover, .pagination>li>span:hover, .pagination>li>a:focus, .pagination>li>span:focus {
	color: #fff;
	background-color: #808080!important;  /*color hover*/
	border-color: #808080
}
.pagination>.active>a, .pagination>.active>span, .pagination>.active>a:hover, .pagination>.active>span:hover, .pagination>.active>a:focus, .pagination>.active>span:focus {
	z-index: 2; color: #fff; background-color: #2196F3; border-color: #fff; cursor: default
}
.pagination>.disabled>span, .pagination>.disabled>span:hover, .pagination>.disabled>span:focus, .pagination>.disabled>a, .pagination>.disabled>a:hover, .pagination>.disabled>a:focus {
	color: #777; background-color: #fff; border-color: #ddd; cursor: not-allowed
}
.pagination-lg>li>a, .pagination-lg>li>span {
	padding: 10px 16px; font-size: 18px
}
.pagination-lg>li:first-child>a, .pagination-lg>li:first-child>span {
	border-bottom-right-radius: 6px; border-top-right-radius: 6px
}
.pagination-lg>li:last-child>a, .pagination-lg>li:last-child>span {
	border-bottom-left-radius: 6px; border-top-left-radius: 6px
}
.pagination-sm>li>a, .pagination-sm>li>span {
	padding: 5px 10px; font-size: 12px
}
.pagination-sm>li:first-child>a, .pagination-sm>li:first-child>span {
	border-bottom-right-radius: 3px; border-top-rightt-radius: 3px
}
.pagination-sm>li:last-child>a, .pagination-sm>li:last-child>span {
	border-bottom-left-radius: 3px; border-top-left-radius: 3px
}

</style>


<body>

<div class="w3-container">

	<div class="w3-card-4">

		<header class="w3-container w3-teal">
		  <h6>Form Master Barang</h6>
		</header>

		<div class="w3-container w3-padding-4">
			<button class="w3-btn w3-white" onclick="openAdd()" id="btnAdd"><i class="fa fa-plus-circle" aria-hidden="true"></i>&nbsp;Add</button>
			<button class="w3-btn w3-white"  id="btnEdit"><i class="fa fa-pencil" aria-hidden="true"></i>&nbsp;Edit</button>
			<button class="w3-btn w3-white"  id="openDelete"><i class="fa fa-times" aria-hidden="true"></i>&nbsp;Delete</button>
			<button class="w3-btn w3-white" onclick="printPDF()" class="printReport"><i class="fa fa-file-pdf-o" aria-hidden="true"></i>&nbsp;PDF</button>
			<button class="w3-btn w3-white" onclick="printExcel()" class="printReport"><i class="fa fa-file-excel-o" aria-hidden="true"></i>&nbsp;Excel</button>
		</div>

		<div id="ajaxContent">
		</div>

	</div>

</div>

<!-- modal add -->
<div id="modal_add" class="w3-modal">
  <div class="w3-modal-content">
  	<header class="w3-container w3-teal">
        <span onclick="document.getElementById('modal_add').style.display='none'"
        class="w3-closebtn">&times;</span>
        <h6>Tambah Data Barang</h6>
     </header>

    <div class="w3-container">
  	{!! Form::open(['route'=>'barang.store'])  !!}
  		<p>
		  	<label>Nama Barang</label>
			{!! Form::text('name', null, ['class' => 'w3-input']) !!}
		</p>
		<p>
		   <label>Harga Barang</label>
    		{!! Form::text('harga', null, ['class' => 'w3-input']) !!}
    	</p>
    	<p>
		   <button class="w3-btn w3-teal" type="submit"><i class="fa fa-floppy-o" aria-hidden="true"></i>&nbsp;Simpan</button>
		</p>
		<!-- {!! Form::submit('Simpan', ['class' => 'w3-btn w3-teal']) !!} -->
	{!! Form::close() !!}

    </div>

  </div>
</div>
<!-- akhir modal -->

<!-- modal edit -->
<div id="modal_edit" class="w3-modal">
  <div class="w3-modal-content">
  	<header class="w3-container w3-teal">
        <span onclick="document.getElementById('modal_edit').style.display='none'"
        class="w3-closebtn">&times;</span>
        <h6>Edit Data Barang</h6>
     </header>

    <div class="w3-container">
  	<!-- {!! Form::open(['route'=>['barang.update','!!} {!!'], 'method'=> 'PATCH'])  !!} -->
  	<form action="" method="post">
  		<p>
		  	<label>id Barang</label>
			{!! Form::text('id', null, ['class' => 'w3-input', 'id' => 'id_edit']) !!}
			</p>
  		<p>
		  	<label>Nama Barang</label>
			{!! Form::text('name', null, ['class' => 'w3-input', 'id' => 'name_edit']) !!}
			</p>
			<p>
		  <label>Harga Barang</label>
    		{!! Form::text('harga', null, ['class' => 'w3-input', 'id' => 'harga_edit']) !!}
    	</p>
			<p>
				<input type="hidden" name="_method" value="put">
			</p>
			<p>
				<input type="hidden" name="_token" value="{{ csrf_token() }}">
			</p>
    	<p>
		   <button class="w3-btn w3-teal" type="button" id="btnSave"><i class="fa fa-floppy-o" aria-hidden="true"></i>&nbsp;Simpan</button>
			</p>
		<!-- {!! Form::submit('Simpan', ['class' => 'w3-btn w3-teal']) !!} -->
	<!-- {!! Form::close() !!} -->
	</form>

    </div>

  </div>
</div>
<!-- akhir modal -->


<!-- modal warning edit -->
<div id="modal_warningEdit" class="w3-modal" style="">
  <div class="w3-modal-content" style="width:20%">
  	<header class="w3-container w3-teal">
        <span onclick="document.getElementById('modal_warningEdit').style.display='none'"
        class="w3-closebtn">&times;</span>
        <h6>Warning</h6>
     </header>

    <div class="w3-container">
    	<p>Pilih baris yang ingin di edit.</p>
    </div>

  </div>
</div>
<!-- akhir modal -->

<!-- modal warning delete -->
<div id="modal_warningDelete" class="w3-modal" style="">
  <div class="w3-modal-content" style="width:20%">
  	<header class="w3-container w3-teal">
        <span onclick="document.getElementById('modal_warningDelete').style.display='none'"
        class="w3-closebtn">&times;</span>
        <h6>Warning</h6>
     </header>

    <div class="w3-container">
			<form class="" action="barang/2" method="post">


    	<p>Yakin ingin di hapus?</p>
			<p>
		   <button class="w3-btn w3-teal" type="button" id="btnDeleteDeal"><i class="fa fa-floppy-o" aria-hidden="true"></i>&nbsp;Hapus</button>
			</p>
			<p>
		   {{-- <button class="w3-btn w3-teal" type="button" onclick="document.getElementById('modal_warningDelete').style.display='none'"><i class="fa fa-floppy-o" aria-hidden="true"></i>&nbsp;Batal</button> --}}
			 <input type="submit" name="name" value="tes">
			</p>
			<p>
				<input type="hidden" name="_method" value="delete">
			</p>
			<p>
				<input type="hidden" name="_token" value="{{ csrf_token() }}">
			</p>

		</form>
		</div>


  </div>
</div>
<!-- akhir modal -->

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script>
$( document ).ready(function() {
	var Url = '/master-barang-pagination';
	$('#ajaxContent').load(Url);

	$("#btnSave").click(function () {

	 	$.ajax({
            type: 'post',
            url: '/barang/'+ $("#id_edit").val(),
            data: {
                '_token': $('input[name=_token]').val(),
                '_method': $('input[name=_method]').val(),
                'id': $("#id_edit").val(),
                'name': $('#name_edit').val(),
                'harga': $('#harga_edit').val()
            },
            success: function(datanya) {
                 //console.log('oke');

                 var dataReplce = "<tr class='tr" + $("#id_edit").val() + "'>";
                 	dataReplce += "<td>" + $("#id_edit").val() + "</td><td>" + $("#name_edit").val() + "</td><td>" + $("#harga_edit").val() + "</td>";
                 	dataReplce += "</tr>";

                 $('.tr' + $("#id_edit").val()).replaceWith(dataReplce);
                  document.getElementById('modal_edit').style.display='none';

                 //console.log(dataReplce);
                 //console.log(datanya);
            }
        });

	});


	$("#btnDeleteDeal").click(function () {

	 	$.ajax({
            url: '/barang/4',
            data: {
                '_token': $('input[name=_token]').val(),
                '_method': $('input[name=_method]').val(),
                'id': '4'
            },
            success: function(datanya) {
                 //console.log(dataReplce);
								 id="tes";
								//  var td = $(selectedRow).children('td');
								 //
								 // 	var id = td[0].innerText;
                 console.log(id);
            }
        });

	});



});

function openAdd(){
	document.getElementById('modal_add').style.display='block';
}



</script>
</body>
<!-- <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css"> -->
</html>
