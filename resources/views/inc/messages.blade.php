@if (count($errors) > 0)
    @foreach ($errors as $error)
        <div style="height:50px;background-color:red;margin-bottom:10px;color:white;">
        {{$error}}
        </div>        
    @endforeach    
@endif

@if (session('success'))
    <div style="height:50px;background-color:green;margin-bottom:10px;color:white;">
        {{session('success')}}
    </div>
@endif

@if (session('error'))
    <div style="height:50px;background-color:red;margin-bottom:10px;color:white;">
        {{session('error')}}
    </div>
@endif