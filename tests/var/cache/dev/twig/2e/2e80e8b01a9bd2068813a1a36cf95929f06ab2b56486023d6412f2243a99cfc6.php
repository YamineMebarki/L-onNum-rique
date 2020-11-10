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

/* vendor/symfony/form/Extension/Core/Type/MoneyType.php */
class __TwigTemplate_ffae29872ab206ea63823cb70366468c39b9bd7c946bb6e7fe0fb2325928b082 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/form/Extension/Core/Type/MoneyType.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/form/Extension/Core/Type/MoneyType.php"));

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

namespace Symfony\\Component\\Form\\Extension\\Core\\Type;

use Symfony\\Component\\Form\\AbstractType;
use Symfony\\Component\\Form\\Extension\\Core\\DataTransformer\\MoneyToLocalizedStringTransformer;
use Symfony\\Component\\Form\\Extension\\Core\\DataTransformer\\NumberToLocalizedStringTransformer;
use Symfony\\Component\\Form\\FormBuilderInterface;
use Symfony\\Component\\Form\\FormInterface;
use Symfony\\Component\\Form\\FormView;
use Symfony\\Component\\OptionsResolver\\OptionsResolver;

class MoneyType extends AbstractType
{
    protected static \$patterns = [];

    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface \$builder, array \$options)
    {
        \$builder
            ->addViewTransformer(new MoneyToLocalizedStringTransformer(
                \$options['scale'],
                \$options['grouping'],
                \$options['rounding_mode'],
                \$options['divisor']
            ))
        ;
    }

    /**
     * {@inheritdoc}
     */
    public function buildView(FormView \$view, FormInterface \$form, array \$options)
    {
        \$view->vars['money_pattern'] = self::getPattern(\$options['currency']);
    }

    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver \$resolver)
    {
        \$resolver->setDefaults([
            'scale' => 2,
            'grouping' => false,
            'rounding_mode' => NumberToLocalizedStringTransformer::ROUND_HALF_UP,
            'divisor' => 1,
            'currency' => 'EUR',
            'compound' => false,
        ]);

        \$resolver->setAllowedValues('rounding_mode', [
            NumberToLocalizedStringTransformer::ROUND_FLOOR,
            NumberToLocalizedStringTransformer::ROUND_DOWN,
            NumberToLocalizedStringTransformer::ROUND_HALF_DOWN,
            NumberToLocalizedStringTransformer::ROUND_HALF_EVEN,
            NumberToLocalizedStringTransformer::ROUND_HALF_UP,
            NumberToLocalizedStringTransformer::ROUND_UP,
            NumberToLocalizedStringTransformer::ROUND_CEILING,
        ]);

        \$resolver->setAllowedTypes('scale', 'int');
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'money';
    }

    /**
     * Returns the pattern for this locale in UTF-8.
     *
     * The pattern contains the placeholder \"";
        // line 87
        echo twig_escape_filter($this->env, (isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new RuntimeError('Variable "widget" does not exist.', 87, $this->source); })()), "html", null, true);
        echo "\" where the HTML tag should
     * be inserted
     */
    protected static function getPattern(\$currency)
    {
        if (!\$currency) {
            return '";
        // line 93
        echo twig_escape_filter($this->env, (isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new RuntimeError('Variable "widget" does not exist.', 93, $this->source); })()), "html", null, true);
        echo "';
        }

        \$locale = \\Locale::getDefault();

        if (!isset(self::\$patterns[\$locale])) {
            self::\$patterns[\$locale] = [];
        }

        if (!isset(self::\$patterns[\$locale][\$currency])) {
            \$format = new \\NumberFormatter(\$locale, \\NumberFormatter::CURRENCY);
            \$pattern = \$format->formatCurrency('123', \$currency);

            // the spacings between currency symbol and number are ignored, because
            // a single space leads to better readability in combination with input
            // fields

            // the regex also considers non-break spaces (0xC2 or 0xA0 in UTF-8)

            preg_match('/^([^\\s\\xc2\\xa0]*)[\\s\\xc2\\xa0]*123(?:[,.]0+)?[\\s\\xc2\\xa0]*([^\\s\\xc2\\xa0]*)\$/u', \$pattern, \$matches);

            if (!empty(\$matches[1])) {
                self::\$patterns[\$locale][\$currency] = \$matches[1].' ";
        // line 115
        echo twig_escape_filter($this->env, (isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new RuntimeError('Variable "widget" does not exist.', 115, $this->source); })()), "html", null, true);
        echo "';
            } elseif (!empty(\$matches[2])) {
                self::\$patterns[\$locale][\$currency] = '";
        // line 117
        echo twig_escape_filter($this->env, (isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new RuntimeError('Variable "widget" does not exist.', 117, $this->source); })()), "html", null, true);
        echo " '.\$matches[2];
            } else {
                self::\$patterns[\$locale][\$currency] = '";
        // line 119
        echo twig_escape_filter($this->env, (isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new RuntimeError('Variable "widget" does not exist.', 119, $this->source); })()), "html", null, true);
        echo "';
            }
        }

        return self::\$patterns[\$locale][\$currency];
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/form/Extension/Core/Type/MoneyType.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  175 => 119,  170 => 117,  165 => 115,  140 => 93,  131 => 87,  43 => 1,);
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

namespace Symfony\\Component\\Form\\Extension\\Core\\Type;

use Symfony\\Component\\Form\\AbstractType;
use Symfony\\Component\\Form\\Extension\\Core\\DataTransformer\\MoneyToLocalizedStringTransformer;
use Symfony\\Component\\Form\\Extension\\Core\\DataTransformer\\NumberToLocalizedStringTransformer;
use Symfony\\Component\\Form\\FormBuilderInterface;
use Symfony\\Component\\Form\\FormInterface;
use Symfony\\Component\\Form\\FormView;
use Symfony\\Component\\OptionsResolver\\OptionsResolver;

class MoneyType extends AbstractType
{
    protected static \$patterns = [];

    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface \$builder, array \$options)
    {
        \$builder
            ->addViewTransformer(new MoneyToLocalizedStringTransformer(
                \$options['scale'],
                \$options['grouping'],
                \$options['rounding_mode'],
                \$options['divisor']
            ))
        ;
    }

    /**
     * {@inheritdoc}
     */
    public function buildView(FormView \$view, FormInterface \$form, array \$options)
    {
        \$view->vars['money_pattern'] = self::getPattern(\$options['currency']);
    }

    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver \$resolver)
    {
        \$resolver->setDefaults([
            'scale' => 2,
            'grouping' => false,
            'rounding_mode' => NumberToLocalizedStringTransformer::ROUND_HALF_UP,
            'divisor' => 1,
            'currency' => 'EUR',
            'compound' => false,
        ]);

        \$resolver->setAllowedValues('rounding_mode', [
            NumberToLocalizedStringTransformer::ROUND_FLOOR,
            NumberToLocalizedStringTransformer::ROUND_DOWN,
            NumberToLocalizedStringTransformer::ROUND_HALF_DOWN,
            NumberToLocalizedStringTransformer::ROUND_HALF_EVEN,
            NumberToLocalizedStringTransformer::ROUND_HALF_UP,
            NumberToLocalizedStringTransformer::ROUND_UP,
            NumberToLocalizedStringTransformer::ROUND_CEILING,
        ]);

        \$resolver->setAllowedTypes('scale', 'int');
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'money';
    }

    /**
     * Returns the pattern for this locale in UTF-8.
     *
     * The pattern contains the placeholder \"{{ widget }}\" where the HTML tag should
     * be inserted
     */
    protected static function getPattern(\$currency)
    {
        if (!\$currency) {
            return '{{ widget }}';
        }

        \$locale = \\Locale::getDefault();

        if (!isset(self::\$patterns[\$locale])) {
            self::\$patterns[\$locale] = [];
        }

        if (!isset(self::\$patterns[\$locale][\$currency])) {
            \$format = new \\NumberFormatter(\$locale, \\NumberFormatter::CURRENCY);
            \$pattern = \$format->formatCurrency('123', \$currency);

            // the spacings between currency symbol and number are ignored, because
            // a single space leads to better readability in combination with input
            // fields

            // the regex also considers non-break spaces (0xC2 or 0xA0 in UTF-8)

            preg_match('/^([^\\s\\xc2\\xa0]*)[\\s\\xc2\\xa0]*123(?:[,.]0+)?[\\s\\xc2\\xa0]*([^\\s\\xc2\\xa0]*)\$/u', \$pattern, \$matches);

            if (!empty(\$matches[1])) {
                self::\$patterns[\$locale][\$currency] = \$matches[1].' {{ widget }}';
            } elseif (!empty(\$matches[2])) {
                self::\$patterns[\$locale][\$currency] = '{{ widget }} '.\$matches[2];
            } else {
                self::\$patterns[\$locale][\$currency] = '{{ widget }}';
            }
        }

        return self::\$patterns[\$locale][\$currency];
    }
}
", "vendor/symfony/form/Extension/Core/Type/MoneyType.php", "/var/www/public/DevLaon/templates/vendor/symfony/form/Extension/Core/Type/MoneyType.php");
    }
}
