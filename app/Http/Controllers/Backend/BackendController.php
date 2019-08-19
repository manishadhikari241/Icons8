<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BackendController extends Controller
{
    protected $backendPath = 'Backend.';
    protected $backendPagePath = 'null';
    protected $backendcategoryPath = 'null';
    protected $backendgenderPath = 'null';
    protected $backendracePath = 'null';
    protected $backendhairPath = 'null';
    protected $backendagePath = 'null';
    protected $backendbodytypePath = 'null';
    protected $backendspecialPath = 'null';
    protected $backendtagPath = 'null';
    protected $backendimagePath = 'null';
    protected $backendcreditPath = 'null';
    protected $backendiconPath = 'null';
    protected $backendmusicPath = 'null';

    public function __construct()
    {
        $this->backendPath;
        $this->backendPagePath = $this->backendPath . '/' . 'pages.';
        $this->backendcategoryPath = $this->backendPath . '/' . 'pages.'. '/' . 'category.';
        $this->backendgenderPath = $this->backendPath . '/' . 'pages.'. '/' . 'gender.';
        $this->backendracePath = $this->backendPath . '/' . 'pages.'. '/' . 'race.';
        $this->backendhairPath = $this->backendPath . '/' . 'pages.'. '/' . 'hair.';
        $this->backendagePath = $this->backendPath . '/' . 'pages.'. '/' . 'age.';
        $this->backendbodytypePath = $this->backendPath . '/' . 'pages.'. '/' . 'bodytype.';
        $this->backendspecialPath = $this->backendPath . '/' . 'pages.'. '/' . 'specialfeatures.';
        $this->backendtagPath = $this->backendPath . '/' . 'pages.'. '/' . 'tags.';
        $this->backendcreditPath = $this->backendPath . '/' . 'pages.'. '/' . 'credit.';
        $this->backendimagePath = $this->backendPath . '/' . 'pages.'. '/' . 'image.';
        $this->backendiconPath = $this->backendPath . '/' . 'pages.'. '/' . 'icons.';
        $this->backendmusicPath = $this->backendPath . '/' . 'pages.'. '/' . 'music.';

    }
}
