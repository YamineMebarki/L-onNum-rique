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

/* vendor/symfony/framework-bundle/Tests/DependencyInjection/Fixtures/php/workflows.php */
class __TwigTemplate_0f4ad55277321933e62a0abc3ba93594bc8de710f7c934642ed0e9c2abec4768 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/framework-bundle/Tests/DependencyInjection/Fixtures/php/workflows.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/framework-bundle/Tests/DependencyInjection/Fixtures/php/workflows.php"));

        // line 1
        echo "<?php

use Symfony\\Bundle\\FrameworkBundle\\Tests\\DependencyInjection\\FrameworkExtensionTest;

\$container->loadFromExtension('framework', [
    'workflows' => [
        'article' => [
            'type' => 'workflow',
            'supports' => [
                FrameworkExtensionTest::class,
            ],
            'initial_marking' => ['draft'],
            'places' => [
                'draft',
                'wait_for_journalist',
                'approved_by_journalist',
                'wait_for_spellchecker',
                'approved_by_spellchecker',
                'published',
            ],
            'transitions' => [
                'request_review' => [
                    'from' => 'draft',
                    'to' => ['wait_for_journalist', 'wait_for_spellchecker'],
                ],
                'journalist_approval' => [
                    'from' => 'wait_for_journalist',
                    'to' => 'approved_by_journalist',
                ],
                'spellchecker_approval' => [
                    'from' => 'wait_for_spellchecker',
                    'to' => 'approved_by_spellchecker',
                ],
                'publish' => [
                    'from' => ['approved_by_journalist', 'approved_by_spellchecker'],
                    'to' => 'published',
                ],
            ],
        ],
        'pull_request' => [
            'supports' => [
                FrameworkExtensionTest::class,
            ],
            'initial_marking' => 'start',
            'metadata' => [
                'title' => 'workflow title',
            ],
            'places' => [
                'start_name_not_used' => [
                    'name' => 'start',
                    'metadata' => [
                        'title' => 'place start title',
                    ],
                ],
                'coding' => null,
                'travis' => null,
                'review' => null,
                'merged' => null,
                'closed' => null,
            ],
            'transitions' => [
                'submit' => [
                    'from' => 'start',
                    'to' => 'travis',
                    'metadata' => [
                        'title' => 'transition submit title',
                    ],
                ],
                'update' => [
                    'from' => ['coding', 'travis', 'review'],
                    'to' => 'travis',
                ],
                'wait_for_review' => [
                    'from' => 'travis',
                    'to' => 'review',
                ],
                'request_change' => [
                    'from' => 'review',
                    'to' => 'coding',
                ],
                'accept' => [
                    'from' => 'review',
                    'to' => 'merged',
                ],
                'reject' => [
                    'from' => 'review',
                    'to' => 'closed',
                ],
                'reopen' => [
                    'from' => 'closed',
                    'to' => 'review',
                ],
            ],
        ],
        'service_marking_store_workflow' => [
            'type' => 'workflow',
            'marking_store' => [
                'service' => 'workflow_service',
            ],
            'supports' => [
                FrameworkExtensionTest::class,
            ],
            'places' => [
                ['name' => 'first'],
                ['name' => 'last'],
            ],
            'transitions' => [
                'go' => [
                    'from' => 'first',
                    'to' => 'last',
                ],
            ],
        ],
    ],
]);
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/framework-bundle/Tests/DependencyInjection/Fixtures/php/workflows.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

use Symfony\\Bundle\\FrameworkBundle\\Tests\\DependencyInjection\\FrameworkExtensionTest;

\$container->loadFromExtension('framework', [
    'workflows' => [
        'article' => [
            'type' => 'workflow',
            'supports' => [
                FrameworkExtensionTest::class,
            ],
            'initial_marking' => ['draft'],
            'places' => [
                'draft',
                'wait_for_journalist',
                'approved_by_journalist',
                'wait_for_spellchecker',
                'approved_by_spellchecker',
                'published',
            ],
            'transitions' => [
                'request_review' => [
                    'from' => 'draft',
                    'to' => ['wait_for_journalist', 'wait_for_spellchecker'],
                ],
                'journalist_approval' => [
                    'from' => 'wait_for_journalist',
                    'to' => 'approved_by_journalist',
                ],
                'spellchecker_approval' => [
                    'from' => 'wait_for_spellchecker',
                    'to' => 'approved_by_spellchecker',
                ],
                'publish' => [
                    'from' => ['approved_by_journalist', 'approved_by_spellchecker'],
                    'to' => 'published',
                ],
            ],
        ],
        'pull_request' => [
            'supports' => [
                FrameworkExtensionTest::class,
            ],
            'initial_marking' => 'start',
            'metadata' => [
                'title' => 'workflow title',
            ],
            'places' => [
                'start_name_not_used' => [
                    'name' => 'start',
                    'metadata' => [
                        'title' => 'place start title',
                    ],
                ],
                'coding' => null,
                'travis' => null,
                'review' => null,
                'merged' => null,
                'closed' => null,
            ],
            'transitions' => [
                'submit' => [
                    'from' => 'start',
                    'to' => 'travis',
                    'metadata' => [
                        'title' => 'transition submit title',
                    ],
                ],
                'update' => [
                    'from' => ['coding', 'travis', 'review'],
                    'to' => 'travis',
                ],
                'wait_for_review' => [
                    'from' => 'travis',
                    'to' => 'review',
                ],
                'request_change' => [
                    'from' => 'review',
                    'to' => 'coding',
                ],
                'accept' => [
                    'from' => 'review',
                    'to' => 'merged',
                ],
                'reject' => [
                    'from' => 'review',
                    'to' => 'closed',
                ],
                'reopen' => [
                    'from' => 'closed',
                    'to' => 'review',
                ],
            ],
        ],
        'service_marking_store_workflow' => [
            'type' => 'workflow',
            'marking_store' => [
                'service' => 'workflow_service',
            ],
            'supports' => [
                FrameworkExtensionTest::class,
            ],
            'places' => [
                ['name' => 'first'],
                ['name' => 'last'],
            ],
            'transitions' => [
                'go' => [
                    'from' => 'first',
                    'to' => 'last',
                ],
            ],
        ],
    ],
]);
", "vendor/symfony/framework-bundle/Tests/DependencyInjection/Fixtures/php/workflows.php", "/var/www/public/DevLaon/templates/vendor/symfony/framework-bundle/Tests/DependencyInjection/Fixtures/php/workflows.php");
    }
}
