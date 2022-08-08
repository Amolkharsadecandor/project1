<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=
    , initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <form action="{{ route('validationform') }}" method="GET">
        {{-- @csrf --}}
        <div class="form-group">
            <label class="control-label col-sm-2" for="id">
                Certificate Code:
            </label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="id" 
                       placeholder="Type certificate Code">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2" for="flowid">
                Flow Employee ID:
            </label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="flowid" 
                       placeholder="Type Flow ID">
            </div>
        </div>
        <button type="submit" class="btn btn-primary">check</button>
    </form>
    
    
</body>
</html>