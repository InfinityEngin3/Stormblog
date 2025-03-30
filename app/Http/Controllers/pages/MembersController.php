<?php

namespace App\Http\Controllers\Pages;

# Controller base
use App\Http\Controllers\Controller;

# HTTP Request
use Illuminate\Http\Request;

# Support Facades
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

# Models
use App\Models\Members;

# Library Template
use App\Libraries\Template;

class MembersController extends Controller{

    protected $template;

    public function __construct(Template $template){

        $this->template = $template;

    }

    public function member_login(Request $request){

        $request->validate([
            'member_email' => 'required|email',
            'sha_pass_hash' => 'required',
        ]);

        $member = Members::where('member_email', $request->member_email)->first();

        if($member && Hash::check($request->sha_pass_hash, $member->sha_pass_hash)){

            Auth::login($member);

            $request->session()->regenerate();

            return back();

        }

    }

    public function member_logout(Request $request){

        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return back();

    }


}
