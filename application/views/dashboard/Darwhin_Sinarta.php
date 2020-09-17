<style>
.profile {
  font-size: 16px;
}
</style>

<div class="card mb-3" style="margin-top: 15px">
    <div class="card-header" style="text-align:center">
        <b>
            BIODATA
        </b>
    </div>

    <div class="card-body">
        <div class="row">
            <div class="col-sm-2 text-center">
                 <div class="card">
                    <img class="card-img-top" src="assets/img/Darwhin.png" style="width:100%">
                </div>
                <?php foreach($userList->result() as $r): ?>
                    <?php if ($r->user_id === $SESSION_USER_ID) { ?>
                        <button class="btn btn-success btn-sm" id="btn_edit" style="margin-top: 15px">
                            <i class="far fa-edit"></i> Change Photo
                        </button>>
                    <?php } ?>
                <?php endforeach; ?>
            </div>
            
            <div class="col-sm-2">
                <table class="profile">
                    <tr>
                        <td >Nama</td>
                    </tr>
                    <tr>
                        <td>NIK</td>
                    </tr>
                    <tr>
                        <td>No. HP</td>
                    </tr>
                    <tr>
                        <td>Email</td>
                    </tr>
                </table>
            </div>

            <div class="col-sm-5">
                <table class="profile">
                    <?php foreach($userList->result() as $r): ?>
                        <tr>
                            <td> : <?php echo $r->nama; ?> </td>
                        </tr>
                        <tr>
                            <td> : <?php echo $r->nik; ?> </td>
                        </tr>
                        <tr>
                            <?php if (!empty($r->no_hp)) { ?>
                                <td> : <?php echo $r->no_hp ?> </td>
                            <?php } else { ?>
                                <td> : <?php echo "-"?> </td>
                            <?php }?>
                        </tr>
                        <tr>
                            <td> : <?php echo $r->email; ?> </td>
                        </tr>
                    <?php endforeach; ?>
                </table>
            
            </div>

        </div>
    </div>
</div>
