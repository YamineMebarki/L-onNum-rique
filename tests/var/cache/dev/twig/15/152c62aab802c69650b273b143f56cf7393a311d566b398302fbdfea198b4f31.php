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

/* vendor/symfony/security-bundle/Tests/DependencyInjection/MainConfigurationTest.php */
class __TwigTemplate_c421bf69a898ae922172f411c454624f934c37088eac4cac86d8e264a7910e75 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/security-bundle/Tests/DependencyInjection/MainConfigurationTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/security-bundle/Tests/DependencyInjection/MainConfigurationTest.php"));

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

namespace Symfony\\Bundle\\SecurityBundle\\Tests\\DependencyInjection;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Bundle\\SecurityBundle\\DependencyInjection\\MainConfiguration;
use Symfony\\Component\\Config\\Definition\\Processor;

class MainConfigurationTest extends TestCase
{
    /**
     * The minimal, required config needed to not have any required validation
     * issues.
     */
    protected static \$minimalConfig = [
        'providers' => [
            'stub' => [
                'id' => 'foo',
            ],
        ],
        'firewalls' => [
            'stub' => [],
        ],
    ];

    public function testNoConfigForProvider()
    {
        \$this->expectException('Symfony\\Component\\Config\\Definition\\Exception\\InvalidConfigurationException');
        \$config = [
            'providers' => [
                'stub' => [],
            ],
        ];

        \$processor = new Processor();
        \$configuration = new MainConfiguration([], []);
        \$processor->processConfiguration(\$configuration, [\$config]);
    }

    public function testManyConfigForProvider()
    {
        \$this->expectException('Symfony\\Component\\Config\\Definition\\Exception\\InvalidConfigurationException');
        \$config = [
            'providers' => [
                'stub' => [
                    'id' => 'foo',
                    'chain' => [],
                ],
            ],
        ];

        \$processor = new Processor();
        \$configuration = new MainConfiguration([], []);
        \$processor->processConfiguration(\$configuration, [\$config]);
    }

    public function testCsrfAliases()
    {
        \$config = [
            'firewalls' => [
                'stub' => [
                    'logout' => [
                        'csrf_token_generator' => 'a_token_generator',
                        'csrf_token_id' => 'a_token_id',
                    ],
                ],
            ],
        ];
        \$config = array_merge(static::\$minimalConfig, \$config);

        \$processor = new Processor();
        \$configuration = new MainConfiguration([], []);
        \$processedConfig = \$processor->processConfiguration(\$configuration, [\$config]);
        \$this->assertArrayHasKey('csrf_token_generator', \$processedConfig['firewalls']['stub']['logout']);
        \$this->assertEquals('a_token_generator', \$processedConfig['firewalls']['stub']['logout']['csrf_token_generator']);
        \$this->assertArrayHasKey('csrf_token_id', \$processedConfig['firewalls']['stub']['logout']);
        \$this->assertEquals('a_token_id', \$processedConfig['firewalls']['stub']['logout']['csrf_token_id']);
    }

    public function testDefaultUserCheckers()
    {
        \$processor = new Processor();
        \$configuration = new MainConfiguration([], []);
        \$processedConfig = \$processor->processConfiguration(\$configuration, [static::\$minimalConfig]);

        \$this->assertEquals('security.user_checker', \$processedConfig['firewalls']['stub']['user_checker']);
    }

    public function testUserCheckers()
    {
        \$config = [
            'firewalls' => [
                'stub' => [
                    'user_checker' => 'app.henk_checker',
                ],
            ],
        ];
        \$config = array_merge(static::\$minimalConfig, \$config);

        \$processor = new Processor();
        \$configuration = new MainConfiguration([], []);
        \$processedConfig = \$processor->processConfiguration(\$configuration, [\$config]);

        \$this->assertEquals('app.henk_checker', \$processedConfig['firewalls']['stub']['user_checker']);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/security-bundle/Tests/DependencyInjection/MainConfigurationTest.php";
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

namespace Symfony\\Bundle\\SecurityBundle\\Tests\\DependencyInjection;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Bundle\\SecurityBundle\\DependencyInjection\\MainConfiguration;
use Symfony\\Component\\Config\\Definition\\Processor;

class MainConfigurationTest extends TestCase
{
    /**
     * The minimal, required config needed to not have any required validation
     * issues.
     */
    protected static \$minimalConfig = [
        'providers' => [
            'stub' => [
                'id' => 'foo',
            ],
        ],
        'firewalls' => [
            'stub' => [],
        ],
    ];

    public function testNoConfigForProvider()
    {
        \$this->expectException('Symfony\\Component\\Config\\Definition\\Exception\\InvalidConfigurationException');
        \$config = [
            'providers' => [
                'stub' => [],
            ],
        ];

        \$processor = new Processor();
        \$configuration = new MainConfiguration([], []);
        \$processor->processConfiguration(\$configuration, [\$config]);
    }

    public function testManyConfigForProvider()
    {
        \$this->expectException('Symfony\\Component\\Config\\Definition\\Exception\\InvalidConfigurationException');
        \$config = [
            'providers' => [
                'stub' => [
                    'id' => 'foo',
                    'chain' => [],
                ],
            ],
        ];

        \$processor = new Processor();
        \$configuration = new MainConfiguration([], []);
        \$processor->processConfiguration(\$configuration, [\$config]);
    }

    public function testCsrfAliases()
    {
        \$config = [
            'firewalls' => [
                'stub' => [
                    'logout' => [
                        'csrf_token_generator' => 'a_token_generator',
                        'csrf_token_id' => 'a_token_id',
                    ],
                ],
            ],
        ];
        \$config = array_merge(static::\$minimalConfig, \$config);

        \$processor = new Processor();
        \$configuration = new MainConfiguration([], []);
        \$processedConfig = \$processor->processConfiguration(\$configuration, [\$config]);
        \$this->assertArrayHasKey('csrf_token_generator', \$processedConfig['firewalls']['stub']['logout']);
        \$this->assertEquals('a_token_generator', \$processedConfig['firewalls']['stub']['logout']['csrf_token_generator']);
        \$this->assertArrayHasKey('csrf_token_id', \$processedConfig['firewalls']['stub']['logout']);
        \$this->assertEquals('a_token_id', \$processedConfig['firewalls']['stub']['logout']['csrf_token_id']);
    }

    public function testDefaultUserCheckers()
    {
        \$processor = new Processor();
        \$configuration = new MainConfiguration([], []);
        \$processedConfig = \$processor->processConfiguration(\$configuration, [static::\$minimalConfig]);

        \$this->assertEquals('security.user_checker', \$processedConfig['firewalls']['stub']['user_checker']);
    }

    public function testUserCheckers()
    {
        \$config = [
            'firewalls' => [
                'stub' => [
                    'user_checker' => 'app.henk_checker',
                ],
            ],
        ];
        \$config = array_merge(static::\$minimalConfig, \$config);

        \$processor = new Processor();
        \$configuration = new MainConfiguration([], []);
        \$processedConfig = \$processor->processConfiguration(\$configuration, [\$config]);

        \$this->assertEquals('app.henk_checker', \$processedConfig['firewalls']['stub']['user_checker']);
    }
}
", "vendor/symfony/security-bundle/Tests/DependencyInjection/MainConfigurationTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/security-bundle/Tests/DependencyInjection/MainConfigurationTest.php");
    }
}
