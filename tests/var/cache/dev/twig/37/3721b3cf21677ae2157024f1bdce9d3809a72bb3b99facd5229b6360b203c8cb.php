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

/* vendor/symfony/css-selector/Tests/XPath/Fixtures/ids.html */
class __TwigTemplate_d8ec75853f657203146ee363342e1db7e3ec0f18225e67de90c769f810629268 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/css-selector/Tests/XPath/Fixtures/ids.html"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/css-selector/Tests/XPath/Fixtures/ids.html"));

        // line 1
        echo "<html id=\"html\"><head>
  <link id=\"link-href\" href=\"foo\" />
  <link id=\"link-nohref\" />
</head><body>
<div id=\"outer-div\">
 <a id=\"name-anchor\" name=\"foo\"></a>
 <a id=\"tag-anchor\" rel=\"tag\" href=\"http://localhost/foo\">link</a>
 <a id=\"nofollow-anchor\" rel=\"nofollow\" href=\"https://example.org\">
    link</a>
 <ol id=\"first-ol\" class=\"a b c\">
   <li id=\"first-li\">content</li>
   <li id=\"second-li\" lang=\"En-us\">
     <div id=\"li-div\">
     </div>
   </li>
   <li id=\"third-li\" class=\"ab c\"></li>
   <li id=\"fourth-li\" class=\"ab
c\"></li>
   <li id=\"fifth-li\"></li>
   <li id=\"sixth-li\"></li>
   <li id=\"seventh-li\">  </li>
 </ol>
 <p id=\"paragraph\">
   <b id=\"p-b\">hi</b> <em id=\"p-em\">there</em>
   <b id=\"p-b2\">guy</b>
   <input type=\"checkbox\" id=\"checkbox-unchecked\" />
   <input type=\"checkbox\" id=\"checkbox-disabled\" disabled=\"\" />
   <input type=\"text\" id=\"text-checked\" checked=\"checked\" />
   <input type=\"hidden\" />
   <input type=\"hidden\" disabled=\"disabled\" />
   <input type=\"checkbox\" id=\"checkbox-checked\" checked=\"checked\" />
   <input type=\"checkbox\" id=\"checkbox-disabled-checked\"
          disabled=\"disabled\" checked=\"checked\" />
   <fieldset id=\"fieldset\" disabled=\"disabled\">
     <input type=\"checkbox\" id=\"checkbox-fieldset-disabled\" />
     <input type=\"hidden\" />
   </fieldset>
 </p>
 <ol id=\"second-ol\">
 </ol>
 <map name=\"dummymap\">
   <area shape=\"circle\" coords=\"200,250,25\" href=\"foo.html\" id=\"area-href\" />
   <area shape=\"default\" id=\"area-nohref\" />
 </map>
</div>
<div id=\"foobar-div\" foobar=\"ab bc
cde\"><span id=\"foobar-span\"></span></div>
</body></html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/css-selector/Tests/XPath/Fixtures/ids.html";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<html id=\"html\"><head>
  <link id=\"link-href\" href=\"foo\" />
  <link id=\"link-nohref\" />
</head><body>
<div id=\"outer-div\">
 <a id=\"name-anchor\" name=\"foo\"></a>
 <a id=\"tag-anchor\" rel=\"tag\" href=\"http://localhost/foo\">link</a>
 <a id=\"nofollow-anchor\" rel=\"nofollow\" href=\"https://example.org\">
    link</a>
 <ol id=\"first-ol\" class=\"a b c\">
   <li id=\"first-li\">content</li>
   <li id=\"second-li\" lang=\"En-us\">
     <div id=\"li-div\">
     </div>
   </li>
   <li id=\"third-li\" class=\"ab c\"></li>
   <li id=\"fourth-li\" class=\"ab
c\"></li>
   <li id=\"fifth-li\"></li>
   <li id=\"sixth-li\"></li>
   <li id=\"seventh-li\">  </li>
 </ol>
 <p id=\"paragraph\">
   <b id=\"p-b\">hi</b> <em id=\"p-em\">there</em>
   <b id=\"p-b2\">guy</b>
   <input type=\"checkbox\" id=\"checkbox-unchecked\" />
   <input type=\"checkbox\" id=\"checkbox-disabled\" disabled=\"\" />
   <input type=\"text\" id=\"text-checked\" checked=\"checked\" />
   <input type=\"hidden\" />
   <input type=\"hidden\" disabled=\"disabled\" />
   <input type=\"checkbox\" id=\"checkbox-checked\" checked=\"checked\" />
   <input type=\"checkbox\" id=\"checkbox-disabled-checked\"
          disabled=\"disabled\" checked=\"checked\" />
   <fieldset id=\"fieldset\" disabled=\"disabled\">
     <input type=\"checkbox\" id=\"checkbox-fieldset-disabled\" />
     <input type=\"hidden\" />
   </fieldset>
 </p>
 <ol id=\"second-ol\">
 </ol>
 <map name=\"dummymap\">
   <area shape=\"circle\" coords=\"200,250,25\" href=\"foo.html\" id=\"area-href\" />
   <area shape=\"default\" id=\"area-nohref\" />
 </map>
</div>
<div id=\"foobar-div\" foobar=\"ab bc
cde\"><span id=\"foobar-span\"></span></div>
</body></html>
", "vendor/symfony/css-selector/Tests/XPath/Fixtures/ids.html", "/var/www/public/DevLaon/templates/vendor/symfony/css-selector/Tests/XPath/Fixtures/ids.html");
    }
}
