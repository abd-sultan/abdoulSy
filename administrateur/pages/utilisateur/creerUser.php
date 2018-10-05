<div class="container">
    <form action="pages/utilisateur/traitement.php" method="post" name="form_generatites" id="form_generatites">
        <fieldset>
            <legend class="text-center">Généralités</legend>
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="nom">Nom</label>
                        <input type="text" class="form-control form-control-sm" placeholder="nom" name="nom" id="nom"/>
                    </div>
                    <div class="form-group">
                        <label for="adresse">Adresse</label>
                        <input type="text" class="form-control form-control-sm" placeholder="adresse" name="adresse" id="adresse"/>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="prenom">Prénom</label>
                        <input type="text" class="form-control form-control-sm" placeholder="prénom" name="prenom" id="prenom"/>
                    </div>
                    <div class="form-group">
                        <label for="tel">Téléphone</label>
                        <input type="tel" class="form-control form-control-sm" placeholder="téléphone" name="tel" id="tel"/>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control form-control-sm" placeholder="email" name="email" id="email"/>
                    </div>
                    <div class="form-group">
                        <label for="cellulaire">Cellulaire</label>
                        <input type="tel" class="form-control form-control-sm" placeholder="cellulaire" name="cellulaire" id="cellulaire"/>
                    </div>
                </div>
            </div>
        </fieldset>
        <!-- --> <br><br>
        <div class="row">
            <div class="col-md-6">
                <fieldset>
                    <legend class="text-center">Paramètres web</legend>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-5">
                                <label for="password">Mot de passe</label>
                            </div>
                            <div class="col-md-7">
                                <input type="password" class="form-control form-control-sm" placeholder="Mot de passe" name="password" id="password"/>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-5">
                                <label for="password2">Confirmez le mot de passe</label>
                            </div>
                            <div class="col-md-7">
                                <input type="password" class="form-control form-control-sm" placeholder="Répétez le mot de passe" name="password2" id="password2"/>
                            </div>
                        </div>
                    </div>
                </fieldset>
            </div>
            <div class="col-md-6">
                <fieldset>
                    <legend class="text-center">Paramètres GSM</legend>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-5">
                                <label for="code">Code PIN</label>
                            </div>
                            <div class="col-md-7">
                                <input type="number" class="form-control form-control-sm" placeholder="Code PIN" name="code" id="code"/>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-5">
                                <label for="code2">Confirmez le code PIN</label>
                            </div>
                        <div class="col-md-7">
                            <input type="number" class="form-control form-control-sm" placeholder="Répétez le code PIN" name="code2" id="code2"/>
                        </div>
                    </div>
                </fieldset>
            </div>
        </div> 
        <!-- --> <br><br>
        <div class="row">
                <div class="col-md-12">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th scope="col" colspan="3" class="table-title">Affectations</th>
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
                    <button class="btn btn-small btn-default" type="button" id="btn-retirer">Retirer</button>
                    <button class="btn btn-small btn-default ml-2" id="btn-ajouter" data-toggle="modal" data-target="#affectations" type="button">Ajouter</button>
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

