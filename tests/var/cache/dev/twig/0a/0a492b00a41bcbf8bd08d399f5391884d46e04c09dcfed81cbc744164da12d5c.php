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

/* vendor/doctrine/migrations/lib/Doctrine/Migrations/Generator/Exception/InvalidTemplateSpecified.php */
class __TwigTemplate_4d645f42d77848fa2183f6cea2b81314a6c0384946914cf6a47f839a7583d4e0 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/migrations/lib/Doctrine/Migrations/Generator/Exception/InvalidTemplateSpecified.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/migrations/lib/Doctrine/Migrations/Generator/Exception/InvalidTemplateSpecified.php"));

        // line 1
        echo "<?php

declare(strict_types=1);

namespace Doctrine\\Migrations\\Generator\\Exception;

use InvalidArgumentException;
use function sprintf;

final class InvalidTemplateSpecified extends InvalidArgumentException implements GeneratorException
{
    public static function notFoundOrNotReadable(string \$path) : self
    {
        return new self(sprintf('The specified template \"%s\" cannot be found or is not readable.', \$path));
    }

    public static function notReadable(string \$path) : self
    {
        return new self(sprintf('The specified template \"%s\" could not be read.', \$path));
    }

    public static function empty(string \$path) : self
    {
        return new self(sprintf('The specified template \"%s\" is empty.', \$path));
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/doctrine/migrations/lib/Doctrine/Migrations/Generator/Exception/InvalidTemplateSpecified.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

declare(strict_types=1);

namespace Doctrine\\Migrations\\Generator\\Exception;

use InvalidArgumentException;
use function sprintf;

final class InvalidTemplateSpecified extends InvalidArgumentException implements GeneratorException
{
    public static function notFoundOrNotReadable(string \$path) : self
    {
        return new self(sprintf('The specified template \"%s\" cannot be found or is not readable.', \$path));
    }

    public static function notReadable(string \$path) : self
    {
        return new self(sprintf('The specified template \"%s\" could not be read.', \$path));
    }

    public static function empty(string \$path) : self
    {
        return new self(sprintf('The specified template \"%s\" is empty.', \$path));
    }
}
", "vendor/doctrine/migrations/lib/Doctrine/Migrations/Generator/Exception/InvalidTemplateSpecified.php", "/var/www/public/DevLaon/templates/vendor/doctrine/migrations/lib/Doctrine/Migrations/Generator/Exception/InvalidTemplateSpecified.php");
    }
}
