<header class="navbar pcoded-header navbar-expand-lg navbar-light header-dark">
		
			
    <div class="m-header">
      <a class="mobile-menu" id="mobile-collapse" href="#!"><span></span></a>
      <a href="#!" class="b-brand">
        <!-- ========   change your logo hear   ============ -->
        <img src="<?= base_url() ?>public/signal_imgs/logo.png" alt="" class="logo" style="height:110px;">
      </a>
      <a href="#!" class="mob-toggler">
        <i class="feather icon-more-vertical"></i>
      </a>
    </div>

      <ul class="navbar-nav ml-auto">
        <!-- <li>
          <div class="dropdown">
            <a class="dropdown-toggle" href="#" data-toggle="dropdown">
              <i class="icon feather icon-bell"></i>
              <span class="badge badge-pill badge-danger">5</span>
            </a>
            <div class="dropdown-menu dropdown-menu-right notification">
              <div class="noti-head">
                <h6 class="d-inline-block m-b-0">Notifications</h6>
                <div class="float-right">
                  <a href="#!" class="m-r-10">mark as read</a>
                  <a href="#!">clear all</a>
                </div>
              </div>
              <ul class="noti-body">
                <li class="n-title">
                  <p class="m-b-0">NEW</p>
                </li>
                <li class="notification">
                  <div class="media">
                    <img class="img-radius" src="<?= base_url() ?>public/assets/images/user/avatar-1.jpg" alt="Generic placeholder image">
                    <div class="media-body">
                      <p><strong>John Doe</strong><span class="n-time text-muted"><i class="icon feather icon-clock m-r-10"></i>5 min</span></p>
                      <p>New ticket Added</p>
                    </div>
                  </div>
                </li>
                <li class="n-title">
                  <p class="m-b-0">EARLIER</p>
                </li>
                <li class="notification">
                  <div class="media">
                    <img class="img-radius" src="<?= base_url() ?>public/assets/images/user/avatar-2.jpg" alt="Generic placeholder image">
                    <div class="media-body">
                      <p><strong>Joseph William</strong><span class="n-time text-muted"><i class="icon feather icon-clock m-r-10"></i>10 min</span></p>
                      <p>Prchace New Theme and make payment</p>
                    </div>
                  </div>
                </li>
                <li class="notification">
                  <div class="media">
                    <img class="img-radius" src="<?= base_url() ?>public/assets/images/user/avatar-1.jpg" alt="Generic placeholder image">
                    <div class="media-body">
                      <p><strong>Sara Soudein</strong><span class="n-time text-muted"><i class="icon feather icon-clock m-r-10"></i>12 min</span></p>
                      <p>currently login</p>
                    </div>
                  </div>
                </li>
                <li class="notification">
                  <div class="media">
                    <img class="img-radius" src="<?= base_url() ?>public/assets/images/user/avatar-2.jpg" alt="Generic placeholder image">
                    <div class="media-body">
                      <p><strong>Joseph William</strong><span class="n-time text-muted"><i class="icon feather icon-clock m-r-10"></i>30 min</span></p>
                      <p>Prchace New Theme and make payment</p>
                    </div>
                  </div>
                </li>
              </ul>
              <div class="noti-footer">
                <a href="#!">show all</a>
              </div>
            </div>
          </div>
        </li> -->
        <li>
          <div class="dropdown drp-user">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="feather icon-user"></i>
            </a>
            <div class="dropdown-menu dropdown-menu-right profile-notification">
              <div class="pro-head">
                <b style="justify-content: center;">
                <?= ucwords($this->session->userdata('name')); ?>     
                </b>           
                <!-- <a href="<?= site_url('admin/auth/logout'); ?>" class="dud-logout" title="Logout">
                  <i class="feather icon-log-out"></i>
                </a> -->
              </div>
              <ul class="pro-body">
               
                <li><a href="<?= site_url('admin/auth/logout'); ?>" class="dropdown-item"><i class="feather icon-log-out"></i> Logout</a></li>
              </ul>
            </div>
          </div>
        </li>
      </ul>
    </div>
    
  
</header>