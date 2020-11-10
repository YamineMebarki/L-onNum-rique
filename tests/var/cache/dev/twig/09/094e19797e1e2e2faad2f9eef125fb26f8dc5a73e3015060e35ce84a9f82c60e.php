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

/* vendor/symfony/translation/DataCollector/TranslationDataCollector.php */
class __TwigTemplate_45bd56ac9420b41858985d42d2531c432aa38ab3f3a3427efaf553a1882c1124 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/translation/DataCollector/TranslationDataCollector.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/translation/DataCollector/TranslationDataCollector.php"));

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

namespace Symfony\\Component\\Translation\\DataCollector;

use Symfony\\Component\\HttpFoundation\\Request;
use Symfony\\Component\\HttpFoundation\\Response;
use Symfony\\Component\\HttpKernel\\DataCollector\\DataCollector;
use Symfony\\Component\\HttpKernel\\DataCollector\\LateDataCollectorInterface;
use Symfony\\Component\\Translation\\DataCollectorTranslator;

/**
 * @author Abdellatif Ait boudad <a.aitboudad@gmail.com>
 */
class TranslationDataCollector extends DataCollector implements LateDataCollectorInterface
{
    private \$translator;

    public function __construct(DataCollectorTranslator \$translator)
    {
        \$this->translator = \$translator;
    }

    /**
     * {@inheritdoc}
     */
    public function lateCollect()
    {
        \$messages = \$this->sanitizeCollectedMessages(\$this->translator->getCollectedMessages());

        \$this->data += \$this->computeCount(\$messages);
        \$this->data['messages'] = \$messages;

        \$this->data = \$this->cloneVar(\$this->data);
    }

    /**
     * {@inheritdoc}
     */
    public function collect(Request \$request, Response \$response, \\Exception \$exception = null)
    {
        \$this->data['locale'] = \$this->translator->getLocale();
        \$this->data['fallback_locales'] = \$this->translator->getFallbackLocales();
    }

    /**
     * {@inheritdoc}
     */
    public function reset()
    {
        \$this->data = [];
    }

    /**
     * @return array|Data
     */
    public function getMessages()
    {
        return isset(\$this->data['messages']) ? \$this->data['messages'] : [];
    }

    /**
     * @return int
     */
    public function getCountMissings()
    {
        return isset(\$this->data[DataCollectorTranslator::MESSAGE_MISSING]) ? \$this->data[DataCollectorTranslator::MESSAGE_MISSING] : 0;
    }

    /**
     * @return int
     */
    public function getCountFallbacks()
    {
        return isset(\$this->data[DataCollectorTranslator::MESSAGE_EQUALS_FALLBACK]) ? \$this->data[DataCollectorTranslator::MESSAGE_EQUALS_FALLBACK] : 0;
    }

    /**
     * @return int
     */
    public function getCountDefines()
    {
        return isset(\$this->data[DataCollectorTranslator::MESSAGE_DEFINED]) ? \$this->data[DataCollectorTranslator::MESSAGE_DEFINED] : 0;
    }

    public function getLocale()
    {
        return !empty(\$this->data['locale']) ? \$this->data['locale'] : null;
    }

    /**
     * @internal since Symfony 4.2
     */
    public function getFallbackLocales()
    {
        return (isset(\$this->data['fallback_locales']) && \\count(\$this->data['fallback_locales']) > 0) ? \$this->data['fallback_locales'] : [];
    }

    /**
     * {@inheritdoc}
     */
    public function getName()
    {
        return 'translation';
    }

    private function sanitizeCollectedMessages(\$messages)
    {
        \$result = [];
        foreach (\$messages as \$key => \$message) {
            \$messageId = \$message['locale'].\$message['domain'].\$message['id'];

            if (!isset(\$result[\$messageId])) {
                \$message['count'] = 1;
                \$message['parameters'] = !empty(\$message['parameters']) ? [\$message['parameters']] : [];
                \$messages[\$key]['translation'] = \$this->sanitizeString(\$message['translation']);
                \$result[\$messageId] = \$message;
            } else {
                if (!empty(\$message['parameters'])) {
                    \$result[\$messageId]['parameters'][] = \$message['parameters'];
                }

                ++\$result[\$messageId]['count'];
            }

            unset(\$messages[\$key]);
        }

        return \$result;
    }

    private function computeCount(\$messages)
    {
        \$count = [
            DataCollectorTranslator::MESSAGE_DEFINED => 0,
            DataCollectorTranslator::MESSAGE_MISSING => 0,
            DataCollectorTranslator::MESSAGE_EQUALS_FALLBACK => 0,
        ];

        foreach (\$messages as \$message) {
            ++\$count[\$message['state']];
        }

        return \$count;
    }

    private function sanitizeString(\$string, \$length = 80)
    {
        \$string = trim(preg_replace('/\\s+/', ' ', \$string));

        if (false !== \$encoding = mb_detect_encoding(\$string, null, true)) {
            if (mb_strlen(\$string, \$encoding) > \$length) {
                return mb_substr(\$string, 0, \$length - 3, \$encoding).'...';
            }
        } elseif (\\strlen(\$string) > \$length) {
            return substr(\$string, 0, \$length - 3).'...';
        }

        return \$string;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/translation/DataCollector/TranslationDataCollector.php";
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

namespace Symfony\\Component\\Translation\\DataCollector;

use Symfony\\Component\\HttpFoundation\\Request;
use Symfony\\Component\\HttpFoundation\\Response;
use Symfony\\Component\\HttpKernel\\DataCollector\\DataCollector;
use Symfony\\Component\\HttpKernel\\DataCollector\\LateDataCollectorInterface;
use Symfony\\Component\\Translation\\DataCollectorTranslator;

/**
 * @author Abdellatif Ait boudad <a.aitboudad@gmail.com>
 */
class TranslationDataCollector extends DataCollector implements LateDataCollectorInterface
{
    private \$translator;

    public function __construct(DataCollectorTranslator \$translator)
    {
        \$this->translator = \$translator;
    }

    /**
     * {@inheritdoc}
     */
    public function lateCollect()
    {
        \$messages = \$this->sanitizeCollectedMessages(\$this->translator->getCollectedMessages());

        \$this->data += \$this->computeCount(\$messages);
        \$this->data['messages'] = \$messages;

        \$this->data = \$this->cloneVar(\$this->data);
    }

    /**
     * {@inheritdoc}
     */
    public function collect(Request \$request, Response \$response, \\Exception \$exception = null)
    {
        \$this->data['locale'] = \$this->translator->getLocale();
        \$this->data['fallback_locales'] = \$this->translator->getFallbackLocales();
    }

    /**
     * {@inheritdoc}
     */
    public function reset()
    {
        \$this->data = [];
    }

    /**
     * @return array|Data
     */
    public function getMessages()
    {
        return isset(\$this->data['messages']) ? \$this->data['messages'] : [];
    }

    /**
     * @return int
     */
    public function getCountMissings()
    {
        return isset(\$this->data[DataCollectorTranslator::MESSAGE_MISSING]) ? \$this->data[DataCollectorTranslator::MESSAGE_MISSING] : 0;
    }

    /**
     * @return int
     */
    public function getCountFallbacks()
    {
        return isset(\$this->data[DataCollectorTranslator::MESSAGE_EQUALS_FALLBACK]) ? \$this->data[DataCollectorTranslator::MESSAGE_EQUALS_FALLBACK] : 0;
    }

    /**
     * @return int
     */
    public function getCountDefines()
    {
        return isset(\$this->data[DataCollectorTranslator::MESSAGE_DEFINED]) ? \$this->data[DataCollectorTranslator::MESSAGE_DEFINED] : 0;
    }

    public function getLocale()
    {
        return !empty(\$this->data['locale']) ? \$this->data['locale'] : null;
    }

    /**
     * @internal since Symfony 4.2
     */
    public function getFallbackLocales()
    {
        return (isset(\$this->data['fallback_locales']) && \\count(\$this->data['fallback_locales']) > 0) ? \$this->data['fallback_locales'] : [];
    }

    /**
     * {@inheritdoc}
     */
    public function getName()
    {
        return 'translation';
    }

    private function sanitizeCollectedMessages(\$messages)
    {
        \$result = [];
        foreach (\$messages as \$key => \$message) {
            \$messageId = \$message['locale'].\$message['domain'].\$message['id'];

            if (!isset(\$result[\$messageId])) {
                \$message['count'] = 1;
                \$message['parameters'] = !empty(\$message['parameters']) ? [\$message['parameters']] : [];
                \$messages[\$key]['translation'] = \$this->sanitizeString(\$message['translation']);
                \$result[\$messageId] = \$message;
            } else {
                if (!empty(\$message['parameters'])) {
                    \$result[\$messageId]['parameters'][] = \$message['parameters'];
                }

                ++\$result[\$messageId]['count'];
            }

            unset(\$messages[\$key]);
        }

        return \$result;
    }

    private function computeCount(\$messages)
    {
        \$count = [
            DataCollectorTranslator::MESSAGE_DEFINED => 0,
            DataCollectorTranslator::MESSAGE_MISSING => 0,
            DataCollectorTranslator::MESSAGE_EQUALS_FALLBACK => 0,
        ];

        foreach (\$messages as \$message) {
            ++\$count[\$message['state']];
        }

        return \$count;
    }

    private function sanitizeString(\$string, \$length = 80)
    {
        \$string = trim(preg_replace('/\\s+/', ' ', \$string));

        if (false !== \$encoding = mb_detect_encoding(\$string, null, true)) {
            if (mb_strlen(\$string, \$encoding) > \$length) {
                return mb_substr(\$string, 0, \$length - 3, \$encoding).'...';
            }
        } elseif (\\strlen(\$string) > \$length) {
            return substr(\$string, 0, \$length - 3).'...';
        }

        return \$string;
    }
}
", "vendor/symfony/translation/DataCollector/TranslationDataCollector.php", "/var/www/public/DevLaon/templates/vendor/symfony/translation/DataCollector/TranslationDataCollector.php");
    }
}
