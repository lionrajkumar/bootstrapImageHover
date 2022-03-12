<?php $title = "Hover effect 1-V2"; ?>
<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
    <div class="hover ehover1v2">
        <img class="img-responsive" src="images/p23.jpg" alt="">
        <div class="overlay">
            <h2><?php echo $title;?></h2>
            <button class="info" data-toggle="modal" data-target="#modal1v2">Show code
            </button>
        </div>
    </div>
</div>

<div id="modal1v2" class="modal fade">
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
           &lt;h2&gt;Hover effect 1v2&lt;/h2&gt;
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
    opacity: 0;
    filter: alpha(opacity=0);
    background-color: rgba(0,0,0,0.5);
    -webkit-transition: all 0.4s cubic-bezier(0.88,-0.99, 0, 1.81);
    transition: all 0.4s cubic-bezier(0.88,-0.99, 0, 1.81);
}

.hovereffect img {
    display: block;
    position: relative;
    -webkit-transition: all 0.4s cubic-bezier(0.88,-0.99, 0, 1.81);
    transition: all 0.4s cubic-bezier(0.88,-0.99, 0, 1.81);
}

.hovereffect h2 {
    text-transform: uppercase;
    color: #fff;
    text-align: center;
    position: relative;
    font-size: 17px;
    background: rgba(0,0,0,0.6);
    -webkit-transform: translatey(-100px);
    -ms-transform: translatey(-100px);
    transform: translatey(-100px);
    -webkit-transition: all 0.4s cubic-bezier(0.88,-0.99, 0, 1.81);
    transition: all 0.4s cubic-bezier(0.88,-0.99, 0, 1.81);
    padding: 10px;
}

.hovereffect a.info {
    text-decoration: none;
    display: inline-block;
    text-transform: uppercase;
    color: #fff;
    border: 1px solid #fff;
    background-color: transparent;
    opacity: 0;
    filter: alpha(opacity=0);
    -webkit-transition: all 0.4s ease;
    transition: all 0.4s ease;
    margin: 50px 0 0;
    padding: 7px 14px;
}

.hovereffect a.info:hover {
    box-shadow: 0 0 5px #fff;
}

.hovereffect:hover img {
    -ms-transform: scale(1.2);
    -webkit-transform: scale(1.2);
    transform: scale(1.2);
}

.hovereffect:hover .overlay {
    opacity: 1;
    filter: alpha(opacity=100);
}

.hovereffect:hover h2,.hovereffect:hover a.info {
    opacity: 1;
    filter: alpha(opacity=100);
    -ms-transform: translatey(0);
    -webkit-transform: translatey(0);
    transform: translatey(0);
}

.hovereffect:hover a.info {
    -webkit-transition-delay: .2s;
    transition-delay: .2s;
}
                </pre>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
