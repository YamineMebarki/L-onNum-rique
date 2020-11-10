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

/* vendor/symfony/validator/Util/LegacyTranslatorProxy.php */
class __TwigTemplate_97c1d3a297f0c34214c6ec6a1b7e54eace17e073fde3f4afb952e4d97c2a909c extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/validator/Util/LegacyTranslatorProxy.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/validator/Util/LegacyTranslatorProxy.php"));

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

namespace Symfony\\Component\\Validator\\Util;

use Symfony\\Component\\Translation\\TranslatorInterface as LegacyTranslatorInterface;
use Symfony\\Contracts\\Translation\\LocaleAwareInterface;
use Symfony\\Contracts\\Translation\\TranslatorInterface;

/**
 * @internal to be removed in Symfony 5.0.
 */
class LegacyTranslatorProxy implements LegacyTranslatorInterface, TranslatorInterface
{
    private \$translator;

    /**
     * @param LegacyTranslatorInterface|TranslatorInterface \$translator
     */
    public function __construct(\$translator)
    {
        if (\$translator instanceof LegacyTranslatorInterface) {
            // no-op
        } elseif (!\$translator instanceof TranslatorInterface) {
            throw new \\InvalidArgumentException(sprintf('The translator passed to \"%s()\" must implement \"%s\" or \"%s\".', __METHOD__, TranslatorInterface::class, LegacyTranslatorInterface::class));
        } elseif (!\$translator instanceof LocaleAwareInterface) {
            throw new \\InvalidArgumentException(sprintf('The translator passed to \"%s()\" must implement \"%s\".', __METHOD__, LocaleAwareInterface::class));
        }

        \$this->translator = \$translator;
    }

    /**
     * @return LegacyTranslatorInterface|TranslatorInterface
     */
    public function getTranslator()
    {
        return \$this->translator;
    }

    /**
     * {@inheritdoc}
     */
    public function setLocale(\$locale)
    {
        \$this->translator->setLocale(\$locale);
    }

    /**
     * {@inheritdoc}
     */
    public function getLocale()
    {
        return \$this->translator->getLocale();
    }

    /**
     * {@inheritdoc}
     */
    public function trans(\$id, array \$parameters = [], \$domain = null, \$locale = null)
    {
        return \$this->translator->trans(\$id, \$parameters, \$domain, \$locale);
    }

    /**
     * {@inheritdoc}
     */
    public function transChoice(\$id, \$number, array \$parameters = [], \$domain = null, \$locale = null)
    {
        return \$this->translator->trans(\$id, ['%count%' => \$number] + \$parameters, \$domain, \$locale);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/validator/Util/LegacyTranslatorProxy.php";
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

namespace Symfony\\Component\\Validator\\Util;

use Symfony\\Component\\Translation\\TranslatorInterface as LegacyTranslatorInterface;
use Symfony\\Contracts\\Translation\\LocaleAwareInterface;
use Symfony\\Contracts\\Translation\\TranslatorInterface;

/**
 * @internal to be removed in Symfony 5.0.
 */
class LegacyTranslatorProxy implements LegacyTranslatorInterface, TranslatorInterface
{
    private \$translator;

    /**
     * @param LegacyTranslatorInterface|TranslatorInterface \$translator
     */
    public function __construct(\$translator)
    {
        if (\$translator instanceof LegacyTranslatorInterface) {
            // no-op
        } elseif (!\$translator instanceof TranslatorInterface) {
            throw new \\InvalidArgumentException(sprintf('The translator passed to \"%s()\" must implement \"%s\" or \"%s\".', __METHOD__, TranslatorInterface::class, LegacyTranslatorInterface::class));
        } elseif (!\$translator instanceof LocaleAwareInterface) {
            throw new \\InvalidArgumentException(sprintf('The translator passed to \"%s()\" must implement \"%s\".', __METHOD__, LocaleAwareInterface::class));
        }

        \$this->translator = \$translator;
    }

    /**
     * @return LegacyTranslatorInterface|TranslatorInterface
     */
    public function getTranslator()
    {
        return \$this->translator;
    }

    /**
     * {@inheritdoc}
     */
    public function setLocale(\$locale)
    {
        \$this->translator->setLocale(\$locale);
    }

    /**
     * {@inheritdoc}
     */
    public function getLocale()
    {
        return \$this->translator->getLocale();
    }

    /**
     * {@inheritdoc}
     */
    public function trans(\$id, array \$parameters = [], \$domain = null, \$locale = null)
    {
        return \$this->translator->trans(\$id, \$parameters, \$domain, \$locale);
    }

    /**
     * {@inheritdoc}
     */
    public function transChoice(\$id, \$number, array \$parameters = [], \$domain = null, \$locale = null)
    {
        return \$this->translator->trans(\$id, ['%count%' => \$number] + \$parameters, \$domain, \$locale);
    }
}
", "vendor/symfony/validator/Util/LegacyTranslatorProxy.php", "/var/www/public/DevLaon/templates/vendor/symfony/validator/Util/LegacyTranslatorProxy.php");
    }
}
