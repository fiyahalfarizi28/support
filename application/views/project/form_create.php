<div class="modal-header">
    <h4 class="modal-title">TULIS TASK RFP BARU</h4>
    <button type="button" class="close" data-dismiss="modal">&times;</button>
</div>

<div class="modal-body">
    <form id="frm-create" method="post" enctype="multipart/form-data">
        <div class="pesan"></div>
            

    </form>
</div>

<script>
    //-----create new task post request-------
    function post_assign_task() {
        var form = $('#frm-create')[0];
        var data = new FormData(form);
        $.ajax({
            type: "post",
            url: "project_controller/set_assign_request",
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
                if(isValid == 0) {
                    $('.btn_post_request').html('<a href="javascript:void(0)" onclick="post_request()" class="btn btn-success"><i class="fa fa-check"></i> Assign</a>');
                    $('.pesan').html(isPesan);
                }else {
                    $('.pesan').html(isPesan);
                    $('#modal-task-rfp').modal('hide');
                    reload_table();
                }
            }
        });
    }
</script>