<?php
namespace App\Traits;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

trait ImageUploadTrait {

    /**
     * @param Request $request
     * @return array
     */
    public function store_Image(Request $request)
    {
        if ($request->hasFile('image')) {
            $md5Name = md5_file($request->image->getRealPath());
            $guessExtension = $request->image->guessExtension();
            $img=$md5Name.round(microtime(true) * 1000).".".$guessExtension;

//            $basePath = 'https://lanchastaging.s3.sa-east-1.amazonaws.com';
            $basePath=url();
            $documentPath = $request->file('image')->storeAs(
                'original',
                $img,
                'public'
            );
            $image = \Intervention\Image\Facades\Image::make($request->file('image'))->resize(150, 150, function ($constraint) {
                $constraint->aspectRatio();
                $constraint->upsize();
            })->encode($guessExtension, 60);
            Storage::disk('public')->put('/thumbnail/'.$img, $image->stream(), 'public');

            $image = \Intervention\Image\Facades\Image::make($request->file('image'))->resize(800, null, function ($constraint) {
                $constraint->aspectRatio();
                $constraint->upsize();
            })->encode($guessExtension, 60);
            Storage::disk('public')->put('/medium/'.$img, $image->stream(), 'public');

            return [
                'status' => true,
                'baseurl'=>$basePath,
                'folders'=>[
                    'original',
                    'medium',
                    'thumbnail'
                ],
                'image' => $img
            ];
        }
        return [
            'status' => false,
            'message' => 'Something went wrong!',
        ];
    }


}
