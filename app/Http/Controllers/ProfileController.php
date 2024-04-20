<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use App\Models\Profile; // Import model Profile
use App\Models\Education;
use App\Models\Experience;
use Illuminate\Support\Facades\Storage;



class ProfileController extends Controller
{
    public function getData() {
        $profile = Profile::first();
        $dateOfBirth = Carbon::parse($profile->dob);
        $age = $dateOfBirth->age;
        $edu = Education::get();
        $experience = Experience::get();
        return view('about')->with('profile', $profile)->with('age', $age)->with('edu', $edu)->with('experience', $experience);
    }

    public function editProfile() {
        $profile = Profile::find(1);
        return view('editProfile', ['profile' => $profile]);
    }

    public function updateProfile(Request $request) {
        $profile = Profile::findOrFail(1);
        // Update data profil berdasarkan input dari form
        $profile->lastEducation = $request->lastEducation;
        $profile->address = $request->address;

        // Jika gambar baru diunggah, simpan gambar yang baru
        if ($request->hasFile('image')) {
            // Hapus gambar lama jika ada
            Storage::disk('public')->delete($profile->image);

            $imageName = time().$request->file('image')->getClientOriginalName();
            $imagePath = $request->file('image')->storeAs('images', $imageName, 'public'); // Get the provided image name and extension
         // Store the image in the 'images' directory
            $profile->image = '/storage/'.$imagePath;
        }
        // tambahkan update untuk bidang lain jika diperlukan
        $profile->save();

        // Redirect ke halaman tertentu atau kembali ke halaman sebelumnya
        return redirect()->route('data.show')->with('success', 'Profile updated successfully');
    }
}
