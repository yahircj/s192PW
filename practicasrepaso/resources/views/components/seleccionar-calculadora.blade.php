<nav class="navbar navbar-expand-lg ">
    <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link {{request()->routeIs('mb')? 'text-info':''}}" aria-current="page" href="{{ route('mb') }}">De mb a gb</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{request()->routeIs('gb')? 'text-info':''}}" aria-current="page" href="{{ route('gb') }}">De gb a mb</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
