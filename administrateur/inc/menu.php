<nav class="navbar navbar-dark fixed-top bg-dark flex-md-nowrap p-0 shadow">
      <a class="navbar-brand col-sm-4 col-md-3 mr-0 text-center" href="#">Nom Application</a>
      
      <ul class="navbar-nav px-3" style="display: inline-block">
        <li class="nav-item text-nowrap" style="display: inline-block;margin-right:15px">
          <a class="nav-link" href="#"><i class ="fa fa-2x fa-user" style="color:white;font-weight:bold"></i></a>
        </li>
        <li class="nav-item text-nowrap" style="display: inline-block;margin-right:15px">
          <a class="nav-link" href="#"><i class ="fa fa-2x fa-user-friends" style="color:white;font-weight:bold"></i></a>
        </li>
        <li class="nav-item text-nowrap" style="display: inline-block">
          <a class="nav-link" href="#"><i class ="fa fa-2x fa-power-off" style="color:white;font-weight:bold"></i></a>
        </li>
      </ul>
    </nav>

    <div class="container-fluid mt-0">
      <div class="row">
        <nav class="col-md-3 d-none d-md-block bg-light sidebar">
          <div class="sidebar-sticky">
            <ul class="nav flex-column">
                <li class="nav-item accordion">
                    <a class="nav-link" href="#" role="button" data-toggle="collapse" data-target="#userCollapse" aria-expanded="false" aria-controls="userCollapse">
                    Utilisateurs <i class="fa fa-chevron-right"></i>
                    </a>
                    <div class="collapse" id="userCollapse">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">
                                <i class="fa fa-caret-right"></i>
                                <a href="admin.php?section=user&page=creerUser" id="creerUser" class="pageLink">Créer un utilisateur</a></li>
                            <li class="list-group-item">
                                <i class="fa fa-caret-right"></i>
                                <a href="admin.php?section=user&page=userConnectes" id="userCon" class="pageLink">Utilisateurs Connectés</a>
                            </li>
                            <li class="list-group-item">
                                <i class="fa fa-caret-right"></i>
                                <a href="admin.php?section=user&page=userList" id="userList" class="pageLink">Liste des utilisateurs</a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item accordion">
                    <a class="nav-link collapsed" href="#" role="button" data-toggle="collapse" data-target="#uniteCollapse" aria-expanded="false" aria-controls="uniteCollapse">
                    Unités Organisationnelles <i class="fa fa-chevron-right"></i>
                    </a>
                    <div class="collapse" id="uniteCollapse">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">
                                <i class="fa fa-caret-right"></i>
                                <a href="admin.php?section=unite&page=uniteList" id="uoList" class="pageLink">Liste des Unités Organisationnelles </a></li>
                            <li class="list-group-item">
                                <i class="fa fa-caret-right"></i>
                                <a href="admin.php?section=unite&page=distributeurs" id="distrib" class="pageLink">Distributeurs en instance</a>
                            </li>
                            <li class="list-group-item">
                                <i class="fa fa-caret-right"></i>
                                <a href="admin.php?section=unite&page=sousDistributeur" id="sousDistrib" class="pageLink">Sous distributeur en instance</a>
                            </li>
                            <li class="list-group-item">
                                <i class="fa fa-caret-right"></i>
                                <a href="admin.php?section=unite&page=gererHoraire" id="gHoraire" class="pageLink">Gérer horaire</a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item accordion">
                    <a class="nav-link collapsed" href="#" role="button" data-toggle="collapse" data-target="#jourCollapse" aria-expanded="false" aria-controls="jourCollapse">
                    Fins de Journée <i class="fa fa-chevron-right"></i>
                    </a>
                    <div class="collapse" id="jourCollapse">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">
                                <i class="fa fa-caret-right"></i>
                                <a href="admin.php?section=finJournee&page=rapport" id="rapJour" class="pageLink">Rapport de fin de journée</a></li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item accordion">
                    <a class="nav-link collapsed" href="#" role="button" data-toggle="collapse" data-target="#extractionCollapse" aria-expanded="false" aria-controls="extractionCollapse">
                    Extractions <i class="fa fa-chevron-right"></i>
                    </a>
                    <div class="collapse" id="extractionCollapse">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">
                                <i class="fa fa-caret-right"></i>
                                <a href="admin.php?section=extraction&page=journaux" id="extJour" class="pageLink">Journaux</a></li>
                            <li class="list-group-item">
                                <i class="fa fa-caret-right"></i>
                                <a href="admin.php?section=extraction&page=bordereaux" id="extBord" class="pageLink">Bordereaux</a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item accordion">
                    <a class="nav-link collapsed" href="#" role="button" data-toggle="collapse" data-target="#reportingCollapse" aria-expanded="false" aria-controls="reportingCollapse">
                    Reporting <i class="fa fa-chevron-right"></i>
                    </a>
                    <div class="collapse" id="reportingCollapse">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">
                                <i class="fa fa-caret-right"></i>
                                <a href="admin.php?section=reporting&page=journaux" id="repJour" class="pageLink">Journaux</a></li>
                            <li class="list-group-item">
                                <i class="fa fa-caret-right"></i>
                                <a href="admin.php?section=reporting&page=bordereaux" id="repBord" class="pageLink">Bordereaux</a>
                            </li>
                            <li class="list-group-item">
                                <i class="fa fa-caret-right" class="pageLink"></i>
                                <a href="admin.php?section=reporting&page=guichet" id="sitGuichet" class="pageLink">Situation de Guichet</a>
                            </li>
                            <li class="list-group-item">
                                <i class="fa fa-caret-right"></i>
                                <a href="admin.php?section=reporting&page=releve" id="relDistrib" class="pageLink">Relevé de Distributeur</a>
                            </li>
                        </ul>
                    </div>
                </li>
            </ul>
          </div>
        </nav>