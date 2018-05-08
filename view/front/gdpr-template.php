<?php

if(! defined('ABSPATH')){ return; }
get_header();

?>
	<?php use wp_gdpr\lib\Gdpr_Options_Helper; ?>
<div class="wrapper">
    <div class="container-fluid">

        <div class="row">
            <div class="col-md-12 m-b-0">
                <h1 class="display-4">
                    <center><?php _e('YOUR', 'wp-gdpr'); ?> <strong><?php _e('PRIVACY CENTER', 'wp-gdpr'); ?></strong></center></h1>
                <p class="lead m-t-0">
                <center><span style="letter-spacing: 2px; font-size:16px;"><?php _e('ALL PERSONAL DATA LINKED TO ', 'wp-gdpr'); ?><STRONG><?php echo $controller->email_request; ?><i class="fa fa-lock m-l-10 text-success" data-toggle="tooltip" data-placement="top" title="" data-original-title="<?php _e('This is your personal data page. Only you are able to access this.', 'wp-gdpr'); ?>"></i></STRONG></span></center>
                </p>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <!-- Hier begint de tabel -->
                <div id="accordion" role="tablist" aria-multiselectable="true" class="m-b-20">
                    <div class="card">
                        <div class="card-header" role="tab" id="headingOne">

                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne" class="btn btn-primary waves-effect waves-light">
                                <i class="fa fa-address-card-o m-r-10"></i><?php _e('Personal Data', 'wp-gdpr'); ?>
                            </a> <span class="text-muted m-l-10 p-t-10" style="float:right;"><?php _e('All personal data collected through WordPress comments & Gravity Forms', 'wp-gdpr'); ?>.</span>
                        </div>

                        <div id="collapseOne" class="collapse show" role="tabpanel" aria-labelledby="headingOne" style="">
                            <div class="">

                                <div class="card-box">
                                    <ul class="nav nav-tabs tabs-bordered">
	                                    <?php if ( Gdpr_Options_Helper::is_option_off( 'switch_on_comments' ) ): ?>

                                        <li class="nav-item">
                                            <a href="#comments" data-toggle="tab" aria-expanded="true" class="nav-link active">
                                                <?php _e('WordPress Comments', 'wp-gdpr'); ?><span class="badge badge-pill badge-primary m-l-10"><?php  ?></span>
                                            </a>
                                        </li>
                                        <?php endif; ?>

                            <!--  ///////////////// foreach plugin -->


                                        <li class="nav-item">
                                            <a href="#gf" data-toggle="tab" aria-expanded="false" class="nav-link">
                                                Gravity Forms<span class="badge badge-pill badge-primary m-l-10">3</span>
                                            </a>
                                        </li>

                            <!--  /////////////// end foreach plugin -->

                                    </ul>
                                    <div class="tab-content">
                                        <div class="tab-pane fade show active" id="comments">

                                            <!-- start row -->
                                            <div class="row">
                                                <div class="col-12">
                                                    <div class="card-box table-responsive" style="border:0;">
                                                        <table id="datatable-buttons" class="table table-bordered table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                                                            <thead>
                                                            <tr>
                                                                <th>ID</th>
                                                                <th></th>
                                                                <th>Date</th>
                                                                <th>Email</th>
                                                                <th>Name</th>
                                                                <th>Comment</th>
                                                            </tr>
                                                            </thead>
                                                            <tfoot>
                                                            <tr>
                                                                <td colspan="6">
                                                                    <div class="col-md-12">
                                                                        <button class="btn btn-default waves-effect m-b-5" id="sa-warning">
                                                                            <i class="fa fa-trash m-r-5"></i><span>Send delete request</span> </button>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            </tfoot>
                                                            <tbody>
                                                            <tr>
                                                                <td>324</td>
                                                                <td>
                                                                    <input id="checkbox0" type="checkbox">
                                                                    <label for="checkbox0">
                                                                    </label>
                                                                </td>
                                                                <td>2018-06-02 <small>18:31:25</small></td>
                                                                <td>
                                                                    <div class="col-12" style="min-width: 200px;">
                                                                        <input type="text" id="example-input-small" name="example-input-small" class="form-control form-control-sm" value="kevin@appsaloon.be">
                                                                    </div>
                                                                    <div style="display:none;">kevin@appsaloon.be</div>
                                                                </td>
                                                                <td>
                                                                    <div class="col-12" style="min-width: 200px;">
                                                                        <input type="text" id="example-input-small" name="example-input-small" class="form-control form-control-sm" value="Kevin Ume">
                                                                    </div>
                                                                    <div style="display:none;">Kevin Ume</div>
                                                                </td>
                                                                <td style="white-space:nowrap;overflow:hidden;text-overflow:ellipsis;">Dit is voorbeeldcontent die hier geplaatst is voor een weergave te hebben.</td>
                                                            </tr>
                                                           
                                                            </tbody>

                                                        </table>

                                                    </div>

                                                </div>

                                            </div>
                                            <!-- end row -->

                                        </div>
                                        <div class="tab-pane fade" id="gf">

                                            <!-- start row -->
                                            <div class="row">
                                                <div class="col-12">
                                                    <div class="card-box table-responsive" style="border:0;">
                                                        <table id="datatable-buttons2" class="table table-bordered table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                                                            <thead>
                                                            <tr>
                                                                <th>ID</th>
                                                                <th></th>
                                                                <th>Date</th>
                                                                <th>Email</th>
                                                                <th>Name</th>
                                                                <th>Address</th>
                                                                <th>Comment</th>
                                                            </tr>
                                                            </thead>
                                                            <tfoot>
                                                            <tr>
                                                                <td colspan="7">
                                                                    <div class="col-md-12">
                                                                        <button class="btn btn-default waves-effect m-b-5" id="sa-warning2">
                                                                            <i class="fa fa-trash m-r-5"></i><span>Send delete request</span> </button>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            </tfoot>
                                                            <tbody>
                                                            <tr>
                                                                <td>324</td>
                                                                <td>
                                                                    <input id="checkbox0" type="checkbox">
                                                                    <label for="checkbox0">
                                                                    </label>
                                                                </td>
                                                                <td>2018-06-02 <small>18:31:25</small></td>
                                                                <td>
                                                                    <div class="col-12" style="min-width: 200px;">
                                                                        <input type="text" id="example-input-small" name="example-input-small" class="form-control form-control-sm" value="kevin@appsaloon.be">
                                                                    </div>
                                                                    <div style="display:none;">kevin@appsaloon.be</div>
                                                                </td>
                                                                <td>
                                                                    <div class="col-12" style="min-width: 200px;">
                                                                        <input type="text" id="example-input-small" name="example-input-small" class="form-control form-control-sm" value="Kevin Ume">
                                                                    </div>
                                                                    <div style="display:none;">Kevin Ume</div>
                                                                </td>
                                                                <td>Kempische Steenweg 101, 3500 Hasselt</td>
                                                                <td style="white-space:nowrap;overflow:hidden;text-overflow:ellipsis;">Thanks for support.</td>
                                                            </tr>
                                                           
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- end row -->

                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" role="tab" id="headingTwo">
                            <a class="btn btn-primary waves-effect waves-light" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                                <i class="fa fa-check-square-o m-r-10"></i>Consent History
                            </a><span class="text-muted m-l-10 p-t-10" style="float:right;"><?php _e('A log of all your consents recorded on this website.', 'wp-gdpr'); ?></span>
                        </div>
                        <div id="collapseTwo" class="collapse" role="tabpanel" aria-labelledby="headingTwo">
                            <div class="card-body">
                                HIER ZOU CONSENT HISTORY MOETEN KOMEN
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" role="tab" id="headingThree">
                            <a class="collapsed btn btn-primary waves-effect waves-light" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                <i class="fa fa-save m-r-10"></i>Cookies
                            </a><span class="text-muted m-l-10 p-t-10" style="float:right;"><?php _e('A list of all cookies on this website which you accepted.', 'wp-gdpr'); ?></span>

                        </div>
                        <div id="collapseThree" class="collapse" role="tabpanel" aria-labelledby="headingThree">
                            <div class="card-body">
                                HIER ZOU COOKIES MOETEN KOMEN
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" role="tab" id="headingFour">

                            <a class="collapsed btn btn-primary waves-effect waves-light" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                <i class="fa fa-edit m-r-10"></i><?php _e('Privacy Policy Changes', 'wp-gdpr'); ?>
                            </a><span class="text-muted m-l-10 p-t-10" style="float:right;"><?php _e('View a list of all changes made to our privacy policy which you agreed on.', 'wp-gdpr'); ?></span>

                        </div>
                        <div id="collapseFour" class="collapse" role="tabpanel" aria-labelledby="headingFour">
                            <div class="card-body">
                                HIER ZOUDEN DE PRIVACY POLICY CHANGES MOETEN KOMEN
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>
        <p class="card-text">
            <small class="text-muted m-r-10" style="float:right;"><i><?php _e('Last Data Request :', 'wp-gdpr'); ?> <strong>14-05-2018 16:30:11</strong> - <?php _e('GDPR Privacy Center powered by', 'wp-gdpr'); ?> <a href="https://wp-gdpr.eu">WP-GDPR</a></i></small>
        </p>
    </div>
    <!-- end container -->
</div>
<!-- end wrapper -->

<script>var translatedText = {text1:"<?php echo var;?>",text2:"lkjoekljmldtext2"}</script>   
    <script type="text/javascript">
        $(document).ready(function() {


            var table = $('#datatable-buttons').DataTable({
                lengthChange: false,
                buttons: ['copy', 'csv', 'excel', 'pdf', 'print']
            });



            $('#datatable-buttons').DataTable();



            table.buttons().container()
                .appendTo('#datatable-buttons_wrapper .col-md-6:eq(0)');
        });
    </script>
    

    <script type="text/javascript">
        $(document).ready(function() {


            var table = $('#datatable-buttons2').DataTable({
                lengthChange: false,
                buttons: ['copy', 'csv', 'excel', 'pdf', 'print']
            });



            $('#datatable-buttons2').DataTable();


            table.buttons().container()
                .appendTo('#datatable-buttons2_wrapper .col-md-6:eq(0)');
        });
    </script>






<div class="gdpr-container">
	<?php echo $controller->message; ?>

    <div id="gdpr-message-updated-entry" class="js-update-message"></div>
	<?php if ( Gdpr_Options_Helper::is_option_off( 'switch_on_comments' ) ): ?>
        <h2><?php _e( 'All comments added by email address', 'wp_gdpr' ); ?>
             <?php echo $controller->email_request; ?></h2>
		<?php
		/**
		 * create table with comments
		 */
		$controller->create_table_with_comments();
	endif;
	/**
	 * do action for addon
	 */
	do_action( 'gdpr_show_entries', $controller->email_request );
	?>
</div>
</body>
<?php get_footer(); ?>
</html>





