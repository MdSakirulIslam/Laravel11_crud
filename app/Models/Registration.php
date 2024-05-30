<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Registration extends Model
{
    use HasFactory;
    public static $registration,$image,$imageName,$extention,$derectory,$imageUrl;
    public static function newRegistration($request)
    {
        self::$image = $request->file('image');
        self::$extention = self::$image->getClientOriginalExtension();
        self::$imageName = time().' '. self::$extention;
        self::$derectory = 'uploads/students-images/';
        self::$image->move(self::$derectory,self::$imageName);
        self::$imageUrl = self::$derectory.self::$imageName;

        self::$registration = new Registration();
        self::$registration->name = $request->name;
        self::$registration->studentId = $request->studentId;
        self::$registration->description = $request->description;
        self::$registration->image = self::$imageUrl;
        self::$registration->save();
    }
    public static function updateList($request,$id)
    {
        self::$registration = Registration::find($id);
        if ($request->file('image'))
        {
            if (file_exists(self::$registration->image))
            {
                unlink(self::$registration->image);
            }
            self::$image = $request->file('image');
            self::$extention = self::$image->getClientOriginalExtension();
            self::$imageName = time().' '. self::$extention;
            self::$derectory = 'uploads/students-images/';
            self::$image->move(self::$derectory,self::$imageName);
            self::$imageUrl = self::$derectory.self::$imageName;

        }
        else
        {
            self::$imageUrl = self::$registration->image;
        }
        self::$registration->name = $request->name;
        self::$registration->studentId = $request->studentId;
        self::$registration->description = $request->description;
        self::$registration->image = self::$imageUrl;
        self::$registration->save();

    }
    public static function deleteList($id)
    {
        self::$registration = Registration::find($id);
        if (file_exists(self::$registration->image))
        {
            unlink(self::$registration->image);
        }
        self::$registration->delete();

    }
}
