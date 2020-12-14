<?php

namespace App\Http\Controllers\Admin\Settings;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Admin\Settings\Basic;
use SebastianBergmann\CodeCoverage\Report\Xml\File;
use Image;

class BasicSettingController extends Controller
{
    public function index()
    {
        $basicSettings = Basic::all();
        return view('admin.settings.general', ['basicSettings' => $basicSettings]);
    }
    
    protected function faviconImage($request)
    {
        if ($request->hasFile('favicon')) 
        {
            $image_name = $request->file('favicon');
            $imageFullName = $image_name->getClientOriginalName();
            $new_file_name = explode('.', $imageFullName);
            $image_full_name = "favicon." . end($new_file_name);
            $image_save_directory = "assets/frontEnd/img/";
            $image_url = $image_save_directory . $image_full_name;
            Image::make($image_name)->resize(76, 76)->save($image_url);
            return $image_url;
        }
        else
        {
            $image_url = $request->faviconLink;
            return $image_url;
        }
    }
    
    public function faviconUpdate(Request $request)
    {
        $image_url = $this->faviconImage($request);
        
        $updateFavicon = Basic::find($request->id);
        $updateFavicon->favicon = $image_url;
        $updateFavicon->save();
        
        return redirect('/admin/settings/general');
    }

    public function settingsBasic(Request $request)
    {
        $updateSettings = Basic::find($request->id);
        
        $updateSettings->site_name = $request->site_name;
        $updateSettings->footer_text = $request->footer_text;
        $updateSettings->about_site;
        $updateSettings->footer_text_link = $request->footer_text_link;
        $updateSettings->save();
        
        return redirect('/admin/settings/general');
    }
}
