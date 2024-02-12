<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Website extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('admin/Slider_model', 'Slider_model');
        $this->load->model('admin/Blog_Model', 'Blog_Model');
        $this->load->model('admin/Seminar_model', 'Seminar_model');
        $this->load->model('admin/Expo_Model', 'Expo_Model');
        $this->load->model('admin/Certificate_model', 'Certificate_model');
        $this->load->model('admin/Awards_model', 'Awards_model');
        $this->load->model('admin/Expo_Model', 'Expo_Model');
        $this->load->model('admin/NFP_model', 'NFP_model');
        $this->load->model('admin/Contact_model', 'Contact_Model');
        $this->load->model('admin/Contest_model', 'Contest_model');
        $this->load->model('admin/Video_Category_model', 'Video_Category_Model');
        $this->load->model('admin/Video_model', 'Video_model');
        $this->load->model('admin/Career_Detail_model', 'Career_Detail_model');
        $this->load->helper('url');
       
        
    }

    public function index()
    {
        $data['slider_view']=$this->Slider_model->slider_view();
        $data['awards_view']=$this->Awards_model->awards_view();
        $this->load->view('frontend/include/header');
        $this->load->view('frontend/index',$data);
        $this->load->view('frontend/include/footer');

    }

    public function about()
    {
        $this->load->view('frontend/include/header');
        $this->load->view('frontend/about');
        $this->load->view('frontend/include/footer');
    }

    public function regulations()
    {
        $data['certificate_view']=$this->Certificate_model->certificate_view();
        $this->load->view('frontend/include/header');
        $this->load->view('frontend/regulations',$data);
        $this->load->view('frontend/include/footer');
    }
    public function why_trade_forex()
    {
        $this->load->view('frontend/include/header');
        $this->load->view('frontend/why-trade-forex');
        $this->load->view('frontend/include/footer');
    }
    public function expos()
    {
        $data['expo_view']=$this->Expo_Model->expo_view();
        $this->load->view('frontend/include/header');
        $this->load->view('frontend/expos',$data);
        $this->load->view('frontend/include/footer');
    }
    public function videos()
    {
        $data['video_category_view'] = $this->Video_Category_Model->video_category_view();
        $this->load->view('frontend/include/header');
        $this->load->view('frontend/videos',$data);
        $this->load->view('frontend/include/footer');
    }
    public function awards()
    {
        $data['awards_view']=$this->Awards_model->awards_view();
        $this->load->view('frontend/include/header');
        $this->load->view('frontend/awards',$data);
        $this->load->view('frontend/include/footer');
    }
    public function faq()
    {
        $this->load->view('frontend/include/header');
        $this->load->view('frontend/faq');
        $this->load->view('frontend/include/footer');
    }

    public function star_ib_partners_contest()
    {
        $this->load->view('frontend/include/header');
        $this->load->view('frontend/star-ib-partners-contest');
        $this->load->view('frontend/include/footer');
    }

    public function master_ib_star_contest()
    {
        $this->load->view('frontend/include/header');
        $this->load->view('frontend/master-ib-star-contest');
        $this->load->view('frontend/include/footer');
    }

    public function we_are_hiring()
    {
        $data['career_details_view'] = $this->Career_Detail_model->career_details_view();
        $this->load->view('frontend/include/header');
        $this->load->view('frontend/we-are-hiring',$data);
        $this->load->view('frontend/include/footer');

    }
    public function forex()
    {
        $this->load->view('frontend/include/header');
        $this->load->view('frontend/forex');
        $this->load->view('frontend/include/footer');
    }
    public function blog_detail()
    {
        $data['blog_detail_data'] = $this->Blog_Model->blog_detail_data_nm();
        $data['blog_view']=$this->Blog_Model->blog_view();
        $this->load->view('frontend/include/header');
        $this->load->view('frontend/blog-detail',$data);
        $this->load->view('frontend/include/footer');
    }

    public function crypto_currencies()
    {
        $this->load->view('frontend/include/header');
        $this->load->view('frontend/crypto-currencies');
        $this->load->view('frontend/include/footer');
    }
    public function commodities()
    {
        $this->load->view('frontend/include/header');
        $this->load->view('frontend/commodities');
        $this->load->view('frontend/include/footer');
    }
    public function trading_conditions()
    {
        $this->load->view('frontend/include/header');
        $this->load->view('frontend/trading-conditions');
        $this->load->view('frontend/include/footer');
    }
    public function indices()
    {
        $this->load->view('frontend/include/header');
        $this->load->view('frontend/indices');
        $this->load->view('frontend/include/footer');
    }
    public function instruments_list()
    {
        $this->load->view('frontend/include/header');
        $this->load->view('frontend/instruments-list');
        $this->load->view('frontend/include/footer');
    }
    public function analytics()
    {
        $this->load->view('frontend/include/header');
        $this->load->view('frontend/analytics');
        $this->load->view('frontend/include/footer');
    }
    public function conversion_rate()
    {
        $this->load->view('frontend/include/header');
        $this->load->view('frontend/conversion-rate');
        $this->load->view('frontend/include/footer');
    }
    public function comparison()
    {
        $this->load->view('frontend/include/header');
        $this->load->view('frontend/comparison');
        $this->load->view('frontend/include/footer');
    }
    public function webinars()
    {
        $this->load->view('frontend/include/header');
        $this->load->view('frontend/webinars');
        $this->load->view('frontend/include/footer');
    }
    public function seminars()
    {
        $data['seminar_view']=$this->Seminar_model->seminar_view();
        $this->load->view('frontend/include/header');
        $this->load->view('frontend/seminars',$data);
        $this->load->view('frontend/include/footer');
    }
    public function economic_calender()
    {
        $this->load->view('frontend/include/header');
        $this->load->view('frontend/economic-calender');
        $this->load->view('frontend/include/footer');
    }
    public function calculator()
    {
        $this->load->view('frontend/include/header');
        $this->load->view('frontend/calculator');
        $this->load->view('frontend/include/footer');
    }
    public function blog()
    {
        $data['blog_view']=$this->Blog_Model->blog_view();
        $this->load->view('frontend/include/header');
        $this->load->view('frontend/blog',$data);
        $this->load->view('frontend/include/footer');
    }
    public function mt5_platform()
    {
        $this->load->view('frontend/include/header');
        $this->load->view('frontend/mt5-platform');
        $this->load->view('frontend/include/footer');
    }
    public function mt4_platform()
    {
        $this->load->view('frontend/include/header');
        $this->load->view('frontend/mt4-platform');
        $this->load->view('frontend/include/footer');
    }
    public function nfp()
    {
        $data['nfp_view']=$this->NFP_model->nfp_view_lt();
        $this->load->view('frontend/include/header');
        $this->load->view('frontend/nfp',$data);
        $this->load->view('frontend/include/footer');
    }
    public function nfp_winners()
    {    $data['nfp_view']=$this->NFP_model->nfp_view();
        $this->load->view('frontend/include/header');
        $this->load->view('frontend/nfp-winners',$data);
        $this->load->view('frontend/include/footer');
    }
    public function local_currencies()
    {
        $this->load->view('frontend/include/header');
        $this->load->view('frontend/local-currencies');
        $this->load->view('frontend/include/footer');
    }
    public function aml_policy()
    {
        $this->load->view('frontend/include/header');
        $this->load->view('frontend/aml-policy');
        $this->load->view('frontend/include/footer');
    }
    public function funding_option()
    {
        $this->load->view('frontend/include/header');
        $this->load->view('frontend/funding-option');
        $this->load->view('frontend/include/footer');
    }
    public function disclaimer()
    {
        $this->load->view('frontend/include/header');
        $this->load->view('frontend/disclaimer');
        $this->load->view('frontend/include/footer');
    }
    public function expo_gallery()
    {
        $data['expo_detail_data'] = $this->Expo_Model->expo_detail_data_nm();
        $data['expo_view']=$this->Expo_Model->expo_view();
        $this->load->view('frontend/include/header');
        $this->load->view('frontend/expo-gallery',$data);
        $this->load->view('frontend/include/footer');
    }
    public function kyc_policy()
    {
        $this->load->view('frontend/include/header');
        $this->load->view('frontend/kyc-policy');
        $this->load->view('frontend/include/footer');
    }
    public function market_news()
    {
        $this->load->view('frontend/include/header');
        $this->load->view('frontend/market-news');
        $this->load->view('frontend/include/footer');
    }
    public function privacy_policy()
    {
        $this->load->view('frontend/include/header');
        $this->load->view('frontend/privacy-policy');
        $this->load->view('frontend/include/footer');
    }
    public function refund_policy()
    {
        $this->load->view('frontend/include/header');
        $this->load->view('frontend/refund-policy');
        $this->load->view('frontend/include/footer');
    }
    public function risk_disclosure()
    {
        $this->load->view('frontend/include/header');
        $this->load->view('frontend/risk-disclosure');
        $this->load->view('frontend/include/footer');
    }
    public function why_choose_use()
    {
        $this->load->view('frontend/include/header');
        $this->load->view('frontend/why-choose-use');
        $this->load->view('frontend/include/footer');
    }
    public function contact_us()
    {
        $this->load->view('frontend/include/header');
        $this->load->view('frontend/contact-us');
        $this->load->view('frontend/include/footer');
    }

    public function account_types()
    {
        $this->load->view('frontend/include/header');
        $this->load->view('frontend/account-types');
        $this->load->view('frontend/include/footer');
    }
    public function copytrade()
    {
        $this->load->view('frontend/include/header');
        $this->load->view('frontend/copytrade');
        $this->load->view('frontend/include/footer');
    }
    public function withdraw_funding()
    {
        $this->load->view('frontend/include/header');
        $this->load->view('frontend/withdraw-funding');
        $this->load->view('frontend/include/footer');
    }
    public function pamm()
    {
        $this->load->view('frontend/include/header');
        $this->load->view('frontend/pamm');
        $this->load->view('frontend/include/footer');
    }
    public function zulutrade()
    {
        $this->load->view('frontend/include/header');
        $this->load->view('frontend/zulutrade');
        $this->load->view('frontend/include/footer');
    }
    public function why_choose_us()
    {
        $this->load->view('frontend/include/header');
        $this->load->view('frontend/why-choose-us');
        $this->load->view('frontend/include/footer');
    }
    public function trading_strategies()
    {
        $this->load->view('frontend/include/header');
        $this->load->view('frontend/trading-strategies');
        $this->load->view('frontend/include/footer');
    }
    public function seminar_gallery()
    {
       
        $data['semi_detail_data'] = $this->Seminar_model->seminar_detail_data_nm();
       
        $this->load->view('frontend/include/header');
        $this->load->view('frontend/seminar-gallery',$data);
        $this->load->view('frontend/include/footer');
    } 
    public function trading_central()
    {
        $this->load->view('frontend/include/header');
        $this->load->view('frontend/trading-central');
        $this->load->view('frontend/include/footer');
    } 
    
    public function chat_faq()
    {
        $this->load->view('frontend/include/header');
        $this->load->view('frontend/chat_faq');
        $this->load->view('frontend/include/footer');
    } 
    public function submit_form()
    {
        $data = [];
        if ($this->input->post()) {
            $data = $this->input->post();
            if ($this->Contact_Model->contact_submit_data($data) == true) {
                ?>
                <script type="text/javascript">
                    alert("Submit Successfully");
                   
                        window.location.href = "<?php echo base_url(); ?>";
                   
                </script>
                <?php
                exit; 
            }
        }
    
        
    }


    public function contest_submit_data()
    { 
        $data = [];
        
        if ($this->input->post()) {
       
            if ($this->Contest_model->contest_submit_data($data) == true) {
                ?>
                <script type="text/javascript">
                    alert("Submit Successfully");
                   
                        window.location.href = "<?php echo base_url(); ?>";
                   
                </script>
                <?php
                exit; 
            }
        }
    }
}
?>

<script>
    // Disable right-click
// document.addEventListener('contextmenu', (e) => e.preventDefault());

function ctrlShiftKey(e, keyCode) {
  return e.ctrlKey && e.shiftKey && e.keyCode === keyCode.charCodeAt(0);
}

document.onkeydown = (e) => {
  // Disable F12, Ctrl + Shift + I, Ctrl + Shift + J, Ctrl + U
  if (
    event.keyCode === 123 ||
    ctrlShiftKey(e, 'I') ||
    ctrlShiftKey(e, 'J') ||
    ctrlShiftKey(e, 'C') ||
    (e.ctrlKey && e.keyCode === 'U'.charCodeAt(0))
  )
    return false;
};
</script>