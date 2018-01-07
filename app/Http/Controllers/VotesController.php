<?php

namespace Learnio\Http\Controllers;
use Learnio\Vote;

use Illuminate\Http\Request;
class VotesController extends Controller
{

    public static function votes($id)
    {
        $votes = Vote::where('post_id', '=', $id)->sum('vote');

        return $votes;
    }
    
}
