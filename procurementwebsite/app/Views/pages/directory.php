<?php
$recipientEmail = 'markbrvaldez@gmail.com';
$subject = 'Email Subject';
$body = 'Email body content';

$encodedRecipient = urlencode($recipientEmail);
$encodedSubject = urlencode($subject);
$encodedBody = urlencode($body);

$gmailWebLink = "https://mail.google.com/mail/?view=cm&to={$encodedRecipient}&su={$encodedSubject}&body={$encodedBody}";

?>

<h1 class="text-center pt-2 fw-bold">AS - BGMD DIRECTORY OF OFFICERS</h1>


<div class="teamWrapper">
    <div class="section-container">
        <div class="topgrid">
            <div class="colmun pl-5 pr-5">
                <div class="teamcol">
                    <div class="teamcolinner">
                        <div class="card-body">
                            <div class="row">
                                <?php foreach ($employee as $employee) : ?>
                                    <?php if ($employee['id'] == 1) : ?>
                                        <div class="col-md-12 col-lg-3 col-xl-3 mb-4 mb-lg-0 ">
                                            <div class="bg-image text-center hover-zoom ripple rounded ripple-surface">
                                                <img src="<?php echo base_url('uploads/profileimage/karen.png'); ?> " alt="profile" class="rounded-circle img-fluid " style="width: 180px;" />
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-lg-6 col-xl-6">
                                            <h5> Atty. Karina Antonette A. Agudo </h5>
                                            <div class="d-flex flex-row">
                                                <span class="font-weight-bold">CESE Director IV</span>
                                            </div>
                                            <div class="mt-1 mb-0 text-muted small">
                                                <span> Admin@dswd.gov.ph</span>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-lg-3 col-xl-3 border-sm-start-none border-start">
                                            <div class="d-flex flex-row align-items-center mb-1">
                                                <h4 class="mb-1 me-1"> Atty. Karina Antonette A. Agudo</h4>
                                            </div>

                                            <h6 class="text-success"> PERMANENT </h6>

                                            <div class="d-flex flex-column mt-4">
                                                <a href="<?= $gmailWebLink ?>" target="_blank" class="btn btn-primary btn-sm">Contact</a>
                                            </div>
                                        </div>
                                    <?php else : ?>
                                    <?php endif; ?>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="section-container">
        <div class="topgrid">
            <div class="colmun pl-5 pr-5">
                <div class="teamcol">
                    <div class="teamcolinner">
                        <div class="card-body">
                            <div class="row">

                                <div class="col-md-12 col-lg-3 col-xl-3 mb-4 mb-lg-0 ">
                                    <div class="bg-image text-center hover-zoom ripple rounded ripple-surface">
                                        <img src="<?php echo base_url('uploads/profileimage/evangelistaace.jpg'); ?> " alt="profile" class="rounded-circle img-fluid " style="width: 180px;" />
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-6 col-xl-6">
                                    <h5> ENGR. ALFREDO C.EVANGELISTA II</h5>
                                    <div class="d-flex flex-row">
                                        <span class="font-weight-bold">Engineer III/Officer-in-Charge</span>
                                    </div>
                                    <div class="mt-1 mb-0 text-muted small">
                                        <span> aceevalista@dswd.gov.ph</span>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-3 col-xl-3 border-sm-start-none border-start">
                                    <div class="d-flex flex-row align-items-center mb-1">
                                        <h4 class="mb-1 me-1"> ENGR. ALFREDO C.EVANGELISTA II</h4>
                                    </div>

                                    <h6 class="text-success"> PERMANENT </h6>


                                    <div class="d-flex flex-column mt-4">
                                        <a href="<?= $gmailWebLink ?>" target="_blank" class="btn btn-primary btn-sm">Contact</a>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php if ($employee['name'] == "Larry P. Miranda") : ?>
        <div class="col-6 offset-md-3 offset-2">
            <div class="teamcol">
                <div class="teamcolinner ">


                    <div class="avatar ">
                        <img src="<?php echo base_url('uploads/user.png'); ?> " alt="profile" class=" img-fluid " />
                    </div>

                    <div class="member-name">
                        <h2 style="font-size:1rem;"><?= $employee['name']; ?></h2>
                        <p style="font-size:0.8em;"><?= $employee['about']; ?></p>
                    </div>
                </div>
            </div>
        </div>

    <?php else : ?>
    <?php endif; ?>
    <div class="container">
        <div class="row justify-content-md-between">
            <!-- loop start -->

            <div class="col-12 col-lg-3 ">
                <h5 class="mt-5 text-center text-white bg-dark p-2">PLANNING SECTION</h5>
                <div class="d-flex" style="height: 10px;">
                    <div class="vr offset-6"></div>
                </div>
                <div class="teamcol ">
                    <div class="teamcolinner ">


                        <div class="avatar 1">
                            <img src="<?php echo base_url('uploads/profileimage/bacay.png'); ?> " alt="profile" class=" img-fluid " />
                        </div>
                        <div class="member-name  ">
                            <h2 style="font-size:1rem; ">ENGR. ALDWIN R. BACAY </h2>
                            <p style="font-size:0.8em;">Engineer II/ Section Head</p>
                        </div>
                    </div>
                </div>
                <div class="d-flex" style="height: 10px;">
                    <div class="vr offset-6"></div>
                </div>
            </div>
            <div class="col-12 col-lg-3">
                <h5 class="mt-5 text-center text-white bg-dark p-2">MAINTENANCE SECTION</h5>
                <div class="d-flex" style="height: 10px;">
                    <div class="vr offset-6"></div>
                </div>
                <div class="teamcol">
                    <div class="teamcolinner">
                        <div class="avatar "> <img src="<?php echo base_url('uploads/profileimage/garciacaloy.png'); ?> " alt="profile" class=" img-fluid" /></div>
                        <div class="member-name">
                            <h2 style="font-size:1rem;">CARLOS P. GARCIA </h2>
                            <p style="font-size:0.8em;">Construction and Maintenance General Foreman/Section Head</p>
                        </div>
                    </div>
                </div>
                <div class="d-flex" style="height: 10px;">
                    <div class="vr offset-6"></div>
                </div>
            </div>
            <div class="col-12 col-lg-3">
                <h5 class="mt-5 text-center text-white bg-dark p-2">ADMIN SUPPORT UNIT</h5>
                <div class="d-flex" style="height: 10px;">
                    <div class="vr offset-6"></div>
                </div>
                <div class="teamcol">
                    <div class="teamcolinner ">
                        <div class="avatar "> <img src="<?php echo base_url('assets/images/pic.jpg'); ?> " alt="profile" class=" img-fluid" /></div>
                        <div class="member-name">
                            <h2 style="font-size:1rem;">JOHN MICHAEL DE PEDRO</h2>
                            <p style="font-size:0.8em;">Administrative Officer III/Unit Head</p>
                        </div>
                    </div>
                </div>
                <div class="d-flex" style="height: 10px;">
                    <div class="vr offset-6"></div>
                </div>
            </div>
            <!-- end of loop -->
        </div>
        <div class="row justify-content-md-evenly">
            <!-- loop start -->
            <div class="col-12 col-lg-3">
                <div class="teamcol">
                    <div class="teamcolinner">
                        <div class="avatar "> <img src="<?php echo base_url('assets/images/vacantimage.png'); ?> " alt="profile" class=" img-fluid" /></div>
                        <div class="member-name">
                            <h2 style="font-size:1rem;">VACANT</h2>
                            <p style="font-size:0.8em;"><?= $employee['about']; ?></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-3">
                <div class="teamcol">
                    <div class="teamcolinner">
                        <div class="avatar "> <img src="<?php echo base_url('assets/images/vacantimage.png'); ?> " alt="profile" class="img-fluid" /></div>
                        <div class="member-name">
                            <h2 style="font-size:1rem;">VACANT</h2>
                            <p style="font-size:0.8em;"><?= $employee['about']; ?></p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end of loop -->
        </div>
    </div>

    <div class="container-fluid ">
        <div class="row justify-content-around">
            <div class="col-12 col-md-4  div">
                <div class="row  justify-content-evenly">
                    <div class="col-12 col-lg-12 col-xl-4 div">
                        <div class="teamcol">
                            <div class="teamcolinner">
                                <div class="avatar"> <img src="<?php echo base_url('uploads/NET.jpg'); ?> " alt="profile" class="img-fluid" /></div>
                                <div class="member-name">
                                    <h2 style="font-size:1rem;">AR. NEZHLEY ANNE P. VIVIT</h2>
                                    <p style="font-size:0.8em;">Architect II</p>
                                </div>
                            </div>
                        </div>
                        <div class="teamcol">
                            <div class="teamcolinner">
                                <div class="avatar"> <img src="<?php echo base_url('uploads/profileimage/tuquero.jpg'); ?> " alt="profile" class="img-fluid" /></div>
                                <div class="member-name">
                                    <h2 style="font-size:1rem;">ENGR. JULIUS RYAN B. TUQUERO</h2>
                                    <p style="font-size:0.8em;"><?= $employee['about']; ?></p>
                                </div>
                            </div>
                        </div>
                        <div class="teamcol">
                            <div class="teamcolinner">
                                <div class="avatar"> <img src="<?php echo base_url('uploads/user.png'); ?> " alt="profile" class="img-fluid" /></div>
                                <div class="member-name">
                                    <h2 style="font-size:1rem;">AR. BENEDICT LOYOLA</h2>
                                    <p style="font-size:0.8em;">Project Management Officer</p>
                                </div>
                            </div>
                        </div>
                        <div class="teamcol">
                            <div class="teamcolinner">
                                <div class="avatar"> <img src="<?php echo base_url('uploads/profileimage/longcanaya.png'); ?> " alt="profile" class="img-fluid" /></div>
                                <div class="member-name">
                                    <h2 style="font-size:1rem;">ENGR.KATHERINE L.LONGCANAYA</h2>
                                    <p style="font-size:0.8em;"> Project Management</p>
                                </div>
                            </div>
                        </div>
                        <div class="teamcol">
                            <div class="teamcolinner">
                                <div class="avatar"> <img src="<?php echo base_url('uploads/profileimage/vegim.png'); ?> " alt="profile" class="img-fluid" /></div>
                                <div class="member-name">
                                    <h2 style="font-size:1rem;">ENGR. RONALD T.VEGIM</h2>
                                    <p style="font-size:0.8em;"><?= $employee['about']; ?></p>
                                </div>
                            </div>
                        </div>
                        <div class="teamcol">
                            <div class="teamcolinner">
                                <div class="avatar"> <img src="<?php echo base_url('uploads/user.png'); ?> " alt="profile" class="img-fluid" /></div>
                                <div class="member-name">
                                    <h2 style="font-size:1rem;">ENGR. RENZ JEROME N.DALISAY</h2>
                                    <p style="font-size:0.8em;"><?= $employee['about']; ?></p>
                                </div>
                            </div>
                        </div>
                        <div class="teamcol">
                            <div class="teamcolinner">
                                <div class="avatar"> <img src="<?php echo base_url('uploads/profileimage/garciachito.png'); ?> " alt="profile" class="img-fluid" /></div>
                                <div class="member-name">
                                    <h2 style="font-size:1rem;">RAMONCITO O.GARCIA</h2>
                                    <p style="font-size:0.8em;">Senior Admin.Assistant II(Audio-Visual Aids Technician IV)</p>
                                </div>
                            </div>
                        </div>
                        <div class="teamcol">
                            <div class="teamcolinner">
                                <div class="avatar"> <img src="<?php echo base_url('uploads/profileimage/jymlee.png'); ?> " alt="profile" class="img-fluid" /></div>
                                <div class="member-name">
                                    <h2 style="font-size:1rem;">ENGR. JYMLEE P. PACALA</h2>
                                    <p style="font-size:0.8em;">Project Management Officer</p>
                                </div>
                            </div>
                        </div>
                        <div class="teamcol">
                            <div class="teamcolinner">
                                <div class="avatar"> <img src="<?php echo base_url('uploads/profileimage/evangelistavill.jpg'); ?> " alt="profile" class="img-fluid" /></div>
                                <div class="member-name">
                                    <h2 style="font-size:1rem;">ENGR.VILLAMOR A .EVANGELISTA,JR.</h2>
                                    <p style="font-size:0.8em;"><?= $employee['about']; ?></p>
                                </div>
                            </div>
                        </div>
                        <div class="teamcol">
                            <div class="teamcolinner">
                                <div class="avatar"> <img src="<?php echo base_url('uploads/user.png'); ?> " alt="profile" class="img-fluid" /></div>
                                <div class="member-name">
                                    <h2 style="font-size:1rem;"><?= $employee['name']; ?></h2>
                                    <p style="font-size:0.8em;"><?= $employee['about']; ?></p>
                                </div>
                            </div>
                        </div>
                        <div class="teamcol">
                            <div class="teamcolinner">
                                <div class="avatar"> <img src="<?php echo base_url('uploads/user.png'); ?> " alt="profile" class="img-fluid" /></div>
                                <div class="member-name">
                                    <h2 style="font-size:1rem;"><?= $employee['name']; ?></h2>
                                    <p style="font-size:0.8em;"><?= $employee['about']; ?></p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="col-12 col-md-4  div">

                <div class="col-12 col-lg-12 col-xl-4 div offset-xl-2">
                    <div class="teamcol ">
                        <div class="teamcolinner">
                            <div class="avatar"> <img src="<?php echo base_url('uploads/profileimage/miranda.png'); ?> " alt="profile" class="img-fluid" /></div>
                            <div class="member-name">
                                <h2 style="font-size:1rem;">LARRY P .MIRANDA</h2>
                                <p style="font-size:0.8em;">Administrative Aide V (Mason II)</p>

                            </div>
                        </div>
                    </div>

                    <div class="teamcol">
                        <div class="teamcolinner">
                            <div class="avatar"> <img src="<?php echo base_url('uploads/profileimage/santor.png'); ?> " alt="profile" class="img-fluid" /></div>
                            <div class="member-name">
                                <h2 style="font-size:1rem;">DENNIS C .SANTOR</h2>
                                <p style="font-size:0.8em;">Administrative Aide VI(Labor Foreman)</p>
                            </div>
                        </div>
                    </div>
                    <div class="teamcol">
                        <div class="teamcolinner">
                            <div class="avatar"> <img src="<?php echo base_url('uploads/profileimage/detorres.png'); ?> " alt="profile" class="img-fluid" /></div>
                            <div class="member-name">
                                <h2 style="font-size:1rem;">JULIEN C. DE TORRES</h2>
                                <p style="font-size:0.8em;">Administrative Aide V(Painter II)</p>
                            </div>
                        </div>
                    </div>
                    <div class="teamcol">
                        <div class="teamcolinner">
                            <div class="avatar"> <img src="<?php echo base_url('uploads/profileimage/marcelo.png'); ?> " alt="profile" class="img-fluid" /></div>
                            <div class="member-name">
                                <h2 style="font-size:1rem;">MARK ANTHONY P. MARCELO</h2>
                                <p style="font-size:0.8em;"><?= $employee['about']; ?></p>
                            </div>
                        </div>
                    </div>
                    <div class="teamcol">
                        <div class="teamcolinner">
                            <div class="avatar"> <img src="<?php echo base_url('uploads/profileimage/pelingon.png'); ?> " alt="profile" class="img-fluid" /></div>
                            <div class="member-name">
                                <h2 style="font-size:1rem;">SILVINO G .PELINGON JR</h2>
                                <p style="font-size:0.8em;">Administrative Aide V (Carpentry II)</p>
                            </div>
                        </div>
                    </div>
                    <div class="teamcol">
                        <div class="teamcolinner">
                            <div class="avatar"> <img src="<?php echo base_url('uploads/profileimage/marcenas.png'); ?> " alt="profile" class="img-fluid" /></div>
                            <div class="member-name">
                                <h2 style="font-size:1rem;">MARIO P .MACENAS</h2>
                                <p style="font-size:0.8em;">Administrative Assistant IV(Carpentry)</p>
                            </div>
                        </div>
                    </div>
                    <div class="teamcol">
                        <div class="teamcolinner">
                            <div class="avatar"> <img src="<?php echo base_url('uploads/profileimage/caldito.png'); ?> " alt="profile" class="img-fluid" /></div>
                            <div class="member-name">
                                <h2 style="font-size:1rem;">PATRICK V .CALDITO</h2>
                                <p style="font-size:0.8em;">Administrative Assistant II(Air-Conditioning)</p>
                            </div>
                        </div>
                    </div>
                    <div class="teamcol">
                        <div class="teamcolinner">
                            <div class="avatar"> <img src="<?php echo base_url('uploads/profileimage/saminian.png'); ?> " alt="profile" class="img-fluid" /></div>
                            <div class="member-name">
                                <h2 style="font-size:1rem;">EDGAR B .SAMINIAN</h2>
                                <p style="font-size:0.8em;">Administrative Aide IV</p>
                            </div>
                        </div>
                    </div>
                    <div class="teamcol">
                        <div class="teamcolinner">
                            <div class="avatar"> <img src="<?php echo base_url('uploads/profileimage/Sevilleno.png'); ?> " alt="profile" class="img-fluid" /></div>
                            <div class="member-name">
                                <h2 style="font-size:1rem;">JUNMAR S .SEVILLENO</h2>
                                <p style="font-size:0.8em;">Administrative Aide IV(Electrician I)</p>
                            </div>
                        </div>
                    </div>
                    <div class="teamcol">
                        <div class="teamcolinner">
                            <div class="avatar"> <img src="<?php echo base_url('uploads/profileimage/gutierrez1.png'); ?> " alt="profile" class="img-fluid" /></div>
                            <div class="member-name">
                                <h2 style="font-size:1rem;">RAYMOND A .GUTIERREZ</h2>
                                <p style="font-size:0.8em;">Administrative Aide IV</p>
                            </div>
                        </div>
                    </div>
                    <div class="teamcol">
                        <div class="teamcolinner">
                            <div class="avatar"> <img src="<?php echo base_url('uploads/profileimage/obrique.jpg'); ?> " alt="profile" class="img-fluid" /></div>
                            <div class="member-name">
                                <h2 style="font-size:1rem;">ERNESTO Q .OBRIQUE</h2>
                                <p style="font-size:0.8em;">Administrative Aide V(Plumber II)</p>
                            </div>
                        </div>
                    </div>
                    <div class="teamcol">
                        <div class="teamcolinner">
                            <div class="avatar"> <img src="<?php echo base_url('uploads/profileimage/mirande.jpg'); ?> " alt="profile" class="img-fluid" /></div>
                            <div class="member-name">
                                <h2 style="font-size:1rem;">RODRIGO N.MIRANDE</h2>
                                <p style="font-size:0.8em;">Administrative Aide V(Plumber II)</p>
                            </div>
                        </div>
                    </div>
                    <div class="teamcol">
                        <div class="teamcolinner">
                            <div class="avatar"> <img src="<?php echo base_url('uploads/profileimage/bernal.png'); ?> " alt="profile" class="img-fluid" /></div>
                            <div class="member-name">
                                <h2 style="font-size:1rem;">DANILO J .BERNAL</h2>
                                <p style="font-size:0.8em;">Administrative Aide V(Carpentry II)</p>
                            </div>
                        </div>
                    </div>
                    <div class="teamcol">
                        <div class="teamcolinner">
                            <div class="avatar"> <img src="<?php echo base_url('uploads/profileimage/alvena.png'); ?> " alt="profile" class="img-fluid" /></div>
                            <div class="member-name">
                                <h2 style="font-size:1rem;">MAYQUILITO P .ALVENA</h2>
                                <p style="font-size:0.8em;">Administrative Aide V(Carpentry II)></p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="col-12 col-md-4  div">

                <div class="col-12 col-lg-12 col-xl-4 div">
                    <div class="teamcol">
                        <div class="teamcolinner">
                            <div class="avatar"> <img src="<?php echo base_url('uploads/profileimage/francisco.jpg'); ?> " alt="profile" class="img-fluid" /></div>
                            <div class="member-name">
                                <h2 style="font-size:1rem;">LOUIE JANE R.FRANCISCO</h2>
                                <p style="font-size:0.8em;">Administrative Assistant II</p>
                            </div>
                        </div>
                    </div>

                    <div class="teamcol">
                        <div class="teamcolinner">
                            <div class="avatar"> <img src="<?php echo base_url('uploads/profileimage/abedania.png'); ?> " alt="profile" class="img-fluid" /></div>
                            <div class="member-name">
                                <h2 style="font-size:1rem;">JENNY PEARL C. ABEDANIA</h2>
                                <p style="font-size:0.8em;">Administrative Assistant II</p>
                            </div>
                        </div>
                    </div>

                    <div class="teamcol">
                        <div class="teamcolinner">
                            <div class="avatar"> <img src="<?php echo base_url('uploads/profileimage/magat.png'); ?> " alt="profile" class="img-fluid" /></div>
                            <div class="member-name">
                                <h2 style="font-size:1rem;">ELSA L. MAGAT </h2>
                                <p style="font-size:0.8em;">Administrative Aide V</p>
                            </div>
                        </div>
                    </div>
                    <div class="teamcol">
                        <div class="teamcolinner">
                            <div class="avatar"> <img src="<?php echo base_url('uploads/user.png'); ?> " alt="profile" class="img-fluid" /></div>
                            <div class="member-name">
                                <h2 style="font-size:1rem;">RONALYN MAE J. PALOMA</h2>
                                <p style="font-size:0.8em;">Administrative Aide IV</p>
                            </div>
                        </div>
                    </div>
                    <div class="teamcol">
                        <div class="teamcolinner">
                            <div class="avatar"> <img src="<?php echo base_url('uploads/profileimage/reyes.jpg'); ?> " alt="profile" class="img-fluid" /></div>
                            <div class="member-name">
                                <h2 style="font-size:1rem;">MARIATHERESA M. REYES</h2>
                                <p style="font-size:0.8em;"><?= $employee['about']; ?></p>
                            </div>
                        </div>
                    </div>
                    <div class="teamcol">
                        <div class="teamcolinner">
                            <div class="avatar"> <img src="<?php echo base_url('uploads/profileimage/mediana.png'); ?> " alt="profile" class="img-fluid" /></div>
                            <div class="member-name">
                                <h2 style="font-size:1rem;">MARINA M. MEDIANA</h2>
                                <p style="font-size:0.8em;">Administrative Aide IV</p>
                            </div>
                        </div>
                    </div>
                    <div class="teamcol">
                        <div class="teamcolinner">
                            <div class="avatar"> <img src="<?php echo base_url('uploads/profileimage/gabales.png'); ?> " alt="profile" class="img-fluid" /></div>
                            <div class="member-name">
                                <h2 style="font-size:1rem;">NORMAN A. GABALES</h2>
                                <p style="font-size:0.8em;">Administrative Aide IV</p>
                            </div>
                        </div>
                    </div>
                    <div class="teamcol">
                        <div class="teamcolinner">
                            <div class="avatar"> <img src="<?php echo base_url('uploads/user.png'); ?> " alt="profile" class="img-fluid" /></div>
                            <div class="member-name">
                                <h2 style="font-size:1rem;"><?= $employee['name']; ?></h2>
                                <p style="font-size:0.8em;"><?= $employee['about']; ?></p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <script>
        document.getElementById("open-email-button").addEventListener("click", function() {
            var recipient = "markbrvaldez@gmail.com";
            var subject = "Test Email";
            var body = "This is a test email message.";
            var mailtoUrl = "mailto:" + recipient + "?subject=" + encodeURIComponent(subject) + "&body=" + encodeURIComponent(body);
            window.open(mailtoUrl);
        });
    </script>