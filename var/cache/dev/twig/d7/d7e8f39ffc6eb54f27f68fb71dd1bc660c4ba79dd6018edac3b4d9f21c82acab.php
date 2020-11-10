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

/* vendor/symfony/form/Extension/Core/DataTransformer/ChoicesToValuesTransformer.php */
class __TwigTemplate_51efb4695dbf8d1316bd98822533af44a41077f26e062a32242662a443a55c9b extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/form/Extension/Core/DataTransformer/ChoicesToValuesTransformer.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/form/Extension/Core/DataTransformer/ChoicesToValuesTransformer.php"));

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

use Symfony\\Component\\Form\\ChoiceList\\ChoiceListInterface;
use Symfony\\Component\\Form\\DataTransformerInterface;
use Symfony\\Component\\Form\\Exception\\TransformationFailedException;

/**
 * @author Bernhard Schussek <bschussek@gmail.com>
 */
class ChoicesToValuesTransformer implements DataTransformerInterface
{
    private \$choiceList;

    public function __construct(ChoiceListInterface \$choiceList)
    {
        \$this->choiceList = \$choiceList;
    }

    /**
     * @return array
     *
     * @throws TransformationFailedException if the given value is not an array
     */
    public function transform(\$array)
    {
        if (null === \$array) {
            return [];
        }

        if (!\\is_array(\$array)) {
            throw new TransformationFailedException('Expected an array.');
        }

        return \$this->choiceList->getValuesForChoices(\$array);
    }

    /**
     * @return array
     *
     * @throws TransformationFailedException if the given value is not an array
     *                                       or if no matching choice could be
     *                                       found for some given value
     */
    public function reverseTransform(\$array)
    {
        if (null === \$array) {
            return [];
        }

        if (!\\is_array(\$array)) {
            throw new TransformationFailedException('Expected an array.');
        }

        \$choices = \$this->choiceList->getChoicesForValues(\$array);

        if (\\count(\$choices) !== \\count(\$array)) {
            throw new TransformationFailedException('Could not find all matching choices for the given values');
        }

        return \$choices;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/form/Extension/Core/DataTransformer/ChoicesToValuesTransformer.php";
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

use Symfony\\Component\\Form\\ChoiceList\\ChoiceListInterface;
use Symfony\\Component\\Form\\DataTransformerInterface;
use Symfony\\Component\\Form\\Exception\\TransformationFailedException;

/**
 * @author Bernhard Schussek <bschussek@gmail.com>
 */
class ChoicesToValuesTransformer implements DataTransformerInterface
{
    private \$choiceList;

    public function __construct(ChoiceListInterface \$choiceList)
    {
        \$this->choiceList = \$choiceList;
    }

    /**
     * @return array
     *
     * @throws TransformationFailedException if the given value is not an array
     */
    public function transform(\$array)
    {
        if (null === \$array) {
            return [];
        }

        if (!\\is_array(\$array)) {
            throw new TransformationFailedException('Expected an array.');
        }

        return \$this->choiceList->getValuesForChoices(\$array);
    }

    /**
     * @return array
     *
     * @throws TransformationFailedException if the given value is not an array
     *                                       or if no matching choice could be
     *                                       found for some given value
     */
    public function reverseTransform(\$array)
    {
        if (null === \$array) {
            return [];
        }

        if (!\\is_array(\$array)) {
            throw new TransformationFailedException('Expected an array.');
        }

        \$choices = \$this->choiceList->getChoicesForValues(\$array);

        if (\\count(\$choices) !== \\count(\$array)) {
            throw new TransformationFailedException('Could not find all matching choices for the given values');
        }

        return \$choices;
    }
}
", "vendor/symfony/form/Extension/Core/DataTransformer/ChoicesToValuesTransformer.php", "/var/www/public/DevLaon/templates/vendor/symfony/form/Extension/Core/DataTransformer/ChoicesToValuesTransformer.php");
    }
}
