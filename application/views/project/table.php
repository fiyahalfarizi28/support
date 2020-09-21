<?php if($SESSION_USER_JABATAN==="HEAD IT" || $SESSION_USER_JABATAN==='SUPERVISOR IT' || $SESSION_USER_JABATAN==='DIREKSI') { ?>
    <div class="card mb-3" id="table">
        <div class="card-header">
            <button class="btn btn-success btn-sm" id="btn_create" data-toggle="modal" data-target="#modal-task-rfp">
                <i class="far fa-comments"></i> Tambah Task
            </button>
        </div>
        
        <div class="card-body">
            <div class="pesan"></div>
            <!-- table table-bordered table-hover -->
            <table class="colapse-table res3"  width="100%" cellspacing="0">
                <thead>
                <tr>
                    <th style="text-align: center">#</th>
                    <th>PROJECT</th>
                    <th>STATUS</th>
                    <th>PROGRESS</th>
                    <th>LAST UPDATE</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach($ProjectList as $r): ?>
                        
                        <?php 
                            $this->db->where('project_id', $r->id);
                            $specificTask = $this->db->get(TB_TASK)->result();

                            $this->db->where('project_id', $r->id);
                            $this->db->where('status', STT_DONE);
                            $this->db->order_by('last_update DESC');
                            $taskList_done = $this->db->get(TB_TASK)->result();

                            $progressValue = count($taskList_done)/count($specificTask) * 100;
                        ?>

                        <tr>
                            <td style="text-align: center"><i data-toggle="collapse" data-target=<?php echo "#".$r->id?> style=" color: #28a745; background-color: #f4fbff" class="fa fa-plus-circle" aria-hidden="true"></i></td>
                            <td><?php echo $r->project_name?></td>
                            <td>
                                <?php
                                    $progressStatus = null;
                                    if (count($taskList_done) == count($specificTask)) {
                                        $progressStatus = STT_DONE;    
                                    } else {
                                        $progressStatus = STT_ON_PROGRESS;
                                    }
                                    echo $progressStatus;
                                ?>
                            </td>
                            <td>
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="<?php echo $progressValue?>" aria-valuemin="0" aria-valuemax="100" style="width:<?php echo $progressValue?>%">
                                        <?php echo (round($progressValue))?>%
                                    </div>
                                </div>
                            </td>
                            <td><?php echo date("d-m-Y | H:i:s",strtotime( $r->last_update))?></td>
                        </tr>

                        <tr id=<?php echo $r->id?> class="collapse">                     
                            <td colspan="5">
                                <p>
                                    <table style="width: 100%">
                                        <thead>
                                            <tr>
                                                <th>TASK</th>
                                                <th>DETAIL</th>
                                                <th>TARGET DATE</th>
                                                <th>STATUS</th>
                                                <th>LAST UPDATE</th>
                                                <th>PIC</th>
                                                <th>KETERANGAN</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach($specificTask as $row): ?>
                                                <tr>
                                                    <td><?php echo $row->task_name?></td>
                                                    <td><?php echo $row->detail ?></td>
                                                    <td><?php echo date("d-m-Y",strtotime( $row->target_date))?></td>
                                                    <td><?php echo $row->status?></td>
                                                    <td><?php echo date("d-m-Y | H:i:s",strtotime( $row->last_update))?></td>
                                                    <td>
                                                        <?php 
                                                            $this->db->where('user_id', $row->assign_to);
                                                            echo $this->db->get(TB_USER)->row()->nama;
                                                        ?>
                                                    </td>
                                                    <td>
                                                        <?php 
                                                            if (date("d-m-Y",strtotime($row->last_update)) > date("d-m-Y",strtotime($row->target_date))) {
                                                                echo'Task telah melewati target date';
                                                            }
                                                        ?>
                                                    </td>
                                                </tr>
                                            <?php endforeach ?>
                                        </tbody>
                                    </table>
                                </p>
                            </td>
                        </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
        </div>
    </div>

    <div class="modal fade" id="modal-task-rfp">
        <div class="modal-dialog modal-lg" style="margin-left: 200px">
            <div class="modal-content" style="width:980px;"id="view-modal-task"></div>
        </div>
    </div>
<?php } else  { ?>
    <div class="card-body">
        <div class="pesan"></div>

        <table class="colapse-table res3" id="tb_detail_project" width="100%" cellspacing="0">
            <thead>
            <tr>
                <th>PROJECT</th>
                <th>TASK</th>
                <th>DETAIL</th>
                <th>TARGET DATE</th>
                <th>STATUS</th>
                <th>OPTION</th>
            </tr>
            </thead>
            <tbody>
            <?php foreach($project_activity as $r): ?>
                 <tr>
                        <td>
                            <?php 
                                foreach($ProjectList as $row):
                                    if ($r->project_id == $row->id) {
                                        $tableDataProjectName = $row->project_name;
                                        break;
                                    }
                                endforeach;
                                echo $tableDataProjectName;
                            ?>
                        </td>
                        <td>
                            <?php
                                echo $r->task_name;
                            ?>
                        </td>
                        <td>
                            <?php
                                echo $r->detail;
                            ?>
                        </td>
                        <td><?php echo date("d-m-Y",strtotime( $r->target_date))?></td>
                        <td>
                            <?php
                                echo $r->status;
                            ?>
                        </td>
                        <td>
                            <button class="btn btn-success btn-sm" id="btn_create" data-toggle="modal" data-target="#modal-create-task">
                                <i class="far fa-comments"></i> Activity
                            </button>
                        </td>
                    </tr>
                <?php endforeach ?>
            </tbody>
        </table>
        
    </div>
    <div class="modal fade" id="modal-create-task" role="dialog">
		<div class="modal-dialog modal-lg">
			<!-- Modal content-->
			<div class="modal-content">
				<div class="modal-header">
					<h3 class="modal-title">New Activity</h3>
						<button type="button" class="close" data-dismiss="modal">&times;</button>
				</div>

				<div class="modal-body">
                    <form method="post" enctype="multipart/form-data" id="frm-create-task">
                        <label for="Project">Project :</label></br>
                        <label for="TaskName">Task :</label></br>
                        <label for="DetailProject">Detail :</label></br>
                        <textarea class="form-control" id="DetailProject" rows="3" style="resize: none"></textarea></br>
                        <label for="TargetDate">Target Date : <span id="targetDateProject">-</span></label></br>
                        
                        <!-- <script> HARUSNYA NANTI ADA ATTACHMENT DISINI</script> -->
                        <div id="attachmentElementProject" style="margin-top: 8px">
                            
                        </div>

                        <div class="form-group">
							<label for="status">Status</label>
							<select class="form-control" id="status" name="status">
								<option disabled selected="selected">- Pilih Status -</option>
								<option value="ON PROGRESS">ON PROGRESS</option>
								<option value="DONE">DONE</option>
							</select>
                        </div>
                        
                        <div class="form-group">
							<label for="keterangan">Keterangan:</label>
							<input type="textarea" class="form-control" id="keterangan" style="resize: none" placeholder="Keterangan... " name="keterangan"></input>
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
	</div>
    <script>
		document.addEventListener("DOMContentLoaded", function (event) {
            $('#tb_detail_project').DataTable({
                "bSort" : false
            });
        });
    </script>
<?php } ?>

