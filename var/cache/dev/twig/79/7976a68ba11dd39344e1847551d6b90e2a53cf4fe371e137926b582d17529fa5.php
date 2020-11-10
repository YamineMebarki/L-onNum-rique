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

/* var/cache/dev/twig/fa/fadcba34bd7f176783ce485f2f93cacab3968e62da93de2359b14d7c6e908c58.php */
class __TwigTemplate_3c62641664eedc9ca8dc6ab80b29fc4a38ef055e951cbe4eaaf44a6c5254af1e extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "var/cache/dev/twig/fa/fadcba34bd7f176783ce485f2f93cacab3968e62da93de2359b14d7c6e908c58.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "var/cache/dev/twig/fa/fadcba34bd7f176783ce485f2f93cacab3968e62da93de2359b14d7c6e908c58.php"));

        // line 1
        echo "<?php

use Twig\\Environment;
use Twig\\Error\\LoaderError;
use Twig\\Error\\RuntimeError;
use Twig\\Extension\\SandboxExtension;
use Twig\\Markup;
use Twig\\Sandbox\\SecurityError;
use Twig\\Sandbox\\SecurityNotAllowedTagError;
use Twig\\Sandbox\\SecurityNotAllowedFilterError;
use Twig\\Sandbox\\SecurityNotAllowedFunctionError;
use Twig\\Source;
use Twig\\Template;

/* @Twig/Exception/exception.html.twig */
class __TwigTemplate_ded2a83c38f68319213395378b48109a4a2c7ef0d9b3838d9326f12c8890e814 extends \\Twig\\Template
{
    private \$source;
    private \$macros = [];

    public function __construct(Environment \$env)
    {
        parent::__construct(\$env);

        \$this->source = \$this->getSourceContext();

        \$this->parent = false;

        \$this->blocks = [
        ];
    }

    protected function doDisplay(array \$context, array \$blocks = [])
    {
        \$macros = \$this->macros;
        \$__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = \$this->extensions[\"Symfony\\\\Bundle\\\\WebProfilerBundle\\\\Twig\\\\WebProfilerExtension\"];
        \$__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter(\$__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \\Twig\\Profiler\\Profile(\$this->getTemplateName(), \"template\", \"@Twig/Exception/exception.html.twig\"));

        \$__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = \$this->extensions[\"Symfony\\\\Bridge\\\\Twig\\\\Extension\\\\ProfilerExtension\"];
        \$__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter(\$__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \\Twig\\Profiler\\Profile(\$this->getTemplateName(), \"template\", \"@Twig/Exception/exception.html.twig\"));

        // line 1
        echo \"<div class=\\\"exception-summary \";
        echo ((twig_test_empty(twig_get_attribute(\$this->env, \$this->source, (isset(\$context[\"exception\"]) || array_key_exists(\"exception\", \$context) ? \$context[\"exception\"] : (function () { throw new RuntimeError('Variable \"exception\" does not exist.', 1, \$this->source); })()), \"message\", [], \"any\", false, false, false, 1))) ? (\"exception-without-message\") : (\"\"));
        echo \"\\\">
    <div class=\\\"exception-metadata\\\">
        <div class=\\\"container\\\">
            <h2 class=\\\"exception-hierarchy\\\">
                \";
        // line 5
        \$context['_parent'] = \$context;
        \$context['_seq'] = twig_ensure_traversable(twig_reverse_filter(\$this->env, twig_get_attribute(\$this->env, \$this->source, (isset(\$context[\"exception\"]) || array_key_exists(\"exception\", \$context) ? \$context[\"exception\"] : (function () { throw new RuntimeError('Variable \"exception\" does not exist.', 5, \$this->source); })()), \"allPrevious\", [], \"any\", false, false, false, 5)));
        \$context['loop'] = [
          'parent' => \$context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array(\$context['_seq']) || (is_object(\$context['_seq']) && \$context['_seq'] instanceof \\Countable)) {
            \$length = count(\$context['_seq']);
            \$context['loop']['revindex0'] = \$length - 1;
            \$context['loop']['revindex'] = \$length;
            \$context['loop']['length'] = \$length;
            \$context['loop']['last'] = 1 === \$length;
        }
        foreach (\$context['_seq'] as \$context[\"_key\"] => \$context[\"previousException\"]) {
            // line 6
            echo \"                    <a href=\\\"#trace-box-\";
            echo twig_escape_filter(\$this->env, (twig_get_attribute(\$this->env, \$this->source, \$context[\"loop\"], \"revindex\", [], \"any\", false, false, false, 6) + 1), \"html\", null, true);
            echo \"\\\">\";
            echo \$this->extensions['Symfony\\Bridge\\Twig\\Extension\\CodeExtension']->abbrClass(twig_get_attribute(\$this->env, \$this->source, \$context[\"previousException\"], \"class\", [], \"any\", false, false, false, 6));
            echo \"</a>
                    <span class=\\\"icon\\\">\";
            // line 7
            echo twig_include(\$this->env, \$context, \"@Twig/images/chevron-right.svg\");
            echo \"</span>
                \";
            ++\$context['loop']['index0'];
            ++\$context['loop']['index'];
            \$context['loop']['first'] = false;
            if (isset(\$context['loop']['length'])) {
                --\$context['loop']['revindex0'];
                --\$context['loop']['revindex'];
                \$context['loop']['last'] = 0 === \$context['loop']['revindex0'];
            }
        }
        \$_parent = \$context['_parent'];
        unset(\$context['_seq'], \$context['_iterated'], \$context['_key'], \$context['previousException'], \$context['_parent'], \$context['loop']);
        \$context = array_intersect_key(\$context, \$_parent) + \$_parent;
        // line 9
        echo \"                <a href=\\\"#trace-box-1\\\">\";
        echo \$this->extensions['Symfony\\Bridge\\Twig\\Extension\\CodeExtension']->abbrClass(twig_get_attribute(\$this->env, \$this->source, (isset(\$context[\"exception\"]) || array_key_exists(\"exception\", \$context) ? \$context[\"exception\"] : (function () { throw new RuntimeError('Variable \"exception\" does not exist.', 9, \$this->source); })()), \"class\", [], \"any\", false, false, false, 9));
        echo \"</a>
            </h2>
            <h2 class=\\\"exception-http\\\">
                HTTP \";
        // line 12
        echo twig_escape_filter(\$this->env, (isset(\$context[\"status_code\"]) || array_key_exists(\"status_code\", \$context) ? \$context[\"status_code\"] : (function () { throw new RuntimeError('Variable \"status_code\" does not exist.', 12, \$this->source); })()), \"html\", null, true);
        echo \" <small>\";
        echo twig_escape_filter(\$this->env, (isset(\$context[\"status_text\"]) || array_key_exists(\"status_text\", \$context) ? \$context[\"status_text\"] : (function () { throw new RuntimeError('Variable \"status_text\" does not exist.', 12, \$this->source); })()), \"html\", null, true);
        echo \"</small>
            </h2>
        </div>
    </div>

    <div class=\\\"exception-message-wrapper\\\">
        <div class=\\\"container\\\">
            <h1 class=\\\"break-long-words exception-message \";
        // line 19
        echo (((twig_length_filter(\$this->env, twig_get_attribute(\$this->env, \$this->source, (isset(\$context[\"exception\"]) || array_key_exists(\"exception\", \$context) ? \$context[\"exception\"] : (function () { throw new RuntimeError('Variable \"exception\" does not exist.', 19, \$this->source); })()), \"message\", [], \"any\", false, false, false, 19)) > 180)) ? (\"long\") : (\"\"));
        echo \"\\\">\";
        // line 20
        echo \$this->extensions['Symfony\\Bridge\\Twig\\Extension\\CodeExtension']->formatFileFromText(nl2br(twig_escape_filter(\$this->env, twig_get_attribute(\$this->env, \$this->source, (isset(\$context[\"exception\"]) || array_key_exists(\"exception\", \$context) ? \$context[\"exception\"] : (function () { throw new RuntimeError('Variable \"exception\" does not exist.', 20, \$this->source); })()), \"message\", [], \"any\", false, false, false, 20), \"html\", null, true)));
        // line 21
        echo \"</h1>

            <div class=\\\"exception-illustration hidden-xs-down\\\">
                \";
        // line 24
        echo twig_include(\$this->env, \$context, \"@Twig/images/symfony-ghost.svg\");
        echo \"
            </div>
        </div>
    </div>
</div>

<div class=\\\"container\\\">
    <div class=\\\"sf-tabs\\\">
        <div class=\\\"tab\\\">
            \";
        // line 33
        \$context[\"exception_as_array\"] = twig_get_attribute(\$this->env, \$this->source, (isset(\$context[\"exception\"]) || array_key_exists(\"exception\", \$context) ? \$context[\"exception\"] : (function () { throw new RuntimeError('Variable \"exception\" does not exist.', 33, \$this->source); })()), \"toarray\", [], \"any\", false, false, false, 33);
        // line 34
        echo \"            \";
        \$context[\"_exceptions_with_user_code\"] = [];
        // line 35
        echo \"            \";
        \$context['_parent'] = \$context;
        \$context['_seq'] = twig_ensure_traversable((isset(\$context[\"exception_as_array\"]) || array_key_exists(\"exception_as_array\", \$context) ? \$context[\"exception_as_array\"] : (function () { throw new RuntimeError('Variable \"exception_as_array\" does not exist.', 35, \$this->source); })()));
        foreach (\$context['_seq'] as \$context[\"i\"] => \$context[\"e\"]) {
            // line 36
            echo \"                \";
            \$context['_parent'] = \$context;
            \$context['_seq'] = twig_ensure_traversable(twig_get_attribute(\$this->env, \$this->source, \$context[\"e\"], \"trace\", [], \"any\", false, false, false, 36));
            \$context['loop'] = [
              'parent' => \$context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array(\$context['_seq']) || (is_object(\$context['_seq']) && \$context['_seq'] instanceof \\Countable)) {
                \$length = count(\$context['_seq']);
                \$context['loop']['revindex0'] = \$length - 1;
                \$context['loop']['revindex'] = \$length;
                \$context['loop']['length'] = \$length;
                \$context['loop']['last'] = 1 === \$length;
            }
            foreach (\$context['_seq'] as \$context[\"_key\"] => \$context[\"trace\"]) {
                // line 37
                echo \"                    \";
                if (((( !twig_test_empty(twig_get_attribute(\$this->env, \$this->source, \$context[\"trace\"], \"file\", [], \"any\", false, false, false, 37)) && !twig_in_filter(\"/vendor/\", twig_get_attribute(\$this->env, \$this->source, \$context[\"trace\"], \"file\", [], \"any\", false, false, false, 37))) && !twig_in_filter(\"/var/cache/\", twig_get_attribute(\$this->env, \$this->source, \$context[\"trace\"], \"file\", [], \"any\", false, false, false, 37))) &&  !twig_get_attribute(\$this->env, \$this->source, \$context[\"loop\"], \"last\", [], \"any\", false, false, false, 37))) {
                    // line 38
                    echo \"                        \";
                    \$context[\"_exceptions_with_user_code\"] = twig_array_merge((isset(\$context[\"_exceptions_with_user_code\"]) || array_key_exists(\"_exceptions_with_user_code\", \$context) ? \$context[\"_exceptions_with_user_code\"] : (function () { throw new RuntimeError('Variable \"_exceptions_with_user_code\" does not exist.', 38, \$this->source); })()), [0 => \$context[\"i\"]]);
                    // line 39
                    echo \"                    \";
                }
                // line 40
                echo \"                \";
                ++\$context['loop']['index0'];
                ++\$context['loop']['index'];
                \$context['loop']['first'] = false;
                if (isset(\$context['loop']['length'])) {
                    --\$context['loop']['revindex0'];
                    --\$context['loop']['revindex'];
                    \$context['loop']['last'] = 0 === \$context['loop']['revindex0'];
                }
            }
            \$_parent = \$context['_parent'];
            unset(\$context['_seq'], \$context['_iterated'], \$context['_key'], \$context['trace'], \$context['_parent'], \$context['loop']);
            \$context = array_intersect_key(\$context, \$_parent) + \$_parent;
            // line 41
            echo \"            \";
        }
        \$_parent = \$context['_parent'];
        unset(\$context['_seq'], \$context['_iterated'], \$context['i'], \$context['e'], \$context['_parent'], \$context['loop']);
        \$context = array_intersect_key(\$context, \$_parent) + \$_parent;
        // line 42
        echo \"            <h3 class=\\\"tab-title\\\">
                \";
        // line 43
        if ((twig_length_filter(\$this->env, (isset(\$context[\"exception_as_array\"]) || array_key_exists(\"exception_as_array\", \$context) ? \$context[\"exception_as_array\"] : (function () { throw new RuntimeError('Variable \"exception_as_array\" does not exist.', 43, \$this->source); })())) > 1)) {
            // line 44
            echo \"                    Exceptions <span class=\\\"badge\\\">\";
            echo twig_escape_filter(\$this->env, twig_length_filter(\$this->env, (isset(\$context[\"exception_as_array\"]) || array_key_exists(\"exception_as_array\", \$context) ? \$context[\"exception_as_array\"] : (function () { throw new RuntimeError('Variable \"exception_as_array\" does not exist.', 44, \$this->source); })())), \"html\", null, true);
            echo \"</span>
                \";
        } else {
            // line 46
            echo \"                    Exception
                \";
        }
        // line 48
        echo \"            </h3>

            <div class=\\\"tab-content\\\">
                \";
        // line 51
        \$context['_parent'] = \$context;
        \$context['_seq'] = twig_ensure_traversable((isset(\$context[\"exception_as_array\"]) || array_key_exists(\"exception_as_array\", \$context) ? \$context[\"exception_as_array\"] : (function () { throw new RuntimeError('Variable \"exception_as_array\" does not exist.', 51, \$this->source); })()));
        \$context['loop'] = [
          'parent' => \$context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array(\$context['_seq']) || (is_object(\$context['_seq']) && \$context['_seq'] instanceof \\Countable)) {
            \$length = count(\$context['_seq']);
            \$context['loop']['revindex0'] = \$length - 1;
            \$context['loop']['revindex'] = \$length;
            \$context['loop']['length'] = \$length;
            \$context['loop']['last'] = 1 === \$length;
        }
        foreach (\$context['_seq'] as \$context[\"i\"] => \$context[\"e\"]) {
            // line 52
            echo \"                    \";
            echo twig_include(\$this->env, \$context, \"@Twig/Exception/traces.html.twig\", [\"exception\" => \$context[\"e\"], \"index\" => twig_get_attribute(\$this->env, \$this->source, \$context[\"loop\"], \"index\", [], \"any\", false, false, false, 52), \"expand\" => (twig_in_filter(\$context[\"i\"], (isset(\$context[\"_exceptions_with_user_code\"]) || array_key_exists(\"_exceptions_with_user_code\", \$context) ? \$context[\"_exceptions_with_user_code\"] : (function () { throw new RuntimeError('Variable \"_exceptions_with_user_code\" does not exist.', 52, \$this->source); })())) || (twig_test_empty((isset(\$context[\"_exceptions_with_user_code\"]) || array_key_exists(\"_exceptions_with_user_code\", \$context) ? \$context[\"_exceptions_with_user_code\"] : (function () { throw new RuntimeError('Variable \"_exceptions_with_user_code\" does not exist.', 52, \$this->source); })())) && twig_get_attribute(\$this->env, \$this->source, \$context[\"loop\"], \"first\", [], \"any\", false, false, false, 52)))], false);
            echo \"
                \";
            ++\$context['loop']['index0'];
            ++\$context['loop']['index'];
            \$context['loop']['first'] = false;
            if (isset(\$context['loop']['length'])) {
                --\$context['loop']['revindex0'];
                --\$context['loop']['revindex'];
                \$context['loop']['last'] = 0 === \$context['loop']['revindex0'];
            }
        }
        \$_parent = \$context['_parent'];
        unset(\$context['_seq'], \$context['_iterated'], \$context['i'], \$context['e'], \$context['_parent'], \$context['loop']);
        \$context = array_intersect_key(\$context, \$_parent) + \$_parent;
        // line 54
        echo \"            </div>
        </div>

        \";
        // line 57
        if ((isset(\$context[\"logger\"]) || array_key_exists(\"logger\", \$context) ? \$context[\"logger\"] : (function () { throw new RuntimeError('Variable \"logger\" does not exist.', 57, \$this->source); })())) {
            // line 58
            echo \"        <div class=\\\"tab \";
            echo ((twig_test_empty(twig_get_attribute(\$this->env, \$this->source, (isset(\$context[\"logger\"]) || array_key_exists(\"logger\", \$context) ? \$context[\"logger\"] : (function () { throw new RuntimeError('Variable \"logger\" does not exist.', 58, \$this->source); })()), \"log\", [], \"any\", false, false, false, 58))) ? (\"disabled\") : (\"\"));
            echo \"\\\">
            <h3 class=\\\"tab-title\\\">
                Logs
                \";
            // line 61
            if ((((twig_get_attribute(\$this->env, \$this->source, (\$context[\"logger\"] ?? null), \"counterrors\", [], \"any\", true, true, false, 61) &&  !(null === twig_get_attribute(\$this->env, \$this->source, (\$context[\"logger\"] ?? null), \"counterrors\", [], \"any\", false, false, false, 61)))) ? (twig_get_attribute(\$this->env, \$this->source, (\$context[\"logger\"] ?? null), \"counterrors\", [], \"any\", false, false, false, 61)) : (false))) {
                echo \"<span class=\\\"badge status-error\\\">\";
                echo twig_escape_filter(\$this->env, twig_get_attribute(\$this->env, \$this->source, (isset(\$context[\"logger\"]) || array_key_exists(\"logger\", \$context) ? \$context[\"logger\"] : (function () { throw new RuntimeError('Variable \"logger\" does not exist.', 61, \$this->source); })()), \"counterrors\", [], \"any\", false, false, false, 61), \"html\", null, true);
                echo \"</span>\";
            }
            // line 62
            echo \"            </h3>

            <div class=\\\"tab-content\\\">
                \";
            // line 65
            if (twig_get_attribute(\$this->env, \$this->source, (isset(\$context[\"logger\"]) || array_key_exists(\"logger\", \$context) ? \$context[\"logger\"] : (function () { throw new RuntimeError('Variable \"logger\" does not exist.', 65, \$this->source); })()), \"log\", [], \"any\", false, false, false, 65)) {
                // line 66
                echo \"                    \";
                echo twig_include(\$this->env, \$context, \"@Twig/Exception/log.html.twig\", [\"log\" => twig_get_attribute(\$this->env, \$this->source, (isset(\$context[\"logger\"]) || array_key_exists(\"logger\", \$context) ? \$context[\"logger\"] : (function () { throw new RuntimeError('Variable \"logger\" does not exist.', 66, \$this->source); })()), \"log\", [], \"any\", false, false, false, 66)], false);
                echo \"
                \";
            } else {
                // line 68
                echo \"                    <div class=\\\"empty\\\">
                        <p>No log messages</p>
                    </div>
                \";
            }
            // line 72
            echo \"            </div>
        </div>
        \";
        }
        // line 75
        echo \"
        <div class=\\\"tab\\\">
            <h3 class=\\\"tab-title\\\">
                \";
        // line 78
        if ((twig_length_filter(\$this->env, (isset(\$context[\"exception_as_array\"]) || array_key_exists(\"exception_as_array\", \$context) ? \$context[\"exception_as_array\"] : (function () { throw new RuntimeError('Variable \"exception_as_array\" does not exist.', 78, \$this->source); })())) > 1)) {
            // line 79
            echo \"                    Stack Traces <span class=\\\"badge\\\">\";
            echo twig_escape_filter(\$this->env, twig_length_filter(\$this->env, (isset(\$context[\"exception_as_array\"]) || array_key_exists(\"exception_as_array\", \$context) ? \$context[\"exception_as_array\"] : (function () { throw new RuntimeError('Variable \"exception_as_array\" does not exist.', 79, \$this->source); })())), \"html\", null, true);
            echo \"</span>
                \";
        } else {
            // line 81
            echo \"                    Stack Trace
                \";
        }
        // line 83
        echo \"            </h3>

            <div class=\\\"tab-content\\\">
                \";
        // line 86
        \$context['_parent'] = \$context;
        \$context['_seq'] = twig_ensure_traversable((isset(\$context[\"exception_as_array\"]) || array_key_exists(\"exception_as_array\", \$context) ? \$context[\"exception_as_array\"] : (function () { throw new RuntimeError('Variable \"exception_as_array\" does not exist.', 86, \$this->source); })()));
        \$context['loop'] = [
          'parent' => \$context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array(\$context['_seq']) || (is_object(\$context['_seq']) && \$context['_seq'] instanceof \\Countable)) {
            \$length = count(\$context['_seq']);
            \$context['loop']['revindex0'] = \$length - 1;
            \$context['loop']['revindex'] = \$length;
            \$context['loop']['length'] = \$length;
            \$context['loop']['last'] = 1 === \$length;
        }
        foreach (\$context['_seq'] as \$context[\"_key\"] => \$context[\"e\"]) {
            // line 87
            echo \"                    \";
            echo twig_include(\$this->env, \$context, \"@Twig/Exception/traces_text.html.twig\", [\"exception\" => \$context[\"e\"], \"index\" => twig_get_attribute(\$this->env, \$this->source, \$context[\"loop\"], \"index\", [], \"any\", false, false, false, 87), \"num_exceptions\" => twig_get_attribute(\$this->env, \$this->source, \$context[\"loop\"], \"length\", [], \"any\", false, false, false, 87)], false);
            echo \"
                \";
            ++\$context['loop']['index0'];
            ++\$context['loop']['index'];
            \$context['loop']['first'] = false;
            if (isset(\$context['loop']['length'])) {
                --\$context['loop']['revindex0'];
                --\$context['loop']['revindex'];
                \$context['loop']['last'] = 0 === \$context['loop']['revindex0'];
            }
        }
        \$_parent = \$context['_parent'];
        unset(\$context['_seq'], \$context['_iterated'], \$context['_key'], \$context['e'], \$context['_parent'], \$context['loop']);
        \$context = array_intersect_key(\$context, \$_parent) + \$_parent;
        // line 89
        echo \"            </div>
        </div>

        \";
        // line 92
        if ( !twig_test_empty((isset(\$context[\"currentContent\"]) || array_key_exists(\"currentContent\", \$context) ? \$context[\"currentContent\"] : (function () { throw new RuntimeError('Variable \"currentContent\" does not exist.', 92, \$this->source); })()))) {
            // line 93
            echo \"        <div class=\\\"tab\\\">
            <h3 class=\\\"tab-title\\\">Output content</h3>

            <div class=\\\"tab-content\\\">
                \";
            // line 97
            echo twig_escape_filter(\$this->env, (isset(\$context[\"currentContent\"]) || array_key_exists(\"currentContent\", \$context) ? \$context[\"currentContent\"] : (function () { throw new RuntimeError('Variable \"currentContent\" does not exist.', 97, \$this->source); })()), \"html\", null, true);
            echo \"
            </div>
        </div>
        \";
        }
        // line 101
        echo \"    </div>
</div>
\";
        
        \$__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave(\$__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        \$__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave(\$__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return \"@Twig/Exception/exception.html.twig\";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  363 => 101,  356 => 97,  350 => 93,  348 => 92,  343 => 89,  326 => 87,  309 => 86,  304 => 83,  300 => 81,  294 => 79,  292 => 78,  287 => 75,  282 => 72,  276 => 68,  270 => 66,  268 => 65,  263 => 62,  257 => 61,  250 => 58,  248 => 57,  243 => 54,  226 => 52,  209 => 51,  204 => 48,  200 => 46,  194 => 44,  192 => 43,  189 => 42,  183 => 41,  169 => 40,  166 => 39,  163 => 38,  160 => 37,  142 => 36,  137 => 35,  134 => 34,  132 => 33,  120 => 24,  115 => 21,  113 => 20,  110 => 19,  98 => 12,  91 => 9,  75 => 7,  68 => 6,  51 => 5,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source(\"<div class=\\\"exception-summary ";
        // line 391
        echo ((twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new RuntimeError('Variable "exception" does not exist.', 391, $this->source); })()), "message", [], "any", false, false, false, 391))) ? ("exception-without-message") : (""));
        echo "\\\">
    <div class=\\\"exception-metadata\\\">
        <div class=\\\"container\\\">
            <h2 class=\\\"exception-hierarchy\\\">
                ";
        // line 395
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_reverse_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new RuntimeError('Variable "exception" does not exist.', 395, $this->source); })()), "allPrevious", [], "any", false, false, false, 395)));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["previousException"]) {
            // line 396
            echo "                    <a href=\\\"#trace-box-";
            echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, $context["loop"], "revindex", [], "any", false, false, false, 396) + 1), "html", null, true);
            echo "\\\">";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\CodeExtension']->abbrClass(twig_get_attribute($this->env, $this->source, $context["previousException"], "class", [], "any", false, false, false, 396));
            echo "</a>
                    <span class=\\\"icon\\\">";
            // line 397
            echo twig_include($this->env, $context, "@Twig/images/chevron-right.svg");
            echo "</span>
                ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['previousException'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 399
        echo "                <a href=\\\"#trace-box-1\\\">";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\CodeExtension']->abbrClass(twig_get_attribute($this->env, $this->source, (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new RuntimeError('Variable "exception" does not exist.', 399, $this->source); })()), "class", [], "any", false, false, false, 399));
        echo "</a>
            </h2>
            <h2 class=\\\"exception-http\\\">
                HTTP ";
        // line 402
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new RuntimeError('Variable "status_code" does not exist.', 402, $this->source); })()), "html", null, true);
        echo " <small>";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new RuntimeError('Variable "status_text" does not exist.', 402, $this->source); })()), "html", null, true);
        echo "</small>
            </h2>
        </div>
    </div>

    <div class=\\\"exception-message-wrapper\\\">
        <div class=\\\"container\\\">
            <h1 class=\\\"break-long-words exception-message ";
        // line 409
        echo (((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new RuntimeError('Variable "exception" does not exist.', 409, $this->source); })()), "message", [], "any", false, false, false, 409)) > 180)) ? ("long") : (""));
        echo "\\\">";
        // line 410
        echo $this->extensions['Symfony\Bridge\Twig\Extension\CodeExtension']->formatFileFromText(nl2br(twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new RuntimeError('Variable "exception" does not exist.', 410, $this->source); })()), "message", [], "any", false, false, false, 410), "html", null, true)));
        // line 411
        echo "</h1>

            <div class=\\\"exception-illustration hidden-xs-down\\\">
                ";
        // line 414
        echo twig_include($this->env, $context, "@Twig/images/symfony-ghost.svg");
        echo "
            </div>
        </div>
    </div>
</div>

<div class=\\\"container\\\">
    <div class=\\\"sf-tabs\\\">
        <div class=\\\"tab\\\">
            ";
        // line 423
        $context["exception_as_array"] = twig_get_attribute($this->env, $this->source, (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new RuntimeError('Variable "exception" does not exist.', 423, $this->source); })()), "toarray", [], "any", false, false, false, 423);
        // line 424
        echo "            ";
        $context["_exceptions_with_user_code"] = [];
        // line 425
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["exception_as_array"]) || array_key_exists("exception_as_array", $context) ? $context["exception_as_array"] : (function () { throw new RuntimeError('Variable "exception_as_array" does not exist.', 425, $this->source); })()));
        foreach ($context['_seq'] as $context["i"] => $context["e"]) {
            // line 426
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["e"], "trace", [], "any", false, false, false, 426));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
                // line 427
                echo "                    ";
                if (((( !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["trace"], "file", [], "any", false, false, false, 427)) && !twig_in_filter("/vendor/", twig_get_attribute($this->env, $this->source, $context["trace"], "file", [], "any", false, false, false, 427))) && !twig_in_filter("/var/cache/", twig_get_attribute($this->env, $this->source, $context["trace"], "file", [], "any", false, false, false, 427))) &&  !twig_get_attribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 427))) {
                    // line 428
                    echo "                        ";
                    $context["_exceptions_with_user_code"] = twig_array_merge((isset($context["_exceptions_with_user_code"]) || array_key_exists("_exceptions_with_user_code", $context) ? $context["_exceptions_with_user_code"] : (function () { throw new RuntimeError('Variable "_exceptions_with_user_code" does not exist.', 428, $this->source); })()), [0 => $context["i"]]);
                    // line 429
                    echo "                    ";
                }
                // line 430
                echo "                ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 431
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['i'], $context['e'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 432
        echo "            <h3 class=\\\"tab-title\\\">
                ";
        // line 433
        if ((twig_length_filter($this->env, (isset($context["exception_as_array"]) || array_key_exists("exception_as_array", $context) ? $context["exception_as_array"] : (function () { throw new RuntimeError('Variable "exception_as_array" does not exist.', 433, $this->source); })())) > 1)) {
            // line 434
            echo "                    Exceptions <span class=\\\"badge\\\">";
            echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["exception_as_array"]) || array_key_exists("exception_as_array", $context) ? $context["exception_as_array"] : (function () { throw new RuntimeError('Variable "exception_as_array" does not exist.', 434, $this->source); })())), "html", null, true);
            echo "</span>
                ";
        } else {
            // line 436
            echo "                    Exception
                ";
        }
        // line 438
        echo "            </h3>

            <div class=\\\"tab-content\\\">
                ";
        // line 441
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["exception_as_array"]) || array_key_exists("exception_as_array", $context) ? $context["exception_as_array"] : (function () { throw new RuntimeError('Variable "exception_as_array" does not exist.', 441, $this->source); })()));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["i"] => $context["e"]) {
            // line 442
            echo "                    ";
            echo twig_include($this->env, $context, "@Twig/Exception/traces.html.twig", ["exception" => $context["e"], "index" => twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 442), "expand" => (twig_in_filter($context["i"], (isset($context["_exceptions_with_user_code"]) || array_key_exists("_exceptions_with_user_code", $context) ? $context["_exceptions_with_user_code"] : (function () { throw new RuntimeError('Variable "_exceptions_with_user_code" does not exist.', 442, $this->source); })())) || (twig_test_empty((isset($context["_exceptions_with_user_code"]) || array_key_exists("_exceptions_with_user_code", $context) ? $context["_exceptions_with_user_code"] : (function () { throw new RuntimeError('Variable "_exceptions_with_user_code" does not exist.', 442, $this->source); })())) && twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 442)))], false);
            echo "
                ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['i'], $context['e'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 444
        echo "            </div>
        </div>

        ";
        // line 447
        if ((isset($context["logger"]) || array_key_exists("logger", $context) ? $context["logger"] : (function () { throw new RuntimeError('Variable "logger" does not exist.', 447, $this->source); })())) {
            // line 448
            echo "        <div class=\\\"tab ";
            echo ((twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["logger"]) || array_key_exists("logger", $context) ? $context["logger"] : (function () { throw new RuntimeError('Variable "logger" does not exist.', 448, $this->source); })()), "log", [], "any", false, false, false, 448))) ? ("disabled") : (""));
            echo "\\\">
            <h3 class=\\\"tab-title\\\">
                Logs
                ";
            // line 451
            if ((((twig_get_attribute($this->env, $this->source, ($context["logger"] ?? null), "counterrors", [], "any", true, true, false, 451) &&  !(null === twig_get_attribute($this->env, $this->source, ($context["logger"] ?? null), "counterrors", [], "any", false, false, false, 451)))) ? (twig_get_attribute($this->env, $this->source, ($context["logger"] ?? null), "counterrors", [], "any", false, false, false, 451)) : (false))) {
                echo "<span class=\\\"badge status-error\\\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["logger"]) || array_key_exists("logger", $context) ? $context["logger"] : (function () { throw new RuntimeError('Variable "logger" does not exist.', 451, $this->source); })()), "counterrors", [], "any", false, false, false, 451), "html", null, true);
                echo "</span>";
            }
            // line 452
            echo "            </h3>

            <div class=\\\"tab-content\\\">
                ";
            // line 455
            if (twig_get_attribute($this->env, $this->source, (isset($context["logger"]) || array_key_exists("logger", $context) ? $context["logger"] : (function () { throw new RuntimeError('Variable "logger" does not exist.', 455, $this->source); })()), "log", [], "any", false, false, false, 455)) {
                // line 456
                echo "                    ";
                echo twig_include($this->env, $context, "@Twig/Exception/log.html.twig", ["log" => twig_get_attribute($this->env, $this->source, (isset($context["logger"]) || array_key_exists("logger", $context) ? $context["logger"] : (function () { throw new RuntimeError('Variable "logger" does not exist.', 456, $this->source); })()), "log", [], "any", false, false, false, 456)], false);
                echo "
                ";
            } else {
                // line 458
                echo "                    <div class=\\\"empty\\\">
                        <p>No log messages</p>
                    </div>
                ";
            }
            // line 462
            echo "            </div>
        </div>
        ";
        }
        // line 465
        echo "
        <div class=\\\"tab\\\">
            <h3 class=\\\"tab-title\\\">
                ";
        // line 468
        if ((twig_length_filter($this->env, (isset($context["exception_as_array"]) || array_key_exists("exception_as_array", $context) ? $context["exception_as_array"] : (function () { throw new RuntimeError('Variable "exception_as_array" does not exist.', 468, $this->source); })())) > 1)) {
            // line 469
            echo "                    Stack Traces <span class=\\\"badge\\\">";
            echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["exception_as_array"]) || array_key_exists("exception_as_array", $context) ? $context["exception_as_array"] : (function () { throw new RuntimeError('Variable "exception_as_array" does not exist.', 469, $this->source); })())), "html", null, true);
            echo "</span>
                ";
        } else {
            // line 471
            echo "                    Stack Trace
                ";
        }
        // line 473
        echo "            </h3>

            <div class=\\\"tab-content\\\">
                ";
        // line 476
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["exception_as_array"]) || array_key_exists("exception_as_array", $context) ? $context["exception_as_array"] : (function () { throw new RuntimeError('Variable "exception_as_array" does not exist.', 476, $this->source); })()));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["e"]) {
            // line 477
            echo "                    ";
            echo twig_include($this->env, $context, "@Twig/Exception/traces_text.html.twig", ["exception" => $context["e"], "index" => twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 477), "num_exceptions" => twig_get_attribute($this->env, $this->source, $context["loop"], "length", [], "any", false, false, false, 477)], false);
            echo "
                ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['e'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 479
        echo "            </div>
        </div>

        ";
        // line 482
        if ( !twig_test_empty((isset($context["currentContent"]) || array_key_exists("currentContent", $context) ? $context["currentContent"] : (function () { throw new RuntimeError('Variable "currentContent" does not exist.', 482, $this->source); })()))) {
            // line 483
            echo "        <div class=\\\"tab\\\">
            <h3 class=\\\"tab-title\\\">Output content</h3>

            <div class=\\\"tab-content\\\">
                ";
            // line 487
            echo twig_escape_filter($this->env, (isset($context["currentContent"]) || array_key_exists("currentContent", $context) ? $context["currentContent"] : (function () { throw new RuntimeError('Variable "currentContent" does not exist.', 487, $this->source); })()), "html", null, true);
            echo "
            </div>
        </div>
        ";
        }
        // line 491
        echo "    </div>
</div>
\", \"@Twig/Exception/exception.html.twig\", \"/var/www/public/DevLaon/vendor/symfony/twig-bundle/Resources/views/Exception/exception.html.twig\");
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "var/cache/dev/twig/fa/fadcba34bd7f176783ce485f2f93cacab3968e62da93de2359b14d7c6e908c58.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  754 => 491,  747 => 487,  741 => 483,  739 => 482,  734 => 479,  717 => 477,  700 => 476,  695 => 473,  691 => 471,  685 => 469,  683 => 468,  678 => 465,  673 => 462,  667 => 458,  661 => 456,  659 => 455,  654 => 452,  648 => 451,  641 => 448,  639 => 447,  634 => 444,  617 => 442,  600 => 441,  595 => 438,  591 => 436,  585 => 434,  583 => 433,  580 => 432,  574 => 431,  560 => 430,  557 => 429,  554 => 428,  551 => 427,  533 => 426,  528 => 425,  525 => 424,  523 => 423,  511 => 414,  506 => 411,  504 => 410,  501 => 409,  489 => 402,  482 => 399,  466 => 397,  459 => 396,  442 => 395,  435 => 391,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

use Twig\\Environment;
use Twig\\Error\\LoaderError;
use Twig\\Error\\RuntimeError;
use Twig\\Extension\\SandboxExtension;
use Twig\\Markup;
use Twig\\Sandbox\\SecurityError;
use Twig\\Sandbox\\SecurityNotAllowedTagError;
use Twig\\Sandbox\\SecurityNotAllowedFilterError;
use Twig\\Sandbox\\SecurityNotAllowedFunctionError;
use Twig\\Source;
use Twig\\Template;

/* @Twig/Exception/exception.html.twig */
class __TwigTemplate_ded2a83c38f68319213395378b48109a4a2c7ef0d9b3838d9326f12c8890e814 extends \\Twig\\Template
{
    private \$source;
    private \$macros = [];

    public function __construct(Environment \$env)
    {
        parent::__construct(\$env);

        \$this->source = \$this->getSourceContext();

        \$this->parent = false;

        \$this->blocks = [
        ];
    }

    protected function doDisplay(array \$context, array \$blocks = [])
    {
        \$macros = \$this->macros;
        \$__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = \$this->extensions[\"Symfony\\\\Bundle\\\\WebProfilerBundle\\\\Twig\\\\WebProfilerExtension\"];
        \$__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter(\$__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \\Twig\\Profiler\\Profile(\$this->getTemplateName(), \"template\", \"@Twig/Exception/exception.html.twig\"));

        \$__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = \$this->extensions[\"Symfony\\\\Bridge\\\\Twig\\\\Extension\\\\ProfilerExtension\"];
        \$__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter(\$__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \\Twig\\Profiler\\Profile(\$this->getTemplateName(), \"template\", \"@Twig/Exception/exception.html.twig\"));

        // line 1
        echo \"<div class=\\\"exception-summary \";
        echo ((twig_test_empty(twig_get_attribute(\$this->env, \$this->source, (isset(\$context[\"exception\"]) || array_key_exists(\"exception\", \$context) ? \$context[\"exception\"] : (function () { throw new RuntimeError('Variable \"exception\" does not exist.', 1, \$this->source); })()), \"message\", [], \"any\", false, false, false, 1))) ? (\"exception-without-message\") : (\"\"));
        echo \"\\\">
    <div class=\\\"exception-metadata\\\">
        <div class=\\\"container\\\">
            <h2 class=\\\"exception-hierarchy\\\">
                \";
        // line 5
        \$context['_parent'] = \$context;
        \$context['_seq'] = twig_ensure_traversable(twig_reverse_filter(\$this->env, twig_get_attribute(\$this->env, \$this->source, (isset(\$context[\"exception\"]) || array_key_exists(\"exception\", \$context) ? \$context[\"exception\"] : (function () { throw new RuntimeError('Variable \"exception\" does not exist.', 5, \$this->source); })()), \"allPrevious\", [], \"any\", false, false, false, 5)));
        \$context['loop'] = [
          'parent' => \$context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array(\$context['_seq']) || (is_object(\$context['_seq']) && \$context['_seq'] instanceof \\Countable)) {
            \$length = count(\$context['_seq']);
            \$context['loop']['revindex0'] = \$length - 1;
            \$context['loop']['revindex'] = \$length;
            \$context['loop']['length'] = \$length;
            \$context['loop']['last'] = 1 === \$length;
        }
        foreach (\$context['_seq'] as \$context[\"_key\"] => \$context[\"previousException\"]) {
            // line 6
            echo \"                    <a href=\\\"#trace-box-\";
            echo twig_escape_filter(\$this->env, (twig_get_attribute(\$this->env, \$this->source, \$context[\"loop\"], \"revindex\", [], \"any\", false, false, false, 6) + 1), \"html\", null, true);
            echo \"\\\">\";
            echo \$this->extensions['Symfony\\Bridge\\Twig\\Extension\\CodeExtension']->abbrClass(twig_get_attribute(\$this->env, \$this->source, \$context[\"previousException\"], \"class\", [], \"any\", false, false, false, 6));
            echo \"</a>
                    <span class=\\\"icon\\\">\";
            // line 7
            echo twig_include(\$this->env, \$context, \"@Twig/images/chevron-right.svg\");
            echo \"</span>
                \";
            ++\$context['loop']['index0'];
            ++\$context['loop']['index'];
            \$context['loop']['first'] = false;
            if (isset(\$context['loop']['length'])) {
                --\$context['loop']['revindex0'];
                --\$context['loop']['revindex'];
                \$context['loop']['last'] = 0 === \$context['loop']['revindex0'];
            }
        }
        \$_parent = \$context['_parent'];
        unset(\$context['_seq'], \$context['_iterated'], \$context['_key'], \$context['previousException'], \$context['_parent'], \$context['loop']);
        \$context = array_intersect_key(\$context, \$_parent) + \$_parent;
        // line 9
        echo \"                <a href=\\\"#trace-box-1\\\">\";
        echo \$this->extensions['Symfony\\Bridge\\Twig\\Extension\\CodeExtension']->abbrClass(twig_get_attribute(\$this->env, \$this->source, (isset(\$context[\"exception\"]) || array_key_exists(\"exception\", \$context) ? \$context[\"exception\"] : (function () { throw new RuntimeError('Variable \"exception\" does not exist.', 9, \$this->source); })()), \"class\", [], \"any\", false, false, false, 9));
        echo \"</a>
            </h2>
            <h2 class=\\\"exception-http\\\">
                HTTP \";
        // line 12
        echo twig_escape_filter(\$this->env, (isset(\$context[\"status_code\"]) || array_key_exists(\"status_code\", \$context) ? \$context[\"status_code\"] : (function () { throw new RuntimeError('Variable \"status_code\" does not exist.', 12, \$this->source); })()), \"html\", null, true);
        echo \" <small>\";
        echo twig_escape_filter(\$this->env, (isset(\$context[\"status_text\"]) || array_key_exists(\"status_text\", \$context) ? \$context[\"status_text\"] : (function () { throw new RuntimeError('Variable \"status_text\" does not exist.', 12, \$this->source); })()), \"html\", null, true);
        echo \"</small>
            </h2>
        </div>
    </div>

    <div class=\\\"exception-message-wrapper\\\">
        <div class=\\\"container\\\">
            <h1 class=\\\"break-long-words exception-message \";
        // line 19
        echo (((twig_length_filter(\$this->env, twig_get_attribute(\$this->env, \$this->source, (isset(\$context[\"exception\"]) || array_key_exists(\"exception\", \$context) ? \$context[\"exception\"] : (function () { throw new RuntimeError('Variable \"exception\" does not exist.', 19, \$this->source); })()), \"message\", [], \"any\", false, false, false, 19)) > 180)) ? (\"long\") : (\"\"));
        echo \"\\\">\";
        // line 20
        echo \$this->extensions['Symfony\\Bridge\\Twig\\Extension\\CodeExtension']->formatFileFromText(nl2br(twig_escape_filter(\$this->env, twig_get_attribute(\$this->env, \$this->source, (isset(\$context[\"exception\"]) || array_key_exists(\"exception\", \$context) ? \$context[\"exception\"] : (function () { throw new RuntimeError('Variable \"exception\" does not exist.', 20, \$this->source); })()), \"message\", [], \"any\", false, false, false, 20), \"html\", null, true)));
        // line 21
        echo \"</h1>

            <div class=\\\"exception-illustration hidden-xs-down\\\">
                \";
        // line 24
        echo twig_include(\$this->env, \$context, \"@Twig/images/symfony-ghost.svg\");
        echo \"
            </div>
        </div>
    </div>
</div>

<div class=\\\"container\\\">
    <div class=\\\"sf-tabs\\\">
        <div class=\\\"tab\\\">
            \";
        // line 33
        \$context[\"exception_as_array\"] = twig_get_attribute(\$this->env, \$this->source, (isset(\$context[\"exception\"]) || array_key_exists(\"exception\", \$context) ? \$context[\"exception\"] : (function () { throw new RuntimeError('Variable \"exception\" does not exist.', 33, \$this->source); })()), \"toarray\", [], \"any\", false, false, false, 33);
        // line 34
        echo \"            \";
        \$context[\"_exceptions_with_user_code\"] = [];
        // line 35
        echo \"            \";
        \$context['_parent'] = \$context;
        \$context['_seq'] = twig_ensure_traversable((isset(\$context[\"exception_as_array\"]) || array_key_exists(\"exception_as_array\", \$context) ? \$context[\"exception_as_array\"] : (function () { throw new RuntimeError('Variable \"exception_as_array\" does not exist.', 35, \$this->source); })()));
        foreach (\$context['_seq'] as \$context[\"i\"] => \$context[\"e\"]) {
            // line 36
            echo \"                \";
            \$context['_parent'] = \$context;
            \$context['_seq'] = twig_ensure_traversable(twig_get_attribute(\$this->env, \$this->source, \$context[\"e\"], \"trace\", [], \"any\", false, false, false, 36));
            \$context['loop'] = [
              'parent' => \$context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array(\$context['_seq']) || (is_object(\$context['_seq']) && \$context['_seq'] instanceof \\Countable)) {
                \$length = count(\$context['_seq']);
                \$context['loop']['revindex0'] = \$length - 1;
                \$context['loop']['revindex'] = \$length;
                \$context['loop']['length'] = \$length;
                \$context['loop']['last'] = 1 === \$length;
            }
            foreach (\$context['_seq'] as \$context[\"_key\"] => \$context[\"trace\"]) {
                // line 37
                echo \"                    \";
                if (((( !twig_test_empty(twig_get_attribute(\$this->env, \$this->source, \$context[\"trace\"], \"file\", [], \"any\", false, false, false, 37)) && !twig_in_filter(\"/vendor/\", twig_get_attribute(\$this->env, \$this->source, \$context[\"trace\"], \"file\", [], \"any\", false, false, false, 37))) && !twig_in_filter(\"/var/cache/\", twig_get_attribute(\$this->env, \$this->source, \$context[\"trace\"], \"file\", [], \"any\", false, false, false, 37))) &&  !twig_get_attribute(\$this->env, \$this->source, \$context[\"loop\"], \"last\", [], \"any\", false, false, false, 37))) {
                    // line 38
                    echo \"                        \";
                    \$context[\"_exceptions_with_user_code\"] = twig_array_merge((isset(\$context[\"_exceptions_with_user_code\"]) || array_key_exists(\"_exceptions_with_user_code\", \$context) ? \$context[\"_exceptions_with_user_code\"] : (function () { throw new RuntimeError('Variable \"_exceptions_with_user_code\" does not exist.', 38, \$this->source); })()), [0 => \$context[\"i\"]]);
                    // line 39
                    echo \"                    \";
                }
                // line 40
                echo \"                \";
                ++\$context['loop']['index0'];
                ++\$context['loop']['index'];
                \$context['loop']['first'] = false;
                if (isset(\$context['loop']['length'])) {
                    --\$context['loop']['revindex0'];
                    --\$context['loop']['revindex'];
                    \$context['loop']['last'] = 0 === \$context['loop']['revindex0'];
                }
            }
            \$_parent = \$context['_parent'];
            unset(\$context['_seq'], \$context['_iterated'], \$context['_key'], \$context['trace'], \$context['_parent'], \$context['loop']);
            \$context = array_intersect_key(\$context, \$_parent) + \$_parent;
            // line 41
            echo \"            \";
        }
        \$_parent = \$context['_parent'];
        unset(\$context['_seq'], \$context['_iterated'], \$context['i'], \$context['e'], \$context['_parent'], \$context['loop']);
        \$context = array_intersect_key(\$context, \$_parent) + \$_parent;
        // line 42
        echo \"            <h3 class=\\\"tab-title\\\">
                \";
        // line 43
        if ((twig_length_filter(\$this->env, (isset(\$context[\"exception_as_array\"]) || array_key_exists(\"exception_as_array\", \$context) ? \$context[\"exception_as_array\"] : (function () { throw new RuntimeError('Variable \"exception_as_array\" does not exist.', 43, \$this->source); })())) > 1)) {
            // line 44
            echo \"                    Exceptions <span class=\\\"badge\\\">\";
            echo twig_escape_filter(\$this->env, twig_length_filter(\$this->env, (isset(\$context[\"exception_as_array\"]) || array_key_exists(\"exception_as_array\", \$context) ? \$context[\"exception_as_array\"] : (function () { throw new RuntimeError('Variable \"exception_as_array\" does not exist.', 44, \$this->source); })())), \"html\", null, true);
            echo \"</span>
                \";
        } else {
            // line 46
            echo \"                    Exception
                \";
        }
        // line 48
        echo \"            </h3>

            <div class=\\\"tab-content\\\">
                \";
        // line 51
        \$context['_parent'] = \$context;
        \$context['_seq'] = twig_ensure_traversable((isset(\$context[\"exception_as_array\"]) || array_key_exists(\"exception_as_array\", \$context) ? \$context[\"exception_as_array\"] : (function () { throw new RuntimeError('Variable \"exception_as_array\" does not exist.', 51, \$this->source); })()));
        \$context['loop'] = [
          'parent' => \$context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array(\$context['_seq']) || (is_object(\$context['_seq']) && \$context['_seq'] instanceof \\Countable)) {
            \$length = count(\$context['_seq']);
            \$context['loop']['revindex0'] = \$length - 1;
            \$context['loop']['revindex'] = \$length;
            \$context['loop']['length'] = \$length;
            \$context['loop']['last'] = 1 === \$length;
        }
        foreach (\$context['_seq'] as \$context[\"i\"] => \$context[\"e\"]) {
            // line 52
            echo \"                    \";
            echo twig_include(\$this->env, \$context, \"@Twig/Exception/traces.html.twig\", [\"exception\" => \$context[\"e\"], \"index\" => twig_get_attribute(\$this->env, \$this->source, \$context[\"loop\"], \"index\", [], \"any\", false, false, false, 52), \"expand\" => (twig_in_filter(\$context[\"i\"], (isset(\$context[\"_exceptions_with_user_code\"]) || array_key_exists(\"_exceptions_with_user_code\", \$context) ? \$context[\"_exceptions_with_user_code\"] : (function () { throw new RuntimeError('Variable \"_exceptions_with_user_code\" does not exist.', 52, \$this->source); })())) || (twig_test_empty((isset(\$context[\"_exceptions_with_user_code\"]) || array_key_exists(\"_exceptions_with_user_code\", \$context) ? \$context[\"_exceptions_with_user_code\"] : (function () { throw new RuntimeError('Variable \"_exceptions_with_user_code\" does not exist.', 52, \$this->source); })())) && twig_get_attribute(\$this->env, \$this->source, \$context[\"loop\"], \"first\", [], \"any\", false, false, false, 52)))], false);
            echo \"
                \";
            ++\$context['loop']['index0'];
            ++\$context['loop']['index'];
            \$context['loop']['first'] = false;
            if (isset(\$context['loop']['length'])) {
                --\$context['loop']['revindex0'];
                --\$context['loop']['revindex'];
                \$context['loop']['last'] = 0 === \$context['loop']['revindex0'];
            }
        }
        \$_parent = \$context['_parent'];
        unset(\$context['_seq'], \$context['_iterated'], \$context['i'], \$context['e'], \$context['_parent'], \$context['loop']);
        \$context = array_intersect_key(\$context, \$_parent) + \$_parent;
        // line 54
        echo \"            </div>
        </div>

        \";
        // line 57
        if ((isset(\$context[\"logger\"]) || array_key_exists(\"logger\", \$context) ? \$context[\"logger\"] : (function () { throw new RuntimeError('Variable \"logger\" does not exist.', 57, \$this->source); })())) {
            // line 58
            echo \"        <div class=\\\"tab \";
            echo ((twig_test_empty(twig_get_attribute(\$this->env, \$this->source, (isset(\$context[\"logger\"]) || array_key_exists(\"logger\", \$context) ? \$context[\"logger\"] : (function () { throw new RuntimeError('Variable \"logger\" does not exist.', 58, \$this->source); })()), \"log\", [], \"any\", false, false, false, 58))) ? (\"disabled\") : (\"\"));
            echo \"\\\">
            <h3 class=\\\"tab-title\\\">
                Logs
                \";
            // line 61
            if ((((twig_get_attribute(\$this->env, \$this->source, (\$context[\"logger\"] ?? null), \"counterrors\", [], \"any\", true, true, false, 61) &&  !(null === twig_get_attribute(\$this->env, \$this->source, (\$context[\"logger\"] ?? null), \"counterrors\", [], \"any\", false, false, false, 61)))) ? (twig_get_attribute(\$this->env, \$this->source, (\$context[\"logger\"] ?? null), \"counterrors\", [], \"any\", false, false, false, 61)) : (false))) {
                echo \"<span class=\\\"badge status-error\\\">\";
                echo twig_escape_filter(\$this->env, twig_get_attribute(\$this->env, \$this->source, (isset(\$context[\"logger\"]) || array_key_exists(\"logger\", \$context) ? \$context[\"logger\"] : (function () { throw new RuntimeError('Variable \"logger\" does not exist.', 61, \$this->source); })()), \"counterrors\", [], \"any\", false, false, false, 61), \"html\", null, true);
                echo \"</span>\";
            }
            // line 62
            echo \"            </h3>

            <div class=\\\"tab-content\\\">
                \";
            // line 65
            if (twig_get_attribute(\$this->env, \$this->source, (isset(\$context[\"logger\"]) || array_key_exists(\"logger\", \$context) ? \$context[\"logger\"] : (function () { throw new RuntimeError('Variable \"logger\" does not exist.', 65, \$this->source); })()), \"log\", [], \"any\", false, false, false, 65)) {
                // line 66
                echo \"                    \";
                echo twig_include(\$this->env, \$context, \"@Twig/Exception/log.html.twig\", [\"log\" => twig_get_attribute(\$this->env, \$this->source, (isset(\$context[\"logger\"]) || array_key_exists(\"logger\", \$context) ? \$context[\"logger\"] : (function () { throw new RuntimeError('Variable \"logger\" does not exist.', 66, \$this->source); })()), \"log\", [], \"any\", false, false, false, 66)], false);
                echo \"
                \";
            } else {
                // line 68
                echo \"                    <div class=\\\"empty\\\">
                        <p>No log messages</p>
                    </div>
                \";
            }
            // line 72
            echo \"            </div>
        </div>
        \";
        }
        // line 75
        echo \"
        <div class=\\\"tab\\\">
            <h3 class=\\\"tab-title\\\">
                \";
        // line 78
        if ((twig_length_filter(\$this->env, (isset(\$context[\"exception_as_array\"]) || array_key_exists(\"exception_as_array\", \$context) ? \$context[\"exception_as_array\"] : (function () { throw new RuntimeError('Variable \"exception_as_array\" does not exist.', 78, \$this->source); })())) > 1)) {
            // line 79
            echo \"                    Stack Traces <span class=\\\"badge\\\">\";
            echo twig_escape_filter(\$this->env, twig_length_filter(\$this->env, (isset(\$context[\"exception_as_array\"]) || array_key_exists(\"exception_as_array\", \$context) ? \$context[\"exception_as_array\"] : (function () { throw new RuntimeError('Variable \"exception_as_array\" does not exist.', 79, \$this->source); })())), \"html\", null, true);
            echo \"</span>
                \";
        } else {
            // line 81
            echo \"                    Stack Trace
                \";
        }
        // line 83
        echo \"            </h3>

            <div class=\\\"tab-content\\\">
                \";
        // line 86
        \$context['_parent'] = \$context;
        \$context['_seq'] = twig_ensure_traversable((isset(\$context[\"exception_as_array\"]) || array_key_exists(\"exception_as_array\", \$context) ? \$context[\"exception_as_array\"] : (function () { throw new RuntimeError('Variable \"exception_as_array\" does not exist.', 86, \$this->source); })()));
        \$context['loop'] = [
          'parent' => \$context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array(\$context['_seq']) || (is_object(\$context['_seq']) && \$context['_seq'] instanceof \\Countable)) {
            \$length = count(\$context['_seq']);
            \$context['loop']['revindex0'] = \$length - 1;
            \$context['loop']['revindex'] = \$length;
            \$context['loop']['length'] = \$length;
            \$context['loop']['last'] = 1 === \$length;
        }
        foreach (\$context['_seq'] as \$context[\"_key\"] => \$context[\"e\"]) {
            // line 87
            echo \"                    \";
            echo twig_include(\$this->env, \$context, \"@Twig/Exception/traces_text.html.twig\", [\"exception\" => \$context[\"e\"], \"index\" => twig_get_attribute(\$this->env, \$this->source, \$context[\"loop\"], \"index\", [], \"any\", false, false, false, 87), \"num_exceptions\" => twig_get_attribute(\$this->env, \$this->source, \$context[\"loop\"], \"length\", [], \"any\", false, false, false, 87)], false);
            echo \"
                \";
            ++\$context['loop']['index0'];
            ++\$context['loop']['index'];
            \$context['loop']['first'] = false;
            if (isset(\$context['loop']['length'])) {
                --\$context['loop']['revindex0'];
                --\$context['loop']['revindex'];
                \$context['loop']['last'] = 0 === \$context['loop']['revindex0'];
            }
        }
        \$_parent = \$context['_parent'];
        unset(\$context['_seq'], \$context['_iterated'], \$context['_key'], \$context['e'], \$context['_parent'], \$context['loop']);
        \$context = array_intersect_key(\$context, \$_parent) + \$_parent;
        // line 89
        echo \"            </div>
        </div>

        \";
        // line 92
        if ( !twig_test_empty((isset(\$context[\"currentContent\"]) || array_key_exists(\"currentContent\", \$context) ? \$context[\"currentContent\"] : (function () { throw new RuntimeError('Variable \"currentContent\" does not exist.', 92, \$this->source); })()))) {
            // line 93
            echo \"        <div class=\\\"tab\\\">
            <h3 class=\\\"tab-title\\\">Output content</h3>

            <div class=\\\"tab-content\\\">
                \";
            // line 97
            echo twig_escape_filter(\$this->env, (isset(\$context[\"currentContent\"]) || array_key_exists(\"currentContent\", \$context) ? \$context[\"currentContent\"] : (function () { throw new RuntimeError('Variable \"currentContent\" does not exist.', 97, \$this->source); })()), \"html\", null, true);
            echo \"
            </div>
        </div>
        \";
        }
        // line 101
        echo \"    </div>
</div>
\";
        
        \$__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave(\$__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        \$__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave(\$__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return \"@Twig/Exception/exception.html.twig\";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  363 => 101,  356 => 97,  350 => 93,  348 => 92,  343 => 89,  326 => 87,  309 => 86,  304 => 83,  300 => 81,  294 => 79,  292 => 78,  287 => 75,  282 => 72,  276 => 68,  270 => 66,  268 => 65,  263 => 62,  257 => 61,  250 => 58,  248 => 57,  243 => 54,  226 => 52,  209 => 51,  204 => 48,  200 => 46,  194 => 44,  192 => 43,  189 => 42,  183 => 41,  169 => 40,  166 => 39,  163 => 38,  160 => 37,  142 => 36,  137 => 35,  134 => 34,  132 => 33,  120 => 24,  115 => 21,  113 => 20,  110 => 19,  98 => 12,  91 => 9,  75 => 7,  68 => 6,  51 => 5,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source(\"<div class=\\\"exception-summary {{ exception.message is empty ? 'exception-without-message' }}\\\">
    <div class=\\\"exception-metadata\\\">
        <div class=\\\"container\\\">
            <h2 class=\\\"exception-hierarchy\\\">
                {% for previousException in exception.allPrevious|reverse %}
                    <a href=\\\"#trace-box-{{ loop.revindex + 1 }}\\\">{{ previousException.class|abbr_class }}</a>
                    <span class=\\\"icon\\\">{{ include('@Twig/images/chevron-right.svg') }}</span>
                {% endfor %}
                <a href=\\\"#trace-box-1\\\">{{ exception.class|abbr_class }}</a>
            </h2>
            <h2 class=\\\"exception-http\\\">
                HTTP {{ status_code }} <small>{{ status_text }}</small>
            </h2>
        </div>
    </div>

    <div class=\\\"exception-message-wrapper\\\">
        <div class=\\\"container\\\">
            <h1 class=\\\"break-long-words exception-message {{ exception.message|length > 180 ? 'long' }}\\\">
                {{- exception.message|nl2br|format_file_from_text -}}
            </h1>

            <div class=\\\"exception-illustration hidden-xs-down\\\">
                {{ include('@Twig/images/symfony-ghost.svg') }}
            </div>
        </div>
    </div>
</div>

<div class=\\\"container\\\">
    <div class=\\\"sf-tabs\\\">
        <div class=\\\"tab\\\">
            {% set exception_as_array = exception.toarray %}
            {% set _exceptions_with_user_code = [] %}
            {% for i, e in exception_as_array %}
                {% for trace in e.trace %}
                    {% if (trace.file is not empty) and ('/vendor/' not in trace.file) and ('/var/cache/' not in trace.file) and not loop.last %}
                        {% set _exceptions_with_user_code = _exceptions_with_user_code|merge([i]) %}
                    {% endif %}
                {% endfor %}
            {% endfor %}
            <h3 class=\\\"tab-title\\\">
                {% if exception_as_array|length > 1 %}
                    Exceptions <span class=\\\"badge\\\">{{ exception_as_array|length }}</span>
                {% else %}
                    Exception
                {% endif %}
            </h3>

            <div class=\\\"tab-content\\\">
                {% for i, e in exception_as_array %}
                    {{ include('@Twig/Exception/traces.html.twig', { exception: e, index: loop.index, expand: i in _exceptions_with_user_code or (_exceptions_with_user_code is empty and loop.first) }, with_context = false) }}
                {% endfor %}
            </div>
        </div>

        {% if logger %}
        <div class=\\\"tab {{ logger.log is empty ? 'disabled' }}\\\">
            <h3 class=\\\"tab-title\\\">
                Logs
                {% if logger.counterrors ?? false %}<span class=\\\"badge status-error\\\">{{ logger.counterrors }}</span>{% endif %}
            </h3>

            <div class=\\\"tab-content\\\">
                {% if logger.log %}
                    {{ include('@Twig/Exception/log.html.twig', { log: logger.log }, with_context = false)  }}
                {% else %}
                    <div class=\\\"empty\\\">
                        <p>No log messages</p>
                    </div>
                {% endif %}
            </div>
        </div>
        {% endif %}

        <div class=\\\"tab\\\">
            <h3 class=\\\"tab-title\\\">
                {% if exception_as_array|length > 1 %}
                    Stack Traces <span class=\\\"badge\\\">{{ exception_as_array|length }}</span>
                {% else %}
                    Stack Trace
                {% endif %}
            </h3>

            <div class=\\\"tab-content\\\">
                {% for e in exception_as_array %}
                    {{ include('@Twig/Exception/traces_text.html.twig', { exception: e, index: loop.index, num_exceptions: loop.length }, with_context = false) }}
                {% endfor %}
            </div>
        </div>

        {% if currentContent is not empty %}
        <div class=\\\"tab\\\">
            <h3 class=\\\"tab-title\\\">Output content</h3>

            <div class=\\\"tab-content\\\">
                {{ currentContent }}
            </div>
        </div>
        {% endif %}
    </div>
</div>
\", \"@Twig/Exception/exception.html.twig\", \"/var/www/public/DevLaon/vendor/symfony/twig-bundle/Resources/views/Exception/exception.html.twig\");
    }
}
", "var/cache/dev/twig/fa/fadcba34bd7f176783ce485f2f93cacab3968e62da93de2359b14d7c6e908c58.php", "/var/www/public/DevLaon/templates/var/cache/dev/twig/fa/fadcba34bd7f176783ce485f2f93cacab3968e62da93de2359b14d7c6e908c58.php");
    }
}
