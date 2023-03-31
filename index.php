<?php 
include './db/auth.php' ; 
include './base.php' ;

 $stmt = $pdo->prepare('SELECT COUNT(*) FROM apartment');
 $stmt->execute();
 $total_ap = $stmt->fetchColumn();

?>

<div class="tab-pane p-3 active preview" role="tabpanel" id="preview-1218">
                    <div class="card-group">
                      <div class="card">
                        <div class="card-body">
                          <div class="text-medium-emphasis text-end mb-4">
                            <svg class="icon icon-xxl">
                              <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-people"></use>
                            </svg>
                          </div>
                          <div class="fs-4 fw-semibold">  <?php  echo $total_ap ?></div><small class="text-medium-emphasis text-uppercase fw-semibold">Buildings</small>
                          <div class="progress progress-thin mt-3 mb-0">
                            <div class="progress-bar bg-info" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                          </div>
                        </div>
                      </div>
                      <div class="card">
                        <div class="card-body">
                          <div class="text-medium-emphasis text-end mb-4">
                            <svg class="icon icon-xxl">
                              <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-user-follow"></use>
                            </svg>
                          </div>
                          <div class="fs-4 fw-semibold">385</div><small class="text-medium-emphasis text-uppercase fw-semibold">New Clients</small>
                          <div class="progress progress-thin mt-3 mb-0">
                            <div class="progress-bar bg-success" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                          </div>
                        </div>
                      </div>
                      <div class="card">
                        <div class="card-body">
                          <div class="text-medium-emphasis text-end mb-4">
                            <svg class="icon icon-xxl">
                              <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-basket"></use>
                            </svg>
                          </div>
                          <div class="fs-4 fw-semibold">1238</div><small class="text-medium-emphasis text-uppercase fw-semibold">Products sold</small>
                          <div class="progress progress-thin mt-3 mb-0">
                            <div class="progress-bar bg-warning" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                          </div>
                        </div>
                      </div>
                      <div class="card">
                        <div class="card-body">
                          <div class="text-medium-emphasis text-end mb-4">
                            <svg class="icon icon-xxl">
                              <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-chart-pie"></use>
                            </svg>
                          </div>
                          <div class="fs-4 fw-semibold">28%</div><small class="text-medium-emphasis text-uppercase fw-semibold">Returning Visitors</small>
                          <div class="progress progress-thin mt-3 mb-0">
                            <div class="progress-bar" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                          </div>
                        </div>
                      </div>
                      <div class="card">
                        <div class="card-body">
                          <div class="text-medium-emphasis text-end mb-4">
                            <svg class="icon icon-xxl">
                              <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-speedometer"></use>
                            </svg>
                          </div>
                          <div class="fs-4 fw-semibold">5:34:11</div><small class="text-medium-emphasis text-uppercase fw-semibold">Avg. Time</small>
                          <div class="progress progress-thin mt-3 mb-0">
                            <div class="progress-bar bg-danger" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>