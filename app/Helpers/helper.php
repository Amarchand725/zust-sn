<?php
use App\Models\Menu;
use App\Models\SystemSetting;
use App\Models\CompanyProfile;
use App\Models\EmailConfig;

function menus(){
    return Menu::where('status', 1)->get();
}

function companyProfile()
{
    return CompanyProfile::first();
}

function emailConfig(){
    return EmailConfig::first();
}

function systemSetting(){
    return SystemSetting::first();
}
