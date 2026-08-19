<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Services extends MX_Controller
{
    function index()
    {
        redirect('', 'location', 301);
    }

    function homeShifting()
    {
        $data['title'] = "Best Home Shifting Services | Household Relocation | " . $this->comp['company3'];
        $data['description'] = "Get reliable, safe, and professional home shifting services from " . $this->comp['company3'] . ". Multi-layer bubble wrapping, expert movers, and door-to-door household relocation at affordable rates.";
        $data['module'] = "services";
        $data['view_file'] = "home_shifting";
        echo Modules::run('template/layout2', $data);
    }

    function office()
    {
        $data['title'] = "Professional Office Relocation Services | Corporate Shifting | " . $this->comp['company3'];
        $data['description'] = "Smooth and secure office shifting services by " . $this->comp['company3'] . ". Minimal business downtime, safe IT equipment transport, desk-to-desk setup, and corporate moving solutions.";
        $data['module'] = "services";
        $data['view_file'] = "office";
        echo Modules::run('template/layout2', $data);
    }

    function bike()
    {
        $data['title'] = "Reliable Bike Transportation Services | Two-Wheeler Shifting | " . $this->comp['company3'];
        $data['description'] = "Hire trusted two-wheeler and bike shifting services from " . $this->comp['company3'] . ". Heavy corrugated box packing, scratch-free transport, and on-time nationwide delivery.";
        $data['module'] = "services";
        $data['view_file'] = "bike";
        echo Modules::run('template/layout2', $data);
    }

    function car()
    {
        $data['title'] = "Safe Car Transportation Services | Car Carrier Shipping | " . $this->comp['company3'];
        $data['description'] = "Secure car carrier and car transportation services across India by " . $this->comp['company3'] . ". Enclosed vehicle trailers, door-to-door delivery, transit insurance, and live tracking.";
        $data['module'] = "services";
        $data['view_file'] = "car";
        echo Modules::run('template/layout2', $data);
    }

    function packingMoving()
    {
        $data['title'] = "Packing and Moving Services | Professional Relocation | " . $this->comp['company3'];
        $data['description'] = "Secure packing and moving services by " . $this->comp['company3'] . ". Premium bubble wrap, wooden crating, heavy item lifting, and nationwide door-to-door relocation at transparent rates.";
        $data['module'] = "services";
        $data['view_file'] = "packing_moving";
        echo Modules::run('template/layout2', $data);
    }

    function loadingUnloading()
    {
        $data['title'] = "Loading and Unloading Services | Safe Goods Handling | " . $this->comp['company3'];
        $data['description'] = "Safe and professional loading and unloading services by " . $this->comp['company3'] . ". Trained handling experts, modern ramp equipment, and zero-damage placement.";
        $data['module'] = "services";
        $data['view_file'] = "loading_unloading";
        echo Modules::run('template/layout2', $data);
    }
}
