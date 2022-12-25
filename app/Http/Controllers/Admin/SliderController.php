<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Slider;
use App\Http\Requests\SliderImagesRequest;
use Illuminate\Http\Request;




class SliderController extends Controller
{
    public function addImages(){
        $images = Slider::get();
        return view('dashboard.sliders.create',compact('images'));
    }

    public function saveSliderImages(Request $request){

        $file = $request ->file('dzfile');
        $filename = uploadImage('sliders', $file);

        return response()->json([
            'name' => $filename, 
            'original_name' => $file -> getClientOriginalName(),
        ]);
    }

    public function saveSliderImagesDB(SliderImagesRequest $request ){
        try{

            if($request ->has('document')&& count($request->document)>0){
                foreach($request ->document as $image){
                   Slider::create([
                    'photo' => $image,
                   ]);
                }
            }
    
            return redirect()->back()->with(['success'=>'SuccessFully Created']);

        }catch(\Exception $ex){
            return redirect()->back()->with(['success'=>'SuccessFully Created']);
        }
 
    }



    /**
     * @param $id
     * 
     * Delete Slider
     */
    public function deleteSliderImages($id){
        try{
           $slider = Slider::find($id);
    
           if(!$slider){
              return redirect()->route('admin.sliders.create')->with(['error'=>'This Slide does not exist']);
           }

           $slider ->delete();
    
           return redirect()->route('admin.sliders.create')->with(['success'=>'The section was deleted successfully']);
    
        }catch(\Exception $ex){
           DB::rollback();
           return redirect()->route('admin.sliders.create')->with(['error' => 'There is Something Wrong In Session']);
        }
    }
}
