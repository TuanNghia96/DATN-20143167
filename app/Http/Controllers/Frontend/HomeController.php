<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Jobs\SendTicketMail;
use App\Models\Buyer;
use App\Models\Category;
use App\Models\Supplier;
use App\Models\Event;
use App\Models\Type;
use Carbon\Carbon;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

//use Alert;

class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return Renderable
     */
    public function index()
    {
        $events = Event::active()->orderBy('point')->take(5)->get();
        $subEvents = Event::active()->orderBy('point', 'desc')->skip(5)->take(6)->get();
        return view('frontend.index', compact('events', 'subEvents'));
    }

    /**
     * get news page
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function news()
    {
        return view('frontend.events-news');
    }
}
