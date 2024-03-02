<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UploadController extends Controller
{
    //
    public function getFile()
    {
        return view('formUpload');
    }

    public function uploadFile(Request $request)
    {
        $file = $request->file('image');
        if ($request->hasFile('image')) {
            //Lấy kích cỡ của file đơn vị tính theo bytes
            $fileSize = $file->getSize() / (1024 * 1024);
            //Lấy kiểu file
            $fileType = $file->getMimeType();

            if ($fileSize <= 5 && ($fileType == 'image/jpeg' ||  $fileType == 'image/png' ||  $fileType == 'image/gif')) {

                if ($request->file('image')->isValid()) {
                    $ext = $request->image->extension();  /// kiểu tệp file 
                    $path = $request->image->storeAs('images', 'nguyenthilinh.' . $ext);  /// đổi file thành 1 tên khác
                    //Lấy Tên files
                    $fileName = $file->getClientOriginalName();
                    //Lấy Đuôi File
                    $fileExtension = $file->getClientOriginalExtension();
                    return view('formUpload', compact('fileName', 'fileExtension'));
                }
            } else {
                $checkType = '<b>Ghi chú:</b> Chỉ cho phép định dạng .jpg, .jpeg, .gif và kích thước tối đa tập tin là 5MB.';
                return view('formUpload', compact('checkType'));
            }
        } else {
            $checkFile = 'Vui lòng chọn tệp cần Upload';
            return view('formUpload', compact('checkFile'));
        }
    }
}
