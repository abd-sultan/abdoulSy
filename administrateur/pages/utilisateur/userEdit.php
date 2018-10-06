<div class="container">
    <form action="pages/utilisateur/userList.php" method="post" name="form_generatites" id="form_generatites">
        <fieldset>
            <legend class="text-center" style="font-size:1em">Généralités</legend>
            <div class="row mb-0 pb-0 mt-0">
                <div class="col-md-4 mb-0">
                    <div class="form-group mb-0">
                        <div class="row">
                            <div class="col-md-3">
                                <label for="nom">Nom</label>
                            </div>
                            <div class="col-md-9">
                                <input type="text" class="form-control form-control-sm" placeholder="nom" name="nom" id="nom"/>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-3">
                                <label for="adresse">Adresse</label>
                            </div>
                            <div class="col-md-9">
                                <input type="text" class="form-control form-control-sm" placeholder="adresse" name="adresse" id="adresse"/>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-0">
                    <div class="form-group mb-0">
                        <div class="row">
                            <div class="col-md-3">
                                <label for="prenom">Prénom</label>
                            </div>
                            <div class="col-md-9">
                                <input type="text" class="form-control form-control-sm" placeholder="prénom" name="prenom" id="prenom"/>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-3">
                                <label for="tel">Téléphone</label>
                            </div>
                            <div class="col-md-9">
                                <input type="tel" class="form-control form-control-sm" placeholder="téléphone" name="tel" id="tel"/>
                            </div>
                        </div>
                    </div>
                    <button class="btn btn-sm btn-default" type="button" id="btn-retirer">Valider</button>
                    <button class="btn btn-sm btn-default ml-2" type="button" id="btn-retirer">Activer/Désactiver</button>
                </div>
                <div class="col-md-4 mb-0">
                    <div class="form-group mb-0">
                        <div class="row">
                            <div class="col-md-3">
                                <label for="email">Email</label>
                            </div>
                            <div class="col-md-9">
                               <input type="email" class="form-control form-control-sm" placeholder="email" name="email" id="email"/>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-3">
                                <label for="cellulaire">Cellulaire</label>
                            </div>
                            <div class="col-md-9">
                               <input type="tel" class="form-control form-control-sm" placeholder="cellulaire" name="cellulaire" id="cellulaire"/>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </fieldset>
        </form>
        <!-- --> <br>
        <div class="row mb-0 pb-0">
            <div class="col-md-6">
                <fieldset>
                    <legend class="text-center" style="font-size:1em">Paramètres web</legend>
                    <div class="form-group mb-0">
                        <div class="row">
                            <div class="col-md-5">
                                <label for="password">Mot de passe</label>
                            </div>
                            <div class="col-md-7">
                                <input type="password" class="form-control form-control-sm" placeholder="Mot de passe" name="password" id="password"/>
                            </div>
                        </div>
                    </div>
                    <div class="form-group mb-0">
                        <div class="row">
                            <div class="col-md-5">
                                <label for="password2">Confirmez le mot de passe</label>
                            </div>
                            <div class="col-md-7">
                                <input type="password" class="form-control form-control-sm" placeholder="Répétez le mot de passe" name="password2" id="password2"/>
                            </div>
                        </div>
                    </div>
                    <div class="form-group mb-0">
                        <div class="row">
                            <div class="col-md-5">
                                <label for="statut_web">Statut</label>
                            </div>
                            <div class="col-md-7 form-inline">
                                <div class="form-check">
                                    <input type="radio" class="form-check-input" value="active" name="rdb-web" id="rd-web-active" checked/>
                                    <label for="rd-web-active" class="form-check-label">Activé</label>
                                </div>
                                <div class="form-check" style="margin-left:15px">
                                    <input type="radio" class="form-check-input" value="desactive" name="rdb-web" id="rd-web-desactive"/>
                                    <label for="rd-web-desactive" class="form-check-label">Désactivé</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </fieldset>
            </div>
            <div class="col-md-6 mb-0">
                <fieldset>
                    <legend class="text-center" style="font-size:1em">Paramètres GSM</legend>
                    <div class="form-group mb-0">
                        <div class="row">
                            <div class="col-md-5">
                                <label for="code">Code PIN</label>
                            </div>
                            <div class="col-md-7">
                                <input type="number" class="form-control form-control-sm" placeholder="Code PIN" name="code" id="code"/>
                            </div>
                        </div>
                    </div>
                    <div class="form-group mb-0">
                        <div class="row">
                            <div class="col-md-5">
                                <label for="code2">Confirmez le code PIN</label>
                            </div>
                        <div class="col-md-7">
                            <input type="number" class="form-control form-control-sm" placeholder="Répétez le code PIN" name="code2" id="code2"/>
                        </div>
                    </div>
                    <div class="form-group mb-0">
                        <div class="row">
                            <div class="col-md-5">
                                <label for="statut_web">Statut</label>
                            </div>
                            <div class="col-md-7 form-inline">
                                <div class="form-check">
                                    <input type="radio" class="form-check-input" value="active" name="rdb-gsm" id="rd-gsm-active" checked/>
                                    <label for="rd-gsm-active" class="form-check-label">Activé</label>
                                </div>
                                <div class="form-check" style="margin-left:15px">
                                    <input type="radio" class="form-check-input" value="desactive" name="rdb-gsm" id="rd-gsm-desactive"/>
                                    <label for="rd-gsm-desactive" class="form-check-label">Désactivé</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </fieldset>
            </div>
        </div> <br><br>
        <div class="row">
                <div class="col-md-12">
                    <table class="table table-sm table-bordered">
                        <thead>
                            <tr style="font-size:1em">
                                <th scope="col" colspan="3" class="table-title" style="font-size:1em">Affectations</th>
                            </tr>
                            <tr>
                                <th scope="col">Fonction</th>
                                <th scope="col">Affectation</th>
                                <th scope="col">Statut</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Une fonfion</td>
                                <td>Une affectation</td>
                                <td>Un statut</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <!-- -->
            <div class="row">
                <div class="col-md-4"></div>
                <div class="col-md-4">
                    <button class="btn btn-sm btn-default" type="button" id="btn-retirer">Retirer</button>
                    <button class="btn btn-sm btn-default ml-2" type="button" id="btn-retirer">Activer/Désactiver</button>
                    <button class="btn btn-sm btn-default ml-2" id="btn-ajouter" data-toggle="modal" data-target="#affectations" type="button">Ajouter</button>
                </div>
                <div class="col-md-4"></div>
            </div>
            <div class="modal fade" tabindex="-1" role="dialog" id="affectations" area-labelledby="affectations" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                    <div class="modal-header"  style="background:black;color:white">
                        <h5 class="modal-title" class="text-center">Choisir une affectation</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <i class="fa fa-exit"></i>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-6">
                                    <ul>
                                        <li>
                                            <select name="controleur" class="custom-select" size="1" multiple>
                                                    <option value="controleur">CONTROLEUR</option>
                                                </select>
                                        </li>
                                        <li>AGENCE
                                        <ul>
                                            <li>
                                                <select name="agence" class="custom-select" multiple>
                                                    <option value="AgenceParcelles">Agence Parcelles</option>
                                                    <option value="AgenceFoire">Agence Foire</option>
                                                </select>
                                            </li>
                                        </ul>
                                        </li>
                                        <li>BACK OFFICE</li>
                                        <li>DISTRIBUTEUR</li>
                                    </ul>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="fonction">Fonction</label>
                                    <select name="cbofonction" id="fonction">
                                        <option value="superviseur" selected>SUPERVISEUR</option>
                                        <option value="caissier">CAISSIER</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-default" name="submit">Valider</button>
                    </div>
                    </div>
                </div>
                </div>
            </form>
</div>
