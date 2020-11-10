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

/* vendor/symfony/doctrine-bridge/Tests/PropertyInfo/Fixtures/DoctrineFooType.php */
class __TwigTemplate_26e44f371952dca5f3116d5bbc80bc4d479a47468fc2a3af4d48b8407725ceee extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/doctrine-bridge/Tests/PropertyInfo/Fixtures/DoctrineFooType.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/doctrine-bridge/Tests/PropertyInfo/Fixtures/DoctrineFooType.php"));

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

namespace Symfony\\Bridge\\Doctrine\\Tests\\PropertyInfo\\Fixtures;

use Doctrine\\DBAL\\Platforms\\AbstractPlatform;
use Doctrine\\DBAL\\Types\\ConversionException;
use Doctrine\\DBAL\\Types\\Type;

/**
 * @author Teoh Han Hui <teohhanhui@gmail.com>
 */
class DoctrineFooType extends Type
{
    /**
     * Type name.
     */
    const NAME = 'foo';

    /**
     * {@inheritdoc}
     */
    public function getName()
    {
        return self::NAME;
    }

    /**
     * {@inheritdoc}
     */
    public function getSQLDeclaration(array \$fieldDeclaration, AbstractPlatform \$platform)
    {
        return \$platform->getClobTypeDeclarationSQL([]);
    }

    /**
     * {@inheritdoc}
     */
    public function convertToDatabaseValue(\$value, AbstractPlatform \$platform)
    {
        if (null === \$value) {
            return null;
        }
        if (!\$value instanceof Foo) {
            throw new ConversionException(sprintf('Expected %s, got %s', 'Symfony\\Bridge\\Doctrine\\Tests\\PropertyInfo\\Fixtures\\Foo', \\gettype(\$value)));
        }

        return \$foo->bar;
    }

    /**
     * {@inheritdoc}
     */
    public function convertToPHPValue(\$value, AbstractPlatform \$platform)
    {
        if (null === \$value) {
            return null;
        }
        if (!\\is_string(\$value)) {
            throw ConversionException::conversionFailed(\$value, self::NAME);
        }

        \$foo = new Foo();
        \$foo->bar = \$value;

        return \$foo;
    }

    /**
     * {@inheritdoc}
     */
    public function requiresSQLCommentHint(AbstractPlatform \$platform)
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
        return "vendor/symfony/doctrine-bridge/Tests/PropertyInfo/Fixtures/DoctrineFooType.php";
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

namespace Symfony\\Bridge\\Doctrine\\Tests\\PropertyInfo\\Fixtures;

use Doctrine\\DBAL\\Platforms\\AbstractPlatform;
use Doctrine\\DBAL\\Types\\ConversionException;
use Doctrine\\DBAL\\Types\\Type;

/**
 * @author Teoh Han Hui <teohhanhui@gmail.com>
 */
class DoctrineFooType extends Type
{
    /**
     * Type name.
     */
    const NAME = 'foo';

    /**
     * {@inheritdoc}
     */
    public function getName()
    {
        return self::NAME;
    }

    /**
     * {@inheritdoc}
     */
    public function getSQLDeclaration(array \$fieldDeclaration, AbstractPlatform \$platform)
    {
        return \$platform->getClobTypeDeclarationSQL([]);
    }

    /**
     * {@inheritdoc}
     */
    public function convertToDatabaseValue(\$value, AbstractPlatform \$platform)
    {
        if (null === \$value) {
            return null;
        }
        if (!\$value instanceof Foo) {
            throw new ConversionException(sprintf('Expected %s, got %s', 'Symfony\\Bridge\\Doctrine\\Tests\\PropertyInfo\\Fixtures\\Foo', \\gettype(\$value)));
        }

        return \$foo->bar;
    }

    /**
     * {@inheritdoc}
     */
    public function convertToPHPValue(\$value, AbstractPlatform \$platform)
    {
        if (null === \$value) {
            return null;
        }
        if (!\\is_string(\$value)) {
            throw ConversionException::conversionFailed(\$value, self::NAME);
        }

        \$foo = new Foo();
        \$foo->bar = \$value;

        return \$foo;
    }

    /**
     * {@inheritdoc}
     */
    public function requiresSQLCommentHint(AbstractPlatform \$platform)
    {
        return true;
    }
}
", "vendor/symfony/doctrine-bridge/Tests/PropertyInfo/Fixtures/DoctrineFooType.php", "/var/www/public/DevLaon/templates/vendor/symfony/doctrine-bridge/Tests/PropertyInfo/Fixtures/DoctrineFooType.php");
    }
}
