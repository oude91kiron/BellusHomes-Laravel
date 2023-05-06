<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\http\Enums\CategoryType;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Requests\MainCategoryRequest;
use  DB;

class MainCategoriesController extends Controller
{
    /**
     *
     */
    public function index()
    {
        $categories = Category::with('_parent')->orderBy('id', 'DESC')->paginate(PAGINATION_COUNT);
        return view('dashboard.categories.index', compact('categories'));
    }



    /**
     *
     */
    public function create()
    {
        $categories = Category::select('id')->get();
        return view('dashboard.categories.create', compact('categories'));
    }


    /**
     *
     */
    public function store(MainCategoryRequest $request)
    {
        try {
            DB::beginTransaction();

            //validation
            if (!$request->has('is_active')) {
                $request->request->add(['is_active' => 0]);
            } else {
                $request->request->add(['is_active' => 1]);
            }

            $category =Category::create($request->except('_token'));

            //save translations
            $category->name = $request->name;


            $category->save();

            DB::commit();
            return redirect()->route('admin.categories')->with(['success' => 'The Session Has Updated Successfully']);
        } catch (\Exception $ex) {
            DB::rollback();
            return redirect()->route('admin.categories')->with(['error' => 'There is Something Wrong In Session']);
        }
    }



    /**
     *
     */
    public function edit($id)
    {
        $category =Category::orderBy('id', 'DESC')->find($id);
        // dump($category);
        if (!$category) {
            return redirect()->route('admin.categories')->with(['error'=>'This section does not exist']);
        }
        //dump($category);

        return view('dashboard.categories.edit', compact('category'));
    }


    /**
     *
     */
     public function update($id, MainCategoryRequest $request)
     {

        
        try{
            DB::beginTransaction();
      
            //validation
    
            if (!$request->has('is_active'))
                $request->request->add(['is_active' => 0]);
            else
                $request->request->add(['is_active' => 1]);
   
   
                $category=  Category::find($id);
                if(!$category){
                  return redirect()->route('admin.categories')->with(['error'=>'This section does not exist']);
               }
               $category->update($request->all());
   
               //save translation
               $category->name = $request->name;
               $category->save();
   
   
               DB::commit();
    
               return redirect()->route('admin.categories')->with(['success' => 'The Session Has Updated Successfully']);
   
         }catch(\Exception $ex){
            DB::rollback();
            return redirect()->route('admin.categories')->with(['error' => 'There is Something Wrong In Session']);
         }
     }



    /**
      *
      */
    public function delete(Category $category)
    {
        try {

            if (!$category) {
                return redirect()->route('admin.categories')->with(['error'=>'This section does not exist']);
            }

            $category ->delete();

            return redirect()->route('admin.categories')->with(['success'=>'The section was deleted successfully']);
        } catch(\Exception $ex) {
            DB::rollback();
            return redirect()->route('admin.categories')->with(['error' => 'There is Something Wrong In Session']);
        }
    }
}
