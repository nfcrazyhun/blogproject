<!-- Show (flash) messages after inlude -->
@if(\Illuminate\Support\Facades\Session::has('message'))
    <div class="alert alert-info alert-dismissible fade show" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        {{Session::get('message')}}
    </div>
@endif