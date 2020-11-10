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

/* vendor/symfony/form/Extension/Core/DataTransformer/StringToFloatTransformer.php */
class __TwigTemplate_0aef7fc34960ce1487d3e8dcc483a8de55d8caa5ddbfe86c8155ab88348b9bb0 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/form/Extension/Core/DataTransformer/StringToFloatTransformer.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/form/Extension/Core/DataTransformer/StringToFloatTransformer.php"));

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

namespace Symfony\\Component\\Form\\Extension\\Core\\DataTransformer;

use Symfony\\Component\\Form\\DataTransformerInterface;
use Symfony\\Component\\Form\\Exception\\TransformationFailedException;

class StringToFloatTransformer implements DataTransformerInterface
{
    private \$scale;

    public function __construct(int \$scale = null)
    {
        \$this->scale = \$scale;
    }

    /**
     * @param mixed \$value
     *
     * @return float|null
     */
    public function transform(\$value)
    {
        if (null === \$value) {
            return null;
        }

        if (!\\is_string(\$value) || !is_numeric(\$value)) {
            throw new TransformationFailedException('Expected a numeric string.');
        }

        return (float) \$value;
    }

    /**
     * @param mixed \$value
     *
     * @return string|null
     */
    public function reverseTransform(\$value)
    {
        if (null === \$value) {
            return null;
        }

        if (!\\is_int(\$value) && !\\is_float(\$value)) {
            throw new TransformationFailedException('Expected a numeric.');
        }

        if (\$this->scale > 0) {
            return number_format((float) \$value, \$this->scale, '.', '');
        }

        return (string) \$value;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/form/Extension/Core/DataTransformer/StringToFloatTransformer.php";
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

namespace Symfony\\Component\\Form\\Extension\\Core\\DataTransformer;

use Symfony\\Component\\Form\\DataTransformerInterface;
use Symfony\\Component\\Form\\Exception\\TransformationFailedException;

class StringToFloatTransformer implements DataTransformerInterface
{
    private \$scale;

    public function __construct(int \$scale = null)
    {
        \$this->scale = \$scale;
    }

    /**
     * @param mixed \$value
     *
     * @return float|null
     */
    public function transform(\$value)
    {
        if (null === \$value) {
            return null;
        }

        if (!\\is_string(\$value) || !is_numeric(\$value)) {
            throw new TransformationFailedException('Expected a numeric string.');
        }

        return (float) \$value;
    }

    /**
     * @param mixed \$value
     *
     * @return string|null
     */
    public function reverseTransform(\$value)
    {
        if (null === \$value) {
            return null;
        }

        if (!\\is_int(\$value) && !\\is_float(\$value)) {
            throw new TransformationFailedException('Expected a numeric.');
        }

        if (\$this->scale > 0) {
            return number_format((float) \$value, \$this->scale, '.', '');
        }

        return (string) \$value;
    }
}
", "vendor/symfony/form/Extension/Core/DataTransformer/StringToFloatTransformer.php", "/var/www/public/DevLaon/templates/vendor/symfony/form/Extension/Core/DataTransformer/StringToFloatTransformer.php");
    }
}
