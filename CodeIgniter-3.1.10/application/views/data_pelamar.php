<?php include 'template/header.php'; ?>
<div class="table-responsive">
 
    					
 	<table class="table table-condensed table-hovered table-stiped table-bordered dt-responsive display nowrap" 
 	id="tbl_user" >
 		<thead>
 			<tr>
 				<th>#</th>
 				<th>nama <br><input type="text" class="form-control input-sm" placeholder="SEARCH" ></th>
 				<th>alamat<br><input type="text" class="form-control input-sm" placeholder="SEARCH" ></th>
 				<th>jenis_kelamin <br><input type="text" class="form-control input-sm" placeholder="SEARCH" ></th>
 				<th>no_ktp<br><input type="text" class="form-control input-sm" placeholder="SEARCH" ></th>
 				<th>scan_ktp<br><input type="text" class="form-control input-sm" placeholder="SEARCH" ></th>
 				<th>skck<br><input type="text" class="form-control input-sm" placeholder="SEARCH" ></th>
 				<th>pasfoto<br><input type="text" class="form-control input-sm" placeholder="SEARCH" ></th>
 				<th>ijasah<br><input type="text" class="form-control input-sm" placeholder="SEARCH" ></th>
 				<th>kartu_keluarga<br><input type="text" class="form-control input-sm" placeholder="SEARCH" ></th>
 				<th>id_user<br><input type="text" class="form-control input-sm" placeholder="SEARCH" ></th>
 				<th>email<br><input type="text" class="form-control input-sm" placeholder="SEARCH" ></th>
 				<th>no_hp<br><input type="text" class="form-control input-sm" placeholder="SEARCH" ></th>
 				<th>tgl_lahir<br><input type="text" class="form-control input-sm" placeholder="SEARCH" ></th>
 				<th>sertifikat<br><input type="text" class="form-control input-sm" placeholder="SEARCH" ></th>
 				<th>profil<br><input type="text" class="form-control input-sm" placeholder="SEARCH" ></th>

 			</tr>
 		</thead>
 		<tbody id="show_data">
 			
 		</tbody>	
 	</table> 
 	</div>
           
           <?php include 'template/footer.php'; ?>


 <script>
 	var save_method;
 	var table;

 	$(document).ready(function(){
 		 $.fn.dataTableExt.oApi.fnPagingInfo = function(oSettings){
 		 	return{
 		 		"iStart"			:oSettings._iDisplayStart,
 		 		"iEnd"			    :oSettings.fnDisplayEnd(),
 		 		"iLenght"			:oSettings._iDisplayLenght,
 		 		"iTotal"			:oSettings.fnRecordsTotal(),
 		 		"iFilteredTotal"	:oSettings.fnRecordsDisplay(),
 		 		"iPage"				:Math.ceil(oSettings._iDisplayStart/oSettings._iDisplayLenght),
 		 		"iTotalPages"		:Math.ceil(oSettings.fnRecordsDisplay()/oSettings._iDisplayLenght)
 		 	}
 		 };
 		table = $('#tbl_data_lowongan').DataTable({
 			"processing" : true,
 			"serverSide" : true,
 			"searching"  : true,
 			"pagingType" : 'full_numbers',
 			// "dom"        : 'Bfrtip',
 			// "Buttons"    : [
 			// {"extend" : 'excel' , "className" : 'btn btn-success btn-flat'},
 			// {"extend" : 'pdf' , "className" : 'btn btn-danger  btn btn-flat'},
 			// {"extend" :'pageLenght' , "className" : 'btn btn-default btn-flat'}
 			// ],
 			"lengthMenu" : [
 				[100,150,200,300,-1],
 				['100 Rows','150 Rows','200 Rows','300 Rows','All']
 			],
 			"ajax" : {
 				"url" : "<?php echo site_url('index.php/control/ssp_pelamar'); ?>",
 				"type" : "POST"
 			},
 			"order" : [[1,'asc']],
 			"columnDefs" : [{
 				"targets":[ -1 ],
 				"orderable" : false
 			}]
 			// ,
 			// "rowCallback" :  function(row,data,iDisplayIndex){
 			// 	var info = this.fnPagingInfo();
 			// 	var page = info.iPage;
 			// 	var length = info.iLenght;
 			// 	var index = page * length + (iDisplayIndex + 1);
 			// 	$('td:eq(0)' , row).html(index);
 			// }
 		});
 		// table.columns().every(function(){
 		// 	var table = this;
 		// 	$('input' , this.header()).on('keyup change',function(){
 		// 		if (table.search() !== this.value){
 		// 			table.search(this.value).draw();
 		// 		}
 		// 	});
 		// });

 		// $('#tbl_user').on('click', '.edit_record',function(){
 		// 	var id_user = $(this).data('id_user');
 			// location = '<?php //echo base_url("index.php/control/detail_unit"); ?>'+id_user;
 		// });
 		// $('#tbl_user').on('click', '.edit_record',function(){
 		// 	var id_user = $(this).data('id_user');
 			// location = '<?php //echo base_url("index.php/control/form_unit"); ?>'+id_user;
 		// });
 		// $('#tbl_user').on('click','.delete_recird',function(){
 		// 	var id_user = $(this).data('id_user');
 		// 	var y = confirm('yakin hapus unit ini?');
 			// if(y ==  true){location='<?php //echo base_url("index.php/control/delete_unit"); ?>'+id_user;}else{}
 		// });

 	});
 </script>
 