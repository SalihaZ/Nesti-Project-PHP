 <!-- Main -->
 <main class="container wrapper-articles">

     <div class="row d-flex">

         <!-- Titles Page -->
         <div class="col-12">
             <div class="row">
                 <div class="col">
                     <h1>Commandes</h1>
                     <h5>Consultation descommandes</h5>
                 </div>
             </div>

             <br>

             <!-- Table Container -->
             <div class="row wrapper-articles-table justify-content-between">

                 <div class="col-8">

                     <!-- Research Bar -->
                     <div>
                         <input type="search" class="form-control-lg" placeholder="Rechercher une commande" />
                         <button type="button" class="btn" id="button-search-bar">
                             <i class="fas fa-search"></i>
                         </button>
                     </div>

                     <br>

                     <table class="table shadow">
                         <thead>
                             <tr>
                                 <th scope="col">#</th>
                                 <th scope="col">Utilisateur</th>
                                 <th scope="col">Montant</th>
                                 <th scope="col">Nb d'articles</th>
                                 <th scope="col">Date</th>
                                 <th scope="col">État</th>
                             </tr>
                         </thead>
                         <tbody>

                             <?php
                                foreach ($arrayUsers as $element) {
                                ?>
                                 <tr>
                                     <th scope="row">
                                         1
                                     </th>
                                     <td>
                                         Jean Michel
                                     </td>

                                     <td>
                                         13.87 €
                                     </td>
                                     <td>
                                         13
                                     </td>
                                     <td>
                                         12/12/2020
                                     </td>
                                     <td>
                                         a
                                     </td>
                                 </tr>

                             <?php
                                }
                                ?>

                         </tbody>
                     </table>
                 </div>

                 <!-- Details -->
                 <div class="col-4 mb-3">
                     <div class="row d-flex justify-content-between px-3 align-items-end">
                         <h2>Détails</h2>
                         <label class="px-2 bg-warning">ID n° 3</label>
                     </div>
                     <textarea rows="10" cols="50" class="form-control shadow" id="inputRecipeName" placeholder="" name="recipe[name_recipes]"> </textarea>
                 </div>
             </div>
         </div>
     </div>
 </main>