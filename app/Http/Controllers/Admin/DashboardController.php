<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Project;
use App\Models\Contact;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        return view('admin.dashboard', [
        'totalProjects' => Project::count(),
        'totalContacts' => Contact::count(),
        'unreadContacts' => Contact::where('is_read', false)->count(),
        ]);
    }
}
