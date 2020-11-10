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

/* vendor/ocramius/proxy-manager/doc-template/css/main.css */
class __TwigTemplate_446d0d0cf155b6e260d2a1399e9aa5b48fcbc6d7f6ccf7178af6dc34107acb8c extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/ocramius/proxy-manager/doc-template/css/main.css"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/ocramius/proxy-manager/doc-template/css/main.css"));

        // line 1
        echo "html { font-family: sans-serif; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%; }
body { margin: 0; }
[hidden], template { display: none; }
a { background: transparent; }
a:active, a:hover { outline: 0; }
h1 { font-size: 2em; margin: 0.67em 0; }
images { border: 0; }
svg:not(:root) { overflow: hidden; }
figure { margin: 1em 40px; }
hr { -moz-box-sizing: content-box; box-sizing: content-box; height: 0; }
pre { overflow: auto; }
code, kbd, pre, samp { font-family: 'Menlo', 'Monaco', monospace; font-size: 1em; }
button, input, optgroup, select, textarea { color: inherit; font: inherit; margin: 0; }
button { overflow: visible; }
button, select { text-transform: none; }
button, html input[type=\"button\"], input[type=\"reset\"], input[type=\"submit\"] { -webkit-appearance: button; cursor: pointer; }
h1, h2, h3, h4, h5, h6, p, ul, ol, li { margin: 0; padding: 0; line-height: normal; }
a { color: #31811D; text-decoration: none; }
a:hover { color: #2F611C; text-decoration: none; }
h3 { margin-bottom: 1em; color: #17324f; font-weight: 400; font-size: 3em; }
h4 { margin-bottom: 1em; font-weight: 400; font-size: 1.375em; }
p { margin-bottom: 1.5em; font-size: 1.125em; }
hr { margin: 2.5em 0; padding: 0; width: 100%; height: 3px; border: 0; background: #e6eaef; }
pre code { border-radius: 4px; font-size: 15px; padding: 20px; border: 1px solid #EBEBEB; }
.content h1 { padding-bottom: 12px; border-bottom: 1px solid #EFEFEF; margin-bottom: 20px; }
.main-nav ul li{ position: relative;}
.main-nav ul li{ position: relative;}
.main-nav ul li:hover { background: #2F611C;}
.main-nav ul li:hover > ul { display:block }
.main-nav ul li > ul { display:none; position: absolute; list-style: none; width: 100%; z-index: 9;}
.main-nav ul li > ul li a { color: #BFE5F1; display: block; background: #2F611C; padding: 20px;}
.main-nav ul li > ul li a:hover { background: #1C440C;}

/* Menu Sidebar*/
.button-block { padding-top: 15px; }
.button-block .btn-1 { margin-right: 6px; }
.btn, .spy-nav a { position: relative; display: inline-block; margin: 0; padding: 0 20px; height: 57px; border: 0; vertical-align: top; text-align: center; text-transform: uppercase; font-weight: 400; font-size: 1.125em; transitionP: all .2s; line-height: 57px; }
.btn.btn-action, .spy-nav a.btn-action { background: #ee2d4d; color: #fff; }
.btn.btn-action:hover, .spy-nav a.btn-action:hover { background: #bf0f2d; }
.btn.btn-default, .spy-nav a { background: #31811D; color: #fff; }
.btn.btn-default:hover, .spy-nav a:hover { background: #2F611C; color: #fff; }
.btn.btn-text, .spy-nav a.btn-text { color: #18324f; font-weight: 600; }
.btn.btn-full, .spy-nav a { display: block; }
@media only screen and (max-width: 480px) {
    .site-header{ position: fixed !important; top: 0; z-index: 999999}
    .page-title-wrapper{ margin-top: 70px;}
    .main-wrapper iframe{ width: 42% !important; float: left; margin-left: 8%;}
    .content iframe{width: 100%; height: 100%;}
}

.btn-top { position: relative; display: inline-block; float: right; margin: 20px 0 0; padding: 0 30px 0 50px; height: 57px; border: 2px solid #31811D; color: #31811D; vertical-align: top; text-align: center; text-transform: uppercase; font-weight: 600; font-size: 1.125em; line-height: 53px; transition: all .2s; }
.btn-top:before { background-position: 0 -140px; width: 52px; height: 52px; position: absolute; top: 0; left: 0; content: ''; }
@media only screen and (min-resolution: 2dppx), (-webkit-min-device-pixel-ratio: 2) { .btn-top:before { background-position: 0 -140px; background-size: 152px auto; width: 52px; height: 52px; } }
.btn-top:hover { border-color: #2F611C; color: #2F611C; }
@media only screen and (max-width: 768px) { .btn-top { float: none; margin-top: 0; margin-bottom: 30px; white-space: nowrap; } }
@media only screen and (max-width: 480px) { .btn-top { font-size: 0.9em; line-height: 46px; height: 48px; padding-right: 22px; padding-left: 47px; } }

.btn-download { float: right; padding-left: 50px; }
.btn-download:before { background-position: -18px -116px; width: 16px; height: 16px; position: absolute; top: 50%; left: 20px; margin-top: -7px; content: ''; }
@media only screen and (min-resolution: 2dppx), (-webkit-min-device-pixel-ratio: 2) { .btn-download:before { background-position: -18px -116px; background-size: 152px auto; width: 16px; height: 16px; } }

.btn-done { float: right; padding-left: 50px; }
.btn-done:before { background-position: 0 -116px; width: 18px; height: 14px; position: absolute; top: 50%; margin-top: -7px; left: 20px; content: ''; }
@media only screen and (min-resolution: 2dppx), (-webkit-min-device-pixel-ratio: 2) { .btn-done:before { background-position: 0 -116px; background-size: 152px auto; width: 18px; height: 13.5px; margin-top: -6.75px; } }

.btn-cancel { float: right; }

*, *:before, *:after { -moz-box-sizing: border-box; -webkit-box-sizing: border-box; box-sizing: border-box; }

html { -webkit-font-smoothing: antialiased; text-rendering: optimizeLegibility; min-width: 280px; }
@media only screen and (min-width: 64.063em) and (max-width: 90em) { html { min-width: 960px; } }

body { font-size: 16px; font-family: 'Source Sans Pro', sans-serif; min-width: 290px; }
@media only screen and (max-width: 480px) { body.page-home { background-image: none; } }

images { max-width: 100%; height: auto !important; }

input { -webkit-appearance: none; -webkit-border-radius: 0; border-radius: 0; }

main { overflow: hidden; }

.clearfix:after { content: \"\"; display: table; clear: both; }

.container { width: 60em; margin-left: auto; margin-right: auto; }
.container:after { content: \" \"; display: block; clear: both; }
@media only screen and (max-width: 1024px) { .container { margin-left: 15px; margin-right: 15px; width: auto; } }

.content ul { padding-left: 19px; list-style-type: square; margin-top: 15px; }

/* Menu top */
.main-nav { float: right; }
.fixed-wrapper .main-nav { display: none; }
.active .main-nav { display: block; }
.main-nav > ul { list-style: none; }
.main-nav > ul > li { float: left; }
.main-nav > ul > li > a { display: block; padding: 22px 30px; color: #fff; text-decoration: none; text-transform: uppercase; font-weight: 600; font-size: 1.375em; line-height: 29px; transition: all .2s; }
.main-nav > ul > li > a:hover { color: #bfe5f1; background-color: #2F611C; }
.main-nav > ul > li > a.active { background-color: #2F611C; color: #fff; }
.main-nav > ul > li > a.opened { background-color: #18324f; }
@media only screen and (max-width: 600px) { .main-nav { font-size: 0.86em; }
  .main-nav > ul > li > a { padding-left: 18px; padding-right: 18px; } }
@media only screen and (max-width: 480px) { .main-nav > ul > li > a { font-size: 0.95em; padding: 22px 6px; } }

.site-header { position: relative; width: 100%; background: #31811D; }
.site-header h1 { float: left; margin: 15px 0; }
.site-header h1 a { display: block; }
.site-header h1 images { display: block; max-height: 42px; }
@media only screen and (max-width: 480px) { .site-header h1 images { max-height: 42px; } }

.page-title-wrapper { position: relative; padding: 26px 0 55px; text-align: center; }
.page-title-wrapper .page-title { margin-top: 44px; color: #17324f; font-weight: 400; font-size: 3.75em; }
.page-title-wrapper .linguistics { padding: 0 2em 13px; border-bottom: 1px solid #D4DBE3; color: #18324f; text-transform: uppercase; font-weight: 400; font-size: 1.25em; }
@media only screen and (max-width: 768px) { .page-title-wrapper { font-size: 0.8em; } }
@media only screen and (max-width: 480px) { .page-title-wrapper { font-size: 0.65em; } }

.site-footer { margin-top: 20px; padding-top: 50px; padding-bottom: 50px; background: #18324f; color: #7c8ea3; text-align: center; }
.site-footer .container { position: relative; }
.footer-logos ul li{ list-style: none; display: inline-block;}
.footer-logos ul li a{ padding-left: 10px; padding-right: 10px}
.site-footer a{ color: white !important;}
.site-footer p { text-align: left; display: block; margin-bottom: 1.5em; font-size: 1.125em; }
@media only screen and (max-width: 1024px) { .site-footer p { margin-left: 0; } }
@media only screen and (max-width: 768px) { .site-footer p { text-align: center; margin-left: auto; } }
@media only screen and (max-width: 600px) { .site-footer { font-size: 0.9em; } }

.main-logo { display: block; float: left; margin: 30px 0; }
.fixed-wrapper .main-logo { display: none; }
.main-logo images { display: block; }
.main-logo figure { position: relative; margin: 0; max-width: 56px; }
.main-logo figcaption { position: absolute; width: 160px; top: 20px; left: 68px; }
.active .main-logo { display: block; margin: 0; }
.active .main-logo figure { max-width: 42px; }
.active .main-logo figcaption { width: 120px; top: 15px; left: 55px; }
@media only screen and (max-width: 480px) { .main-logo figcaption { display: none; } }

.container { width: 60em; margin-left: auto; margin-right: auto; }
.container:after { content: \" \"; display: block; clear: both; }
@media only screen and (max-width: 1024px) { .container { margin-left: 15px; margin-right: 15px; width: auto; } }

.component-demo { position: relative; padding: 1px 0 0; background: #e6eaef; }
.component-demo:before { background-image: url(\"../images/enf.png\"); }
@media only screen and (max-width: 480px) { .component-demo { padding: 40px 0 0; } }

.component-info .container { position: relative; }
.component-info .sidebar { width: 220px; float: left; margin-top: 75px; }
.component-info .sidebar .component-meta { margin-top: 10px; font-size: 1.125em; }
.component-info .sidebar .component-meta span { white-space: nowrap; margin-bottom: 10px; padding-left: 25px; color: #18324f; }
.component-info .sidebar.sticky { position: fixed; margin-top: 38px; }
.component-info .content { width: 64.58333333%; float: right; margin-top: 60px; margin-bottom: 75px; }
.component-info .content h3 { margin-bottom: .75em; font-size: 2.75em; }
.component-info .content p { margin-bottom: 1.75em; line-height: 1.45; }
@media only screen and (max-width: 480px) { .component-info .content .section-title { font-size: 2.1em; } }
@media only screen and (max-width: 768px) { .component-info .sidebar { float: none; margin-left: auto; margin-right: auto; }
  .component-info .sidebar .component-meta { margin-top: 30px; text-align: center; }
  .component-info .sidebar.sticky { position: relative; margin-top: 75px; }
  .component-info .content { float: none; width: 100%; } }
@media only screen and (max-width: 480px) { .component-info .content { margin-bottom: 0; } }

.spy-nav { margin-bottom: 10px; }
.spy-nav ul { list-style: none; }
.spy-nav a { padding-top: 9px; padding-bottom: 10px; height: auto; border-bottom: 1px solid #4B8B20; text-align: left; text-transform: none; font-size: 1.375em; line-height: normal; }
.spy-nav .active a { border-bottom-color: #fff; background: #fff; color: #17324f; }
.spy-nav select{ width: 100%; margin-bottom: 10px}

.main-wrapper { margin: 44px auto 44px; max-width: 600px; }
.main-wrapper label { display: block; margin-bottom: .75em; color: #3f4e5e; font-size: 1.25em; }
.main-wrapper .text-field { padding: 0 15px; width: 100%; height: 40px; border: 1px solid #CBD3DD; font-size: 1.125em; }
.main-wrapper ::-webkit-input-placeholder { color: #CBD3DD; font-style: italic; font-size: 18px; }
.main-wrapper :-moz-placeholder { color: #CBD3DD; font-style: italic; font-size: 18px; }
.main-wrapper ::-moz-placeholder { color: #CBD3DD; font-style: italic; font-size: 18px; }
.main-wrapper :-ms-input-placeholder { color: #CBD3DD; font-style: italic; font-size: 18px; }

.page-icon-wrapper:before, .page-icon-wrapper .logo-asp:before, .page-icon-wrapper .logo-hibernate:before, .page-icon-wrapper .logo-angularjs:before, .page-icon-wrapper .logo-requirejs:before, .page-icon-wrapper .logo-reward:before, .component-demo:before {background-repeat: no-repeat; background-size: 100%; width: 92px; height: 108px; position: absolute; left: 50%; margin-left: -46px; top: 0; bottom: auto; margin-top: -28px; content: ''; }

.container { width: 60em; margin-left: auto; margin-right: auto; }
.container:after { content: \" \"; display: block; clear: both; }
@media only screen and (max-width: 1024px) { .container { margin-left: 15px; margin-right: 15px; width: auto; } }

.bcms-clearfix:after {content: \"\"; visibility: hidden; display: block; height: 0; clear: both; }
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/ocramius/proxy-manager/doc-template/css/main.css";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("html { font-family: sans-serif; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%; }
body { margin: 0; }
[hidden], template { display: none; }
a { background: transparent; }
a:active, a:hover { outline: 0; }
h1 { font-size: 2em; margin: 0.67em 0; }
images { border: 0; }
svg:not(:root) { overflow: hidden; }
figure { margin: 1em 40px; }
hr { -moz-box-sizing: content-box; box-sizing: content-box; height: 0; }
pre { overflow: auto; }
code, kbd, pre, samp { font-family: 'Menlo', 'Monaco', monospace; font-size: 1em; }
button, input, optgroup, select, textarea { color: inherit; font: inherit; margin: 0; }
button { overflow: visible; }
button, select { text-transform: none; }
button, html input[type=\"button\"], input[type=\"reset\"], input[type=\"submit\"] { -webkit-appearance: button; cursor: pointer; }
h1, h2, h3, h4, h5, h6, p, ul, ol, li { margin: 0; padding: 0; line-height: normal; }
a { color: #31811D; text-decoration: none; }
a:hover { color: #2F611C; text-decoration: none; }
h3 { margin-bottom: 1em; color: #17324f; font-weight: 400; font-size: 3em; }
h4 { margin-bottom: 1em; font-weight: 400; font-size: 1.375em; }
p { margin-bottom: 1.5em; font-size: 1.125em; }
hr { margin: 2.5em 0; padding: 0; width: 100%; height: 3px; border: 0; background: #e6eaef; }
pre code { border-radius: 4px; font-size: 15px; padding: 20px; border: 1px solid #EBEBEB; }
.content h1 { padding-bottom: 12px; border-bottom: 1px solid #EFEFEF; margin-bottom: 20px; }
.main-nav ul li{ position: relative;}
.main-nav ul li{ position: relative;}
.main-nav ul li:hover { background: #2F611C;}
.main-nav ul li:hover > ul { display:block }
.main-nav ul li > ul { display:none; position: absolute; list-style: none; width: 100%; z-index: 9;}
.main-nav ul li > ul li a { color: #BFE5F1; display: block; background: #2F611C; padding: 20px;}
.main-nav ul li > ul li a:hover { background: #1C440C;}

/* Menu Sidebar*/
.button-block { padding-top: 15px; }
.button-block .btn-1 { margin-right: 6px; }
.btn, .spy-nav a { position: relative; display: inline-block; margin: 0; padding: 0 20px; height: 57px; border: 0; vertical-align: top; text-align: center; text-transform: uppercase; font-weight: 400; font-size: 1.125em; transitionP: all .2s; line-height: 57px; }
.btn.btn-action, .spy-nav a.btn-action { background: #ee2d4d; color: #fff; }
.btn.btn-action:hover, .spy-nav a.btn-action:hover { background: #bf0f2d; }
.btn.btn-default, .spy-nav a { background: #31811D; color: #fff; }
.btn.btn-default:hover, .spy-nav a:hover { background: #2F611C; color: #fff; }
.btn.btn-text, .spy-nav a.btn-text { color: #18324f; font-weight: 600; }
.btn.btn-full, .spy-nav a { display: block; }
@media only screen and (max-width: 480px) {
    .site-header{ position: fixed !important; top: 0; z-index: 999999}
    .page-title-wrapper{ margin-top: 70px;}
    .main-wrapper iframe{ width: 42% !important; float: left; margin-left: 8%;}
    .content iframe{width: 100%; height: 100%;}
}

.btn-top { position: relative; display: inline-block; float: right; margin: 20px 0 0; padding: 0 30px 0 50px; height: 57px; border: 2px solid #31811D; color: #31811D; vertical-align: top; text-align: center; text-transform: uppercase; font-weight: 600; font-size: 1.125em; line-height: 53px; transition: all .2s; }
.btn-top:before { background-position: 0 -140px; width: 52px; height: 52px; position: absolute; top: 0; left: 0; content: ''; }
@media only screen and (min-resolution: 2dppx), (-webkit-min-device-pixel-ratio: 2) { .btn-top:before { background-position: 0 -140px; background-size: 152px auto; width: 52px; height: 52px; } }
.btn-top:hover { border-color: #2F611C; color: #2F611C; }
@media only screen and (max-width: 768px) { .btn-top { float: none; margin-top: 0; margin-bottom: 30px; white-space: nowrap; } }
@media only screen and (max-width: 480px) { .btn-top { font-size: 0.9em; line-height: 46px; height: 48px; padding-right: 22px; padding-left: 47px; } }

.btn-download { float: right; padding-left: 50px; }
.btn-download:before { background-position: -18px -116px; width: 16px; height: 16px; position: absolute; top: 50%; left: 20px; margin-top: -7px; content: ''; }
@media only screen and (min-resolution: 2dppx), (-webkit-min-device-pixel-ratio: 2) { .btn-download:before { background-position: -18px -116px; background-size: 152px auto; width: 16px; height: 16px; } }

.btn-done { float: right; padding-left: 50px; }
.btn-done:before { background-position: 0 -116px; width: 18px; height: 14px; position: absolute; top: 50%; margin-top: -7px; left: 20px; content: ''; }
@media only screen and (min-resolution: 2dppx), (-webkit-min-device-pixel-ratio: 2) { .btn-done:before { background-position: 0 -116px; background-size: 152px auto; width: 18px; height: 13.5px; margin-top: -6.75px; } }

.btn-cancel { float: right; }

*, *:before, *:after { -moz-box-sizing: border-box; -webkit-box-sizing: border-box; box-sizing: border-box; }

html { -webkit-font-smoothing: antialiased; text-rendering: optimizeLegibility; min-width: 280px; }
@media only screen and (min-width: 64.063em) and (max-width: 90em) { html { min-width: 960px; } }

body { font-size: 16px; font-family: 'Source Sans Pro', sans-serif; min-width: 290px; }
@media only screen and (max-width: 480px) { body.page-home { background-image: none; } }

images { max-width: 100%; height: auto !important; }

input { -webkit-appearance: none; -webkit-border-radius: 0; border-radius: 0; }

main { overflow: hidden; }

.clearfix:after { content: \"\"; display: table; clear: both; }

.container { width: 60em; margin-left: auto; margin-right: auto; }
.container:after { content: \" \"; display: block; clear: both; }
@media only screen and (max-width: 1024px) { .container { margin-left: 15px; margin-right: 15px; width: auto; } }

.content ul { padding-left: 19px; list-style-type: square; margin-top: 15px; }

/* Menu top */
.main-nav { float: right; }
.fixed-wrapper .main-nav { display: none; }
.active .main-nav { display: block; }
.main-nav > ul { list-style: none; }
.main-nav > ul > li { float: left; }
.main-nav > ul > li > a { display: block; padding: 22px 30px; color: #fff; text-decoration: none; text-transform: uppercase; font-weight: 600; font-size: 1.375em; line-height: 29px; transition: all .2s; }
.main-nav > ul > li > a:hover { color: #bfe5f1; background-color: #2F611C; }
.main-nav > ul > li > a.active { background-color: #2F611C; color: #fff; }
.main-nav > ul > li > a.opened { background-color: #18324f; }
@media only screen and (max-width: 600px) { .main-nav { font-size: 0.86em; }
  .main-nav > ul > li > a { padding-left: 18px; padding-right: 18px; } }
@media only screen and (max-width: 480px) { .main-nav > ul > li > a { font-size: 0.95em; padding: 22px 6px; } }

.site-header { position: relative; width: 100%; background: #31811D; }
.site-header h1 { float: left; margin: 15px 0; }
.site-header h1 a { display: block; }
.site-header h1 images { display: block; max-height: 42px; }
@media only screen and (max-width: 480px) { .site-header h1 images { max-height: 42px; } }

.page-title-wrapper { position: relative; padding: 26px 0 55px; text-align: center; }
.page-title-wrapper .page-title { margin-top: 44px; color: #17324f; font-weight: 400; font-size: 3.75em; }
.page-title-wrapper .linguistics { padding: 0 2em 13px; border-bottom: 1px solid #D4DBE3; color: #18324f; text-transform: uppercase; font-weight: 400; font-size: 1.25em; }
@media only screen and (max-width: 768px) { .page-title-wrapper { font-size: 0.8em; } }
@media only screen and (max-width: 480px) { .page-title-wrapper { font-size: 0.65em; } }

.site-footer { margin-top: 20px; padding-top: 50px; padding-bottom: 50px; background: #18324f; color: #7c8ea3; text-align: center; }
.site-footer .container { position: relative; }
.footer-logos ul li{ list-style: none; display: inline-block;}
.footer-logos ul li a{ padding-left: 10px; padding-right: 10px}
.site-footer a{ color: white !important;}
.site-footer p { text-align: left; display: block; margin-bottom: 1.5em; font-size: 1.125em; }
@media only screen and (max-width: 1024px) { .site-footer p { margin-left: 0; } }
@media only screen and (max-width: 768px) { .site-footer p { text-align: center; margin-left: auto; } }
@media only screen and (max-width: 600px) { .site-footer { font-size: 0.9em; } }

.main-logo { display: block; float: left; margin: 30px 0; }
.fixed-wrapper .main-logo { display: none; }
.main-logo images { display: block; }
.main-logo figure { position: relative; margin: 0; max-width: 56px; }
.main-logo figcaption { position: absolute; width: 160px; top: 20px; left: 68px; }
.active .main-logo { display: block; margin: 0; }
.active .main-logo figure { max-width: 42px; }
.active .main-logo figcaption { width: 120px; top: 15px; left: 55px; }
@media only screen and (max-width: 480px) { .main-logo figcaption { display: none; } }

.container { width: 60em; margin-left: auto; margin-right: auto; }
.container:after { content: \" \"; display: block; clear: both; }
@media only screen and (max-width: 1024px) { .container { margin-left: 15px; margin-right: 15px; width: auto; } }

.component-demo { position: relative; padding: 1px 0 0; background: #e6eaef; }
.component-demo:before { background-image: url(\"../images/enf.png\"); }
@media only screen and (max-width: 480px) { .component-demo { padding: 40px 0 0; } }

.component-info .container { position: relative; }
.component-info .sidebar { width: 220px; float: left; margin-top: 75px; }
.component-info .sidebar .component-meta { margin-top: 10px; font-size: 1.125em; }
.component-info .sidebar .component-meta span { white-space: nowrap; margin-bottom: 10px; padding-left: 25px; color: #18324f; }
.component-info .sidebar.sticky { position: fixed; margin-top: 38px; }
.component-info .content { width: 64.58333333%; float: right; margin-top: 60px; margin-bottom: 75px; }
.component-info .content h3 { margin-bottom: .75em; font-size: 2.75em; }
.component-info .content p { margin-bottom: 1.75em; line-height: 1.45; }
@media only screen and (max-width: 480px) { .component-info .content .section-title { font-size: 2.1em; } }
@media only screen and (max-width: 768px) { .component-info .sidebar { float: none; margin-left: auto; margin-right: auto; }
  .component-info .sidebar .component-meta { margin-top: 30px; text-align: center; }
  .component-info .sidebar.sticky { position: relative; margin-top: 75px; }
  .component-info .content { float: none; width: 100%; } }
@media only screen and (max-width: 480px) { .component-info .content { margin-bottom: 0; } }

.spy-nav { margin-bottom: 10px; }
.spy-nav ul { list-style: none; }
.spy-nav a { padding-top: 9px; padding-bottom: 10px; height: auto; border-bottom: 1px solid #4B8B20; text-align: left; text-transform: none; font-size: 1.375em; line-height: normal; }
.spy-nav .active a { border-bottom-color: #fff; background: #fff; color: #17324f; }
.spy-nav select{ width: 100%; margin-bottom: 10px}

.main-wrapper { margin: 44px auto 44px; max-width: 600px; }
.main-wrapper label { display: block; margin-bottom: .75em; color: #3f4e5e; font-size: 1.25em; }
.main-wrapper .text-field { padding: 0 15px; width: 100%; height: 40px; border: 1px solid #CBD3DD; font-size: 1.125em; }
.main-wrapper ::-webkit-input-placeholder { color: #CBD3DD; font-style: italic; font-size: 18px; }
.main-wrapper :-moz-placeholder { color: #CBD3DD; font-style: italic; font-size: 18px; }
.main-wrapper ::-moz-placeholder { color: #CBD3DD; font-style: italic; font-size: 18px; }
.main-wrapper :-ms-input-placeholder { color: #CBD3DD; font-style: italic; font-size: 18px; }

.page-icon-wrapper:before, .page-icon-wrapper .logo-asp:before, .page-icon-wrapper .logo-hibernate:before, .page-icon-wrapper .logo-angularjs:before, .page-icon-wrapper .logo-requirejs:before, .page-icon-wrapper .logo-reward:before, .component-demo:before {background-repeat: no-repeat; background-size: 100%; width: 92px; height: 108px; position: absolute; left: 50%; margin-left: -46px; top: 0; bottom: auto; margin-top: -28px; content: ''; }

.container { width: 60em; margin-left: auto; margin-right: auto; }
.container:after { content: \" \"; display: block; clear: both; }
@media only screen and (max-width: 1024px) { .container { margin-left: 15px; margin-right: 15px; width: auto; } }

.bcms-clearfix:after {content: \"\"; visibility: hidden; display: block; height: 0; clear: both; }
", "vendor/ocramius/proxy-manager/doc-template/css/main.css", "/var/www/public/DevLaon/templates/vendor/ocramius/proxy-manager/doc-template/css/main.css");
    }
}
