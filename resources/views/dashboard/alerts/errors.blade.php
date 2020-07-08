@if (!$errors->isEmpty())
    <div class="row">
        <div class="col-sm-12">
            <div class="alert alert-danger">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <i class="material-icons">close</i>
                </button>
                @foreach ($errors->all() as $error)
                <span> {{ $error }} </span> <br />
                @endforeach
            </div>
        </div>
    </div>
@endif