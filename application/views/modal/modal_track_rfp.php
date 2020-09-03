<style>
.progressbar {
  margin-left: 50px;
  padding: 10px;
  counter-reset: step;
}
.progressbar li {
  list-style-type: none;
  /* width: 25%; */
  /* float: left; */
  font-size: 14px;
  position: relative;
  text-align: left;
  text-transform: uppercase;
  color: #7d7d7d;
}
.progressbar li:before {
  width: 30px;
  height: 30px;
  content: counter(step);
  counter-increment: step;
  line-height: 70px;
  border: 2px solid #7d7d7d;
  /* display: block; */
  text-align: center;
  margin: 0 auto 10px auto;
  padding: 5px 10px;
  border-radius: 50%;
  background-color: white;
}
.progressbar li:after {
  width: 2px;
  height: 58%;
  content: '';
  position: absolute;
  background-color: #7d7d7d;
  /* top: 15px; */
  top: -41%;
  left: 15px;
  z-index: 1;
}
.progressbar li:first-child:after {
  content: none;
}
.progressbar li.done {
  color: #55b776;
}
.progressbar li.done:before {
  border-color: #55b776;
  background-color: #55b776;
}
.progressbar li.done + li:after {
  background-color: #55b776;
}
.progressbar li.active {
  color: #007bff;
}
.progressbar li.active:before {
  border-color: #007bff;
  background-color: #007bff;
}
.progressbar li.active + li:after {
  background-color: #007bff;
}
.progressbar li.reject {
  color: red;
}
.progressbar li.reject:before {
  border-color: red;
  background-color: red;
}
.progressbar li.reject + li:after {
  background-color: red;
}
</style>

<div class="modal-header">
    <h3 class="modal-title">TRACK <?php echo $r->no_rfp ?></h3>
</div>

<div class="modal-body">
    <ul class="progressbar">
        <li class="done" data-toggle="tooltip" data-placement="left" title="<?php ?>">
          RFP terkirim
          <div class="ml-4">
            ()
          </div>
        </li>

        <li class="done" data-toggle="tooltip" data-placement="left" title="<?php ?>">
          Approved Department Head
          <div class="ml-4">
            ()
          </div>
        </li>

        <li class="done" data-toggle="tooltip" data-placement="left" title="<?php ?>">
          Approved IT 
          <div class="ml-4">
            ()
          </div>
        </li>

        <li class="active" data-toggle="tooltip" data-placement="left" title="<?php ?>">
          RFP sedang dikerjakan
          <div class="ml-4">
            ()
          </div>
        </li>

        <li class="<?php  ?>" data-toggle="tooltip" data-placement="left" title="<?php ?>">
          Konfirmasi RFP
          <div class="ml-4">
            ()
          </div>
        </li>
    </ul>

</div>