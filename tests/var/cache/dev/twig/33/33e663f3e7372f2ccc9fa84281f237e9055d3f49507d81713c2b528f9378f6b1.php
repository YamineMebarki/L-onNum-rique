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

/* vendor/fzaninotto/faker/src/Faker/Provider/sk_SK/Company.php */
class __TwigTemplate_2f6f57006265b8d6d7995615005fa45e7a726fe2de148208dc3325c2b51f23c5 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/fzaninotto/faker/src/Faker/Provider/sk_SK/Company.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/fzaninotto/faker/src/Faker/Provider/sk_SK/Company.php"));

        // line 1
        echo "<?php

namespace Faker\\Provider\\sk_SK;

class Company extends \\Faker\\Provider\\Company
{
    protected static \$formats = array(
        '";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["lastName"]) || array_key_exists("lastName", $context) ? $context["lastName"] : (function () { throw new RuntimeError('Variable "lastName" does not exist.', 8, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["companySuffix"]) || array_key_exists("companySuffix", $context) ? $context["companySuffix"] : (function () { throw new RuntimeError('Variable "companySuffix" does not exist.', 8, $this->source); })()), "html", null, true);
        echo "',
        '";
        // line 9
        echo twig_escape_filter($this->env, (isset($context["lastName"]) || array_key_exists("lastName", $context) ? $context["lastName"] : (function () { throw new RuntimeError('Variable "lastName" does not exist.', 9, $this->source); })()), "html", null, true);
        echo "-";
        echo twig_escape_filter($this->env, (isset($context["lastName"]) || array_key_exists("lastName", $context) ? $context["lastName"] : (function () { throw new RuntimeError('Variable "lastName" does not exist.', 9, $this->source); })()), "html", null, true);
        echo "',
        '";
        // line 10
        echo twig_escape_filter($this->env, (isset($context["lastName"]) || array_key_exists("lastName", $context) ? $context["lastName"] : (function () { throw new RuntimeError('Variable "lastName" does not exist.', 10, $this->source); })()), "html", null, true);
        echo ", ";
        echo twig_escape_filter($this->env, (isset($context["lastName"]) || array_key_exists("lastName", $context) ? $context["lastName"] : (function () { throw new RuntimeError('Variable "lastName" does not exist.', 10, $this->source); })()), "html", null, true);
        echo " and ";
        echo twig_escape_filter($this->env, (isset($context["lastName"]) || array_key_exists("lastName", $context) ? $context["lastName"] : (function () { throw new RuntimeError('Variable "lastName" does not exist.', 10, $this->source); })()), "html", null, true);
        echo "'
    );

    protected static \$catchPhraseWords = array(
        array(
            'Adaptívne', 'Automatické', 'Vyvážené', 'Obchodný-sústredený', 'centralizované', 'Cloned', 'kompatibilné', 'nastaviteľný', 'Cross-group', 'Cross-platform', 'zákazníka zamerané', 'Prispôsobiteľné', 'Decentralizované', 'De-inžinierstva', 'prenesenú', 'Digitálne', 'distribuované', 'Rôzne', 'Down veľkosti', 'Rozšírený', 'Celopodnikové ', ' Ergonomická', 'Expanded', 'Rozšírené', 'Plne konfigurovateľné', 'Funkcia na báze', 'Základný', 'Perspektívne', 'inovatívne', 'integrované', 'Intuitívne', 'Inverzný', 'Povinne monitorovaná', 'Multi-prešitia', 'multi-laterálne', 'Viacvrstvová', 'Viacvrstvová', 'Sieťová', 'Objektovo založená', 'Open-architektúru', 'Open-source', 'Operatívny', 'Optimalizované', 'Voliteľný', 'Organické', 'Organizovaná', 'Trvalé', 'Polarizované', 'Preventívne', 'Aktívne', 'Na zisk zameraná', 'Hlboká', 'programovateľný', 'progresívne', 'verejného kľúča', 'kvalita zamerané', 'reaktívne', 'Rekonštruované', 'Znížená', 'Právo veľké', 'robustné', 'Bezpečné', 'Jednoduchšie', 'Prepínanie', 'Synchronizované', 'synergický', 'spojil', 'tím-orientovaná', 'Univerzálne', 'Užívateľsky prívetivý', 'Univerzálne', 'Virtuálne', 'Vizionárske',
        ),
        array(
            'kontrola', 'analýzu', 'asymetrický', 'asynchrónne', 'prístup orientovaný', 'pozadí', 'na šírku pásma, monitorovať', 'obojsmerná', 'rozštiepené', 'jasne myslenie', 'klient-driven', 'klient-server', 'koherentné', 'súdržnosti', 'kompozitné', 'kontextový', 'kontextovo založená', 'obsah na báze', 'oddaný', 'dopytom', 'učebný', 'riadiace', 'diskrétne', 'dynamická', 'posilnenie', 'zahŕňajúci', 'manažér', 'explicitné', 'vyžaruje', 'odolné proti chybám', 'popredia', 'čerstvé myslenia', 'Globálne', 'heuristický', 'homogénna', 'ľudských zdrojov', 'hybridný', 'pôsobivých', 'čiastkové', 'nehmotnej', 'interaktívny', 'stredné', 'miestna', 'logistické', 'maximálny', 'metodickú', 'kritické', 'mobil', 'modulárny', 'motivuje', 'multimediálny', 'multi-štát', 'multi-tasking', 'národný', 'založená na skutočných potrebách', 'neutrálny', 'objektovo orientovaný', 'optimálnu', 'optimalizácia', 'radikálne', 'v reálnom čase', 'vzájomná', 'regionálne', 'citlivý', 'škálovateľné', 'stredné', 'zameriavalo na hľadanie riešenia', 'stabilný', 'statické', 'systematické', 'systémové', 'systém-hodný', 'hmotná', 'terciárny', 'prechodné', 'jednotný', 'pridaná hodnota', 'dobre modulovaný'
        ),
        array(
            'schopnosť', 'prístup', 'algoritmus', 'aliancie', 'analyzátor', 'aplikácie', 'prístup', 'architektúra', 'archív', 'pole', 'postoj', 'referenčné', 'schopnosť', 'kapacita', 'výzva', 'okruh', 'spolupráca', 'zložitosť', 'koncept', 'konglomerát', 'pohotovostný', 'jadro', 'databáza', 'sklad dát', 'definície', 'emulácia', 'kódovanie', 'šifrovanie', 'extranet', 'firmware', 'flexibilita', 'počasia', 'rám', 'rámec', 'funkcie', 'funkcie', 'hardware', 'help-desk', 'hierarchie', 'húb', 'vykonávanie', 'infraštruktúra', 'iniciatíva', 'inštalácia', 'rozhranie', 'encyklopédia', 'pákový efekt', 'metodika', 'migrácia', 'model', 'moderátor', 'kontrola', 'moratórium', 'neurónové-siete', 'paradigma', 'paralelné', 'politika', 'portál', 'produkt', 'produktivita', 'projekt', 'projekcie', 'protokol', 'služba', 'softvér', 'riešenie', 'normalizácie', 'stratégia', 'štruktúra', 'úspech', 'nadstavba', 'pomoc', 'synergia', 'priepustnosť', 'časovom horizonte', 'sadu nástrojov', 'využitie', 'web', 'pracovná sila'
        )
    );

    protected static \$bsWords = array(
        array(
            'implement', 'utilize', 'integrate', 'streamline', 'optimize', 'evolve', 'transform', 'embrace', 'enable', 'orchestrate', 'leverage', 'reinvent', 'aggregate', 'architect', 'enhance', 'incentivize', 'morph', 'empower', 'envisioneer', 'monetize', 'harness', 'facilitate', 'seize', 'disintermediate', 'synergize', 'strategize', 'deploy', 'brand', 'grow', 'target', 'syndicate', 'synthesize', 'deliver', 'mesh', 'incubate', 'engage', 'maximize', 'benchmark', 'expedite', 'reintermediate', 'whiteboard', 'visualize', 'repurpose', 'innovate', 'scale', 'unleash', 'drive', 'extend', 'engineer', 'revolutionize', 'generate', 'exploit', 'transition', 'e-enable', 'iterate', 'cultivate', 'matrix', 'productize', 'redefine', 'recontextualize'
        ),
        array(
            'clicks-and-mortar', 'value-added', 'vertical', 'proactive', 'robust', 'revolutionary', 'scalable', 'leading-edge', 'innovative', 'intuitive', 'strategic', 'e-business', 'mission-critical', 'sticky', 'one-to-one', '24/7', 'end-to-end', 'global', 'B2B', 'B2C', 'granular', 'frictionless', 'virtual', 'viral', 'dynamic', '24/365', 'best-of-breed', 'killer', 'magnetic', 'bleeding-edge', 'web-enabled', 'interactive', 'dot-com', 'sexy', 'back-end', 'real-time', 'efficient', 'front-end', 'distributed', 'seamless', 'extensible', 'turn-key', 'world-class', 'open-source', 'cross-platform', 'cross-media', 'synergistic', 'bricks-and-clicks', 'out-of-the-box', 'enterprise', 'integrated', 'impactful', 'wireless', 'transparent', 'next-generation', 'cutting-edge', 'user-centric', 'visionary', 'customized', 'ubiquitous', 'plug-and-play', 'collaborative', 'compelling', 'holistic', 'rich'
        ),
        array(
            'synergies', 'web-readiness', 'paradigms', 'markets', 'partnerships', 'infrastructures', 'platforms', 'initiatives', 'channels', 'eyeballs', 'communities', 'ROI', 'solutions', 'e-tailers', 'e-services', 'action-items', 'portals', 'niches', 'technologies', 'content', 'vortals', 'supply-chains', 'convergence', 'relationships', 'architectures', 'interfaces', 'e-markets', 'e-commerce', 'systems', 'bandwidth', 'infomediaries', 'models', 'mindshare', 'deliverables', 'users', 'schemas', 'networks', 'applications', 'metrics', 'e-business', 'functionalities', 'experiences', 'webservices', 'methodologies'
        )
    );

    protected static \$companySuffix = array('s.r.o.', 'a.s.', 'v.o.s.');

    /**
     * @example 'Robust full-range hub'
     */
    public function catchPhrase()
    {
        \$result = array();
        foreach (static::\$catchPhraseWords as &\$word) {
            \$result[] = static::randomElement(\$word);
        }

        return join(\$result, ' ');
    }

    /**
     * @example 'integrate extensible convergence'
     */
    public function bs()
    {
        \$result = array();
        foreach (static::\$bsWords as &\$word) {
            \$result[] = static::randomElement(\$word);
        }

        return join(\$result, ' ');
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/fzaninotto/faker/src/Faker/Provider/sk_SK/Company.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  64 => 10,  58 => 9,  52 => 8,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace Faker\\Provider\\sk_SK;

class Company extends \\Faker\\Provider\\Company
{
    protected static \$formats = array(
        '{{lastName}} {{companySuffix}}',
        '{{lastName}}-{{lastName}}',
        '{{lastName}}, {{lastName}} and {{lastName}}'
    );

    protected static \$catchPhraseWords = array(
        array(
            'Adaptívne', 'Automatické', 'Vyvážené', 'Obchodný-sústredený', 'centralizované', 'Cloned', 'kompatibilné', 'nastaviteľný', 'Cross-group', 'Cross-platform', 'zákazníka zamerané', 'Prispôsobiteľné', 'Decentralizované', 'De-inžinierstva', 'prenesenú', 'Digitálne', 'distribuované', 'Rôzne', 'Down veľkosti', 'Rozšírený', 'Celopodnikové ', ' Ergonomická', 'Expanded', 'Rozšírené', 'Plne konfigurovateľné', 'Funkcia na báze', 'Základný', 'Perspektívne', 'inovatívne', 'integrované', 'Intuitívne', 'Inverzný', 'Povinne monitorovaná', 'Multi-prešitia', 'multi-laterálne', 'Viacvrstvová', 'Viacvrstvová', 'Sieťová', 'Objektovo založená', 'Open-architektúru', 'Open-source', 'Operatívny', 'Optimalizované', 'Voliteľný', 'Organické', 'Organizovaná', 'Trvalé', 'Polarizované', 'Preventívne', 'Aktívne', 'Na zisk zameraná', 'Hlboká', 'programovateľný', 'progresívne', 'verejného kľúča', 'kvalita zamerané', 'reaktívne', 'Rekonštruované', 'Znížená', 'Právo veľké', 'robustné', 'Bezpečné', 'Jednoduchšie', 'Prepínanie', 'Synchronizované', 'synergický', 'spojil', 'tím-orientovaná', 'Univerzálne', 'Užívateľsky prívetivý', 'Univerzálne', 'Virtuálne', 'Vizionárske',
        ),
        array(
            'kontrola', 'analýzu', 'asymetrický', 'asynchrónne', 'prístup orientovaný', 'pozadí', 'na šírku pásma, monitorovať', 'obojsmerná', 'rozštiepené', 'jasne myslenie', 'klient-driven', 'klient-server', 'koherentné', 'súdržnosti', 'kompozitné', 'kontextový', 'kontextovo založená', 'obsah na báze', 'oddaný', 'dopytom', 'učebný', 'riadiace', 'diskrétne', 'dynamická', 'posilnenie', 'zahŕňajúci', 'manažér', 'explicitné', 'vyžaruje', 'odolné proti chybám', 'popredia', 'čerstvé myslenia', 'Globálne', 'heuristický', 'homogénna', 'ľudských zdrojov', 'hybridný', 'pôsobivých', 'čiastkové', 'nehmotnej', 'interaktívny', 'stredné', 'miestna', 'logistické', 'maximálny', 'metodickú', 'kritické', 'mobil', 'modulárny', 'motivuje', 'multimediálny', 'multi-štát', 'multi-tasking', 'národný', 'založená na skutočných potrebách', 'neutrálny', 'objektovo orientovaný', 'optimálnu', 'optimalizácia', 'radikálne', 'v reálnom čase', 'vzájomná', 'regionálne', 'citlivý', 'škálovateľné', 'stredné', 'zameriavalo na hľadanie riešenia', 'stabilný', 'statické', 'systematické', 'systémové', 'systém-hodný', 'hmotná', 'terciárny', 'prechodné', 'jednotný', 'pridaná hodnota', 'dobre modulovaný'
        ),
        array(
            'schopnosť', 'prístup', 'algoritmus', 'aliancie', 'analyzátor', 'aplikácie', 'prístup', 'architektúra', 'archív', 'pole', 'postoj', 'referenčné', 'schopnosť', 'kapacita', 'výzva', 'okruh', 'spolupráca', 'zložitosť', 'koncept', 'konglomerát', 'pohotovostný', 'jadro', 'databáza', 'sklad dát', 'definície', 'emulácia', 'kódovanie', 'šifrovanie', 'extranet', 'firmware', 'flexibilita', 'počasia', 'rám', 'rámec', 'funkcie', 'funkcie', 'hardware', 'help-desk', 'hierarchie', 'húb', 'vykonávanie', 'infraštruktúra', 'iniciatíva', 'inštalácia', 'rozhranie', 'encyklopédia', 'pákový efekt', 'metodika', 'migrácia', 'model', 'moderátor', 'kontrola', 'moratórium', 'neurónové-siete', 'paradigma', 'paralelné', 'politika', 'portál', 'produkt', 'produktivita', 'projekt', 'projekcie', 'protokol', 'služba', 'softvér', 'riešenie', 'normalizácie', 'stratégia', 'štruktúra', 'úspech', 'nadstavba', 'pomoc', 'synergia', 'priepustnosť', 'časovom horizonte', 'sadu nástrojov', 'využitie', 'web', 'pracovná sila'
        )
    );

    protected static \$bsWords = array(
        array(
            'implement', 'utilize', 'integrate', 'streamline', 'optimize', 'evolve', 'transform', 'embrace', 'enable', 'orchestrate', 'leverage', 'reinvent', 'aggregate', 'architect', 'enhance', 'incentivize', 'morph', 'empower', 'envisioneer', 'monetize', 'harness', 'facilitate', 'seize', 'disintermediate', 'synergize', 'strategize', 'deploy', 'brand', 'grow', 'target', 'syndicate', 'synthesize', 'deliver', 'mesh', 'incubate', 'engage', 'maximize', 'benchmark', 'expedite', 'reintermediate', 'whiteboard', 'visualize', 'repurpose', 'innovate', 'scale', 'unleash', 'drive', 'extend', 'engineer', 'revolutionize', 'generate', 'exploit', 'transition', 'e-enable', 'iterate', 'cultivate', 'matrix', 'productize', 'redefine', 'recontextualize'
        ),
        array(
            'clicks-and-mortar', 'value-added', 'vertical', 'proactive', 'robust', 'revolutionary', 'scalable', 'leading-edge', 'innovative', 'intuitive', 'strategic', 'e-business', 'mission-critical', 'sticky', 'one-to-one', '24/7', 'end-to-end', 'global', 'B2B', 'B2C', 'granular', 'frictionless', 'virtual', 'viral', 'dynamic', '24/365', 'best-of-breed', 'killer', 'magnetic', 'bleeding-edge', 'web-enabled', 'interactive', 'dot-com', 'sexy', 'back-end', 'real-time', 'efficient', 'front-end', 'distributed', 'seamless', 'extensible', 'turn-key', 'world-class', 'open-source', 'cross-platform', 'cross-media', 'synergistic', 'bricks-and-clicks', 'out-of-the-box', 'enterprise', 'integrated', 'impactful', 'wireless', 'transparent', 'next-generation', 'cutting-edge', 'user-centric', 'visionary', 'customized', 'ubiquitous', 'plug-and-play', 'collaborative', 'compelling', 'holistic', 'rich'
        ),
        array(
            'synergies', 'web-readiness', 'paradigms', 'markets', 'partnerships', 'infrastructures', 'platforms', 'initiatives', 'channels', 'eyeballs', 'communities', 'ROI', 'solutions', 'e-tailers', 'e-services', 'action-items', 'portals', 'niches', 'technologies', 'content', 'vortals', 'supply-chains', 'convergence', 'relationships', 'architectures', 'interfaces', 'e-markets', 'e-commerce', 'systems', 'bandwidth', 'infomediaries', 'models', 'mindshare', 'deliverables', 'users', 'schemas', 'networks', 'applications', 'metrics', 'e-business', 'functionalities', 'experiences', 'webservices', 'methodologies'
        )
    );

    protected static \$companySuffix = array('s.r.o.', 'a.s.', 'v.o.s.');

    /**
     * @example 'Robust full-range hub'
     */
    public function catchPhrase()
    {
        \$result = array();
        foreach (static::\$catchPhraseWords as &\$word) {
            \$result[] = static::randomElement(\$word);
        }

        return join(\$result, ' ');
    }

    /**
     * @example 'integrate extensible convergence'
     */
    public function bs()
    {
        \$result = array();
        foreach (static::\$bsWords as &\$word) {
            \$result[] = static::randomElement(\$word);
        }

        return join(\$result, ' ');
    }
}
", "vendor/fzaninotto/faker/src/Faker/Provider/sk_SK/Company.php", "/var/www/public/DevLaon/templates/vendor/fzaninotto/faker/src/Faker/Provider/sk_SK/Company.php");
    }
}
