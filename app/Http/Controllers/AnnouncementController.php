<?php

namespace App\Http\Controllers;

use App\Models\Announcement;
use Illuminate\Http\Request;

class AnnouncementController extends Controller
{
    public function announcementDetail($announcementId){
        return view('announcement.announcement_detail', compact('announcementId'));
    }


    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function announcementForm()
    {
        return view('announcement.announcement_form',);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function announcementShow()
    {
        $announcements = Announcement::with('categories')->get();
        return view('announcement.announcement_list', compact('announcements'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function announcementEdit($announcementId)
    {
        return view('announcement.announcement_edit', compact('announcementId'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Announcement $announcement)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Announcement $announcement)
    {
        //
    }
}
