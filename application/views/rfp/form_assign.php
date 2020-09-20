<div class="modal-header">
    <h4 class="modal-title">TAMBAH TASK BARU</h4>
    <button type="button" class="close" data-dismiss="modal">&times;</button>
</div>

<div class="modal-body">
    <form id="frm-create" method="post" enctype="multipart/form-data">
        <div class="pesan"></div>
        
            <div class="panel-body">
                <div class="form-group">
                    <label for="NoRfp">No. RFP : <span id="NoRfp">-</span></label></br>  
                    <label for="RequestBy">Request By : <span id="requestBy">-</span></label></br>
                    <label for="project_name">Project : <span id="project_name">-</span></label></br>
                    <label for="Detail">Detail :</label>
                    <textarea class="form-control" id="Detail" rows="3" style="resize: none" disabled></textarea>
                </div>
            </div>

            <div class="panel-body">
                <div class="form-group" id="formTask">
                    <button type="button" class="btn btn-info" id="tambahTask" onclick="addTask()">Tambah Task</button>
                    <div id="task" style="margin: 8px 15px !important;">
                    </div>
                </div>
            </div>
            
            <div class="col-md-12 text-right">
                <div class="btn_post_request">
                    <a href="javascript:void(0)" onclick="post_assign_rfp()" class="btn btn-success"><i class="fa fa-check"></i> Assign</a>
                </div>
            </div>

    </form>
</div>

<script>
    var activities = document.getElementById("projectFlag");
    activities.addEventListener("change", function() {
        var optionSelected = $("option:selected", this).text();
        
        if  (optionSelected == "Berdasarkan No. RFP") {
            $("#collapseTanpaRFP").collapse('hide');
            $("#collapseAssignTask").collapse('hide');
            $('#project_id').prop('disabled', 'disabled');
            $("#collapseProjectBaru").collapse('hide');
            $('#new_project').prop('disabled', 'disabled');
            
            $("#collapseRFP").collapse('show');
            $('#rfp_id').prop('disabled', false);

            var activitiesBerdasarkanRfp = document.getElementById("rfp_id");
            activitiesBerdasarkanRfp.addEventListener("change", function() {

                $("#collapseAssignTask").collapse('show');

                $("#requestBy").text("-");
                $("#project_name").text("-");
                $("#Detail").text("-");
                
                var arrayRfp = <?php echo json_encode($rfpList->result()) ?>;
                var arrayUser = <?php echo json_encode($userList->result()) ?>;
                var arrayProject = <?php echo json_encode($projectList->result()) ?>;
                
                var rfpSelected = $("option:selected", this).val();
                var rfpDetail;
                var requestor;
                var projectRelatedtoRfp;

                arrayRfp.forEach( (rfp) => {
                    if (rfp.id == rfpSelected) {
                        rfpDetail = rfp;
                    }
                });

                arrayUser.forEach( (user) => {
                    if (rfpDetail.request_by == user.user_id) {
                        requestor = user;
                    }
                });

                arrayProject.forEach( (project) => {
                    if (rfpDetail.project_id == project.id) {
                        projectRelatedtoRfp = project;
                    }
                })

                $("#requestBy").text(requestor.nama);
                $("#project_name").text(projectRelatedtoRfp.project_name);
                $("#Detail").text(rfpDetail.rfp_detail);

                $("#collapseDetailRFP").collapse('show');

            });


        } else if (optionSelected == "Tidak Berdasarkan No. RFP") {
            $("#collapseRFP").collapse('hide');
            $("#collapseDetailRFP").collapse('hide');
            $("#collapseAssignTask").collapse('hide');
            $('#rfp_id').prop('disabled', 'disabled');
            $("#collapseProjectBaru").collapse('hide');
            $('#new_project').prop('disabled', 'disabled');

            $("#collapseTanpaRFP").collapse('show');
            $('#project_id').prop('disabled', false);
            $("#collapseAssignTask").collapse('show');

        } else {
            $("#collapseRFP").collapse('hide');
            $("#collapseDetailRFP").collapse('hide');
            $('#rfp_id').prop('disabled', 'disabled');
            $("#collapseTanpaRFP").collapse('hide');
            $('#project_id').prop('disabled', 'disabled');

            $("#collapseProjectBaru").collapse('show');
            $('#new_project').prop('disabled', false);
            $("#collapseAssignTask").collapse('show');
            
        }

    });

    var idField = 0;
    function addTask() {
        idField++;
        
        $.ajax({
            type : 'post',
            url : 'rfp_controller/add_field_task',
            data :  {
                idfield: idField
            },
            cache: false,
            success : function(res) {
                $("#task").append(res);
            }
        });

    }
</script>