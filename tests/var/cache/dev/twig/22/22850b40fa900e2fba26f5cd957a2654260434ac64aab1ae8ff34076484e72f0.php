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

/* vendor/symfony/maker-bundle/src/Util/ClassDetails.php */
class __TwigTemplate_e98d398344df8b89b04e1aebb60dc0e365d89cb5beacf8f47bc33fc3bfd6b7ae extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/maker-bundle/src/Util/ClassDetails.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/maker-bundle/src/Util/ClassDetails.php"));

        // line 1
        echo "<?php

/*
 * This file is part of the Symfony MakerBundle package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\\Bundle\\MakerBundle\\Util;

/**
 * @internal
 */
final class ClassDetails
{
    private \$fullClassName;

    public function __construct(string \$fullClassName)
    {
        \$this->fullClassName = \$fullClassName;
    }

    /**
     * Get list of property names except \"id\" for use in a make:form context.
     */
    public function getFormFields(): array
    {
        \$properties = \$this->getProperties();

        \$fields = array_diff(\$properties, ['id']);

        \$fieldsWithTypes = [];
        foreach (\$fields as \$field) {
            \$fieldsWithTypes[\$field] = null;
        }

        return \$fieldsWithTypes;
    }

    private function getProperties(): array
    {
        \$reflect = new \\ReflectionClass(\$this->fullClassName);
        \$props = \$reflect->getProperties();

        \$propertiesList = [];

        foreach (\$props as \$prop) {
            \$propertiesList[] = \$prop->getName();
        }

        return \$propertiesList;
    }

    public function getPath(): string
    {
        return (new \\ReflectionClass(\$this->fullClassName))->getFileName();
    }

    /**
     * An imperfect, but simple way to check for the presence of an annotation.
     *
     * @param string \$annotation The annotation - e.g. @UniqueEntity
     */
    public function doesDocBlockContainAnnotation(string \$annotation): bool
    {
        \$docComment = (new \\ReflectionClass(\$this->fullClassName))->getDocComment();

        if (false === \$docComment) {
            return false;
        }

        return false !== strpos(\$docComment, \$annotation);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/maker-bundle/src/Util/ClassDetails.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

/*
 * This file is part of the Symfony MakerBundle package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\\Bundle\\MakerBundle\\Util;

/**
 * @internal
 */
final class ClassDetails
{
    private \$fullClassName;

    public function __construct(string \$fullClassName)
    {
        \$this->fullClassName = \$fullClassName;
    }

    /**
     * Get list of property names except \"id\" for use in a make:form context.
     */
    public function getFormFields(): array
    {
        \$properties = \$this->getProperties();

        \$fields = array_diff(\$properties, ['id']);

        \$fieldsWithTypes = [];
        foreach (\$fields as \$field) {
            \$fieldsWithTypes[\$field] = null;
        }

        return \$fieldsWithTypes;
    }

    private function getProperties(): array
    {
        \$reflect = new \\ReflectionClass(\$this->fullClassName);
        \$props = \$reflect->getProperties();

        \$propertiesList = [];

        foreach (\$props as \$prop) {
            \$propertiesList[] = \$prop->getName();
        }

        return \$propertiesList;
    }

    public function getPath(): string
    {
        return (new \\ReflectionClass(\$this->fullClassName))->getFileName();
    }

    /**
     * An imperfect, but simple way to check for the presence of an annotation.
     *
     * @param string \$annotation The annotation - e.g. @UniqueEntity
     */
    public function doesDocBlockContainAnnotation(string \$annotation): bool
    {
        \$docComment = (new \\ReflectionClass(\$this->fullClassName))->getDocComment();

        if (false === \$docComment) {
            return false;
        }

        return false !== strpos(\$docComment, \$annotation);
    }
}
", "vendor/symfony/maker-bundle/src/Util/ClassDetails.php", "/var/www/public/DevLaon/templates/vendor/symfony/maker-bundle/src/Util/ClassDetails.php");
    }
}
