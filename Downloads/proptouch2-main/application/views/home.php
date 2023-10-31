<?php

if (!$this->session->userdata('userinfo')) {

    redirect("/");
}
?>

<!-- Wrapper Start -->
<div class="wrapper">
    <?php include "layouts/left-panel.php"; ?>

    <!--<div class="modal fade" id="new-order" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="popup text-left">
                        <h4 class="mb-3">New Order</h4>
                        <div class="content create-workform bg-body">
                            <div class="pb-3">
                                <label class="mb-2">Email</label>
                                <input type="text" class="form-control" placeholder="Enter Name or Email">
                            </div>
                            <div class="col-lg-12 mt-4">
                                <div class="d-flex flex-wrap align-items-ceter justify-content-center">
                                    <div class="btn btn-primary mr-4" data-dismiss="modal">Cancel</div>
                                    <div class="btn btn-outline-primary" data-dismiss="modal">Create</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>     -->

    <div class="content-page">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card card-transparent card-block card-stretch card-height border-none">
                        <div class="card-body p-0 mt-lg-2 mt-0">
                            <h3 class="mb-3"> Hi
                                <?php
                                $user = $this->session->userdata('userinfo');

                                $session_current_username = $user['session_current_username'];
                                $session_role_id = $user['session_role_id'];
                                echo ucfirst($session_current_username);



                                ?>, Good Morning</h3>


                            <p class="mb-0 mr-4">Your dashboard gives you views of key performance or business process.</p> <br />
                        </div>

                        <?php
                        if ($session_role_id == 1) {
                        ?>
                        <input type="hidden" value="<?php echo base_url('Home/countAllUsersList'); ?>" id="countAllUsersListURL" />


                            <div class="row">
                                <div class="col-md-4">
                                    <div class="card card-block card-stretch card-height rtl-mode box-bold-border">
                                        <div class="card-body">
                                            <div class="top-block d-flex align-items-center justify-content-between mb-3">
                                                <h3 class="box-bold-border-text-color "><p class="mb-0"><span class="total-clients"> </span></p></h3>
                                                <div class="box-bold-border-icon-color  icon iq-icon-box-2 mr-2 rounded rtl-ml-2  rtl-mr-0">
                                                    <i class="lar la-hand-pointer"></i>
                                                </div>
                                            </div>
                                            <h4>Total Clients</h4>
                                            <div class="mt-1">
                                                <p class="mb-0">Active <span class="active-clients"> </span></p>
                                                <p class="mb-0">Inactive <span class="inactive-clients"> </span></p>
                                            </div>
                                            <div class="iq-progress-bar mt-3">
                                                <span class="box-bold-border-percentage-color" id="active-clients-percentage" data-percent="88" style="transition: width 2s ease 0s; width: 0%;"></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <div class="col-md-4">
                                    <div class="card card-block card-stretch card-height rtl-mode box-bold-border">
                                        <div class="card-body">
                                            <div class="top-block d-flex align-items-center justify-content-between mb-3">
                                                <h3 class="box-bold-border-text-color "><p class="mb-0"><span class="total-teams"> </span></p></h3>
                                                <div class="box-bold-border-icon-color icon iq-icon-box-2 mr-2 rounded rtl-ml-2  rtl-mr-0">
                                                    <i class="lar la-hand-pointer"></i>
                                                </div>
                                            </div>
                                            <h4>Total Teams</h4>
                                            <div class="mt-1">
                                                <p class="mb-0">Active <span class="active-teams"> </span></p>
                                                <p class="mb-0">Inactive <span class="inactive-teams"> </span></p>
                                            </div>
                                            <div class="iq-progress-bar mt-3">
                                                <span class="box-bold-border-percentage-color" id="active-teams-percentage" data-percent="88" style="transition: width 2s ease 0s; width: 0%;"></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <div class="col-md-4">
                                    <div class="card card-block card-stretch card-height rtl-mode box-bold-border">
                                        <div class="card-body">
                                            <div class="top-block d-flex align-items-center justify-content-between mb-3">
                                                <h3 class="box-bold-border-text-color "><p class="mb-0"><span class="total-agents"> </span></p></h3>
                                                <div class="box-bold-border-icon-color  icon iq-icon-box-2 mr-2 rounded rtl-ml-2  rtl-mr-0">
                                                    <i class="lar la-hand-pointer"></i>
                                                </div>
                                            </div>
                                            <h4>Total Agents</h4>
                                            <div class="mt-1">
                                                <p class="mb-0">Active <span class="active-agents"> </span></p>
                                                <p class="mb-0">Inactive <span class="inactive-agents"> </span></p>
                                            </div>
                                            <div class="iq-progress-bar mt-3">
                                                <span class="box-bold-border-percentage-color" id="active-agents-percentage" data-percent="88" style="transition: width 2s ease 0s; width: 0%;"></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                            <?php
                        }
                            ?>
                            </div>

                    </div>
                </div>
                <!--    <div class="col-lg-8">
              <div class="row">
                  <div class="col-lg-4 col-md-4">
                      <div class="card card-block card-stretch card-height">
                          <div class="card-body">
                              <div class="d-flex align-items-center mb-4 card-total-sale">
                                  <div class="icon iq-icon-box-2 bg-info-light">
                                      <img src="<?php echo base_url(); ?>/assets/images/product/1.png" class="img-fluid" alt="image">
                                  </div>
                                  <div>
                                      <p class="mb-2">Total Gold Sales </p>
                                      <h4 id="total_current_month_gold_sale">0.0</h4>
                                  </div>
                              </div>
                              <div class="iq-progress-bar mt-2">
                                  <span class="bg-info iq-progress progress-1" data-percent="85">
                                  </span>
                              </div>
                          </div>
                      </div>
                  </div>
                  <div class="col-lg-4 col-md-4">
                      <div class="card card-block card-stretch card-height">
                          <div class="card-body">
                              <div class="d-flex align-items-center mb-4 card-total-sale">
                                  <div class="icon iq-icon-box-2 bg-danger-light">
                                      <img src="<?php echo base_url(); ?>/assets/images/product/2.png" class="img-fluid" alt="image">
                                  </div>
                                  <div>
                                      <p class="mb-2">Total VAT</p>
                                      <h4 id="total_current_month_vat">0.0</h4>
                                  </div>
                              </div>
                              <div class="iq-progress-bar mt-2">
                                  <span class="bg-danger iq-progress progress-1" data-percent="70">
                                  </span>
                              </div>
                          </div>
                      </div>
                  </div>
                  <div class="col-lg-4 col-md-4">
                      <div class="card card-block card-stretch card-height">
                          <div class="card-body">
                              <div class="d-flex align-items-center mb-4 card-total-sale">
                                  <div class="icon iq-icon-box-2 bg-success-light">
                                      <img src="<?php echo base_url(); ?>/assets/images/product/3.png" class="img-fluid" alt="image">
                                  </div>
                                  <div>
                                      <p class="mb-2">Product Sold</p>
                                      <h4>4589 M</h4>
                                  </div>
                              </div>
                              <div class="iq-progress-bar mt-2">
                                  <span class="bg-success iq-progress progress-1" data-percent="75">
                                  </span>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>

          <div class="col-lg-8">

              <div class="card card-block card-stretch card-height">
                  <div class="card-header d-flex align-items-center justify-content-between">
                      <div class="header-title">
                          <h4 class="card-title">Sale Overview <?php echo ' (' . date('Y') . ') '; ?> </h4>

                      </div>

                      <div class="card-header-toolbar d-flex align-items-center">
                      <div class="form-group col-lg-12">
                                    <label for="sale_date">Date:</label>
                                    <input type="text" id="DateRangSelector" class="form-control" name="DateRangSelector" placeholder="YYYY">
                                </div>
                          <div class="dropdown">
                              <span class="dropdown-toggle dropdown-bg btn" id="dropdownMenuButton002"
                                  data-toggle="dropdown">
                                  This Year<i class="ri-arrow-down-s-line ml-1"></i>
                              </span>
                              <div class="dropdown-menu dropdown-menu-right shadow-none"
                                  aria-labelledby="dropdownMenuButton002">
                                  <a class="dropdown-item" href="#">Yearly</a>
                                  <a class="dropdown-item" href="#">Monthly</a>
                                  <a class="dropdown-item" href="#">Weekly</a>
                              </div>
                          </div>
                      </div>
                  </div>
                  <div class="card-body">
                      <div id="layout1-chart-2" style="min-height: 360px;"></div>
                  </div>
              </div>
          </div>

-->
                <!--  <div class="col-lg-8">
              <div class="card card-block card-stretch card-height">
                  <div class="card-header d-flex align-items-center justify-content-between">
                      <div class="header-title">
                          <h4 class="card-title">Top Products</h4>
                      </div>
                      <div class="card-header-toolbar d-flex align-items-center">
                          <div class="dropdown">
                              <span class="dropdown-toggle dropdown-bg btn" id="dropdownMenuButton006"
                                  data-toggle="dropdown">
                                  This Month<i class="ri-arrow-down-s-line ml-1"></i>
                              </span>
                              <div class="dropdown-menu dropdown-menu-right shadow-none"
                                  aria-labelledby="dropdownMenuButton006">
                                  <a class="dropdown-item" href="#">Year</a>
                                  <a class="dropdown-item" href="#">Month</a>
                                  <a class="dropdown-item" href="#">Week</a>
                              </div>
                          </div>
                      </div>
                  </div>
                  <div class="card-body">
                      <ul class="list-unstyled row top-product mb-0">
                          <li class="col-lg-3">
                              <div class="card card-block card-stretch card-height mb-0">
                                  <div class="card-body">
                                      <div class="bg-warning-light rounded">
                                          <img src="<?php echo base_url(); ?>/assets/images/product/01.png" class="style-img img-fluid m-auto p-3" alt="image">
                                      </div>
                                      <div class="style-text text-left mt-3">
                                          <h5 class="mb-1">Organic Cream</h5>
                                          <p class="mb-0">789 Item</p>
                                      </div>
                                  </div>
                              </div>
                          </li>
                          <li class="col-lg-3">
                              <div class="card card-block card-stretch card-height mb-0">
                                  <div class="card-body">
                                      <div class="bg-danger-light rounded">
                                          <img src="<?php echo base_url(); ?>/assets/images/product/02.png" class="style-img img-fluid m-auto p-3" alt="image">
                                      </div>
                                      <div class="style-text text-left mt-3">
                                          <h5 class="mb-1">Rain Umbrella</h5>
                                          <p class="mb-0">657 Item</p>
                                      </div>
                                  </div>
                              </div>
                          </li>
                          <li class="col-lg-3">
                              <div class="card card-block card-stretch card-height mb-0">
                                  <div class="card-body">
                                      <div class="bg-info-light rounded">
                                          <img src="<?php echo base_url(); ?>/assets/images/product/03.png" class="style-img img-fluid m-auto p-3" alt="image">
                                      </div>
                                      <div class="style-text text-left mt-3">
                                          <h5 class="mb-1">Serum Bottle</h5>
                                          <p class="mb-0">489 Item</p>
                                      </div>
                                  </div>
                              </div>
                          </li>
                          <li class="col-lg-3">
                              <div class="card card-block card-stretch card-height mb-0">
                                  <div class="card-body">
                                      <div class="bg-success-light rounded">
                                          <img src="<?php echo base_url(); ?>/assets/images/product/02.png" class="style-img img-fluid m-auto p-3" alt="image">
                                      </div>
                                      <div class="style-text text-left mt-3">
                                          <h5 class="mb-1">Organic Cream</h5>
                                          <p class="mb-0">468 Item</p>
                                      </div>
                                  </div>
                              </div>
                          </li>
                      </ul>
                  </div>
              </div>
          </div> -->


                <!--   <div class="col-lg-4">
              <div class="card-transparent card-block card-stretch mb-4">
                  <div class="card-header d-flex align-items-center justify-content-between p-0">
                      <div class="header-title">
                          <h4 class="card-title mb-0">Best Item All Time</h4>
                      </div>
                      <div class="card-header-toolbar d-flex align-items-center">
                          <div><a href="#" class="btn btn-primary view-btn font-size-14">View All</a></div>
                      </div>
                  </div>
              </div>
              <div class="card card-block card-stretch card-height-helf">
                  <div class="card-body card-item-right">
                      <div class="d-flex align-items-top">
                          <div class="bg-warning-light rounded">
                              <img src="<?php echo base_url(); ?>/assets/images/product/04.png" class="style-img img-fluid m-auto" alt="image">
                          </div>
                          <div class="style-text text-left">
                              <h5 class="mb-2">Coffee Beans Packet</h5>
                              <p class="mb-2">Total Sell : 45897</p>
                              <p class="mb-0">Total Earned : $45,89 M</p>
                          </div>
                      </div>
                  </div>
              </div>
              <div class="card card-block card-stretch card-height-helf">
                  <div class="card-body card-item-right">
                      <div class="d-flex align-items-top">
                          <div class="bg-danger-light rounded">
                              <img src="<?php echo base_url(); ?>/assets/images/product/05.png" class="style-img img-fluid m-auto" alt="image">
                          </div>
                          <div class="style-text text-left">
                              <h5 class="mb-2">Bottle Cup Set</h5>
                              <p class="mb-2">Total Sell : 44359</p>
                              <p class="mb-0">Total Earned : $45,50 M</p>
                          </div>
                      </div>
                  </div>
              </div>
          </div>

-->

                <!--
         <div class="col-lg-4">
              <div class="card card-block card-stretch card-height-helf">
                  <div class="card-body">
                      <div class="d-flex align-items-top justify-content-between">
                          <div class="">
                              <p class="mb-0">Income</p>
                              <h5>$ 98,7800 K</h5>
                          </div>
                          <div class="card-header-toolbar d-flex align-items-center">
                              <div class="dropdown">
                                  <span class="dropdown-toggle dropdown-bg btn" id="dropdownMenuButton003"
                                      data-toggle="dropdown">
                                      This Month<i class="ri-arrow-down-s-line ml-1"></i>
                                  </span>
                                  <div class="dropdown-menu dropdown-menu-right shadow-none"
                                      aria-labelledby="dropdownMenuButton003">
                                      <a class="dropdown-item" href="#">Year</a>
                                      <a class="dropdown-item" href="#">Month</a>
                                      <a class="dropdown-item" href="#">Week</a>
                                  </div>
                              </div>
                          </div>
                      </div>
                      <div id="layout1-chart-3" class="layout-chart-1"></div>
                  </div>
              </div>
              <div class="card card-block card-stretch card-height-helf">
                  <div class="card-body">
                      <div class="d-flex align-items-top justify-content-between">
                          <div class="">
                              <p class="mb-0">Expenses</p>
                              <h5>$ 45,8956 K</h5>
                          </div>
                          <div class="card-header-toolbar d-flex align-items-center">
                              <div class="dropdown">
                                  <span class="dropdown-toggle dropdown-bg btn" id="dropdownMenuButton004"
                                      data-toggle="dropdown">
                                      This Month<i class="ri-arrow-down-s-line ml-1"></i>
                                  </span>
                                  <div class="dropdown-menu dropdown-menu-right shadow-none"
                                      aria-labelledby="dropdownMenuButton004">
                                      <a class="dropdown-item" href="#">Year</a>
                                      <a class="dropdown-item" href="#">Month</a>
                                      <a class="dropdown-item" href="#">Week</a>
                                  </div>
                              </div>
                          </div>
                      </div>
                      <div id="layout1-chart-4" class="layout-chart-2"></div>
                  </div>
              </div>
          </div>


          <div class="col-lg-8">
              <div class="card card-block card-stretch card-height">
                  <div class="card-header d-flex justify-content-between">
                      <div class="header-title">
                          <h4 class="card-title">Order Summary</h4>
                      </div>
                      <div class="card-header-toolbar d-flex align-items-center">
                          <div class="dropdown">
                              <span class="dropdown-toggle dropdown-bg btn" id="dropdownMenuButton005"
                                  data-toggle="dropdown">
                                  This Month<i class="ri-arrow-down-s-line ml-1"></i>
                              </span>
                              <div class="dropdown-menu dropdown-menu-right shadow-none"
                                  aria-labelledby="dropdownMenuButton005">
                                  <a class="dropdown-item" href="#">Year</a>
                                  <a class="dropdown-item" href="#">Month</a>
                                  <a class="dropdown-item" href="#">Week</a>
                              </div>
                          </div>
                      </div>
                  </div>
                  <div class="card-body pb-2">
                      <div class="d-flex flex-wrap align-items-center mt-2">
                          <div class="d-flex align-items-center progress-order-left">
                              <div class="progress progress-round m-0 orange conversation-bar" data-percent="46">
                                  <span class="progress-left">
                                      <span class="progress-bar"></span>
                                  </span>
                                  <span class="progress-right">
                                      <span class="progress-bar"></span>
                                  </span>
                                  <div class="progress-value text-secondary">46%</div>
                              </div>
                              <div class="progress-value ml-3 pr-5 border-right">
                                  <h5>$12,6598</h5>
                                  <p class="mb-0">Average Orders</p>
                              </div>
                          </div>
                          <div class="d-flex align-items-center ml-5 progress-order-right">
                              <div class="progress progress-round m-0 primary conversation-bar" data-percent="46">
                                  <span class="progress-left">
                                      <span class="progress-bar"></span>
                                  </span>
                                  <span class="progress-right">
                                      <span class="progress-bar"></span>
                                  </span>
                                  <div class="progress-value text-primary">46%</div>
                              </div>
                              <div class="progress-value ml-3">
                                  <h5>$59,8478</h5>
                                  <p class="mb-0">Top Orders</p>
                              </div>
                          </div>
                      </div>
                  </div>
                  <div class="card-body pt-0">
                      <div id="layout1-chart-5"></div>
                  </div>
              </div>
          </div>

-->
            </div>
            <!-- Page end  -->
        </div>
    </div>
</div>

<!-- Backend Bundle JavaScript -->
<script src="<?php echo base_url(); ?>/assets/ajax/home.js"></script>