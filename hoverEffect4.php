<?php $title = "Hover effect 4"; ?>
<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
    <div class="hover ehover4">
        <img class="img-responsive" src="images/p18.jpg" alt="">
        <div class="overlay">
            <h2><?php echo $title;?></h2>
            <button class="info" data-toggle="modal" data-target="#modal4">Show code
            </button>
        </div>
    </div>
</div>
<div id="modal4" class="modal fade">
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
           &lt;h2&gt;Hover effect 4&lt;/h2&gt;
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
    background-color: rgba(75,75,75,0.7);
    -webkit-transition: all 0.4s ease-in-out;
    transition: all 0.4s ease-in-out;
}

.hovereffect:hover .overlay {
    background-color: rgba(48, 152, 157, 0.4);
}

.hovereffect img {
    display: block;
    position: relative;
}

.hovereffect h2 {
    text-transform: uppercase;
    color: #fff;
    text-align: center;
    position: relative;
    font-size: 17px;
    padding: 10px;
    background: rgba(0, 0, 0, 0.6);
    -webkit-transform: translateY(45px);
    -ms-transform: translateY(45px);
    transform: translateY(45px);
    -webkit-transition: all 0.4s ease-in-out;
    transition: all 0.4s ease-in-out;
}

.hovereffect:hover h2 {
    -webkit-transform: translateY(5px);
    -ms-transform: translateY(5px);
    transform: translateY(5px);
}

.hovereffect a.info {
    display: inline-block;
    text-decoration: none;
    padding: 7px 14px;
    text-transform: uppercase;
    color: #fff;
    border: 1px solid #fff;
    background-color: transparent;
    opacity: 0;
    filter: alpha(opacity=0);
    -webkit-transform: scale(0);
    -ms-transform: scale(0);
    transform: scale(0);
    -webkit-transition: all 0.4s ease-in-out;
    transition: all 0.4s ease-in-out;
    font-weight: normal;
    margin: -52px 0 0 0;
    padding: 62px 100px;
}

.hovereffect:hover a.info {
    opacity: 1;
    filter: alpha(opacity=100);
    -webkit-transform: scale(1);
    -ms-transform: scale(1);
    transform: scale(1);
}

.hovereffect a.info:hover {
    box-shadow: 0 0 5px #fff;
}
                </pre>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
