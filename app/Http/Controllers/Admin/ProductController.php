<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\CategoryModel;
use App\Models\ProductModel;
use Str;
use Auth;

class ProductController extends Controller
{
    public function list()
    {
        $data['getRecord']= ProductModel::getRecord();
        $data['header_title']= 'Product';
        return view('admin.product.list',$data);
    }

    public function add()
    {
        $data['header_title']= 'Add New Product';
        return view('admin.product.add',$data);
    }

    public function  insert(Request $request)
    {
        $title=trim($request->title);
        $product =new ProductModel;
        $product->title=$title;
        $product->created_by= Auth::user()->id;
        $product->save();

        $slug=Str::slug($title,"_");

        $checkSlug = ProductModel::checkSlug($slug);
        if(empty($checkSlug))
         {
            $product->slug = $slug;
            $product->save();
        }

        else
        {
            $new_slug =$slug.'_'.$product->id;
            $product->slug =$new_slug;
            $product->save();
        }
        return redirect('admin/product/edit/' . $product->id);

    }

    public function  edit($product_id)
    {
        $product = ProductModel::getSingle($product_id );
        if(!empty($product))
        {
           $data['getCategory']= CategoryModel::getRecordActive();
           $data['product']=$product;
           $data['header_title']= 'Edit Product';
           return view('admin.product.edit',$data);
        }
        else {

            return redirect()->route('admin.product.list')->with('error', 'Product not found');
        }
    }
}
