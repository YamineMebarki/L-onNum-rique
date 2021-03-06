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

/* vendor/symfony/doctrine-bridge/Tests/Fixtures/DoctrineLoaderEntity.php */
class __TwigTemplate_ff7aad4feb0d6157bfd23c2a1556bfc59ccc997c75e06014ac854989fd7af77b extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/doctrine-bridge/Tests/Fixtures/DoctrineLoaderEntity.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/doctrine-bridge/Tests/Fixtures/DoctrineLoaderEntity.php"));

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

namespace Symfony\\Bridge\\Doctrine\\Tests\\Fixtures;

use Doctrine\\ORM\\Mapping as ORM;
use Symfony\\Bridge\\Doctrine\\Validator\\Constraints\\UniqueEntity;
use Symfony\\Component\\Validator\\Constraints as Assert;

/**
 * @ORM\\Entity
 * @UniqueEntity(fields={\"alreadyMappedUnique\"})
 *
 * @author Kévin Dunglas <dunglas@gmail.com>
 */
class DoctrineLoaderEntity extends DoctrineLoaderParentEntity
{
    /**
     * @ORM\\Id
     * @ORM\\Column
     */
    public \$id;

    /**
     * @ORM\\Column(length=20)
     */
    public \$maxLength;

    /**
     * @ORM\\Column(length=20)
     * @Assert\\Length(min=5)
     */
    public \$mergedMaxLength;

    /**
     * @ORM\\Column(length=20)
     * @Assert\\Length(min=1, max=10)
     */
    public \$alreadyMappedMaxLength;

    /**
     * @ORM\\Column(unique=true)
     */
    public \$unique;

    /**
     * @ORM\\Column(unique=true)
     */
    public \$alreadyMappedUnique;

    /**
     * @ORM\\Embedded(class=DoctrineLoaderEmbed::class)
     */
    public \$embedded;

    /** @ORM\\Column(type=\"text\", nullable=true, length=1000) */
    public \$textField;

    /** @ORM\\Id @ORM\\Column(type=\"guid\", length=50) */
    protected \$guidField;

    /** @ORM\\Column(type=\"simple_array\", length=100) */
    public \$simpleArrayField = [];
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/doctrine-bridge/Tests/Fixtures/DoctrineLoaderEntity.php";
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

namespace Symfony\\Bridge\\Doctrine\\Tests\\Fixtures;

use Doctrine\\ORM\\Mapping as ORM;
use Symfony\\Bridge\\Doctrine\\Validator\\Constraints\\UniqueEntity;
use Symfony\\Component\\Validator\\Constraints as Assert;

/**
 * @ORM\\Entity
 * @UniqueEntity(fields={\"alreadyMappedUnique\"})
 *
 * @author Kévin Dunglas <dunglas@gmail.com>
 */
class DoctrineLoaderEntity extends DoctrineLoaderParentEntity
{
    /**
     * @ORM\\Id
     * @ORM\\Column
     */
    public \$id;

    /**
     * @ORM\\Column(length=20)
     */
    public \$maxLength;

    /**
     * @ORM\\Column(length=20)
     * @Assert\\Length(min=5)
     */
    public \$mergedMaxLength;

    /**
     * @ORM\\Column(length=20)
     * @Assert\\Length(min=1, max=10)
     */
    public \$alreadyMappedMaxLength;

    /**
     * @ORM\\Column(unique=true)
     */
    public \$unique;

    /**
     * @ORM\\Column(unique=true)
     */
    public \$alreadyMappedUnique;

    /**
     * @ORM\\Embedded(class=DoctrineLoaderEmbed::class)
     */
    public \$embedded;

    /** @ORM\\Column(type=\"text\", nullable=true, length=1000) */
    public \$textField;

    /** @ORM\\Id @ORM\\Column(type=\"guid\", length=50) */
    protected \$guidField;

    /** @ORM\\Column(type=\"simple_array\", length=100) */
    public \$simpleArrayField = [];
}
", "vendor/symfony/doctrine-bridge/Tests/Fixtures/DoctrineLoaderEntity.php", "/var/www/public/DevLaon/templates/vendor/symfony/doctrine-bridge/Tests/Fixtures/DoctrineLoaderEntity.php");
    }
}
