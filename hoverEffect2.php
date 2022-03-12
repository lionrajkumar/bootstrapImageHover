<?php $title = "Hover effect 2"; ?>
<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
    <div class="hover ehover2">
        <img class="img-responsive" src="images/p11.jpg" alt="">
        <div class="overlay">
            <h2><?php echo $title;?></h2>
            <button class="info" data-toggle="modal" data-target="#modal2">Show code
            </button>
        </div>
    </div>
</div>
<div id="modal2" class="modal fade">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h2 class="modal-title"><?php echo $title;?></h2>
            </div>
            <div class="modal-body">
                <h3>HTML</h3>
                <p> Note: if not using bootstrap and you wish to use the hover simply remove the classes on the first
                    div <b>"col-lg-3 col-md-4 col-sm-6 col-xs-12"</b> and give this div a chosen size eg width: 300px</p>
                <pre>
&lt;div class="col-lg-3 col-md-4 col-sm-6 col-xs-12"&gt;
    &lt;div class="hovereffect"&gt;
        &lt;img class="img-responsive" src="http://placehold.it/350x200" alt=""&gt;
        &lt;div class="overlay"&gt;
            &lt;h2&gt;Hover effect 2&lt;/h2&gt;
            &lt;a class="info" href="#"&gt;link here&lt;/a&gt;
        &lt;/div&gt;
    &lt;/div&gt;
&lt;/div&gt;
                </pre>

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
    background-color: rgba(0,0,0,0.6);
    opacity: 0;
    filter: alpha(opacity=0);
    -webkit-transform: translate(460px, -100px) rotate(180deg);
    -ms-transform: translate(460px, -100px) rotate(180deg);
    transform: translate(460px, -100px) rotate(180deg);
    -webkit-transition: all 0.2s 0.4s ease-in-out;
    transition: all 0.2s 0.4s ease-in-out;
}

.hovereffect img {
    display: block;
    position: relative;
    -webkit-transition: all 0.2s ease-in;
    transition: all 0.2s ease-in;
}

.hovereffect h2 {
    text-transform: uppercase;
    color: #fff;
    text-align: center;
    position: relative;
    font-size: 17px;
    padding: 10px;
    background: rgba(0, 0, 0, 0.6);
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
    -webkit-transform: translateY(-200px);
    -ms-transform: translateY(-200px);
    transform: translateY(-200px);
    -webkit-transition: all 0.2s ease-in-out;
    transition: all 0.2s ease-in-out;
}

.hovereffect a.info:hover {
    box-shadow: 0 0 5px #fff;
}

.hovereffect:hover .overlay {
    opacity: 1;
    filter: alpha(opacity=100);
    -webkit-transition-delay: 0s;
    transition-delay: 0s;
    -webkit-transform: translate(0px, 0px);
    -ms-transform: translate(0px, 0px);
    transform: translate(0px, 0px);
}

.hovereffect:hover h2 {
    -webkit-transform: translateY(0px);
    -ms-transform: translateY(0px);
    transform: translateY(0px);
    -webkit-transition-delay: 0.5s;
    transition-delay: 0.5s;
}

.hovereffect:hover a.info {
    -webkit-transform: translateY(0px);
    -ms-transform: translateY(0px);
    transform: translateY(0px);
    -webkit-transition-delay: 0.3s;
    transition-delay: 0.3s;
}
                </pre>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
