<?php 
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Request;




if (!function_exists('title')) {
    function title($menulist)
    {
        $locale = app()->getLocale();

        if ($locale == 'en') {
            return $menulist->title_en;
        }
        if ($locale == 'ru') {
            return $menulist->title_ru;
        }
        if ($locale == 'uz') {
            return $menulist->title_uz;
        }
    }
}
if (!function_exists('desc')) {
    function desc($menulist)
    {
        $locale = app()->getLocale();

        if ($locale == 'en') {
            return $menulist->desc_en;
        }
        if ($locale == 'ru') {
            return $menulist->desc_ru;
        }
        if ($locale == 'uz') {
            return $menulist->desc_uz;
        }
    }
}
if (!function_exists('name')) {
    function name($menulist)
    {
        $locale = app()->getLocale();

        if ($locale == 'en') {
            return $menulist->name_en;
        }
        if ($locale == 'ru') {
            return $menulist->name_ru;
        }
        if ($locale == 'uz') {
            return $menulist->name_uz;
        }
    }
}

if (!function_exists('set_text')) {
    function set_text($lang)
    {
        if ($lang == 'en') {
            return 'English';
        }
        if ($lang == 'ru') {
            return 'Русский';
        }
        if ($lang == 'uz') {
            return 'O\'zbekcha';
        }
    }
}
    
?>