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
        return view('admin.edit-section', compact('section', 'contents'));
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
