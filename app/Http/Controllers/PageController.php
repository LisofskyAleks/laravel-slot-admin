<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class PageController extends Controller
{
    public function show(string $slug): View
    {
        $titles = [
            'promotions' => 'Promotions',
            'casino' => 'Casino',
            'live-casino' => 'Live Casino',
            'jackpots' => 'Jackpots',
            'paris-sportifs' => 'Paris Sportifs',
            'paris-live' => 'Paris Live',
            'sports-virtuels' => 'Sports virtuels',
            'defis' => 'Défis',
            'tournois' => 'Tournois',
            'bonus-crab' => 'Bonus Crab',
            'boutique' => 'Boutique',
            'niveaux-vip' => 'Niveaux VIP',
            'aide' => "Centre d'aide",
            'voir-tous' => 'Voir tous',
        ];

        $title = $titles[$slug] ?? ucfirst(str_replace('-', ' ', $slug));

        return view('page', compact('slug', 'title'));
    }
}

