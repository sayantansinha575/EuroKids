<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Banner;
use App\Models\Testimonial;
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
        $testimonials = Testimonial::orderBy('id', 'DESC')->get();

        return view('admin.testimonials', compact('testimonials'));
    }

    public function store_testimonials(Request $request)
    {
        try {
            // -----------------------------
            // Create OR Update
            // -----------------------------
            if ($request->filled('id')) {
                $testimonial = Testimonial::find($request->id);

                if (! $testimonial) {
                    return response()->json([
                        'status' => false,
                        'message' => 'Testimonial not found.'
                    ], 404);
                }

                $action = 'updated';
            } else {
                $testimonial = new Testimonial();
                $action = 'created';
            }

            // -----------------------------
            // Assign fields
            // -----------------------------
            $testimonial->parent_name       = $request->parent_name;
            $testimonial->child_name    = $request->child_name;
            $testimonial->message = $request->message;
            $testimonial->is_active =   $request->is_status;

            // -----------------------------
            // Image upload
            // -----------------------------
            if ($request->hasFile('parent_image')) {

                // delete old image if exists (update case)
                if ($testimonial->image && Storage::disk('public')->exists('testimonials/' . $testimonial->image)) {
                    Storage::disk('public')->delete('testimonials/' . $testimonial->image);
                }

                // generate unique name
                $imageName = time() . '_' . uniqid() . '.' .
                    $request->file('parent_image')->getClientOriginalExtension();

                // store image
                $request->file('parent_image')->storeAs('testimonials', $imageName, 'public');

                $testimonial->parent_image = $imageName;
            }

            // -----------------------------
            // Save
            // -----------------------------
            $testimonial->save();

            return response()->json([
                'status'  => true,
                'message' => "Testimonial {$action} successfully.",
                'data'    => $testimonial
            ], 200);
        } catch (\Exception $e) {
            return response()->json([
                'status'  => false,
                'message' => 'Something went wrong.',
                'error'   => $e->getMessage()
            ], 500);
        }
    }

    public function show_testimonial($id)
    {
        $testimonial = Testimonial::findOrFail($id);

        return response()->json($testimonial);
    }

    public function toggleStatus_testimonial(Request $request)
    {
        $testimonial = Testimonial::findOrFail($request->id);

        // toggle status
        $testimonial->is_active = $testimonial->is_active == 1 ? 0 : 1;
        $testimonial->save();

        return response()->json([
            'status' => true,
            'new_status' => $testimonial->is_active,
            'message' => $testimonial->is_active
                ? 'Testimonial activated successfully'
                : 'Testimonial deactivated successfully'
        ]);
    }

    public function destroy_testimonial($id)
    {
        $testimonial = Testimonial::findOrFail($id);

        // delete image from storage if exists
        if ($testimonial->parent_image && Storage::disk('public')->exists('testimonials/' . $testimonial->parent_image)) {
            Storage::disk('public')->delete('testimonials/' . $testimonial->parent_image);
        }

        // delete banner record
        $testimonial->delete();

        return response()->json([
            'status' => true,
            'message' => 'Testimonial deleted successfully.'
        ]);
    }
}
