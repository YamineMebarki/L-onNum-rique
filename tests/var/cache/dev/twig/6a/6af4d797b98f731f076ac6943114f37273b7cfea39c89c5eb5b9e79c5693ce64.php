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

/* vendor/symfony/var-dumper/Tests/Caster/MemcachedCasterTest.php */
class __TwigTemplate_cc872859cdb85cd3cca691cdc147d6185b493bfaba6ab13a27e338674f2b4552 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/var-dumper/Tests/Caster/MemcachedCasterTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/var-dumper/Tests/Caster/MemcachedCasterTest.php"));

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

namespace Symfony\\Component\\VarDumper\\Tests\\Caster;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\VarDumper\\Test\\VarDumperTestTrait;

/**
 * @author Jan Schädlich <jan.schaedlich@sensiolabs.de>
 */
class MemcachedCasterTest extends TestCase
{
    use VarDumperTestTrait;

    public function testCastMemcachedWithDefaultOptions()
    {
        if (!class_exists('Memcached')) {
            \$this->markTestSkipped('Memcached not available');
        }

        \$var = new \\Memcached();
        \$var->addServer('127.0.0.1', 11211);
        \$var->addServer('127.0.0.2', 11212);

        \$expected = <<<EOTXT
Memcached {
  servers: array:2 [
    0 => array:3 [
      \"host\" => \"127.0.0.1\"
      \"port\" => 11211
      \"type\" => \"TCP\"
    ]
    1 => array:3 [
      \"host\" => \"127.0.0.2\"
      \"port\" => 11212
      \"type\" => \"TCP\"
    ]
  ]
  options: {}
}
EOTXT;
        \$this->assertDumpEquals(\$expected, \$var);
    }

    public function testCastMemcachedWithCustomOptions()
    {
        if (!class_exists('Memcached')) {
            \$this->markTestSkipped('Memcached not available');
        }

        \$var = new \\Memcached();
        \$var->addServer('127.0.0.1', 11211);
        \$var->addServer('127.0.0.2', 11212);

        // set a subset of non default options to test boolean, string and integer output
        \$var->setOption(\\Memcached::OPT_COMPRESSION, false);
        \$var->setOption(\\Memcached::OPT_PREFIX_KEY, 'pre');
        \$var->setOption(\\Memcached::OPT_DISTRIBUTION, \\Memcached::DISTRIBUTION_CONSISTENT);

        \$expected = <<<'EOTXT'
Memcached {
  servers: array:2 [
    0 => array:3 [
      \"host\" => \"127.0.0.1\"
      \"port\" => 11211
      \"type\" => \"TCP\"
    ]
    1 => array:3 [
      \"host\" => \"127.0.0.2\"
      \"port\" => 11212
      \"type\" => \"TCP\"
    ]
  ]
  options: {
    OPT_COMPRESSION: false
    OPT_PREFIX_KEY: \"pre\"
    OPT_DISTRIBUTION: 1
  }
}
EOTXT;

        \$this->assertDumpEquals(\$expected, \$var);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/var-dumper/Tests/Caster/MemcachedCasterTest.php";
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

namespace Symfony\\Component\\VarDumper\\Tests\\Caster;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\VarDumper\\Test\\VarDumperTestTrait;

/**
 * @author Jan Schädlich <jan.schaedlich@sensiolabs.de>
 */
class MemcachedCasterTest extends TestCase
{
    use VarDumperTestTrait;

    public function testCastMemcachedWithDefaultOptions()
    {
        if (!class_exists('Memcached')) {
            \$this->markTestSkipped('Memcached not available');
        }

        \$var = new \\Memcached();
        \$var->addServer('127.0.0.1', 11211);
        \$var->addServer('127.0.0.2', 11212);

        \$expected = <<<EOTXT
Memcached {
  servers: array:2 [
    0 => array:3 [
      \"host\" => \"127.0.0.1\"
      \"port\" => 11211
      \"type\" => \"TCP\"
    ]
    1 => array:3 [
      \"host\" => \"127.0.0.2\"
      \"port\" => 11212
      \"type\" => \"TCP\"
    ]
  ]
  options: {}
}
EOTXT;
        \$this->assertDumpEquals(\$expected, \$var);
    }

    public function testCastMemcachedWithCustomOptions()
    {
        if (!class_exists('Memcached')) {
            \$this->markTestSkipped('Memcached not available');
        }

        \$var = new \\Memcached();
        \$var->addServer('127.0.0.1', 11211);
        \$var->addServer('127.0.0.2', 11212);

        // set a subset of non default options to test boolean, string and integer output
        \$var->setOption(\\Memcached::OPT_COMPRESSION, false);
        \$var->setOption(\\Memcached::OPT_PREFIX_KEY, 'pre');
        \$var->setOption(\\Memcached::OPT_DISTRIBUTION, \\Memcached::DISTRIBUTION_CONSISTENT);

        \$expected = <<<'EOTXT'
Memcached {
  servers: array:2 [
    0 => array:3 [
      \"host\" => \"127.0.0.1\"
      \"port\" => 11211
      \"type\" => \"TCP\"
    ]
    1 => array:3 [
      \"host\" => \"127.0.0.2\"
      \"port\" => 11212
      \"type\" => \"TCP\"
    ]
  ]
  options: {
    OPT_COMPRESSION: false
    OPT_PREFIX_KEY: \"pre\"
    OPT_DISTRIBUTION: 1
  }
}
EOTXT;

        \$this->assertDumpEquals(\$expected, \$var);
    }
}
", "vendor/symfony/var-dumper/Tests/Caster/MemcachedCasterTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/var-dumper/Tests/Caster/MemcachedCasterTest.php");
    }
}
