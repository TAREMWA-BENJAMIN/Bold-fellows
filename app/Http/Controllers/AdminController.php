<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\FrontendContent;
use Illuminate\Support\Facades\Cache;

class AdminController extends Controller
{
    public function dashboard()
    {
        return view('admin.dashboard');
    }

    public function managePages()
    {
        $sections = [
            'Home', 'About Us', 'Our Services', 'Products', 'Contact', 'Footer Section'
        ];
        
        return view('admin.manage-pages', compact('sections'));
    }

    public function editSection($section)
    {
        // Fetch existing content for this section
        $contents = FrontendContent::where('section', $section)->get()->keyBy('key');
        $schema = $this->getSchema($section);
        return view('admin.edit-section', compact('section', 'contents', 'schema'));
    }

    private function getSchema($section)
    {
        $schemas = [
            'Home' => [
                // ── Text fields ────────────────────────────────────────────
                'slider_1_title'    => ['type' => 'text',     'label' => 'Slider 1 – Title'],
                'slider_1_desc'     => ['type' => 'textarea', 'label' => 'Slider 1 – Description'],
                'slider_1_btn_text' => ['type' => 'text',     'label' => 'Slider 1 – Button Text',    'default' => 'View Event Details'],
                'slider_1_btn_url'  => ['type' => 'text',     'label' => 'Slider 1 – Button URL',     'default' => '6th-Ethiopia-Banking-ICT-Summit'],
                'slider_2_title'    => ['type' => 'text',     'label' => 'Slider 2 – Title'],
                'slider_2_desc'     => ['type' => 'textarea', 'label' => 'Slider 2 – Description'],
                'slider_2_btn_text' => ['type' => 'text',     'label' => 'Slider 2 – Button Text',    'default' => 'View Our Services'],
                'slider_2_btn_url'  => ['type' => 'text',     'label' => 'Slider 2 – Button URL',     'default' => 'services'],
                'slider_3_title'    => ['type' => 'text',     'label' => 'Slider 3 – Title',          'default' => 'Network Management and Security Training'],
                'slider_3_btn_text' => ['type' => 'text',     'label' => 'Slider 3 – Button Text',    'default' => 'Training Courses'],
                'slider_3_btn_url'  => ['type' => 'text',     'label' => 'Slider 3 – Button URL',     'default' => 'training'],
                'slider_4_title'    => ['type' => 'text',     'label' => 'Slider 4 – Title',          'default' => 'We advice, consult, install and customize solutions'],
                'slider_4_btn_text' => ['type' => 'text',     'label' => 'Slider 4 – Button Text',    'default' => 'Products Overview'],
                'slider_4_btn_url'  => ['type' => 'text',     'label' => 'Slider 4 – Button URL',     'default' => 'products'],
                'slider_5_title'    => ['type' => 'text',     'label' => 'Slider 5 – Title',          'default' => 'We test across full spectrum of potential vulnerability'],
                'slider_5_btn_text' => ['type' => 'text',     'label' => 'Slider 5 – Button Text',    'default' => 'Contact Us'],
                'slider_5_btn_url'  => ['type' => 'text',     'label' => 'Slider 5 – Button URL',     'default' => 'contact'],
                'intro_title'       => ['type' => 'text',     'label' => 'Intro Title (below banner)'],
                'feature_1_title'   => ['type' => 'text',     'label' => 'Feature 1 Title'],
                'feature_1_desc'    => ['type' => 'textarea', 'label' => 'Feature 1 Description'],
                'feature_2_title'   => ['type' => 'text',     'label' => 'Feature 2 Title'],
                'feature_2_desc'    => ['type' => 'textarea', 'label' => 'Feature 2 Description'],
                'feature_3_title'   => ['type' => 'text',     'label' => 'Feature 3 Title'],
                'feature_3_desc'    => ['type' => 'textarea', 'label' => 'Feature 3 Description'],
                // ── Image fields ───────────────────────────────────────────
                'slider_1_bg'          => ['type' => 'image', 'label' => 'Slider 1 – Background Image', 'default' => 'images/slider/layer/1/slide1-bg.jpg'],
                'slider_2_bg'          => ['type' => 'image', 'label' => 'Slider 2 – Background Image', 'default' => 'images/slider/layer/1/slide2-bg.jpg'],
                'slider_3_bg'          => ['type' => 'image', 'label' => 'Slider 3 – Background Image', 'default' => 'images/slider/layer/2/slide3-bg.jpg'],
                'slider_4_bg'          => ['type' => 'image', 'label' => 'Slider 4 – Background Image', 'default' => 'images/slider/layer/3/slide4-bg.jpg'],
                'slider_5_bg'          => ['type' => 'image', 'label' => 'Slider 5 – Background Image', 'default' => 'images/slider/layer/4/slide4-bg.jpg'],
                'home_portfolio_1_img' => ['type' => 'image', 'label' => 'Portfolio Image 1 (Why Bold Fellows)', 'default' => 'images/portfolio/why-cyber-sec-africa.jpg'],
                'home_portfolio_2_img' => ['type' => 'image', 'label' => 'Portfolio Image 2 (Our Services)',     'default' => 'images/portfolio/csa-services.jpg'],
                'home_portfolio_3_img' => ['type' => 'image', 'label' => 'Portfolio Image 3 (Our Products)',     'default' => 'images/portfolio/csa-products.jpg'],
            ],
            'About Us' => [
                // ── Text fields ────────────────────────────────────────────
                'company_brief'           => ['type' => 'textarea', 'label' => 'Company Brief (Top Paragraph)'],
                'our_mission'             => ['type' => 'text',     'label' => 'Our Mission'],
                'our_vision'              => ['type' => 'text',     'label' => 'Our Vision'],
                'our_values'              => ['type' => 'text',     'label' => 'Our Values'],
                'about_company_desc_1'    => ['type' => 'textarea', 'label' => 'About the Company Paragraph 1'],
                'about_company_desc_2'    => ['type' => 'textarea', 'label' => 'About the Company Paragraph 2'],
                'about_company_desc_3'    => ['type' => 'textarea', 'label' => 'About the Company Paragraph 3'],
                'our_philosophy'          => ['type' => 'textarea', 'label' => 'Our Philosophy'],
                'our_approach'            => ['type' => 'textarea', 'label' => 'Our Unique, Proven Approach'],
                // ── Skills Level fields ────────────────────────────────────
                'skill_1_name'  => ['type' => 'text', 'label' => 'Skill 1 – Name',        'default' => 'Penetration Testing'],
                'skill_1_level' => ['type' => 'text', 'label' => 'Skill 1 – Level (%)',   'default' => '80'],
                'skill_2_name'  => ['type' => 'text', 'label' => 'Skill 2 – Name',        'default' => 'Security Solutions'],
                'skill_2_level' => ['type' => 'text', 'label' => 'Skill 2 – Level (%)',   'default' => '100'],
                'skill_3_name'  => ['type' => 'text', 'label' => 'Skill 3 – Name',        'default' => 'Security Training'],
                'skill_3_level' => ['type' => 'text', 'label' => 'Skill 3 – Level (%)',   'default' => '90'],
                // ── Image fields ───────────────────────────────────────────
                'about_slider_1_img'    => ['type' => 'image', 'label' => 'About Page Slider Image 1',    'default' => 'images/slider/cyber-security.jpg'],
                'about_slider_2_img'    => ['type' => 'image', 'label' => 'About Page Slider Image 2',    'default' => 'images/slider/about-csa.jpg'],
                'about_slider_3_img'    => ['type' => 'image', 'label' => 'About Page Slider Image 3',    'default' => 'images/slider/about-csa-1.jpg'],
                'about_portfolio_1_img' => ['type' => 'image', 'label' => 'About Portfolio Image 1 (Why Bold Fellows)', 'default' => 'images/portfolio/why-cyber-sec-africa.jpg'],
                'about_portfolio_2_img' => ['type' => 'image', 'label' => 'About Portfolio Image 2 (Our Services)',     'default' => 'images/portfolio/csa-services.jpg'],
                'about_portfolio_3_img' => ['type' => 'image', 'label' => 'About Portfolio Image 3 (Our Products)',     'default' => 'images/portfolio/csa-products.jpg'],
            ],
            'Our Services' => [
                // ── Text fields ────────────────────────────────────────────
                'services_intro'   => ['type' => 'textarea', 'label' => 'Services Intro Paragraph'],
                'service_1_title'  => ['type' => 'text',     'label' => 'Service 1 Title'],
                'service_1_desc'   => ['type' => 'textarea', 'label' => 'Service 1 Description'],
                'service_2_title'  => ['type' => 'text',     'label' => 'Service 2 Title'],
                'service_2_desc'   => ['type' => 'textarea', 'label' => 'Service 2 Description'],
                'service_3_title'  => ['type' => 'text',     'label' => 'Service 3 Title'],
                'service_3_desc'   => ['type' => 'textarea', 'label' => 'Service 3 Description'],
                // ── Image fields ───────────────────────────────────────────
                'services_team_img_1'        => ['type' => 'image', 'label' => 'Services Section Image 1 (Network Security)',  'default' => 'images/team/network-security-assessment.jpg'],
                'services_team_img_2'        => ['type' => 'image', 'label' => 'Services Section Image 2 (Web App Security)', 'default' => 'images/team/web-app-security.jpg'],
                'services_portfolio_pentest' => ['type' => 'image', 'label' => 'Popular Services: Penetration Testing Image', 'default' => 'images/portfolio/pen-test.jpg'],
                'services_portfolio_fraud'   => ['type' => 'image', 'label' => 'Popular Services: Fraud Investigation Image', 'default' => 'images/portfolio/fraud.jpg'],
            ],
            'Products' => [
                // ── Text fields ────────────────────────────────────────────
                'products_intro'  => ['type' => 'textarea', 'label' => 'Products Intro Paragraph'],
                'product_1_title' => ['type' => 'text',     'label' => 'Product 1 Title (End Point Security)'],
                'product_1_desc'  => ['type' => 'textarea', 'label' => 'Product 1 Description'],
                'product_2_title' => ['type' => 'text',     'label' => 'Product 2 Title (Intrusion Prevention)'],
                'product_2_desc'  => ['type' => 'textarea', 'label' => 'Product 2 Description'],
                'product_3_title' => ['type' => 'text',     'label' => 'Product 3 Title (Vulnerability Management)'],
                'product_3_desc'  => ['type' => 'textarea', 'label' => 'Product 3 Description'],
                // ── Image fields ───────────────────────────────────────────
                'product_1_img' => ['type' => 'image', 'label' => 'Product 1 Image (End Point Security)',    'default' => 'images/blog/endpoint.jpg'],
                'product_2_img' => ['type' => 'image', 'label' => 'Product 2 Image (Intrusion Prevention)',  'default' => 'images/blog/intrusion-prevention.jpg'],
                'product_3_img' => ['type' => 'image', 'label' => 'Product 3 Image (Vulnerability Mgmt)',    'default' => 'images/blog/vulnerability-assessment.jpg'],
                'product_4_img' => ['type' => 'image', 'label' => 'Product 4 Image (Full Disk Encryption)',  'default' => 'images/blog/full-disk.jpg'],
                'product_5_img' => ['type' => 'image', 'label' => 'Product 5 Image (Source Code Analysis)', 'default' => 'images/blog/source-code.jpg'],
                'product_6_img' => ['type' => 'image', 'label' => 'Product 6 Image (Network Access Control)','default' => 'images/blog/network-access-control.jpg'],
                'product_7_img' => ['type' => 'image', 'label' => 'Product 7 Image (SIEM Management)',      'default' => 'images/blog/siem-management.jpg'],
                'product_8_img' => ['type' => 'image', 'label' => 'Product 8 Image (Computer Forensics)',   'default' => 'images/blog/computer-forensic-equipment.jpg'],
                'product_9_img' => ['type' => 'image', 'label' => 'Product 9 Image (Mobile Forensics)',     'default' => 'images/blog/mobile-forensics.jpg'],
            ],
            'Contact' => [
                'contact_intro'  => ['type' => 'textarea', 'label' => 'Contact Intro Text'],
                'address'        => ['type' => 'textarea', 'label' => 'Address Details'],
                'phone_numbers'  => ['type' => 'textarea', 'label' => 'Phone Numbers'],
                'email'          => ['type' => 'text',     'label' => 'Email Address'],
            ],
            'Footer Section' => [
                'about_us_text'      => ['type' => 'textarea', 'label' => 'About Us Text (Column 1)'],
                'contact_address'    => ['type' => 'text',     'label' => 'Contact Address (Column 3)'],
                'contact_tel'        => ['type' => 'text',     'label' => 'Contact Telephone'],
                'contact_safaricom'  => ['type' => 'text',     'label' => 'Contact Safaricom'],
                'contact_airtel'     => ['type' => 'text',     'label' => 'Contact Airtel'],
                'contact_fax'        => ['type' => 'text',     'label' => 'Contact Fax'],
                'contact_email'      => ['type' => 'text',     'label' => 'Contact Email'],
                'copyright_text'     => ['type' => 'text',     'label' => 'Copyright Text'],
            ]
        ];

        return $schemas[$section] ?? [];
    }

    public function updateSection(Request $request, $section)
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

        // Handle image uploads
        foreach ($imageKeys as $key) {
            if ($request->hasFile($key) && $request->file($key)->isValid()) {
                $file      = $request->file($key);
                $extension = $file->getClientOriginalExtension();
                $filename  = $key . '_' . time() . '.' . $extension;

                // Store directly in public/uploads/ (no symlink needed under XAMPP)
                $file->move(public_path('uploads'), $filename);
                $path = 'uploads/' . $filename;

                FrontendContent::updateOrCreate(
                    ['section' => $section, 'key' => $key],
                    ['value' => $path]
                );
                Cache::forget("frontend_content_{$section}_{$key}");
            }
        }

        return redirect()->back()->with('success', 'Content updated successfully!');
    }
}
