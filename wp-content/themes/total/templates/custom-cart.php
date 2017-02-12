<?php 
/** * Template Name: Custom Cart */ 
get_header(); ?>
<div id="main-content" class="main-content">
    <div id="primary" class="content-area">
        <div id="content" class="site-content" role="main">
            <div class="container container-home">
                <div class="row block-main">
                    <div class="col-xs-12 section-main">
                        <div class="row">
                          <div class="col-xs-4 cart-integration">
                            <h2>Your cart details</h2>
                            <div>
                              <input type="file" />
                            </div>
                            <table class="table-striped">
                              <th>
                                <td>Total Items</td>
                                <td>Total Price</td>
                              </th>
                              <tr>
                                <td>Item</td>
                                <td>Price</td>
                              </tr>
                              <tr>
                                <td>Item</td>
                                <td>Price</td>
                              </tr>
                            </table>
                          </div>
                          <div class="col-xs-8">
                            <table class="table-striped">
                              <th>
                                <td>SI</td>
                                <td>Items</td>
                                <td>Size</td>
                                <td>Price</td>
                                <td>Status</td>
                              </th>
                              <tr>
                                <td><input type="checkbox"></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td><input type="file" /></td>
                              </tr>
                              <tr>
                                <td><input type="checkbox"></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td><input type="file" /></td>
                              </tr>
                              <tr>
                                <td><input type="checkbox"></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td><input type="file" /></td>
                              </tr>
                              <tr>
                                <td><input type="checkbox"></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td><input type="file" /></td>
                              </tr>
                            </table>
                            <form class="form-horizontal">
                              <div class="form-group">
                                <label class="control-label col-sm-2" for="email">Email:</label>
                                <div class="col-sm-10">
                                  <input type="email" class="form-control" id="email" placeholder="Enter email">
                                </div>
                              </div>
                              <div class="form-group">
                                <label class="control-label col-sm-2" for="mobile">Mobile:</label>
                                <div class="col-sm-10">
                                  <input type="number" class="form-control" id="mobile" placeholder="Enter mobilw">
                                </div>
                              </div>
                              <div>
                                <button class="btn btn-primary">Buy now</button>
                              </div>
                            </form>
                          </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
get_footer();

       
