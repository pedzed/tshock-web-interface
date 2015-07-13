<div id="topbar">
    <a href="#" id="sidebar-toggle" class="menu-item left">
        <i class="fa fa-bars"></i>
    </a>
    
    <a href="steam://rungameid/105600/ -j {{ config('tshock.host') }} -p {{ config('tshock.port') }}"
       class="menu-item left"
    >
        <i class="fa fa-play icon"></i>
        Join Server
    </a>
    
    <form method="GET" id="main-search" class="left">
        <button type="submit" class="left">
            <i class="fa fa-search search-icon"></i>
        </button>
        
        <input type="search"
               name="search"
               placeholder="Search for a user..."
               class="left"
        />
    </form>
</div>
