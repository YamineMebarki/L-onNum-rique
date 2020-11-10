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

/* vendor/symfony/form/Extension/Core/Type/TextType.php */
class __TwigTemplate_437c305109cfd0261d515b1b63aaa381afdeaa737180ca5596ced6ac4d6e4735 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/form/Extension/Core/Type/TextType.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/form/Extension/Core/Type/TextType.php"));

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
use Symfony\\Component\\Form\\DataTransformerInterface;
use Symfony\\Component\\Form\\FormBuilderInterface;
use Symfony\\Component\\OptionsResolver\\OptionsResolver;

class TextType extends AbstractType implements DataTransformerInterface
{
    public function buildForm(FormBuilderInterface \$builder, array \$options)
    {
        // When empty_data is explicitly set to an empty string,
        // a string should always be returned when NULL is submitted
        // This gives more control and thus helps preventing some issues
        // with PHP 7 which allows type hinting strings in functions
        // See https://github.com/symfony/symfony/issues/5906#issuecomment-203189375
        if ('' === \$options['empty_data']) {
            \$builder->addViewTransformer(\$this);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver \$resolver)
    {
        \$resolver->setDefaults([
            'compound' => false,
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'text';
    }

    /**
     * {@inheritdoc}
     */
    public function transform(\$data)
    {
        // Model data should not be transformed
        return \$data;
    }

    /**
     * {@inheritdoc}
     */
    public function reverseTransform(\$data)
    {
        return null === \$data ? '' : \$data;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/form/Extension/Core/Type/TextType.php";
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

namespace Symfony\\Component\\Form\\Extension\\Core\\Type;

use Symfony\\Component\\Form\\AbstractType;
use Symfony\\Component\\Form\\DataTransformerInterface;
use Symfony\\Component\\Form\\FormBuilderInterface;
use Symfony\\Component\\OptionsResolver\\OptionsResolver;

class TextType extends AbstractType implements DataTransformerInterface
{
    public function buildForm(FormBuilderInterface \$builder, array \$options)
    {
        // When empty_data is explicitly set to an empty string,
        // a string should always be returned when NULL is submitted
        // This gives more control and thus helps preventing some issues
        // with PHP 7 which allows type hinting strings in functions
        // See https://github.com/symfony/symfony/issues/5906#issuecomment-203189375
        if ('' === \$options['empty_data']) {
            \$builder->addViewTransformer(\$this);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver \$resolver)
    {
        \$resolver->setDefaults([
            'compound' => false,
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'text';
    }

    /**
     * {@inheritdoc}
     */
    public function transform(\$data)
    {
        // Model data should not be transformed
        return \$data;
    }

    /**
     * {@inheritdoc}
     */
    public function reverseTransform(\$data)
    {
        return null === \$data ? '' : \$data;
    }
}
", "vendor/symfony/form/Extension/Core/Type/TextType.php", "/var/www/public/DevLaon/templates/vendor/symfony/form/Extension/Core/Type/TextType.php");
    }
}
