<?php $title = "Hover effect 5"; ?>
<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
    <div class="hover ehover5">
        <img class="img-responsive" src="images/p10.jpg" alt="">
        <div class="overlay">
            <h2><?php echo $title;?></h2>
            <button class="info" data-toggle="modal" data-target="#modal5">Show code
            </button>
        </div>
    </div>
</div>
<div id="modal5" class="modal fade">
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
        &lt;img class="img-responsive" src="http://placehold.it/350x250" alt=""&gt;
        &lt;div class="overlay"&gt;
           &lt;h2&gt;Hover effect 5&lt;/h2&gt;
           &lt;a class="info" href="#"&gt;link here&lt;/a&gt;
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
    -webkit-transition: all 0.4s ease-in-out;
    transition: all 0.4s ease-in-out;
}

.hovereffect:hover .overlay {
    background-color: rgba(170,170,170,0.4);
}

.hovereffect h2, .hovereffect img {
    -webkit-transition: all 0.4s ease-in-out;
    transition: all 0.4s ease-in-out;
}

.hovereffect img {
    display: block;
    position: relative;
    -webkit-transform: scale(1.1);
    -ms-transform: scale(1.1);
    transform: scale(1.1);
}

.hovereffect:hover img {
    -webkit-transform: scale(1);
    -ms-transform: scale(1);
    transform: scale(1);
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
    opacity: 0;
    filter: alpha(opacity=0);
    -webkit-transform: scale(1.5);
    -ms-transform: scale(1.5);
    transform: scale(1.5);
    -webkit-transition: all 0.4s ease-in-out;
    transition: all 0.4s ease-in-out;
    font-weight: normal;
    height: 85%;
    width: 85%;
    position: absolute;
    top: -20%;
    left: 8%;
    padding: 70px;
}

.hovereffect:hover a.info {
    opacity: 1;
    filter: alpha(opacity=100);
    -webkit-transform: scale(1);
    -ms-transform: scale(1);
    transform: scale(1);
    background-color: rgba(0,0,0,0.4);
}
                </pre>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>