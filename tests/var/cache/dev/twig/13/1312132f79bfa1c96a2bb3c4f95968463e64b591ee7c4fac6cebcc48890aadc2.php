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

/* vendor/symfony/validator/Context/ExecutionContextFactory.php */
class __TwigTemplate_893a075c7846150d9d8f7f3bf26c0b133803389d7a42bde90e9c7b3df0b0fc46 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/validator/Context/ExecutionContextFactory.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/validator/Context/ExecutionContextFactory.php"));

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

namespace Symfony\\Component\\Validator\\Context;

use Symfony\\Component\\Translation\\TranslatorInterface as LegacyTranslatorInterface;
use Symfony\\Component\\Validator\\Validator\\ValidatorInterface;
use Symfony\\Contracts\\Translation\\TranslatorInterface;

/**
 * Creates new {@link ExecutionContext} instances.
 *
 * @author Bernhard Schussek <bschussek@gmail.com>
 *
 * @internal version 2.5. Code against ExecutionContextFactoryInterface instead.
 */
class ExecutionContextFactory implements ExecutionContextFactoryInterface
{
    private \$translator;
    private \$translationDomain;

    /**
     * Creates a new context factory.
     *
     * @param TranslatorInterface \$translator        The translator
     * @param string|null         \$translationDomain The translation domain to
     *                                               use for translating
     *                                               violation messages
     */
    public function __construct(\$translator, string \$translationDomain = null)
    {
        if (!\$translator instanceof LegacyTranslatorInterface && !\$translator instanceof TranslatorInterface) {
            throw new \\TypeError(sprintf('Argument 1 passed to %s() must be an instance of %s, %s given.', __METHOD__, TranslatorInterface::class, \\is_object(\$translator) ? \\get_class(\$translator) : \\gettype(\$translator)));
        }

        \$this->translator = \$translator;
        \$this->translationDomain = \$translationDomain;
    }

    /**
     * {@inheritdoc}
     */
    public function createContext(ValidatorInterface \$validator, \$root)
    {
        return new ExecutionContext(
            \$validator,
            \$root,
            \$this->translator,
            \$this->translationDomain
        );
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/validator/Context/ExecutionContextFactory.php";
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

namespace Symfony\\Component\\Validator\\Context;

use Symfony\\Component\\Translation\\TranslatorInterface as LegacyTranslatorInterface;
use Symfony\\Component\\Validator\\Validator\\ValidatorInterface;
use Symfony\\Contracts\\Translation\\TranslatorInterface;

/**
 * Creates new {@link ExecutionContext} instances.
 *
 * @author Bernhard Schussek <bschussek@gmail.com>
 *
 * @internal version 2.5. Code against ExecutionContextFactoryInterface instead.
 */
class ExecutionContextFactory implements ExecutionContextFactoryInterface
{
    private \$translator;
    private \$translationDomain;

    /**
     * Creates a new context factory.
     *
     * @param TranslatorInterface \$translator        The translator
     * @param string|null         \$translationDomain The translation domain to
     *                                               use for translating
     *                                               violation messages
     */
    public function __construct(\$translator, string \$translationDomain = null)
    {
        if (!\$translator instanceof LegacyTranslatorInterface && !\$translator instanceof TranslatorInterface) {
            throw new \\TypeError(sprintf('Argument 1 passed to %s() must be an instance of %s, %s given.', __METHOD__, TranslatorInterface::class, \\is_object(\$translator) ? \\get_class(\$translator) : \\gettype(\$translator)));
        }

        \$this->translator = \$translator;
        \$this->translationDomain = \$translationDomain;
    }

    /**
     * {@inheritdoc}
     */
    public function createContext(ValidatorInterface \$validator, \$root)
    {
        return new ExecutionContext(
            \$validator,
            \$root,
            \$this->translator,
            \$this->translationDomain
        );
    }
}
", "vendor/symfony/validator/Context/ExecutionContextFactory.php", "/var/www/public/DevLaon/templates/vendor/symfony/validator/Context/ExecutionContextFactory.php");
    }
}
