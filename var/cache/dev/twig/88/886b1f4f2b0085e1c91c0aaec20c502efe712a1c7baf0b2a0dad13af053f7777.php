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

/* vendor/symfony/security-core/Resources/translations/security.en.xlf */
class __TwigTemplate_831893b7aada4faf0d4f3450676416ae8558280bd1e97aa15a6980801c9e5cfd extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/security-core/Resources/translations/security.en.xlf"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/security-core/Resources/translations/security.en.xlf"));

        // line 1
        echo "<?xml version=\"1.0\"?>
<xliff version=\"1.2\" xmlns=\"urn:oasis:names:tc:xliff:document:1.2\">
    <file source-language=\"en\" datatype=\"plaintext\" original=\"file.ext\">
        <body>
            <trans-unit id=\"1\">
                <source>An authentication exception occurred.</source>
                <target>An authentication exception occurred.</target>
            </trans-unit>
            <trans-unit id=\"2\">
                <source>Authentication credentials could not be found.</source>
                <target>Authentication credentials could not be found.</target>
            </trans-unit>
            <trans-unit id=\"3\">
                <source>Authentication request could not be processed due to a system problem.</source>
                <target>Authentication request could not be processed due to a system problem.</target>
            </trans-unit>
            <trans-unit id=\"4\">
                <source>Invalid credentials.</source>
                <target>Invalid credentials.</target>
            </trans-unit>
            <trans-unit id=\"5\">
                <source>Cookie has already been used by someone else.</source>
                <target>Cookie has already been used by someone else.</target>
            </trans-unit>
            <trans-unit id=\"6\">
                <source>Not privileged to request the resource.</source>
                <target>Not privileged to request the resource.</target>
            </trans-unit>
            <trans-unit id=\"7\">
                <source>Invalid CSRF token.</source>
                <target>Invalid CSRF token.</target>
            </trans-unit>
            <trans-unit id=\"9\">
                <source>No authentication provider found to support the authentication token.</source>
                <target>No authentication provider found to support the authentication token.</target>
            </trans-unit>
            <trans-unit id=\"10\">
                <source>No session available, it either timed out or cookies are not enabled.</source>
                <target>No session available, it either timed out or cookies are not enabled.</target>
            </trans-unit>
            <trans-unit id=\"11\">
                <source>No token could be found.</source>
                <target>No token could be found.</target>
            </trans-unit>
            <trans-unit id=\"12\">
                <source>Username could not be found.</source>
                <target>Username could not be found.</target>
            </trans-unit>
            <trans-unit id=\"13\">
                <source>Account has expired.</source>
                <target>Account has expired.</target>
            </trans-unit>
            <trans-unit id=\"14\">
                <source>Credentials have expired.</source>
                <target>Credentials have expired.</target>
            </trans-unit>
            <trans-unit id=\"15\">
                <source>Account is disabled.</source>
                <target>Account is disabled.</target>
            </trans-unit>
            <trans-unit id=\"16\">
                <source>Account is locked.</source>
                <target>Account is locked.</target>
            </trans-unit>
        </body>
    </file>
</xliff>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/security-core/Resources/translations/security.en.xlf";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?xml version=\"1.0\"?>
<xliff version=\"1.2\" xmlns=\"urn:oasis:names:tc:xliff:document:1.2\">
    <file source-language=\"en\" datatype=\"plaintext\" original=\"file.ext\">
        <body>
            <trans-unit id=\"1\">
                <source>An authentication exception occurred.</source>
                <target>An authentication exception occurred.</target>
            </trans-unit>
            <trans-unit id=\"2\">
                <source>Authentication credentials could not be found.</source>
                <target>Authentication credentials could not be found.</target>
            </trans-unit>
            <trans-unit id=\"3\">
                <source>Authentication request could not be processed due to a system problem.</source>
                <target>Authentication request could not be processed due to a system problem.</target>
            </trans-unit>
            <trans-unit id=\"4\">
                <source>Invalid credentials.</source>
                <target>Invalid credentials.</target>
            </trans-unit>
            <trans-unit id=\"5\">
                <source>Cookie has already been used by someone else.</source>
                <target>Cookie has already been used by someone else.</target>
            </trans-unit>
            <trans-unit id=\"6\">
                <source>Not privileged to request the resource.</source>
                <target>Not privileged to request the resource.</target>
            </trans-unit>
            <trans-unit id=\"7\">
                <source>Invalid CSRF token.</source>
                <target>Invalid CSRF token.</target>
            </trans-unit>
            <trans-unit id=\"9\">
                <source>No authentication provider found to support the authentication token.</source>
                <target>No authentication provider found to support the authentication token.</target>
            </trans-unit>
            <trans-unit id=\"10\">
                <source>No session available, it either timed out or cookies are not enabled.</source>
                <target>No session available, it either timed out or cookies are not enabled.</target>
            </trans-unit>
            <trans-unit id=\"11\">
                <source>No token could be found.</source>
                <target>No token could be found.</target>
            </trans-unit>
            <trans-unit id=\"12\">
                <source>Username could not be found.</source>
                <target>Username could not be found.</target>
            </trans-unit>
            <trans-unit id=\"13\">
                <source>Account has expired.</source>
                <target>Account has expired.</target>
            </trans-unit>
            <trans-unit id=\"14\">
                <source>Credentials have expired.</source>
                <target>Credentials have expired.</target>
            </trans-unit>
            <trans-unit id=\"15\">
                <source>Account is disabled.</source>
                <target>Account is disabled.</target>
            </trans-unit>
            <trans-unit id=\"16\">
                <source>Account is locked.</source>
                <target>Account is locked.</target>
            </trans-unit>
        </body>
    </file>
</xliff>
", "vendor/symfony/security-core/Resources/translations/security.en.xlf", "/var/www/public/DevLaon/templates/vendor/symfony/security-core/Resources/translations/security.en.xlf");
    }
}
