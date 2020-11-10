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

/* vendor/symfony/translation/IdentityTranslator.php */
class __TwigTemplate_8ce75bf6061a59c07efdbc114e56675e6cfe2ebfb50ead7adb1dd3585e42288f extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/translation/IdentityTranslator.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/translation/IdentityTranslator.php"));

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

namespace Symfony\\Component\\Translation;

use Symfony\\Component\\Translation\\TranslatorInterface as LegacyTranslatorInterface;
use Symfony\\Contracts\\Translation\\TranslatorInterface;
use Symfony\\Contracts\\Translation\\TranslatorTrait;

/**
 * IdentityTranslator does not translate anything.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
class IdentityTranslator implements LegacyTranslatorInterface, TranslatorInterface
{
    use TranslatorTrait;

    private \$selector;

    /**
     * @param MessageSelector|null \$selector The message selector for pluralization
     */
    public function __construct(MessageSelector \$selector = null)
    {
        \$this->selector = \$selector;

        if (__CLASS__ !== \\get_class(\$this)) {
            @trigger_error(sprintf('Calling \"%s()\" is deprecated since Symfony 4.2.', __METHOD__), E_USER_DEPRECATED);
        }
    }

    /**
     * {@inheritdoc}
     *
     * @deprecated since Symfony 4.2, use the trans() method instead with a %count% parameter
     */
    public function transChoice(\$id, \$number, array \$parameters = [], \$domain = null, \$locale = null)
    {
        @trigger_error(sprintf('The \"%s()\" method is deprecated since Symfony 4.2, use the trans() one instead with a \"%%count%%\" parameter.', __METHOD__), E_USER_DEPRECATED);

        if (\$this->selector) {
            return strtr(\$this->selector->choose((string) \$id, \$number, \$locale ?: \$this->getLocale()), \$parameters);
        }

        return \$this->trans(\$id, ['%count%' => \$number] + \$parameters, \$domain, \$locale);
    }

    private function getPluralizationRule(int \$number, string \$locale): int
    {
        return PluralizationRules::get(\$number, \$locale, false);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/translation/IdentityTranslator.php";
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

namespace Symfony\\Component\\Translation;

use Symfony\\Component\\Translation\\TranslatorInterface as LegacyTranslatorInterface;
use Symfony\\Contracts\\Translation\\TranslatorInterface;
use Symfony\\Contracts\\Translation\\TranslatorTrait;

/**
 * IdentityTranslator does not translate anything.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
class IdentityTranslator implements LegacyTranslatorInterface, TranslatorInterface
{
    use TranslatorTrait;

    private \$selector;

    /**
     * @param MessageSelector|null \$selector The message selector for pluralization
     */
    public function __construct(MessageSelector \$selector = null)
    {
        \$this->selector = \$selector;

        if (__CLASS__ !== \\get_class(\$this)) {
            @trigger_error(sprintf('Calling \"%s()\" is deprecated since Symfony 4.2.', __METHOD__), E_USER_DEPRECATED);
        }
    }

    /**
     * {@inheritdoc}
     *
     * @deprecated since Symfony 4.2, use the trans() method instead with a %count% parameter
     */
    public function transChoice(\$id, \$number, array \$parameters = [], \$domain = null, \$locale = null)
    {
        @trigger_error(sprintf('The \"%s()\" method is deprecated since Symfony 4.2, use the trans() one instead with a \"%%count%%\" parameter.', __METHOD__), E_USER_DEPRECATED);

        if (\$this->selector) {
            return strtr(\$this->selector->choose((string) \$id, \$number, \$locale ?: \$this->getLocale()), \$parameters);
        }

        return \$this->trans(\$id, ['%count%' => \$number] + \$parameters, \$domain, \$locale);
    }

    private function getPluralizationRule(int \$number, string \$locale): int
    {
        return PluralizationRules::get(\$number, \$locale, false);
    }
}
", "vendor/symfony/translation/IdentityTranslator.php", "/var/www/public/DevLaon/templates/vendor/symfony/translation/IdentityTranslator.php");
    }
}
