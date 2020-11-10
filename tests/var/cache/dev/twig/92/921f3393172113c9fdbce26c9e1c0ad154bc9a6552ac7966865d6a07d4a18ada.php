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

/* vendor/symfony/property-info/Tests/Fixtures/NullExtractor.php */
class __TwigTemplate_e86940f1da7b3440718cd357112cb44c58e4ed0f15c256a7a6da4cf0991693ce extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/property-info/Tests/Fixtures/NullExtractor.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/property-info/Tests/Fixtures/NullExtractor.php"));

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

/**
 * Not able to guess anything.
 *
 * @author Kévin Dunglas <dunglas@gmail.com>
 */
class NullExtractor implements PropertyListExtractorInterface, PropertyDescriptionExtractorInterface, PropertyTypeExtractorInterface, PropertyAccessExtractorInterface, PropertyInitializableExtractorInterface
{
    /**
     * {@inheritdoc}
     */
    public function getShortDescription(\$class, \$property, array \$context = [])
    {
        \$this->assertIsString(\$class);
        \$this->assertIsString(\$property);

        return null;
    }

    /**
     * {@inheritdoc}
     */
    public function getLongDescription(\$class, \$property, array \$context = [])
    {
        \$this->assertIsString(\$class);
        \$this->assertIsString(\$property);

        return null;
    }

    /**
     * {@inheritdoc}
     */
    public function getTypes(\$class, \$property, array \$context = [])
    {
        \$this->assertIsString(\$class);
        \$this->assertIsString(\$property);

        return null;
    }

    /**
     * {@inheritdoc}
     */
    public function isReadable(\$class, \$property, array \$context = [])
    {
        \$this->assertIsString(\$class);
        \$this->assertIsString(\$property);

        return null;
    }

    /**
     * {@inheritdoc}
     */
    public function isWritable(\$class, \$property, array \$context = [])
    {
        \$this->assertIsString(\$class);
        \$this->assertIsString(\$property);

        return null;
    }

    /**
     * {@inheritdoc}
     */
    public function getProperties(\$class, array \$context = [])
    {
        \$this->assertIsString(\$class);

        return null;
    }

    /**
     * {@inheritdoc}
     */
    public function isInitializable(string \$class, string \$property, array \$context = []): ?bool
    {
        return null;
    }

    private function assertIsString(\$string)
    {
        if (!\\is_string(\$string)) {
            throw new \\InvalidArgumentException(sprintf('\"%s\" expects strings, given \"%s\".', __CLASS__, \\gettype(\$string)));
        }
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/property-info/Tests/Fixtures/NullExtractor.php";
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

/**
 * Not able to guess anything.
 *
 * @author Kévin Dunglas <dunglas@gmail.com>
 */
class NullExtractor implements PropertyListExtractorInterface, PropertyDescriptionExtractorInterface, PropertyTypeExtractorInterface, PropertyAccessExtractorInterface, PropertyInitializableExtractorInterface
{
    /**
     * {@inheritdoc}
     */
    public function getShortDescription(\$class, \$property, array \$context = [])
    {
        \$this->assertIsString(\$class);
        \$this->assertIsString(\$property);

        return null;
    }

    /**
     * {@inheritdoc}
     */
    public function getLongDescription(\$class, \$property, array \$context = [])
    {
        \$this->assertIsString(\$class);
        \$this->assertIsString(\$property);

        return null;
    }

    /**
     * {@inheritdoc}
     */
    public function getTypes(\$class, \$property, array \$context = [])
    {
        \$this->assertIsString(\$class);
        \$this->assertIsString(\$property);

        return null;
    }

    /**
     * {@inheritdoc}
     */
    public function isReadable(\$class, \$property, array \$context = [])
    {
        \$this->assertIsString(\$class);
        \$this->assertIsString(\$property);

        return null;
    }

    /**
     * {@inheritdoc}
     */
    public function isWritable(\$class, \$property, array \$context = [])
    {
        \$this->assertIsString(\$class);
        \$this->assertIsString(\$property);

        return null;
    }

    /**
     * {@inheritdoc}
     */
    public function getProperties(\$class, array \$context = [])
    {
        \$this->assertIsString(\$class);

        return null;
    }

    /**
     * {@inheritdoc}
     */
    public function isInitializable(string \$class, string \$property, array \$context = []): ?bool
    {
        return null;
    }

    private function assertIsString(\$string)
    {
        if (!\\is_string(\$string)) {
            throw new \\InvalidArgumentException(sprintf('\"%s\" expects strings, given \"%s\".', __CLASS__, \\gettype(\$string)));
        }
    }
}
", "vendor/symfony/property-info/Tests/Fixtures/NullExtractor.php", "/var/www/public/DevLaon/templates/vendor/symfony/property-info/Tests/Fixtures/NullExtractor.php");
    }
}
