<?php
    use Image as Img;

    function imagePath($image)
    {
        if($image) {
            return '/uploads/images/' . $image;
        }

        return '/uploads/images/default.jpg'; 
    }

    function uploadImage($image, $width="", $height="")
    {
        // $image = $request->file('profile_image');
        $fileExtension   = strtolower($image->getClientOriginalExtension()); 
        $file_name       = sha1(uniqid().$image.uniqid()).'.'.$fileExtension;
    
        $destinationPath = 'uploads/images/';

        $img = Img::make($image->getRealPath());
        $img->resize($width, $height)->save($destinationPath.$file_name);

        return $img->basename;
    }

    function deleteImage($image)
    {
        $root = realpath($_SERVER['DOCUMENT_ROOT']);
        $old_image = $root . imagePath($image);
        if(unlink($old_image)){
            return true;
        }
        return false;
    }

    function updateNewImageOrKeepOld($newImage, $oldImage, $width, $height)
    {
        if($newImage) {
            if($oldImage)
            {
               deleteImage($oldImage);
            }
            return uploadImage($newImage, $width, $height);
        } else {
           return  $oldImage;
        }
    }
