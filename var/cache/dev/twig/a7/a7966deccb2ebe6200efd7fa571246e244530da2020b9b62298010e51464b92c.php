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

/* vendor/symfony/form/Resources/translations/validators.tl.xlf */
class __TwigTemplate_01ae1742e2e10443284380e85123917f114af6bcc1db3742a2a4ab7559805c90 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/form/Resources/translations/validators.tl.xlf"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/form/Resources/translations/validators.tl.xlf"));

        // line 1
        echo "<?xml version=\"1.0\"?>
<xliff version=\"1.2\" xmlns=\"urn:oasis:names:tc:xliff:document:1.2\">
    <file source-language=\"en\" datatype=\"plaintext\" original=\"file.ext\">
        <body>
            <trans-unit id=\"28\">
                <source>This form should not contain extra fields.</source>
                <target>Ang pormang itong ay hindi dapat magkarron ng dagdag na mga patlang.</target>
            </trans-unit>
            <trans-unit id=\"29\">
                <source>The uploaded file was too large. Please try to upload a smaller file.</source>
                <target>Ang ini-upload na file ay masyadong malaki. Pakiulit muling mag-upload ng mas maliit na file.</target>
            </trans-unit>
            <trans-unit id=\"30\">
                <source>The CSRF token is invalid. Please try to resubmit the form.</source>
                <target>Hindi balido ang CSRF token. Maagpasa muli ng isang pang porma.</target>
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
        return "vendor/symfony/form/Resources/translations/validators.tl.xlf";
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
            <trans-unit id=\"28\">
                <source>This form should not contain extra fields.</source>
                <target>Ang pormang itong ay hindi dapat magkarron ng dagdag na mga patlang.</target>
            </trans-unit>
            <trans-unit id=\"29\">
                <source>The uploaded file was too large. Please try to upload a smaller file.</source>
                <target>Ang ini-upload na file ay masyadong malaki. Pakiulit muling mag-upload ng mas maliit na file.</target>
            </trans-unit>
            <trans-unit id=\"30\">
                <source>The CSRF token is invalid. Please try to resubmit the form.</source>
                <target>Hindi balido ang CSRF token. Maagpasa muli ng isang pang porma.</target>
            </trans-unit>
        </body>
    </file>
</xliff>
", "vendor/symfony/form/Resources/translations/validators.tl.xlf", "/var/www/public/DevLaon/templates/vendor/symfony/form/Resources/translations/validators.tl.xlf");
    }
}
