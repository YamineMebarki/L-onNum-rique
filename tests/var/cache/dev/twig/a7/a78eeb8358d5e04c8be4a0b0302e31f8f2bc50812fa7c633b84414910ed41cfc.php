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

/* vendor/symfony/serializer/Tests/Fixtures/Dummy.php */
class __TwigTemplate_12087d65449d479ae99eac7a07ded0e66a71ff4033fc4bb91d962ebf9a96942c extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/serializer/Tests/Fixtures/Dummy.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/serializer/Tests/Fixtures/Dummy.php"));

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

namespace Symfony\\Component\\Serializer\\Tests\\Fixtures;

use Symfony\\Component\\Serializer\\Normalizer\\DenormalizableInterface;
use Symfony\\Component\\Serializer\\Normalizer\\DenormalizerInterface;
use Symfony\\Component\\Serializer\\Normalizer\\NormalizableInterface;
use Symfony\\Component\\Serializer\\Normalizer\\NormalizerInterface;

class Dummy implements NormalizableInterface, DenormalizableInterface
{
    public \$foo;
    public \$bar;
    public \$baz;
    public \$qux;

    public function normalize(NormalizerInterface \$normalizer, \$format = null, array \$context = [])
    {
        return [
            'foo' => \$this->foo,
            'bar' => \$this->bar,
            'baz' => \$this->baz,
            'qux' => \$this->qux,
        ];
    }

    public function denormalize(DenormalizerInterface \$denormalizer, \$data, \$format = null, array \$context = [])
    {
        \$this->foo = \$data['foo'];
        \$this->bar = \$data['bar'];
        \$this->baz = \$data['baz'];
        \$this->qux = \$data['qux'];
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/serializer/Tests/Fixtures/Dummy.php";
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

namespace Symfony\\Component\\Serializer\\Tests\\Fixtures;

use Symfony\\Component\\Serializer\\Normalizer\\DenormalizableInterface;
use Symfony\\Component\\Serializer\\Normalizer\\DenormalizerInterface;
use Symfony\\Component\\Serializer\\Normalizer\\NormalizableInterface;
use Symfony\\Component\\Serializer\\Normalizer\\NormalizerInterface;

class Dummy implements NormalizableInterface, DenormalizableInterface
{
    public \$foo;
    public \$bar;
    public \$baz;
    public \$qux;

    public function normalize(NormalizerInterface \$normalizer, \$format = null, array \$context = [])
    {
        return [
            'foo' => \$this->foo,
            'bar' => \$this->bar,
            'baz' => \$this->baz,
            'qux' => \$this->qux,
        ];
    }

    public function denormalize(DenormalizerInterface \$denormalizer, \$data, \$format = null, array \$context = [])
    {
        \$this->foo = \$data['foo'];
        \$this->bar = \$data['bar'];
        \$this->baz = \$data['baz'];
        \$this->qux = \$data['qux'];
    }
}
", "vendor/symfony/serializer/Tests/Fixtures/Dummy.php", "/var/www/public/DevLaon/templates/vendor/symfony/serializer/Tests/Fixtures/Dummy.php");
    }
}
