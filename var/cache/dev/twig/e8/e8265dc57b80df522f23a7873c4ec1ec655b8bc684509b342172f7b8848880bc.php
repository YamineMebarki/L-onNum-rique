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

/* vendor/symfony/dependency-injection/Tests/Fixtures/includes/createphar.php */
class __TwigTemplate_2bd59fe9926084f52e2616d9a57f52530818c91455f4d23591260e5b883a13cf extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/dependency-injection/Tests/Fixtures/includes/createphar.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/dependency-injection/Tests/Fixtures/includes/createphar.php"));

        // line 1
        echo "<?php

\$file = __DIR__.'/ProjectWithXsdExtensionInPhar.phar';
if (is_file(\$file)) {
    @unlink(\$file);
}

\$phar = new Phar(\$file, 0, 'ProjectWithXsdExtensionInPhar.phar');
\$phar->addFromString('ProjectWithXsdExtensionInPhar.php', <<<'EOT'
<?php

class ProjectWithXsdExtensionInPhar extends ProjectExtension
{
    public function getXsdValidationBasePath()
    {
        return __DIR__.'/schema';
    }

    public function getNamespace()
    {
        return 'http://www.example.com/schema/projectwithxsdinphar';
    }

    public function getAlias()
    {
        return 'projectwithxsdinphar';
    }
}
EOT
);
\$phar->addFromString('schema/project-1.0.xsd', <<<'EOT'
<?xml version=\"1.0\" encoding=\"UTF-8\" ?>

<xsd:schema xmlns=\"http://www.example.com/schema/projectwithxsdinphar\"
    xmlns:xsd=\"http://www.w3.org/2001/XMLSchema\"
    targetNamespace=\"http://www.example.com/schema/projectwithxsdinphar\"
    elementFormDefault=\"qualified\">

  <xsd:element name=\"bar\" type=\"bar\" />

  <xsd:complexType name=\"bar\">
    <xsd:attribute name=\"foo\" type=\"xsd:string\" />
  </xsd:complexType>
</xsd:schema>
EOT
);
\$phar->setStub('<?php Phar::mapPhar(\"ProjectWithXsdExtensionInPhar.phar\"); require_once \"phar://ProjectWithXsdExtensionInPhar.phar/ProjectWithXsdExtensionInPhar.php\"; __HALT_COMPILER(); ?>');
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/dependency-injection/Tests/Fixtures/includes/createphar.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

\$file = __DIR__.'/ProjectWithXsdExtensionInPhar.phar';
if (is_file(\$file)) {
    @unlink(\$file);
}

\$phar = new Phar(\$file, 0, 'ProjectWithXsdExtensionInPhar.phar');
\$phar->addFromString('ProjectWithXsdExtensionInPhar.php', <<<'EOT'
<?php

class ProjectWithXsdExtensionInPhar extends ProjectExtension
{
    public function getXsdValidationBasePath()
    {
        return __DIR__.'/schema';
    }

    public function getNamespace()
    {
        return 'http://www.example.com/schema/projectwithxsdinphar';
    }

    public function getAlias()
    {
        return 'projectwithxsdinphar';
    }
}
EOT
);
\$phar->addFromString('schema/project-1.0.xsd', <<<'EOT'
<?xml version=\"1.0\" encoding=\"UTF-8\" ?>

<xsd:schema xmlns=\"http://www.example.com/schema/projectwithxsdinphar\"
    xmlns:xsd=\"http://www.w3.org/2001/XMLSchema\"
    targetNamespace=\"http://www.example.com/schema/projectwithxsdinphar\"
    elementFormDefault=\"qualified\">

  <xsd:element name=\"bar\" type=\"bar\" />

  <xsd:complexType name=\"bar\">
    <xsd:attribute name=\"foo\" type=\"xsd:string\" />
  </xsd:complexType>
</xsd:schema>
EOT
);
\$phar->setStub('<?php Phar::mapPhar(\"ProjectWithXsdExtensionInPhar.phar\"); require_once \"phar://ProjectWithXsdExtensionInPhar.phar/ProjectWithXsdExtensionInPhar.php\"; __HALT_COMPILER(); ?>');
", "vendor/symfony/dependency-injection/Tests/Fixtures/includes/createphar.php", "/var/www/public/DevLaon/templates/vendor/symfony/dependency-injection/Tests/Fixtures/includes/createphar.php");
    }
}
