<?php
namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rules\Password;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;
use App\Models\User;
use Carbon\Carbon;
use Hash;
use DB;

class RegisterController extends Controller
{
    use RegistersUsers;

    protected $redirectTo = '/home';

    public function __construct()
    {
        $this->middleware('guest');
    }

    public function register()
    {
        return view('auth.register');
    }

    public function storeUser(Request $request)
    {
        $request->validate([
            'name'              => 'required|string|max:255',
            'user_id'           => 'required|string|max:255|unique:users',
            'email'             => 'required|string|email|max:255|unique:users',
            'password'          => 'required|string|min:8|confirmed',
            'password_confirmation' => 'required',
            'phone_number'      => 'nullable|string|max:15',
            'avatar'            => 'nullable|string|max:255',
            'position'          => 'nullable|string|max:255',
            'department'        => 'nullable|string|max:255',
        ]);

        try {
            $dt = Carbon::now();
            $todayDate = $dt->toDayDateTimeString();

            $register = new User;
            $register->name = $request->name;
            $register->user_id = $request->user_id;
            $register->email = $request->email;
            $register->join_date = $todayDate;
            $register->role_name = 'User Normal';
            $register->status = 'Active';
            $register->phone_number = $request->phone_number;
            $register->avatar = $request->avatar;
            $register->position = $request->position;
            $register->department = $request->department;
            $register->password = Hash::make($request->password);
            $register->save();

            Toastr::success('Create new account successfully :)', 'Success');
            return redirect('login');
        } catch (\Exception $e) {
            \Log::info($e);
            DB::rollback();
            Toastr::error('Add new employee fail :)', 'Error');
            return redirect()->back();
        }
    }
}
