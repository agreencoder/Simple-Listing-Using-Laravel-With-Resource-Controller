@if(session('success'))
    <div class="container">
        <div class="alert alert-success" role="alert">
            {{ session('success') }} 
        </div>
    </div>
@elseif(session('deleted'))
    <div class="container">
        <div class="alert alert-danger" role="alert">
            {{ session('deleted') }} 
        </div>
    </div>
@endif