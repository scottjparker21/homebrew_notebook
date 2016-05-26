		<link rel="stylesheet" type="text/css" href="assets/css/animate.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
		<div class="jumbotron">
			<div class="container-fluid">
				<div class="row">
				<div class="col-lg-12">
						<center><h1 id="quicksand" class="animated fadeInLeft"> Homebrew Notebook </h1></center>
						<center><div><img class="animated fadeInRight" id="jumbo-icon" ng-src="assets/img/jumbo_icons.svg" /></div></center>
					</div>
				</div>
	  		</div>
		</div>
			<div id="subhead" class="row" style="background-color:#935347;">
				<div class="col-lg-12">
					<div class="col-lg-8 col-lg-offset-2">
						<center><h1 id="pacifico-home">Create,Share, and Learn with Homebrew Notebook.</h1></center>
					</div>
				</div>
			</div>
		</div>	
	<div class="container">
		<div class="row">
		
<!-- 			<center><div class="col-lg-12">
 -->			<center><div class="col-lg-10 col-lg-offset-1">
					<div class="home-box col-lg-5">
						<center><div><i class="fa fa-pencil fa-3x "></i></div>
						<h2> Create </h2></center>
						<center><p class="white"> Homebrew Notebook allows for quick, concise recipe data entry. It is fun and interactive to use. Share recipes with the Homebrew Notebook community or keep them in your own private repository.</p></center>
					</div>
					
					<div class="home-box col-lg-5">
						<center><div><i class="fa fa-paper-plane-o fa-3x "></i></div>
						<center><h2> Share </h2></center>
						<center><p class="white"> Homebrew Notebook allows for quick, concise recipe data entry. It is fun and interactive to use. Share recipes with the Homebrew Notebook community or keep them in your own private repository.</p></center>
					</div>
				</div></center>
				<center><div class="col-lg-10 col-lg-offset-1">
					<div class="home-box col-lg-5">
						<center><div><i class="fa fa-university fa-3x "></i></div>
						<center><h2> Learn </h2></center>
						<center><p class="white"> Homebrew Notebook allows for quick, concise recipe data entry. It is fun and interactive to use. Share recipes with the Homebrew Notebook community or keep them in your own private repository.</p></center>
					</div>
					<div class=" home-box col-lg-5">
						<center><div><i class="fa fa-server fa-3x "></i></div>
						<center><h2> Save </h2></center>
						<center><p class="white"> Homebrew Notebook allows for quick, concise recipe data entry. It is fun and interactive to use. Share recipes with the Homebrew Notebook community or keep them in your own private repository.</p></center>
					</div>
				</div></center>
<!-- 				</div></center>
			</div></center> -->
		</div>
		<div class="row">
			<div id="texbox">
				<div class="row" style="background-color:#c7ad88;">
					<div class="col-lg-12">
						<center><img id="process" ng-src="assets/img/process.svg" /></center>
						<center><h3 style"color:white;">BREWING PROCESS</h3></center>
				</div>
			</div>
		</div>
		<script type="text/javascript" src="js/jssor.slider.mini.js"></script>
    <!-- use jssor.slider.debug.js instead for debug -->
    <script>
        jQuery(document).ready(function ($) {
            
            var jssor_1_options = {
              $AutoPlay: true,
              $ThumbnailNavigatorOptions: {
                $Class: $JssorThumbnailNavigator$,
                $Cols: 5,
                $Align: 200,
                $NoDrag: true
              }
            };
            
            var jssor_1_slider = new $JssorSlider$("jssor_1", jssor_1_options);
            
            //responsive code begin
            //you can remove responsive code if you don't want the slider scales while window resizing
            function ScaleSlider() {
                var refSize = jssor_1_slider.$Elmt.parentNode.clientWidth;
                if (refSize) {
                    refSize = Math.min(refSize, 600);
                    jssor_1_slider.$ScaleWidth(refSize);
                }
                else {
                    window.setTimeout(ScaleSlider, 30);
                }
            }
            ScaleSlider();
            $(window).bind("load", ScaleSlider);
            $(window).bind("resize", ScaleSlider);
            $(window).bind("orientationchange", ScaleSlider);
            //responsive code end
        });
    </script>

    <style>
        /* jssor slider thumbnail navigator skin 12 css *//*.jssort12 .p            (normal).jssort12 .p:hover      (normal mouseover).jssort12 .pav          (active).jssort12 .pav:hover    (active mouseover).jssort12 .pdn          (mousedown)*/.jssort12 .w {    cursor: pointer;    position: absolute;    WIDTH: 99px;    HEIGHT: 28px;    border: 1px solid gray;    top: 0px;    left: -1px;}.jssort12 .p {    position: absolute;    width: 100px;    height: 30px;    top: 0;    left: 0;    padding: 0px;}.jssort12 .pav .w, .jssort12 .pdn .w {    border-bottom: 1px solid #fff;}.jssort12 .c {    width: 100%;    height: 100%;    position: absolute;    top: 0;    left: 0;    line-height: 28px;    text-align: center;    color: #000;    font-size: 13.0px;}.jssort12 .p .c, .jssort12 .pav:hover .c {    background-color: #eee;}.jssort12 .pav .c, .jssort12 .p:hover .c {    background-color: #fff;}
        
    </style>


    <div id="jssor_1" style="position: relative; margin: 0 auto; top: 0px; left: 0px; width: 600px; height: 330px; overflow: hidden; visibility: hidden; background-color: #ffffff;">
        <!-- Loading Screen -->
        <div data-u="loading" style="position: absolute; top: 0px; left: 0px;">
            <div style="filter: alpha(opacity=70); opacity: 0.7; position: absolute; display: block; top: 0px; left: 0px; width: 100%; height: 100%;"></div>
            <div style="position:absolute;display:block;background:url('img/loading.gif') no-repeat center center;top:0px;left:0px;width:100%;height:100%;"></div>
        </div>
        <div data-u="slides" style="cursor: default; position: relative; top: 29px; left: 0px; width: 598px; height: 299px; overflow: hidden; border: 1px solid #adadad">
            <div style="display: none;">
                <div style="position: absolute; top: 0px; left: 0px; width: 598px; height: 299px;">
                    <div style="margin: 10px; overflow: hidden; color: #000;">
                    	<div class="row">
                    		<!-- //my content -->
							<div id="texbox">
								<div class="row" style="background-color:#c7ad88;">
									<div class="col-lg-12">
										<center><img id="process" ng-src="assets/img/process.svg" /></center>
										<center><h3 style"color:white;">BREWING PROCESS</h3></center>
								</div>
							</div>
						</div>
                    </div>
                </div>
                <div data-u="thumb">Banner Rotator</div>
            </div>
            <div style="display: none;">
                <div style="position: absolute; top: 0px; left: 0px; width: 598px; height: 299px;">
                    <div style="margin: 10px; overflow: hidden; color: #000;">
                    	<div id="texbox">
								<div class="row" style="background-color:#c7ad88;">
									<div class="col-lg-12">
										<center><img id="process" ng-src="assets/img/process_milling.svg" /></center>
										<center><h3 style"color:white;">BREWING PROCESS</h3></center>
								</div>
							</div>
                    </div>
                </div>
                <div data-u="thumb">Image Gallery</div>
            </div>
            <div style="display: none;">
                <div style="position: absolute; top: 0px; left: 0px; width: 598px; height: 299px;">
                    <div style="margin: 10px; overflow: hidden; color: #000;">Slide 3 content, place any html here.</div>
                </div>
                <div data-u="thumb">Image Slider</div>
            </div>
            <div style="display: none;">
                <div style="position: absolute; top: 0px; left: 0px; width: 598px; height: 299px;">
                    <div style="margin: 10px; overflow: hidden; color: #000;">Slide 4 content, place any html here.</div>
                </div>
                <div data-u="thumb">Tab Slider</div>
            </div>
            <div style="display: none;">
                <div style="position: absolute; top: 0px; left: 0px; width: 598px; height: 299px;">
                    <div style="margin: 10px; overflow: hidden; color: #000;">Slide 5 content, place any html here.</div>
                </div>
                <div data-u="thumb">Carousel</div>
            </div>
            <a data-u="ad" href="http://www.jssor.com" style="display:none">jQuery Slider</a>
        
        </div>
        <!-- Thumbnail Navigator -->
        <div data-u="thumbnavigator" class="jssort12" style="position:absolute;left:0px;top:0px;width:500px;height:30px;">
            <!-- Thumbnail Item Skin Begin -->
            <div data-u="slides" style="cursor: default; top: 0px; left: 0px; border-left: 1px solid gray;">
                <div data-u="prototype" class="p">
                    <div class="w">
                        <div data-u="thumbnailtemplate" class="c"></div>
                    </div>
                </div>
            </div>
            <!-- Thumbnail Item Skin End -->
        </div>
    </div>

    <!-- #endregion Jssor Slider End -->
	</div>
