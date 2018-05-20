<nav id="top-navbar" class="navbar navbar-expand-lg navbar-dark bg-dark">
	<div class="navbar-collapse">
    	@include('laravelmddrawer::partials.nav-items')
    </div>
</nav>

<nav id="drawer-navbar" class="navbar navbar-expand-lg navbar-dark bg-dark">
   <button id="user-drawer-btn" type="button" class="default-drawer-button text-light">
        <i class="fas fa-bars"></i>
    </button>
</nav>

<nav id="user-drawer" class="drawer drawer-left">
    <div class="drawer-content navbar-dark bg-dark">
        @include('laravelmddrawer::partials.nav-items')
    </div>
</nav>

