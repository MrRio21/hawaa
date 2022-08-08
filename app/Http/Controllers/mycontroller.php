<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Driver;
use App\Models\Trip;
use App\Models\Dritrip;
use App\Models\Book;

use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Pagination\paginator;



class mycontroller extends Controller
{
    function home() {
        return view('home');
    }
    function passenger() {
        return view('passenger_Registration');
    }
    function driver() {
        return view("Driver_Registration");
    }
    function sign_up() {
        return view("sign_up");
    }
    function about_us() {
        return view("about_us");
    }
    function store_user(Request $request) {
    //   dd($request);
        // dd($request->file('img')->getClientOriginalName());
        $request->validate([
            'name'=>'required',
            'email'=>'required|unique:users',
            'phone'=>'required|min:11',
            'img'=>'required',
            'NID'=>'required',
            'password'=>'required|min:6'

        ]);

        // $request->img->storeAs('pulic/imgs',$request->file('img')->getClientOriginalName());
        // $path= $request->file('img')->getClientOriginalName();
        // move_uploaded_file($request->file('img')->getPathname(),"imgs/$path");

        $path=$request->file('img')->getClientOriginalName();
        move_uploaded_file($request->file('img')->getPathname(),"imgs/$path");
        $path1=$request->file('NID')->getClientOriginalName();
        move_uploaded_file($request->file('NID')->getPathname(),"imgs/$path1");
       // dd("imgs/$path");
        // $request->NID->storeAs('pulic/imgs',$request->file('NID')->getClientOriginalName());
        $user=User::create([
            'name'=>$request['name'],
            'phone'=>$request['phone'],
            'email'=>$request['email'],
            'img'=>$path,
            // ->getClintOriginalName(),
            'NID'=>$path1,
            // ->getClintOriginalName(),
            'password'=>Hash::make($request['password'])
        ]);
        auth()->login($user);
        return view("home");
    }



    function booking() {
        return view("booking");
    }
    function login(){
        return view("login");
    }
    function my_logout() {
        auth()->logout();
        return view('home');
    }


    function store_driver(Request $request) {
        // dd($request);
        //  dd($request->file('img')->getClintOriginalName());
        // $request->validate([
        //     'name'=>'required|color:red',
        //     'email'=>'required|unique:users',
        //     'phone'=>'required|min:11',
        //     'img'=>'required',
        //     'NID'=>'required',
        //     'password'=>'required|min:6',
        //     'city'=>'required',
        //     'region'=>'required',
        //     'driver_license'=>'required',
        //     'carlicense'=>'required',


        // ]);

        $path=$request->file('img')->getClientOriginalName();
        move_uploaded_file($request->file('img')->getPathname(),"imgs/$path");
        $path1=$request->file('NID')->getClientOriginalName();
        move_uploaded_file($request->file('NID')->getPathname(),"imgs/$path1");
        $path2=$request->file('driver_license')->getClientOriginalName();
        move_uploaded_file($request->file('driver_license')->getPathname(),"imgs/$path2");
        $path3=$request->file('carlicense')->getClientOriginalName();
        move_uploaded_file($request->file('carlicense')->getPathname(),"imgs/$path3");
        $user=User::create([
            'name'=>$request['name'],
            'phone'=>$request['phone'],
            'email'=>$request['email'],
            'img'=>$path,
            // ->getClintOriginalName(),
            'NID'=>$path1,
            'password'=>Hash::make($request['password'])
        ]);
        Driver::create([

            'user_id'=>$user['id'],
            'city'=>$request['city'],
            'region'=>$request['region'],
            'driver_license'=>$path2,
            'carlicense'=>$path3,
            'status'=>'Pendding'
        ]);
        auth()->login($user);
        return view("driver_pro");
    }

    public function store_login(Request $request){


        $request->validate([
                    'password'=>'required',
                    'email'=>'required',
                ]);
        $credentials = [
            'email' => $request['email'],
            'password' => $request['password'],
        ];

        if (Auth::attempt($credentials)) {

            // mycontroller::$Loged_in_user = Auth::user()->id;

            $usertype=Auth::user()->usertype;
            if($usertype=='1'){

                return redirect("admin");
            }
            elseif (Auth::user()->Driver) {
              //  dd($request['email']);
                return view('driver_pro');
            }
            else{
                return view('home');
                }
                //dd(Auth::user());
        }else{
            return redirect("mylogin");
        }

    }



    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    public function boot()
    {

        Gate::define('isDriver',function()
        {
            $x=Auth::user()->Driver !=NULL;
            //dd($x);
            return $x;
        });
    }

    function driver_pro() {
        return view('driver_pro');
    }
    function myorder() {
        $data=auth()->user()->Driver->Books;
        return view('myorder',compact("data"));
    }
    function customer_pro() {
        // $data=auth()->user()->trips->where("status","Pendding");
        // ->user()['user_id'];
          //dd($data);
        // return view('driver_requsisite',compact('data'));
       $data=Trip::where("date",'>=',now())->Where('user_id',auth()->id())->where("status","Pendding")->get();
        //  dd($data);
        return view('customer_pro',compact('data'));
    }
    function history() {
        // $data=auth()->user()->trips->where("status","Pendding");
        // ->user()['user_id'];
          //dd($data);
        // return view('driver_requsisite',compact('data'));
       $data=Trip::where("date",'>=',now())->Where('user_id',auth()->id())->where("status","done")->get();
        //  dd($data);
        return view('history',compact('data'));
    }

    function store_trip(Request $request)
    {
        // dd($request);
        $trip=Trip::create([
            'user_id'=>auth()->user()['id'],
            'position'=>$request['position'],
            'destination'=>$request['destination'],
            'date'=>$request['date'],
            'now'=>$request['now'],
            'status'=>'Pendding'
    ]);
    return redirect(route("card",['trip'=>$trip]));
}
   public function my_trip(Type $var = null)
   {
    // $data=Trip::where("date",'>=',now())->Where('id',1)->get();

   // $data=Trip::all();
    // dd($data);
    return view("card",['data'=>$data]);
   }

    function customer_trip() {
      $data =auth()->user()->Trips()->first();
    //   dd(empty($data));
      if(empty($data)){
        $data=[];
      }

        return view('customer_trip',compact('data'));
    }
    function driver_requsisite() {
        return view('driver_requsisite');
    }
    function driver_req() {
        return view('driver_req');
    }
    // function d() {
    //     return view('d');
    // }

    function driver_trip() {
        if(auth()->user()->Driver){
            $data=Trip::where("status","Pendding")->get();
          //  dd($data);
            return view('driver_req',compact('data'));
        }

        else
        return 404;
    }

    function finish(Request $request)
    {
        $request->validate([
            'price'=>'required',
        ]);
        $dri=Dritrip::create([
            'driver_id'=>auth()->user()->Driver['id'],
            'trip_id'=>$request['trip_id'],
            'price'=>$request['price'],
    ]);
    return redirect(route("driver_pro"))->with('sucess','the offer has been sent');
    }
    function he() {
        return view('he');
    }
    function destroy(Trip $trip)
    {
        $trip->delete();
        return redirect('driver_trip');;

    }
    function store_bookin(Request $request)
    {
        // dd($request);

        $book=Book::create([

            'user_id'=>auth()->user()['id'],
            'driver_id'=>$request['driver_id'],
            'trip_id'=>$request['trip_id'],

    ]);
    $trip=Trip::find($request['trip_id']);
    $trip->update([
      "status"=>"done"
    ]);
    return view('store_bookin',compact('book'));

}
function admin() {
    $data=User::all();

    return view('admin',compact('data'));
}
function card(Trip $trip) {

    //   dd(empty($data));
    //   if(empty($data)){
    //     $data=[];
    //   }
    // $data=Trip::where("date",'>=',now())->Where('user_id',auth()->id())->get();

    return view('card',compact('trip'));
}

function delete_admin(User $user){
//   dd($user);

        $user->delete();
        return redirect('admin');;

    }
    function admin_driver() {

        $data=Driver::all();

        return view('admin_driver',compact('data'));
    }
    function admin_order() {

        $data=Trip::all();

        return view('admin_order',compact('data'));
    }
    function delete_trip(Trip $trip){
        //   dd($user);

                $trip->delete();
                return redirect('admin_order');

            }
    function team() {

        $data=Trip::all();

        return view('team');
    }

    function delete_driver(User $user)
        {
            // dd($user);
            $user->delete();
            return redirect('admin_driver');

        }

    function search(Request $request)
    {
        $search_text = $_GET['search'];
        $data =Dritrip::where([
            // ['price','!=', NULL],
            [function ($query) use ($request){
                if(($data =$request->price)){
                    $query->orWhere('price')->get();
                }
            }]
        ])
        ->orderBy("id","desc");
        // ->paginate(10);
        return view ('search',compact('data'));
        //  ->with('i',($request()->input('page',1) - 1) *5);


    }

    // public function search()
    // {
    //     $search_text = $_GET['search'];
    //     $data = Dritrip::where('price','like', '%'.$search_text.'%')->with('Driver')->get();
    //     // dd($data);
    //     return view('search', compact('data'));
    // }



}
