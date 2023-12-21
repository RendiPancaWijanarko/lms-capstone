<?php

namespace App\Http\Controllers;

use App\UserFeedback;
use Illuminate\Http\Request;

class FeedbackController extends Controller
{
    public function create()
    {
        return view('feedback.create');
    }

    public function store(Request $request)
    {
        $validatedData = validator($request->all(), [
            'full_name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone_number' => 'required|string|max:20',
            'subject' => 'required|string|max:255',
            'message' => 'required|string',
        ])->validate();

        $userfeedback = new UserFeedback($validatedData);
        $userfeedback->save();

        return redirect(route('welcome'))
            ->with('success', 'Feedback submitted successfully!');

        // // Validation can be added here
        // $data = $request->validate([
        //     'full_name' => 'required|string|max:255',
        //     'email' => 'required|email|max:255',
        //     'phone_number' => 'required|string|max:20',
        //     'subject' => 'required|string|max:255',
        //     'message' => 'required|string',
        // ]);

        // UserFeedback::create($data);

        // return redirect()->route('feedback.create')->with('success', 'Feedback submitted successfully!');
    }
}
