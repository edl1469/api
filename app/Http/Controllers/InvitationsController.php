<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreInvitationRequest;
use App\Invitation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class InvitationsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $invitations = Invitation::where('registered_at', null)->orderBy('created_at', 'desc')->get();
        return view('invitations.index', compact('invitations'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreInvitationRequest $request)
    {
        $invitation = new Invitation($request->all());
        $invitation->generateInvitationToken();
        $invitation->save();
        $data[] = $request['email'];

        Mail::send('emails.registrationemail', $data, function($message) use ($data)
        {
            $message->from($data);
            $message->subject('Invitation Request for Authentication API');
            $message->to('wdc@csulb.edu');
        });

        return redirect()->route('requestInvitation')
            ->with('success', 'Invitation to register successfully requested. Please wait for registration link.');
    }
}
