<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class About extends MX_Controller
{
    function index()
    {
        $data['title'] = "Best Packers and Movers in India | About " . $this->comp['company3'];
        $data['description'] = "Discover " . $this->comp['company3'] . ", India's trusted relocation company with " . $this->comp['experience'] . " years of excellence. We provide safe, affordable household packing, office shifting, and vehicle transport nationwide.";
        $data['module'] = "about";
        $data['view_file'] = "about";
        echo Modules::run('template/layout2', $data);
    }

    function choose()
    {
        $data['title'] = "Why Choose Us | Safe & Trusted Relocation Services | " . $this->comp['company3'];
        $data['description'] = "Find out why over 39,850+ clients trust " . $this->comp['company3'] . " for house shifting, office moving, and car/bike transport. Transparent pricing, 100% safety, and nationwide network.";
        $data['module'] = "about";
        $data['view_file'] = "choose";
        echo Modules::run('template/layout2', $data);
    }

    function faqs()
    {
        $data['title'] = "Packers and Movers FAQs | Relocation Guide | " . $this->comp['company3'];
        $data['description'] = "Have questions about house shifting charges, packing quality, insurance, delivery timeline, or consignment tracking? Get instant answers from " . $this->comp['company3'] . " FAQs.";
        $data['module'] = "about";
        $data['view_file'] = "faqs";
        echo Modules::run('template/layout2', $data);
    }

    function testimonials()
    {
        $data['title'] = "Customer Reviews & Testimonials | " . $this->comp['company3'];
        $data['description'] = "Read real customer reviews and testimonials about " . $this->comp['company3'] . ". See how our professional packing and moving team delivers 5-star household and vehicle shifting experiences.";
        $data['module'] = "about";
        $data['view_file'] = "testimonials";
        echo Modules::run('template/layout2', $data);
    }

    function reviews()
    {
        // Redirect to main reviews module
        redirect('reviews');
    }

    function privacy()
    {
        $data['title'] = "Privacy Policy | " . $this->comp['company3'];
        $data['description'] = "Read the official Privacy Policy of " . $this->comp['company3'] . ". Learn how we safeguard your personal details and booking information with strict data privacy protocols.";
        $data['module'] = "about";
        $data['view_file'] = "privacy";
        echo Modules::run('template/layout2', $data);
    }

    function terms()
    {
        $data['title'] = "Terms & Conditions | " . $this->comp['company3'];
        $data['description'] = "Review the Terms and Conditions of " . $this->comp['company3'] . ". Understand our service guidelines, payment terms, insurance coverage policies, and transit agreements.";
        $data['module'] = "about";
        $data['view_file'] = "terms";
        echo Modules::run('template/layout2', $data);
    }
}

