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

/* vendor/symfony/serializer/Normalizer/DenormalizerInterface.php */
class __TwigTemplate_ea4cd8c925f75995886439b547e0a767647bba93c7771cae4022c17b1e24373b extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/serializer/Normalizer/DenormalizerInterface.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/serializer/Normalizer/DenormalizerInterface.php"));

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

use Symfony\\Component\\Serializer\\Exception\\BadMethodCallException;
use Symfony\\Component\\Serializer\\Exception\\ExceptionInterface;
use Symfony\\Component\\Serializer\\Exception\\ExtraAttributesException;
use Symfony\\Component\\Serializer\\Exception\\InvalidArgumentException;
use Symfony\\Component\\Serializer\\Exception\\LogicException;
use Symfony\\Component\\Serializer\\Exception\\RuntimeException;
use Symfony\\Component\\Serializer\\Exception\\UnexpectedValueException;

/**
 * Defines the interface of denormalizers.
 *
 * @author Jordi Boggiano <j.boggiano@seld.be>
 */
interface DenormalizerInterface
{
    /**
     * Denormalizes data back into an object of the given class.
     *
     * @param mixed  \$data    Data to restore
     * @param string \$type    The expected class to instantiate
     * @param string \$format  Format the given data was extracted from
     * @param array  \$context Options available to the denormalizer
     *
     * @return object|array
     *
     * @throws BadMethodCallException   Occurs when the normalizer is not called in an expected context
     * @throws InvalidArgumentException Occurs when the arguments are not coherent or not supported
     * @throws UnexpectedValueException Occurs when the item cannot be hydrated with the given data
     * @throws ExtraAttributesException Occurs when the item doesn't have attribute to receive given data
     * @throws LogicException           Occurs when the normalizer is not supposed to denormalize
     * @throws RuntimeException         Occurs if the class cannot be instantiated
     * @throws ExceptionInterface       Occurs for all the other cases of errors
     */
    public function denormalize(\$data, \$type, \$format = null, array \$context = []);

    /**
     * Checks whether the given class is supported for denormalization by this normalizer.
     *
     * @param mixed  \$data   Data to denormalize from
     * @param string \$type   The class to which the data should be denormalized
     * @param string \$format The format being deserialized from
     *
     * @return bool
     */
    public function supportsDenormalization(\$data, \$type, \$format = null);
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/serializer/Normalizer/DenormalizerInterface.php";
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

use Symfony\\Component\\Serializer\\Exception\\BadMethodCallException;
use Symfony\\Component\\Serializer\\Exception\\ExceptionInterface;
use Symfony\\Component\\Serializer\\Exception\\ExtraAttributesException;
use Symfony\\Component\\Serializer\\Exception\\InvalidArgumentException;
use Symfony\\Component\\Serializer\\Exception\\LogicException;
use Symfony\\Component\\Serializer\\Exception\\RuntimeException;
use Symfony\\Component\\Serializer\\Exception\\UnexpectedValueException;

/**
 * Defines the interface of denormalizers.
 *
 * @author Jordi Boggiano <j.boggiano@seld.be>
 */
interface DenormalizerInterface
{
    /**
     * Denormalizes data back into an object of the given class.
     *
     * @param mixed  \$data    Data to restore
     * @param string \$type    The expected class to instantiate
     * @param string \$format  Format the given data was extracted from
     * @param array  \$context Options available to the denormalizer
     *
     * @return object|array
     *
     * @throws BadMethodCallException   Occurs when the normalizer is not called in an expected context
     * @throws InvalidArgumentException Occurs when the arguments are not coherent or not supported
     * @throws UnexpectedValueException Occurs when the item cannot be hydrated with the given data
     * @throws ExtraAttributesException Occurs when the item doesn't have attribute to receive given data
     * @throws LogicException           Occurs when the normalizer is not supposed to denormalize
     * @throws RuntimeException         Occurs if the class cannot be instantiated
     * @throws ExceptionInterface       Occurs for all the other cases of errors
     */
    public function denormalize(\$data, \$type, \$format = null, array \$context = []);

    /**
     * Checks whether the given class is supported for denormalization by this normalizer.
     *
     * @param mixed  \$data   Data to denormalize from
     * @param string \$type   The class to which the data should be denormalized
     * @param string \$format The format being deserialized from
     *
     * @return bool
     */
    public function supportsDenormalization(\$data, \$type, \$format = null);
}
", "vendor/symfony/serializer/Normalizer/DenormalizerInterface.php", "/var/www/public/DevLaon/templates/vendor/symfony/serializer/Normalizer/DenormalizerInterface.php");
    }
}
