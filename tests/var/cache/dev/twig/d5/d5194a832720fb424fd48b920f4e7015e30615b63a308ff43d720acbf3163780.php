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

/* vendor/symfony/translation/Tests/fixtures/resources-multi-files.xlf */
class __TwigTemplate_56362e2ea60306aed2f43b96ae11bc46b373f75efa23bc97862ab8a7efccd9df extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/translation/Tests/fixtures/resources-multi-files.xlf"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/translation/Tests/fixtures/resources-multi-files.xlf"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"utf-8\"?>
<xliff xmlns=\"urn:oasis:names:tc:xliff:document:1.2\" version=\"1.2\">
  <file source-language=\"en\" datatype=\"plaintext\" original=\"file.ext\">
    <body>
      <trans-unit id=\"1\">
        <source>foo</source>
        <target>bar</target>
      </trans-unit>
    </body>
  </file>
  <file source-language=\"en\" datatype=\"plaintext\" original=\"otherfile.ext\">
    <body>
      <trans-unit id=\"2\">
        <source>extra</source>
      </trans-unit>
      <trans-unit id=\"3\">
        <source>key</source>
        <target></target>
      </trans-unit>
      <trans-unit id=\"4\">
        <source>test</source>
        <target>with</target>
        <note>note</note>
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
        return "vendor/symfony/translation/Tests/fixtures/resources-multi-files.xlf";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?xml version=\"1.0\" encoding=\"utf-8\"?>
<xliff xmlns=\"urn:oasis:names:tc:xliff:document:1.2\" version=\"1.2\">
  <file source-language=\"en\" datatype=\"plaintext\" original=\"file.ext\">
    <body>
      <trans-unit id=\"1\">
        <source>foo</source>
        <target>bar</target>
      </trans-unit>
    </body>
  </file>
  <file source-language=\"en\" datatype=\"plaintext\" original=\"otherfile.ext\">
    <body>
      <trans-unit id=\"2\">
        <source>extra</source>
      </trans-unit>
      <trans-unit id=\"3\">
        <source>key</source>
        <target></target>
      </trans-unit>
      <trans-unit id=\"4\">
        <source>test</source>
        <target>with</target>
        <note>note</note>
      </trans-unit>
    </body>
  </file>
</xliff>
", "vendor/symfony/translation/Tests/fixtures/resources-multi-files.xlf", "/var/www/public/DevLaon/templates/vendor/symfony/translation/Tests/fixtures/resources-multi-files.xlf");
    }
}
