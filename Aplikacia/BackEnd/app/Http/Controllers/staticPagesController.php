<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\static_pages;

class staticPagesController extends Controller
{
    public function getText($name)
    {
        $page = static_pages::where('name', $name)->first();
        return $page ? $page->text : 'No page found with that name.';
    }


    public function putText(Request $request, $name) {
        $text = $request->input('text');
    
        // Update the existing page or create a new one
        $page = static_pages::updateOrCreate(
            ['name' => $name], // search criteria
            ['text' => $text]  // values to update
        );
    
        // Return a success response
        return response()->json(['success' => 'Data stored successfully.']);
    }
    
}
