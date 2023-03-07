<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SettingController extends Controller
{



    public function adminPanelSetting()
    {
        return view('pages.admin-panel-setting');
    }

    public function systemSetting()
    {
        return view('pages.system-setting');
    }

    public function warehouseSetting()
    {
        return view('pages.warehouse');
    }

    public function brandSetting()
    {
        return view('pages.brand');
    }

    public function currencySetting()
    {
        return view('pages.currency');
    }

    public function unitSetting()
    {
        return view('pages.unit');
    }

    public function backupSetting()
    {
        return view('pages.backup');
    }


    
    public function Group()
    {
        return view('pages.group');
    }

    
    public function createGroup()
    {
        return view('pages.create-group');
    }

    
    public function createModule()
    {
        return view('pages.create-module');
    }

    public function Module()
    {
        return view('pages.module');
    }
        
    public function User()
    {
        return view('pages.user');
    }
    
    public function createUser()
    {
        return view('pages.create-user');
    }
    
    public function userProfileSetting()
    {
        return view('pages.user-profile-setting');
    }

    public function Setting()
    {
        return view('pages.setting');
    }
    
    public function EmailPlaceholder()
    {
        return view('pages.email-placeholder');
    }
        
    public function EmailTemplate()
    {
        return view('pages.email-template');
    }
            
    public function createBlog()
    {
        return view('pages.create-blog');
    }     

    public function editBlog()
    {
        return view('pages.edit-blog');
    }
        
    public function Blog()
    {
        return view('pages.blog');
    }

}
