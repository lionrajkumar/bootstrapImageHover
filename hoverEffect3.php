<?php $title = "Hover effect 3"; ?>
<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
    <div class="hover ehover3">
        <img class="img-responsive" src="images/p13.jpg" alt="">
        <div class="overlay">
            <h2><?php echo $title;?></h2>
            <button class="info" data-toggle="modal" data-target="#modal3">Show code
            </button>
        </div>
    </div>
</div>
<div id="modal3" class="modal fade">
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
           &lt;h2&gt;Hover effect 3&lt;/h2&gt;
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
}

.hovereffect img {
    display: block;
    position: relative;
    -webkit-transition: all 0.4s ease-in;
    transition: all 0.4s ease-in;
}

.hovereffect:hover img {
    filter: url('data:image/svg+xml;charset=utf-8,&lt;svg xmlns="http://www.w3.org/2000/svg"&gt;&lt;filter id="filter"&gt;&lt;feColorMatrix type="matrix" color-interpolation-filters="sRGB" values="0.2126 0.7152 0.0722 0 0 0.2126 0.7152 0.0722 0 0 0.2126 0.7152 0.0722 0 0 0 0 0 1 0" /&gt;&lt;feGaussianBlur stdDeviation="3" /&gt;&lt;/filter&gt;&lt;/svg&gt;#filter');
    filter: grayscale(1) blur(3px);
    -webkit-filter: grayscale(1) blur(3px);
    -webkit-transform: scale(1.2);
    -ms-transform: scale(1.2);
    transform: scale(1.2);
}

.hovereffect h2 {
    text-transform: uppercase;
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
    border: 1px solid #fff;
    margin: 50px 0 0 0;
    background-color: transparent;
}

.hovereffect a.info:hover {
    box-shadow: 0 0 5px #fff;
}

.hovereffect a.info, .hovereffect h2 {
    -webkit-transform: scale(0.7);
    -ms-transform: scale(0.7);
    transform: scale(0.7);
    -webkit-transition: all 0.4s ease-in;
    transition: all 0.4s ease-in;
    opacity: 0;
    filter: alpha(opacity=0);
    color: #fff;
    text-transform: uppercase;
}

.hovereffect:hover a.info, .hovereffect:hover h2 {
    opacity: 1;
    filter: alpha(opacity=100);
    -webkit-transform: scale(1);
    -ms-transform: scale(1);
    transform: scale(1);
}
                </pre>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
