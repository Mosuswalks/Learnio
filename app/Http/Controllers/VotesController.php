<?php

namespace Learnio\Http\Controllers;
use Learnio\Vote;
use Auth;

use Illuminate\Http\Request;


class VotesController extends Controller
{

    public static function getVotes($id)
    {
        $votes = Vote::where('post_id', '=', $id)->sum('vote');

        return $votes;
    }

    public function vote($id,$value)
    {
        if(Auth::check())
        {
            $user_id = Auth::id();
            $vote = Vote::where('user_id', '=', $user_id)->where('post_id', '=', $id)->first();

            if($vote == null)
            {
                $vote = new Vote;

                $vote->user_id = $user_id;
                $vote->post_id = $id;
                $vote->vote = $value;
                $vote->save();
                return;
            }
            else{
                $vote->vote = $value;
                $vote->save();
                return;
            }
        }
        return;
    }

    public function upVote($id)
    {
        $this->vote($id,1);
    }


    public function downVote($id)
    {
        $this->vote($id,-1);
    }

}
