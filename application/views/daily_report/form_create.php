<div class="modal fade" id="modal-create-daily" role="dialog">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title">New Activity</h3>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <div class="modal-body">
                <form method="post" enctype="multipart/form-data" id="frm-create-task">
                    <div class="form-group text-primary">
                        <i class="far fa-clock"></i> <?php echo date(' d-m-Y | H:i') ?>
                    </div>

                    <div class="form-group">
                        <label for="projectFlag">Jenis task :</label>
                        <select id="projectFlag" name="projectFlag" class="form-control">
                            <option disabled selected="selected" value="">- Pilih Task -</option>
                            <option>RFM</option>
                            <option>Project</option>
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
                                            <option value=<?php echo $r->id ?>>
                                                <?php echo $r->project_name ?>
                                            </option>
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
                                                            <option value=<?php echo $r->id ?> ><?php echo $r->task_name ?></option>
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
                                                <?php if (($this->session->userdata('USER_ID') == $r->assign_to) && $r->request_status == STT_ASSIGNED && $r->result_status != STT_SOLVED ) {?>
                                                    <option id="no_rfm" value=<?php echo $r->id ?> >
                                                        <?php echo $r->no_rfm ?> - <?php echo $r->subject?>
                                                    </option>
                                                <?php } ?>
                                            <?php endforeach ?>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="form-group collapse" id="collapseRfmDetail">
                        <label for="RequestBy">Request By : <span id="requestBy">-</span></label></br>
                        <label for="DetailRfm">Detail :</label>
                        <textarea class="form-control" id="DetailRfm" rows="5" style="resize: none"></textarea></br>
                        <label for="TargetDate">Target Date : <span id="targetDate">-</span></label></br>
                        <label for="Revisi">Notes Revisi:</label>
                        <textarea rows="2" class="form-control" id="Revisi" style="resize: none" readonly></textarea>
                        
                        <div id="attachmentElementRFM" style="margin-top: 8px">
                            
                        </div>
                    </div>

                    <div class="form-group collapse" id="collapseProjectDetail">
                        <label for="DetailProject">Detail :</label>
                        <textarea class="form-control" id="DetailProject" rows="3" style="resize: none"></textarea></br>
                        <label for="TargetDate">Target Date : <span id="targetDateProject">-</span></label></br>
                        
                        <div id="attachmentElementProject" style="margin-top: 8px">
                            
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label for="status">Status</label>
                        <select class="form-control" id="status" name="status">
                            <option disabled selected="selected">- Pilih Status -</option>
                            <option value="ON PROGRESS">ON PROGRESS</option>
                            <option value="DONE">DONE</option>
                        </select>
                    </div>

                    <div class="panel-group" id="accordion" style="margin-top: 8px">
                        <div class="panel panel-default">
                            
                            <div id="collapseStatus" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <div class="form-group">
                                        <label>Tulis Notes :</label>
                                        <input type="textarea" name="notes" id="notes" placeholder="Notes..." style="resize: none" class="form-control"></input>
                                    </div>
                                    
                                    <div class="form-group">
                                        <label for ="penyelesaian">Cara penyelesaian :</label>
                                        <input type="textarea" name="penyelesaian"class="form-control" id="penyelesaian" style="resize: none" name="penyelesaian" placeholder="Cara penyelesaian case tersebut..."></input>
                                    </div>
                                </div>
                            </div>

                        </div>
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
        var userList = <?php echo json_encode($this->db->query("SELECT * FROM view_user;")->result()) ?>;

        $('#projectFlag').on('change', function (e) {
            var optionSelected = $("option:selected", this);
            var valueSelected = this.value;

            if (valueSelected === "Project") {
                $("#collapseRfmDetail").collapse('hide');
                $("#collapseProjectDetail").collapse('hide');
                $('#collapseProject').collapse('show');
                $('#collapseRFM').collapse('hide');
                
                $('#rfm_id').prop('disabled', 'disabled');
                $('#project_id').prop('disabled', false);
                $('#task_id').prop('disabled', false);
                $("#DetailRfm").prop('disabled', 'disabled');
                $("#DetailProject").prop('disabled', 'disabled');
            } else if (valueSelected === "RFM") {
                $('#collapseProject').collapse('hide');
                $('#collapseRFM').collapse('show');
                $("#collapseRfmDetail").collapse('hide');
                $("#collapseProjectDetail").collapse('hide');


                $('#rfm_id').prop('disabled', false);
                $('#project_id').prop('disabled', 'disabled');
                $('#task_id').prop('disabled', 'disabled');
                $("#DetailRfm").prop('disabled', 'disabled');
                $("#DetailProject").prop('disabled', 'disabled');
            } else {
                $('#collapseProject').collapse('hide');
                $('#collapseRFM').collapse('hide');
                $("#collapseRfmDetail").collapse('hide');
                $("#collapseProjectDetail").collapse('hide');

                $('#rfm_id').prop('disabled', 'disabled');
                $('#project_id').prop('disabled', 'disabled');
                $('#task_id').prop('disabled', 'disabled');
                $("#DetailProject").prop('disabled', 'disabled');
            }
        });

        $('#project_id').on('change', function (e) {
            var optionSelected = $("option:selected", this);
            var valueSelected = this.value;
            $('#task_id').empty();

            if (valueSelected !== null) {
                var arrayTask = <?php echo json_encode($DataTaskList->result()) ?>;
                $('#task_id').append('<option selected="selected" value="">-Pilih task-</option>')
                arrayTask.forEach( (task) => {
                    if (task.project_id == valueSelected) {
                        if (task.status !== '<?php echo STT_DONE?>' && task.assign_to == '<?php echo $this->session->userdata('USER_ID') ?>') {
                            $('#task_id').append(`<option value="${task.id}">${task.task_name}</option>`);
                        }
                    }
                })
                
                $('#collapseTask').collapse('show');
            } else {
                $('#collapseTask').collapse('hide');
                
                $('#project_id').prop('disabled', 'disabled');
                $('#task_id').prop('disabled', 'disabled');
                
            }
        });

        $('#task_id').on('change', function (e){
            $('#targetDateProject').text("-");
            $('#DetailProject').val("");
            $("#DetailProject").prop('disabled', 'disabled');
            $('#attachmentElementProject').empty();

            var optionSelected = $("option:selected", this);
            var valueSelected = this.value;	

            if (valueSelected !== null) {
                var arrayTask = <?php echo json_encode($DataTaskList->result()) ?>;
                var thisTask;

                arrayTask.forEach( (task) => {
                    if (task.id == valueSelected) {
                        thisTask = task;
                    }
                })
                
                var month = new Date(thisTask.target_date).getMonth();
                var date = new Date(thisTask.target_date).getDate();
                var year = new Date(thisTask.target_date).getFullYear();
                var targetDate = `${date}-${String(month).length == 1 ? "0"+String(month+1) : String(month+1)}-${year}`;
                
                $('#DetailProject').val(thisTask.detail);
                $('#targetDateProject').text(targetDate);

                $.ajax({
                    type : 'post',
                    url : 'rfm_controller/getattachment',
                    data :  {
                        'id_rfm': null,
                        'task_id': valueSelected
                    },
                    cache: false,
                    success : function(res) {
                        $('#attachmentElementProject').html(res);
                    }
                });

                $("#collapseProjectDetail").collapse('show');
                
            } else {
                $('#targetDateProject').val("");
                $('#DetailProject').val("");
                $("#DetailProject").prop('disabled', 'disabled');
                $("#collapseProjectDetail").collapse('hide');
                $('#attachmentElementProject').empty();
            }	

        });

        $('#rfm_id').on('change', function (e){
            
            $('#requestBy').val("");
            $('#targetDate').val("");
            $('#DetailRfm').val("");
            $('#Revisi').val("");
            $("#DetailRfm").prop('disabled', 'disabled');
            $('#attachmentElementRFM').empty();

            var optionSelected = $("option:selected", this);
            var valueSelected = this.value;	

            if (valueSelected !== null) {
                var rfmList = <?php echo json_encode($rfmList->result()) ?>;
                for (var i=0; i<rfmList.length; i++) {
                    if (rfmList[i].id == valueSelected) {
                        var requestBy = "";
                        var month = new Date(rfmList[i].target_date).getMonth();
                        var date = new Date(rfmList[i].target_date).getDate();
                        var year = new Date(rfmList[i].target_date).getFullYear();
                        var targetDate = `${date}-${String(month).length == 1 ? "0"+String(month+1) : String(month+1)}-${year}`;
                        for (var j=0; j<userList.length; j++) {
                            if (rfmList[i].request_by == userList[j].user_id) {
                                requestBy = userList[j].nama;
                            }
                        }

                        $('#DetailRfm').val(rfmList[i].rfm_detail);
                        $('#requestBy').text(requestBy);
                        $('#targetDate').text(targetDate);
                        $('#Revisi').val(rfmList[i].confirm_notes);
                    }
                }

                $.ajax({
                    type : 'post',
                    url : 'rfm_controller/getattachment',
                    data :  {
                        'id_rfm': valueSelected,
                        'task_id': null
                    },
                    cache: false,
                    success : function(res) {
                        $('#attachmentElementRFM').html(res);
                    }
                });

                $("#collapseRfmDetail").collapse('show');
                
            } else {
                $('#requestBy').val("");
                $('#targetDate').val("");
                $('#DetailRfm').val("");
                $('#Revisi').val("");
                $("#DetailRfm").prop('disabled', 'disabled');
                $("#collapseRfmDetail").collapse('hide');
                $('#attachmentElementRFM').empty();
            }	

        });

        $('#status').on('change', function (e) {
            var optionSelected = $("option:selected", this);
            var valueSelected = this.value;
            var flagSelected = $("#projectFlag option:selected").text();

            if (valueSelected === "DONE") {
                if (flagSelected === "RFM") {
                    $("#collapseStatus").collapse('show');
                    $('#penyelesaian').prop('disabled', false);
                } else {
                    $("#collapseStatus").collapse('hide');
                    $('#penyelesaian').prop('disabled', 'disabled');
                }
            } else {
                $("#collapseStatus").collapse('hide');
                $('#penyelesaian').prop('disabled', 'disabled');
            }
        });
        
    });
</script>