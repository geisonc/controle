<aside class="aside-container">
  <div class="aside-inner">
     <nav class="sidebar" data-sidebar-anyclick-close="">
        <!-- START sidebar nav-->
        <ul class="sidebar-nav">
           <!-- Iterates over all sidebar items-->
           <li class="nav-heading "><span data-localize="sidebar.heading.HEADER">MENU</span></li>
           <li class=" active"> <a href="{{ route('veiculo.list') }}" title="Veiculos"><em class="far fa-file"></em><span data-localize="sidebar.nav.SINGLEVIEW">Veículos</span></a></li>

           <li class=" "><a href="#submenu" title="Menu" data-toggle="collapse"><em class="icon-speedometer"></em><span data-localize="sidebar.nav.menu.MENU">Menu</span></a>
              <ul class="sidebar-nav sidebar-subnav collapse" id="submenu">
                 <li class="sidebar-subnav-header">Menu</li>
                 <li class=" "><a href="submenu.html" title="Submenu"><span data-localize="sidebar.nav.menu.SUBMENU">Submenu</span></a></li>
              </ul>
           </li>
        </ul><!-- END sidebar nav-->
     </nav>
  </div><!-- END Sidebar (left)-->
</aside><!-- offsidebar-->
