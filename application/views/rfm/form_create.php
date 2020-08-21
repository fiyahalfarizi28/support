<div class="modal-header">
    <h4 class="modal-title">TULIS RFM BARU</h4>
    <button type="button" class="close" data-dismiss="modal">&times;</button>
</div>

<div class="modal-body">
    <form id="frm-create" method="post" enctype="multipart/form-data">
        <div class="pesan"></div>
        <div class="row">       
            <div class="col-md-12">
                <label>REQUEST TYPE :</label>
                <select name="request_type" id="request_type" class="form-control">
                    <option disabled value="" selected="selected">- REQUEST TYPE -</option>
                    <?php foreach($request_type->result() as $r): ?>
                        <option value="<?php echo $r->id ?>"><?php echo $r->request_type ?></option>
                    <?php endforeach ?>
                </select>
            </div>
        </div>

        <div class="panel-group" id="accordion" style="margin-top: 8px">
            <div class="panel panel-default">
                <div id="collapseMaintenance" class="panel-collapse collapse">
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="project_id">APPLICATION :</label>
                                    <select id="project_id" class="form-control" name="project_id" style="margin-bottom: 15px">
                                        <option disabled value="" selected="selected">- SELECT APPLICATION -</option>
                                        <?php foreach($projectList->result() as $r): ?>
                                            <option value="<?php echo $r->id ?>"><?php echo $r->project_name ?></option>
                                        <?php endforeach ?>
                                            
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>PROBLEM TYPE :</label>
                                    <select name="problem_type1" id="problem_type1" class="form-control" required></select>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div id="collapseProject" class="panel-collapse collapse">
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>PROBLEM TYPE :</label>
                                    <select name="problem_type2" id="problem_type2" class="form-control" required></select>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div id="collapseApplicationForProject" class="panel-collapse collapse">
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="project_id2">APPLICATION :</label>
                                    <select size ="3" id="project_id2" class="form-control" name="project_id2" style="margin-bottom: 15px">
                                        <?php foreach($projectList->result() as $r): ?>
                                            <option value="<?php echo $r->id ?>"><?php echo $r->project_name ?></option>
                                        <?php endforeach ?>   
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <div class="form-group">
            <label>SUBJECT :<?php $cc ?></label>
            <input type="text" name="subject" class="form-control" placeholder="Subject. . ." required>
        </div>

        <div class="form-group">
            <textarea style="resize: none" name="detail" class="form-control" placeholder="Detail. . ." rows="5" required></textarea>
        </div>
        <div class="form-group text-primary">
            <i class="far fa-clock"></i> <?php echo date('d-m-Y') ?>
        </div>

        <div id="files"></div>

        <div class="row">
            <div class="col-md-6">
                Attachment: <a href="javascript:void(0)" class="btn btn-warning text-white" onclick="addFile();"><i class="fa fa-paperclip"></i></a>         
            </div>

            <div class="col-md-6 text-right">
                <input type="hidden" name="user_id" value="<?php echo $this->session->userdata('USER_ID') ?>" readonly>
                
                <input type="hidden" name="kode_cabang" value="<?php echo $this->session->userdata('USER_KODE_CABANG') ?>" readonly>
                
                <input type="hidden" name="head_id" value="<?php echo $this->session->userdata('USER_INDUK') ?>" readonly>

                <!-- btn_kirim -->
                <div class="btn_post_request">
                    <a href="javascript:void(0)" onclick="post_request()" class="btn btn-success"><i class="fa fa-check"></i> Kirim</a>
                </div>
            </div>
        </div>

    </form>
</div>

<script>

    var activities = document.getElementById("request_type");
    activities.addEventListener("change", function() {

        var arrayProblem = <?php echo json_encode($problem_type->result()) ?>;

        var optionSelected = $("option:selected", this).text();
        console.log(optionSelected);

        $('#problem_type1').empty();
        $('#problem_type2').empty();

        if (optionSelected != "REQUEST TYPE") {

            $('#problem_type1').append('<option disabled selected="selected" value="">- SELECT PROBLEM TYPE -</option>')
            $('#problem_type2').append('<option disabled selected="selected" value="">- SELECT PROBLEM TYPE -</option>')

            if (optionSelected == "REQUEST FOR MAINTENANCE") {
                arrayProblem.forEach( (problemType) => {
                    if (problemType.id <= 7) {
                        $('#problem_type1').append(`<option value="${problemType.id}">${problemType.problem_type}</option>`);
                    }
                })

                $('#collapseMaintenance').collapse('show');
                $('#collapseApplicationForProject').collapse('hide');
                $('#collapseProject').collapse('hide');

            } else if (optionSelected == "REQUEST FOR PROJECT") {
                 arrayProblem.forEach( (problemType) => {
                    if (problemType.id > 7) {
                        $('#problem_type2').append(`<option value="${problemType.id}">${problemType.problem_type}</option>`);
                    }
                })
                
                $('#collapseMaintenance').collapse('hide');
                $('#collapseProject').collapse('show');

                $('#problem_type2').on('change', function() {
                    if ($('#problem_type2 :selected').val() == <?php echo KODE_PERUBAHAN_APLIKASI?>) {
                        $('#collapseApplicationForProject').collapse('show');
                    } else {
                        $('#collapseApplicationForProject').collapse('hide');
                    }
                });
            }
        } else {
            $('#collapseMaintenance').collapse('hide');
            $('#collapseProject').collapse('hide');
        }

    });
</script>   