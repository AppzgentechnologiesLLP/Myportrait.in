<?php 
/** * Template Name: Custom Home */ 
get_header(); ?>
<div id="main-content" class="main-content">
    <div id="primary" class="content-area">
        <div id="content" class="site-content" role="main">
            <div class="container container-home">
                <div class="row block-main">
                    <div class="col-xs-12 section-main">
                        <div class="row block-intro">
                            <h1>
                                Welcome Heading
                            </h1>
                            <div>
                                Intro Description
                            </div>
                        </div>
                        <div class="block-view">
                            <div class="section-view customer">
                            	<a href="http://localhost/myportrait/view-customer/">
                                <div class="section-media">
                            		<img src="http://localhost/myportrait/wp-content/uploads/2016/12/default-customer.jpg" alt="Customer" class="img-main img-responsive" />
                                	<div class="view-as">Customer</div>
                                </div>
                                </a>
                                <!-- <button class="btn btn-default">Customer</button> -->
                            </div>
                            <div class="section-view artist">
                            	<a href="">
	                                <div class="section-media">
	                                    <img src="http://localhost/myportrait/wp-content/uploads/2016/12/default-artist.jpg" alt="Artist" class="img-main img-responsive" />
	                                    <div class="view-as">Artist</div>
	                                </div>
                            	</a>
                            </div>
                        </div>
                        <div>
                            <p class="lead">Upload your digital portrait and get Painted Portrait delivered to you...<button class="btn btn-link" data-toggle="modal" data-target="#modalLogin">Click Here</button>to login </p>
							<div class="modal fade" id="modalLogin" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
							  <div class="modal-dialog" role="document">
							    <div class="modal-content">
							      <!-- <div class="modal-header">
							        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
							          <span aria-hidden="true">&times;</span>
							        </button>
							        <h4 class="modal-title" id="myModalLabel">Modal title</h4>
							      </div> -->
							      <div class="modal-body">
							        <p class="lead">Do you want to continue as <a href="http://localhost/myportrait/view-customer/">Customer</a> or <a href="">Artist</a></p>
							      </div>
							     <!--  <div class="modal-footer">
							       <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
							       <button type="button" class="btn btn-primary">Save changes</button>
							     </div> -->
							    </div>
							  </div>
							</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
get_sidebar();
get_footer();

           
