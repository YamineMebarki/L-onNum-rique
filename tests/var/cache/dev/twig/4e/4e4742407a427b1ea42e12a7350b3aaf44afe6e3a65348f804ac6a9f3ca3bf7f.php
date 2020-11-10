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

/* vendor/symfony/validator/Mapping/Factory/BlackHoleMetadataFactory.php */
class __TwigTemplate_5aa94777f18dba971ff6cdeef7737da5cd523ef0eef18e08f21be803cf450064 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/validator/Mapping/Factory/BlackHoleMetadataFactory.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/validator/Mapping/Factory/BlackHoleMetadataFactory.php"));

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

namespace Symfony\\Component\\Validator\\Mapping\\Factory;

use Symfony\\Component\\Validator\\Exception\\LogicException;

/**
 * Metadata factory that does not store metadata.
 *
 * This implementation is useful if you want to validate values against
 * constraints only and you don't need to add constraints to classes and
 * properties.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
class BlackHoleMetadataFactory implements MetadataFactoryInterface
{
    /**
     * {@inheritdoc}
     */
    public function getMetadataFor(\$value)
    {
        throw new LogicException('This class does not support metadata.');
    }

    /**
     * {@inheritdoc}
     */
    public function hasMetadataFor(\$value)
    {
        return false;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/validator/Mapping/Factory/BlackHoleMetadataFactory.php";
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

namespace Symfony\\Component\\Validator\\Mapping\\Factory;

use Symfony\\Component\\Validator\\Exception\\LogicException;

/**
 * Metadata factory that does not store metadata.
 *
 * This implementation is useful if you want to validate values against
 * constraints only and you don't need to add constraints to classes and
 * properties.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
class BlackHoleMetadataFactory implements MetadataFactoryInterface
{
    /**
     * {@inheritdoc}
     */
    public function getMetadataFor(\$value)
    {
        throw new LogicException('This class does not support metadata.');
    }

    /**
     * {@inheritdoc}
     */
    public function hasMetadataFor(\$value)
    {
        return false;
    }
}
", "vendor/symfony/validator/Mapping/Factory/BlackHoleMetadataFactory.php", "/var/www/public/DevLaon/templates/vendor/symfony/validator/Mapping/Factory/BlackHoleMetadataFactory.php");
    }
}
