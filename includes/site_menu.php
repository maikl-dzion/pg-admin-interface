<nav class="navbar fixed-top navbar-expand-lg navbar-dark pg-navbar" style="border:0px red solid;">

    <a class="navbar-brand pgadmin_header_logo" href="#"  >
        <i class="app-icon pg-icon" ></i>
    </a>

    <div class="collapse navbar-collapse" >

        <ul class="navbar-nav mr-auto">
            <li class="nav-item active dropdown">
                <a @click="pageName = 'base_managament_page'"  class="nav-link dropdown-toggle1" style="cursor:pointer" >
                    Конфигурирование базы <span class="caret" ></span>
                </a>

<!--                <ul class="dropdown-menu" role="menu">-->
<!--                    <<li><a href="#" class="dropdown-item"><span> Сброс интерфейса</span></a></li>-->
<!--                    <li><a href="#" class="dropdown-item"><span > Сброс интерфейса</span></a></li>-->
<!--                </ul>-->

            </li>

            <li class="nav-item active dropdown">
                <a @click="pageName = 'data_managament_page'" class="nav-link dropdown-toggle1" style="cursor:pointer" >
                    Данные <span class="caret" ></span>
                </a>
            </li>

        </ul>

        <ul class="navbar-nav">
            <li class="nav-item active dropdown">
                <a href="#" class="nav-link dropdown-toggle1" style="font-size: 13px;">
                    <img src="assets/pg-admin-assets/cd2bfcffe5fee4a1149d101994d0987f" width="18" height="18" >
                    user@domain.com (internal) <span class="caret"></span></a>
                <ul class="dropdown-menu dropdown-menu-right" >
                    <li><a class="dropdown-item" href="#" >Сменить пароль</a></li>
                    <li class="dropdown-divider"></li>
                    <li><a class="dropdown-item" href="#" >Пользователи</a></li>
                    <li class="dropdown-divider"></li>
                    <li><a class="dropdown-item" href="#">Выход</a></li>
                </ul>
            </li>
        </ul>

    </div>
</nav>