<?php
defined('BASEPATH') or exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
$route['default_controller'] = 'welcome';

// setting route for admin
$route['admin'] = 'admin/auth';

$route['admin/dashboard2'] = 'admin/dashboard/index2';

$route['adminlte'] = 'admin/auth';
$route['adminlte/(:any)'] = 'admin/adminlte/$1';

$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;



// news ****************
$route['news/add_news'] = 'admin/news/add_news';
$route['news/news_submit_data'] = 'admin/news/news_submit_data';
$route['news/view_news']        = 'admin/news/news_view';
$route['news/edit_news/(:any)'] = 'admin/news/news_edit/$1';
$route['news/news_update_data'] = 'admin/news/news_update_data';
$route['news/news_delete/(:any)'] = 'admin/news/news_delete/$1';

// news_category ****************
$route['news_category/add_news_category'] = 'admin/news_category/add_news_category';
$route['news_category/news_category_submit_data'] = 'admin/news_category/news_category_submit_data';
$route['news_category/view_news_category']        = 'admin/news_category/news_category_view';
$route['news_category/edit_news_category/(:any)'] = 'admin/news_category/news_category_edit/$1';
$route['news_category/news_category_update_data'] = 'admin/news_category/news_category_update_data';
$route['news_category/news_category_delete/(:any)'] = 'admin/news_category/news_category_delete/$1';

// news ****************
$route['news_sub_category/add_news_sub_category'] = 'admin/news_sub_category/add_news_sub_category';
$route['news_sub_category/news_sub_category_submit_data'] = 'admin/news_sub_category/news_sub_category_submit_data';
$route['news_sub_category/view_news_sub_category']        = 'admin/news_sub_category/news_sub_category_view';
$route['news_sub_category/edit_news_sub_category/(:any)'] = 'admin/news_sub_category/news_sub_category_edit/$1';
$route['news_sub_category/news_sub_category_update_data'] = 'admin/news_sub_category/news_sub_category_update_data';
$route['news_sub_category/news_sub_category_delete/(:any)'] = 'admin/news_sub_category/news_sub_category_delete/$1';

// calender ****************
$route['calender/add_calender'] = 'admin/calender/add_calender';
$route['calender/calender_submit_data'] = 'admin/calender/calender_submit_data';
$route['calender/view_calender']        = 'admin/calender/calender_view';
$route['calender/edit_calender/(:any)'] = 'admin/calender/calender_edit/$1';
$route['calender/calender_update_data'] = 'admin/calender/calender_update_data';
$route['calender/calender_delete/(:any)'] = 'admin/calender/calender_delete/$1';

// economic_calender ****************
$route['economic_calender/add_economic_calender'] = 'admin/economic_calender/add_economic_calender';
$route['economic_calender/economic_calender_submit_data'] = 'admin/economic_calender/economic_calender_submit_data';
$route['economic_calender/view_economic_calender']        = 'admin/economic_calender/economic_calender_view';
$route['economic_calender/edit_economic_calender/(:any)'] = 'admin/economic_calender/economic_calender_edit/$1';
$route['economic_calender/economic_calender_update_data'] = 'admin/economic_calender/economic_calender_update_data';
$route['economic_calender/economic_calender_delete/(:any)'] = 'admin/economic_calender/economic_calender_delete/$1';

// charts ****************
$route['charts/add_charts'] = 'admin/charts/add_charts';
$route['charts/charts_submit_data'] = 'admin/charts/charts_submit_data';
$route['charts/view_charts']        = 'admin/charts/charts_view';
$route['charts/edit_charts/(:any)'] = 'admin/charts/charts_edit/$1';
$route['charts/charts_update_data'] = 'admin/charts/charts_update_data';
$route['charts/charts_delete/(:any)'] = 'admin/charts/charts_delete/$1';

// event ****************
$route['event/add_event'] = 'admin/event/add_event';
$route['event/event_submit_data'] = 'admin/event/event_submit_data';
$route['event/view_event']        = 'admin/event/event_view';
$route['event/edit_event/(:any)'] = 'admin/event/event_edit/$1';
$route['event/event_update_data'] = 'admin/event/event_update_data';
$route['event/event_delete/(:any)'] = 'admin/event/event_delete/$1';

// menu ****************
$route['menu/add_menu'] = 'admin/menu/add_menu';
$route['menu/menu_submit_data'] = 'admin/menu/menu_submit_data';
$route['menu/view_menu']        = 'admin/menu/menu_view';
$route['menu/edit_menu/(:any)'] = 'admin/menu/menu_edit/$1';
$route['menu/menu_update_data'] = 'admin/menu/menu_update_data';
$route['menu/menu_delete/(:any)'] = 'admin/menu/menu_delete/$1';

// sub_menu ****************
$route['sub_menu/add_sub_menu'] = 'admin/sub_menu/add_sub_menu';
$route['sub_menu/sub_menu_submit_data'] = 'admin/sub_menu/sub_menu_submit_data';
$route['sub_menu/view_sub_menu']        = 'admin/sub_menu/sub_menu_view';
$route['sub_menu/edit_sub_menu/(:any)'] = 'admin/sub_menu/sub_menu_edit/$1';
$route['sub_menu/sub_menu_update_data'] = 'admin/sub_menu/sub_menu_update_data';
$route['sub_menu/sub_menu_delete/(:any)'] = 'admin/sub_menu/sub_menu_delete/$1';

// sub_sub_menu ****************
$route['sub_sub_menu/add_sub_sub_menu'] = 'admin/sub_sub_menu/add_sub_sub_menu';
$route['sub_sub_menu/sub_sub_menu_submit_data'] = 'admin/sub_sub_menu/sub_sub_menu_submit_data';
$route['sub_sub_menu/view_sub_sub_menu']        = 'admin/sub_sub_menu/sub_sub_menu_view';
$route['sub_sub_menu/edit_sub_sub_menu/(:any)'] = 'admin/sub_sub_menu/sub_sub_menu_edit/$1';
$route['sub_sub_menu/sub_sub_menu_update_data'] = 'admin/sub_sub_menu/sub_sub_menu_update_data';
$route['sub_sub_menu/sub_sub_menu_delete/(:any)'] = 'admin/sub_sub_menu/sub_sub_menu_delete/$1';

// advertisement ****************
$route['advertisement/add_advertisement'] = 'admin/advertisement/add_advertisement';
$route['advertisement/advertisement_submit_data'] = 'admin/advertisement/advertisement_submit_data';
$route['advertisement/view_advertisement']        = 'admin/advertisement/advertisement_view';
$route['advertisement/edit_advertisement/(:any)'] = 'admin/advertisement/advertisement_edit/$1';
$route['advertisement/advertisement_update_data'] = 'admin/advertisement/advertisement_update_data';
$route['advertisement/advertisement_delete/(:any)'] = 'admin/advertisement/advertisement_delete/$1';

// contact_us ****************
$route['contact_us/add_contact_us'] = 'admin/contact_us/add_contact_us';
$route['contact_us/contact_us_submit_data'] = 'admin/contact_us/contact_us_submit_data';
$route['contact_us/view_contact_us']        = 'admin/contact_us/contact_us_view';
$route['contact_us/edit_contact_us/(:any)'] = 'admin/contact_us/contact_us_edit/$1';
$route['contact_us/contact_us_update_data'] = 'admin/contact_us/contact_us_update_data';
$route['contact_us/contact_us_delete/(:any)'] = 'admin/contact_us/contact_us_delete/$1';

// blog ****************
$route['blog/add_blog'] = 'admin/blog/add_blog';
$route['blog/blog_submit_data'] = 'admin/blog/blog_submit_data';
$route['blog/view_blog']        = 'admin/blog/blog_view';
$route['blog/edit_blog/(:any)'] = 'admin/blog/blog_edit/$1';
$route['blog/blog_update_data'] = 'admin/blog/blog_update_data';
$route['blog/blog_delete/(:any)'] = 'admin/blog/blog_delete/$1';

// blog_category ****************
$route['blog_category/add_blog_category'] = 'admin/blog_category/add_blog_category';
$route['blog_category/blog_category_submit_data'] = 'admin/blog_category/blog_category_submit_data';
$route['blog_category/view_blog_category']        = 'admin/blog_category/blog_category_view';
$route['blog_category/edit_blog_category/(:any)'] = 'admin/blog_category/blog_category_edit/$1';
$route['blog_category/blog_category_update_data'] = 'admin/blog_category/blog_category_update_data';
$route['blog_category/blog_category_delete/(:any)'] = 'admin/blog_category/blog_category_delete/$1';

// pricing ****************
$route['pricing/add_pricing'] = 'admin/pricing/add_pricing';
$route['pricing/pricing_submit_data'] = 'admin/pricing/pricing_submit_data';
$route['pricing/view_pricing']        = 'admin/pricing/pricing_view';
$route['pricing/edit_pricing/(:any)'] = 'admin/pricing/pricing_edit/$1';
$route['pricing/pricing_update_data'] = 'admin/pricing/pricing_update_data';
$route['pricing/pricing_delete/(:any)'] = 'admin/pricing/pricing_delete/$1';

// pricing_features ****************
$route['pricing_features/add_pricing_features'] = 'admin/pricing_features/add_pricing_features';
$route['pricing_features/pricing_features_submit_data'] = 'admin/pricing_features/pricing_features_submit_data';
$route['pricing_features/view_pricing_features']        = 'admin/pricing_features/pricing_features_view';
$route['pricing_features/edit_pricing_features/(:any)'] = 'admin/pricing_features/pricing_features_edit/$1';
$route['pricing_features/pricing_features_update_data'] = 'admin/pricing_features/pricing_features_update_data';
$route['pricing_features/pricing_features_delete/(:any)'] = 'admin/pricing_features/pricing_features_delete/$1';

// signal ****************
$route['signal/add_signal'] = 'admin/signal/add_signal';
$route['signal/signal_submit_data'] = 'admin/signal/signal_submit_data';
$route['signal/view_signal']        = 'admin/signal/signal_view';
$route['signal/edit_signal/(:any)'] = 'admin/signal/signal_edit/$1';
$route['signal/signal_update_data'] = 'admin/signal/signal_update_data';
$route['signal/signal_delete/(:any)'] = 'admin/signal/signal_delete/$1';

// learn ****************
$route['learn/add_learn'] = 'admin/learn/add_learn';
$route['learn/learn_submit_data'] = 'admin/learn/learn_submit_data';
$route['learn/view_learn']        = 'admin/learn/learn_view';
$route['learn/edit_learn/(:any)'] = 'admin/learn/learn_edit/$1';
$route['learn/learn_update_data'] = 'admin/learn/learn_update_data';
$route['learn/learn_delete/(:any)'] = 'admin/learn/learn_delete/$1';

// trade ****************
$route['trade/add_trade'] = 'admin/trade/add_trade';
$route['trade/trade_submit_data'] = 'admin/trade/trade_submit_data';
$route['trade/view_trade']        = 'admin/trade/trade_view';
$route['trade/edit_trade/(:any)'] = 'admin/trade/trade_edit/$1';
$route['trade/trade_update_data'] = 'admin/trade/trade_update_data';
$route['trade/trade_delete/(:any)'] = 'admin/trade/trade_delete/$1';

// analysis ****************
$route['analysis/add_analysis'] = 'admin/analysis/add_analysis';
$route['analysis/analysis_submit_data'] = 'admin/analysis/analysis_submit_data';
$route['analysis/view_analysis']        = 'admin/analysis/analysis_view';
$route['analysis/edit_analysis/(:any)'] = 'admin/analysis/analysis_edit/$1';
$route['analysis/analysis_update_data'] = 'admin/analysis/analysis_update_data';
$route['analysis/analysis_delete/(:any)'] = 'admin/analysis/analysis_delete/$1';

// seo ****************
$route['seo/add_seo'] = 'admin/seo/add_seo';
$route['seo/seo_submit_data'] = 'admin/seo/seo_submit_data';
$route['seo/view_seo']        = 'admin/seo/seo_view';
$route['seo/edit_seo/(:any)'] = 'admin/seo/seo_edit/$1';
$route['seo/seo_update_data'] = 'admin/seo/seo_update_data';
$route['seo/seo_delete/(:any)'] = 'admin/seo/seo_delete/$1';

// type ****************
$route['type/add_type'] = 'admin/type/add_type';
$route['type/type_submit_data'] = 'admin/type/type_submit_data';
$route['type/view_type']        = 'admin/type/type_view';
$route['type/edit_type/(:any)'] = 'admin/type/type_edit/$1';
$route['type/type_update_data'] = 'admin/type/type_update_data';
$route['type/type_delete/(:any)'] = 'admin/type/type_delete/$1';

// sub_type ****************
$route['sub_type/add_sub_type'] = 'admin/sub_type/add_sub_type';
$route['sub_type/sub_type_submit_data'] = 'admin/sub_type/sub_type_submit_data';
$route['sub_type/view_sub_type']        = 'admin/sub_type/sub_type_view';
$route['sub_type/edit_sub_type/(:any)'] = 'admin/sub_type/sub_type_edit/$1';
$route['sub_type/sub_type_update_data'] = 'admin/sub_type/sub_type_update_data';
$route['sub_type/sub_type_delete/(:any)'] = 'admin/sub_type/sub_type_delete/$1';

// news_type ****************
$route['news_type/add_news_type'] = 'admin/news_type/add_news_type';
$route['news_type/news_type_submit_data'] = 'admin/news_type/news_type_submit_data';
$route['news_type/view_news_type']        = 'admin/news_type/news_type_view';
$route['news_type/edit_news_type/(:any)'] = 'admin/news_type/news_type_edit/$1';
$route['news_type/news_type_update_data'] = 'admin/news_type/news_type_update_data';
$route['news_type/news_type_delete/(:any)'] = 'admin/news_type/news_type_delete/$1';

// author ****************
$route['author/add_author'] = 'admin/author/add_author';
$route['author/author_submit_data'] = 'admin/author/author_submit_data';
$route['author/view_author']        = 'admin/author/author_view';
$route['author/edit_author/(:any)'] = 'admin/author/author_edit/$1';
$route['author/author_update_data'] = 'admin/author/author_update_data';
$route['author/author_delete/(:any)'] = 'admin/author/author_delete/$1';

// author_role ****************
$route['author_role/add_author_role'] = 'admin/author_role/add_author_role';
$route['author_role/author_role_submit_data'] = 'admin/author_role/author_role_submit_data';
$route['author_role/view_author_role']        = 'admin/author_role/author_role_view';
$route['author_role/edit_author_role/(:any)'] = 'admin/author_role/author_role_edit/$1';
$route['author_role/author_role_update_data'] = 'admin/author_role/author_role_update_data';
$route['author_role/author_role_delete/(:any)'] = 'admin/author_role/author_role_delete/$1';

// author_pricing ****************
$route['author_pricing/add_author_pricing'] = 'admin/author_pricing/add_author_pricing';
$route['author_pricing/author_pricing_submit_data'] = 'admin/author_pricing/author_pricing_submit_data';
$route['author_pricing/view_author_pricing']        = 'admin/author_pricing/author_pricing_view';
$route['author_pricing/edit_author_pricing/(:any)'] = 'admin/author_pricing/author_pricing_edit/$1';
$route['author_pricing/author_pricing_update_data'] = 'admin/author_pricing/author_pricing_update_data';
$route['author_pricing/author_pricing_delete/(:any)'] = 'admin/author_pricing/author_pricing_delete/$1';

// author_pricing_features ****************
$route['author_pricing_features/add_author_pricing_features'] = 'admin/author_pricing_features/add_author_pricing_features';
$route['author_pricing_features/author_pricing_features_submit_data'] = 'admin/author_pricing_features/author_pricing_features_submit_data';
$route['author_pricing_features/view_author_pricing_features']        = 'admin/author_pricing_features/author_pricing_features_view';
$route['author_pricing_features/edit_author_pricing_features/(:any)'] = 'admin/author_pricing_features/author_pricing_features_edit/$1';
$route['author_pricing_features/author_pricing_features_update_data'] = 'admin/author_pricing_features/author_pricing_features_update_data';
$route['author_pricing_features/author_pricing_features_delete/(:any)'] = 'admin/author_pricing_features/author_pricing_features_delete/$1';

// currency_pair ****************
$route['currency_pair/add_currency_pair'] = 'admin/currency_pair/add_currency_pair';
$route['currency_pair/currency_pair_submit_data'] = 'admin/currency_pair/currency_pair_submit_data';
$route['currency_pair/view_currency_pair']        = 'admin/currency_pair/currency_pair_view';
$route['currency_pair/edit_currency_pair/(:any)'] = 'admin/currency_pair/currency_pair_edit/$1';
$route['currency_pair/currency_pair_update_data'] = 'admin/currency_pair/currency_pair_update_data';
$route['currency_pair/currency_pair_delete/(:any)'] = 'admin/currency_pair/currency_pair_delete/$1';

// trading_signals ****************
$route['trading_signals/add_trading_signals'] = 'admin/trading_signals/add_trading_signals';
$route['trading_signals/trading_signals_submit_data'] = 'admin/trading_signals/trading_signals_submit_data';
$route['trading_signals/view_trading_signals']        = 'admin/trading_signals/trading_signals_view';
$route['trading_signals/edit_trading_signals/(:any)'] = 'admin/trading_signals/trading_signals_edit/$1';
$route['trading_signals/trading_signals_update_data'] = 'admin/trading_signals/trading_signals_update_data';
$route['trading_signals/trading_signals_delete/(:any)'] = 'admin/trading_signals/trading_signals_delete/$1';

// payment ****************
$route['payment/add_payment'] = 'admin/payment/add_payment';
$route['payment/payment_submit_data'] = 'admin/payment/payment_submit_data';
$route['payment/view_payment']        = 'admin/payment/payment_view';
$route['payment/edit_payment/(:any)'] = 'admin/payment/payment_edit/$1';
$route['payment/payment_update_data'] = 'admin/payment/payment_update_data';
$route['payment/payment_delete/(:any)'] = 'admin/payment/payment_delete/$1';

// live_rate ****************
$route['live_rate/add_live_rate'] = 'admin/live_rate/add_live_rate';
$route['live_rate/live_rate_submit_data'] = 'admin/live_rate/live_rate_submit_data';
$route['live_rate/view_live_rate']        = 'admin/live_rate/live_rate_view';
$route['live_rate/edit_live_rate/(:any)'] = 'admin/live_rate/live_rate_edit/$1';
$route['live_rate/live_rate_update_data'] = 'admin/live_rate/live_rate_update_data';
$route['live_rate/live_rate_delete/(:any)'] = 'admin/live_rate/live_rate_delete/$1';







/* API */
$route['api/register'] = 'api/User/register';
$route['api/login'] = 'api/User/login';
$route['api/logout'] = 'api/User/logout';
$route['reGenToken'] = 'api/Token/reGenToken';
$route['news_api/news'] = 'news_api/news_get';
$route['news_api/news_by_id'] = 'news_api/news_by_id_get';
$route['news_api/add_to_wishlist'] = 'news_api/add_to_wishlist';
$route['news_api/remove_from_wishlist/(:num)/(:num)'] = 'news_api/remove_from_wishlist/$1/$2';
$route['news_api/get_wishlist_by_user/(:num)'] = 'news_api/get_wishlist_by_user/$1';
$route['news_api/news_by_category'] = 'news_api/news_by_category_get';
$route['api/update_profile'] = 'api/User/update_profile';
$route['news_api/current_user/(:num)'] = 'news_api/current_user_get/$1';
$route['event_api/event'] = 'event_api/event_get';
$route['event_api/event_by_id/(:num)'] = 'event_api/event_by_id_get/$1';
$route['menu_api/menu'] = 'menu_api/menu_get';
$route['menu_api/menu_by_id/(:num)'] = 'menu_api/menu_by_id_get/$1';
$route['menu_api/submenu/(:num)'] = 'menu_api/submenu_get/$1';
$route['menu_api/sub_submenu/(:num)/(:num)'] = 'menu_api/sub_submenu_get/$1/$2';
$route['menus_api/all_menu'] = 'menus_api/menu_by_all_get';
$route['chart_api/chart'] = 'chart_api/chart_get';
$route['chart_api/chart_by_id/(:num)'] = 'chart_api/chart_by_id_get/$1';
$route['advertisement_api/advertisement'] = 'advertisement_api/advertisement_get';
$route['advertisement_api/advertisement_by_id/(:num)'] = 'advertisement_api/advertisement_by_id_get/$1';
$route['advertisement_api/advertisement_by_page'] = 'advertisement_api/advertisement_by_page_get';
$route['contact_us_api/contact_us'] = 'contact_us_api/contact_us_post';
$route['blog_api/blog'] = 'blog_api/blog_get';
$route['blog_api/blog_by_id'] = 'blog_api/blog_by_id_get';
$route['blog_api/blog_by_category'] = 'blog_api/blog_by_category_get';
$route['pricing_api/pricing'] = 'pricing_api/pricing_get';
$route['pricing_api/pricing_by_id'] = 'pricing_api/pricing_by_id_get';
$route['seo_api/seo'] = 'seo_api/seo_get';
$route['seo_api/seo_by_id/(:num)'] = 'seo_api/seo_by_id_get/$1';
$route['seo_api/seo_by_page'] = 'seo_api/seo_by_page_get';
$route['trade_api/trade'] = 'trade_api/trade_get';
$route['trade_api/trade_by_id/(:num)'] = 'trade_api/trade_by_id_get/$1';
$route['trade_api/trade_by_type'] = 'trade_api/trade_by_type_get';
$route['signal_api/signal'] = 'signal_api/signal_get';
$route['signal_api/signal_by_id/(:num)'] = 'signal_api/signal_by_id_get/$1';
$route['signal_api/signal_by_type'] = 'signal_api/signal_by_type_get';
$route['learn_api/learn'] = 'learn_api/learn_get';
$route['learn_api/learn_by_id/(:num)'] = 'learn_api/learn_by_id_get/$1';
$route['learn_api/learn_by_type'] = 'learn_api/learn_by_type_get';
$route['learn_api/learn_by_title'] = 'learn_api/learn_by_title_get';
$route['analysis_api/analysis'] = 'analysis_api/analysis_get'; 
$route['analysis_api/analysis_by_id/(:num)'] = 'analysis_api/analysis_by_id_get/$1';
$route['analysis_api/analysis_by_date'] = 'analysis_api/analysis_by_date_get';
$route['analysis_api/analysis_by_type'] = 'analysis_api/analysis_by_type_get';
$route['trade_api/trade_by_title'] = 'trade_api/trade_by_title_get';
$route['signal_api/signal_by_title'] = 'signal_api/signal_by_title_get';
$route['author_api/register_author'] = 'author_api/register_author_post';
$route['author_api/login_author'] = 'author_api/login_author_post';
$route['author_api/role'] = 'author_api/role_get';
$route['author_api/author_pricing'] = 'author_api/author_pricing_get';
$route['author_api/author_pricing_by_id'] = 'author_api/author_pricing_by_id_get';
$route['trading_signals_api/trading_signals'] = 'trading_signals_api/trading_signals_get';
$route['payment_api/payment'] = 'payment_api/payment_post';
$route['payment_api/author_payment'] = 'payment_api/author_payment_post';
$route['live_rate_api/live_rate_by_page'] = 'live_rate_api/live_rate_by_page_get';