<?php
use App\Models\PageSetting;
use App\Models\Menu;
use App\Models\SystemSetting;

function globalData()
{
    // $page_settings = PageSetting::get(['parent_slug', 'key', 'value']);
    $home_page_data = [];
    // if(!empty($page_settings)){
    //     foreach ($page_settings as $key => $page_setting) {
    //         $home_page_data[$page_setting->key] = $page_setting->value;
    //     }
    // }
    return $home_page_data;
}

function menus(){
    return Menu::where('status', 1)->get();
}

function systemSetting()
{
    return SystemSetting::first();
}
