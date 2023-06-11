<?php

namespace App\Http\Controllers\frontend;

use Share;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SocialShareButtonsController extends Controller
{
    public function ShareWidget()
    {
        $shareComponent = \Share::page(
            'https://www.positronx.io/create-autocomplete-search-in-laravel-with-typeahead-js/',
            'Your share text comes here',
            ['class' => 'facebook', 'id' => 'facebook', 'title' => 'facebook', 'rel' => 'nofollow noopener noreferrer']
        )

            ->facebook()
            ->twitter()
            ->linkedin()
            ->telegram()
            ->whatsapp()
            ->reddit();

        return view('backend.pages.multi_datatable', compact('shareComponent'));
    }
}
