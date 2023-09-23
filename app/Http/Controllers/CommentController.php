<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;
use App\Models\Comment;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class CommentController extends Controller
{
    public function index(Request $request)
    {
        $comments = Comment::all();

        return view('comment.index', compact('comments'));
    }

    public function create(): View
    {
        return view('comment.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'id' => '',
            'user_id' => 'required',
            'company_id' => 'required',
            'content' => 'required|between:150, 550',
            'grades' => 'required|digits_between:1,10'
        ]);

        Comment::create($request->all());

        return redirect()->route('comments.index')->with('success', 'Coomment has been created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Comment $comment)
    {
        return view('comment.show',compact('comment'));
    }

    public function edit(Comment $comment): View
    {
        return view('comment.edit',compact('comment'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Comment $comment): RedirectResponse
    {
        $request->validate([
            'id' => '',
            'user_id' => 'required',
            'company_id' => 'required',
            'content' => 'required|between:150, 550',
            'grades' => 'required|digits_between:1,10'
        ]);

        $comment->update($request->all());

        return redirect()->route('comments.index')
            ->with('success','Comment Has Been updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Comment $comment): RedirectResponse
    {
        $comment->delete();

        return redirect()->route('comments.index')
            ->with('success','Comment has been deleted successfully');
    }
}
