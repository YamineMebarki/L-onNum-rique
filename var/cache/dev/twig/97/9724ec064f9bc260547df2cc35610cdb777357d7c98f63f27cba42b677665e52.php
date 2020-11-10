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

/* vendor/symfony/framework-bundle/DependencyInjection/Compiler/UnusedTagsPass.php */
class __TwigTemplate_137689843f6e6f1ea3db78e5e7d725c0084ac79973fdce609e3aa81a7105240a extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/framework-bundle/DependencyInjection/Compiler/UnusedTagsPass.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/framework-bundle/DependencyInjection/Compiler/UnusedTagsPass.php"));

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

namespace Symfony\\Bundle\\FrameworkBundle\\DependencyInjection\\Compiler;

use Symfony\\Component\\DependencyInjection\\Compiler\\CompilerPassInterface;
use Symfony\\Component\\DependencyInjection\\ContainerBuilder;

/**
 * Find all service tags which are defined, but not used and yield a warning log message.
 *
 * @author Florian Pfitzer <pfitzer@wurzel3.de>
 */
class UnusedTagsPass implements CompilerPassInterface
{
    private \$whitelist = [
        'annotations.cached_reader',
        'cache.pool.clearer',
        'console.command',
        'container.hot_path',
        'container.reversible',
        'container.service_locator',
        'container.service_subscriber',
        'controller.service_arguments',
        'config_cache.resource_checker',
        'data_collector',
        'form.type',
        'form.type_extension',
        'form.type_guesser',
        'kernel.cache_clearer',
        'kernel.cache_warmer',
        'kernel.event_listener',
        'kernel.event_subscriber',
        'kernel.fragment_renderer',
        'kernel.locale_aware',
        'messenger.bus',
        'messenger.receiver',
        'messenger.message_handler',
        'mime.mime_type_guesser',
        'monolog.logger',
        'proxy',
        'routing.expression_language_provider',
        'routing.loader',
        'security.expression_language_provider',
        'security.remember_me_aware',
        'security.voter',
        'serializer.encoder',
        'serializer.normalizer',
        'templating.helper',
        'translation.dumper',
        'translation.extractor',
        'translation.loader',
        'twig.extension',
        'twig.loader',
        'validator.constraint_validator',
        'validator.initializer',
        'validator.auto_mapper',
    ];

    public function process(ContainerBuilder \$container)
    {
        \$tags = array_unique(array_merge(\$container->findTags(), \$this->whitelist));

        foreach (\$container->findUnusedTags() as \$tag) {
            // skip whitelisted tags
            if (\\in_array(\$tag, \$this->whitelist)) {
                continue;
            }

            // check for typos
            \$candidates = [];
            foreach (\$tags as \$definedTag) {
                if (\$definedTag === \$tag) {
                    continue;
                }

                if (false !== strpos(\$definedTag, \$tag) || levenshtein(\$tag, \$definedTag) <= \\strlen(\$tag) / 3) {
                    \$candidates[] = \$definedTag;
                }
            }

            \$services = array_keys(\$container->findTaggedServiceIds(\$tag));
            \$message = sprintf('Tag \"%s\" was defined on service(s) \"%s\", but was never used.', \$tag, implode('\", \"', \$services));
            if (!empty(\$candidates)) {
                \$message .= sprintf(' Did you mean \"%s\"?', implode('\", \"', \$candidates));
            }

            \$container->log(\$this, \$message);
        }
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/framework-bundle/DependencyInjection/Compiler/UnusedTagsPass.php";
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

namespace Symfony\\Bundle\\FrameworkBundle\\DependencyInjection\\Compiler;

use Symfony\\Component\\DependencyInjection\\Compiler\\CompilerPassInterface;
use Symfony\\Component\\DependencyInjection\\ContainerBuilder;

/**
 * Find all service tags which are defined, but not used and yield a warning log message.
 *
 * @author Florian Pfitzer <pfitzer@wurzel3.de>
 */
class UnusedTagsPass implements CompilerPassInterface
{
    private \$whitelist = [
        'annotations.cached_reader',
        'cache.pool.clearer',
        'console.command',
        'container.hot_path',
        'container.reversible',
        'container.service_locator',
        'container.service_subscriber',
        'controller.service_arguments',
        'config_cache.resource_checker',
        'data_collector',
        'form.type',
        'form.type_extension',
        'form.type_guesser',
        'kernel.cache_clearer',
        'kernel.cache_warmer',
        'kernel.event_listener',
        'kernel.event_subscriber',
        'kernel.fragment_renderer',
        'kernel.locale_aware',
        'messenger.bus',
        'messenger.receiver',
        'messenger.message_handler',
        'mime.mime_type_guesser',
        'monolog.logger',
        'proxy',
        'routing.expression_language_provider',
        'routing.loader',
        'security.expression_language_provider',
        'security.remember_me_aware',
        'security.voter',
        'serializer.encoder',
        'serializer.normalizer',
        'templating.helper',
        'translation.dumper',
        'translation.extractor',
        'translation.loader',
        'twig.extension',
        'twig.loader',
        'validator.constraint_validator',
        'validator.initializer',
        'validator.auto_mapper',
    ];

    public function process(ContainerBuilder \$container)
    {
        \$tags = array_unique(array_merge(\$container->findTags(), \$this->whitelist));

        foreach (\$container->findUnusedTags() as \$tag) {
            // skip whitelisted tags
            if (\\in_array(\$tag, \$this->whitelist)) {
                continue;
            }

            // check for typos
            \$candidates = [];
            foreach (\$tags as \$definedTag) {
                if (\$definedTag === \$tag) {
                    continue;
                }

                if (false !== strpos(\$definedTag, \$tag) || levenshtein(\$tag, \$definedTag) <= \\strlen(\$tag) / 3) {
                    \$candidates[] = \$definedTag;
                }
            }

            \$services = array_keys(\$container->findTaggedServiceIds(\$tag));
            \$message = sprintf('Tag \"%s\" was defined on service(s) \"%s\", but was never used.', \$tag, implode('\", \"', \$services));
            if (!empty(\$candidates)) {
                \$message .= sprintf(' Did you mean \"%s\"?', implode('\", \"', \$candidates));
            }

            \$container->log(\$this, \$message);
        }
    }
}
", "vendor/symfony/framework-bundle/DependencyInjection/Compiler/UnusedTagsPass.php", "/var/www/public/DevLaon/templates/vendor/symfony/framework-bundle/DependencyInjection/Compiler/UnusedTagsPass.php");
    }
}
