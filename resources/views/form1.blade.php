<!DOCTYPE html>
<html>
<head>
<title>Laravel 9 Form Custome Validation</title>
<meta name="csrf-token" content="{{ csrf_token() }}">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-4">
@if(session('status'))
<div class="alert alert-success">
{{ session('status') }}
</div>
@endif
<div class="card">
<div class="card-header text-center font-weight-bold">
<h2>Laravel 9 Form Custome Validation</h2>
</div>
<div class="card-body">
  {{-- <form name="department" id="department" method="post" action="{{url('store-form1')}}"> --}}
  <form method="post" action="{{url('store-form1')}}">      
{{ csrf_field() }}
        <div class="form-group">
        <label for="exampleInputName">Name</label>
        {{-- <input type="text" id="name" name="name" class="@error('name') is-invalid @enderror form-control"> --}}
        <input type="text" name="name" value="{{ old('name') }}">
        @error('name')
        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
        @enderror
         </div>        
          
              
<button type="submit" class="btn btn-primary">Submit</button>
</form>
<ol>
        
        
          @foreach ($dept_arr as $dept)
          <li>
        {{$dept->name}}
          </li>
       
        @endforeach
<br>
        <ul>
                <li><?php 
                // $myArr = [38, 18, 10, 7, "15"];

                // if(in_array(10, $myArr))
                // {
                //         echo "vale found ";
                // }
                //         
               
                ?>
                         </li>
        </ul>

<ol>
       
</div>

</div>
</div>  
</body>
</html>

