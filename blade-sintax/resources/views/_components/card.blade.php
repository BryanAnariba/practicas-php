<div class="card p-3 mt-3">
    <div class="card-header bg-info text-center">
        <h5 class="text-white">
            {{$title}}
        </h5>
    </div>
    <div class="card-body">
        <div class="d-flex justify=content-between">
            <img src="{{asset($img)}}" alt="Calvo con capa" class="rounded-everything" width="100" height="100">
            <p class="p-2 text-center">
                {{$content}}
            </p>
        </div>
    </div>
    <div class="card-footer bg-dark">
    </div>
</div>