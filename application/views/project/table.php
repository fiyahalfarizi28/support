<div class="card mb-3" id="table">
    <div class="card-header">
        <button class="btn btn-success btn-sm" id="btn_create" data-toggle="modal" data-target="#modal-task-rfp">
            <i class="far fa-comments"></i> Tulis Task
        </button>
    </div>
    <div class="card-body">
    <div class="pesan"></div>
    <!-- table table-bordered table-hover -->
        <table class="colapse-table res3"  width="100%" cellspacing="0">
            <thead>
            <tr>
                <th>REQUEST BY</th>
                <th>JABATAN</th>
                <th>APPROVAL</th>
                <th>NO.RFP</th>
                <th>DATE</th>
                <th>REQUEST STATUS</th>
                <th>RESULT STATUS</th>
                <th>PIC</th>
            </tr>
            </thead>
        </table>
    </div>
</div>

<div class="modal fade" id="modal-task-rfp">
    <div class="modal-dialog modal-lg">
        <div class="modal-content" id="view-modal-task"></div>
    </div>
</div>

<script>
    $('#modal-task-rfp').on('show.bs.modal', function (e) {
    var data = $(e.relatedTarget).data('id');
    $.ajax({
        type : 'post',
        url : 'project_controller/btn_create',
        data :  'idx='+ data,
        cache: false,
        success : function(res) {
            $('#view-modal-task').html(res);
        }
    });
})
</script>

