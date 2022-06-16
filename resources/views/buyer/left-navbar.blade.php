<nav id="sidebarMenu" class="col-12 d-md-block sidebar collapse">
    <div class="position-sticky pt-3">
        <ul class="nav flex-column">
            <li class="nav-item menu-item" style="margin-right: 20px; list-style: none">
                <a href="{{ route('buyer.cabinet') }}" class="nav-link" style="text-decoration: none"><i class="bi bi-house-door"></i>Личный кабинет</a>
            </li>
            <li class="nav-item menu-item" style="margin-right: 20px; list-style: none">
                <a href="{{ route('buyer.sample.request') }}" class="nav-link" style="text-decoration: none"><i class="bi bi-card-list"></i>Образец запроса</a>
            </li>
            <li class="nav-item menu-item" style="margin-right: 20px; list-style: none">
                <a href="{{ route('buyer.index') }}" class="nav-link" style="text-decoration: none"><i class="bi bi-basket"></i>Загрузить отчет</a>
            </li>
            <li class="nav-item menu-item" style="margin-right: 20px; list-style: none">
                <a href="{{ route('buyer.selection.parts') }}" class="nav-link" style="text-decoration: none"><i class="bi bi-file-plus"></i>Подбор зап. частей</a>
            </li>
            <li class="nav-item menu-item" style="margin-right: 20px; list-style: none">
                <a href="{{ route('link') }}" class="nav-link" style="text-decoration: none"><i class="bi bi-box-arrow-down"></i>Забрать отчет</a>
            </li>
            <li class="nav-item menu-item" style="margin-right: 20px; list-style: none">
                <a href="{{ route('buyer.history') }}" class="nav-link" style="text-decoration: none"><i class="bi bi-archive"></i>История запросов</a>
            </li>
        </ul>
    </div>
</nav>
