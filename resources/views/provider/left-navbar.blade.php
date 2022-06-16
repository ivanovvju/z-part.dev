<nav id="sidebarMenu" class="col-12 d-md-block sidebar collapse">
    <div class="position-sticky pt-3">
        <ul class="nav flex-column">
            <li class="nav-item menu-item" style="margin-right: 20px; list-style: none">
                <a href="{{ route('provider.cabinet') }}" class="nav-link" style="text-decoration: none"><i class="bi bi-house-door"></i>Личный кабинет</a>
            </li>
            <li class="nav-item menu-item" style="margin-right: 20px; list-style: none">
                <a href="{{ route('provider.sample.price') }}" class="nav-link" style="text-decoration: none"><i class="bi bi-card-list"></i>Образец прайса</a>
            </li>
            <li class="nav-item menu-item" style="margin-right: 20px; list-style: none">
                <a href="{{ route('provider.index') }}" class="nav-link" style="text-decoration: none"><i class="bi bi-basket"></i>Загрузить прайс</a>
            </li>
            <li class="nav-item menu-item" style="margin-right: 20px; list-style: none">
                <a href="{{ route('provider.selection.parts') }}" class="nav-link" style="text-decoration: none"><i class="bi bi-file-plus"></i>Подбор зап. частей</a>
            </li>
            <li class="nav-item menu-item" style="margin-right: 20px; list-style: none">
                <a href="{{ route('provider.download.report.parts') }}" class="nav-link" style="text-decoration: none"><i class="bi bi-box-arrow-down"></i>Забрать отчет</a>
            </li>
            <li class="nav-item menu-item" style="margin-right: 20px; list-style: none">
                <a href="{{ route('provider.history') }}" class="nav-link" style="text-decoration: none"><i class="bi bi-archive"></i>История запросов</a>
            </li>
        </ul>
    </div>
</nav>
