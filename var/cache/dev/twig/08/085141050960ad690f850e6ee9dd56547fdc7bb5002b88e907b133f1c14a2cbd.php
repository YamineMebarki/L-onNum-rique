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

/* vendor/symfony/flex/tests/PackageResolverTest.php */
class __TwigTemplate_42c27e97346a38880f1eab4f33ba4400943273fde08d28c0922e372729c57d3d extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/flex/tests/PackageResolverTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/flex/tests/PackageResolverTest.php"));

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

namespace Symfony\\Flex\\Tests;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Flex\\PackageResolver;

class PackageResolverTest extends TestCase
{
    /**
     * @dataProvider getPackages
     */
    public function testResolve(\$packages, \$resolved)
    {
        \$this->assertEquals(\$resolved, \$this->getResolver()->resolve(\$packages));
    }

    public function getPackages()
    {
        return [
            [
                ['cli'],
                ['symfony/console'],
            ],
            [
                ['console', 'validator', 'translation'],
                ['symfony/console', 'symfony/validator', 'symfony/translation'],
            ],
            [
                ['cli', 'lts', 'validator', '3.2', 'translation'],
                ['symfony/console:^3.4', 'symfony/validator:3.2', 'symfony/translation'],
            ],
            [
                ['cli:lts', 'validator=3.2', 'translation', 'next'],
                ['symfony/console:^3.4', 'symfony/validator:3.2', 'symfony/translation:^4.0@dev'],
            ],
            [
                ['php'],
                ['php'],
            ],
            [
                ['ext-mongodb'],
                ['ext-mongodb'],
            ],
        ];
    }

    /**
     * @dataProvider getWrongPackages
     */
    public function testResolveWithErrors(\$packages, \$error)
    {
        \$this->expectException(\\UnexpectedValueException::class);
        \$this->expectExceptionMessage(\$error);
        \$this->getResolver()->resolve(\$packages);
    }

    public function getWrongPackages()
    {
        return [
            [
                ['consale'],
                \"\\\"consale\\\" is not a valid alias. Did you mean this:\\n  \\\"symfony/console\\\", supported aliases: \\\"console\\\"\",
            ],
            [
                ['cli', 'consale'],
                \"\\\"consale\\\" is not a valid alias. Did you mean this:\\n  \\\"symfony/console\\\", supported aliases: \\\"console\\\"\",
            ],
            [
                ['cli', '2.3', 'consale'],
                \"\\\"consale\\\" is not a valid alias. Did you mean this:\\n  \\\"symfony/console\\\", supported aliases: \\\"console\\\"\",
            ],

            [
                ['qwerty'],
                '\"qwerty\" is not a valid alias.',
            ],
        ];
    }

    private function getResolver()
    {
        \$downloader = \$this->getMockBuilder('Symfony\\Flex\\Downloader')->disableOriginalConstructor()->getMock();
        \$downloader->expects(\$this->any())
            ->method('getVersions')
            ->willReturn([
                'lts' => '3.4',
                'next' => '4.0',
                'splits' => [
                    'symfony/console' => ['3.4'],
                    'symfony/translation' => ['3.4'],
                    'symfony/validator' => ['3.4'],
                ],
            ]);

        \$resolver = new PackageResolver(\$downloader);
        \$p = new \\ReflectionProperty(\$resolver, 'aliases');
        \$p->setAccessible(true);
        \$p->setValue(\$resolver, [
            'cli' => 'symfony/console',
            'console' => 'symfony/console',
            'translation' => 'symfony/translation',
            'validator' => 'symfony/validator',
        ]);

        return \$resolver;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/flex/tests/PackageResolverTest.php";
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

namespace Symfony\\Flex\\Tests;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Flex\\PackageResolver;

class PackageResolverTest extends TestCase
{
    /**
     * @dataProvider getPackages
     */
    public function testResolve(\$packages, \$resolved)
    {
        \$this->assertEquals(\$resolved, \$this->getResolver()->resolve(\$packages));
    }

    public function getPackages()
    {
        return [
            [
                ['cli'],
                ['symfony/console'],
            ],
            [
                ['console', 'validator', 'translation'],
                ['symfony/console', 'symfony/validator', 'symfony/translation'],
            ],
            [
                ['cli', 'lts', 'validator', '3.2', 'translation'],
                ['symfony/console:^3.4', 'symfony/validator:3.2', 'symfony/translation'],
            ],
            [
                ['cli:lts', 'validator=3.2', 'translation', 'next'],
                ['symfony/console:^3.4', 'symfony/validator:3.2', 'symfony/translation:^4.0@dev'],
            ],
            [
                ['php'],
                ['php'],
            ],
            [
                ['ext-mongodb'],
                ['ext-mongodb'],
            ],
        ];
    }

    /**
     * @dataProvider getWrongPackages
     */
    public function testResolveWithErrors(\$packages, \$error)
    {
        \$this->expectException(\\UnexpectedValueException::class);
        \$this->expectExceptionMessage(\$error);
        \$this->getResolver()->resolve(\$packages);
    }

    public function getWrongPackages()
    {
        return [
            [
                ['consale'],
                \"\\\"consale\\\" is not a valid alias. Did you mean this:\\n  \\\"symfony/console\\\", supported aliases: \\\"console\\\"\",
            ],
            [
                ['cli', 'consale'],
                \"\\\"consale\\\" is not a valid alias. Did you mean this:\\n  \\\"symfony/console\\\", supported aliases: \\\"console\\\"\",
            ],
            [
                ['cli', '2.3', 'consale'],
                \"\\\"consale\\\" is not a valid alias. Did you mean this:\\n  \\\"symfony/console\\\", supported aliases: \\\"console\\\"\",
            ],

            [
                ['qwerty'],
                '\"qwerty\" is not a valid alias.',
            ],
        ];
    }

    private function getResolver()
    {
        \$downloader = \$this->getMockBuilder('Symfony\\Flex\\Downloader')->disableOriginalConstructor()->getMock();
        \$downloader->expects(\$this->any())
            ->method('getVersions')
            ->willReturn([
                'lts' => '3.4',
                'next' => '4.0',
                'splits' => [
                    'symfony/console' => ['3.4'],
                    'symfony/translation' => ['3.4'],
                    'symfony/validator' => ['3.4'],
                ],
            ]);

        \$resolver = new PackageResolver(\$downloader);
        \$p = new \\ReflectionProperty(\$resolver, 'aliases');
        \$p->setAccessible(true);
        \$p->setValue(\$resolver, [
            'cli' => 'symfony/console',
            'console' => 'symfony/console',
            'translation' => 'symfony/translation',
            'validator' => 'symfony/validator',
        ]);

        return \$resolver;
    }
}
", "vendor/symfony/flex/tests/PackageResolverTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/flex/tests/PackageResolverTest.php");
    }
}
