<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

use App\Language;

use App\Category;
use App\CategoryLang;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index(Request $request)
    {
        $user = $request->user() ? $request->user()->toArray() : ['id' => null];
        
        return view('category/category', ['module' => 'category', 'user' => $user, 'token' => csrf_token()]);
    }
    
    public function postList(Request $request)
    {
        $category = new Category();
        
        $list = $category->orderBy('ord', 'asc')->get();
        if ($list) {
            foreach ($list as $v) {
                $v->lang = CategoryLang::where('id', $v->id)->where('lang_id', 1)->first();
            }
        }
        
        $content = view('category/categorylist', ['list' => $list])->render();
        
        return response()->json(['list' => [], 'content' => $content, 'pagination' => '-na-', 'token' => csrf_token()]);
    }
    
    public function postCreate(Request $request)
    {
        $lang = new Language();
        $lang_list = $lang->get();
        
        $cat = new Category;
        $cat->save();
        
        foreach ($lang_list as $v) {
            $catLang = new CategoryLang();
            $catLang->id = $cat->id;
            $catLang->lang_id = $v->id;
            $catLang->save();
        }
        
        return response()->json(['id' => $cat->id, 'token' => csrf_token()]);
    }
    
    public function postRemove(Request $request)
    {
        $id = $request->input('id');
        
        Category::where('id', $id)->delete();
        
        return response()->json(['state' => true, 'msg' => 'done', 'token' => csrf_token()]);
    }
    
    public function postGet(Request $request)
    {
        $id = $request->input('id');
        
        $language = new Language();
        $lang_list = $language->get();
        
        $o = new Category();
        $ol = new CategoryLang();
        
        $data = $o->find($id);
        // var_dump($data);
        if ($data) {
            $lang_data = [];
            foreach ($lang_list as $k => $v) {
                $lang_data[$v->id] = $ol->where('id', $id)->where('lang_id', $v->id)->first();
            }
        }
        $category_list = [];
        $r = $o->where('parent_id', 0)->orderBy('ord', 'asc')->get();
        if ($r) {
            foreach ($r as &$v) {
                // echo $v->id;
                $v->lang = $ol->where('id', $v->id)->where('lang_id', 1)->first();
                $category_list[] = $v;
            }
        }
        // var_dump($category_list);
        $content = view(
                'category/categoryform',
                [
                    'module' => 'category',
                    'data' => $data,
                    'lang_data' => $lang_data,
                    'lang_list' => $lang_list,
                    'category_list' => $category_list
                ]
            )->render();
        
        return response()->json(['id' => 0, 'content' => $content, 'token' => csrf_token()]);
    }
    
    public function postSave(Request $request)
    {
        $lang = new Language();
        $lang_list = $lang->get();
        
        $id = $request->input('id');
        
        $o = new Category();
        $ol = new CategoryLang();
        
        $cat = $o->find($id);
        $cat->slug = $request->input('slug');
        $cat->ord = $request->input('ord');
        $cat->active = $request->input('active');
        $cat->parent_id = $request->input('parent_id');
        $cat->is_home = $request->input('is_home');
        $cat->save();
        
        foreach ($lang_list as $v) {
            $ol->where('id', $id)
                ->where('lang_id', $v->id)
                ->update([
                    'title' => $request->input('title')[$v->id],
                    'brief' => $request->input('brief')[$v->id],
                    'uri' => $request->input('uri')[$v->id],
                    'content' => $request->input('content')[$v->id]
                ]);
        }
        
        return response()->json(['state' => true, 'token' => csrf_token()]);
    }
}