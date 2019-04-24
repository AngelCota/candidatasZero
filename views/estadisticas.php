<?php 
    require_once 'autoload.php'; 
    require_once 'config/parameters.php';
    require_once 'views/layout/head.php';
    require_once 'views/layout/navbar.php';
?>



<div class="section section-our-team-freebie" id="candidatas">
        <div class="parallax filter filter-color-black">
            <div class="image" style="background-image:url('<?=base_url?>assets/img/hola.jpg')">
            </div>
            <div class="container">
                <div class="content">
                    <div class="row">
                        <div class="title-area">
                            <h2>Candidatas</h2>
                            <div class="separator separator-danger">✻</div>
                            <style class="cp-pen-styles">@import url(https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600);
body {
  background: #ededeb;
}
body .title {
  width: 600px;
  margin: 0 auto;
  text-align: center;
}
body .title h1 {
  margin: 30px 0px 0px 0px;
  font-family: 'Source Sans Pro', sans-serif;
  font-weight: 400;
  color: #3d3d3d;
}
body .title h2 {
  margin: 10px 0px 0px 0px;
  font-size: 18px;
  color: #8B8B8B;
  font-weight: 400;
  font-family: 'Source Sans Pro', sans-serif;
}
body .ui {
  width: 900px;
  margin: 0 auto;
  margin-top: 50px;
  font-family: 'Source Sans Pro', sans-serif;
  color: white;
  box-shadow: none;
}
body .ui ul {
  margin: 0px 30px 10px 0px;
  padding: 0;
  list-style-type: none;
  font-size: 11px;
  font-weight: 400;
  line-height: 20px;
}
body .ui .drop {
  z-index: -3;
  opacity: 0;
  width: 240px;
  height: 10px;
  background: #3e8368;
  position: absolute;
  color: white;
  bottom: 0;
  padding: 12px 30px 21px 30px;
  -webkit-transition-property: bottom,opacity;
  transition-property: bottom,opacity;
  -webkit-transition-duration: .3s;
          transition-duration: .3s;
}
body .ui .drop p {
  color: #f8fbfa;
}
body .ui_box {
  width: 300px;
  height: 220px;
  position: relative;
  background: #3d3d3d;
  float: left;
  box-shadow: -1px 0px rgba(255, 255, 255, 0.07);
  cursor: pointer;
  -webkit-transform: scale(1);
          transform: scale(1);
  -webkit-transition-property: background,-webkit-transform;
  transition-property: background,-webkit-transform;
  transition-property: transform,background;
  transition-property: transform,background,-webkit-transform;
  -webkit-transition-duration: .3s;
          transition-duration: .3s;
}
body .ui_box__inner {
  padding: 30px;
}
body .ui_box__inner span {
  font-size: 36px;
  font-weight: 700;
}
body .ui_box__inner .progress {
  width: 100%;
  margin-top: 10px;
  height: 6px;
  background: rgba(0, 0, 0, 0.3);
  margin-bottom: 15px;
}
body .ui_box__inner .progress_graph {
  float: right;
  border-bottom: 1px solid rgba(255, 255, 255, 0.09);
  width: 85px;
  text-align: center;
  position: relative;
  padding-left: 20px;
  top: 24px;
}
body .ui_box__inner .progress_graph__bar--1 {
  width: 10px;
  height: 20px;
  background: #4FA584;
  float: left;
  margin-right: 10px;
  position: relative;
  bottom: -10px;
  -webkit-animation: graph 1s;
}
body .ui_box__inner .progress_graph__bar--2 {
  width: 10px;
  -webkit-animation: graph2 1s;
  height: 30px;
  float: left;
  margin-right: 10px;
  background: #4FA584;
}
body .ui_box__inner .progress_graph__bar--3 {
  width: 10px;
  height: 24px;
  margin-right: 10px;
  -webkit-animation: graph3 1s;
  background: #4FA584;
  float: left;
  position: relative;
  bottom: -6px;
}
body .ui_box__inner .progress_graph__bar--4 {
  width: 10px;
  height: 14px;
  -webkit-animation: graph4 1s;
  bottom: -16px;
  position: relative;
  background: #4FA584;
  float: left;
}
body .ui_box__inner .progress_bar {
  height: 6px;
  float: left;
  width: 58%;
  background: #4FA584;
  -webkit-animation: bar 2s;
}
body .ui_box__inner .progress_bar--two {
  height: 6px;
  float: left;
  width: 78%;
  background: #4FA584;
  -webkit-animation: bar2 2s;
}
body .ui_box h2 {
  font-weight: normal;
  font-size: 16px;
  margin: -4px 0px 3px 0px;
}
body .ui_box p {
  font-size: 11px;
  color: #b6b6b6;
  clear: left;
  font-weight: 300;
  width: 160px;
  margin: 2px 0px 15px 0px;
}
body .ui_box:hover {
  background: #4FA584;
  -webkit-transform: scale(1.1);
          transform: scale(1.1);
  -webkit-transition-property: background,-webkit-transform;
  transition-property: background,-webkit-transform;
  transition-property: transform,background;
  transition-property: transform,background,-webkit-transform;
  -webkit-transition-duration: .3s;
          transition-duration: .3s;
  position: relative;
  z-index: 1;
}

.ui_box:hover > .ui_box__inner p {
  color: #b3dacb;
}

.ui_box:hover > .drop {
  -webkit-transition-property: bottom,opacity;
  transition-property: bottom,opacity;
  -webkit-transition-duration: .3s;
          transition-duration: .3s;
  bottom: -42px;
  opacity: 1;
}

.ui_box:hover > .drop .arrow {
  -webkit-transition-property: -webkit-transform;
  transition-property: -webkit-transform;
  transition-property: transform;
  transition-property: transform, -webkit-transform;
  -webkit-transition-duration: 1s;
          transition-duration: 1s;
  -webkit-transform: rotate(765deg);
          transform: rotate(765deg);
}

.ui_box:hover > .ui_box__inner .progress_graph > div {
  background: white;
}

.ui_box:hover > .ui_box__inner .progress .progress_bar, .ui_box:hover > .ui_box__inner .progress .progress_bar--two {
  background: white;
}

.stat_left {
  float: left;
}

.arrow {
  width: 4px;
  height: 4px;
  -webkit-transition-property: -webkit-transform;
  transition-property: -webkit-transform;
  transition-property: transform;
  transition-property: transform, -webkit-transform;
  -webkit-transition-duration: 1s;
          transition-duration: 1s;
  -webkit-transform: rotate(45deg);
          transform: rotate(45deg);
  -webkit-transition-timing-function: cubic-bezier(0.68, -0.55, 0.265, 1.55);
  border-top: 1px solid #CDEAD3;
  border-right: 1px solid #CDEAD3;
  float: right;
  position: relative;
  top: -24px;
  right: 0px;
}

@-webkit-keyframes bar {
  from {
    width: 0px;
  }
  to {
    width: 58%;
  }
}

@keyframes bar {
  from {
    width: 0px;
  }
  to {
    width: 58%;
  }
}
@-webkit-keyframes bar2 {
  from {
    width: 0px;
  }
  to {
    width: 78%;
  }
}
@keyframes bar2 {
  from {
    width: 0px;
  }
  to {
    width: 78%;
  }
}
@-webkit-keyframes graph {
  from {
    height: 0px;
  }
  to {
    height: 20px;
  }
}
@keyframes graph {
  from {
    height: 0px;
  }
  to {
    height: 20px;
  }
}
@-webkit-keyframes graph2 {
  from {
    height: 0px;
  }
  to {
    height: 30px;
  }
}
@keyframes graph2 {
  from {
    height: 0px;
  }
  to {
    height: 30px;
  }
}
@-webkit-keyframes graph3 {
  from {
    height: 0px;
  }
  to {
    height: 24px;
  }
}
@keyframes graph3 {
  from {
    height: 0px;
  }
  to {
    height: 24px;
  }
}
@-webkit-keyframes graph4 {
  from {
    height: 0px;
  }
  to {
    height: 13px;
  }
}
@keyframes graph4 {
  from {
    height: 0px;
  }
  to {
    height: 13px;
  }
}
</style></head><body>
<div class='title'>
  <h1>
    Swagtastic UI Stat Pop out
  </h1>
  <h2>
    Hover over each stat. Pure CSS...of course!
  </h2>
</div>
<div class='ui'>
  <div class='ui_box'>
    <div class='ui_box__inner'>
      <h2>
        Conversion Rate
      </h2>
      <p>Lorem ipsum dolor sit amet</p>
      <div class='stat'>
        <span>58%</span>
      </div>
      <div class='progress'>
        <div class='progress_bar'></div>
      </div>
      <p>Lorem ipsum dolor sit amet. Some more super groovy information about this stat.</p>
    </div>
    <div class='drop'>
      <p>Take a closer look</p>
      <div class='arrow'></div>
    </div>
  </div>
  <div class='ui_box'>
    <div class='ui_box__inner'>
      <h2>
        Sales By Type
      </h2>
      <p>Lorem ipsum dolor sit amet</p>
      <div class='stat_left'>
        <ul>
          <li>
            Electical
          </li>
          <li>
            Clothing
          </li>
          <li>
            Entertainment
          </li>
          <li>
            Kitchen
          </li>
        </ul>
      </div>
      <div class='progress_graph'>
        <div class='progress_graph__bar--1'></div>
        <div class='progress_graph__bar--2'></div>
        <div class='progress_graph__bar--3'></div>
        <div class='progress_graph__bar--4'></div>
      </div>
      <p>Lorem ipsum dolor sit amet. Some more super groovy information.</p>
    </div>
    <div class='drop'>
      <p>Take a closer look</p>
      <div class='arrow'></div>
    </div>
  </div>
  <div class='ui_box'>
    <div class='ui_box__inner'>
      <h2>
        Total Sales
      </h2>
      <p>Lorem ipsum dolor sit amet</p>
      <div class='stat'>
        <span>$34,403.93</span>
      </div>
      <div class='progress'>
        <div class='progress_bar--two'></div>
      </div>
      <p>Lorem ipsum dolor sit amet. Some more super groovy information about this stat.</p>
    </div>
    <div class='drop'>
      <p>Take a closer look</p>
      <div class='arrow'></div>
    </div>
  </div>
</div>
<script src='//production-assets.codepen.io/assets/common/stopExecutionOnTimeout-b2a7b3fe212eaa732349046d8416e00a9dec26eb7fd347590fbced3ab38af52e.js'></script><script src='//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script >/* Nope, not today */
//# sourceURL=pen.js
</script>
</body></html>

                              
                          
                            
                        </div>
                    </div>




<?php
    //footer
    require_once 'views/layout/footer.php'
?>