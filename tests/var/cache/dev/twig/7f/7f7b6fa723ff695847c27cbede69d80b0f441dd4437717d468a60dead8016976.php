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

/* vendor/symfony/translation/Tests/fixtures/encoding.xlf */
class __TwigTemplate_ae6ce6efd00b1e51e0c20a775462e30a2d8abdfc49b53d21ebdea3b6b7b6ecb5 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/translation/Tests/fixtures/encoding.xlf"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/translation/Tests/fixtures/encoding.xlf"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"ISO-8859-1\"?>
<xliff xmlns=\"urn:oasis:names:tc:xliff:document:1.2\" version=\"1.2\">
  <file source-language=\"en\" datatype=\"plaintext\" original=\"file.ext\">
    <body>
      <trans-unit id=\"1\" resname=\"foo\">
        <source>foo</source>
        <target>bär</target>
        <note>bäz</note>
      </trans-unit>
      <trans-unit id=\"2\" resname=\"bar\">
        <source>bar</source>
        <target>föö</target>
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
        return "vendor/symfony/translation/Tests/fixtures/encoding.xlf";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?xml version=\"1.0\" encoding=\"ISO-8859-1\"?>
<xliff xmlns=\"urn:oasis:names:tc:xliff:document:1.2\" version=\"1.2\">
  <file source-language=\"en\" datatype=\"plaintext\" original=\"file.ext\">
    <body>
      <trans-unit id=\"1\" resname=\"foo\">
        <source>foo</source>
        <target>bär</target>
        <note>bäz</note>
      </trans-unit>
      <trans-unit id=\"2\" resname=\"bar\">
        <source>bar</source>
        <target>föö</target>
      </trans-unit>
    </body>
  </file>
</xliff>
", "vendor/symfony/translation/Tests/fixtures/encoding.xlf", "/var/www/public/DevLaon/templates/vendor/symfony/translation/Tests/fixtures/encoding.xlf");
    }
}
