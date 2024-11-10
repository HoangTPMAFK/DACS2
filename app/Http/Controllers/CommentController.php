<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\CommentFormRequest;
use App\Http\Services\Comment\CommentService;

class CommentController extends Controller
{
    protected $commentService;
    public function __construct(CommentService $commentService)
    {
        $this->commentService = $commentService;
    }
    public function store(CommentFormRequest $request)
    {
        $this->commentService->create($request);
        $comment = $this->commentService->getRecent();
        return response()->json([
            'recentComment' => $comment
        ]);
    }

    public function destroy(Request $request)
    {
        $result = $this->commentService->destroy($request);
        if ($result) {
            return response()->json([
                'error' => false,
                'msg' => 'Xóa bình luận thành công'
            ]);
        } else {
            return response()->json([
                'error' => true,
                'msg' => 'Chỉ được xóa bình luận của bạn'
            ]);
        }
    }
}
