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

/* vendor/symfony/form/Tests/Extension/Validator/Type/UploadValidatorExtensionTest.php */
class __TwigTemplate_4161055c3b2f324f5958ff2aa991a3548c53210839bd8b6f12d1e62b9dbf19d0 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/form/Tests/Extension/Validator/Type/UploadValidatorExtensionTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/form/Tests/Extension/Validator/Type/UploadValidatorExtensionTest.php"));

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

namespace Symfony\\Component\\Form\\Tests\\Extension\\Validator\\Type;

use Symfony\\Component\\Form\\Extension\\Validator\\Type\\UploadValidatorExtension;
use Symfony\\Component\\Form\\Test\\TypeTestCase;
use Symfony\\Component\\OptionsResolver\\Options;
use Symfony\\Component\\OptionsResolver\\OptionsResolver;
use Symfony\\Contracts\\Translation\\TranslatorInterface;

class UploadValidatorExtensionTest extends TypeTestCase
{
    public function testPostMaxSizeTranslation()
    {
        \$extension = new UploadValidatorExtension(new DummyTranslator());

        \$resolver = new OptionsResolver();
        \$resolver->setDefault('post_max_size_message', 'old max ";
        // line 27
        echo twig_escape_filter($this->env, (isset($context["max"]) || array_key_exists("max", $context) ? $context["max"] : (function () { throw new RuntimeError('Variable "max" does not exist.', 27, $this->source); })()), "html", null, true);
        echo "!');
        \$resolver->setDefault('upload_max_size_message', function (Options \$options) {
            return function () use (\$options) {
                return \$options['post_max_size_message'];
            };
        });

        \$extension->configureOptions(\$resolver);
        \$options = \$resolver->resolve();

        \$this->assertEquals('translated max ";
        // line 37
        echo twig_escape_filter($this->env, (isset($context["max"]) || array_key_exists("max", $context) ? $context["max"] : (function () { throw new RuntimeError('Variable "max" does not exist.', 37, $this->source); })()), "html", null, true);
        echo "!', \$options['upload_max_size_message']());
    }
}

class DummyTranslator implements TranslatorInterface
{
    public function trans(\$id, array \$parameters = [], \$domain = null, \$locale = null)
    {
        return 'translated max ";
        // line 45
        echo twig_escape_filter($this->env, (isset($context["max"]) || array_key_exists("max", $context) ? $context["max"] : (function () { throw new RuntimeError('Variable "max" does not exist.', 45, $this->source); })()), "html", null, true);
        echo "!';
    }

    public function transChoice(\$id, \$number, array \$parameters = [], \$domain = null, \$locale = null)
    {
        return 'translated max ";
        // line 50
        echo twig_escape_filter($this->env, (isset($context["max"]) || array_key_exists("max", $context) ? $context["max"] : (function () { throw new RuntimeError('Variable "max" does not exist.', 50, $this->source); })()), "html", null, true);
        echo "!';
    }

    public function setLocale(\$locale)
    {
    }

    public function getLocale()
    {
        return 'en';
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/form/Tests/Extension/Validator/Type/UploadValidatorExtensionTest.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  103 => 50,  95 => 45,  84 => 37,  71 => 27,  43 => 1,);
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

namespace Symfony\\Component\\Form\\Tests\\Extension\\Validator\\Type;

use Symfony\\Component\\Form\\Extension\\Validator\\Type\\UploadValidatorExtension;
use Symfony\\Component\\Form\\Test\\TypeTestCase;
use Symfony\\Component\\OptionsResolver\\Options;
use Symfony\\Component\\OptionsResolver\\OptionsResolver;
use Symfony\\Contracts\\Translation\\TranslatorInterface;

class UploadValidatorExtensionTest extends TypeTestCase
{
    public function testPostMaxSizeTranslation()
    {
        \$extension = new UploadValidatorExtension(new DummyTranslator());

        \$resolver = new OptionsResolver();
        \$resolver->setDefault('post_max_size_message', 'old max {{ max }}!');
        \$resolver->setDefault('upload_max_size_message', function (Options \$options) {
            return function () use (\$options) {
                return \$options['post_max_size_message'];
            };
        });

        \$extension->configureOptions(\$resolver);
        \$options = \$resolver->resolve();

        \$this->assertEquals('translated max {{ max }}!', \$options['upload_max_size_message']());
    }
}

class DummyTranslator implements TranslatorInterface
{
    public function trans(\$id, array \$parameters = [], \$domain = null, \$locale = null)
    {
        return 'translated max {{ max }}!';
    }

    public function transChoice(\$id, \$number, array \$parameters = [], \$domain = null, \$locale = null)
    {
        return 'translated max {{ max }}!';
    }

    public function setLocale(\$locale)
    {
    }

    public function getLocale()
    {
        return 'en';
    }
}
", "vendor/symfony/form/Tests/Extension/Validator/Type/UploadValidatorExtensionTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/form/Tests/Extension/Validator/Type/UploadValidatorExtensionTest.php");
    }
}
