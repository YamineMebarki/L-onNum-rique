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

/* vendor/symfony/property-info/Tests/Fixtures/DummyExtractor.php */
class __TwigTemplate_9d80582e706871bfcfdbdd2d64e7b03b97485e430183364e03c7b6e8d983b9e0 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/property-info/Tests/Fixtures/DummyExtractor.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/property-info/Tests/Fixtures/DummyExtractor.php"));

        // line 1
        echo "<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\\Component\\PropertyInfo\\Tests\\Fixtures;

use Symfony\\Component\\PropertyInfo\\PropertyAccessExtractorInterface;
use Symfony\\Component\\PropertyInfo\\PropertyDescriptionExtractorInterface;
use Symfony\\Component\\PropertyInfo\\PropertyInitializableExtractorInterface;
use Symfony\\Component\\PropertyInfo\\PropertyListExtractorInterface;
use Symfony\\Component\\PropertyInfo\\PropertyTypeExtractorInterface;
use Symfony\\Component\\PropertyInfo\\Type;

/**
 * @author Kévin Dunglas <dunglas@gmail.com>
 */
class DummyExtractor implements PropertyListExtractorInterface, PropertyDescriptionExtractorInterface, PropertyTypeExtractorInterface, PropertyAccessExtractorInterface, PropertyInitializableExtractorInterface
{
    /**
     * {@inheritdoc}
     */
    public function getShortDescription(\$class, \$property, array \$context = [])
    {
        return 'short';
    }

    /**
     * {@inheritdoc}
     */
    public function getLongDescription(\$class, \$property, array \$context = [])
    {
        return 'long';
    }

    /**
     * {@inheritdoc}
     */
    public function getTypes(\$class, \$property, array \$context = [])
    {
        return [new Type(Type::BUILTIN_TYPE_INT)];
    }

    /**
     * {@inheritdoc}
     */
    public function isReadable(\$class, \$property, array \$context = [])
    {
        return true;
    }

    /**
     * {@inheritdoc}
     */
    public function isWritable(\$class, \$property, array \$context = [])
    {
        return true;
    }

    /**
     * {@inheritdoc}
     */
    public function getProperties(\$class, array \$context = [])
    {
        return ['a', 'b'];
    }

    /**
     * {@inheritdoc}
     */
    public function isInitializable(string \$class, string \$property, array \$context = []): ?bool
    {
        return true;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/property-info/Tests/Fixtures/DummyExtractor.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\\Component\\PropertyInfo\\Tests\\Fixtures;

use Symfony\\Component\\PropertyInfo\\PropertyAccessExtractorInterface;
use Symfony\\Component\\PropertyInfo\\PropertyDescriptionExtractorInterface;
use Symfony\\Component\\PropertyInfo\\PropertyInitializableExtractorInterface;
use Symfony\\Component\\PropertyInfo\\PropertyListExtractorInterface;
use Symfony\\Component\\PropertyInfo\\PropertyTypeExtractorInterface;
use Symfony\\Component\\PropertyInfo\\Type;

/**
 * @author Kévin Dunglas <dunglas@gmail.com>
 */
class DummyExtractor implements PropertyListExtractorInterface, PropertyDescriptionExtractorInterface, PropertyTypeExtractorInterface, PropertyAccessExtractorInterface, PropertyInitializableExtractorInterface
{
    /**
     * {@inheritdoc}
     */
    public function getShortDescription(\$class, \$property, array \$context = [])
    {
        return 'short';
    }

    /**
     * {@inheritdoc}
     */
    public function getLongDescription(\$class, \$property, array \$context = [])
    {
        return 'long';
    }

    /**
     * {@inheritdoc}
     */
    public function getTypes(\$class, \$property, array \$context = [])
    {
        return [new Type(Type::BUILTIN_TYPE_INT)];
    }

    /**
     * {@inheritdoc}
     */
    public function isReadable(\$class, \$property, array \$context = [])
    {
        return true;
    }

    /**
     * {@inheritdoc}
     */
    public function isWritable(\$class, \$property, array \$context = [])
    {
        return true;
    }

    /**
     * {@inheritdoc}
     */
    public function getProperties(\$class, array \$context = [])
    {
        return ['a', 'b'];
    }

    /**
     * {@inheritdoc}
     */
    public function isInitializable(string \$class, string \$property, array \$context = []): ?bool
    {
        return true;
    }
}
", "vendor/symfony/property-info/Tests/Fixtures/DummyExtractor.php", "/var/www/public/DevLaon/templates/vendor/symfony/property-info/Tests/Fixtures/DummyExtractor.php");
    }
}
