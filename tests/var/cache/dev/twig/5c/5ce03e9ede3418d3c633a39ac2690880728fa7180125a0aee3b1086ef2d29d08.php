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

/* vendor/symfony/flex/tests/CacheTest.php */
class __TwigTemplate_dcda0680f235524eb38fcc613023ec1d065d37e27245f8bc5e1bd9683fdf3d24 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/flex/tests/CacheTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/flex/tests/CacheTest.php"));

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
use Symfony\\Flex\\Cache;

class CacheTest extends TestCase
{
    /**
     * @dataProvider provideRemoveLegacyTags
     */
    public function testRemoveLegacyTags(array \$expected, array \$packages, string \$symfonyRequire, array \$versions)
    {
        \$downloader = \$this->getMockBuilder('Symfony\\Flex\\Downloader')->disableOriginalConstructor()->getMock();
        \$downloader->expects(\$this->once())
            ->method('getVersions')
            ->willReturn(\$versions);
        \$cache = (new \\ReflectionClass(Cache::class))->newInstanceWithoutConstructor();
        \$cache->setSymfonyRequire(\$symfonyRequire, \$downloader);

        \$this->assertSame(['packages' => \$expected], \$cache->removeLegacyTags(['packages' => \$packages]));
    }

    public function provideRemoveLegacyTags()
    {
        yield 'no-symfony/symfony' => [[123], [123], '~1', ['splits' => []]];

        \$branchAlias = function (\$versionAlias) {
            return [
                'extra' => [
                    'branch-alias' => [
                        'dev-master' => \$versionAlias.'-dev',
                    ],
                ],
            ];
        };

        \$packages = [
            'foo/unrelated' => [
                '1.0.0' => [],
            ],
            'symfony/symfony' => [
                '3.3.0' => [
                    'version_normalized' => '3.3.0.0',
                ],
                '3.4.0' => [
                    'version_normalized' => '3.4.0.0',
                ],
                'dev-master' => \$branchAlias('3.5'),
            ],
            'symfony/foo' => [
                '3.3.0' => ['version_normalized' => '3.3.0.0'],
                '3.4.0' => ['version_normalized' => '3.4.0.0'],
                'dev-master' => \$branchAlias('3.5'),
            ],
        ];

        yield 'empty-intersection-ignores' => [\$packages, \$packages, '~2.0', ['splits' => [
            'symfony/foo' => ['3.3', '3.4', '3.5'],
        ]]];
        yield 'empty-intersection-ignores' => [\$packages, \$packages, '~4.0', ['splits' => [
            'symfony/foo' => ['3.3', '3.4', '3.5'],
        ]]];

        \$expected = \$packages;
        unset(\$expected['symfony/symfony']['3.3.0']);
        unset(\$expected['symfony/foo']['3.3.0']);

        yield 'non-empty-intersection-filters' => [\$expected, \$packages, '~3.4', ['splits' => [
            'symfony/foo' => ['3.3', '3.4', '3.5'],
        ]]];

        unset(\$expected['symfony/symfony']['3.4.0']);
        unset(\$expected['symfony/foo']['3.4.0']);

        yield 'master-only' => [\$expected, \$packages, '~3.5', ['splits' => [
            'symfony/foo' => ['3.4', '3.5'],
        ]]];

        \$packages = [
            'symfony/symfony' => [
                '2.8.0' => [
                    'version_normalized' => '2.8.0.0',
                ],
            ],
            'symfony/legacy' => [
                '2.8.0' => ['version_normalized' => '2.8.0.0'],
                'dev-master' => \$branchAlias('2.8'),
            ],
        ];

        yield 'legacy-are-not-filtered' => [\$packages, \$packages, '~3.0', ['splits' => [
            'symfony/legacy' => ['2.8'],
            'symfony/foo' => ['2.8'],
        ]]];

        \$packages = [
            'symfony/symfony' => [
                '2.8.0' => [
                    'version_normalized' => '2.8.0.0',
                ],
                'dev-master' => \$branchAlias('3.0'),
            ],
            'symfony/foo' => [
                '2.8.0' => ['version_normalized' => '2.8.0.0'],
                'dev-master' => \$branchAlias('3.0'),
            ],
            'symfony/new' => [
                'dev-master' => \$branchAlias('3.0'),
            ],
        ];

        \$expected = \$packages;
        unset(\$expected['symfony/symfony']['dev-master']);
        unset(\$expected['symfony/foo']['dev-master']);

        yield 'master-is-filtered-only-when-in-range' => [\$expected, \$packages, '~2.8', ['splits' => [
            'symfony/foo' => ['2.8', '3.0'],
            'symfony/new' => ['3.0'],
        ]]];
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/flex/tests/CacheTest.php";
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
use Symfony\\Flex\\Cache;

class CacheTest extends TestCase
{
    /**
     * @dataProvider provideRemoveLegacyTags
     */
    public function testRemoveLegacyTags(array \$expected, array \$packages, string \$symfonyRequire, array \$versions)
    {
        \$downloader = \$this->getMockBuilder('Symfony\\Flex\\Downloader')->disableOriginalConstructor()->getMock();
        \$downloader->expects(\$this->once())
            ->method('getVersions')
            ->willReturn(\$versions);
        \$cache = (new \\ReflectionClass(Cache::class))->newInstanceWithoutConstructor();
        \$cache->setSymfonyRequire(\$symfonyRequire, \$downloader);

        \$this->assertSame(['packages' => \$expected], \$cache->removeLegacyTags(['packages' => \$packages]));
    }

    public function provideRemoveLegacyTags()
    {
        yield 'no-symfony/symfony' => [[123], [123], '~1', ['splits' => []]];

        \$branchAlias = function (\$versionAlias) {
            return [
                'extra' => [
                    'branch-alias' => [
                        'dev-master' => \$versionAlias.'-dev',
                    ],
                ],
            ];
        };

        \$packages = [
            'foo/unrelated' => [
                '1.0.0' => [],
            ],
            'symfony/symfony' => [
                '3.3.0' => [
                    'version_normalized' => '3.3.0.0',
                ],
                '3.4.0' => [
                    'version_normalized' => '3.4.0.0',
                ],
                'dev-master' => \$branchAlias('3.5'),
            ],
            'symfony/foo' => [
                '3.3.0' => ['version_normalized' => '3.3.0.0'],
                '3.4.0' => ['version_normalized' => '3.4.0.0'],
                'dev-master' => \$branchAlias('3.5'),
            ],
        ];

        yield 'empty-intersection-ignores' => [\$packages, \$packages, '~2.0', ['splits' => [
            'symfony/foo' => ['3.3', '3.4', '3.5'],
        ]]];
        yield 'empty-intersection-ignores' => [\$packages, \$packages, '~4.0', ['splits' => [
            'symfony/foo' => ['3.3', '3.4', '3.5'],
        ]]];

        \$expected = \$packages;
        unset(\$expected['symfony/symfony']['3.3.0']);
        unset(\$expected['symfony/foo']['3.3.0']);

        yield 'non-empty-intersection-filters' => [\$expected, \$packages, '~3.4', ['splits' => [
            'symfony/foo' => ['3.3', '3.4', '3.5'],
        ]]];

        unset(\$expected['symfony/symfony']['3.4.0']);
        unset(\$expected['symfony/foo']['3.4.0']);

        yield 'master-only' => [\$expected, \$packages, '~3.5', ['splits' => [
            'symfony/foo' => ['3.4', '3.5'],
        ]]];

        \$packages = [
            'symfony/symfony' => [
                '2.8.0' => [
                    'version_normalized' => '2.8.0.0',
                ],
            ],
            'symfony/legacy' => [
                '2.8.0' => ['version_normalized' => '2.8.0.0'],
                'dev-master' => \$branchAlias('2.8'),
            ],
        ];

        yield 'legacy-are-not-filtered' => [\$packages, \$packages, '~3.0', ['splits' => [
            'symfony/legacy' => ['2.8'],
            'symfony/foo' => ['2.8'],
        ]]];

        \$packages = [
            'symfony/symfony' => [
                '2.8.0' => [
                    'version_normalized' => '2.8.0.0',
                ],
                'dev-master' => \$branchAlias('3.0'),
            ],
            'symfony/foo' => [
                '2.8.0' => ['version_normalized' => '2.8.0.0'],
                'dev-master' => \$branchAlias('3.0'),
            ],
            'symfony/new' => [
                'dev-master' => \$branchAlias('3.0'),
            ],
        ];

        \$expected = \$packages;
        unset(\$expected['symfony/symfony']['dev-master']);
        unset(\$expected['symfony/foo']['dev-master']);

        yield 'master-is-filtered-only-when-in-range' => [\$expected, \$packages, '~2.8', ['splits' => [
            'symfony/foo' => ['2.8', '3.0'],
            'symfony/new' => ['3.0'],
        ]]];
    }
}
", "vendor/symfony/flex/tests/CacheTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/flex/tests/CacheTest.php");
    }
}
