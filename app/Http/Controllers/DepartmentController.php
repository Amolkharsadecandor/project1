<?php

namespace App\Http\Controllers;
use App\Models\Department;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Http\Requests\StorePostRequest; // request class created for custome validation 
use Illuminate\Support\ValidatedInput;
use App\Rules\Uppercase; // validator rule class name for upper case 
class DepartmentController extends Controller
{
    public function index()
    {
        //$data = Department::orderBy('id','desc')->paginate(15);
        //return view('form1',$data);
        // new --
        $dept_arr=Department::all();  
       return view('form1',compact('dept_arr'));  
    }
    public function list()
    {
        return ['laravel','mysql'];
    }
 
    public function store(Request $request )
    {
        $validatedData = $request->validate([
       // 'name' => 'required,
        'name' => ['required', 'string', new Uppercase],
        //'name' => 'required|exists:departments,id,another_column,NULL', // exist id in tale 
        ],
        [
            'name.required' => 'Name input  is required!', // custome message 
            'name.unique:departments' => 'Name is already exist !!',
        ],
          );
 
        $dep = new Department;
        $dep->name = $request->name;
        $dept_arr=Department::all(); 
        $json_toarr = json_decode($dept_arr, true); 
        $i=1;
        $count = count($json_toarr);

                                    
                                            // foreach ($json_toarr as $memu){
                                            //  if(in_array($dep->name, $memu))
                                            //     {
                                          
                                            //   echo $memu['name']."is valid<br>";
                                            //   $dep->save();
                                            //        return redirect('form1')->with('status', ' Dept  Data Has Been Inserted');
                                            //     }
                                               
                                            //    }
                                       
                                
   
    // }


}

}