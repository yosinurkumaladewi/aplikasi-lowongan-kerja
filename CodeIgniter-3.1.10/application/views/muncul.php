
<?php 
include 'template/header.php';
 ?>
 	<section class="container">
 		<div class="row">
	 		<div class="box">
	 			<div class="table-responsive">   					
				 	<table class="table table-condensed table-hovered table-stiped table-bordered" 
				 	id="tbl_user" >
				 		<thead>
				 			<tr>
				 				<th>#</th>
				 				<th>username <br><input type="text" class="form-control input-sm" placeholder="SEARCH" ></th>
				 				<th>level<br><input type="text" class="form-control input-sm" placeholder="SEARCH" ></th>
				 				<th>password <br><input type="text" class="form-control input-sm" placeholder="SEARCH" ></th>
				 				<th>email <br><input type="text" class="form-control input-sm" placeholder="SEARCH" ></th>
				 				<th>aksi <br></th>
				 			</tr>
				 		</thead>
				 		<tbody id="show_data">
				 			
				 		</tbody>
				 	</table>
			 	</div>
	 		</div>
	 	</div>
 	</section>
 	<?php 
 	foreach ($user as $data ) {
 	 	 ?>
 	 	 <div class="modal fade" id="edit<?php echo $data->id_user; ?>">
 	 	 	<div class="modal-dialog">
 	 	 		<div class="modal-content">
 	 	 			<div class="modal-header">
 	 	 				<h3>EDIT DATA</h3>
 	 	 			</div>
 	 	 			<div class="modal-body">
 	 	 				<form method="POST" action="<?php echo base_url('index.php/kontrol/edit/'.$data->id_user); ?>">
 	 	 					<input class="id_edit" name="id_user" type="hidden">
 	 	 					<div class="form-group">
 	 	 						<div class="input-group input-group-alternative mb-3">
 	 	 							<div class="input-group-prepend">
 	 	 								<span class="input-group-text"><i class="ni ni-single-02"></i></span>
 	 	 							</div>
 	 	 							<input  class="form-control id-username"  name="username" type="text" placeholder="username" value="<?=$data->username?>">
 	 	 						</div>
 	 	 					</div>
 	 	 						<div class="form-group">
 	 	 						<div class="input-group input-group-alternative mb-3">
 	 	 							<div class="input-group-prepend">
 	 	 								<span class="input-group-text"><i class="ni ni-cart"></i></span>
 	 	 							</div>
 	 	 							<select name="level" class="form-control id_level" value="<?=$data->level?>">
 	 	 								<option value="">--level--</option>
 	 	 								<option value="2">perusahan</option>
 	 	 								<option value="3">pelamar</option>
 	 	 							</select>
 	 	 						</div>
 	 	 					</div>
 	 	 						<div class="form-group">
 	 	 						<div class="input-group input-group-alternative mb-3">
 	 	 							<div class="input-group-prepend">
 	 	 								<span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
 	 	 							</div>
 	 	 							<input type="password" name="password" placeholder="password" class="form-control" value="<?=$data->password?>">
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
 	 	 					<div class="modal-footer">
 	 	 						<button class="btn btn-secondary" data-dismiss="modal">Batal</button>
 	 	 						<button class="btn btn-success" type="submit">edit</button>
 	 	 					</div>
 	 	 				</form>
 	 	 			</div>
 	 	 		</div>
 	 	 	</div>
 	 	 </div>
 	 	 <div class="modal fade" id="hapus<?php echo $data->id_user; ?>">
 	 	 	<div class="modal-dialog">
 	 	 		<div class="modal-content">
 	 	 			<div class="modal-header">
 	 	 				<h3>HAPUS DATA</h3>
 	 	 			</div>
 	 	 			<div class="modal-body">
 	 	 			<form method="post" action="<?php echo base_url('index.php/kontrol/hapus/'.$data->id_user); ?>">
 	 	 				<div class="modal-body">
 	 	 					<input class="id_hapus" name="id_user" type="hidden">
 	 	 					<p>anda yakin akan menghapus data <b value="<?php echo $data->username; ?>">username</b></p>
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
 	 	 <div class="modal fade" id="detail<?php echo $data->id_user; ?>">
 	 	 	<div class="modal-dialog">
 	 	 		<div class="modal-content">
 	 	 			<div class="modal-header">
 	 	 				<h3>Detail</h3>
 	 	 			</div>
 	 	 			<div class="modal-body">
 	 	 				<label>username: <?=$data->username;?></label><br>
 	 	 				<label>level: <?=$data->level;?></label><br>
 	 	 				<label>password: <?=$data->password;?></label><br>
 	 	 				<label>email: <?=$data->email;?></label><br>
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
 <script type="text/javascript">
 	var save_method;
 	var table;

 	$(document).ready(function(){
 		 $.fn.dataTableExt.oApi.fnPagingInfo = function(oSettings){
 		 	return{
 		 		"iStart"			:oSettings._iDisplayStart,
 		 		"iEnd"			    :oSettings.fnDisplayEnd(),
 		 		"iLength"			:oSettings._iDisplayLength,
 		 		"iTotal"			:oSettings.fnRecordsTotal(),
 		 		"iFilteredTotal"	:oSettings.fnRecordsDisplay(),
 		 		"iPage"				:Math.ceil(oSettings._iDisplayStart/oSettings._iDisplayLength),
 		 		"iTotalPages"		:Math.ceil(oSettings.fnRecordsDisplay()/oSettings._iDisplayLength)
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
 				"url" : "<?php echo site_url('index.php/control/ssp_unit'); ?>",
 				"type" : "POST"
 			},
 			"order" : [[1,'asc']],
 			"columnDefs" : [{
 				"targets":[ -1 ],
 				"orderable" : false
 			}]
 			// "rowCallback" :  function(row,data,iDisplayIndex){
 			//  	var info = this.fnPagingInfo();
 			//  	var page = info.iPage;
 			//  	var length = info.iLenght;
 			//  	var index = page * length + (iDisplayIndex + 1);
 			//  	$('td:eq(0)' , row).html(index);
 			//  }
 		});

 		table.columns().every(function(){
 		 	var table = this;
 		 	$('input' , this.header()).on('keyup change',function(){
 		 		if (table.search() !== this.value){
 		 			table.search(this.value).draw();
 		 		}
 		 	});
 		});

 		 // $('#tbl_user').on('click', '.edit_record',function(){
 		 // 	var id_user = $(this).data('id_user');
 		 // location = '<?php //echo base_url("index.php/kontrol/data"); ?>'+id_user;
 		 // });
 		 // $('#tbl_user').on('click', '.edit_record',function(){
 		 // 	var id_user = $(this).data('id_user');
 		 // location = '<?php //echo base_url("index.php/kontrol/edit"); ?>'+id_user;
 		 // });
 		 // $('#tbl_user').on('click','.delete_recird',function(){
 		 // 	var id_user = $(this).data('id_user');
 		 // 	var y = confirm('yakin hapus unit ini?');
 		 // if(y ==  true){location='<?php //echo base_url("index.php/kontrol/hapus"); ?>'+id_user;}else{}
 		 // });

 	});
 </script>