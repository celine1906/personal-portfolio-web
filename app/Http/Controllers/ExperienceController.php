<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Experience;

class ExperienceController extends Controller
{
    public function createExperience(Request $request) {
        $experience = new Experience();

        $experience->name = $request->name;
        $experience->year = $request->year;
        $experience->description = $request->description;
        $experience->save();
        return redirect()->route('data.show')->with('success', 'Experience updated successfully');
    }

    public function showCreateFormExp() {
        return view('Experience.createExperience');
    }

    public function editExperience($id) {
        $experience = Experience::find($id);
        return view('Experience.editExperience', ['experience' => $experience, 'id' => $id]);
    }

    public function updateExperience(Request $request, $id) {
        $experience = Experience::findOrFail($id);
        // Update data profil berdasarkan input dari form
        $experience->name = $request->name;
        $experience->year = $request->year;
        $experience->description = $request->description;
        $experience->save();

        // Redirect ke halaman tertentu atau kembali ke halaman sebelumnya
        return redirect()->route('data.show')->with('success', 'experience updated successfully');
    }

    public function deleteExperience($id) {
        $experience = Experience::find($id);
        $experience->delete();
        return redirect()->route('data.show')->with('success', 'experience deleted successfully');
    }
}
