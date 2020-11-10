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

/* vendor/symfony/security-http/Tests/AccessMapTest.php */
class __TwigTemplate_9122db3774ef5c42a5eb1535fc6a1e19ecc69a71ce7b5e7a19f2334cffddd3e3 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/security-http/Tests/AccessMapTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/security-http/Tests/AccessMapTest.php"));

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

namespace Symfony\\Component\\Security\\Http\\Tests;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\Security\\Http\\AccessMap;

class AccessMapTest extends TestCase
{
    public function testReturnsFirstMatchedPattern()
    {
        \$request = \$this->getMockBuilder('Symfony\\Component\\HttpFoundation\\Request')->getMock();
        \$requestMatcher1 = \$this->getRequestMatcher(\$request, false);
        \$requestMatcher2 = \$this->getRequestMatcher(\$request, true);

        \$map = new AccessMap();
        \$map->add(\$requestMatcher1, ['ROLE_ADMIN'], 'http');
        \$map->add(\$requestMatcher2, ['ROLE_USER'], 'https');

        \$this->assertSame([['ROLE_USER'], 'https'], \$map->getPatterns(\$request));
    }

    public function testReturnsEmptyPatternIfNoneMatched()
    {
        \$request = \$this->getMockBuilder('Symfony\\Component\\HttpFoundation\\Request')->getMock();
        \$requestMatcher = \$this->getRequestMatcher(\$request, false);

        \$map = new AccessMap();
        \$map->add(\$requestMatcher, ['ROLE_USER'], 'https');

        \$this->assertSame([null, null], \$map->getPatterns(\$request));
    }

    private function getRequestMatcher(\$request, \$matches)
    {
        \$requestMatcher = \$this->getMockBuilder('Symfony\\Component\\HttpFoundation\\RequestMatcherInterface')->getMock();
        \$requestMatcher->expects(\$this->once())
            ->method('matches')->with(\$request)
            ->willReturn(\$matches);

        return \$requestMatcher;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/security-http/Tests/AccessMapTest.php";
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

namespace Symfony\\Component\\Security\\Http\\Tests;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\Security\\Http\\AccessMap;

class AccessMapTest extends TestCase
{
    public function testReturnsFirstMatchedPattern()
    {
        \$request = \$this->getMockBuilder('Symfony\\Component\\HttpFoundation\\Request')->getMock();
        \$requestMatcher1 = \$this->getRequestMatcher(\$request, false);
        \$requestMatcher2 = \$this->getRequestMatcher(\$request, true);

        \$map = new AccessMap();
        \$map->add(\$requestMatcher1, ['ROLE_ADMIN'], 'http');
        \$map->add(\$requestMatcher2, ['ROLE_USER'], 'https');

        \$this->assertSame([['ROLE_USER'], 'https'], \$map->getPatterns(\$request));
    }

    public function testReturnsEmptyPatternIfNoneMatched()
    {
        \$request = \$this->getMockBuilder('Symfony\\Component\\HttpFoundation\\Request')->getMock();
        \$requestMatcher = \$this->getRequestMatcher(\$request, false);

        \$map = new AccessMap();
        \$map->add(\$requestMatcher, ['ROLE_USER'], 'https');

        \$this->assertSame([null, null], \$map->getPatterns(\$request));
    }

    private function getRequestMatcher(\$request, \$matches)
    {
        \$requestMatcher = \$this->getMockBuilder('Symfony\\Component\\HttpFoundation\\RequestMatcherInterface')->getMock();
        \$requestMatcher->expects(\$this->once())
            ->method('matches')->with(\$request)
            ->willReturn(\$matches);

        return \$requestMatcher;
    }
}
", "vendor/symfony/security-http/Tests/AccessMapTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/security-http/Tests/AccessMapTest.php");
    }
}
