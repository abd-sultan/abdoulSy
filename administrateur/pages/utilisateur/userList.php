<div class="row">
    <div class="col-md-12">
        <form action="pages/utilisateur/userList.php" method="post">
            <fieldset>
                <legend>Filtres</legend>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-inline">
                            <label for="fonction">Fonction : </label>
                            <select name="fonction" id="fonction" class="custom-select">
                                <option value="administrateur">Administrateur</option>
                                <option value="superviseur">Superviseur</option>
                                <option value="caissier">Caissier</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-5">
                                    <label for="fonction">Affectations : </label>
                                    <button type="button" class="btn btn-sm btn-default">Choisir</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-md-12">
                        <button type="submit" class="btn btn-sm btn-secondary">Afficher</button>
                    </div>
                </div>
            </fieldset>
        </form>
    </div>
</div>

<div class="row">
    <div class="col-md-12">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Login</th>
                    <th scope="col">Nom</th>
                    <th scope="col">Prénom</th>
                    <th scope="col">Affectation</th>
                    <th scope="col">Fonction</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1234</td>
                    <td>log1234</td>
                    <td>BA</td>
                    <td>Alassane</td>
                    <td>Agence Foire</td>
                    <td>Administrateur</td>
                    <td class="text-center"><a href="admin.php?section=user&page=userEdit&id=5"><i class="fa fa-edit"></i></a></td>
                </tr>
                <tr>
                    <td>5678</td>
                    <td>log5678</td>
                    <td>DIALLO</td>
                    <td>Alioune Badara</td>
                    <td>Agence Parcelles</td>
                    <td>Supervisuer</td>
                    <td class="text-center"><a href="admin.php?section=user&page=userEdit&id=14"><i class="fa fa-edit"></i></a></td>
                </tr>
            </tbody>
            <tfoot>
                <tr>
                    <td colspan="7">
                        <nav aria-label="Page navigation example">
                            <ul class="pagination">
                                <li class="page-item">
                                    <a class="page-link" href="#" tabindex="-1"><i class="fa fa-angle-double-left"></i></a>
                                </li>
                                <li class="page-item">
                                    <a class="page-link" href="#">1</a>
                                </li>
                                <li class="page-item">
                                    <a class="page-link" href="#">2</a>
                                </li>
                                <li class="page-item">
                                    <a class="page-link" href="#">3</a>
                                </li>
                                <li class="page-item">
                                    <a class="page-link" href="#"><i class="fa fa-angle-double-right"></i></a>
                                </li>
                            </ul>
                        </nav>
                    </td>
                </tr>
            </tfoot>
        </table>
    </div>
</div>
