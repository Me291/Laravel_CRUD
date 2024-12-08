<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FileUploadController extends Controller
{
    public function fileUpload()
    {
        return view('file-upload');
    }

    public function fileUploadRename()
    {
        return view('file-upload-rename');
    }

    public function prosesFileUploadRename(Request $request)
    {
        // Validasi input
        $request->validate([
            'nama_gambar' => 'required|min:5|alpha_dash',
            'gambar_profile' => 'required|file|image|max:10000',
        ]);
    
        // Ambil ekstensi file asli
        $extFile = $request->gambar_profile->getClientOriginalExtension();
    
        // Generate nama file baru menggunakan input nama_gambar
        $namaFile = $request->nama_gambar . '.' . $extFile;
    
        // Simpan file di storage/app/public/images
        $path = $request->gambar_profile->storeAs('public/images', $namaFile);
    
        // Generate URL untuk mengakses file melalui storage link
        $pathPublic = asset('storage/images/' . $namaFile);
    
        // Tampilkan hasil upload
        echo "<div style='font-family: Arial, sans-serif; padding: 20px; border: 1px solid #ddd; border-radius: 8px; max-width: 400px; margin: 20px auto; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);'>
                 <h3 style='color: #28a745; text-align: center;'>Upload Successful!</h3>
                 <p style='text-align: center; color: #555;'>Your image has been uploaded successfully.</p>
                 <div style='text-align: center; margin-bottom: 15px;'>
                     <a href='$pathPublic' style='text-decoration: none; color: #007bff; font-weight: bold;' target='_blank'>$namaFile</a>
                 </div>
                 <div style='text-align: center;'>
                     <img src='$pathPublic' alt='Uploaded Image' style='max-width: 100%; border-radius: 8px; box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);'>
                 </div>
               </div>";
    }
    
}
