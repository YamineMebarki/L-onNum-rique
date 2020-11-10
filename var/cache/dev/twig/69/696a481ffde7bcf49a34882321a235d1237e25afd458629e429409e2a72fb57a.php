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

/* vendor/symfony/form/Extension/Core/DataTransformer/ArrayToPartsTransformer.php */
class __TwigTemplate_5ec6e1f7355507ca631b42d198790433e83816a4705ae387d895dddadd9db109 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/form/Extension/Core/DataTransformer/ArrayToPartsTransformer.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/form/Extension/Core/DataTransformer/ArrayToPartsTransformer.php"));

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
class ArrayToPartsTransformer implements DataTransformerInterface
{
    private \$partMapping;

    public function __construct(array \$partMapping)
    {
        \$this->partMapping = \$partMapping;
    }

    public function transform(\$array)
    {
        if (null === \$array) {
            \$array = [];
        }

        if (!\\is_array(\$array)) {
            throw new TransformationFailedException('Expected an array.');
        }

        \$result = [];

        foreach (\$this->partMapping as \$partKey => \$originalKeys) {
            if (empty(\$array)) {
                \$result[\$partKey] = null;
            } else {
                \$result[\$partKey] = array_intersect_key(\$array, array_flip(\$originalKeys));
            }
        }

        return \$result;
    }

    public function reverseTransform(\$array)
    {
        if (!\\is_array(\$array)) {
            throw new TransformationFailedException('Expected an array.');
        }

        \$result = [];
        \$emptyKeys = [];

        foreach (\$this->partMapping as \$partKey => \$originalKeys) {
            if (!empty(\$array[\$partKey])) {
                foreach (\$originalKeys as \$originalKey) {
                    if (isset(\$array[\$partKey][\$originalKey])) {
                        \$result[\$originalKey] = \$array[\$partKey][\$originalKey];
                    }
                }
            } else {
                \$emptyKeys[] = \$partKey;
            }
        }

        if (\\count(\$emptyKeys) > 0) {
            if (\\count(\$emptyKeys) === \\count(\$this->partMapping)) {
                // All parts empty
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
        return "vendor/symfony/form/Extension/Core/DataTransformer/ArrayToPartsTransformer.php";
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
class ArrayToPartsTransformer implements DataTransformerInterface
{
    private \$partMapping;

    public function __construct(array \$partMapping)
    {
        \$this->partMapping = \$partMapping;
    }

    public function transform(\$array)
    {
        if (null === \$array) {
            \$array = [];
        }

        if (!\\is_array(\$array)) {
            throw new TransformationFailedException('Expected an array.');
        }

        \$result = [];

        foreach (\$this->partMapping as \$partKey => \$originalKeys) {
            if (empty(\$array)) {
                \$result[\$partKey] = null;
            } else {
                \$result[\$partKey] = array_intersect_key(\$array, array_flip(\$originalKeys));
            }
        }

        return \$result;
    }

    public function reverseTransform(\$array)
    {
        if (!\\is_array(\$array)) {
            throw new TransformationFailedException('Expected an array.');
        }

        \$result = [];
        \$emptyKeys = [];

        foreach (\$this->partMapping as \$partKey => \$originalKeys) {
            if (!empty(\$array[\$partKey])) {
                foreach (\$originalKeys as \$originalKey) {
                    if (isset(\$array[\$partKey][\$originalKey])) {
                        \$result[\$originalKey] = \$array[\$partKey][\$originalKey];
                    }
                }
            } else {
                \$emptyKeys[] = \$partKey;
            }
        }

        if (\\count(\$emptyKeys) > 0) {
            if (\\count(\$emptyKeys) === \\count(\$this->partMapping)) {
                // All parts empty
                return null;
            }

            throw new TransformationFailedException(sprintf('The keys \"%s\" should not be empty', implode('\", \"', \$emptyKeys)));
        }

        return \$result;
    }
}
", "vendor/symfony/form/Extension/Core/DataTransformer/ArrayToPartsTransformer.php", "/var/www/public/DevLaon/templates/vendor/symfony/form/Extension/Core/DataTransformer/ArrayToPartsTransformer.php");
    }
}
