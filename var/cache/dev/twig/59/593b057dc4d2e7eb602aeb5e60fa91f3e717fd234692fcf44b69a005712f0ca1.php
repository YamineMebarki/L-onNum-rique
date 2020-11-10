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

/* sitemap.xml */
class __TwigTemplate_23dbfca0088ecb87c06534aaf9e265326b9a302384da8e1a8768a1cd3cd78ddb extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "sitemap.xml"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "sitemap.xml"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"UTF-8\"?>
<urlset
        xmlns=\"http://www.sitemaps.org/schemas/sitemap/0.9\"
        xmlns:xsi=\"http://www.w3.org/2001/XMLSchema-instance\"
        xsi:schemaLocation=\"http://www.sitemaps.org/schemas/sitemap/0.9
            http://www.sitemaps.org/schemas/sitemap/0.9/sitemap.xsd\">
    <url>
        <loc>http://laon-numérique.fr/</loc>
        <lastmod>2019-11-14T17:24:47+00:00</lastmod>
        <priority>1.00</priority>
    </url>
    <url>
        <loc>http://laon-numérique.fr/home</loc>
        <lastmod>2019-11-14T17:24:47+00:00</lastmod>
        <priority>0.80</priority>
    </url>
    <url>
        <loc>http://laon-numérique.fr/login</loc>
        <lastmod>2019-11-14T17:24:47+00:00</lastmod>
        <priority>0.80</priority>
    </url>
    <url>
        <loc>http://laon-numérique.fr/inscription</loc>
        <lastmod>2019-11-14T17:24:47+00:00</lastmod>
        <priority>0.80</priority>
    </url>
    <url>
        <loc>http://laon-numérique.fr/contact</loc>
        <lastmod>2019-11-14T17:24:47+00:00</lastmod>
        <priority>0.80</priority>
    </url>
</urlset>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "sitemap.xml";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?xml version=\"1.0\" encoding=\"UTF-8\"?>
<urlset
        xmlns=\"http://www.sitemaps.org/schemas/sitemap/0.9\"
        xmlns:xsi=\"http://www.w3.org/2001/XMLSchema-instance\"
        xsi:schemaLocation=\"http://www.sitemaps.org/schemas/sitemap/0.9
            http://www.sitemaps.org/schemas/sitemap/0.9/sitemap.xsd\">
    <url>
        <loc>http://laon-numérique.fr/</loc>
        <lastmod>2019-11-14T17:24:47+00:00</lastmod>
        <priority>1.00</priority>
    </url>
    <url>
        <loc>http://laon-numérique.fr/home</loc>
        <lastmod>2019-11-14T17:24:47+00:00</lastmod>
        <priority>0.80</priority>
    </url>
    <url>
        <loc>http://laon-numérique.fr/login</loc>
        <lastmod>2019-11-14T17:24:47+00:00</lastmod>
        <priority>0.80</priority>
    </url>
    <url>
        <loc>http://laon-numérique.fr/inscription</loc>
        <lastmod>2019-11-14T17:24:47+00:00</lastmod>
        <priority>0.80</priority>
    </url>
    <url>
        <loc>http://laon-numérique.fr/contact</loc>
        <lastmod>2019-11-14T17:24:47+00:00</lastmod>
        <priority>0.80</priority>
    </url>
</urlset>", "sitemap.xml", "/var/www/public/DevLaon/templates/sitemap.xml");
    }
}
