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

/* vendor/symfony/translation/Formatter/MessageFormatter.php */
class __TwigTemplate_7f2fd0891e95e6fc1ce177e23cd8c3ad181423f5c9de1d184a108cfcb9db0a12 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/translation/Formatter/MessageFormatter.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/translation/Formatter/MessageFormatter.php"));

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

namespace Symfony\\Component\\Translation\\Formatter;

use Symfony\\Component\\Translation\\IdentityTranslator;
use Symfony\\Component\\Translation\\MessageSelector;
use Symfony\\Component\\Translation\\TranslatorInterface as LegacyTranslatorInterface;
use Symfony\\Contracts\\Translation\\TranslatorInterface;

/**
 * @author Abdellatif Ait boudad <a.aitboudad@gmail.com>
 */
class MessageFormatter implements MessageFormatterInterface, IntlFormatterInterface, ChoiceMessageFormatterInterface
{
    private \$translator;
    private \$intlFormatter;

    /**
     * @param TranslatorInterface|null \$translator An identity translator to use as selector for pluralization
     */
    public function __construct(\$translator = null, IntlFormatterInterface \$intlFormatter = null)
    {
        if (\$translator instanceof MessageSelector) {
            \$translator = new IdentityTranslator(\$translator);
        } elseif (null !== \$translator && !\$translator instanceof TranslatorInterface && !\$translator instanceof LegacyTranslatorInterface) {
            throw new \\TypeError(sprintf('Argument 1 passed to %s() must be an instance of %s, %s given.', __METHOD__, TranslatorInterface::class, \\is_object(\$translator) ? \\get_class(\$translator) : \\gettype(\$translator)));
        }

        \$this->translator = \$translator ?? new IdentityTranslator();
        \$this->intlFormatter = \$intlFormatter ?? new IntlFormatter();
    }

    /**
     * {@inheritdoc}
     */
    public function format(\$message, \$locale, array \$parameters = [])
    {
        if (\$this->translator instanceof TranslatorInterface) {
            return \$this->translator->trans(\$message, \$parameters, null, \$locale);
        }

        return strtr(\$message, \$parameters);
    }

    /**
     * {@inheritdoc}
     */
    public function formatIntl(string \$message, string \$locale, array \$parameters = []): string
    {
        return \$this->intlFormatter->formatIntl(\$message, \$locale, \$parameters);
    }

    /**
     * {@inheritdoc}
     *
     * @deprecated since Symfony 4.2, use format() with a %count% parameter instead
     */
    public function choiceFormat(\$message, \$number, \$locale, array \$parameters = [])
    {
        @trigger_error(sprintf('The \"%s()\" method is deprecated since Symfony 4.2, use the format() one instead with a %%count%% parameter.', __METHOD__), E_USER_DEPRECATED);

        \$parameters = ['%count%' => \$number] + \$parameters;

        if (\$this->translator instanceof TranslatorInterface) {
            return \$this->format(\$message, \$locale, \$parameters);
        }

        return \$this->format(\$this->translator->transChoice(\$message, \$number, [], null, \$locale), \$locale, \$parameters);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/translation/Formatter/MessageFormatter.php";
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

namespace Symfony\\Component\\Translation\\Formatter;

use Symfony\\Component\\Translation\\IdentityTranslator;
use Symfony\\Component\\Translation\\MessageSelector;
use Symfony\\Component\\Translation\\TranslatorInterface as LegacyTranslatorInterface;
use Symfony\\Contracts\\Translation\\TranslatorInterface;

/**
 * @author Abdellatif Ait boudad <a.aitboudad@gmail.com>
 */
class MessageFormatter implements MessageFormatterInterface, IntlFormatterInterface, ChoiceMessageFormatterInterface
{
    private \$translator;
    private \$intlFormatter;

    /**
     * @param TranslatorInterface|null \$translator An identity translator to use as selector for pluralization
     */
    public function __construct(\$translator = null, IntlFormatterInterface \$intlFormatter = null)
    {
        if (\$translator instanceof MessageSelector) {
            \$translator = new IdentityTranslator(\$translator);
        } elseif (null !== \$translator && !\$translator instanceof TranslatorInterface && !\$translator instanceof LegacyTranslatorInterface) {
            throw new \\TypeError(sprintf('Argument 1 passed to %s() must be an instance of %s, %s given.', __METHOD__, TranslatorInterface::class, \\is_object(\$translator) ? \\get_class(\$translator) : \\gettype(\$translator)));
        }

        \$this->translator = \$translator ?? new IdentityTranslator();
        \$this->intlFormatter = \$intlFormatter ?? new IntlFormatter();
    }

    /**
     * {@inheritdoc}
     */
    public function format(\$message, \$locale, array \$parameters = [])
    {
        if (\$this->translator instanceof TranslatorInterface) {
            return \$this->translator->trans(\$message, \$parameters, null, \$locale);
        }

        return strtr(\$message, \$parameters);
    }

    /**
     * {@inheritdoc}
     */
    public function formatIntl(string \$message, string \$locale, array \$parameters = []): string
    {
        return \$this->intlFormatter->formatIntl(\$message, \$locale, \$parameters);
    }

    /**
     * {@inheritdoc}
     *
     * @deprecated since Symfony 4.2, use format() with a %count% parameter instead
     */
    public function choiceFormat(\$message, \$number, \$locale, array \$parameters = [])
    {
        @trigger_error(sprintf('The \"%s()\" method is deprecated since Symfony 4.2, use the format() one instead with a %%count%% parameter.', __METHOD__), E_USER_DEPRECATED);

        \$parameters = ['%count%' => \$number] + \$parameters;

        if (\$this->translator instanceof TranslatorInterface) {
            return \$this->format(\$message, \$locale, \$parameters);
        }

        return \$this->format(\$this->translator->transChoice(\$message, \$number, [], null, \$locale), \$locale, \$parameters);
    }
}
", "vendor/symfony/translation/Formatter/MessageFormatter.php", "/var/www/public/DevLaon/templates/vendor/symfony/translation/Formatter/MessageFormatter.php");
    }
}
