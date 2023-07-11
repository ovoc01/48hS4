
<!-- ======= Sidebar ======= -->
<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

        <li class="nav-item">
            <a class="nav-link collapsed" href="<?=base_url('admin/home')?>">
                <i class="bi bi-graph-up"></i>
                <span>Statistique</span>
            </a>
        </li><!-- End Dashboard Nav -->

        <li class="nav-item">
            <a class="nav-link collapsed" href="<?=base_url('admin/validation_codes')?>">
                <i class="bi bi-card-checklist"></i>
                <span>Validations codes</span>
            </a>
        </li><!-- End Profile Page Nav -->
        <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-clipboard"></i><span>Regime</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="components-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="components-alerts.html">
              <i class="bi bi-circle"></i><span>Nouveau</span>
            </a>
          </li>
          <li>
            <a href="components-accordion.html">
              <i class="bi bi-circle"></i><span>Listes</span>
            </a>
          </li>
         
        </ul>
      </li><!-- End Components Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#plat-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-book-half"></i><span>Plat</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="plat-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="components-alerts.html">
              <i class="bi bi-circle"></i><span>Nouveau</span>
            </a>
          </li>
          <li>
            <a href="components-accordion.html">
              <i class="bi bi-circle"></i><span>Listes</span>
            </a>
          </li>
         
        </ul>
      </li><!-- End Components Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#activity-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-calendar-event"></i><span>Activité</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="activity-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="components-alerts.html">
              <i class="bi bi-circle"></i><span>Nouveau</span>
            </a>
          </li>
          <li>
            <a href="components-accordion.html">
              <i class="bi bi-circle"></i><span>Listes</span>
            </a>
          </li>
         
        </ul>
      </li><!-- End Components Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#code-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-card-text"></i><span>Code</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="code-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="<?=base_url("code/new_code")?>">
              <i class="bi bi-circle"></i><span>Nouveau</span>
            </a>
          </li>
          <li>
            <a href="<?=base_url('code/list_code')?>">
              <i class="bi bi-circle"></i><span>Listes</span>
            </a>
          </li>
         
        </ul>
      </li><!-- End Components Nav -->

        <li class="nav-item">
            <a class="nav-link collapsed" href="users-profile.html">
                <i class="bi bi-door-open"></i>
                <span>Déconnectez</span>
            </a>
        </li><!-- End Profile Page Nav -->


    </ul>

</aside><!-- End Sidebar-->
