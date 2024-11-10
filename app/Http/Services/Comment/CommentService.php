<?php
namespace App\Http\Services\Comment;

use App\Models\Comment;
use App\Http\Services\Vendor\VendorService;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;

class CommentService {
    protected $vendorService;
    public function __construct(VendorService $vendorService)
    {
        $this->vendorService = $vendorService;
    }
    public function create($request) {
        try {
            Comment::create([
                'customer_id' => Auth::user()->id, 
                'product_id' => $request->input('product_id'), 
                'rating' => $request->input('rating'), 
                'title' => $request->input('title'), 
                'content' => $request->input('content')
            ]);
            Session::flash('success', 'Tạo đánh giá thành công');
        } catch (\Exception $err) {
            Session::flash('error', $err->getMessage());
        }
        return true;
    }
    public function get($product_id) {
        return Comment::where('product_id', $product_id)->orderBy('created_at', 'DESC')->get();    
    }
    public function getRecent() {
        return Comment::with('getUser')->where('customer_id', Auth::user()->id)->orderBy('created_at', 'DESC')->first();
    }
    public function destroy ($request) {
        $id = $request->input('id');
        $comment = Comment::where([
            'id' => $id,
            'customer_id' => Auth::user()->id,
            ])->first();
        if ($comment) {
            return Comment::where('id', $id)->delete();
        }
        return false;
    }
}
?>