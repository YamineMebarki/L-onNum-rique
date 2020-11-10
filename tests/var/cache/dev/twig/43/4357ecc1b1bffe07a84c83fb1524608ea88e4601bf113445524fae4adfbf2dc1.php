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

/* vendor/symfony/translation/Tests/fixtures/withnote.xlf */
class __TwigTemplate_36e3c174a89e264454527ef243450dcdf550bd5ae065864f8ff1cffcbdfa7426 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/translation/Tests/fixtures/withnote.xlf"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/translation/Tests/fixtures/withnote.xlf"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"utf-8\"?>
<xliff xmlns=\"urn:oasis:names:tc:xliff:document:1.2\" version=\"1.2\">
  <file source-language=\"en\" datatype=\"plaintext\" original=\"file.ext\">
    <body>
      <trans-unit id=\"1\">
        <source>foo</source>
        <target>bar</target>
        <note priority=\"1\">foo</note>
      </trans-unit>
      <trans-unit id=\"2\" resname=\"extra\">
        <source>extrasource</source>
        <note from=\"foo\">bar</note>
      </trans-unit>
      <trans-unit id=\"123\">
        <source>key</source>
        <target></target>
        <note>baz</note>
        <note priority=\"2\" from=\"bar\">qux</note>
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
        return "vendor/symfony/translation/Tests/fixtures/withnote.xlf";
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
        <note priority=\"1\">foo</note>
      </trans-unit>
      <trans-unit id=\"2\" resname=\"extra\">
        <source>extrasource</source>
        <note from=\"foo\">bar</note>
      </trans-unit>
      <trans-unit id=\"123\">
        <source>key</source>
        <target></target>
        <note>baz</note>
        <note priority=\"2\" from=\"bar\">qux</note>
      </trans-unit>
    </body>
  </file>
</xliff>
", "vendor/symfony/translation/Tests/fixtures/withnote.xlf", "/var/www/public/DevLaon/templates/vendor/symfony/translation/Tests/fixtures/withnote.xlf");
    }
}
