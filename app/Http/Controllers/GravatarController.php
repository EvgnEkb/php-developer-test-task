<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use Illuminate\Contracts\View\Factory;
use Creativeorange\Gravatar\Facades\Gravatar;
use Illuminate\Contracts\Foundation\Application;
use Creativeorange\Gravatar\Exceptions\InvalidEmailException;

class GravatarController extends Controller
{
    /**
     * @throws InvalidEmailException
     *
     * @return Application|Factory|View
     */
    public function gravatar()
    {
        // get image
        Gravatar::get('test@example.com');

        // set fallback image
        Gravatar::fallback('https://www.nicesnippets.com/.....image_url')->get('test@example.com');

        return view('gravatar');
    }
}
