<?php $title = "Hover effect 6"; ?>
<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
    <div class="hover ehover6">
        <img class="img-responsive" src="images/for.jpg" alt="">
        <div class="overlay point" data-toggle="modal" data-target="#modal6">
            <h2><?php echo $title;?></h2>
            <div class="rotate">
                <p class="group1">
                    <a href="#"><i class="fa fa-twitter"></i></a>
                    <a href="#"><i class="fa fa-facebook"></i></a>
                </p>
                <hr><hr>
                <p class="group2">
                    <a href="#"><i class="fa fa-instagram"></i></a>
                    <a href="#"><i class="fa fa-dribbble"></i></a>
                </p>
            </div>
        </div>
    </div>
</div>
<div id="modal6" class="modal fade">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h2 class="modal-title"><?php echo $title;?></h2>
            </div>
            <div class="modal-body">
                <h3>HTML</h3>
                <p> Note: if not using bootstrap and you wish to use the hover simply remove the classes on the first div "col-lg-3 col-md-4 col-sm-6 col-xs-12" and give this div a chosen size eg width: 300px</p>
                <pre>
&lt;div class="col-lg-3 col-md-4 col-sm-6 col-xs-12"&gt;
    &lt;div class="hovereffect"&gt;
        &lt;img class="img-responsive" src="http://placehold.it/350x200" alt=""&gt;
        &lt;div class="overlay"&gt;
            &lt;h2&gt;Hover effect 6&lt;/h2&gt;
            &lt;div class="rotate"&gt;
                &lt;p class="group1"&gt;
                    &lt;a href="#"&gt;
                        &lt;i class="fa fa-twitter"&gt;&lt;/i&gt;
                    &lt;/a&gt;
                    &lt;a href="#"&gt;
                        &lt;i class="fa fa-facebook"&gt;&lt;/i&gt;
                    &lt;/a&gt;
                &lt;/p&gt;
                    &lt;hr&gt;
                    &lt;hr&gt;
                &lt;p class="group2"&gt;
                    &lt;a href="#"&gt;
                        &lt;i class="fa fa-instagram"&gt;&lt;/i&gt;
                    &lt;/a&gt;
                    &lt;a href="#"&gt;
                        &lt;i class="fa fa-dribbble"&gt;&lt;/i&gt;
                    &lt;/a&gt;
                &lt;/p&gt;
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;
&lt;/div&gt;</pre>

                <h3>CSS</h3>
                <pre>
.hovereffect {
    width: 100%;
    height: 100%;
    float: left;
    overflow: hidden;
    position: relative;
    text-align: center;
    cursor: default;
}

.hovereffect .overlay {
    width: 100%;
    height: 100%;
    position: absolute;
    overflow: hidden;
    top: 0;
    left: 0;
}

.hovereffect img {
    display: block;
    position: relative;
    -webkit-transform: scale(1.1);
    -ms-transform: scale(1.1);
    transform: scale(1.1);
    -webkit-transition: all 0.35s;
    transition: all 0.35s;
}

.hovereffect:hover img {
    -webkit-transform: scale(1);
    -ms-transform: scale(1);
    transform: scale(1);
    filter: url('data:image/svg+xml;charset=utf-8,&lt;svg xmlns="http://www.w3.org/2000/svg"&gt;&lt;filter id="filter"&gt;&lt;feComponentTransfer color-interpolation-filters="sRGB"&gt;&lt;feFuncR type="linear" slope="0.7" /&gt;&lt;feFuncG type="linear" slope="0.7" /&gt;&lt;feFuncB type="linear" slope="0.7" /&gt;&lt;/feComponentTransfer&gt;&lt;/filter&gt;&lt;/svg&gt;#filter');
    filter: brightness(0.7);
    -webkit-filter: brightness(0.7);
}

.hovereffect h2 {
    text-transform: uppercase;
    color: #fff;
    text-align: center;
    font-size: 17px;
    padding: 10px;
    width: 100%;
}

.hovereffect:hover h2 {
    opacity: 0;
    filter: alpha(opacity=0);
    -webkit-transform: translate3d(-50%,-50%,0) scale3d(0.8,0.8,1);
    transform: translate3d(-50%,-50%,0) scale3d(0.8,0.8,1);
}

.hovereffect a.info {
    display: inline-block;
    text-decoration: none;
    padding: 7px 14px;
    text-transform: uppercase;
    color: #fff;
    border: 1px solid #fff;
    margin: 50px 0 0 0;
    background-color: transparent;
}

.hovereffect a.info:hover {
    box-shadow: 0 0 5px #fff;
}

.hovereffect .rotate {
    -webkit-transform: rotate(-45deg);
    -ms-transform: rotate(-45deg);
    transform: rotate(-45deg);
    width: 100%;
    height: 100%;
    position: absolute;
}

.hovereffect hr {
    width: 50%;
    opacity: 0;
    filter: alpha(opacity=0);
}

.hovereffect  hr:nth-child(2) {
    -webkit-transform: translate3d(-50%,-50%,0) rotate(0deg) scale3d(0,0,1);
    transform: translate3d(-50%,-50%,0) rotate(0deg) scale3d(0,0,1);
}

.hovereffect  hr:nth-child(3) {
    -webkit-transform: translate3d(-50%,-50%,0) rotate(90deg) scale3d(0,0,1);
    transform: translate3d(-50%,-50%,0) rotate(90deg) scale3d(0,0,1);
}

.hovereffect h2, .hovereffect hr {
    position: absolute;
    top: 50%;
    left: 50%;
    -webkit-transition: opacity 0.35s, -webkit-transform 0.35s;
    transition: opacity 0.35s, transform 0.35s;
    -webkit-transform: translate3d(-50%,-50%,0);
    transform: translate3d(-50%,-50%,0);
    -webkit-transform-origin: 50%;
    -ms-transform-origin: 50%;
    transform-origin: 50%;
    background-color: transparent;
    margin: 0px;
}

.group1, .group2 {
    left: 50%;
    position: absolute;
    -webkit-transition: opacity 0.35s, -webkit-transform 0.35s;
    transition: opacity 0.35s, transform 0.35s;
    -webkit-transform: translate3d(-50%,-50%,0);
    transform: translate3d(-50%,-50%,0);
    -webkit-transform-origin: 50%;
    -ms-transform-origin: 50%;
    transform-origin: 50%;
    background-color: transparent;
    margin: 0px;
    padding: 0px;
}

.group1 {
    top: 40%;
}

.group2 {
    top: 60%;
}

.hovereffect p {
    width: 30%;
    text-transform: none;
    font-size: 15px;
    line-height: 2;
}

.hovereffect p a {
    color: #fff;
}

.hovereffect p a:hover,
.hovereffect p a:focus {
    opacity: 0.6;
    filter: alpha(opacity=60);
}

.hovereffect  a i {
    opacity: 0;
    filter: alpha(opacity=0);
    -webkit-transition: opacity 0.35s, -webkit-transform 0.35s;
    transition: opacity 0.35s, transform 0.35s;
    padding: 10px;
    font-size: 20px;
}

.group1 a:first-child i {
    -webkit-transform: translate3d(-60px,-60px,0) rotate(45deg) scale(2);
    transform: translate3d(-60px,-60px,0) rotate(45deg) scale(2);
}

.group1 a:nth-child(2) i {
    -webkit-transform: translate3d(60px,-60px,0) rotate(45deg) scale(2);
    transform: translate3d(60px,-60px,0)  rotate(45deg) scale(2);
}

.group2 a:first-child i {
    -webkit-transform: translate3d(-60px,60px,0) rotate(45deg) scale(2);
    transform: translate3d(-60px,60px,0) rotate(45deg) scale(2);
}

.group2 a:nth-child(2) i {
    -webkit-transform: translate3d(60px,60px,0)  rotate(45deg) scale(2);
    transform: translate3d(60px,60px,0)  rotate(45deg) scale(2);
}

.hovereffect:hover hr:nth-child(2) {
    opacity: 1;
    filter: alpha(opacity=100);
    -webkit-transform: translate3d(-50%,-50%,0) rotate(0deg) scale3d(1,1,1);
    transform: translate3d(-50%,-50%,0) rotate(0deg) scale3d(1,1,1);
}

.hovereffect:hover hr:nth-child(3) {
    opacity: 1;
    filter: alpha(opacity=100);
    -webkit-transform: translate3d(-50%,-50%,0) rotate(90deg) scale3d(1,1,1);
    transform: translate3d(-50%,-50%,0) rotate(90deg) scale3d(1,1,1);
}

.hovereffect:hover .group1 i:empty, .hovereffect:hover .group2 i:empty {
    -webkit-transform: translate3d(0,0,0);
    transform: translate3d(0,0,0) rotate(45deg) scale(1);
    opacity: 1;
    filter: alpha(opacity=100);
}
                </pre>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>