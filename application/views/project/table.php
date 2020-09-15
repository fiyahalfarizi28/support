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
                <th>LAST UPDATE</th>
            </tr>
            </thead>
            <tbody>
            <?php foreach($ProjectList as $r): ?>
                    
                    <?php 
                        $this->db->where('project_id', $r->id);
                        $specificTask = $this->db->get(TB_TASK)->result();
                    ?>

                    <tr>
                        <td style="text-align: center"><i data-toggle="collapse" data-target=<?php echo "#".$r->id?> style=" color: #28a745; background-color: #f4fbff" class="fa fa-plus-circle" aria-hidden="true"></i></td>
                        <td><?php echo $r->project_name?></td>
                        <td>
                            <?php echo STT_ON_PROGRESS?>
                        </td>
                        <td><?php echo date("d-m-Y | H:i:s",strtotime( $r->last_update))?></td>
                    </tr>

                    <tr id=<?php echo $r->id?> class="collapse">                     
                        <td colspan="4">
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

