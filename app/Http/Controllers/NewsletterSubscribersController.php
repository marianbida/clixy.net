<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;

use App\Language;
use App\Newsletter;
use App\NewsletterLang;
use App\NewsletterSubscribers;

class NewsletterSubscribersController extends Controller
{
    public function index(Request $request)
    {
        $user = $request->user() ? $request->user()->toArray() : ['id' => null];
        return view('NewsletterSubscribers/NewsletterSubscribers', ['module' => 'NewsletterSubscribers', 'user' => $user, 'token' => csrf_token()]);
    }
    
    public function postList(Request $request)
    {
        $o = new NewsletterSubscribers();
        $list = $o->orderBy('id', 'desc')->get();
        if ($list) {
        }
        
        $content = view('NewsletterSubscribers/NewsletterSubscribersList', ['list' => $list])->render();
        
        return response()->json(['list' => [], 'content' => $content, 'pagination' => '-na-', 'token' => csrf_token()]);
    }
    
    public function postCreate()
    {
        $o = new NewsletterSubscribers();
        $o->save();
        
        return response()->json(['id' => $o->id, 'token' => csrf_token()]);
    }
    
    public function postRemove(Request $request)
    {
        $id = $request->input('id');
	
        $o = new NewsletterSubscribers();
	$o->where('id', $id)->delete();
        
        return response()->json(['state' => true, 'msg' => 'done', 'token' => csrf_token()]);
    }
    
    public function postGet(Request $request)
    {
        $id = $request->input('id');
        
        $o = new NewsletterSubscribers();
        
        $data = $o->find($id);
        // var_dump($data);
        
        $content = $content = view(
                'NewsletterSubscribers/NewsletterSubscribersForm', 
                [
                    'module' => 'NewsletterSubscribers',
                    'data' => $data
                ]
            )->render();
        
        return response()->json(['id' => 0, 'content' => $content, 'token' => csrf_token()]);
    }
    
    public function postSave(Request $request)
    {
        $id = $request->input('id');
        
	$o = new NewsletterSubscribers();
	
        $v = $o->find($id);
        $v->name = $request->input('name');
        $v->email = $request->input('email');
        $v->save();
        
        return response()->json(['state' => true, 'token' => csrf_token()]);
    }
}