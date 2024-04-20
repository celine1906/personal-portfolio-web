<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Education;

class EducationController extends Controller
{
    public function createEducation(Request $request) {
        $edu = new Education();

        $edu->school = $request->school;
        $edu->year = $request->year;
        $edu->major = $request->major;
        $edu->description = $request->description;
        $edu->save();
        return redirect()->route('data.show')->with('success', 'Education updated successfully');
    }

    public function showCreateForm() {
        return view('Education.createEducation');
    }

    public function editEducation($id) {
        $edu = Education::find($id);
        return view('Education.editEducation', ['edu' => $edu, 'id' => $id]);
    }

    public function updateEducation(Request $request, $id) {
        $edu = Education::findOrFail($id);
        // Update data profil berdasarkan input dari form
        $edu->school = $request->school;
        $edu->year = $request->year;
        $edu->major = $request->major;
        $edu->description = $request->description;
        $edu->save();

        // Redirect ke halaman tertentu atau kembali ke halaman sebelumnya
        return redirect()->route('data.show')->with('success', 'edu updated successfully');
    }

    public function deleteEducation($id) {
        $edu = Education::find($id);
        $edu->delete();
        return redirect()->route('data.show')->with('success', 'edu deleted successfully');
    }
}
