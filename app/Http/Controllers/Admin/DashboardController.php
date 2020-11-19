<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin;
use App\Models\User;
use App\Models\Contact;
use App\Models\Gallery;
use App\Models\Product;
use App\Models\Order;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;

class DashboardController extends Controller
{
    public function dashboardView()
    {
       $gallery_cnt = Gallery::count();
       $contact_cnt = Contact::count();
        return view('admin.dashboard',compact('gallery_cnt','contact_cnt'));
       
    }

    

    // function chartData(){
    //     $data[] = [
    //         'level' => Carbon::now()->format('Y-m'),
    //         'delivered' => $this->chartQueryDelivered(Carbon::now()->month),
    //         'cancel' => $this->chartQueryCancel(Carbon::now()->month),
    //     ];

    //     for ($i=1; $i < 11; $i++) {
    //         $data[] = [
    //             'level' => Carbon::now()->subMonths($i)->format('Y-m'),
    //             'delivered' => $this->chartQueryDelivered(Carbon::now()->subMonths($i)->month),
    //             'cancel' => $this->chartQueryCancel(Carbon::now()->subMonths($i)->month),
    //         ];
    //     }
    //     return $data;
    // }

    // function chartQueryDelivered($month){
    //     $delivered = Order::where('delivery_status',4) ->whereMonth('created_at', $month)->count();
    //     return $delivered;
    // }

    // function chartQueryCancel($month){
    //     $cancel = Order::where('delivery_status',5) ->whereMonth('created_at', $month)->count();
    //     return $cancel;
    // }

    // function pieData($from_date,$to_date,$status)
    // {
    //     $data = Order::where('delivery_status',$status)->whereBetween('created_at',[$from_date,$to_date])->count();
    //     return $data;
    // }

    public function changePasswordForm()
    {
        return view('admin.change_password');
    }

    public function changePassword(Request $request){
        
        $this->validate($request, [
            
            'current_password' => ['required', 'string'],
            'new_password' => ['required', 'string', 'min:8', 'same:confirm_password'],
        ]);
        
        $user = Admin::where('id',1)->first();

        if(Hash::check($request->input('current_password'), $user->password)){
            Admin::where('id',1)->update([
                
                'password'=>Hash::make($request->input('new_password')),
            ]);
           return redirect()->back()->with('message','Password Updated Successfully');
        }
        
        else{
            return redirect()->back()->with('error','Sorry Current Password Does Not Correct');
        }
    }
}

