<div id="form1" class=" col-xs-6 col-xs-offset-3 padd-0-20">
    <form action="thankyou" method="post">
        <div class="row">
            <?php $this->load->view('pages/date-form/name'); ?>
        </div>
        <div class="row">
            <?php $this->load->view('pages/date-form/email'); ?>
        </div>
        <div class="row">
            <?php $this->load->view('pages/date-form/who'); ?>
        </div>
        <div class="row">
            <?php $this->load->view('pages/date-form/what'); ?>
        </div>
        <div class="row">
            <?php $this->load->view('pages/date-form/price'); ?>
        </div>
        <div class="row">
            <?php $this->load->view('pages/date-form/date'); ?>
        </div>
        <div class="row col-xs-offset-2">
            <?php $this->load->view('pages/date-form/time'); ?>
        </div>
        <div class="row col-xs-offset-2">
            <?php $this->load->view('pages/date-form/location'); ?>
        </div>
        <div class="row ">
            <?php $this->load->view('pages/date-form/restaurants'); ?>
        </div>
        <div class="row col-xs-offset-2">
            <?php $this->load->view('pages/date-form/food'); ?>
        </div>
        <div class="row col-xs-offset-2">
            <?php $this->load->view('pages/date-form/other'); ?>
        </div>   
        <div class="col-md-12 center padd-20-0">
            <input type="submit" class="btn btn-info" style="font-size:25px" value="Submit">
        </div>
    </form>
</div>