# imagehover
html and css code for image hover effects with or without bootstrap

Have tested all individually in codepen using bootstrap.

TIPS:

If you wish to use these without bootstrap just remove the col classes from the top level div.

We need to consider mobile, the hovers that reveal social icons are great except for many these will be inaccessible as some mobiles do not understand a hover state. One way would be to put some visible soical icons else where and leave the hover social icons there as a nice effect for those who find them. Another option is to use CSS media queries so on small screen sizes the styles are already in place. They will not be able to see the cool effect but atlest you are making any content hidden by the hover styles more accessible.

For example on the first effect these are the styles that are applied during a :hover state. So you'd simply copy the styles again and wrap them inside and media query and remove the :hover part of it.

For example you would copy the following:
```CSS
hovereffect:hover img {
-ms-transform:scale(1.2);
-webkit-transform:scale(1.2);
transform:scale(1.2);
}

.hovereffect:hover .overlay {
opacity:1;
filter:alpha(opacity=100);
}

.hovereffect:hover h2,.hovereffect:hover a.info {
opacity:1;
filter:alpha(opacity=100);
-ms-transform:translatey(0);
-webkit-transform:translatey(0);
transform:translatey(0);
}
```

And then wrap it inside a media quiery and remove all the :hover from the styles.
```css
@media (max-width: 750px) {

 hovereffect img {
 -ms-transform:scale(1.2);
 -webkit-transform:scale(1.2);
 transform:scale(1.2);
 }

 .hovereffect .overlay {
 opacity:1;
 filter:alpha(opacity=100);
 }

 .hovereffect h2,.hovereffect a.info {
 opacity:1;
 filter:alpha(opacity=100);
 -ms-transform:translatey(0);
 -webkit-transform:translatey(0);
 transform:translatey(0);
 }

}
```

TO DO:

Make all the effects fully responsive. Some are already/some need slight changes depending on sizes.

---
Special thanks to:
[![startbootstrap](https://img.shields.io/badge/-codrops-141a20?style=flat)](http://tympanus.net/codrops/)&nbsp;[![startbootstrap](https://img.shields.io/badge/-Start%20Bootstrap-141a20?style=flat)](http://startbootstrap.com)&nbsp;[![Bootstrap](https://img.shields.io/badge/-Bootstrap-141a20?style=flat&logo=bootstrap&logoColor=fff)](http://getbootstrap.com/)&nbsp;[![Font-Awesome](https://img.shields.io/badge/-Font%20Awesome-141a20?style=flat&logo=Font%20Awesome&logoColor=fff)](http://getbootstrap.com/)&nbsp;[![GitHub](https://img.shields.io/badge/-GitHub-141a20?style=flat&logo=github)](http://github.com)&nbsp;![unsplash](https://img.shields.io/badge/Images-unsplash-141a20?style=flat)&nbsp;![font squirrel](https://img.shields.io/badge/Fonts-font%20squirrel-141a20?style=flat)
[![Font-Awesome](https://img.shields.io/badge/-CodePen-141a20?style=flat&logo=CodePen&logoColor=fff)](http://codepen.com/)

---
Refs: [![GitHub](https://img.shields.io/badge/miketricking-bootstrap--image--hover-141a20?style=flat&logo=github)](https://github.com/miketricking/bootstrap-image-hover)