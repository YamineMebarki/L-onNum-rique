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

/* vendor/symfony/form/Extension/Core/DataTransformer/DataTransformerChain.php */
class __TwigTemplate_4385e78223a214564f42ade0d437afaa76613b9eb99f181e2a8d6a4db279e103 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/form/Extension/Core/DataTransformer/DataTransformerChain.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/form/Extension/Core/DataTransformer/DataTransformerChain.php"));

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
 * Passes a value through multiple value transformers.
 *
 * @author Bernhard Schussek <bschussek@gmail.com>
 */
class DataTransformerChain implements DataTransformerInterface
{
    protected \$transformers;

    /**
     * Uses the given value transformers to transform values.
     *
     * @param DataTransformerInterface[] \$transformers
     */
    public function __construct(array \$transformers)
    {
        \$this->transformers = \$transformers;
    }

    /**
     * Passes the value through the transform() method of all nested transformers.
     *
     * The transformers receive the value in the same order as they were passed
     * to the constructor. Each transformer receives the result of the previous
     * transformer as input. The output of the last transformer is returned
     * by this method.
     *
     * @param mixed \$value The original value
     *
     * @return mixed The transformed value
     *
     * @throws TransformationFailedException
     */
    public function transform(\$value)
    {
        foreach (\$this->transformers as \$transformer) {
            \$value = \$transformer->transform(\$value);
        }

        return \$value;
    }

    /**
     * Passes the value through the reverseTransform() method of all nested
     * transformers.
     *
     * The transformers receive the value in the reverse order as they were passed
     * to the constructor. Each transformer receives the result of the previous
     * transformer as input. The output of the last transformer is returned
     * by this method.
     *
     * @param mixed \$value The transformed value
     *
     * @return mixed The reverse-transformed value
     *
     * @throws TransformationFailedException
     */
    public function reverseTransform(\$value)
    {
        for (\$i = \\count(\$this->transformers) - 1; \$i >= 0; --\$i) {
            \$value = \$this->transformers[\$i]->reverseTransform(\$value);
        }

        return \$value;
    }

    /**
     * @return DataTransformerInterface[]
     */
    public function getTransformers()
    {
        return \$this->transformers;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/form/Extension/Core/DataTransformer/DataTransformerChain.php";
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
 * Passes a value through multiple value transformers.
 *
 * @author Bernhard Schussek <bschussek@gmail.com>
 */
class DataTransformerChain implements DataTransformerInterface
{
    protected \$transformers;

    /**
     * Uses the given value transformers to transform values.
     *
     * @param DataTransformerInterface[] \$transformers
     */
    public function __construct(array \$transformers)
    {
        \$this->transformers = \$transformers;
    }

    /**
     * Passes the value through the transform() method of all nested transformers.
     *
     * The transformers receive the value in the same order as they were passed
     * to the constructor. Each transformer receives the result of the previous
     * transformer as input. The output of the last transformer is returned
     * by this method.
     *
     * @param mixed \$value The original value
     *
     * @return mixed The transformed value
     *
     * @throws TransformationFailedException
     */
    public function transform(\$value)
    {
        foreach (\$this->transformers as \$transformer) {
            \$value = \$transformer->transform(\$value);
        }

        return \$value;
    }

    /**
     * Passes the value through the reverseTransform() method of all nested
     * transformers.
     *
     * The transformers receive the value in the reverse order as they were passed
     * to the constructor. Each transformer receives the result of the previous
     * transformer as input. The output of the last transformer is returned
     * by this method.
     *
     * @param mixed \$value The transformed value
     *
     * @return mixed The reverse-transformed value
     *
     * @throws TransformationFailedException
     */
    public function reverseTransform(\$value)
    {
        for (\$i = \\count(\$this->transformers) - 1; \$i >= 0; --\$i) {
            \$value = \$this->transformers[\$i]->reverseTransform(\$value);
        }

        return \$value;
    }

    /**
     * @return DataTransformerInterface[]
     */
    public function getTransformers()
    {
        return \$this->transformers;
    }
}
", "vendor/symfony/form/Extension/Core/DataTransformer/DataTransformerChain.php", "/var/www/public/DevLaon/templates/vendor/symfony/form/Extension/Core/DataTransformer/DataTransformerChain.php");
    }
}
