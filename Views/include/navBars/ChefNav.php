<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

     <!-- Sidebar - Brand -->
     <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
        <div class="sidebar-brand-icon">
            <img src="..\..\startbootstrap-sb-admin-2-gh-pages\img\logo2.png" alt="Logo" style="width: 40px; height: 40px;">
        </div>
        <div class="sidebar-brand-text mx-3">E-service</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-2">

   <!-- Sidebar Toggler -->
   <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Accueil -->
    <li class="nav-item">
        <a class="nav-link" href="index.php">
            <i class="fas fa-home"></i>
            <span>Accueil</span>
        </a>
    </li>

    <hr class="sidebar-divider">
    <!-- Heading -->
    <div class="sidebar-heading">
        Gestion Principale
    </div>

    <!-- Nav Item - Unités d'Enseignement Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUE"
            aria-expanded="true" aria-controls="collapseUE">
            <i class="fas fa-fw fa-book"></i>
            <span>Unités d'Enseignement</span>
        </a>
        <div id="collapseUE" class="collapse" aria-labelledby="headingUE" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Gestion des UEs:</h6>
                <a class="collapse-item" href="liste_ues.php">Lister les UEs</a>
                <a class="collapse-item" href="ues_vacantes.php">UEs Vacantes (Valider)</a>
                 <!-- Affectation might be better placed under Professeurs or its own section -->
            </div>
        </div>
    </li>

    <!-- Nav Item - Professeurs Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseProfesseurs"
            aria-expanded="true" aria-controls="collapseProfesseurs">
            <i class="fas fa-fw fa-users"></i>
            <span>Professeurs</span>
        </a>
        <div id="collapseProfesseurs" class="collapse" aria-labelledby="headingProfesseurs" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Gestion des Professeurs:</h6>
                <a class="collapse-item" href="liste_professeurs.php">Lister les Professeurs</a>
                <a class="collapse-item" href="affecter_ue_professeur.php">Affecter UE à Professeur</a>
                <!-- Moved 'Affecter' here as it relates directly to professors -->
            </div>
        </div>
    </li>

     <!-- Nav Item - Choix & Charge Horaire Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseChoix"
            aria-expanded="true" aria-controls="collapseChoix">
            <i class="fas fa-fw fa-tasks"></i> <!-- Icon representing tasks/choices -->
            <span>Choix & Demandes</span>
        </a>
        <div id="collapseChoix" class="collapse" aria-labelledby="headingChoix" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Suivi des Affectations:</h6>
                <a class="collapse-item" href="liste_choix_professeurs.php">Lister les Choix</a>
                <!-- <a class="collapse-item" href="valider_choix_professeurs.php">Valider/Décliner Choix</a>
                <a class="collapse-item" href="calculer_charge_horaire.php">Calculer Charge Horaire</a> -->
            </div>
        </div>
    </li>


    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Outils & Historique
    </div>

    <!-- Nav Item - Reporting -->
    <li class="nav-item">
        <a class="nav-link" href="reporting.php">
            <i class="fas fa-fw fa-chart-bar"></i>
            <span>Reporting</span></a>
    </li>

    <!-- Nav Item - Historique -->
    <li class="nav-item">
        <a class="nav-link" href="historique.php">
            <i class="fas fa-fw fa-history"></i>
            <span>Historique</span></a>
    </li>

     <!-- Nav Item - Import/Export -->
     <li class="nav-item">
        <a class="nav-link" href="import_export.php">
            <i class="fas fa-fw fa-exchange-alt"></i> <!-- Or fa-file-import / fa-file-export -->
            <span>Import/Export Données</span></a>
    </li>


    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">


</ul>
<!-- End of Sidebar -->