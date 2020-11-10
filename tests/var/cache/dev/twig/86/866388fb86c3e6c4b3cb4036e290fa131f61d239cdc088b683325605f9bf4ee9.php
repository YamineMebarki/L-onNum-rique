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

/* vendor/symfony/serializer/Normalizer/DenormalizableInterface.php */
class __TwigTemplate_611fc5515666054f80296acfade13a8de0d356a1d5f900be2da2b3d3498cd1f7 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/serializer/Normalizer/DenormalizableInterface.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/serializer/Normalizer/DenormalizableInterface.php"));

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

namespace Symfony\\Component\\Serializer\\Normalizer;

/**
 * Defines the most basic interface a class must implement to be denormalizable.
 *
 * If a denormalizer is registered for the class and it doesn't implement
 * the Denormalizable interfaces, the normalizer will be used instead
 *
 * @author Jordi Boggiano <j.boggiano@seld.be>
 */
interface DenormalizableInterface
{
    /**
     * Denormalizes the object back from an array of scalars|arrays.
     *
     * It is important to understand that the denormalize() call should denormalize
     * recursively all child objects of the implementor.
     *
     * @param DenormalizerInterface       \$denormalizer The denormalizer is given so that you
     *                                                  can use it to denormalize objects contained within this object
     * @param array|string|int|float|bool \$data         The data from which to re-create the object
     * @param string|null                 \$format       The format is optionally given to be able to denormalize
     *                                                  differently based on different input formats
     * @param array                       \$context      Options for denormalizing
     *
     * @return object|object[]
     */
    public function denormalize(DenormalizerInterface \$denormalizer, \$data, \$format = null, array \$context = []);
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/serializer/Normalizer/DenormalizableInterface.php";
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

namespace Symfony\\Component\\Serializer\\Normalizer;

/**
 * Defines the most basic interface a class must implement to be denormalizable.
 *
 * If a denormalizer is registered for the class and it doesn't implement
 * the Denormalizable interfaces, the normalizer will be used instead
 *
 * @author Jordi Boggiano <j.boggiano@seld.be>
 */
interface DenormalizableInterface
{
    /**
     * Denormalizes the object back from an array of scalars|arrays.
     *
     * It is important to understand that the denormalize() call should denormalize
     * recursively all child objects of the implementor.
     *
     * @param DenormalizerInterface       \$denormalizer The denormalizer is given so that you
     *                                                  can use it to denormalize objects contained within this object
     * @param array|string|int|float|bool \$data         The data from which to re-create the object
     * @param string|null                 \$format       The format is optionally given to be able to denormalize
     *                                                  differently based on different input formats
     * @param array                       \$context      Options for denormalizing
     *
     * @return object|object[]
     */
    public function denormalize(DenormalizerInterface \$denormalizer, \$data, \$format = null, array \$context = []);
}
", "vendor/symfony/serializer/Normalizer/DenormalizableInterface.php", "/var/www/public/DevLaon/templates/vendor/symfony/serializer/Normalizer/DenormalizableInterface.php");
    }
}
