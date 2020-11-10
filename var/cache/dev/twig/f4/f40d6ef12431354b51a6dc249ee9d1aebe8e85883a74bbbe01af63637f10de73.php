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

/* vendor/symfony/yaml/Tests/Fixtures/sfMergeKey.yml */
class __TwigTemplate_8a8a663ede3d78ffc7a1cdfdf494b68541d45698b08129ee420f48aca474c80a extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/yaml/Tests/Fixtures/sfMergeKey.yml"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/yaml/Tests/Fixtures/sfMergeKey.yml"));

        // line 1
        echo "--- %YAML:1.0
test: Simple In Place Substitution
brief: >
    If you want to reuse an entire alias, only overwriting what is different
    you can use a << in place substitution. This is not part of the official
    YAML spec, but a widely implemented extension. See the following URL for
    details: http://yaml.org/type/merge.html
yaml: |
    foo: &foo
        a: Steve
        b: Clark
        c: Brian
        e: notnull
    bar:
        a: before
        d: other
        e: ~
        <<: *foo
        b: new
        x: Oren
        c:
            foo: bar
            bar: foo
    bar_inline: {a: before, d: other, <<: *foo, b: new, x: Oren, c: { foo: bar, bar: foo}}
    foo2: &foo2
        a: Ballmer
    ding: &dong [ fi, fei, fo, fam]
    check:
        <<:
            - *foo
            - *dong
        isit: tested
    head:
        <<: [ *foo , *dong , *foo2 ]
    taz: &taz
        a: Steve
        w:
            p: 1234
    nested:
        <<: *taz
        d: Doug
        w: &nestedref
            p: 12345
        z:
            <<: *nestedref
    head_inline: &head_inline { <<: [ *foo , *dong , *foo2 ] }
    recursive_inline: { <<: *head_inline, c: { <<: *foo2 } }
php: |
    [
        'foo' => ['a' => 'Steve', 'b' => 'Clark', 'c' => 'Brian', 'e' => 'notnull'],
        'bar' => ['a' => 'before', 'd' => 'other', 'e' => null, 'b' => 'new', 'c' => ['foo' => 'bar', 'bar' => 'foo'], 'x' => 'Oren'],
        'bar_inline' => ['a' => 'before', 'd' => 'other', 'b' => 'new', 'c' => ['foo' => 'bar', 'bar' => 'foo'], 'e' => 'notnull', 'x' => 'Oren'],
        'foo2' => ['a' => 'Ballmer'],
        'ding' => ['fi', 'fei', 'fo', 'fam'],
        'check' => ['a' => 'Steve', 'b' => 'Clark', 'c' => 'Brian', 'e' => 'notnull', 'fi', 'fei', 'fo', 'fam', 'isit' => 'tested'],
        'head' => ['a' => 'Steve', 'b' => 'Clark', 'c' => 'Brian', 'e' => 'notnull', 'fi', 'fei', 'fo', 'fam'],
        'taz' => ['a' => 'Steve', 'w' => ['p' => 1234]],
        'nested' => ['a' => 'Steve', 'w' => ['p' => 12345], 'd' => 'Doug', 'z' => ['p' => 12345]],
        'head_inline' => ['a' => 'Steve', 'b' => 'Clark', 'c' => 'Brian', 'e' => 'notnull', 'fi', 'fei', 'fo', 'fam'],
        'recursive_inline' => ['a' => 'Steve', 'b' => 'Clark', 'c' => ['a' => 'Ballmer'], 'e' => 'notnull', 'fi', 'fei', 'fo', 'fam'],
    ]
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/yaml/Tests/Fixtures/sfMergeKey.yml";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("--- %YAML:1.0
test: Simple In Place Substitution
brief: >
    If you want to reuse an entire alias, only overwriting what is different
    you can use a << in place substitution. This is not part of the official
    YAML spec, but a widely implemented extension. See the following URL for
    details: http://yaml.org/type/merge.html
yaml: |
    foo: &foo
        a: Steve
        b: Clark
        c: Brian
        e: notnull
    bar:
        a: before
        d: other
        e: ~
        <<: *foo
        b: new
        x: Oren
        c:
            foo: bar
            bar: foo
    bar_inline: {a: before, d: other, <<: *foo, b: new, x: Oren, c: { foo: bar, bar: foo}}
    foo2: &foo2
        a: Ballmer
    ding: &dong [ fi, fei, fo, fam]
    check:
        <<:
            - *foo
            - *dong
        isit: tested
    head:
        <<: [ *foo , *dong , *foo2 ]
    taz: &taz
        a: Steve
        w:
            p: 1234
    nested:
        <<: *taz
        d: Doug
        w: &nestedref
            p: 12345
        z:
            <<: *nestedref
    head_inline: &head_inline { <<: [ *foo , *dong , *foo2 ] }
    recursive_inline: { <<: *head_inline, c: { <<: *foo2 } }
php: |
    [
        'foo' => ['a' => 'Steve', 'b' => 'Clark', 'c' => 'Brian', 'e' => 'notnull'],
        'bar' => ['a' => 'before', 'd' => 'other', 'e' => null, 'b' => 'new', 'c' => ['foo' => 'bar', 'bar' => 'foo'], 'x' => 'Oren'],
        'bar_inline' => ['a' => 'before', 'd' => 'other', 'b' => 'new', 'c' => ['foo' => 'bar', 'bar' => 'foo'], 'e' => 'notnull', 'x' => 'Oren'],
        'foo2' => ['a' => 'Ballmer'],
        'ding' => ['fi', 'fei', 'fo', 'fam'],
        'check' => ['a' => 'Steve', 'b' => 'Clark', 'c' => 'Brian', 'e' => 'notnull', 'fi', 'fei', 'fo', 'fam', 'isit' => 'tested'],
        'head' => ['a' => 'Steve', 'b' => 'Clark', 'c' => 'Brian', 'e' => 'notnull', 'fi', 'fei', 'fo', 'fam'],
        'taz' => ['a' => 'Steve', 'w' => ['p' => 1234]],
        'nested' => ['a' => 'Steve', 'w' => ['p' => 12345], 'd' => 'Doug', 'z' => ['p' => 12345]],
        'head_inline' => ['a' => 'Steve', 'b' => 'Clark', 'c' => 'Brian', 'e' => 'notnull', 'fi', 'fei', 'fo', 'fam'],
        'recursive_inline' => ['a' => 'Steve', 'b' => 'Clark', 'c' => ['a' => 'Ballmer'], 'e' => 'notnull', 'fi', 'fei', 'fo', 'fam'],
    ]
", "vendor/symfony/yaml/Tests/Fixtures/sfMergeKey.yml", "/var/www/public/DevLaon/templates/vendor/symfony/yaml/Tests/Fixtures/sfMergeKey.yml");
    }
}
