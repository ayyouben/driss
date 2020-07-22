<div class="card card-stats">
                <div class="card-header card-header-warning card-header-icon">
                  <div class="card-icon">
                    <i class="material-icons">content_copy</i></br>
                    List User
                  </div>
                
                  <h3 class="card-title">
                  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                  <i class="material-icons" style="font-size:25px">person_add</i>Ajouter Utlisateur
                  </button>
                  <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg">Large modal</button>
                  </h3>
                </div>
                <div class="card-footer">
                <div class="table-responsive">
                  <table class="table table-hover">
                    <thead class="text-warning">
                      <tr><th>ID</th>
                      <th>Name</th>
                      <th>Salary</th>
                      <th>Country</th>
                      <th>Action</th>
                    </tr></thead>
                    <tbody>
                      <tr>
                        <td>1</td>
                        <td>Dakota Rice</td>
                        <td>$36,738</td>
                        <td>Niger</td>
                        <td class="td-actions ">
                            <button type="button" rel="tooltip" title="" class="btn btn-primary btn-link btn-sm" data-original-title="Edit Task" aria-describedby="tooltip280318">
                            <i class="material-icons">edit</i>
                            </button>
                            <button type="button" rel="tooltip" title="" class="btn btn-danger btn-link btn-sm" data-original-title="Remove">
                            <i class="material-icons">close</i>
                            </button>
                        </td>
                      </tr>
                      <tr>
                        <td>2</td>
                        <td>Minerva Hooper</td>
                        <td>$23,789</td>
                        <td>Curaçao</td>
                        <td class="td-actions ">
                            <button type="button" rel="tooltip" title="" class="btn btn-primary btn-link btn-sm" data-original-title="Edit Task" aria-describedby="tooltip280318">
                            <i class="material-icons">edit</i>
                            </button>
                            <button type="button" rel="tooltip" title="" class="btn btn-danger btn-link btn-sm" data-original-title="Remove">
                            <i class="material-icons">close</i>
                            </button>
                        </td>
                      </tr>
                      <tr>
                        <td>3</td>
                        <td>Sage Rodriguez</td>
                        <td>$56,142</td>
                        <td>Netherlands</td>
                        <td class="td-actions">
                            <button type="button" rel="tooltip" title="" class="btn btn-primary btn-link btn-sm" data-original-title="Edit Task" aria-describedby="tooltip280318">
                            <i class="material-icons">edit</i>
                            </button>
                            <button type="button" rel="tooltip" title="" class="btn btn-danger btn-link btn-sm" data-original-title="Remove">
                            <i class="material-icons">close</i>
                            </button>
                        </td>
                      </tr>
                      <tr>
                        <td>4</td>
                        <td>Philip Chaney</td>
                        <td>$38,735</td>
                        <td>Korea, South</td>
                        <td class="td-actions ">
                            <button type="button" rel="tooltip" title="" class="btn btn-primary btn-link btn-sm" data-original-title="Edit Task" aria-describedby="tooltip280318">
                            <i class="material-icons">edit</i>
                            </button>
                            <button type="button" rel="tooltip" title="" class="btn btn-danger btn-link btn-sm" data-original-title="Remove">
                            <i class="material-icons">close</i>
                            </button>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
                </div>
<?php include('../modal.php'); ?>