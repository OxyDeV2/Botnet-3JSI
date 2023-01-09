<?php

class VueAccueil
{

    public function accueil($nb_zombie, $nb_at, $pc_at_massive, $pc_at_ciblee, $nb_donnee)
    {
      ?>
        <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-sm-12">
              <div class="home-tab">
                <div class="tab-content tab-content-basic">
                  <div class="tab-pane fade show active" id="overview" role="tabpanel" aria-labelledby="overview"> 
                    <div class="row">
                      <div class="col-sm-12">
                        <div class="statistics-details d-flex align-items-center justify-content-between">
                          <div>
                            <p class="statistics-title">Nb. Zombies</p>
                            <h3 class="rate-percentage" color="green">
                            <?php
                             print($nb_zombie);
                            ?>
                             </h3>
                          </div>
                          <div>
                            <p class="statistics-title">Nb. Attaques</p>
                            <h3 class="rate-percentage">
                            <?php
                             print($nb_at);
                            ?>
                            </h3>
                          </div>
                          <div>
                            <p class="statistics-title">% Attaques Massive</p>
                            <h3 class="rate-percentage">
                            <?php
                             print($pc_at_massive) . "%";
                            ?>
                            </h3>
                          </div>
                          <div>
                            <p class="statistics-title">% Attaques Ciblee</p>
                            <h3 class="rate-percentage">
                            <?php
                             print($pc_at_ciblee) . "%";
                            ?>
                            </h3>
                          </div>
                          <div>
                            <p class="statistics-title">Nb. Données Volées</p>
                            <h3 class="rate-percentage">
                            <?php
                             print($nb_donnee);
                            ?>    
                            </h3>
                          </div>
                        </div>
                      </div>
                    </div> 
                    <div class="row">
                      <div class="col-lg-8 d-flex flex-column">
                        <div class="row flex-grow">
                          <div class="col-12 col-lg-4 col-lg-12 grid-margin stretch-card">
                            <div class="card card-rounded">
                              <div class="card-body">
                                <div class="d-sm-flex justify-content-between align-items-start">
                                  <div>
                                   <h4 class="card-title card-title-dash">Graphique linéaire des attaques</h4>
                                  </div>
                                  <div id="performance-line-legend"></div>
                                </div>
                                <div class="chartjs-wrapper mt-5">
                                  <canvas id="performaneLine"></canvas>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-lg-4 d-flex flex-column">
                        <div class="row flex-grow">
                          <div class="col-12 grid-margin stretch-card">
                            <div class="card card-rounded">
                              <div class="card-body">
                                <div class="row">
                                  <div class="col-lg-12">
                                    <div class="d-flex justify-content-between align-items-center mb-3">
                                      <h4 class="card-title card-title-dash">Répartition attaques</h4>
                                    </div>
                                    <canvas class="my-auto" id="doughnutChart" height="200"></canvas>
                                    <div id="doughnut-chart-legend" class="mt-5 text-center"></div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <?php
    }
}