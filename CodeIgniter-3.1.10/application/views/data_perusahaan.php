 <?php include 'template/header.php'; ?>
<div class="table-responsive">
 	<table class="table table-condensed table-hovered table-stiped table-bordered dt-responsive display nowrap" 
 	id="tbl_user" >
 	
 		<thead>
 			<tr>
 				<th>#</th>
 				<th>nama <br><input type="text" class="form-control input-sm" placeholder="SEARCH"  style="width: 110px;"></th>
 				<th>alamat<br><input type="text" class="form-control input-sm" placeholder="SEARCH"   style="width: 110px;"></th>
 				<th>jenis_lowongan <br><input type="text" class="form-control input-sm" placeholder="SEARCH"  style="width: 110px;" ></th>
 				<th>no_hp<br><input type="text" class="form-control input-sm" placeholder="SEARCH"  style="width: 110px;"></th>
 				<th>email<br><input type="text" class="form-control input-sm" placeholder="SEARCH"  style="width: 110px;" ></th>
 				<th>id_user<br><input type="text" class="form-control input-sm" placeholder="SEARCH"  style="width: 110px;"></th>
 				<th>aksi <br></th>

 			</tr>
 		</thead>

 		<tbody id="show_data">
 			
 		</tbody>	
 	</table> 
 	</div>

     <?php 
 	foreach ($data_perusahaan as $data ) {
 	 	 ?>
 	 	 <div class="modal fade" id="edit<?php echo $data->id_perusahaan; ?>">
 	 	 	<div class="modal-dialog">
 	 	 		<div class="modal-content">
 	 	 			<div class="modal-header">
 	 	 				<h3>EDIT DATA</h3>
 	 	 			</div>
 	 	 			<div class="modal-body">
 	 	 				<form method="POST" action="<?php echo base_url('index.php/kontrol_perusahaan/edit/'.$data->id_perusahaan); ?>">
 	 	 					<input class="id_edit" name="id_perusahaan" type="hidden">
 	 	 					<div class="form-group">
 	 	 						<div class="input-group input-group-alternative mb-3">
 	 	 							<div class="input-group-prepend">
 	 	 								<span class="input-group-text"><i class="ni ni-single-02"></i></span>
 	 	 							</div>
 	 	 							<input  class="form-control"  name="nama" type="text" placeholder="nama" value="<?=$data->nama?>">
 	 	 						</div>
 	 	 					</div>
 	 	 						
 	 	 						<div class="form-group">
 	 	 						<div class="input-group input-group-alternative mb-3">
 	 	 							<div class="input-group-prepend">
 	 	 								<span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
 	 	 							</div>
 	 	 							<input type="text" name="alamat" placeholder="alamat" class="form-control" value="<?=$data->alamat?>">
 	 	 						</div>
 	 	 					</div>

 	 	 						<div class="form-group">
 	 	 						<div class="input-group input-group-alternative mb-3">
 	 	 							<div class="input-group-prepend">
 	 	 								<span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
 	 	 							</div>
 	 	 							<input type="text" name="jenis_lowongan" placeholder="jenis_lowongan" class="form-control" value="<?=$data->jenis_lowongan?>">
 	 	 						</div>
 	 	 					</div>

 	 	 						<div class="form-group">
 	 	 						<div class="input-group input-group-alternative mb-3">
 	 	 							<div class="input-group-prepend">
 	 	 								<span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
 	 	 							</div>
 	 	 							<input type="text" name="no_hp" placeholder="no_hp" class="form-control" value="<?=$data->no_hp?>">
 	 	 						</div>
 	 	 					</div>

 	 	 						<div class="form-group">
 	 	 						<div class="input-group input-group-alternative mb-3">
 	 	 							<div class="input-group-prepend">
 	 	 								<span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
 	 	 							</div>
 	 	 							<input type="date" name="tgl_lahir" placeholder="tgl_lahir" class="form-control" value="<?=$data->tgl_lahir?>">
 	 	 						</div>
 	 	 					</div>

 	 	 						<div class="form-group">
 	 	 						<div class="input-group input-group-alternative mb-3">
 	 	 							<div class="input-group-prepend">
 	 	 								<span class="input-group-text"><i class="ni ni-email-83"></i></span>
 	 	 							</div>
 	 	 							<input  class="form-control id-email"  name="email" type="text" placeholder="email" value="<?=$data->email?>">
 	 	 						</div>
 	 	 					</div>
 	 	 					<div class="form-group">
 	 	 						<div class="input-group input-group-alternative mb-3">
 	 	 							<div class="input-group-prepend">
 	 	 								<span class="input-group-text"><i class="ni ni-single-02"></i></span>
 	 	 							</div>
 	 	 							<input  class="form-control id-user"  name="id_user" type="text" placeholder="id_user" value="<?=$data->id_user?>">
 	 	 						</div>
 	 	 					</div>
 	 	 						
 	 	 					<div class="modal-footer">
 	 	 						<button class="btn btn-secondary" data-dismiss="modal">Batal</button>
 	 	 						<button class="btn btn-success" type="submit">edit</button>
 	 	 					</div>
 	 	 				</form>
 	 	 			</div>
 	 	 		</div>
 	 	 	</div>
 	 	 </div>
 	 	 <div class="modal fade" id="hapus<?php echo $data->id_perusahaan; ?>">
 	 	 	<div class="modal-dialog">
 	 	 		<div class="modal-content">
 	 	 			<div class="modal-header">
 	 	 				<h3>HAPUS DATA</h3>
 	 	 			</div>
 	 	 			<div class="modal-body">
 	 	 			<form method="post" action="<?php echo base_url('index.php/kontrol_perusahaan/hapus/'.$data->id_perusahaan); ?>">
 	 	 				<div class="modal-body">
 	 	 					<input class="id_hapus" name="id_perusahaan" type="hidden">
 	 	 					<p>anda yakin akan menghapus data <b value="<?php echo $data->id_perusahaan; ?>">nama</b></p>
 	 	 				</div>
 	 	 				<div class="modal-footer">
 	 	 					<button class="btn btn-secondary" data-dismiss="modal">Batal</button>
 	 	 					<button class="btn btn-danger" type="submit">hapus</button>
 	 	 				</div>
 	 	 			</form>
 	 	 			</div>
 	 	 		</div>
 	 	 	</div>
 	 	 </div>
 	 	 <div class="modal fade" id="detail<?php echo $data->id_perusahaan; ?>">
 	 	 	<div class="modal-dialog">
 	 	 		<div class="modal-content">
 	 	 			<div class="modal-header">
 	 	 				<h3>Detail</h3>
 	 	 			</div>
 	 	 			<div class="modal-body">
 	 	 				<label>nama: <?=$data->nama;?></label><br>
 	 	 				<label>alamat: <?=$data->alamat;?></label><br>
 	 	 				<label>jenis_lowongan: <?=$data->jenis_lowongan;?></label><br>
 	 	 				<label>no_hp: <?=$data->no_hp;?></label><br>
 	 	 				<label>tgl_lahir: <?=$data->tgl_lahir;?></label><br>
 	 	 				<label>email: <?=$data->email;?></label><br>
 	 	 				<label>profil: <?=$data->profil;?></label><br>
 	 	 				<label>id_user: <?=$data->id_user;?></label><br>


 	 	 			</div>
 	 	 			<div class="modal-footer">
 	 	 				<button class="btn btn-secondary" data-dismiss="modal">Batal</button>
 	 	 				<button class="btn btn-success" data-dismiss="modal">kembali</button>
 	 	 			</div>
 	 	 		</div>
 	 	 	</div>
 	 	 </div>
           
           <?php } 
           include 'template/footer.php'; ?>


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
 		table = $('#tbl_user').DataTable({
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
 				"url" : "<?php echo site_url('index.php/control/ssp_perusahaan'); ?>",
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
 