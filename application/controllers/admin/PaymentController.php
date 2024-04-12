<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PaymentController extends CI_Controller {

    public function __construct() {
        parent::__construct();
        // Load MyFatoorah library
        $this->load->library('myfatoorah');
    }

    public function index() {
        // Load any necessary views or perform necessary operations here
        // For example, you could load a payment form view
        $this->load->view('admin/payment_form');
    }

    public function initiate_payment() {
        // Process payment initiation here
        // This function will be called when the payment form is submitted
        
        // Initialize MyFatoorah API with your credentials
        $this->myfatoorah->setApiKey('rLtt6JWvbUHDDhsZnfpAhpYk4dxYDQkbcPTyGaKp2TYqQgG7FGZ5Th_WD53Oq8Ebz6A53njUoo1w3pjU1D4vs_ZMqFiz_j0urb_BH9Oq9VZoKFoJEDAbRZepGcQanImyYrry7Kt6MnMdgfG5jn4HngWoRdKduNNyP4kzcp3mRv7x00ahkm9LAK7ZRieg7k1PDAnBIOG3EyVSJ5kK4WLMvYr7sCwHbHcu4A5WwelxYK0GMJy37bNAarSJDFQsJ2ZvJjvMDmfWwDVFEVe_5tOomfVNt6bOg9mexbGjMrnHBnKnZR1vQbBtQieDlQepzTZMuQrSuKn-t5XZM7V6fCW7oP-uXGX-sMOajeX65JOf6XVpk29DP6ro8WTAflCDANC193yof8-f5_EYY-3hXhJj7RBXmizDpneEQDSaSz5sFk0sV5qPcARJ9zGG73vuGFyenjPPmtDtXtpx35A-BVcOSBYVIWe9kndG3nclfefjKEuZ3m4jL9Gg1h2JBvmXSMYiZtp9MR5I6pvbvylU_PP5xJFSjVTIz7IQSjcVGO41npnwIxRXNRxFOdIUHn0tjQ-7LwvEcTXyPsHXcMD8WtgBh-wxR8aKX7WPSsT1O8d8reb2aR7K3rkV3K82K_0OgawImEpwSvp9MNKynEAJQS6ZHe_J_l77652xwPNxMRTMASk1ZsJL
        ');

        // Prepare payment data
        $payment_data = array(
            'InvoiceValue' => 100, // Example invoice value
            'CurrencyIso' => 'KWD', // Example currency
            // Add other necessary payment parameters here
        );

        // Initiate payment
        $response = $this->myfatoorah->initiatePayment($payment_data);

        // Handle response
        if ($response['IsSuccess']) {
            // Payment initiated successfully, redirect user to payment page
            redirect($response['Data']['PaymentURL']);
        } else {
            // Payment initiation failed, handle error
            echo "Payment initiation failed: " . $response['Message'];
        }
    }

    public function payment_callback() {
        // Handle payment callback here
        // This function will be called when MyFatoorah sends a callback after payment completion

        // Retrieve payment status from callback data
        $payment_status = $this->input->post('payment_status');

        // Process payment status accordingly
        if ($payment_status == 'success') {
            // Payment succeeded, perform necessary actions (e.g., update database, send confirmation email)
            echo "Payment successful. Thank you!";
        } else {
            // Payment failed, handle accordingly
            echo "Payment failed. Please try again.";
        }
    }
}
