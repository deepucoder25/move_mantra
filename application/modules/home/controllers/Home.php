<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); ?>
<?php
class Home extends MX_Controller
{
    function error()
    {
        $this->oldurl_to_newurl();
        $data['title'] = "404 Page Not Found | " . $this->comp['company3'];
        $data['description'] = "The page you requested was not found at " . $this->comp['company3'] . ". Explore our home shifting, office relocation, and vehicle transport services or return to homepage.";
        $data['module'] = "home";
        $data['view_file'] = "error";
        echo Modules::run('template/layout2', $data);
    }
    function index()
    {
        $data['title'] = "Best Packers and Movers in India | House Shifting Services | " . $this->comp['company3'];
        $data['description'] = "Hire " . $this->comp['company3'] . " for reliable house shifting, office relocation, car carrier & bike transport across India. 100% safe, multi-layer packing, affordable rates & live consignment tracking. Call " . $this->comp['phone'] . " for a free quote!";
        $data['module'] = "home";
        $data['view_file'] = "home";
        echo Modules::run('template/layout1', $data);
    }

    public function oldurl_to_newurl()

    {

        // if (@$this->uri->segment(1) == "packers-movers-bihar-india") {
        //     redirect("bihar", 'location', 301);
        // }
    }
}
