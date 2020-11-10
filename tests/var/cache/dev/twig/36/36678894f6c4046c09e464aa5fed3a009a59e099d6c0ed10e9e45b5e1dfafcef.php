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

/* vendor/symfony/form/Extension/Core/DataTransformer/ValueToDuplicatesTransformer.php */
class __TwigTemplate_045ff3b493fbe509a0e5fb8d3fef803232e13b1f355332e42bc51c967e287348 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/form/Extension/Core/DataTransformer/ValueToDuplicatesTransformer.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/form/Extension/Core/DataTransformer/ValueToDuplicatesTransformer.php"));

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

/**
 * @author Bernhard Schussek <bschussek@gmail.com>
 */
class ValueToDuplicatesTransformer implements DataTransformerInterface
{
    private \$keys;

    public function __construct(array \$keys)
    {
        \$this->keys = \$keys;
    }

    /**
     * Duplicates the given value through the array.
     *
     * @param mixed \$value The value
     *
     * @return array The array
     */
    public function transform(\$value)
    {
        \$result = [];

        foreach (\$this->keys as \$key) {
            \$result[\$key] = \$value;
        }

        return \$result;
    }

    /**
     * Extracts the duplicated value from an array.
     *
     * @return mixed The value
     *
     * @throws TransformationFailedException if the given value is not an array or
     *                                       if the given array can not be transformed
     */
    public function reverseTransform(\$array)
    {
        if (!\\is_array(\$array)) {
            throw new TransformationFailedException('Expected an array.');
        }

        \$result = current(\$array);
        \$emptyKeys = [];

        foreach (\$this->keys as \$key) {
            if (isset(\$array[\$key]) && '' !== \$array[\$key] && false !== \$array[\$key] && [] !== \$array[\$key]) {
                if (\$array[\$key] !== \$result) {
                    throw new TransformationFailedException('All values in the array should be the same');
                }
            } else {
                \$emptyKeys[] = \$key;
            }
        }

        if (\\count(\$emptyKeys) > 0) {
            if (\\count(\$emptyKeys) == \\count(\$this->keys)) {
                // All keys empty
                return null;
            }

            throw new TransformationFailedException(sprintf('The keys \"%s\" should not be empty', implode('\", \"', \$emptyKeys)));
        }

        return \$result;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/form/Extension/Core/DataTransformer/ValueToDuplicatesTransformer.php";
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

/**
 * @author Bernhard Schussek <bschussek@gmail.com>
 */
class ValueToDuplicatesTransformer implements DataTransformerInterface
{
    private \$keys;

    public function __construct(array \$keys)
    {
        \$this->keys = \$keys;
    }

    /**
     * Duplicates the given value through the array.
     *
     * @param mixed \$value The value
     *
     * @return array The array
     */
    public function transform(\$value)
    {
        \$result = [];

        foreach (\$this->keys as \$key) {
            \$result[\$key] = \$value;
        }

        return \$result;
    }

    /**
     * Extracts the duplicated value from an array.
     *
     * @return mixed The value
     *
     * @throws TransformationFailedException if the given value is not an array or
     *                                       if the given array can not be transformed
     */
    public function reverseTransform(\$array)
    {
        if (!\\is_array(\$array)) {
            throw new TransformationFailedException('Expected an array.');
        }

        \$result = current(\$array);
        \$emptyKeys = [];

        foreach (\$this->keys as \$key) {
            if (isset(\$array[\$key]) && '' !== \$array[\$key] && false !== \$array[\$key] && [] !== \$array[\$key]) {
                if (\$array[\$key] !== \$result) {
                    throw new TransformationFailedException('All values in the array should be the same');
                }
            } else {
                \$emptyKeys[] = \$key;
            }
        }

        if (\\count(\$emptyKeys) > 0) {
            if (\\count(\$emptyKeys) == \\count(\$this->keys)) {
                // All keys empty
                return null;
            }

            throw new TransformationFailedException(sprintf('The keys \"%s\" should not be empty', implode('\", \"', \$emptyKeys)));
        }

        return \$result;
    }
}
", "vendor/symfony/form/Extension/Core/DataTransformer/ValueToDuplicatesTransformer.php", "/var/www/public/DevLaon/templates/vendor/symfony/form/Extension/Core/DataTransformer/ValueToDuplicatesTransformer.php");
    }
}
