<div class="card mb-3" id="table">
	<?php if($SESSION_USER_JABATAN==="HEAD IT" || $SESSION_USER_JABATAN==='SUPERVISOR IT' || $SESSION_USER_JABATAN==='DIREKSI') { ?>
	
		<div class="card-body">
			<div class="pesan"></div>
				<form class="mb-2" action="" method="post">
					<label>
						Cari berdasarkan bulan dan tahun
						<!-- <span class="text-danger"><i>(belum ada aksi pencariannya)</i></span> -->
					</label>
					<div class="row">
						<div class="col-md-2">
							<select name="m" class="form-control">
								<?php
								$m = $this->input->post('m');
								$y = $this->input->post('Y');

								if(empty($m && $y)) {
									$m = date('m');
									$y = date('Y');
								}
									if($m=='01'):
										$mm = 'Januari';
									elseif($m=='02'):
										$mm = 'Februari';
									elseif($m=='03'):
										$mm = 'Maret';
									elseif($m=='04'):
										$mm = 'April';
									elseif($m=='05'):
										$mm = 'Mei';
									elseif($m=='06'):
										$mm = 'Juni';
									elseif($m=='07'):
										$mm = 'Juli';
									elseif($m=='08'):
										$mm = 'Agustus';
									elseif($m=='09'):
										$mm = 'September';
									elseif($m=='10'):
										$mm = 'Oktober';
									elseif($m=='11'):
										$mm = 'November';
									elseif($m=='12'):
										$mm = 'Desember';
									endif;

									if($m):
										echo "<option value='$m'>$mm</option>";
									endif;
								?>
								<option value="01">Januari</option>
								<option value="02">Februari</option>
								<option value="03">Maret</option>
								<option value="04">April</option>
								<option value="05">Mei</option>
								<option value="06">Juni</option>
								<option value="07">Juli</option>
								<option value="08">Agustus</option>
								<option value="09">September</option>
								<option value="10">Oktober</option>
								<option value="11">November</option>
								<option value="12">Desember</option>
							</select>
						</div>
						<div class="col-md-2">
							<select name="y" class="form-control">
								<?php
									if($y):
										echo "<option value='$y'>$y</option>";
									endif;
								?>
							</select>
						</div>
						<div class="col-md-1">
							<input type="submit" name="" value="Cari" class="btn btn-block btn-outline-secondary">
						</div>
					</div>
				</form>

				<table class="colapse-table res3" width="100%" cellspacing="0">
					<thead>
						<tr>
							<th style="text-align: center">#</th>
							<th>HARI</th>
							<th>TANGGAL</th>
							<th>WAKTU</th>
							<th>PROJECT</th>
							<th>TASK</th>
							<th>RFM</th>
							<th>STATUS</th>
							<th>KETERANGAN</th>
							<th>PIC</th>
						</tr>
					</thead>

					<tbody>
						<?php 
							$ITList = $this->db->get(TB_USER)->result();
							// $projectList = $this->db->get(TB_PROJECT)->result();
							// $taskList = $this->db->get(TB_TASK)->result();
							$rfmList = $this->db->get(TB_DETAIL)->result();
							$thisMonth = date("Y-m");
						?>

                		<?php foreach($ITList as $r): ?>
                    
							<?php 
								$this->db->where('user_id', $r->user_id);
								$this->db->where('tanggal >', $thisMonth);
								$this->db->order_by('last_update DESC');
								$specificDailyActivity = $this->db->get(TB_DAILY_ACTIVITY)->result();
							?>
                    
							<?php if (count($specificDailyActivity) > 0) { ?>
								<?php foreach($specificDailyActivity as $row): ?>
									<?php if (array_search($row, $specificDailyActivity) == 0) {?>
										<tr>
											<td style="text-align: center"><i data-toggle="collapse" data-target=<?php echo "#".$r->user_id?> style=" color: #28a745; background-color: #f4fbff" class="fa fa-plus-circle" aria-hidden="true"></i></td>
											<td>
												<?php
													$hari = date('l',strtotime($row->tanggal));
													switch($hari){
														case 'Sunday':
															$hari = "Minggu";
														break;
												
														case 'Monday':			
															$hari = "Senin";
														break;
												
														case 'Tuesday':
															$hari = "Selasa";
														break;
												
														case 'Wednesday':
															$hari = "Rabu";
														break;
												
														case 'Thursday':
															$hari = "Kamis";
														break;
												
														case 'Friday':
															$hari = "Jumat";
														break;
												
														case 'Saturday':
															$hari = "Sabtu";
														break;
														
														default:
															$hari= "Tidak di ketahui";		
														break;
													}
													echo $hari;
												?>
											</td>
											<td><?php echo date("d-m-Y",strtotime( $row->tanggal)) ?></td>
											<td><?php echo date("H:i",strtotime( $row->last_update)) ?></td>
											<td>
												<?php 
													
													$tableDataProjectName = null;
													if (!empty($row->project_id))
													{
														foreach($projectList as $rowProject):
															if ($row->project_id == $rowProject->id) {
																$tableDataProjectName = $rowProject->project_name;
																break;
															}
														endforeach;
													}
													else {
														$tableDataProjectName = "-";
													}
													echo $tableDataProjectName;
												?>
											</td>
											<td>
												<?php $tableTaskName = null;
													if (!empty($row->task_id))
													{
														foreach($taskList as $rowTask):
															if ($row->task_id == $rowTask->id) {
																$tableTaskName = $rowTask->task_name;
																break;
															}
														endforeach;
													}
													else {
														$tableTaskName = "-";
													}
													echo $tableTaskName;
												?>
											</td>            
											<td>
												<?php $tableDataNoRFM = null;
													if (!empty($row->rfm_id))
													{
														foreach($rfmList as $rowRfm):
															if ($row->rfm_id == $rowRfm->id) {
																$tableDataNoRFM = $rowRfm->no_rfm;
																break;
															}
														endforeach;
													}
													else {
														$tableDataNoRFM = "-";
													}
													echo $tableDataNoRFM;
												?>
											</td>
											<td><?php echo $row->status ?></td>
											<td><?php echo $row->keterangan ?></td>
											<td><?php echo $r->nama ?></td>
										</tr>
									<?php } ?>
								<?php endforeach ?>

								<tr id=<?php echo $r->user_id?> class="collapse">
									<td colspan="10">
										<p>
											<table class="tb_detail_dr" style="width: 100%">
												<thead>
													<tr>
														<th>HARI</th>
														<th>TANGGAL</th>
														<th>WAKTU</th>
														<th>PROJECT</th>
														<th>TASK</th>
														<th>RFM</th>
														<th>STATUS</th>
														<th>KETERANGAN</th>
													</tr>
												</thead>
													<?php foreach($specificDailyActivity as $row): ?>
														<?php if (array_search($row, $specificDailyActivity) !== 0) {?>
															
															<tr>
																<td>
																	<?php
																		$hari = date('l',strtotime($row->tanggal));
																		switch($hari){
																			case 'Sunday':
																				$hari = "Minggu";
																			break;
																	
																			case 'Monday':			
																				$hari = "Senin";
																			break;
																	
																			case 'Tuesday':
																				$hari = "Selasa";
																			break;
																	
																			case 'Wednesday':
																				$hari = "Rabu";
																			break;
																	
																			case 'Thursday':
																				$hari = "Kamis";
																			break;
																	
																			case 'Friday':
																				$hari = "Jumat";
																			break;
																	
																			case 'Saturday':
																				$hari = "Sabtu";
																			break;
																			
																			default:
																				$hari= "Tidak di ketahui";		
																			break;
																		}
																		echo $hari;
																	?>
																</td>
																<td><?php echo date("d-m-Y",strtotime( $row->tanggal)) ?></td>
																<td><?php echo date("H:i",strtotime( $row->last_update)) ?></td>
																<td>
																	<?php 
																		$projectList = $this->db->get(TB_PROJECT)->result();
																		$tableDataProjectName = null;
																		if (!empty($row->project_id))
																		{
																			foreach($projectList as $rowProject):
																				if ($row->project_id == $rowProject->id) {
																					$tableDataProjectName = $rowProject->project_name;
																					break;
																				}
																			endforeach;
																		}
																		else {
																			$tableDataProjectName = "-";
																		}
																		echo $tableDataProjectName;
																	?>
																</td>
																<td>
																	<?php 
																		$task_list = $this->db->get(TB_TASK)->result();
																		$tableTaskName = null;
																		if (!empty($row->task_id))
																		{
																			
																			foreach($task_list as $rowTask):
																				if ($row->task_id == $rowTask->id) {
																					$tableTaskName = $rowTask->task_name;
																					break;
																				}
																			endforeach;
																		}
																		else {
																			$tableTaskName = "-";
																		}
																		echo $tableTaskName;
																	?>
																</td>
																
																<td>
																	<?php $tableDataNoRFM = null;
																		if (!empty($row->rfm_id))
																		{   
																			foreach($rfmList as $rowRfm):
																				if ($row->rfm_id == $rowRfm->id) {
																					$tableDataNoRFM = $rowRfm->no_rfm;
																					break;
																				}
																			endforeach;
																		}
																		else {
																			$tableDataNoRFM = "-";
																		}
																		echo $tableDataNoRFM;
																	?>
																</td>
																<td><?php echo $row->status ?></td>
																<td><?php echo $row->keterangan ?></td>
															</tr>
														<?php } ?>
													<?php endforeach ?>
											</table>
										</p>
									</td>
								</tr>
							<?php } ?>
                		<?php endforeach ?>
            		</tbody>		
				</table>
			</div>
		</div>
    
	<?php } else { ?>
		<div class="card-header">
			<button class="btn btn-success btn-sm" id="btn_create" data-toggle="modal" data-target="#modal-create-task">
				<i class="far fa-comments"></i> Tulis Task
			</button>
		</div>
	
		<div class="card-body">
			<div class="pesan"></div>

				<table class="colapse-table res3" id="tb_detail_dr" width="100%" cellspacing="0">
					<thead>
						<tr>
							<th>HARI</th>
							<th>TANGGAL</th>
							<th>WAKTU</th>
							<th>PROJECT</th>
							<th>TASK</th>
							<th>RFM</th>
							<th>STATUS</th>
							<th>KETERANGAN</th>
						</tr>
					</thead>

					<?php foreach($daily_activities->result() as $r): ?>
						<tr>
							<td>
							<?php
								$hari = date('l',strtotime($r->tanggal));
								switch($hari){
									case 'Sunday':
										$hari = "Minggu";
									break;
							
									case 'Monday':			
										$hari = "Senin";
									break;
							
									case 'Tuesday':
										$hari = "Selasa";
									break;
							
									case 'Wednesday':
										$hari = "Rabu";
									break;
							
									case 'Thursday':
										$hari = "Kamis";
									break;
							
									case 'Friday':
										$hari = "Jumat";
									break;
							
									case 'Saturday':
										$hari = "Sabtu";
									break;
									
									default:
										$hari= "Tidak di ketahui";		
									break;
								}
								echo $hari;
							?>
							</td>

							<td><?php echo date("d-m-Y",strtotime( $r->tanggal)) ?></td>

							<td>
								<?php echo date("H:i",strtotime( $r->last_update)) ?>
							</td>

							<td>
								<?php 
									$tableDataProjectName = null;
									if (!empty($r->project_id))
									{
										foreach($projectList->result() as $row):
											if ($r->project_id == $row->id) {
												$tableDataProjectName = $row->project_name;
												break;
											}
										endforeach;
									}
									else {
										$tableDataProjectName = "-";
									}
									echo $tableDataProjectName;
								?>
							</td>
							
							<td><?php $tableTaskName = null;
									if (!empty($r->task_id))
									{
										foreach($taskList->result() as $row):
											if ($r->task_id == $row->id) {
												$tableTaskName = $row->task_name;
												break;
											}
										endforeach;
									}
									else {
										$tableTaskName = "-";
									}
									echo $tableTaskName;
								?>
							</td>

							<td><?php $tableDataNoRFM = null;
									if (!empty($r->rfm_id))
									{
										foreach($rfmList->result() as $row):
											if ($r->rfm_id == $row->id) {
												$tableDataNoRFM = $row->no_rfm;
												// echo "<script>console.log('masuk sini, ". $tableDataNoRFM."')</script>";
												break;
											}
										endforeach;
									}
									else {
										$tableDataNoRFM = "-";
									}
									echo $tableDataNoRFM;
								?>
							</td>

							<td><?php echo $r->status ?></td>
							<td><?php echo $r->keterangan ?></td>
						</tr>
					<?php endforeach ?>
				</table>
			</div>
		</div>

	<div class="modal fade" id="modal-create-task" role="dialog">
		<div class="modal-dialog modal-lg">>
		
			<!-- Modal content-->
			<div class="modal-content">
				<div class="modal-header">
					<h3 class="modal-title">New Task</h3>
						<button type="button" class="close" data-dismiss="modal">&times;</button>
				</div>

				<div class="modal-body">
					<form method="post" enctype="multipart/form-data" id="frm-create-task">
						<div class="form-group text-primary">
							<i class="far fa-clock"></i> <?php echo date(' d-m-Y') ?>
						</div>

						<div class="form-group">
							<label for="projectFlag">Jenis task :</label>
							<select id="projectFlag" name="projectFlag" class="form-control">
								<option disabled selected="selected" value="">- Pilih Task -</option>
								<option>Project</option>
								<option >RFM</option>
								<option>Other</option>
							</select>
						</div>

						<div class="panel-group" id="accordion" style="margin-top: 8px">
							<div class="panel panel-default">
								
								<div id="collapseProject" class="panel-collapse collapse">
									<div class="panel-body">
										<label for="projectList">Daftar project :</label>
										<select  id="project_id" class="form-control" name="project_id" style="margin-bottom: 15px">
											<option disabled value="" selected="selected">- SELECT PROJECT -</option>
											<?php foreach($filteredProjectList as $r): ?>
												<option value=<?php echo $r->id ?> ><?php echo $r->project_name ?></option>
											<?php endforeach ?>
										</select>
									</div>

									<div class="panel-group" id="accordion" style="margin-top: 8px">
										<div class="panel panel-default">
											<div id="collapseTask" class="panel-collapse collapse">
												<div class="panel-body">
													<div class="form-group">
														<label for="task_id">Task :</label>
														<select id="task_id" class="form-control" name="task_id" style="margin-bottom: 15px">
															<?php foreach($taskList->result() as $r): ?>
																<?php if (($this->session->userdata('USER_ID') == $r->assign_to) && !($r->status == STT_DONE)) {?>
																	<option value=<?php echo $r->id ?> ><?php echo $r->task_name ?></option>
																<?php } ?>
															<?php endforeach ?>
															
														</select>
													</div>
												</div>
											</div>
										</div>
									</div>

								</div>

								<div id="collapseRFM" class="panel-collapse collapse">
								<div class="panel-body">
										<div class="form-group">
											<label for="rfm_id">No. RFM:</label>
											<select id="rfm_id" class="form-control" name="rfm_id" style="margin-bottom: 15px">
												<option disabled selected="selected" value="">- Pilih No. RFM -</option>
												<?php foreach($rfmList->result() as $r): ?>
													<?php if (($this->session->userdata('USER_ID') == $r->assign_to) && ($r->request_type == 2) && !($r->result_status == STT_DONE || $r->result_status == STT_SOLVED )) {?>
														<option value=<?php echo $r->id ?> ><?php echo $r->no_rfm ?></option>
													<?php } ?>
												<?php endforeach ?>
											</select>
										</div>
									</div>
								</div>
							</div>
						</div>
			
						<div class="form-group">
							<label for="Status">Status</label>
							<select type="text" class="form-control" id="status" name="status">
								<option disabled selected="selected">- Pilih Status -</option>
								<option value="ON PROGRESS">ON PROGRESS</option>
								<option value="DONE">DONE</option>
							</select>
						</div>

						<div class="form-group">
							<label for="keterangan">Keterangan:</label>
							<input type="textarea" class="form-control" id="keterangan" style="resize: none" name="keterangan"></input>
						</div>

						<div class="form-group">
							<label for="PIC">PIC : </label>
							<?php echo strtoupper($this->session->userdata('USER_FULLNAME')) ?>
						</div>
					</form>
					<div class="modal-footer">
						<div class="btn_post_request">
							<a href="javascript:void(0)" onclick="post_request_dr()" class="btn btn-success"><i class="fa fa-check"></i> Add</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	<?php } ?>
</div>

<script>
	console.log(<?php echo json_encode($taskList->result()) ?>);

    document.addEventListener("DOMContentLoaded", function (event) {

    	$('#tb_detail_dr').DataTable({
			"bSort" : false
		});

		$('.detail_dr').DataTable({
			"bSort" : false
		});

        $('#projectFlag').on('change', function (e) {
			// TODO: Get project list
            var optionSelected = $("option:selected", this);
            var valueSelected = this.value;

            if (valueSelected === "Project") {
                $('#collapseProject').collapse('show');
				$('#collapseRFM').collapse('hide');

				$('#rfm_id').prop('disabled', 'disabled');
				$('#project_id').prop('disabled', false);
				$('#task_id').prop('disabled', false);
            } else if (valueSelected === "RFM") {
                $('#collapseProject').collapse('hide');
				$('#collapseRFM').collapse('show');

				$('#rfm_id').prop('disabled', false);
				$('#project_id').prop('disabled', 'disabled');
				$('#task_id').prop('disabled', 'disabled');
            } else{
				$('#collapseProject').collapse('hide');
				$('#collapseRFM').collapse('hide');

				$('#rfm_id').prop('disabled', 'disabled');
				$('#project_id').prop('disabled', 'disabled');
				$('#task_id').prop('disabled', 'disabled');
			}
        });

		$('#project_id').on('change', function (e) {
			// TODO: Get specific project available task
            var optionSelected = $("option:selected", this);
            var valueSelected = this.value;
			$('#task_id').empty();

            if (valueSelected !== null) {
				var arrayTask = <?php echo json_encode($taskList->result()) ?>;
				$('#task_id').append('<option selected="selected" value="">-Pilih task-</option>')
				arrayTask.forEach( (task) => {
					if (task.project_id == valueSelected) {
						$('#task_id').append(`<option value="${task.id}">${task.task_name}</option>`);
					}
				})
				
                $('#collapseTask').collapse('show');
            } else {
                $('#collapseTask').collapse('hide');
            }
        });
    });

	function post_request_dr() {
		var form = $('#frm-create-task')[0];
		var data = new FormData(form);
		console.log(data);
		$.ajax({
			type: "post",
			url: "dailyreport_controller/post_request_dr",
			data: data,
			processData: false,
			contentType: false,
			cache: false,
			dataType: "json",
			beforeSend: function() {
				$('.btn_post_request').html('<a href="javascript:void(0)" class="btn btn-secondary"><i class="fas fa-spinner fa-pulse"></i> Proses</a>');
			},
			success: function (res) {
				var isValid = res.isValid,
					isPesan = res.isPesan;

				console.log(`${isValid}: ${isPesan}`);

				if(isValid == 0) {
					$('.btn_post_request').html('<a href="javascript:void(0)" onclick="post_request_dr()" class="btn btn-success"><i class="fa fa-check"></i> Kirim</a>');
					$('.pesan').html(isPesan);
				}else {
					$('.pesan').html(isPesan);
					setTimeout (()=> window.location.reload(), 2000);
				}
				$('#modal-create-task').modal('hide');
			}
		});
	}
	
</script>
