<nav class="navbar sticky-top navbar-expand-md navbar-dark bg-dark">
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse"
            data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false"
            aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <a class="navbar-brand" href="<?=$dashboard?>">
        <img src="https://v4-alpha.getbootstrap.com/assets/brand/bootstrap-solid.svg" width="30" height="30"
             class="d-inline-block align-top" alt="">
        <span class="menu-collapsed">DE-PRESS</span>
    </a>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav">
            <li class="nav-item active">
                <a class="nav-link" href="index.php">Meine Seite <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?=$editor?>">Seite bearbeiten</a>
            </li>
            <!-- This menu is hidden in bigger devices with d-sm-none.
          The sidebar isn't proper for smaller screens imo, so this dropdown menu can keep all the useful sidebar itens exclusively for smaller screens  -->
            <li class="nav-item dropdown d-sm-block d-md-none">
                <a class="nav-link dropdown-toggle" href="<?=$dashboard?>" id="smallerscreenmenu"
                   data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Hauptmenü </a>
                <div class="dropdown-menu" aria-labelledby="smallerscreenmenu">
                    <a class="dropdown-item" href="<?=$dashboard?>">Dashboard</a>
                    <a class="dropdown-item" href="<?=$users?>">Benutzer</a>
                    <a class="dropdown-item" href="<?=$media?>">Medien</a>
                    <a class="dropdown-item" href="<?=$settings?>">Einstellungen</a>
                    <a class="dropdown-item" href="<?=$help?>">Hilfe</a>
                </div>
            </li><!-- Smaller devices menu END -->
        </ul>
        <ul class="navbar-nav ml-auto">
            <li class="nav-item dropdown user-nav">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                   aria-haspopup="true" aria-expanded="false">
                    Willkommen, <?=$username?>
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="<?=$profile?>">Profil bearbeiten</a>
                    <a class="dropdown-item" href="<?=$help?>">Hilfe</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="<?=$logout?>">Ausloggen</a>
                </div>
            </li>
        </ul>
    </div>
</nav><!-- NavBar END -->
<!-- Bootstrap row -->
<div class="row" id="body-row">
    <!-- Sidebar -->
    <div id="sidebar-container" class="sidebar-expanded d-none d-md-block">
        <!-- d-* hiddens the Sidebar in smaller devices. Its itens can be kept on the Navbar 'Menu' -->
        <!-- Bootstrap List Group -->
        <ul class="list-group">
            <!-- Separator with title -->
            <li class="list-group-item sidebar-separator-title text-muted d-flex align-items-center menu-collapsed">
                <small>HAUPTMENÜ</small>
            </li>
            <!-- /END Separator -->
            <!-- Menu with submenu -->
            <a href="#submenu1" data-toggle="collapse" aria-expanded="false"
               class="bg-dark list-group-item list-group-item-action flex-column align-items-start">
                <div class="d-flex w-100 justify-content-start align-items-center">
                    <span class="fa fa-dashboard fa-fw mr-3"></span>
                    <span class="menu-collapsed">Dashboard</span>
                    <span class="submenu-icon ml-auto"></span>
                </div>
            </a>
            <!-- Submenu content -->
            <div id='submenu1' class="collapse sidebar-submenu">
                <a href="<?=$dashboard?>" class="list-group-item list-group-item-action bg-dark text-white">
                    <span class="menu-collapsed">Globale Einstellungen</span>
                </a>
                <a href="<?=$footer?>" class="list-group-item list-group-item-action bg-dark text-white">
                    <span class="menu-collapsed">Menü</span>
                </a>
                <a href="<?=$footer?>" class="list-group-item list-group-item-action bg-dark text-white">
                    <span class="menu-collapsed">Slider</span>
                </a>
                <a href="<?=$footer?>" class="list-group-item list-group-item-action bg-dark text-white">
                    <span class="menu-collapsed">Footer</span>
                </a>
            </div>
            <a href="<?=$editor?>" class="bg-dark list-group-item list-group-item-action">
                <div class="d-flex w-100 justify-content-start align-items-center">
                    <span class="fa fa-edit fa-fw mr-3"></span>
                    <span class="menu-collapsed">Seiteneditor</span>
                </div>
            </a>
            <a href="#submenu2" data-toggle="collapse" aria-expanded="false"
               class="bg-dark list-group-item list-group-item-action flex-column align-items-start">
                <div class="d-flex w-100 justify-content-start align-items-center">
                    <span class="fa fa-user fa-fw mr-3"></span>
                    <span class="menu-collapsed">Benutzer</span>
                    <span class="submenu-icon ml-auto"></span>
                </div>
            </a>
            <!-- Submenu content -->
            <div id='submenu2' class="collapse sidebar-submenu">
                <a href="<?=$profile?>" class="list-group-item list-group-item-action bg-dark text-white">
                    <span class="menu-collapsed">Profil bearbeiten</span>
                </a>
                <a href="<?=$users?>" class="list-group-item list-group-item-action bg-dark text-white">
                    <span class="menu-collapsed">Benutzerverwaltung</span>
                </a>
            </div>
            <a href="<?=$media?>" class="bg-dark list-group-item list-group-item-action">
                <div class="d-flex w-100 justify-content-start align-items-center">
                    <span class="fa fa-tasks fa-fw mr-3"></span>
                    <span class="menu-collapsed">Medien</span>
                </div>
            </a>
            <!-- Separator with title -->
            <li class="list-group-item sidebar-separator-title text-muted d-flex align-items-center menu-collapsed">
                <small>EINSTELLUNGEN</small>
            </li>
            <!-- /END Separator -->
            <a href="<?=$contact?>" class="bg-dark list-group-item list-group-item-action">
                <div class="d-flex w-100 justify-content-start align-items-center">
                    <span class="fa fa-envelope-o fa-fw mr-3"></span>
                    <span class="menu-collapsed">Kontaktformular</span>
                </div>
            </a>
            <a href="<?=$settings?>" class="bg-dark list-group-item list-group-item-action">
                <div class="d-flex w-100 justify-content-start align-items-center">
                    <span class="fa fa-cog fa-fw mr-3"></span>
                    <span class="menu-collapsed">Sonstiges</span>
                </div>
            </a>
            <!-- Separator without title -->
            <li class="list-group-item sidebar-separator menu-collapsed"></li>
            <!-- /END Separator -->
            <a href="<?=$help?>" class="bg-dark list-group-item list-group-item-action">
                <div class="d-flex w-100 justify-content-start align-items-center">
                    <span class="fa fa-question fa-fw mr-3"></span>
                    <span class="menu-collapsed">Hilfe</span>
                </div>
            </a>
            <a href="#" data-toggle="sidebar-colapse"
               class="bg-dark list-group-item list-group-item-action d-flex align-items-center">
                <div class="d-flex w-100 justify-content-start align-items-center">
                    <span id="collapse-icon" class="fa fa-angle-double-left fa-fw mr-3"></span>
                    <span id="collapse-text" class="menu-collapsed">Ausblenden</span>
                </div>
            </a>
            <!-- Logo -->
            <li class="list-group-item logo-separator d-flex justify-content-center">
                <img src='https://v4-alpha.getbootstrap.com/assets/brand/bootstrap-solid.svg' width="30" height="30"/>
            </li>
        </ul><!-- List Group END-->
    </div><!-- sidebar-container END -->