<?php
namespace App\Http\Services\User;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class UserService {
    public function create($request) {
        $avatarPath = NULL;

        try {
            // return dd($request->input());
            if ($request->input('avatar') != "") {
                $thumbnailPath = 'storage/images/users/'.$request->input('avatar');
            } else {
                $thumbnailPath = "storage/images/users/guest.png";
            }
            User::create([
                'fname' => (string) $request->input('fname'),
                'lname' => (string) $request->input('lname'),
                'avatar' => $avatarPath,
                'personal_id' => (string) $request->input('personal_id'),
                'gender' => (int) $request->input('gender'),
                'birthday' => (string) $request->input('birthday'),
                'address' => (string) $request->input('address'),
                'email' => (string) $request->input('email'),
                'phone' => (string) $request->input('phone'),
                'password' => Hash::make((string) $request->input('password')),
                'isAdmin' => (boolean) $request->input('isAdmin')
            ]);
            Session::flash('success', 'Tạo tài khoản thành công');
        } catch (\Exception $err) {
            Session::flash('error', $err->getMessage());
        }
        return true;
    }
    public function get($id = NULL) {
        if ($id == NULL) {
            return User::
            orderBy('id')->paginate(10);
        } else {
            return User::where('id', (int) $id)->first();
        }
        
    }
    public function update($request, $user) {
        try {
            $oldAvatarlPath = $request->input('oldAvatarPath');
            $new_password = $request->input('new_password');
            $user->fill($request->input());
            if ($request->input('avatar') == "") {
                $user->avatar = $oldAvatarlPath;
            } else {
                $user->avatar = 'storage/images/users/'.$request->input('avatar');
            }
            if ($request->input('isAdmin') == NULL) {
                $user->isAdmin = false;
            } else {
                $user->isAdmin = true;
            }
            if ($new_password != NULL) {
                $user->password = Hash::make($new_password);
            }
            $user->save();
            Session::flash('success', 'Cập nhật tài khoản thành công');
            return true;
        } catch (\Throwable $err) {
            Session::flash('error', $err->getMessage());
            return false;
        }
        
    }
    public function customerUpdate($request) {
        try {
            $oldAvatarlPath = $request->input('oldAvatarPath');
            $avatar = NULL;
            if ($request->input('avatar') == "") {
                $avatar = $oldAvatarlPath;
            } else {
                $avatar = 'storage/images/users/'.$request->input('avatar');
            }
            // return dd([$request->input(), $avatar]);
            User::where('id', Auth::user()->id)->update([
                'fname' => (string) $request->input('fname'),
                'lname' => (string) $request->input('lname'),
                'phone' => (string) $request->input('phone'),
                'email' => (string) $request->input('email'),
                'birthday' => (string) $request->input('birthday'),
                'personal_id' => (string) $request->input('personal_id'),
                'gender' => (int) $request->input('gender'),
                'avatar' => $avatar
            ]);
            Session::flash('success', 'Cập nhật tài khoản thành công');
            return true;
        } catch (\Throwable $err) {
            Session::flash('error', $err->getMessage());
            return false;
        }
    }
    public function destroy($request) {
        $id = $request->input('id');
        $user = User::where('id', $id)->first();
        if ($user) {
            return User::where('id', $id)->delete();
        }
        return false;
    }
}
?>