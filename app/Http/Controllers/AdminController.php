<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\FrontendContent;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Str;
use App\Models\ContactMessage;

class AdminController extends Controller
{
    public function managePages()
    {
        $sections = [
            'main' => [
                'label'  => 'Main Pages',
                'icon'   => 'fa-file-alt',
                'color'  => 'indigo',
                'items'  => ['Home', 'About Us', 'Contact', 'Header Settings', 'Footer Section'],
            ],
            'services' => [
                'label'  => 'Our Services',
                'icon'   => 'fa-tools',
                'color'  => 'blue',
                'items'  => [
                    'Our Services',
                    'App & Software Development',
                    'Software Supplies & Maintenance',
                    'Web Hosting',
                    'Penetration Testing',
                    'IT Consultancy & Advisory',
                    'Cybersecurity Services',
                ],
            ],
            'products' => [
                'label'  => 'Products',
                'icon'   => 'fa-box-open',
                'color'  => 'green',
                'items'  => [
                    'Products',
                    'Personal Budgeting & Planning System',
                    'Lending & Saving System',
                    'Inventory Management System',
                    'E-Learning System',
                    'Point of Sale System',
                    'Payment Processing System',
                    'Hospital/Clinic Management System',
                ],
            ],
        ];

        return view('admin.manage-pages', compact('sections'));
    }

    /**
     * Map every section name to a URL-safe slug and back.
     * This avoids bare '&' characters in URL path segments which Apache truncates.
     */
    private function sectionSlugMap(): array
    {
        $sections = array_keys($this->getSchema('__all__') + []) ?: [];
        // Build slug => name map from all schema keys
        $allNames = [
            'Home', 'About Us', 'Our Services', 'Products', 'Contact', 'Header Settings', 'Footer Section',
            'App & Software Development', 'Software Supplies & Maintenance', 'Web Hosting',
            'Penetration Testing', 'IT Consultancy & Advisory', 'Cybersecurity Services',
            'Personal Budgeting & Planning System', 'Lending & Saving System',
            'Inventory Management System', 'E-Learning System', 'Point of Sale System',
            'Payment Processing System', 'Hospital/Clinic Management System',
        ];
        $map = [];
        foreach ($allNames as $name) {
            $map[Str::slug($name)] = $name;
        }
        return $map;
    }

    public function slugToSection(string $slug): string
    {
        return $this->sectionSlugMap()[$slug] ?? $slug;
    }

    public static function sectionToSlug(string $name): string
    {
        return Str::slug($name);
    }

    public function editSection($slug)
    {
        $section  = $this->slugToSection($slug);
        $contents = FrontendContent::where('section', $section)->get()->keyBy('key');
        $schema   = $this->getSchema($section);
        return view('admin.edit-section', compact('section', 'slug', 'contents', 'schema'));
    }

    private function getSchema($section)
    {
        $schemas = [
            'Home' => [
                // ── Text fields ────────────────────────────────────────────
                'slider_1_title' => ['type' => 'text', 'label' => 'Slider 1 – Title'],
                'slider_1_desc' => ['type' => 'textarea', 'label' => 'Slider 1 – Description'],
                'slider_1_btn_text' => ['type' => 'text', 'label' => 'Slider 1 – Button Text', 'default' => 'View Event Details'],
                'slider_1_btn_url' => ['type' => 'text', 'label' => 'Slider 1 – Button URL', 'default' => '6th-Ethiopia-Banking-ICT-Summit'],
                'slider_2_title' => ['type' => 'text', 'label' => 'Slider 2 – Title'],
                'slider_2_desc' => ['type' => 'textarea', 'label' => 'Slider 2 – Description'],
                'slider_2_btn_text' => ['type' => 'text', 'label' => 'Slider 2 – Button Text', 'default' => 'View Our Services'],
                'slider_2_btn_url' => ['type' => 'text', 'label' => 'Slider 2 – Button URL', 'default' => 'services'],
                'slider_3_title' => ['type' => 'text', 'label' => 'Slider 3 – Title', 'default' => 'Network Management and Security Training'],
                'slider_3_desc' => ['type' => 'textarea', 'label' => 'Slider 3 – Description', 'default' => 'Bold Fellows provides interactive and comprehensive e-learning solutions, professional network management, and security training programs designed to equip your team with cutting-edge skills.'],
                'slider_3_btn_text' => ['type' => 'text', 'label' => 'Slider 3 – Button Text', 'default' => 'Training Courses'],
                'slider_3_btn_url' => ['type' => 'text', 'label' => 'Slider 3 – Button URL', 'default' => 'training'],
                'slider_4_title' => ['type' => 'text', 'label' => 'Slider 4 – Title', 'default' => 'We advice, consult, install and customize solutions'],
                'slider_4_desc' => ['type' => 'textarea', 'label' => 'Slider 4 – Description', 'default' => 'Maximize your business efficiency with BoldPos, our state-of-the-art Point of Sale system. We consult, install, and customize solutions tailored to your retail operations.'],
                'slider_4_btn_text' => ['type' => 'text', 'label' => 'Slider 4 – Button Text', 'default' => 'Products Overview'],
                'slider_4_btn_url' => ['type' => 'text', 'label' => 'Slider 4 – Button URL', 'default' => 'products'],
                'slider_5_title' => ['type' => 'text', 'label' => 'Slider 5 – Title', 'default' => 'We test across full spectrum of potential vulnerability'],
                'slider_5_desc' => ['type' => 'textarea', 'label' => 'Slider 5 – Description', 'default' => 'Improve healthcare delivery with our Hospital/Clinic Management System, streamlining patient records, clinical workflows, and medical billing securely.'],
                'slider_5_btn_text' => ['type' => 'text', 'label' => 'Slider 5 – Button Text', 'default' => 'Contact Us'],
                'slider_5_btn_url' => ['type' => 'text', 'label' => 'Slider 5 – Button URL', 'default' => 'contact'],
                'intro_title' => ['type' => 'text', 'label' => 'Intro Title (below banner)'],
                'feature_1_title' => ['type' => 'text', 'label' => 'Feature 1 Title'],
                'feature_1_desc' => ['type' => 'textarea', 'label' => 'Feature 1 Description'],
                'feature_2_title' => ['type' => 'text', 'label' => 'Feature 2 Title'],
                'feature_2_desc' => ['type' => 'textarea', 'label' => 'Feature 2 Description'],
                'feature_3_title' => ['type' => 'text', 'label' => 'Feature 3 Title'],
                'feature_3_desc' => ['type' => 'textarea', 'label' => 'Feature 3 Description'],
                // ── Image fields ───────────────────────────────────────────
                'slider_1_bg' => ['type' => 'image', 'label' => 'Slider 1 – Background Image', 'default' => 'images/slider/layer/1/slide1-bg.jpg'],
                'slider_1_fg' => ['type' => 'image', 'label' => 'Slider 1 – Foreground Image', 'default' => 'images/slider/layer/1/6thEthiopia.png'],
                'slider_2_bg' => ['type' => 'image', 'label' => 'Slider 2 – Background Image', 'default' => 'images/slider/layer/1/slide2-bg.jpg'],
                'slider_2_fg' => ['type' => 'image', 'label' => 'Slider 2 – Foreground Image', 'default' => 'images/slider/layer/1/slide0-5.png'],
                'slider_3_bg' => ['type' => 'image', 'label' => 'Slider 3 – Background Image', 'default' => 'images/slider/layer/2/slide3-bg.jpg'],
                'slider_3_fg' => ['type' => 'image', 'label' => 'Slider 3 – Foreground Image', 'default' => 'images/slider/layer/2/item-01.png'],
                'slider_4_bg' => ['type' => 'image', 'label' => 'Slider 4 – Background Image', 'default' => 'images/slider/layer/3/slide4-bg.jpg'],
                'slider_4_fg' => ['type' => 'image', 'label' => 'Slider 4 – Foreground Image', 'default' => 'images/slider/layer/3/slide3-pic1.png'],
                'slider_5_bg' => ['type' => 'image', 'label' => 'Slider 5 – Background Image', 'default' => 'images/slider/layer/4/slide4-bg.jpg'],
                'slider_5_fg' => ['type' => 'image', 'label' => 'Slider 5 – Foreground Image', 'default' => 'images/slider/layer/4/slider_4_man.png'],
                'home_portfolio_1_img' => ['type' => 'image', 'label' => 'Portfolio Image 1 (Why Bold Fellows)', 'default' => 'images/portfolio/why-cyber-sec-africa.jpg'],
                'home_portfolio_2_img' => ['type' => 'image', 'label' => 'Portfolio Image 2 (Our Services)', 'default' => 'images/portfolio/csa-services.jpg'],
                'home_portfolio_3_img' => ['type' => 'image', 'label' => 'Portfolio Image 3 (Our Products)', 'default' => 'images/portfolio/csa-products.jpg'],
                'home_portfolio_4_img' => ['type' => 'image', 'label' => 'Portfolio Image 4 (Contacts)', 'default' => 'images/portfolio/csa-products.jpg'],
            ],
            'About Us' => [
                // ── Text fields ────────────────────────────────────────────
                'company_brief' => ['type' => 'textarea', 'label' => 'Company Brief (Top Paragraph)'],
                'our_mission' => ['type' => 'text', 'label' => 'Our Mission'],
                'our_vision' => ['type' => 'text', 'label' => 'Our Vision'],
                'our_values' => ['type' => 'text', 'label' => 'Our Values'],
                'about_company_desc_1' => ['type' => 'textarea', 'label' => 'About the Company Paragraph 1'],
                'about_company_desc_2' => ['type' => 'textarea', 'label' => 'About the Company Paragraph 2'],
                'about_company_desc_3' => ['type' => 'textarea', 'label' => 'About the Company Paragraph 3'],
                'our_philosophy' => ['type' => 'textarea', 'label' => 'Our Philosophy'],
                'our_approach' => ['type' => 'textarea', 'label' => 'Our Unique, Proven Approach'],
                // ── Skills Level fields ────────────────────────────────────
                'skill_1_name' => ['type' => 'text', 'label' => 'Skill 1 – Name', 'default' => 'Penetration Testing'],
                'skill_1_level' => ['type' => 'text', 'label' => 'Skill 1 – Level (%)', 'default' => '80'],
                'skill_2_name' => ['type' => 'text', 'label' => 'Skill 2 – Name', 'default' => 'Security Solutions'],
                'skill_2_level' => ['type' => 'text', 'label' => 'Skill 2 – Level (%)', 'default' => '100'],
                'skill_3_name' => ['type' => 'text', 'label' => 'Skill 3 – Name', 'default' => 'Security Training'],
                'skill_3_level' => ['type' => 'text', 'label' => 'Skill 3 – Level (%)', 'default' => '90'],
                // ── Image fields ───────────────────────────────────────────
                'about_slider_1_img' => ['type' => 'image', 'label' => 'About Page Slider Image 1', 'default' => 'images/slider/cyber-security.jpg'],
                'about_slider_2_img' => ['type' => 'image', 'label' => 'About Page Slider Image 2', 'default' => 'images/slider/about-csa.jpg'],
                'about_slider_3_img' => ['type' => 'image', 'label' => 'About Page Slider Image 3', 'default' => 'images/slider/about-csa-1.jpg'],

            ],
            'Our Services' => [
                // ── Text fields ────────────────────────────────────────────
                'services_intro' => ['type' => 'textarea', 'label' => 'Services Intro Paragraph'],
                'service_1_title' => ['type' => 'text', 'label' => 'Service 1 Title (App & Software Development)'],
                'service_1_desc' => ['type' => 'textarea', 'label' => 'Service 1 Description'],
                'service_2_title' => ['type' => 'text', 'label' => 'Service 2 Title (Software Supplies & Maintenance)'],
                'service_2_desc' => ['type' => 'textarea', 'label' => 'Service 2 Description'],
                'service_3_title' => ['type' => 'text', 'label' => 'Service 3 Title (Web Hosting)'],
                'service_3_desc' => ['type' => 'textarea', 'label' => 'Service 3 Description'],
                'service_4_title' => ['type' => 'text', 'label' => 'Service 4 Title (Penetration Testing)'],
                'service_4_desc' => ['type' => 'textarea', 'label' => 'Service 4 Description'],
                'service_5_title' => ['type' => 'text', 'label' => 'Service 5 Title (IT Consultancy & Advisory)'],
                'service_5_desc' => ['type' => 'textarea', 'label' => 'Service 5 Description'],
                'service_6_title' => ['type' => 'text', 'label' => 'Service 6 Title (Cybersecurity Services)'],
                'service_6_desc' => ['type' => 'textarea', 'label' => 'Service 6 Description'],
                // ── Image fields ───────────────────────────────────────────
                'service_1_img' => ['type' => 'image', 'label' => 'Service 1 Image', 'default' => 'images/blog/app-software-development.jpg'],
                'service_2_img' => ['type' => 'image', 'label' => 'Service 2 Image', 'default' => 'images/portfolio/csa-services.jpg'],
                'service_3_img' => ['type' => 'image', 'label' => 'Service 3 Image', 'default' => 'images/portfolio/csa-products.jpg'],
                'service_4_img' => ['type' => 'image', 'label' => 'Service 4 Image', 'default' => 'images/blog/penetration-testing.jpg'],
                'service_5_img' => ['type' => 'image', 'label' => 'Service 5 Image', 'default' => 'images/blog/security-consulting.jpg'],
                'service_6_img' => ['type' => 'image', 'label' => 'Service 6 Image', 'default' => 'images/portfolio/why-cyber-sec-africa.jpg'],
                'services_portfolio_1' => ['type' => 'image', 'label' => 'Popular Services Image 1', 'default' => 'images/portfolio/pen-test.jpg'],
                'services_portfolio_2' => ['type' => 'image', 'label' => 'Popular Services Image 2', 'default' => 'images/portfolio/fraud.jpg'],
            ],
            'Products' => [
                // ── Text fields ────────────────────────────────────────────
                'products_intro' => ['type' => 'textarea', 'label' => 'Products Intro Paragraph'],
                'product_1_title' => ['type' => 'text', 'label' => 'Product 1 Title (Personal Budgeting & Planning)'],
                'product_1_desc' => ['type' => 'textarea', 'label' => 'Product 1 Description'],
                'product_2_title' => ['type' => 'text', 'label' => 'Product 2 Title (Lending & Saving System)'],
                'product_2_desc' => ['type' => 'textarea', 'label' => 'Product 2 Description'],
                'product_3_title' => ['type' => 'text', 'label' => 'Product 3 Title (Inventory Management System)'],
                'product_3_desc' => ['type' => 'textarea', 'label' => 'Product 3 Description'],
                'product_4_title' => ['type' => 'text', 'label' => 'Product 4 Title (E-Learning System)'],
                'product_4_desc' => ['type' => 'textarea', 'label' => 'Product 4 Description'],
                'product_5_title' => ['type' => 'text', 'label' => 'Product 5 Title (Point of Sale System)'],
                'product_5_desc' => ['type' => 'textarea', 'label' => 'Product 5 Description'],
                'product_6_title' => ['type' => 'text', 'label' => 'Product 6 Title (Payment Processing System)'],
                'product_6_desc' => ['type' => 'textarea', 'label' => 'Product 6 Description'],
                'product_7_title' => ['type' => 'text', 'label' => 'Product 7 Title (Hospital/Clinic Management System)'],
                'product_7_desc' => ['type' => 'textarea', 'label' => 'Product 7 Description'],
                // ── Image fields ───────────────────────────────────────────
                'product_1_img' => ['type' => 'image', 'label' => 'Product 1 Image (Personal Budgeting & Planning)', 'default' => 'images/blog/personal-budgeting.jpg'],
                'product_2_img' => ['type' => 'image', 'label' => 'Product 2 Image (Lending & Saving System)', 'default' => 'images/blog/lending-saving.jpg'],
                'product_3_img' => ['type' => 'image', 'label' => 'Product 3 Image (Inventory Management System)', 'default' => 'images/blog/inventory-management.jpg'],
                'product_4_img' => ['type' => 'image', 'label' => 'Product 4 Image (E-Learning System)', 'default' => 'images/blog/e-learning.jpg'],
                'product_5_img' => ['type' => 'image', 'label' => 'Product 5 Image (Point of Sale System)', 'default' => 'images/blog/point-of-sale.jpg'],
                'product_6_img' => ['type' => 'image', 'label' => 'Product 6 Image (Payment Processing System)', 'default' => 'images/blog/payment-processing.jpg'],
                'product_7_img' => ['type' => 'image', 'label' => 'Product 7 Image (Hospital/Clinic Management System)', 'default' => 'images/blog/hospital-management.jpg'],
            ],
            'Contact' => [
                'contact_intro' => ['type' => 'textarea', 'label' => 'Contact Intro Text'],
                'address' => ['type' => 'textarea', 'label' => 'Address Details'],
                'phone_numbers' => ['type' => 'textarea', 'label' => 'Phone Numbers'],
                'email' => ['type' => 'text', 'label' => 'Email Address'],
                'map_url' => ['type' => 'textarea', 'label' => 'Google Maps Embed URL', 'default' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3989.7251!2d32.5913!3d0.3356!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x177dbb0b72b8bca9%3A0x1234567890abcdef!2s135%20Kira%20Rd%2C%20Kampala%2C%20Uganda!5e0!3m2!1sen!2sug!4v1715420000000'],
            ],
            'Header Settings' => [
                'header_address' => ['type' => 'text', 'label' => 'Header Address', 'default' => 'Headquarter: Kampala, Uganda'],
                'header_email' => ['type' => 'text', 'label' => 'Header Email', 'default' => 'boldfellows4@gmail.com'],
                'social_twitter' => ['type' => 'text', 'label' => 'Twitter URL', 'default' => 'https://twitter.com/cybersecafrica'],
                'social_facebook' => ['type' => 'text', 'label' => 'Facebook URL', 'default' => '#'],
                'social_linkedin' => ['type' => 'text', 'label' => 'LinkedIn URL', 'default' => 'http://www.linkedin.com/company/cyber-security-africa'],
            ],
            'Footer Section' => [
                'about_us_text' => ['type' => 'textarea', 'label' => 'About Us Text (Column 1)'],
                'contact_address' => ['type' => 'text', 'label' => 'Contact Address (Column 3)'],
                'contact_tel' => ['type' => 'text', 'label' => 'Contact Telephone'],
                'contact_safaricom' => ['type' => 'text', 'label' => 'Contact Safaricom'],
                'contact_airtel' => ['type' => 'text', 'label' => 'Contact Airtel'],
                'contact_fax' => ['type' => 'text', 'label' => 'Contact Fax'],
                'contact_email' => ['type' => 'text', 'label' => 'Contact Email'],
                'copyright_text' => ['type' => 'text', 'label' => 'Copyright Text'],
            ],
            'App & Software Development' => [
                'intro_text'      => ['type' => 'textarea', 'label' => 'Intro Text'],
                'details_text'    => ['type' => 'textarea', 'label' => 'Details Text'],
                'why_choose_1'    => ['type' => 'text',     'label' => 'Why Choose Us 1'],
                'why_choose_2'    => ['type' => 'text',     'label' => 'Why Choose Us 2'],
                'why_choose_3'    => ['type' => 'text',     'label' => 'Why Choose Us 3'],
                'why_choose_4'    => ['type' => 'text',     'label' => 'Why Choose Us 4'],
                'why_choose_5'    => ['type' => 'text',     'label' => 'Why Choose Us 5'],
                'conclusion_text' => ['type' => 'textarea', 'label' => 'Conclusion Text'],
                'banner_img'      => ['type' => 'image',    'label' => 'Banner Image', 'default' => 'images/blog/app-software-development.jpg'],
            ],
            'Software Supplies & Maintenance' => [
                'intro_text'      => ['type' => 'textarea', 'label' => 'Intro Text'],
                'details_text'    => ['type' => 'textarea', 'label' => 'Details Text'],
                'why_choose_1'    => ['type' => 'text',     'label' => 'Why Choose Us 1'],
                'why_choose_2'    => ['type' => 'text',     'label' => 'Why Choose Us 2'],
                'why_choose_3'    => ['type' => 'text',     'label' => 'Why Choose Us 3'],
                'why_choose_4'    => ['type' => 'text',     'label' => 'Why Choose Us 4'],
                'why_choose_5'    => ['type' => 'text',     'label' => 'Why Choose Us 5'],
                'conclusion_text' => ['type' => 'textarea', 'label' => 'Conclusion Text'],
                'banner_img'      => ['type' => 'image',    'label' => 'Banner Image', 'default' => 'images/blog/software-supplies.jpg'],
            ],
            'Web Hosting' => [
                'intro_text'      => ['type' => 'textarea', 'label' => 'Intro Text'],
                'details_text'    => ['type' => 'textarea', 'label' => 'Details Text'],
                'why_choose_1'    => ['type' => 'text',     'label' => 'Why Choose Us 1'],
                'why_choose_2'    => ['type' => 'text',     'label' => 'Why Choose Us 2'],
                'why_choose_3'    => ['type' => 'text',     'label' => 'Why Choose Us 3'],
                'why_choose_4'    => ['type' => 'text',     'label' => 'Why Choose Us 4'],
                'why_choose_5'    => ['type' => 'text',     'label' => 'Why Choose Us 5'],
                'conclusion_text' => ['type' => 'textarea', 'label' => 'Conclusion Text'],
                'banner_img'      => ['type' => 'image',    'label' => 'Banner Image', 'default' => 'images/blog/web-hosting.jpg'],
            ],
            'Penetration Testing' => [
                'intro_text'      => ['type' => 'textarea', 'label' => 'Intro Text'],
                'details_text'    => ['type' => 'textarea', 'label' => 'Details Text'],
                'why_choose_1'    => ['type' => 'text',     'label' => 'Why Choose Us 1'],
                'why_choose_2'    => ['type' => 'text',     'label' => 'Why Choose Us 2'],
                'why_choose_3'    => ['type' => 'text',     'label' => 'Why Choose Us 3'],
                'why_choose_4'    => ['type' => 'text',     'label' => 'Why Choose Us 4'],
                'why_choose_5'    => ['type' => 'text',     'label' => 'Why Choose Us 5'],
                'conclusion_text' => ['type' => 'textarea', 'label' => 'Conclusion Text'],
                'banner_img'      => ['type' => 'image',    'label' => 'Banner Image', 'default' => 'images/blog/penetration-testing.jpg'],
            ],
            'IT Consultancy & Advisory' => [
                'intro_text'      => ['type' => 'textarea', 'label' => 'Intro Text'],
                'details_text'    => ['type' => 'textarea', 'label' => 'Details Text'],
                'why_choose_1'    => ['type' => 'text',     'label' => 'Why Choose Us 1'],
                'why_choose_2'    => ['type' => 'text',     'label' => 'Why Choose Us 2'],
                'why_choose_3'    => ['type' => 'text',     'label' => 'Why Choose Us 3'],
                'why_choose_4'    => ['type' => 'text',     'label' => 'Why Choose Us 4'],
                'why_choose_5'    => ['type' => 'text',     'label' => 'Why Choose Us 5'],
                'conclusion_text' => ['type' => 'textarea', 'label' => 'Conclusion Text'],
                'banner_img'      => ['type' => 'image',    'label' => 'Banner Image', 'default' => 'images/blog/it-consultancy.jpg'],
            ],
            'Cybersecurity Services' => [
                'intro_text'      => ['type' => 'textarea', 'label' => 'Intro Text'],
                'details_text'    => ['type' => 'textarea', 'label' => 'Details Text'],
                'why_choose_1'    => ['type' => 'text',     'label' => 'Why Choose Us 1'],
                'why_choose_2'    => ['type' => 'text',     'label' => 'Why Choose Us 2'],
                'why_choose_3'    => ['type' => 'text',     'label' => 'Why Choose Us 3'],
                'why_choose_4'    => ['type' => 'text',     'label' => 'Why Choose Us 4'],
                'why_choose_5'    => ['type' => 'text',     'label' => 'Why Choose Us 5'],
                'conclusion_text' => ['type' => 'textarea', 'label' => 'Conclusion Text'],
                'banner_img'      => ['type' => 'image',    'label' => 'Banner Image', 'default' => 'images/blog/cybersecurity.jpg'],
            ],
            // ── Products ───────────────────────────────────────────────────
            'Personal Budgeting & Planning System' => [
                'intro_text'      => ['type' => 'textarea', 'label' => 'Intro Text'],
                'details_text'    => ['type' => 'textarea', 'label' => 'Details Text'],
                'why_choose_1'    => ['type' => 'text',     'label' => 'Why Choose Us 1'],
                'why_choose_2'    => ['type' => 'text',     'label' => 'Why Choose Us 2'],
                'why_choose_3'    => ['type' => 'text',     'label' => 'Why Choose Us 3'],
                'why_choose_4'    => ['type' => 'text',     'label' => 'Why Choose Us 4'],
                'why_choose_5'    => ['type' => 'text',     'label' => 'Why Choose Us 5'],
                'conclusion_text' => ['type' => 'textarea', 'label' => 'Conclusion Text'],
                'banner_img'      => ['type' => 'image',    'label' => 'Banner Image', 'default' => 'images/blog/personal-budgeting.jpg'],
            ],
            'Lending & Saving System' => [
                'intro_text'      => ['type' => 'textarea', 'label' => 'Intro Text'],
                'details_text'    => ['type' => 'textarea', 'label' => 'Details Text'],
                'why_choose_1'    => ['type' => 'text',     'label' => 'Why Choose Us 1'],
                'why_choose_2'    => ['type' => 'text',     'label' => 'Why Choose Us 2'],
                'why_choose_3'    => ['type' => 'text',     'label' => 'Why Choose Us 3'],
                'why_choose_4'    => ['type' => 'text',     'label' => 'Why Choose Us 4'],
                'why_choose_5'    => ['type' => 'text',     'label' => 'Why Choose Us 5'],
                'conclusion_text' => ['type' => 'textarea', 'label' => 'Conclusion Text'],
                'banner_img'      => ['type' => 'image',    'label' => 'Banner Image', 'default' => 'images/blog/lending-saving.jpg'],
            ],
            'Inventory Management System' => [
                'intro_text'      => ['type' => 'textarea', 'label' => 'Intro Text'],
                'details_text'    => ['type' => 'textarea', 'label' => 'Details Text'],
                'why_choose_1'    => ['type' => 'text',     'label' => 'Why Choose Us 1'],
                'why_choose_2'    => ['type' => 'text',     'label' => 'Why Choose Us 2'],
                'why_choose_3'    => ['type' => 'text',     'label' => 'Why Choose Us 3'],
                'why_choose_4'    => ['type' => 'text',     'label' => 'Why Choose Us 4'],
                'why_choose_5'    => ['type' => 'text',     'label' => 'Why Choose Us 5'],
                'conclusion_text' => ['type' => 'textarea', 'label' => 'Conclusion Text'],
                'banner_img'      => ['type' => 'image',    'label' => 'Banner Image', 'default' => 'images/blog/inventory-management.jpg'],
            ],
            'E-Learning System' => [
                'intro_text'      => ['type' => 'textarea', 'label' => 'Intro Text'],
                'details_text'    => ['type' => 'textarea', 'label' => 'Details Text'],
                'why_choose_1'    => ['type' => 'text',     'label' => 'Why Choose Us 1'],
                'why_choose_2'    => ['type' => 'text',     'label' => 'Why Choose Us 2'],
                'why_choose_3'    => ['type' => 'text',     'label' => 'Why Choose Us 3'],
                'why_choose_4'    => ['type' => 'text',     'label' => 'Why Choose Us 4'],
                'why_choose_5'    => ['type' => 'text',     'label' => 'Why Choose Us 5'],
                'conclusion_text' => ['type' => 'textarea', 'label' => 'Conclusion Text'],
                'banner_img'      => ['type' => 'image',    'label' => 'Banner Image', 'default' => 'images/blog/e-learning.jpg'],
            ],
            'Point of Sale System' => [
                'intro_text'      => ['type' => 'textarea', 'label' => 'Intro Text'],
                'details_text'    => ['type' => 'textarea', 'label' => 'Details Text'],
                'why_choose_1'    => ['type' => 'text',     'label' => 'Why Choose Us 1'],
                'why_choose_2'    => ['type' => 'text',     'label' => 'Why Choose Us 2'],
                'why_choose_3'    => ['type' => 'text',     'label' => 'Why Choose Us 3'],
                'why_choose_4'    => ['type' => 'text',     'label' => 'Why Choose Us 4'],
                'why_choose_5'    => ['type' => 'text',     'label' => 'Why Choose Us 5'],
                'conclusion_text' => ['type' => 'textarea', 'label' => 'Conclusion Text'],
                'banner_img'      => ['type' => 'image',    'label' => 'Banner Image', 'default' => 'images/blog/point-of-sale.jpg'],
            ],
            'Payment Processing System' => [
                'intro_text'      => ['type' => 'textarea', 'label' => 'Intro Text'],
                'details_text'    => ['type' => 'textarea', 'label' => 'Details Text'],
                'why_choose_1'    => ['type' => 'text',     'label' => 'Why Choose Us 1'],
                'why_choose_2'    => ['type' => 'text',     'label' => 'Why Choose Us 2'],
                'why_choose_3'    => ['type' => 'text',     'label' => 'Why Choose Us 3'],
                'why_choose_4'    => ['type' => 'text',     'label' => 'Why Choose Us 4'],
                'why_choose_5'    => ['type' => 'text',     'label' => 'Why Choose Us 5'],
                'conclusion_text' => ['type' => 'textarea', 'label' => 'Conclusion Text'],
                'banner_img'      => ['type' => 'image',    'label' => 'Banner Image', 'default' => 'images/blog/payment-processing.jpg'],
            ],
            'Hospital/Clinic Management System' => [
                'intro_text'      => ['type' => 'textarea', 'label' => 'Intro Text'],
                'details_text'    => ['type' => 'textarea', 'label' => 'Details Text'],
                'why_choose_1'    => ['type' => 'text',     'label' => 'Why Choose Us 1'],
                'why_choose_2'    => ['type' => 'text',     'label' => 'Why Choose Us 2'],
                'why_choose_3'    => ['type' => 'text',     'label' => 'Why Choose Us 3'],
                'why_choose_4'    => ['type' => 'text',     'label' => 'Why Choose Us 4'],
                'why_choose_5'    => ['type' => 'text',     'label' => 'Why Choose Us 5'],
                'conclusion_text' => ['type' => 'textarea', 'label' => 'Conclusion Text'],
                'banner_img'      => ['type' => 'image',    'label' => 'Banner Image', 'default' => 'images/blog/hospital-management.jpg'],
            ],
        ];

        return $schemas[$section] ?? [];
    }

    public function updateSection(Request $request, $slug)
    {
        $section = $this->slugToSection($slug);
        return $this->doUpdateSection($request, $section);
    }

    private function doUpdateSection(Request $request, $section)
    {
        $schema = $this->getSchema($section);

        // Collect image field keys for this section
        $imageKeys = collect($schema)
            ->filter(fn($field) => $field['type'] === 'image')
            ->keys()
            ->toArray();

        // Handle regular (non-file) fields
        $data = $request->except(array_merge(['_token', '_method'], $imageKeys));

        foreach ($data as $key => $value) {
            FrontendContent::updateOrCreate(
                ['section' => $section, 'key' => $key],
                ['value' => $value]
            );
            Cache::forget("frontend_content_{$section}_{$key}");
        }

        // Ensure uploads directory exists and is writable
        $uploadDir = public_path('uploads');
        if (!is_dir($uploadDir)) {
            mkdir($uploadDir, 0755, true);
        }

        $imageErrors = [];

        // Handle image uploads
        foreach ($imageKeys as $key) {
            if (!$request->hasFile($key)) {
                continue; // No file uploaded for this field — skip
            }

            $file = $request->file($key);

            \Log::info("Image upload attempt: section={$section}, key={$key}, name=" . $file->getClientOriginalName() . ", error=" . $file->getError());

            if (!$file->isValid()) {
                $imageErrors[] = "Upload failed for '{$key}': " . $file->getErrorMessage();
                \Log::error("Image upload invalid: key={$key}, error=" . $file->getError());
                continue;
            }

            // Validate by extension — getMimeType() is unreliable on XAMPP/Windows
            $extension = strtolower($file->getClientOriginalExtension() ?: 'bin');
            $allowedExtensions = ['jpg', 'jpeg', 'png', 'gif', 'webp', 'svg'];
            if (!in_array($extension, $allowedExtensions)) {
                $imageErrors[] = "'{$key}': only JPG, PNG, GIF, WebP, SVG allowed (got '.{$extension}').";
                \Log::warning("Image blocked: key={$key}, ext={$extension}");
                continue;
            }

            try {
                $filename = $key . '_' . time() . '.' . $extension;
                $file->move($uploadDir, $filename);
                $path = 'uploads/' . $filename;

                FrontendContent::updateOrCreate(
                    ['section' => $section, 'key' => $key],
                    ['value' => $path]
                );
                Cache::forget("frontend_content_{$section}_{$key}");

                \Log::info("Image uploaded: section={$section}, key={$key}, path={$path}");

            } catch (\Exception $e) {
                $imageErrors[] = "Could not save image for '{$key}': " . $e->getMessage();
                \Log::error("Image move failed: " . $e->getMessage());
            }
        }

        if (!empty($imageErrors)) {
            return redirect()->back()
                ->with('success', 'Text content saved.')
                ->with('warning', 'Some images could not be uploaded: ' . implode(' | ', $imageErrors));
        }

        return redirect()->back()->with('success', 'Content updated successfully!');
    }

    public function inquiries()
    {
        $messages = ContactMessage::orderBy('created_at', 'desc')->paginate(15);
        return view('admin.inquiries.index', compact('messages'));
    }

    public function viewInquiry($id)
    {
        $message = ContactMessage::findOrFail($id);
        if (!$message->is_read) {
            $message->is_read = true;
            $message->save();
        }
        return view('admin.inquiries.show', compact('message'));
    }

    public function deleteInquiry($id)
    {
        $message = ContactMessage::findOrFail($id);
        $message->delete();
        return redirect()->route('admin.inquiries')->with('success', 'Message deleted successfully!');
    }
}
