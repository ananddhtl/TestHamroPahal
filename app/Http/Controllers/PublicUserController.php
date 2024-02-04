<?php

namespace App\Http\Controllers;

use App\Models\PublicUser;
use App\Models\RefrenceUser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Validation\ValidationException;
use Redirect;
use Session;

class PublicUserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
            $request->validate([
                'fullname' => ['required', 'string', 'max:26', 'min:5'],
                'email_address' => ['required', 'string', 'email', 'max:255', 'unique:users'],
                'password' => ['required', 'string', 'min:6'],
                'street_address' => ['required'],
                'city' => ['required'],
                'zip_code' => ['required'],
                'contact_number' => ['required', 'min:10', 'max:10', 'unique:users'],
            ]);

            // Generate OTP
            $otp = '';
            for ($i = 0; $i < 4; $i++) {
                $otp .= mt_rand(0, 9);
            }

            // Hash the password
            $password = Hash::make($request->password);

            // Create a new user
            $user = new PublicUser();
            $user->fullname = $request->fullname;
            $user->contact_number = $request->contact_number;
            $user->email_address = $request->email_address;
            $user->password = $password;
            $user->address = $request->street_address;
            $user->city = $request->city;
            $user->zipcode = $request->zip_code;
            $user->otp_code = $otp;
            $user->save();

            // Store the user's password in the session (not recommended, consider using user ID)
            $request->session()->put('sessionUserId', $password);

            // Redirect to the OTP verification page
            return redirect('/login')->with('message', 'You account has been registerd successfully');
        } catch (ValidationException $e) {
            // Validation failed, retrieve errors and redisplay the form
            $errors = $e->validator->errors();

            return redirect()->back()->withErrors($errors)->withInput();
        } catch (\Exception $ex) {
            return $ex->getMessage();
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(PublicUser $publicUser)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(PublicUser $publicUser)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, PublicUser $publicUser)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(PublicUser $publicUser)
    {
        //
    }
    public function login(Request $request)
    {
        try {
            $request->validate([
                'email_address' => ['required', 'string', 'email', 'max:255'],
                'password' => ['required', 'string', 'min:6'],
            ]);
            $email = $request->email_address;
            $password = $request->password;
            $user = \DB::table('users')->where('email_address', $email)->get();

            if (!empty($user[0])) {
                if (Hash::check($password, $user[0]->password)) {
                    $request->session()->put('sessionUserId', $user[0]->password);
                    $request->session()->save();
                    return redirect('/user-profile')->with('message', 'You have successfully logged in!');
                } else {
                    return Redirect::back()
                        ->withErrors([
                            'password' => 'Incorrect Password',
                        ])
                        ->withInput(['password' => $password]);
                }
            } else {
                return Redirect::back()
                    ->withErrors([
                        'email_address' => 'Incorrect email or email not found',
                    ])
                    ->withInput(['email_address' => $email]);
            }
        } catch (ValidationException $e) {
            // Validation failed, retrieve errors and redisplay the form
            $errors = $e->validator->errors();
            return redirect()->back()->withErrors($errors)->withInput();
        } catch (\Exception $ex) {
            return $ex->getMessage();
        }
    }
    public function updatePassword(Request $request)
    {
        try {
            $request->validate([
                'currentpassword' => 'required',
                'newpassword' => 'required',
                'confirmpassword' => 'required',
            ]);

            if (strlen($request->newpassword) < 6) {
                return Redirect::back()->withErrors(['msg' => 'These credentials do not match our records.']);
            }

            if ($request->currentpassword == $request->newpassword) {
                return json_encode(array('status' => false, 'message' => 'Old password must not be new password!'));
            }

            if (Hash::check($request->currentpassword, session()->get('sessionUserId'))) {

                PublicUser::where('password', '=', session()->get('sessionUserId'))->update([
                    'password' => Hash::make($request->newpassword),
                ]);
                $request->session()->put('sessionUserId', Hash::make($request->newpassword));

                return json_encode(array('status' => true, 'message' => 'Password updated successfully!'));
            } else {
                return json_encode(array('status' => false, 'message' => 'Old Password doesnot match!'));
            }
        } catch (ValidationException $e) {
            // Validation failed, retrieve errors and redisplay the form
            $errors = $e->validator->errors();
            // return view('registration_form', compact('errors'));
            // return redirect('/user-register')->withErrors($errors)->withInput();
            return redirect()->back()->withErrors($errors)->withInput();
        } catch (\Exception $ex) {
            return $ex->getMessage();
        }
    }
    public function forgetPassword(Request $request)
    {
        try {
            $email = $request->email_address;
            $user = PublicUser::where('email_address', $email)->first();

            if (!$user) {
                return Redirect::back()->withErrors(['msg' => 'Invalid Email or not found']);
            }

            // Store the email address in the session using the same key
            $request->session()->put('email_address', $email);
            $request->session()->save();

            $data = [
                'url' => url('/changepassword'),
                'email' => $email,
            ];

            Mail::send('frontend.emailtemplate.forgetpassword', $data, function ($message) use ($data) {
                $message->to($data['email']);
                $message->from(env('MAIL_USERNAME'));
                $message->subject('Password Reset Link');
            });

            return redirect()->back()->with('success', 'Please check your email for the reset link.');
        } catch (\Exception $ex) {
            return json_encode(['status' => false, 'message' => $ex->getMessage()]);
        }
    }

    public function updateForgetPassword(Request $request)
    {
        try {

            $request->validate([
                'newpassword' => 'required ',
                'confirmpassword' => 'required|same:newpassword',
            ]);

            if (strlen($request->input('newpassword')) < 6) {
                return Redirect::back()->withErrors(['msg' => 'Password must be 6 characters long.']);
            }

            $user = PublicUser::where('email_address', session()->get('email_address'))->first();
            if (!$user) {
                return Redirect::back()->withErrors(['msg' => 'User not found']);
            }
            $hashedNewPassword = Hash::make($request->newpassword);

            PublicUser::where('email_address', '=', session()->get('email_address'))->update([
                'password' => $hashedNewPassword,
            ]);
            session()->put('sessionUserId', $hashedNewPassword);

            return redirect('/')->with('success', 'Password has been changed successfully');
        } catch (\Exception $ex) {
            return Redirect::back()->withErrors(['msg' => $ex->getMessage()]);
        }
    }
    public function updateUserPassword(Request $request)
    {
        try {
            if (!empty($request->currentpassword)) {

                $request->validate([
                    'current' => 'required',
                    'newpassword' => 'required',
                    'confirmpassword' => 'required',
                ]);

                if (strlen($request->newpassword) < 6) {
                    return redirect()->back()->withErrors(['msg' => 'The new password must be at least 6 characters long.']);
                }

                if ($request->currentpassword == $request->newpassword) {
                    return json_encode(array('status' => false, 'message' => 'Old password must not be the same as the new password.'));
                }

                if (Hash::check($request->currentpassword, session()->get('sessionUserId'))) {
                    $hashedNewPassword = Hash::make($request->newpassword);

                    PublicUser::where('password', '=', session()->get('sessionUserId'))->update([
                        'password' => $hashedNewPassword,
                    ]);
                    session()->put('sessionUserId', $hashedNewPassword);
                    dd(session()->get('sessionUserId'));
                    return redirect()->back()->with('success', 'Your password has been updated successfully');
                } else {
                    return json_encode(array('status' => false, 'message' => 'Old Password does not match!'));
                }
            return json_encode(array('status' => true, 'message' => 'Successfully Updated.'));
            }
        } catch (\Exception $ex) {
            return $ex->getMessage();
        }
    }
    public function updateUserInformation(Request $request)
    {
        try {

            if (@$request->sessionUserId != "") {
                PublicUser::where('password', '=', $request->sessionUserId)->update([
                    'fullname' => $request->fullname,
                    'description' => $request->description,
                    'email_address' => $request->email_address,
                    'contact_number' => $request->contact_number,
                    'address' => $request->address,
                    'city' => $request->city,
                    'zipcode' => $request->zipcode,
                ]);
            }
            return redirect()->back()->with('message', 'Your information has been updated successfully');
        } catch (\Exception $ex) {
            return $ex->getMessage();
        }
    }
    public function userinformation(Request $request)
    {
        $password = session()->get('sessionUserId');
        if ($password != "") {
            $user = \DB::table('users')
                ->select('*')
                ->where('password', $password)
                ->get();
            if (!empty($user)) {
                $id = $user[0]->user_id;
                $events = \DB::table('events')
                    ->join('register_event_attendes', 'events.id', '=', 'register_event_attendes.event_id')
                    ->select('register_event_attendes.*', 'events.*') 
                    ->where('register_event_attendes.user_id',$id)
                    ->get();
                $refrenceuser = RefrenceUser::where('user_id',$id)->get();   
                 
                return view('frontend.userprofile', ['user' => $user, 'events' => $events,'refrenceuser' => $refrenceuser]);
            } else {
                return response()->json(['error' => 'User not found'], 404);
            }
        } else {
            return response()->json(['error' => 'Session user ID is empty'], 400);
        }
    }

}