<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ProductCategory;
use App\Models\ProductImages;
use Image;
use File;
class ProductController extends Controller
{
    public function productImageList(){
        return view('admin.product.images_list');
    }

    public function addImageForm(){
        $product_category = ProductCategory::get();
        return view('admin.product.add_image_form',compact('product_category'));
    }

    public function addImage(Request $request){
        $this->validate($request, [
            'category'   => 'required|numeric',
            'caption'=>'required',
            'image.*' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        
        if ($request->hasFile('image')) {
            
                $product_images = new ProductImages();
                $image = $request->file('image');
                $image_name = time() . date('Y-M-d') . '.' . $image->getClientOriginalExtension();
                $destinationPath = base_path() . '/public/images/product/';
                $img = Image::make($image->getRealPath());
                $img->save($destinationPath . '/' . $image_name);
                
                $destination = base_path() . '/public/images/product/thumb/';
                $img = Image::make($image->getRealPath());
                $img->resize(600, 600, function ($constraint) {
                    $constraint->aspectRatio();
                })->save($destination . '/' . $image_name);
                $product_images->product_category_id = $request->input('category');
                $product_images->images = $image_name;
                $product_images->caption = $request->input('caption');
                $product_images->save();
            
            return redirect()->back()->with('message',' Product Image Added Successfull');
        } else {
            return redirect()->back()->with('error','Something Wrong Please Try again');
        }

    }

    public function imageListAjax(Request $request){
        return datatables()->of(ProductImages::get())
            ->addIndexColumn()
            ->addColumn('action', function ($row) {
                $btn = '<a href="' . route('admin.product_image_edit_form', ['id' => $row->id]) . '" class="btn btn-info waves-effect waves-light trash" target="_blank">Edit</a>';
                $btn.='<a href="' . route('admin.delete_product_image', ['id' => $row->id]) . '" class="btn btn-warning waves-effect waves-light trash" >Delete</a>';
                return $btn;
            })->addColumn('name', function ($row) {
                if (isset($row->Category->category_name)) {
                    return $row->Category->category_name;
                } else {
                    return null;
                }
            })->addColumn('images', function ($row) {
                if (isset($row->images)) {
                     $img = '<img src="' . asset('images/product/thumb/'.$row->images) . '" style="width:100px;height:100px">';
                     return $img;
                } else {
                    return null;
                }
            })->addColumn('caption', function ($row) {
                if (isset($row->caption)) {
                    return $row->caption;
                } else {
                    return null;
                }
            })
            ->rawColumns(['action','name', 'images','caption'])
            ->make(true);
    }

    public function imageEditForm($id){
        $image_data = ProductImages::where('id',$id)->first();
        $product_category = ProductCategory::get();
        return view('admin.product.image_edit_form',compact('image_data','product_category'));

    }

    public function updateImage(Request $request,$id){
        
        $this->validate($request, [
            'caption'   => 'required',
            'category'=>'required',
            'image.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        
        $caption = $request->input('caption');
        $category = $request->input('category');
        $image_name = null;
        if($request->hasfile('image'))
        {
        
            
            $cat_prev_image = ProductImages::where('id',$id)->first();

            $path = base_path().'/public/images/product/thumb';
            File::exists($path) or File::makeDirectory($path, 0777, true, true);
            $path_thumb = base_path().'/public/images/product/thumb';
            File::exists($path_thumb) or File::makeDirectory($path_thumb, 0777, true, true);

        	$image = $request->file('image');
            $destination = base_path().'/public/images/product/';
            $image_extension = $image->getClientOriginalExtension();
            $image_name = md5(date('now').time())."-".uniqid()."."."$image_extension";
            $original_path = $destination.$image_name;
            Image::make($image)->save($original_path);


            $thumb_path = base_path().'/public/images/product/thumb/'.$image_name;
            $img = Image::make($image->getRealPath());
            $img->resize(null,400, function ($constraint) {
                $constraint->aspectRatio();
            })->save($thumb_path);

            $prev_img_delete_path = base_path().'/public/images/product/'.$cat_prev_image->image;
            $prev_img_delete_path_thumb = base_path().'/public/images/product/thumb/'.$cat_prev_image->image;
            if ( File::exists($prev_img_delete_path)) {
                File::delete($prev_img_delete_path);
            }

            if ( File::exists($prev_img_delete_path_thumb)) {
                File::delete($prev_img_delete_path_thumb);
            }

            ProductImages::where('id',$id)
            ->update([
               
                'caption' =>$caption,
                'product_category_id'=>$category,
                'image'=>$image_name,
               
            ]);

            return redirect()->back()->with('message','Product Images Updated Successfully');
        }else{
            ProductImages::where('id',$id)
            ->update([
                'caption' =>$caption,
                'product_category_id'=>$category,
            ]);
            return redirect()->back()->with('message','Product Images Updated Successfully');
        }
    }

    public function deleteImage($id){
       
        $prev_image = ProductImages::where('id',$id)->first();
        $prev_img_delete_path = base_path().'/public/images/product/'.$prev_image->image;
        $prev_img_delete_path_thumb = base_path().'/public/images/product/thumb/'.$prev_image->image;
        if ( File::exists($prev_img_delete_path)) {
            File::delete($prev_img_delete_path);
        }

        if ( File::exists($prev_img_delete_path_thumb)) {
            File::delete($prev_img_delete_path_thumb);
        }
        ProductImages::where('id',$id)->delete();
        return redirect()->back();
    }
}

