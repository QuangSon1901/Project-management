<?php

namespace App\Http\Controllers\User\Search;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function search(Request $request) {
        $formData = $request->input();
        session()->flashInput($request->input());
        return view('user_page.search.search_body', compact('formData'));
    }
}
