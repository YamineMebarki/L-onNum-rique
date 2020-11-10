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

/* vendor/symfony/framework-bundle/Tests/DependencyInjection/PhpFrameworkExtensionTest.php */
class __TwigTemplate_96d3816bcca235ec27773251461e2d7cf86c0064136628b3f7b32d1ddb5f09c7 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/framework-bundle/Tests/DependencyInjection/PhpFrameworkExtensionTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/framework-bundle/Tests/DependencyInjection/PhpFrameworkExtensionTest.php"));

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

namespace Symfony\\Bundle\\FrameworkBundle\\Tests\\DependencyInjection;

use Symfony\\Component\\Config\\FileLocator;
use Symfony\\Component\\DependencyInjection\\ContainerBuilder;
use Symfony\\Component\\DependencyInjection\\Loader\\PhpFileLoader;

class PhpFrameworkExtensionTest extends FrameworkExtensionTest
{
    protected function loadFromFile(ContainerBuilder \$container, \$file)
    {
        \$loader = new PhpFileLoader(\$container, new FileLocator(__DIR__.'/Fixtures/php'));
        \$loader->load(\$file.'.php');
    }

    public function testAssetsCannotHavePathAndUrl()
    {
        \$this->expectException('LogicException');
        \$this->createContainerFromClosure(function (\$container) {
            \$container->loadFromExtension('framework', [
                'assets' => [
                    'base_urls' => 'http://cdn.example.com',
                    'base_path' => '/foo',
                ],
            ]);
        });
    }

    public function testAssetPackageCannotHavePathAndUrl()
    {
        \$this->expectException('LogicException');
        \$this->createContainerFromClosure(function (\$container) {
            \$container->loadFromExtension('framework', [
                'assets' => [
                    'packages' => [
                        'impossible' => [
                            'base_urls' => 'http://cdn.example.com',
                            'base_path' => '/foo',
                        ],
                    ],
                ],
            ]);
        });
    }

    public function testWorkflowValidationStateMachine()
    {
        \$this->expectException('Symfony\\Component\\Workflow\\Exception\\InvalidDefinitionException');
        \$this->expectExceptionMessage('A transition from a place/state must have an unique name. Multiple transitions named \"a_to_b\" from place/state \"a\" where found on StateMachine \"article\".');
        \$this->createContainerFromClosure(function (\$container) {
            \$container->loadFromExtension('framework', [
                'workflows' => [
                    'article' => [
                        'type' => 'state_machine',
                        'supports' => [
                            __CLASS__,
                        ],
                        'places' => [
                            'a',
                            'b',
                            'c',
                        ],
                        'transitions' => [
                            'a_to_b' => [
                                'from' => ['a'],
                                'to' => ['b', 'c'],
                            ],
                        ],
                    ],
                ],
            ]);
        });
    }

    /**
     * @group legacy
     * @expectedDeprecation Using a workflow with type=workflow and a marking_store=single_state is deprecated since Symfony 4.3. Use type=state_machine instead.
     */
    public function testWorkflowDeprecateWorkflowSingleState()
    {
        \$this->createContainerFromClosure(function (\$container) {
            \$container->loadFromExtension('framework', [
                'workflows' => [
                    'article' => [
                        'type' => 'workflow',
                        'marking_store' => [
                            'type' => 'single_state',
                        ],
                        'supports' => [
                            __CLASS__,
                        ],
                        'places' => [
                            'a',
                            'b',
                            'c',
                        ],
                        'transitions' => [
                            'a_to_b' => [
                                'from' => ['a'],
                                'to' => ['b'],
                            ],
                        ],
                    ],
                ],
            ]);
        });
    }

    /**
     * @group legacy
     */
    public function testWorkflowValidationMultipleState()
    {
        \$this->createContainerFromClosure(function (\$container) {
            \$container->loadFromExtension('framework', [
                'workflows' => [
                    'article' => [
                        'type' => 'workflow',
                        'marking_store' => [
                            'type' => 'multiple_state',
                        ],
                        'supports' => [
                            __CLASS__,
                        ],
                        'places' => [
                            'a',
                            'b',
                            'c',
                        ],
                        'transitions' => [
                            'a_to_b' => [
                                'from' => ['a'],
                                'to' => ['b', 'c'],
                            ],
                        ],
                    ],
                ],
            ]);
        });

        // the test ensures that the validation does not fail (i.e. it does not throw any exceptions)
        \$this->addToAssertionCount(1);
    }

    /**
     * @group legacy
     */
    public function testWorkflowValidationSingleState()
    {
        \$this->expectException('Symfony\\Component\\Workflow\\Exception\\InvalidDefinitionException');
        \$this->expectExceptionMessage('The marking store of workflow \"article\" can not store many places. But the transition \"a_to_b\" has too many output (2). Only one is accepted.');
        \$this->createContainerFromClosure(function (\$container) {
            \$container->loadFromExtension('framework', [
                'workflows' => [
                    'article' => [
                        'type' => 'workflow',
                        'marking_store' => [
                            'type' => 'single_state',
                        ],
                        'supports' => [
                            __CLASS__,
                        ],
                        'places' => [
                            'a',
                            'b',
                            'c',
                        ],
                        'transitions' => [
                            'a_to_b' => [
                                'from' => ['a'],
                                'to' => ['b', 'c'],
                            ],
                        ],
                    ],
                ],
            ]);
        });

        // the test ensures that the validation does not fail (i.e. it does not throw any exceptions)
        \$this->addToAssertionCount(1);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/framework-bundle/Tests/DependencyInjection/PhpFrameworkExtensionTest.php";
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

namespace Symfony\\Bundle\\FrameworkBundle\\Tests\\DependencyInjection;

use Symfony\\Component\\Config\\FileLocator;
use Symfony\\Component\\DependencyInjection\\ContainerBuilder;
use Symfony\\Component\\DependencyInjection\\Loader\\PhpFileLoader;

class PhpFrameworkExtensionTest extends FrameworkExtensionTest
{
    protected function loadFromFile(ContainerBuilder \$container, \$file)
    {
        \$loader = new PhpFileLoader(\$container, new FileLocator(__DIR__.'/Fixtures/php'));
        \$loader->load(\$file.'.php');
    }

    public function testAssetsCannotHavePathAndUrl()
    {
        \$this->expectException('LogicException');
        \$this->createContainerFromClosure(function (\$container) {
            \$container->loadFromExtension('framework', [
                'assets' => [
                    'base_urls' => 'http://cdn.example.com',
                    'base_path' => '/foo',
                ],
            ]);
        });
    }

    public function testAssetPackageCannotHavePathAndUrl()
    {
        \$this->expectException('LogicException');
        \$this->createContainerFromClosure(function (\$container) {
            \$container->loadFromExtension('framework', [
                'assets' => [
                    'packages' => [
                        'impossible' => [
                            'base_urls' => 'http://cdn.example.com',
                            'base_path' => '/foo',
                        ],
                    ],
                ],
            ]);
        });
    }

    public function testWorkflowValidationStateMachine()
    {
        \$this->expectException('Symfony\\Component\\Workflow\\Exception\\InvalidDefinitionException');
        \$this->expectExceptionMessage('A transition from a place/state must have an unique name. Multiple transitions named \"a_to_b\" from place/state \"a\" where found on StateMachine \"article\".');
        \$this->createContainerFromClosure(function (\$container) {
            \$container->loadFromExtension('framework', [
                'workflows' => [
                    'article' => [
                        'type' => 'state_machine',
                        'supports' => [
                            __CLASS__,
                        ],
                        'places' => [
                            'a',
                            'b',
                            'c',
                        ],
                        'transitions' => [
                            'a_to_b' => [
                                'from' => ['a'],
                                'to' => ['b', 'c'],
                            ],
                        ],
                    ],
                ],
            ]);
        });
    }

    /**
     * @group legacy
     * @expectedDeprecation Using a workflow with type=workflow and a marking_store=single_state is deprecated since Symfony 4.3. Use type=state_machine instead.
     */
    public function testWorkflowDeprecateWorkflowSingleState()
    {
        \$this->createContainerFromClosure(function (\$container) {
            \$container->loadFromExtension('framework', [
                'workflows' => [
                    'article' => [
                        'type' => 'workflow',
                        'marking_store' => [
                            'type' => 'single_state',
                        ],
                        'supports' => [
                            __CLASS__,
                        ],
                        'places' => [
                            'a',
                            'b',
                            'c',
                        ],
                        'transitions' => [
                            'a_to_b' => [
                                'from' => ['a'],
                                'to' => ['b'],
                            ],
                        ],
                    ],
                ],
            ]);
        });
    }

    /**
     * @group legacy
     */
    public function testWorkflowValidationMultipleState()
    {
        \$this->createContainerFromClosure(function (\$container) {
            \$container->loadFromExtension('framework', [
                'workflows' => [
                    'article' => [
                        'type' => 'workflow',
                        'marking_store' => [
                            'type' => 'multiple_state',
                        ],
                        'supports' => [
                            __CLASS__,
                        ],
                        'places' => [
                            'a',
                            'b',
                            'c',
                        ],
                        'transitions' => [
                            'a_to_b' => [
                                'from' => ['a'],
                                'to' => ['b', 'c'],
                            ],
                        ],
                    ],
                ],
            ]);
        });

        // the test ensures that the validation does not fail (i.e. it does not throw any exceptions)
        \$this->addToAssertionCount(1);
    }

    /**
     * @group legacy
     */
    public function testWorkflowValidationSingleState()
    {
        \$this->expectException('Symfony\\Component\\Workflow\\Exception\\InvalidDefinitionException');
        \$this->expectExceptionMessage('The marking store of workflow \"article\" can not store many places. But the transition \"a_to_b\" has too many output (2). Only one is accepted.');
        \$this->createContainerFromClosure(function (\$container) {
            \$container->loadFromExtension('framework', [
                'workflows' => [
                    'article' => [
                        'type' => 'workflow',
                        'marking_store' => [
                            'type' => 'single_state',
                        ],
                        'supports' => [
                            __CLASS__,
                        ],
                        'places' => [
                            'a',
                            'b',
                            'c',
                        ],
                        'transitions' => [
                            'a_to_b' => [
                                'from' => ['a'],
                                'to' => ['b', 'c'],
                            ],
                        ],
                    ],
                ],
            ]);
        });

        // the test ensures that the validation does not fail (i.e. it does not throw any exceptions)
        \$this->addToAssertionCount(1);
    }
}
", "vendor/symfony/framework-bundle/Tests/DependencyInjection/PhpFrameworkExtensionTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/framework-bundle/Tests/DependencyInjection/PhpFrameworkExtensionTest.php");
    }
}
