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

/* vendor/symfony/validator/Mapping/Factory/MetadataFactoryInterface.php */
class __TwigTemplate_8f09608bbb37c4c22e7979b2faaa920ff6b2d29fb9b7693bfed957d9a2c8b87e extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/validator/Mapping/Factory/MetadataFactoryInterface.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/validator/Mapping/Factory/MetadataFactoryInterface.php"));

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

use Symfony\\Component\\Validator\\Exception\\NoSuchMetadataException;
use Symfony\\Component\\Validator\\Mapping\\MetadataInterface;

/**
 * Returns {@link \\Symfony\\Component\\Validator\\Mapping\\MetadataInterface} instances for values.
 *
 * @author Bernhard Schussek <bschussek@gmail.com>
 */
interface MetadataFactoryInterface
{
    /**
     * Returns the metadata for the given value.
     *
     * @param mixed \$value Some value
     *
     * @return MetadataInterface The metadata for the value
     *
     * @throws NoSuchMetadataException If no metadata exists for the given value
     */
    public function getMetadataFor(\$value);

    /**
     * Returns whether the class is able to return metadata for the given value.
     *
     * @param mixed \$value Some value
     *
     * @return bool Whether metadata can be returned for that value
     */
    public function hasMetadataFor(\$value);
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/validator/Mapping/Factory/MetadataFactoryInterface.php";
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

use Symfony\\Component\\Validator\\Exception\\NoSuchMetadataException;
use Symfony\\Component\\Validator\\Mapping\\MetadataInterface;

/**
 * Returns {@link \\Symfony\\Component\\Validator\\Mapping\\MetadataInterface} instances for values.
 *
 * @author Bernhard Schussek <bschussek@gmail.com>
 */
interface MetadataFactoryInterface
{
    /**
     * Returns the metadata for the given value.
     *
     * @param mixed \$value Some value
     *
     * @return MetadataInterface The metadata for the value
     *
     * @throws NoSuchMetadataException If no metadata exists for the given value
     */
    public function getMetadataFor(\$value);

    /**
     * Returns whether the class is able to return metadata for the given value.
     *
     * @param mixed \$value Some value
     *
     * @return bool Whether metadata can be returned for that value
     */
    public function hasMetadataFor(\$value);
}
", "vendor/symfony/validator/Mapping/Factory/MetadataFactoryInterface.php", "/var/www/public/DevLaon/templates/vendor/symfony/validator/Mapping/Factory/MetadataFactoryInterface.php");
    }
}
