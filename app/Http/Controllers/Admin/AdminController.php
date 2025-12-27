<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Banner;
use Illuminate\Support\Facades\Storage;

class AdminController extends Controller
{

    public function index()
    {
        return view('admin.home');
    }

    public function admin_banners()
    {
        $banners = Banner::orderBy('id', 'DESC')->get();

        return view('admin.banners', compact('banners'));
    }

    public function store_banner(Request $request)
    {
        try {
            // -----------------------------
            // Create OR Update
            // -----------------------------
            if ($request->filled('id')) {
                $banner = Banner::find($request->id);

                if (! $banner) {
                    return response()->json([
                        'status' => false,
                        'message' => 'Banner not found.'
                    ], 404);
                }

                $action = 'updated';
            } else {
                $banner = new Banner();
                $action = 'created';
            }

            // -----------------------------
            // Assign fields
            // -----------------------------
            $banner->title       = $request->title;
            $banner->subtitle    = $request->subtitle;
            $banner->description = $request->description;
            $banner->is_active =   $request->is_status;

            // -----------------------------
            // Image upload
            // -----------------------------
            if ($request->hasFile('image')) {

                // delete old image if exists (update case)
                if ($banner->image && Storage::disk('public')->exists('banners/' . $banner->image)) {
                    Storage::disk('public')->delete('banners/' . $banner->image);
                }

                // generate unique name
                $imageName = time() . '_' . uniqid() . '.' .
                    $request->file('image')->getClientOriginalExtension();

                // store image
                $request->file('image')->storeAs('banners', $imageName, 'public');

                $banner->image = $imageName;
            }

            // -----------------------------
            // Save
            // -----------------------------
            $banner->save();

            return response()->json([
                'status'  => true,
                'message' => "Banner {$action} successfully.",
                'data'    => $banner
            ], 200);
        } catch (\Exception $e) {
            return response()->json([
                'status'  => false,
                'message' => 'Something went wrong.',
                'error'   => $e->getMessage()
            ], 500);
        }
    }

    public function show_banner($id)
    {
        $banner = Banner::findOrFail($id);

        return response()->json($banner);
    }

    public function toggleStatus(Request $request)
    {
        $banner = Banner::findOrFail($request->id);

        // toggle status
        $banner->is_active = $banner->is_active == 1 ? 0 : 1;
        $banner->save();

        return response()->json([
            'status' => true,
            'new_status' => $banner->is_active,
            'message' => $banner->is_active
                ? 'Banner activated successfully'
                : 'Banner deactivated successfully'
        ]);
    }

    public function destroy($id)
    {
        $banner = Banner::findOrFail($id);

        // delete image from storage if exists
        if ($banner->image && Storage::disk('public')->exists('banners/' . $banner->image)) {
            Storage::disk('public')->delete('banners/' . $banner->image);
        }

        // delete banner record
        $banner->delete();

        return response()->json([
            'status' => true,
            'message' => 'Banner deleted successfully.'
        ]);
    }

    public function manage_testimonials()
    {
        return view('admin.testimonials');
    }
}
