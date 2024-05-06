<nav class="pcoded-navbar  ">
	<?php
	$cur_tab = $this->uri->segment(2) == '' ? 'dashboard' : $this->uri->segment(2);
	?>
	<div class="navbar-wrapper  ">
		<div class="navbar-content scroll-div ">

			<div>
				<div class="main-menu-header">
					<i class="fa fa-user"></i>
					<div class="user-details">
						<span>
							<?= ucwords($this->session->userdata('name')); ?>
						</span>
						<div id="more-details">
							<?= ucwords($this->session->userdata('role_name')); ?><i class="fa fa-chevron-down m-l-5"></i>
						</div>
					</div>
				</div>
				<div class="collapse" id="nav-user-link">
					<ul class="list-unstyled">
						<li class="list-group-item"><a href="<?= site_url('admin/auth/logout'); ?>"><i class="feather icon-log-out m-r-5"></i>Logout</a></li>
					</ul>
				</div>
			</div>
			<ul class="nav pcoded-inner-navbar ">

				<li class="nav-item">
					<a href="<?= site_url('admin/dashboard'); ?>" class="nav-link">
						<span class="pcoded-micon">
							<i class="fas fa-tachometer-alt" style="color:white;"></i>
						</span>
						<span class="pcoded-mtext">DASHBOARD</span>
					</a>
				</li>

				<?php if ($this->session->userdata('role') === '1') : ?>
					<li class="nav-item pcoded-hasmenu">
						<a href="#" class="nav-link "><span class="pcoded-micon"><i class="fa-solid fa fa-user" style="color:white;"></i></span><span class="pcoded-mtext">USER</span></a>
						<ul class="pcoded-submenu">
							<li><a href="<?= base_url('admin/users/add'); ?>">Add User</a></li>
							<li><a href="<?= base_url('admin/users'); ?>">View User</a></li>
						</ul>
					</li>
					<li class="nav-item">
						<a href="<?= base_url('admin/imagebank/imagebank_view'); ?>" class="nav-link "><span class="pcoded-micon"><i class="fa-solid fa fa-newspaper" style="color:white;"></i></span><span class="pcoded-mtext">IMAGE BANK</span></a>
					</li>
					<li class="nav-item">
						<a href="<?= base_url('admin/news/news_view'); ?>" class="nav-link "><span class="pcoded-micon"><i class="fa-solid fa fa-newspaper" style="color:white;"></i></span><span class="pcoded-mtext">NEWS</span></a>
					</li>
					<li class="nav-item">
						<a href="<?= base_url('admin/news_category/news_category_view'); ?>" class="nav-link "><span class="pcoded-micon"><i class="fa-solid fa fa-th-list" style="color:white;"></i></span><span class="pcoded-mtext">NEWS CATEGORY</span></a>
					</li>
					<li class="nav-item">
						<a href="<?= base_url('admin/news_sub_category/news_sub_category_view'); ?>" class="nav-link "><span class="pcoded-micon"><i class="fa-solid fa fa-folder-open" style="color:white;"></i></span><span class="pcoded-mtext">NEWS SUB CATEGORY</span></a>
					</li>
					<li class="nav-item">
						<a href="<?= base_url('admin/calender/calender_view'); ?>" class="nav-link "><span class="pcoded-micon"><i class="fa-solid fa fa-calendar" style="color:white;"></i></span><span class="pcoded-mtext">CALENDAR</span></a>
					</li>
					<li class="nav-item">
						<a href="<?= base_url('admin/charts/charts_view'); ?>" class="nav-link "><span class="pcoded-micon"><i class="fa-solid fa fa-chart-pie" style="color:white;"></i></span><span class="pcoded-mtext">CHARTS</span></a>
					</li>
					<li class="nav-item">
						<a href="<?= base_url('admin/event/event_view'); ?>" class="nav-link "><span class="pcoded-micon"><i class="fa-solid fa fa-calendar" style="color:white;"></i></span><span class="pcoded-mtext">EVENTS</span></a>
					</li>
					<li class="nav-item">
						<a href="<?= base_url('admin/menu/menu_view'); ?>" class="nav-link "><span class="pcoded-micon"><i class="fa-solid fa fa-bars" style="color:white;"></i></span><span class="pcoded-mtext">MENU</span></a>
					</li>
					<li class="nav-item">
						<a href="<?= base_url('admin/sub_menu/sub_menu_view'); ?>" class="nav-link "><span class="pcoded-micon"><i class="fa-solid fa fa-caret-square-right" style="color:white;"></i></span><span class="pcoded-mtext">SUB MENU</span></a>
					</li>
					<li class="nav-item">
						<a href="<?= base_url('admin/sub_sub_menu/sub_sub_menu_view'); ?>" class="nav-link "><span class="pcoded-micon"><i class="fa-solid fa fa-caret-square-down" style="color:white;"></i></span><span class="pcoded-mtext">SUB SUB MENU</span></a>
					</li>
					<li class="nav-item">
						<a href="<?= base_url('admin/advertisement/advertisement_view'); ?>" class="nav-link "><span class="pcoded-micon"><i class="fa-solid fa fa-ad" style="color:white;"></i></span><span class="pcoded-mtext">ADVERTISEMENT</span></a>
					</li>
					<li class="nav-item">
						<a href="<?= base_url('admin/contact_us/contact_us_view'); ?>" class="nav-link "><span class="pcoded-micon"><i class="fa-solid fa fa-user" style="color:white;"></i></span><span class="pcoded-mtext">CONTACT US</span></a>
					</li>
					<li class="nav-item">
						<a href="<?= base_url('admin/blog_category/blog_category_view'); ?>" class="nav-link "><span class="pcoded-micon"><i class="fa-solid fa fa-pencil-alt" style="color:white;"></i></span><span class="pcoded-mtext">BLOG CATEGORY</span></a>
					</li>
					<li class="nav-item">
						<a href="<?= base_url('admin/blog/blog_view'); ?>" class="nav-link "><span class="pcoded-micon"><i class="fa-solid fa fa-blog" style="color:white;"></i></span><span class="pcoded-mtext">BLOGS</span></a>
					</li>
					<li class="nav-item">
						<a href="<?= base_url('admin/pricing/pricing_view'); ?>" class="nav-link "><span class="pcoded-micon"><i class="fa-solid fa fa-tags" style="color:white;"></i></span><span class="pcoded-mtext">PRICING</span></a>
					</li>
					<li class="nav-item">
						<a href="<?= base_url('admin/pricing_features/pricing_features_view'); ?>" class="nav-link "><span class="pcoded-micon"><i class="fa-solid fa fa-cogs" style="color:white;"></i></span><span class="pcoded-mtext">PRICING FEATURES</span></a>
					</li>
					<li class="nav-item">
						<a href="<?= base_url('admin/signal/signal_view'); ?>" class="nav-link "><span class="pcoded-micon"><i class="fa-solid fa fa-signal" style="color:white;"></i></span><span class="pcoded-mtext">SIGNAL</span></a>
					</li>
					<li class="nav-item">
						<a href="<?= base_url('admin/learn/learn_view'); ?>" class="nav-link "><span class="pcoded-micon"><i class="fa-solid fa fa-book" style="color:white;"></i></span><span class="pcoded-mtext">LEARN</span></a>
					</li>
					<li class="nav-item">
						<a href="<?= base_url('admin/trade/trade_view'); ?>" class="nav-link "><span class="pcoded-micon"><i class="fa-solid fa fa-handshake" style="color:white;"></i></span><span class="pcoded-mtext">TRADE</span></a>
					</li>
					<li class="nav-item">
						<a href="<?= base_url('admin/analysis/analysis_view'); ?>" class="nav-link "><span class="pcoded-micon"><i class="fa-solid fa fa-search" style="color:white;"></i></span><span class="pcoded-mtext">ANALYSIS</span></a>
					</li>
					<li class="nav-item">
						<a href="<?= base_url('admin/seo/seo_view'); ?>" class="nav-link "><span class="pcoded-micon"><i class="fa-solid fa fa-search-plus" style="color:white;"></i></span><span class="pcoded-mtext">SEO</span></a>
					</li>
					<li class="nav-item">
						<a href="<?= base_url('admin/type/type_view'); ?>" class="nav-link "><span class="pcoded-micon"><i class="fa-solid fa fa-bars" style="color:white;"></i></span><span class="pcoded-mtext">TYPE</span></a>
					</li>
					<li class="nav-item">
						<a href="<?= base_url('admin/sub_type/sub_type_view'); ?>" class="nav-link "><span class="pcoded-micon"><i class="fa-solid fa fa-caret-square-down" style="color:white;"></i></span><span class="pcoded-mtext">SUB TYPE</span></a>
					</li>
					<li class="nav-item">
						<a href="<?= base_url('admin/news_type/news_type_view'); ?>" class="nav-link "><span class="pcoded-micon"><i class="fa-solid fa fa-envelope" style="color:white;"></i></span><span class="pcoded-mtext">NEWS TYPE</span></a>
					</li>
					<li class="nav-item">
						<a href="<?= base_url('admin/author_role/author_role_view'); ?>" class="nav-link "><span class="pcoded-micon"><i class="fa-solid fa fa-user" style="color:white;"></i></span><span class="pcoded-mtext">AUTHOR ROLE</span></a>
					</li>
					<li class="nav-item">
						<a href="<?= base_url('admin/author/author_view'); ?>" class="nav-link "><span class="pcoded-micon"><i class="fa-solid fa fa-user" style="color:white;"></i></span><span class="pcoded-mtext">AUTHOR</span></a>
					</li>
					<li class="nav-item">
						<a href="<?= base_url('admin/signal_manager_profile/signal_manager_profile_view'); ?>" class="nav-link "><span class="pcoded-micon"><i class="fa-solid fa fa-user" style="color:white;"></i></span><span class="pcoded-mtext">SIGNAL MANAGER PROFILE</span></a>
					</li>
					<li class="nav-item">
						<a href="<?= base_url('admin/author_profile/author_profile_view'); ?>" class="nav-link "><span class="pcoded-micon"><i class="fa-solid fa fa-user" style="color:white;"></i></span><span class="pcoded-mtext">AUTHOR PROFILE</span></a>
					</li>
					<li class="nav-item">
						<a href="<?= base_url('admin/author_pricing/author_pricing_view'); ?>" class="nav-link "><span class="pcoded-micon"><i class="fa-solid fa fa-tags" style="color:white;"></i></span><span class="pcoded-mtext">AUTHOR PRICING</span></a>
					</li>
					<li class="nav-item">
						<a href="<?= base_url('admin/author_pricing_features/author_pricing_features_view'); ?>" class="nav-link "><span class="pcoded-micon"><i class="fa-solid fa fa-cogs" style="color:white;"></i></span><span class="pcoded-mtext">AUTHOR PRICING FEATURES</span></a>
					</li>
					<li class="nav-item">
						<a href="<?= base_url('admin/currency_pair/currency_pair_view'); ?>" class="nav-link "><span class="pcoded-micon"><i class="fa-solid fa fa-user" style="color:white;"></i></span><span class="pcoded-mtext">CURRENCY PAIR</span></a>
					</li>
					<li class="nav-item">
						<a href="<?= base_url('admin/trading_signals/trading_signals_view'); ?>" class="nav-link "><span class="pcoded-micon"><i class="fa-solid fa fa-signal" style="color:white;"></i></span><span class="pcoded-mtext">TRADING SIGNAL</span></a>
					</li>
					<li class="nav-item">
						<a href="<?= base_url('admin/live_rate/live_rate_view'); ?>" class="nav-link "><span class="pcoded-micon"><i class="fa-solid fa fa-percent" style="color:white;"></i></span><span class="pcoded-mtext">LIVE RATE</span></a>
					</li>
					<li class="nav-item">
						<a href="<?= base_url('admin/enquiry/enquiry_view'); ?>" class="nav-link "><span class="pcoded-micon"><i class="fa-solid fa fa-envelope" style="color:white;"></i></span><span class="pcoded-mtext">ENQUIRY</span></a>
					</li>
					<li class="nav-item">
						<a href="<?= base_url('admin/signal_manager/signal_manager_view'); ?>" class="nav-link "><span class="pcoded-micon"><i class="fa-solid fa fa-search-plus" style="color:white;"></i></span><span class="pcoded-mtext">SIGNAL MANAGER</span></a>
					</li>
					<li class="nav-item">
						<a href="<?= base_url('admin/broker/broker_view'); ?>" class="nav-link "><span class="pcoded-micon"><i class="fa-solid fa fa-search-plus" style="color:white;"></i></span><span class="pcoded-mtext">BROKER</span></a>
					</li>
					<li class="nav-item">
						<a href="<?= base_url('admin/broker_detail/broker_detail_view'); ?>" class="nav-link "><span class="pcoded-micon"><i class="fa-solid fa fa-newspaper" style="color:white;"></i></span><span class="pcoded-mtext">BROKER DETAIL</span></a>
					</li>
					<li class="nav-item">
						<a href="<?= base_url('admin/forecast/forecast_view'); ?>" class="nav-link "><span class="pcoded-micon"><i class="fa-solid fa fa-search-plus" style="color:white;"></i></span><span class="pcoded-mtext">FORECAST</span></a>
					</li>
					<li class="nav-item">
						<a href="<?= base_url('admin/market_primer/market_primer_view'); ?>" class="nav-link "><span class="pcoded-micon"><i class="fa-solid fa fa-search-plus" style="color:white;"></i></span><span class="pcoded-mtext">MARKET PRIMER</span></a>
					</li>
				<?php endif; ?>


				<!-- editor panel -->
				<?php if ($this->session->userdata('role') === '3') : ?>
					<li class="nav-item">
						<a href="<?= base_url('admin/author_profile/author_profile_view'); ?>" class="nav-link "><span class="pcoded-micon"><i class="fa-solid fa fa-user" style="color:white;"></i></span><span class="pcoded-mtext">AUTHOR PROFILE</span></a>
					</li>
					<li class="nav-item">
						<a href="<?= base_url('admin/news/news_view'); ?>" class="nav-link "><span class="pcoded-micon"><i class="fa-solid fa fa-newspaper" style="color:white;"></i></span><span class="pcoded-mtext">NEWS</span></a>
					</li>
					<li class="nav-item">
						<a href="<?= base_url('admin/news_category/news_category_view'); ?>" class="nav-link "><span class="pcoded-micon"><i class="fa-solid fa fa-th-list" style="color:white;"></i></span><span class="pcoded-mtext">NEWS CATEGORY</span></a>
					</li>
					<li class="nav-item">
						<a href="<?= base_url('admin/news_sub_category/news_sub_category_view'); ?>" class="nav-link "><span class="pcoded-micon"><i class="fa-solid fa fa-folder-open" style="color:white;"></i></span><span class="pcoded-mtext">NEWS SUB CATEGORY</span></a>
					</li>
					<li class="nav-item">
						<a href="<?= base_url('admin/blog_category/blog_category_view'); ?>" class="nav-link "><span class="pcoded-micon"><i class="fa-solid fa fa-pencil-alt" style="color:white;"></i></span><span class="pcoded-mtext">BLOG CATEGORY</span></a>
					</li>
					<li class="nav-item">
						<a href="<?= base_url('admin/blog/blog_view'); ?>" class="nav-link "><span class="pcoded-micon"><i class="fa-solid fa fa-blog" style="color:white;"></i></span><span class="pcoded-mtext">BLOGS</span></a>
					</li>
					<li class="nav-item">
						<a href="<?= base_url('admin/seo/seo_view'); ?>" class="nav-link "><span class="pcoded-micon"><i class="fa-solid fa fa-search-plus" style="color:white;"></i></span><span class="pcoded-mtext">SEO</span></a>
					</li>
					<li class="nav-item">
						<a href="<?= base_url('admin/author/author_view'); ?>" class="nav-link "><span class="pcoded-micon"><i class="fa-solid fa fa-user" style="color:white;"></i></span><span class="pcoded-mtext">AUTHOR</span></a>
					</li>
					
				<?php endif; ?>

				<!-- AUTHOR PANEL -->

				<?php if ($this->session->userdata('role') === '4') : ?>
					<li class="nav-item">
						<a href="<?= base_url('admin/author_profile/author_profile_view'); ?>" class="nav-link "><span class="pcoded-micon"><i class="fa-solid fa fa-user" style="color:white;"></i></span><span class="pcoded-mtext">AUTHOR PROFILE</span></a>
					</li>
					<li class="nav-item">
						<a href="<?= base_url('admin/news/news_view'); ?>" class="nav-link "><span class="pcoded-micon"><i class="fa-solid fa fa-newspaper" style="color:white;"></i></span><span class="pcoded-mtext">NEWS</span></a>
					</li>
					<li class="nav-item">
						<a href="<?= base_url('admin/news_category/news_category_view'); ?>" class="nav-link "><span class="pcoded-micon"><i class="fa-solid fa fa-th-list" style="color:white;"></i></span><span class="pcoded-mtext">NEWS CATEGORY</span></a>
					</li>
					<li class="nav-item">
						<a href="<?= base_url('admin/news_sub_category/news_sub_category_view'); ?>" class="nav-link "><span class="pcoded-micon"><i class="fa-solid fa fa-folder-open" style="color:white;"></i></span><span class="pcoded-mtext">NEWS SUB CATEGORY</span></a>
					</li>
					<li class="nav-item">
						<a href="<?= base_url('admin/blog_category/blog_category_view'); ?>" class="nav-link "><span class="pcoded-micon"><i class="fa-solid fa fa-pencil-alt" style="color:white;"></i></span><span class="pcoded-mtext">BLOG CATEGORY</span></a>
					</li>
					<li class="nav-item">
						<a href="<?= base_url('admin/blog/blog_view'); ?>" class="nav-link "><span class="pcoded-micon"><i class="fa-solid fa fa-blog" style="color:white;"></i></span><span class="pcoded-mtext">BLOGS</span></a>
					</li>
				<?php endif; ?>


				<!-- SIGNAL MANAGER -->

				<?php if ($this->session->userdata('role') === '6') : ?>
					<li class="nav-item">
						<a href="<?= base_url('admin/signal_manager/signal_manager_view'); ?>" class="nav-link "><span class="pcoded-micon"><i class="fa-solid fa fa-user" style="color:white;"></i></span><span class="pcoded-mtext">SIGNAL MANAGER</span></a>
					</li>
					<li class="nav-item">
						<a href="<?= base_url('admin/currency_pair/currency_pair_view'); ?>" class="nav-link "><span class="pcoded-micon"><i class="fa-solid fa fa-user" style="color:white;"></i></span><span class="pcoded-mtext">CURRENCY PAIR</span></a>
					</li>
					<li class="nav-item">
						<a href="<?= base_url('admin/signal/signal_view'); ?>" class="nav-link "><span class="pcoded-micon"><i class="fa-solid fa fa-signal" style="color:white;"></i></span><span class="pcoded-mtext">SIGNAL</span></a>
					</li>
					<li class="nav-item">
						<a href="<?= base_url('admin/trading_signals/trading_signals_view'); ?>" class="nav-link "><span class="pcoded-micon"><i class="fa-solid fa fa-signal" style="color:white;"></i></span><span class="pcoded-mtext">TRADING SIGNAL</span></a>
					</li>
					<li class="nav-item">
						<a href="<?= base_url('admin/market_primer/market_primer_view'); ?>" class="nav-link "><span class="pcoded-micon"><i class="fa-solid fa fa-search-plus" style="color:white;"></i></span><span class="pcoded-mtext">MARKET PRIMER</span></a>
					</li>
					
				<?php endif; ?>

				<!-- MANAGER -->
				<?php if ($this->session->userdata('role') === '7') : ?>
					<li class="nav-item">
						<a href="<?= base_url('admin/signal_manager/signal_manager_view'); ?>" class="nav-link "><span class="pcoded-micon"><i class="fa-solid fa fa-user" style="color:white;"></i></span><span class="pcoded-mtext">SIGNAL MANAGER</span></a>
					</li>
					<li class="nav-item">
						<a href="<?= base_url('admin/currency_pair/currency_pair_view'); ?>" class="nav-link "><span class="pcoded-micon"><i class="fa-solid fa fa-user" style="color:white;"></i></span><span class="pcoded-mtext">CURRENCY PAIR</span></a>
					</li>
					<li class="nav-item">
						<a href="<?= base_url('admin/signal/signal_view'); ?>" class="nav-link "><span class="pcoded-micon"><i class="fa-solid fa fa-signal" style="color:white;"></i></span><span class="pcoded-mtext">SIGNAL</span></a>
					</li>
					<li class="nav-item">
						<a href="<?= base_url('admin/trading_signals/trading_signals_view'); ?>" class="nav-link "><span class="pcoded-micon"><i class="fa-solid fa fa-signal" style="color:white;"></i></span><span class="pcoded-mtext">TRADING SIGNAL</span></a>
					</li>
					<li class="nav-item">
						<a href="<?= base_url('admin/signal_manager_profile/signal_manager_profile_view'); ?>" class="nav-link "><span class="pcoded-micon"><i class="fa-solid fa fa-user" style="color:white;"></i></span><span class="pcoded-mtext">SIGNAL MANAGER PROFILE</span></a>
					</li>
					<li class="nav-item">
						<a href="<?= base_url('admin/news/news_view'); ?>" class="nav-link "><span class="pcoded-micon"><i class="fa-solid fa fa-newspaper" style="color:white;"></i></span><span class="pcoded-mtext">NEWS</span></a>
					</li>
					<li class="nav-item">
						<a href="<?= base_url('admin/news_category/news_category_view'); ?>" class="nav-link "><span class="pcoded-micon"><i class="fa-solid fa fa-th-list" style="color:white;"></i></span><span class="pcoded-mtext">NEWS CATEGORY</span></a>
					</li>
					<li class="nav-item">
						<a href="<?= base_url('admin/news_sub_category/news_sub_category_view'); ?>" class="nav-link "><span class="pcoded-micon"><i class="fa-solid fa fa-folder-open" style="color:white;"></i></span><span class="pcoded-mtext">NEWS SUB CATEGORY</span></a>
					</li>
					<li class="nav-item">
						<a href="<?= base_url('admin/blog_category/blog_category_view'); ?>" class="nav-link "><span class="pcoded-micon"><i class="fa-solid fa fa-pencil-alt" style="color:white;"></i></span><span class="pcoded-mtext">BLOG CATEGORY</span></a>
					</li>
					<li class="nav-item">
						<a href="<?= base_url('admin/blog/blog_view'); ?>" class="nav-link "><span class="pcoded-micon"><i class="fa-solid fa fa-blog" style="color:white;"></i></span><span class="pcoded-mtext">BLOGS</span></a>
					</li>
					<li class="nav-item">
						<a href="<?= base_url('admin/seo/seo_view'); ?>" class="nav-link "><span class="pcoded-micon"><i class="fa-solid fa fa-search-plus" style="color:white;"></i></span><span class="pcoded-mtext">SEO</span></a>
					</li>
					<li class="nav-item">
						<a href="<?= base_url('admin/market_primer/market_primer_view'); ?>" class="nav-link "><span class="pcoded-micon"><i class="fa-solid fa fa-search-plus" style="color:white;"></i></span><span class="pcoded-mtext">MARKET PRIMER</span></a>
					</li>
				<?php endif; ?>
			</ul>
		</div>
	</div>
</nav>