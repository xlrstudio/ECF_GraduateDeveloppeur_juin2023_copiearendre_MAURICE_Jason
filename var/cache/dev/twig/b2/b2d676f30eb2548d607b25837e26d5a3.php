<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* public/asset/css/style.css */
class __TwigTemplate_ed006eac1091b90df3dbd1c9c8fd7287 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "public/asset/css/style.css"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "public/asset/css/style.css"));

        // line 1
        echo "/*
* Prefixed by https://autoprefixer.github.io
* PostCSS: v8.4.14,
* Autoprefixer: v10.4.7
* Browsers: last 4 version
*/

@fontface {
    font-family: 'Montserrat', sans-serif;
    font-family: 'Hind Madurai', sans-serif;
    font-family: 'Lora', sans-serif;
}

/* COLOR {
  Tan → #B6AC97
  Brown → #906427
  Black - > #392C1E
} */

h1 {
    color: rgb(0, 0, 0); font-family: 'Montserrat', sans-serif; font-size: 75px; font-weight: bold; letter-spacing: -1px; line-height: 1; text-align: center;
}

h2 {
    color: #111; font-family: 'Lora', sans-serif; font-size: 2em; font-weight: 300; line-height: 32px; margin: 0 0 72px; text-align: center;
}

h3 {
    color: #906427; font-family: 'Lora', sans-serif; font-size: 2em; font-weight: 300; line-height: 32px; margin: 0 0 px; text-align: center;
}

h4 {
    color: #B6AC97; font-family: 'Lora', sans-serif; font-size: 2em; font-weight: 300; line-height: 32px; margin: 0 0 72px; text-align: center;

}

h5 {
    color: #B6AC97; font-family: 'Lora', sans-serif; font-size: 2em; font-weight: 300; line-height: 32px; margin: 0 0 72px; text-align: center;

}

h6 {
    color: #B6AC97; font-family: 'Lora', sans-serif; font-size: 2em; font-weight: 300; line-height: 32px; margin: 0 0 72px; text-align: center;

}

p {
    color: #000000; font-family: 'Hind Madurai', sans-serif; font-size: 20px; line-height: 24px; margin: 0 0 24px; text-align: justify; text-align: center;
}


.container-2 h5 {
    color: #B6AC97; font-family: 'Lora', sans-serif; font-size: 3em; font-weight: 300; line-height: 32px; margin: 0 0 72px; text-align: center;

}

.table-color {
    background-color: #111;
    color: #fff;
    padding: 2%;
    -webkit-box-shadow: 60px -16px #906427;
    box-shadow: 60px -16px #906427;
    border-radius: 15px;
}

.table-color p {
}

.container-2-menu p {
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    padding-left: 20%;
    padding-right: 20%;
}

.list {
    color: #000000;
    font-size: 20px;
    padding-right: 75%;
}

.container-h1 {
    color: #000000;
    padding-top: 5%;
    padding-bottom: 5%;
}
.container-h2{
    color: #000000;
    font-size: 54px;
    padding-top: 5%;
    padding-bottom: 1%;

}

.space2 {
    padding-top: 50px;
    height: 50px;
}

/*HEADER*/

.hero-image {
    height: 500px;

    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
    position: relative;
}

.hero-text {
    text-align: center;
    position: absolute;
    top: 50%;
    left: 50%;
    -webkit-transform: translate(-50%, -50%);
    -ms-transform: translate(-50%, -50%);
    transform: translate(-50%, -50%);
    color: white;
}

.button {
    color: white;
    background-color: #906427;
    padding: 20px;
    border-radius: 10px;
}

/*HEADER*/

.opacity-img {
    opacity: 0.5;
}

.container {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -ms-flex-wrap: wrap;
    flex-wrap: wrap;
    -webkit-box-pack: center;
    -ms-flex-pack: center;
    justify-content: center;
    padding-top: 2%;
    width: 90%;

}

.item {
    width: 30%;
    text-align: center;
    margin-bottom: 2%;
    padding-left: 2%;
    padding-right: 2%;
}
.item-2 {
    width: 49%;
    padding-top: 2%;
    text-align: center;
    margin-bottom: 2%;
}

.item-child {
    padding-top: 10%;
    width: 100%;
}

.item-child-2 {
    padding-top: 10%;
    width: 100%;
}

.item-img {
    padding: 2%;
}

.item-80 {

    text-align: center;
}

.space {

}

.item-child-p {
    text-align: center;
}

.background-black {
    background-color: #392C1E;
}


/* HERO IMAGE 2 */

.hero-image-2 {
    height: 500px;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
    position: relative;
    background-color: #392C1E;
}

.hero-text-2 {
    text-align: center;
    position: absolute;
    top: 50%;
    left: 50%;
    -webkit-transform: translate(-50%, -50%);
    -ms-transform: translate(-50%, -50%);
    transform: translate(-50%, -50%);
    color: white;
}
.hero-text-3 {
    text-align: center;
    position: absolute;
    top: 50%;
    left: 50%;
    -webkit-transform: translate(-50%, -50%);
    -ms-transform: translate(-50%, -50%);
    transform: translate(-50%, -50%);
    padding: 5%;
    display: block;
    border: 1px solid #906427;
    border-color: #906427;

}

.hero-image-3 {
    padding-top: 900px;
    height: 300px;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
    position: relative;
    background-color: white;
    padding-bottom: 10%;
}


.menu {

}

.container-3 {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    -webkit-box-pack: center;
    -ms-flex-pack: center;
    justify-content: center;
    padding-top: 2%;
    width: 60%;
    margin: 0;

}

.container-4 {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    -webkit-box-pack: center;
    -ms-flex-pack: center;
    justify-content: center;
    padding-top: 2%;
    margin: 0;

}


.hero-text-3 h3 {
    padding-top: 3%;
}

.menu p {
    padding-top: 1%;
    padding-bottom: 3%;
}

.menu h4 {
    padding-top: 10%;
    margin: 0;
}

.menu-align {
    padding-top: 3%;
    padding-bottom: 1%;

}

.menu-bar {
    height: 2px;
    background-color: #906427;
    margin-left: 25%;
    margin-right: 25%;
}

.color-table {
    color: #906427;
    padding-right: 10px;
    padding-left: 30px;
}

td {
    padding-right: 80px;
}

.hero-text-color h2 {
    color: aliceblue;
}

.hero-text-color p {
    color: aliceblue;
}

.container-4 {
    padding-top: 100px;
}

.table {
    padding-bottom: 10%;
}

.space {
    height: 100px;
}

.reservation {
    color: #906427;
}


.a-img-txt{
    display:-ms-grid;
    display:grid;
}

/* les enfants se superposent */
.a-img-txt>*{
    grid-area:1/1/-1/-1;
    /* raccourci pour grid-row et grid-column */
}

/* le texte */
.a-txt{
    display:-webkit-box;
    display:-ms-flexbox;
    display:flex;
    -webkit-box-pack:center;
    -ms-flex-pack:center;
    justify-content:center;
    -webkit-box-align:center;
    -ms-flex-align:center;
    align-items:center;
    color:#fff;
    opacity:0;
    -webkit-transition:opacity .8s;
    -o-transition:opacity .8s;
    transition:opacity .8s;
    background-color: #111;
    background:opacity 0.5;
}

/* les couleurs c1 et c2 */
.a-img{
    background :#111; /* avec alpha */
}

.a-img:hover {
    opacity: 0.5;
    filter: alpha(opacity=50);
}


/* le survol */
.a-txt:hover{
    opacity:1;
}

/* la déco */




img{
    max-width:100%;
    height:auto;
}
a{
    text-decoration:none;
}























@media (max-width: 1200px) {


    .container {
        display: block;
        -ms-flex-wrap:nowrap;
        flex-wrap:nowrap;
        padding-top: 2%;
        width: 95%;

    }

    .item {
        width: 90%;
        text-align: center;

    }
    .item-2 {
        width: 90%;
        text-align: center;

    }

    .item-child {
        padding-top: 10%;
        width: 90%;
        text-align: center;
        padding-left: 5%;
        padding-right: 5%;
    }

    .item-child-2 {
        padding-top: 10%;
        width: 10px;
        padding-left: 175px;
    }

    .item-80 {
        text-align: center;
    }
    .item-child-p {
        text-align: center;
        padding-left: 10px;
    }

    .player {
        padding-top: 350px;
        padding-bottom: 350px;
        width: 80%;
    }

    .hero-text-2 h1 {
        font-size: 50px;
    }

    /* Dropdown Button */
    .dropbtn {
        background-color: #04AA6D;
        color: white;
        padding: 16px;
        font-size: 16px;
        border: none;
    }

    /* The container <div> - needed to position the dropdown content */
    .dropdown {
        position: relative;
        display: inline-block;
    }

    /* Dropdown Content (Hidden by Default) */
    .dropdown-content {
        display: none;
        position: absolute;
        background-color: #f1f1f1;
        min-width: 160px;
        box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
        z-index: 1;
    }

    /* Links inside the dropdown */
    .dropdown-content a {
        color: black;
        padding: 12px 16px;
        text-decoration: none;
        display: block;
    }

    /* Change color of dropdown links on hover */
    .dropdown-content a:hover {background-color: #ddd;}

    /* Show the dropdown menu on hover */
    .dropdown:hover .dropdown-content {display: block;}

    /* Change the background color of the dropdown button when the dropdown content is shown */
    .dropdown:hover .dropbtn {background-color: #3e8e41;}
}";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "public/asset/css/style.css";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("/*
* Prefixed by https://autoprefixer.github.io
* PostCSS: v8.4.14,
* Autoprefixer: v10.4.7
* Browsers: last 4 version
*/

@fontface {
    font-family: 'Montserrat', sans-serif;
    font-family: 'Hind Madurai', sans-serif;
    font-family: 'Lora', sans-serif;
}

/* COLOR {
  Tan → #B6AC97
  Brown → #906427
  Black - > #392C1E
} */

h1 {
    color: rgb(0, 0, 0); font-family: 'Montserrat', sans-serif; font-size: 75px; font-weight: bold; letter-spacing: -1px; line-height: 1; text-align: center;
}

h2 {
    color: #111; font-family: 'Lora', sans-serif; font-size: 2em; font-weight: 300; line-height: 32px; margin: 0 0 72px; text-align: center;
}

h3 {
    color: #906427; font-family: 'Lora', sans-serif; font-size: 2em; font-weight: 300; line-height: 32px; margin: 0 0 px; text-align: center;
}

h4 {
    color: #B6AC97; font-family: 'Lora', sans-serif; font-size: 2em; font-weight: 300; line-height: 32px; margin: 0 0 72px; text-align: center;

}

h5 {
    color: #B6AC97; font-family: 'Lora', sans-serif; font-size: 2em; font-weight: 300; line-height: 32px; margin: 0 0 72px; text-align: center;

}

h6 {
    color: #B6AC97; font-family: 'Lora', sans-serif; font-size: 2em; font-weight: 300; line-height: 32px; margin: 0 0 72px; text-align: center;

}

p {
    color: #000000; font-family: 'Hind Madurai', sans-serif; font-size: 20px; line-height: 24px; margin: 0 0 24px; text-align: justify; text-align: center;
}


.container-2 h5 {
    color: #B6AC97; font-family: 'Lora', sans-serif; font-size: 3em; font-weight: 300; line-height: 32px; margin: 0 0 72px; text-align: center;

}

.table-color {
    background-color: #111;
    color: #fff;
    padding: 2%;
    -webkit-box-shadow: 60px -16px #906427;
    box-shadow: 60px -16px #906427;
    border-radius: 15px;
}

.table-color p {
}

.container-2-menu p {
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    padding-left: 20%;
    padding-right: 20%;
}

.list {
    color: #000000;
    font-size: 20px;
    padding-right: 75%;
}

.container-h1 {
    color: #000000;
    padding-top: 5%;
    padding-bottom: 5%;
}
.container-h2{
    color: #000000;
    font-size: 54px;
    padding-top: 5%;
    padding-bottom: 1%;

}

.space2 {
    padding-top: 50px;
    height: 50px;
}

/*HEADER*/

.hero-image {
    height: 500px;

    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
    position: relative;
}

.hero-text {
    text-align: center;
    position: absolute;
    top: 50%;
    left: 50%;
    -webkit-transform: translate(-50%, -50%);
    -ms-transform: translate(-50%, -50%);
    transform: translate(-50%, -50%);
    color: white;
}

.button {
    color: white;
    background-color: #906427;
    padding: 20px;
    border-radius: 10px;
}

/*HEADER*/

.opacity-img {
    opacity: 0.5;
}

.container {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -ms-flex-wrap: wrap;
    flex-wrap: wrap;
    -webkit-box-pack: center;
    -ms-flex-pack: center;
    justify-content: center;
    padding-top: 2%;
    width: 90%;

}

.item {
    width: 30%;
    text-align: center;
    margin-bottom: 2%;
    padding-left: 2%;
    padding-right: 2%;
}
.item-2 {
    width: 49%;
    padding-top: 2%;
    text-align: center;
    margin-bottom: 2%;
}

.item-child {
    padding-top: 10%;
    width: 100%;
}

.item-child-2 {
    padding-top: 10%;
    width: 100%;
}

.item-img {
    padding: 2%;
}

.item-80 {

    text-align: center;
}

.space {

}

.item-child-p {
    text-align: center;
}

.background-black {
    background-color: #392C1E;
}


/* HERO IMAGE 2 */

.hero-image-2 {
    height: 500px;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
    position: relative;
    background-color: #392C1E;
}

.hero-text-2 {
    text-align: center;
    position: absolute;
    top: 50%;
    left: 50%;
    -webkit-transform: translate(-50%, -50%);
    -ms-transform: translate(-50%, -50%);
    transform: translate(-50%, -50%);
    color: white;
}
.hero-text-3 {
    text-align: center;
    position: absolute;
    top: 50%;
    left: 50%;
    -webkit-transform: translate(-50%, -50%);
    -ms-transform: translate(-50%, -50%);
    transform: translate(-50%, -50%);
    padding: 5%;
    display: block;
    border: 1px solid #906427;
    border-color: #906427;

}

.hero-image-3 {
    padding-top: 900px;
    height: 300px;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
    position: relative;
    background-color: white;
    padding-bottom: 10%;
}


.menu {

}

.container-3 {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    -webkit-box-pack: center;
    -ms-flex-pack: center;
    justify-content: center;
    padding-top: 2%;
    width: 60%;
    margin: 0;

}

.container-4 {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    -webkit-box-pack: center;
    -ms-flex-pack: center;
    justify-content: center;
    padding-top: 2%;
    margin: 0;

}


.hero-text-3 h3 {
    padding-top: 3%;
}

.menu p {
    padding-top: 1%;
    padding-bottom: 3%;
}

.menu h4 {
    padding-top: 10%;
    margin: 0;
}

.menu-align {
    padding-top: 3%;
    padding-bottom: 1%;

}

.menu-bar {
    height: 2px;
    background-color: #906427;
    margin-left: 25%;
    margin-right: 25%;
}

.color-table {
    color: #906427;
    padding-right: 10px;
    padding-left: 30px;
}

td {
    padding-right: 80px;
}

.hero-text-color h2 {
    color: aliceblue;
}

.hero-text-color p {
    color: aliceblue;
}

.container-4 {
    padding-top: 100px;
}

.table {
    padding-bottom: 10%;
}

.space {
    height: 100px;
}

.reservation {
    color: #906427;
}


.a-img-txt{
    display:-ms-grid;
    display:grid;
}

/* les enfants se superposent */
.a-img-txt>*{
    grid-area:1/1/-1/-1;
    /* raccourci pour grid-row et grid-column */
}

/* le texte */
.a-txt{
    display:-webkit-box;
    display:-ms-flexbox;
    display:flex;
    -webkit-box-pack:center;
    -ms-flex-pack:center;
    justify-content:center;
    -webkit-box-align:center;
    -ms-flex-align:center;
    align-items:center;
    color:#fff;
    opacity:0;
    -webkit-transition:opacity .8s;
    -o-transition:opacity .8s;
    transition:opacity .8s;
    background-color: #111;
    background:opacity 0.5;
}

/* les couleurs c1 et c2 */
.a-img{
    background :#111; /* avec alpha */
}

.a-img:hover {
    opacity: 0.5;
    filter: alpha(opacity=50);
}


/* le survol */
.a-txt:hover{
    opacity:1;
}

/* la déco */




img{
    max-width:100%;
    height:auto;
}
a{
    text-decoration:none;
}























@media (max-width: 1200px) {


    .container {
        display: block;
        -ms-flex-wrap:nowrap;
        flex-wrap:nowrap;
        padding-top: 2%;
        width: 95%;

    }

    .item {
        width: 90%;
        text-align: center;

    }
    .item-2 {
        width: 90%;
        text-align: center;

    }

    .item-child {
        padding-top: 10%;
        width: 90%;
        text-align: center;
        padding-left: 5%;
        padding-right: 5%;
    }

    .item-child-2 {
        padding-top: 10%;
        width: 10px;
        padding-left: 175px;
    }

    .item-80 {
        text-align: center;
    }
    .item-child-p {
        text-align: center;
        padding-left: 10px;
    }

    .player {
        padding-top: 350px;
        padding-bottom: 350px;
        width: 80%;
    }

    .hero-text-2 h1 {
        font-size: 50px;
    }

    /* Dropdown Button */
    .dropbtn {
        background-color: #04AA6D;
        color: white;
        padding: 16px;
        font-size: 16px;
        border: none;
    }

    /* The container <div> - needed to position the dropdown content */
    .dropdown {
        position: relative;
        display: inline-block;
    }

    /* Dropdown Content (Hidden by Default) */
    .dropdown-content {
        display: none;
        position: absolute;
        background-color: #f1f1f1;
        min-width: 160px;
        box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
        z-index: 1;
    }

    /* Links inside the dropdown */
    .dropdown-content a {
        color: black;
        padding: 12px 16px;
        text-decoration: none;
        display: block;
    }

    /* Change color of dropdown links on hover */
    .dropdown-content a:hover {background-color: #ddd;}

    /* Show the dropdown menu on hover */
    .dropdown:hover .dropdown-content {display: block;}

    /* Change the background color of the dropdown button when the dropdown content is shown */
    .dropdown:hover .dropbtn {background-color: #3e8e41;}
}", "public/asset/css/style.css", "C:\\xampp\\apps\\symfony\\templates\\public\\asset\\css\\style.css");
    }
}
