<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class FileUploadController extends Controller
{
    // Display the file upload form
    public function fileUpload()
    {
        return view('file-upload');  // Ensure file-upload.blade.php exists in resources/views
    }

    // Handle the file upload and rename the file
    public function prosesFileUploadRename(Request $request)
    {
        // Validate the form inputs
        $request->validate([
            'nama_gambar' => 'required|min:5|alpha_dash',  // Validate image name
            'gambar_profile' => 'required|file|image|max:1024',  // Validate the uploaded file
        ]);

        // Get the original file extension
        $extFile = $request->gambar_profile->getClientOriginalExtension();

        // Generate the final file name by combining the input image name with the extension
        $namaFile = $request->nama_gambar . '.' . $extFile;

        // Store the file in the public directory (in storage/app/public/gambar)
        $request->gambar_profile->storeAs('public/gambar', $namaFile);

        // Generate the public URL to access the uploaded image
        $pathPublic = asset('storage/gambar/' . $namaFile);

        // Display a success message and show the uploaded image
        return view('file-upload-success', compact('pathPublic', 'namaFile'));
    }

    // Handle the renaming of the uploaded file
    public function renameFile(Request $request)
    {
        // Validate the new file name
        $request->validate([
            'new_name' => 'required|min:5|alpha_dash',
            'old_name' => 'required',
        ]);

        // Define paths for the old and new files
        $oldPath = storage_path('app/public/gambar/' . $request->old_name);
        $newPath = storage_path('app/public/gambar/' . $request->new_name);

        // Check if the file exists
        if (file_exists($oldPath)) {
            // Rename the file
            rename($oldPath, $newPath);

            // Generate the new path
            $newPublicPath = asset('storage/gambar/' . $request->new_name);

            // Redirect with success message
            return redirect()->route('file-upload-success', ['newFileName' => $request->new_name, 'newFilePath' => $newPublicPath]);
        }

        return redirect()->back()->with('error', 'File not found!');
    }
}
