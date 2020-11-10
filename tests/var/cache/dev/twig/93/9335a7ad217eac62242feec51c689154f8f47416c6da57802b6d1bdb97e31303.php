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

/* vendor/symfony/form/Extension/Validator/Type/BaseValidatorExtension.php */
class __TwigTemplate_ad9bac82a37bfc1011f66337f58b48a14cd3648fc27e8231527832886cf7f997 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/form/Extension/Validator/Type/BaseValidatorExtension.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/form/Extension/Validator/Type/BaseValidatorExtension.php"));

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

namespace Symfony\\Component\\Form\\Extension\\Validator\\Type;

use Symfony\\Component\\Form\\AbstractTypeExtension;
use Symfony\\Component\\OptionsResolver\\Options;
use Symfony\\Component\\OptionsResolver\\OptionsResolver;
use Symfony\\Component\\Validator\\Constraints\\GroupSequence;

/**
 * Encapsulates common logic of {@link FormTypeValidatorExtension} and
 * {@link SubmitTypeValidatorExtension}.
 *
 * @author Bernhard Schussek <bschussek@gmail.com>
 */
abstract class BaseValidatorExtension extends AbstractTypeExtension
{
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver \$resolver)
    {
        // Make sure that validation groups end up as null, closure or array
        \$validationGroupsNormalizer = function (Options \$options, \$groups) {
            if (false === \$groups) {
                return [];
            }

            if (empty(\$groups)) {
                return null;
            }

            if (\\is_callable(\$groups)) {
                return \$groups;
            }

            if (\$groups instanceof GroupSequence) {
                return \$groups;
            }

            return (array) \$groups;
        };

        \$resolver->setDefaults([
            'validation_groups' => null,
        ]);

        \$resolver->setNormalizer('validation_groups', \$validationGroupsNormalizer);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/form/Extension/Validator/Type/BaseValidatorExtension.php";
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

namespace Symfony\\Component\\Form\\Extension\\Validator\\Type;

use Symfony\\Component\\Form\\AbstractTypeExtension;
use Symfony\\Component\\OptionsResolver\\Options;
use Symfony\\Component\\OptionsResolver\\OptionsResolver;
use Symfony\\Component\\Validator\\Constraints\\GroupSequence;

/**
 * Encapsulates common logic of {@link FormTypeValidatorExtension} and
 * {@link SubmitTypeValidatorExtension}.
 *
 * @author Bernhard Schussek <bschussek@gmail.com>
 */
abstract class BaseValidatorExtension extends AbstractTypeExtension
{
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver \$resolver)
    {
        // Make sure that validation groups end up as null, closure or array
        \$validationGroupsNormalizer = function (Options \$options, \$groups) {
            if (false === \$groups) {
                return [];
            }

            if (empty(\$groups)) {
                return null;
            }

            if (\\is_callable(\$groups)) {
                return \$groups;
            }

            if (\$groups instanceof GroupSequence) {
                return \$groups;
            }

            return (array) \$groups;
        };

        \$resolver->setDefaults([
            'validation_groups' => null,
        ]);

        \$resolver->setNormalizer('validation_groups', \$validationGroupsNormalizer);
    }
}
", "vendor/symfony/form/Extension/Validator/Type/BaseValidatorExtension.php", "/var/www/public/DevLaon/templates/vendor/symfony/form/Extension/Validator/Type/BaseValidatorExtension.php");
    }
}
