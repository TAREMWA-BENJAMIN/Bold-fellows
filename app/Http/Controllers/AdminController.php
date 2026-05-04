<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\FrontendContent;

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
                'slider_1_title' => ['type' => 'text', 'label' => 'Slider 1 Title (e.g. The 6th Ethiopia...)'],
                'slider_1_subtitle' => ['type' => 'text', 'label' => 'Slider 1 Subtitle (e.g. Date: 29th November...)'],
                'slider_1_desc' => ['type' => 'textarea', 'label' => 'Slider 1 Description'],
                
                'slider_2_title' => ['type' => 'text', 'label' => 'Slider 2 Title (e.g. Advanced Cyber Security...)'],
                'slider_2_desc' => ['type' => 'textarea', 'label' => 'Slider 2 Description'],
                
                'intro_title' => ['type' => 'text', 'label' => 'Intro Title (e.g. Cyber Security Consultancy and Training)'],
                
                'feature_1_title' => ['type' => 'text', 'label' => 'Feature 1 Title'],
                'feature_1_desc' => ['type' => 'textarea', 'label' => 'Feature 1 Description'],
                
                'feature_2_title' => ['type' => 'text', 'label' => 'Feature 2 Title'],
                'feature_2_desc' => ['type' => 'textarea', 'label' => 'Feature 2 Description'],
                
                'feature_3_title' => ['type' => 'text', 'label' => 'Feature 3 Title'],
                'feature_3_desc' => ['type' => 'textarea', 'label' => 'Feature 3 Description'],
            ],
            'About Us' => [
                'company_brief' => ['type' => 'textarea', 'label' => 'Company Brief (Top Paragraph)'],
                'our_mission' => ['type' => 'text', 'label' => 'Our Mission'],
                'our_vision' => ['type' => 'text', 'label' => 'Our Vision'],
                'our_values' => ['type' => 'text', 'label' => 'Our Values'],
                'about_company_desc_1' => ['type' => 'textarea', 'label' => 'About the Company Paragraph 1'],
                'about_company_desc_2' => ['type' => 'textarea', 'label' => 'About the Company Paragraph 2'],
                'about_company_desc_3' => ['type' => 'textarea', 'label' => 'About the Company Paragraph 3'],
                'our_philosophy' => ['type' => 'textarea', 'label' => 'Our Philosophy'],
                'our_approach' => ['type' => 'textarea', 'label' => 'Our Unique, Proven Approach'],
            ],
            'Our Services' => [
                'services_intro' => ['type' => 'textarea', 'label' => 'Services Intro Paragraph'],
                'service_1_title' => ['type' => 'text', 'label' => 'Service 1 Title'],
                'service_1_desc' => ['type' => 'textarea', 'label' => 'Service 1 Description'],
                'service_2_title' => ['type' => 'text', 'label' => 'Service 2 Title'],
                'service_2_desc' => ['type' => 'textarea', 'label' => 'Service 2 Description'],
                'service_3_title' => ['type' => 'text', 'label' => 'Service 3 Title'],
                'service_3_desc' => ['type' => 'textarea', 'label' => 'Service 3 Description'],
            ],
            'Products' => [
                'products_intro' => ['type' => 'textarea', 'label' => 'Products Intro Paragraph'],
                'product_1_title' => ['type' => 'text', 'label' => 'Product 1 Title'],
                'product_1_desc' => ['type' => 'textarea', 'label' => 'Product 1 Description'],
                'product_2_title' => ['type' => 'text', 'label' => 'Product 2 Title'],
                'product_2_desc' => ['type' => 'textarea', 'label' => 'Product 2 Description'],
                'product_3_title' => ['type' => 'text', 'label' => 'Product 3 Title'],
                'product_3_desc' => ['type' => 'textarea', 'label' => 'Product 3 Description'],
            ],
            'Contact' => [
                'contact_intro' => ['type' => 'textarea', 'label' => 'Contact Intro Text'],
                'address' => ['type' => 'textarea', 'label' => 'Address Details'],
                'phone_numbers' => ['type' => 'textarea', 'label' => 'Phone Numbers'],
                'email' => ['type' => 'text', 'label' => 'Email Address'],
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
            ]
        ];

        return $schemas[$section] ?? [];
    }

    public function updateSection(Request $request, $section)
    {
        $data = $request->except(['_token', '_method']);
        
        foreach ($data as $key => $value) {
            FrontendContent::updateOrCreate(
                ['section' => $section, 'key' => $key],
                ['value' => $value]
            );
            
            // Clear the cache for this specific content
            \Illuminate\Support\Facades\Cache::forget("frontend_content_{$section}_{$key}");
        }

        return redirect()->back()->with('success', 'Content updated successfully!');
    }
}
