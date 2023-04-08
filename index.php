<?php 
include './db/auth.php' ; 
include './base.php' ;

 $stmt = $pdo->prepare('SELECT COUNT(*) FROM apartment');
 $stmt->execute();
 $total_ap = $stmt->fetchColumn();
 $stmt = $pdo->prepare('SELECT COUNT(*) FROM building');
 $stmt->execute();
 $total_building = $stmt->fetchColumn();
 $stmt = $pdo->prepare('SELECT COUNT(*) FROM garage');
 $stmt->execute();
 $total_gar= $stmt->fetchColumn();
 $stmt = $pdo->prepare('SELECT COUNT(*) FROM office');
 $stmt->execute();
 $total_off = $stmt->fetchColumn();
?>

<div class="tab-pane p-3 active preview" role="tabpanel" id="preview-1218">
                    <div class="card-group">
                      <div class="card">
                    <a class="text-decoration-none" href="/dataBuilding.php">
                    <div class="card-body">
                          <div class="text-medium-emphasis text-end mb-4">
                            <svg class="icon icon-xxl">
                              <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-building"></use>
                            </svg>
                          </div>
                          <div class="fs-4 fw-semibold">  <?php  echo  $total_building  ?></div><small class="text-medium-emphasis text-uppercase fw-semibold">Buildings</small>
                          <div class="progress progress-thin mt-3 mb-0">
                            <div class="progress-bar bg-info" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                          </div>
                        </div>
                    </a>
                      </div>
                      <div class="card">
                      <a class="text-decoration-none" href="/dataApartment.php" >  <div class="card-body">
                          <div class="text-medium-emphasis text-end mb-4">
                            <svg class="icon icon-xxl">
                              <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-house"></use>
                            </svg>
                          </div>
                          <div class="fs-4 fw-semibold"><?php  echo  $total_ap  ?></div><small class="text-medium-emphasis text-uppercase fw-semibold">Appartments</small>
                          <div class="progress progress-thin mt-3 mb-0">
                            <div class="progress-bar bg-success" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                          </div>
                        </div></a>
                      </div>
                      <div class="card">
                      <a class="text-decoration-none" href="/dataOffice.php">
                      <div class="card-body">
                          <div class="text-medium-emphasis text-end mb-4">
                            <svg class="icon icon-xxl">
                              <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-industry"></use>
                            </svg>
                          </div>
                          <div class="fs-4 fw-semibold"><?php  echo  $total_off  ?></div><small class="text-medium-emphasis text-uppercase fw-semibold">Offices</small>
                          <div class="progress progress-thin mt-3 mb-0">
                            <div class="progress-bar bg-warning" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                          </div>
                        </div>
                      </a>
                      </div>
                      <a class="card text-decoration-none" href="dataGarage.php">
                        <div class="card-body">
                          <div class="text-medium-emphasis text-end mb-4">
                            <svg class="icon icon-xxl">
                              <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-garage"></use>
                            </svg>
                          </div>
                          <div class="fs-4 fw-semibold"><?php  echo  $total_gar  ?></div><small class="text-medium-emphasis text-uppercase fw-semibold">Garages</small>
                          <div class="progress progress-thin mt-3 mb-0">
                            <div class="progress-bar" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                          </div>
                        </div>
</a>
                 
                    </div>
                  </div>