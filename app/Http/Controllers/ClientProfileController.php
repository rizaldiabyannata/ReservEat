<?php

namespace App\Http\Controllers;

use App\Models\Reservation;
use App\Models\User;
use Dotenv\Exception\ValidationException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ClientProfileController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        return view('profile', compact('user'));
    }

    public function editprofile()
    {
        $user = Auth::user();
        return view('editProfile', compact('user'));
    }

    public function reservation()
    {
        $user = Auth::user();
        $reservations = Reservation::join('users', 'reservations.user_id', '=', 'users.id')
            ->join('restaurants', 'reservations.restaurant_id', '=', 'restaurants.id')
            ->where('reservations.user_id', $user->id)
            ->where('status', 'pending') // Move this where clause up here
            ->select('reservations.*', 'users.name as user_name', 'restaurants.name as restaurant_name')
            ->get();
        return view('reservationOrder', compact('user', 'reservations'));
    }


    public function history()
    {
        $user = Auth::user();
        $reservations = Reservation::join('users', 'reservations.user_id', '=', 'users.id')
            ->join('restaurants', 'reservations.restaurant_id', '=', 'restaurants.id')
            ->where('reservations.user_id', $user->id)
            ->select('reservations.*', 'users.name as user_name', 'restaurants.name as restaurant_name')
            ->get();
        return view('history', compact('user', 'reservations'));
    }

    public function updateProfile(Request $request)
    {
        $id = Auth::user()->id;
        $data = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required|max:20',
        ]);

        try {
            $user = User::find($id);

            if (!$user) {
                return redirect()->back()->with('error', 'User not found');
            }

            if ($request->has('password') && $request->input('password') !== '') {
                if ($request->has('confirm_password') && $request->input('password') == $request->input('confirm_password')) {
                    $data['password'] = Hash::make($request->input('password'));
                }
            }

            if ($request->hasFile('photo')) {
                $file = $request->file('photo');
                $fileName = time() . '.' . $file->getClientOriginalExtension();
                $file->move(public_path('assets/profiles'), $fileName);
                $data['photo'] = $fileName;
            }

            $user->update($data);
            notify()->success('Berhasil Update ' . $data['name']);
            return redirect('/profile')->with('success', 'User updated successfully');
        } catch (ValidationException $e) {
            notify()->warning('Gagal Update ' . $data['name']);
            return redirect()->back()->with($e);
        }
    }

    public function cancelReservation(Request $request, $id)
    {
        $reservation = Reservation::find($id);
        if ($reservation) {
            $reservation->status = 'cancelled';
            $reservation->save();
            return redirect()->back()->with('success', 'Reservation cancelled successfully');
        } else {
            return redirect()->back()->with('error', 'Reservation not found');
        }
    }

    public function paymentReservation(Request $request, $id)
    {
        $reservation = Reservation::find($id);
        if ($reservation) {
            $reservation->status = 'payment';
            $reservation->save();
            return redirect()->back()->with('success', 'Reservation cancelled successfully');
        } else {
            return redirect()->back()->with('error', 'Reservation not found');
        }
    }
}
