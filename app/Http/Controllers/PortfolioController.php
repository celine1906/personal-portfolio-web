<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Portfolio;
use Illuminate\Support\Facades\Storage;

class PortfolioController extends Controller
{
    //
    public function getData() {
        $portfolio = Portfolio::get();

        return view('portfolio')->with('portfolio', $portfolio);
    }

    public function createPortfolio(Request $request) {
        $portfolio = new Portfolio();
        $portfolio->title = $request->title;
        $portfolio->description = $request->description;
        if ($request->hasFile('image')) {
            // Storage::disk('public')->delete($portfolio->image);
            $imageName = time().$request->file('image')->getClientOriginalName();
            $imagePath = $request->file('image')->storeAs('images', $imageName, 'public'); // Get the provided image name and extension
            // Store the image in the 'images' directory
            $portfolio->image = '/storage/'.$imagePath;
        }
        $portfolio->save();
        return redirect()->route('show.portfolio')->with('success', 'Portfolio updated successfully');
    }

    public function showCreateFormPort() {
        return view('Portfolio.createPortfolio');
    }

    public function editPortfolio($id) {
        $portfolio = Portfolio::find($id);
        return view('Portfolio.editPortfolio', ['portfolio' => $portfolio, 'id' => $id]);
    }

    public function updatePortfolio(Request $request, $id) {
        $portfolio = Portfolio::findOrFail($id);
        if ($request->hasFile('image')) {
            // Hapus gambar lama jika ada
            Storage::disk('public')->delete($portfolio->image);

            $imageName = time().$request->file('image')->getClientOriginalName();
            $imagePath = $request->file('image')->storeAs('images', $imageName, 'public'); // Get the provided image name and extension
         // Store the image in the 'images' directory
            $portfolio->image = '/storage/'.$imagePath;
        }
        $portfolio->title = $request->title;
        $portfolio->description = $request->description;
        $portfolio->save();

        // Redirect ke halaman tertentu atau kembali ke halaman sebelumnya
        return redirect()->route('show.portfolio')->with('success', 'portfolio updated successfully');
    }

    public function deletePortfolio($id) {
        $portfolio = Portfolio::find($id);
        $portfolio->delete();
        return redirect()->route('show.portfolio')->with('success', 'portfolio deleted successfully');
    }
}
