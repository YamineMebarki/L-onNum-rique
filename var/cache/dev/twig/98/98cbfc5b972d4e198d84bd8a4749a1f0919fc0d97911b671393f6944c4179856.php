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

/* vendor/symfony/framework-bundle/Templating/Helper/TranslatorHelper.php */
class __TwigTemplate_6393d94dfb517ed044fd81a3af4bf6ba2ce99a79eb1279b1963ba0676f9877ea extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/framework-bundle/Templating/Helper/TranslatorHelper.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/framework-bundle/Templating/Helper/TranslatorHelper.php"));

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

namespace Symfony\\Bundle\\FrameworkBundle\\Templating\\Helper;

@trigger_error('The '.TranslatorHelper::class.' class is deprecated since version 4.3 and will be removed in 5.0; use Twig instead.', E_USER_DEPRECATED);

use Symfony\\Component\\Templating\\Helper\\Helper;
use Symfony\\Component\\Translation\\TranslatorInterface as LegacyTranslatorInterface;
use Symfony\\Contracts\\Translation\\TranslatorInterface;
use Symfony\\Contracts\\Translation\\TranslatorTrait;

/**
 * @author Fabien Potencier <fabien@symfony.com>
 *
 * @deprecated since version 4.3, to be removed in 5.0; use Twig instead.
 */
class TranslatorHelper extends Helper
{
    use TranslatorTrait {
        getLocale as private;
        setLocale as private;
        trans as private doTrans;
    }

    protected \$translator;

    /**
     * @param TranslatorInterface|null \$translator
     */
    public function __construct(\$translator = null)
    {
        if (null !== \$translator && !\$translator instanceof LegacyTranslatorInterface && !\$translator instanceof TranslatorInterface) {
            throw new \\TypeError(sprintf('Argument 1 passed to %s() must be an instance of %s, %s given.', __METHOD__, TranslatorInterface::class, \\is_object(\$translator) ? \\get_class(\$translator) : \\gettype(\$translator)));
        }
        \$this->translator = \$translator;
    }

    /**
     * @see TranslatorInterface::trans()
     */
    public function trans(\$id, array \$parameters = [], \$domain = 'messages', \$locale = null)
    {
        if (null === \$this->translator) {
            return \$this->doTrans(\$id, \$parameters, \$domain, \$locale);
        }

        return \$this->translator->trans(\$id, \$parameters, \$domain, \$locale);
    }

    /**
     * @see TranslatorInterface::transChoice()
     * @deprecated since Symfony 4.2, use the trans() method instead with a %count% parameter
     */
    public function transChoice(\$id, \$number, array \$parameters = [], \$domain = 'messages', \$locale = null)
    {
        @trigger_error(sprintf('The \"%s()\" method is deprecated since Symfony 4.2, use the trans() one instead with a \"%%count%%\" parameter.', __METHOD__), E_USER_DEPRECATED);

        if (null === \$this->translator) {
            return \$this->doTrans(\$id, ['%count%' => \$number] + \$parameters, \$domain, \$locale);
        }
        if (\$this->translator instanceof TranslatorInterface) {
            return \$this->translator->trans(\$id, ['%count%' => \$number] + \$parameters, \$domain, \$locale);
        }

        return \$this->translator->transChoice(\$id, \$number, \$parameters, \$domain, \$locale);
    }

    /**
     * {@inheritdoc}
     */
    public function getName()
    {
        return 'translator';
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/framework-bundle/Templating/Helper/TranslatorHelper.php";
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

namespace Symfony\\Bundle\\FrameworkBundle\\Templating\\Helper;

@trigger_error('The '.TranslatorHelper::class.' class is deprecated since version 4.3 and will be removed in 5.0; use Twig instead.', E_USER_DEPRECATED);

use Symfony\\Component\\Templating\\Helper\\Helper;
use Symfony\\Component\\Translation\\TranslatorInterface as LegacyTranslatorInterface;
use Symfony\\Contracts\\Translation\\TranslatorInterface;
use Symfony\\Contracts\\Translation\\TranslatorTrait;

/**
 * @author Fabien Potencier <fabien@symfony.com>
 *
 * @deprecated since version 4.3, to be removed in 5.0; use Twig instead.
 */
class TranslatorHelper extends Helper
{
    use TranslatorTrait {
        getLocale as private;
        setLocale as private;
        trans as private doTrans;
    }

    protected \$translator;

    /**
     * @param TranslatorInterface|null \$translator
     */
    public function __construct(\$translator = null)
    {
        if (null !== \$translator && !\$translator instanceof LegacyTranslatorInterface && !\$translator instanceof TranslatorInterface) {
            throw new \\TypeError(sprintf('Argument 1 passed to %s() must be an instance of %s, %s given.', __METHOD__, TranslatorInterface::class, \\is_object(\$translator) ? \\get_class(\$translator) : \\gettype(\$translator)));
        }
        \$this->translator = \$translator;
    }

    /**
     * @see TranslatorInterface::trans()
     */
    public function trans(\$id, array \$parameters = [], \$domain = 'messages', \$locale = null)
    {
        if (null === \$this->translator) {
            return \$this->doTrans(\$id, \$parameters, \$domain, \$locale);
        }

        return \$this->translator->trans(\$id, \$parameters, \$domain, \$locale);
    }

    /**
     * @see TranslatorInterface::transChoice()
     * @deprecated since Symfony 4.2, use the trans() method instead with a %count% parameter
     */
    public function transChoice(\$id, \$number, array \$parameters = [], \$domain = 'messages', \$locale = null)
    {
        @trigger_error(sprintf('The \"%s()\" method is deprecated since Symfony 4.2, use the trans() one instead with a \"%%count%%\" parameter.', __METHOD__), E_USER_DEPRECATED);

        if (null === \$this->translator) {
            return \$this->doTrans(\$id, ['%count%' => \$number] + \$parameters, \$domain, \$locale);
        }
        if (\$this->translator instanceof TranslatorInterface) {
            return \$this->translator->trans(\$id, ['%count%' => \$number] + \$parameters, \$domain, \$locale);
        }

        return \$this->translator->transChoice(\$id, \$number, \$parameters, \$domain, \$locale);
    }

    /**
     * {@inheritdoc}
     */
    public function getName()
    {
        return 'translator';
    }
}
", "vendor/symfony/framework-bundle/Templating/Helper/TranslatorHelper.php", "/var/www/public/DevLaon/templates/vendor/symfony/framework-bundle/Templating/Helper/TranslatorHelper.php");
    }
}
