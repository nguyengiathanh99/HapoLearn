<?php

namespace App\Http\Controllers;

use App\Models\Lessons;
use App\Models\UserDocuments;
use App\Models\UserLessons;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserLessonController extends Controller
{
    public function update(Request $request, $lessonId)
    {
        $lesson = Lessons::find($lessonId);
        $userLessons = UserDocuments::where('user_id', Auth::id())
            ->join('documents', 'documents.id', '=', 'user_documents.document_id')
            ->where('documents.lesson_id', $lessonId)->get();
        $data = [
            'sumDocumentCompleted' => $userLessons->count(),
            'sumDocument' => $lesson->documents()->count(),
        ];
        $progress = UserLessons::sumProgress($data);
        $userLesson = UserLessons::where('user_id', Auth::id())->where('lesson_id', $lessonId)->first();
        if ($userLesson) {
            $userLesson->update(
                [
                    'progress' => $progress
                ],
            );
        } else {
            UserLessons::create([
                    'user_id' => Auth::id(),
                    'lesson_id' => $lessonId,
                    'progress' => $progress,
                ]);
        }
        Auth::user()->documents()->attach($request['document_id']);
        return redirect()->back();
    }
}
