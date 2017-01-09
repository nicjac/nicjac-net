<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
  <title>Nicolas Jaccard - Personal Website</title>

  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="MaterialDesign-Webfont/css/materialdesignicons.min.css" media="all" rel="stylesheet" type="text/css" />
  <link href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css" media="all" rel="stylesheet" type="text/css"/>
  <style>
    .collapsible-header img {
      margin-right: 25px;
    }

    h3 {
     overflow: hidden;
     text-align: center;
   }
   h3:before,
   h3:after {
     background-color: #B3B5B5;
     content: "";
     display: inline-block;
     height: 2px;
     position: relative;
     vertical-align: middle;
     width: 50%;
   }
   h3:before {
     right: 0.5em;
     margin-left: -50%;
   }
   h3:after {
     left: 0.5em;
     margin-right: -50%;
   }

   span.fakeList::before{
    line-height: 0rem;
    float: left;
    width: .45rem;
    height: .45rem;
    margin: .75rem .75rem 0 0;
    content: '';
    border-radius: 50%;
    background-color: #673AB7;
  }
</style>

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-3711435-1', 'auto');
  ga('send', 'pageview');

</script>

</head>

<body>

<?php include 'topBanner.php';?>

  <div class="container">
    <div class="section">
      <div class="row">

        <div class="col s12 m8">

          <h3><strong class="deep-purple-text lighten-1"><i class="medium material-icons" style="vertical-align:-15px;">school</i></strong></h3>
          <ul class="collapsible popout collapsible-accordion" data-collapsible="accordion">
            <li>
              <div class="collapsible-header hoverable" data-position="top" data-delay="50" data-tooltip="Click to expand">
                   <span style="float: left;"><img src="Images/UCL.png" height="20px"><strong>Ph.D.</strong> | Biomedical Image Processing</span> 
                   <span style="float: right;"><i class="material-icons">expand_more</i></span>
                   <div style="clear:both;"></div> 
              </div>
              <div class="collapsible-body">
                  <p class="flow-text" style="font-size:13pt"><i class="material-icons" style="font-size:13pt">date_range</i>2010-2014<i class="material-icons" style="font-size:13pt">place</i>University College London (CoMPLEX | Biochemical Engineering) <br><br><strong>Development of an image processing method for automated, non-invasive and scale-independent
                    monitoring of adherent cell cultures</strong>
                    <br><br>
                    <u>Supervision</u>: Prof. Nicolas Szita and Dr. Farlan Veraitch<br>
                    <u>Examination</u>: Dr. Ivo Sbalzirini and Prof. Michael Hoare<br><br>
                    Highlights of the project included:<br>
                    <span class="fakeList">Development of novel microscopy image segmentation algorithms, including one based on
                      machine-learning techniques (ensemble of decision trees)</span><br>
                      <span class="fakeList">Bundling of the most promising algorithms with a graphical user interface and release as an
                        open-source framework (https://github.com/nicjac/phantast-matlab)</span><br>
                        <span class="fakeList">Experimental validation with various cell lines, microscopes, and cameras</span>
                      </p>
                    </div>
                  </li>
                  <li>
                    <div class="collapsible-header hoverable">
                   <span style="float: left;"><img src="Images/UCL.png" height="20px"><strong>MRes.</strong> | Biolgical Complexity Modelling</span> 
                  <span style="float: right;"><i class="material-icons">expand_more</i></span>
                   <div style="clear:both;"></div> 
                    </div>
                    <div class="collapsible-body">
                      <p class="flow-text" style="font-size:13pt;padding-bottom:0px!important;"><i class="material-icons" style="font-size:13pt">date_range</i>2009-2010<i class="material-icons" style="font-size:13pt">place</i>University College London (CoMPLEX) <br><br>
                        <strong>Taught inter-disciplinary degree</strong><br><i class="small ion-ribbon-a" style="vertical-align:0px;"></i>  Distinction <br>
                        <u>Case assays</u>:</p>
                        <p class="flow-text" style="font-size:13pt;padding-top:0px;padding-bottom: 0px"><span class="fakeList">Synthetic gene network for the efficient generation of induced pluripotent stem cells from
                          adult somatic cells [<a href="Files/CoMPLEX_CP1_Jaccard_N.pdf">PDF <i class="material-icons" style="vertical-align:-5px;">archive</i></a>]</span></p>
                          <p class="flow-text" style="font-size:13pt;padding-top:0px;padding-bottom:0px">
                            <span class="fakeList">Computational inference of cis-regulatory elements involved in transcriptional regulation of sex-biased gene expression in Drosophila [<a href="Files/CoMPLEX_CP2_Jaccard_N.pdf">PDF <i class="material-icons" style="vertical-align:-5px;">archive</i></a>]</span></p>
                            <p class="flow-text" style="font-size:13pt;padding-top:0px">
                              <span class="fakeList">An image-processing tool for the quantitative study of the developing Drosophila retina [<a href="Files/CoMPLEX_CP3_Jaccard_N.pdf">PDF <i class="material-icons" style="vertical-align:-5px;">archive</i></a>]</span></p>

                            </div>
                          </li>
                          <li>
                            <div class="collapsible-header hoverable">
                   <span style="float: left;"><img src="Images/UCL.png" height="20px"><strong>BSc.</strong> | Life Sciences (Biotechnology Major)</span> 
                   <span style="float: right;"><i class="material-icons">expand_more</i></span>
                   <div style="clear:both;"></div> 
                   </div>

                            <div class="collapsible-body">
                              <p class="flow-text" style="font-size:13pt;padding-bottom:0px!important;">
                                <i class="material-icons" style="font-size:13pt">date_range</i>2006-2009<i class="material-icons" style="font-size:13pt">place</i>University of Applied Sciences Western Switzerland (HES-SO Valais) <br><br>
                                <i class="small ion-ribbon-a" style="vertical-align:0px;"></i>  Best overall results across engineering <br>
                                <i class="small ion-ribbon-a" style="vertical-align:0px;"></i>  Best bachelor thesis project <br>
                              </p>
                            </div>
                          </li>
                        </ul>

                        <h3><strong class="light-green-text lighten-1"><i class="material-icons medium" style="vertical-align:-15px;">work</i></strong></h3>
                        <ul class="collapsible popout collapsible-accordion" data-collapsible="accordion">
                          <li>
                            <div class="collapsible-header hoverable">
                   <span style="float: left;"><img src="Images/GriffinLabLogoVectorNoEmail.svg" height="20px"><strong>Research Associate</strong> | Automated X-ray cargo image analysis</span> 
                   <span style="float: right;"><i class="material-icons">expand_more</i></span>
                   <div style="clear:both;"></div> 
                            </div>
                            <div class="collapsible-body">                          
                              <p style="margin-bottom:0px"><i class="material-icons" style="font-size:13pt">date_range</i>Since 2014<i class="material-icons" style="font-size:13pt">place</i>University College London (Computer Science)
                                <br>
                                <br>
                                Research Associate in the department of Computer Science in UCL working with Dr. Lewis Griffin:<br>
                                <span class="fakeList">Automated detection of threats in X-ray cargo images (Deep Learning)</span><br>
                                <span class="fakeList">Segmentation of cells on phase contrast microscopy images (collaboration with Prof. Nicolas Szita)</span><br>
                                <span class="fakeList">Estimation of cell counts based on phase contrast microscopy images (collaboration with Prof. Nicolas Szita)</span>
                              </p>
                            </div>
                          </li>
                          <li>
                            <div class="collapsible-header hoverable">
                   <span style="float: left;"><img src="Images/Logo_EPFL.svg.png" height="30px" style="vertical-align:-10px;"><strong>Research Internship</strong> | Bioprocess development and optimisation</span> 
                   <span style="float: right;"><i class="material-icons">expand_more</i></span>
                   <div style="clear:both;"></div> 
                            </div>
                            <div class="collapsible-body">
                              <p style="margin-bottom:0px"><i class="material-icons" style="font-size:13pt">date_range</i>2005-2006<i class="material-icons" style="font-size:13pt">place</i>Laboratory of Cellular Biotechnology (LBTC), Swiss Institute of Technology, Lausanne
                                <br><br>
                                Production of recombinant proteins using mammalian cell lines. Subjects studied include (but not limited to) :<br>
                                <span class="fakeList">Mammalian cells culture (CHO, HEK, BHK)</span><br>
                                <span class="fakeList">Expression vectors design and cloning</span><br>
                                <span class="fakeList">Transfection methods (PEI, Calcium/Phosphate, Microinjection)</span><br>
                                <span class="fakeList">Stable cell lines establishment</span><br>
                                <span class="fakeList">Analytics : ELISA, FACS</span>
                                <br><br>
                                Contributed to the development of the Mini-PCV tube method (commercial name: VoluPAC):<br>
                                <span class="fakeList">Developped image processing algorithm and GUI in Java to produce biomass measurements</span><br>
                                <span class="fakeList">Carried out extensive validation experiments using different cell lines</span><br>
                                <span class="fakeList">Assisted in the development of the prototype box (e.g. camera, illumination)</span><br>
                                <span class="fakeList">Work summarised in <a href="https://scholar.google.co.uk/citations?view_op=view_citation&hl=en&user=pMaHB9QAAAAJ&citation_for_view=pMaHB9QAAAAJ:9yKSN-GCB0IC">this publication</a></span><br>
                              </p>

                            </div>
                          </li>

                        </ul>

                        <h3><strong class="amber-text lignth-1"><i class="ion-ribbon-a" style="vertical-align:-5px;"></i></strong></h3>
                        <ul class="collection">
                          <li class="collection-item avatar">
                            <i class="mdi mdi-file-document circle"></i>
                            <span class="title">Best paper (2015)</span>
                            <p>Defence and Security Doctoral Symposium, Defence Academy, UK <br>
                             “Using deep learning on X-ray images to detect threats”
                           </p>
                         </li>
                         <li class="collection-item avatar">
                           <i class="mdi mdi-file-document circle"></i>
                           <span class="title">Best paper (2014)</span>
                           <p>Medical Image Understanding and Analysis, London <br>
                             “Trainable segmentation of phase contrast microscopy images based on local Basic Image Features histograms”
                           </p>
                         </li>
                         <li class="collection-item avatar">
                           <i class="medium material-icons circle">school</i>
                           <span class="title">Best overall engineering grades (2009)</span>
                           <p>University of Applied Sciences Western Switzerland (Sion, Switzerland)
                           </p>
                         </li>
                         <li class="collection-item avatar">
                          <i class="mdi mdi-file-document circle"></i>
                          <span class="title">Best biotechnology diploma thesis (2009)</span>
                          <p>University of Applied Sciences Western Switzerland (Sion, Switzerland)
                          </p>
                        </p>
                      </li>
                    </ul>
                  </div>

                  <div class="col s12 m4">
                    <h3><strong class="blue-grey-text lighten-1"><i class="medium mdi mdi-desktop-mac" style="vertical-align:-6px;"></i></strong></h3>
                    <ul class="">
                      <li class=""><strong>Problems I solve</strong></li>
                      <li class="">Image segmentation</li>
                      <li class="">Image classification</li>
                      <li class="">Data visualization</li>
                      <li class="">Modelling and forecasting</li>
                    </ul>

                    <ul class="">
                      <li class=""><strong>Methods I use</strong></li>
                      <li class="">Deep Learning</li>
                      <li class="">Random Forest</li>
                      <li class="">Support Vector Machine</li>
                      <li class="">Bags of Visual Words</li>
                      <li class="">Fixed geometric features</li>
                    </ul>

                    <ul class="">
                      <li class=""><strong>Languages I speak</strong></li>
                      <li class="">MATLAB</li>
                      <li class="">R</li>
                      <li class="">Mathematica</li>
                      <li class="">Java</li>
                      <li class="">C++</li>
                    </ul>

                    <h3><strong class="blue-grey-text lighten-1"><i class="medium mdi mdi-microscope" style="vertical-align:-5px;"></i></strong></h3>
                    <ul>
                      <li class=""><strong>Skills in the lab</strong></li>
                      <li class="">Microscopy</li>
                      <li class="">Cell line generation</li>
                      <li class="">Animal cell maintenance</li>
                      <li class="">Cell line generation</li>
                      <li class="">Transfection</li>
                      <li class="">Differentiation</li>
                      <li class="">Process development and optimisation</li>
                    </ul>

                  </div>
                </div>



                <footer class="page-footer blue-grey lighten-2">
                  <div class="footer-copyright">
                    <div class="container">
                      Copyright Nicolas Jaccard 2016  |   Powered by <a class="orange-text text-lighten-3" href="http://materializecss.com">Materialize</a>
                    </div>
                  </div>
                </footer>


                <!--  Scripts-->
                <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
                <script src="js/materialize.js"></script>
                <script src="js/init.js"></script>

              </body>
              </html>
