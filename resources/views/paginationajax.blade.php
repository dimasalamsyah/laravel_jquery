<html>
<head>
<title>Laravel ajax pagination example : Tutsway.com</title>
<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
</head>

<style>

table tr.selected {
	background-color: #f1f1f1 !important;
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
			<button class="w3-btn w3-white" onclick="openEdit()" id="btnEdit"><i class="fa fa-pencil" aria-hidden="true"></i>&nbsp;Edit</button>
			<button class="w3-btn w3-white" onclick="openDelete()" id="btnDelete"><i class="fa fa-times" aria-hidden="true"></i>&nbsp;Delete</button>
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
      <form class="w3-container" style="font-size:12px;">
		   <p>
		   <label>Nama Barang</label>
		   <input class="w3-input" type="text"></p>
		   <p>
		   <label>Harga Barang</label>
		   <input class="w3-input" type="text"></p>
		   <p>
		   <button class="w3-btn w3-teal" onclick="simpanData()"><i class="fa fa-floppy-o" aria-hidden="true"></i>&nbsp;Simpan</button></p>
	  </form>
    </div>

  </div>
</div>
<!-- akhir modal -->

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script>
$( document ).ready(function() {
	var Url = '/laravelpagination';
	$('#ajaxContent').load(Url);
});

function openAdd(){
	document.getElementById('modal_add').style.display='block';
}

</script>
</body>
<!-- <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css"> -->
</html>