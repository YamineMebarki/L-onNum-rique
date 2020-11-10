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

/* vendor/symfony/yaml/Tests/Fixtures/YtsFoldedScalars.yml */
class __TwigTemplate_feb454ac489bf2d18011aabdb5eba9a90cfc2640fca72b05929d1bd087d7834c extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/yaml/Tests/Fixtures/YtsFoldedScalars.yml"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/yaml/Tests/Fixtures/YtsFoldedScalars.yml"));

        // line 1
        echo "--- %YAML:1.0
test: Single ending newline
brief: >
    A pipe character, followed by an indented
    block of text is treated as a literal
    block, in which newlines are preserved
    throughout the block, including the final
    newline.
yaml: |
    ---
    this: |
        Foo
        Bar
php: |
    ['this' => \"Foo\\nBar\\n\"]
---
test: The '+' indicator
brief: >
    The '+' indicator says to keep newlines at the end of text
    blocks.
yaml: |
    normal: |
      extra new lines not kept

    preserving: |+
      extra new lines are kept


    dummy: value
php: |
    [
        'normal' => \"extra new lines not kept\\n\",
        'preserving' => \"extra new lines are kept\\n\\n\\n\",
        'dummy' => 'value'
    ]
---
test: Three trailing newlines in literals
brief: >
    To give you more control over how space
    is preserved in text blocks, YAML has
    the keep '+' and chomp '-' indicators.
    The keep indicator will preserve all
    ending newlines, while the chomp indicator
    will strip all ending newlines.
yaml: |
    clipped: |
        This has one newline.



    same as \"clipped\" above: \"This has one newline.\\n\"

    stripped: |-
        This has no newline.



    same as \"stripped\" above: \"This has no newline.\"

    kept: |+
        This has four newlines.



    same as \"kept\" above: \"This has four newlines.\\n\\n\\n\\n\"
php: |
    [
      'clipped' => \"This has one newline.\\n\",
      'same as \"clipped\" above' => \"This has one newline.\\n\",
      'stripped' => 'This has no newline.',
      'same as \"stripped\" above' => 'This has no newline.',
      'kept' => \"This has four newlines.\\n\\n\\n\\n\",
      'same as \"kept\" above' => \"This has four newlines.\\n\\n\\n\\n\"
    ]
---
test: Extra trailing newlines with spaces
todo: true
brief: >
    Normally, only a single newline is kept
    from the end of a literal block, unless the
    keep '+' character is used in combination
    with the pipe.  The following example
    will preserve all ending whitespace
    since the last line of both literal blocks
    contains spaces which extend past the indentation
    level.
yaml: |
    ---
    this: |
        Foo


    kept: |+
        Foo


php: |
    ['this' => \"Foo\\n\\n  \\n\",
      'kept' => \"Foo\\n\\n  \\n\"]

---
test: Folded Block in a Sequence
brief: >
    A greater-then character, followed by an indented
    block of text is treated as a folded block, in
    which lines of text separated by a single newline
    are concatenated as a single line.
yaml: |
    ---
    - apple
    - banana
    - >
        can't you see
        the beauty of yaml?
        hmm
    - dog
php: |
    [
        'apple',
        'banana',
        \"can't you see the beauty of yaml? hmm\\n\",
        'dog'
    ]
---
test: Folded Block as a Mapping Value
brief: >
    Both literal and folded blocks can be
    used in collections, as values in a
    sequence or a mapping.
yaml: |
    ---
    quote: >
        Mark McGwire's
        year was crippled
        by a knee injury.
    source: espn
php: |
    [
        'quote' => \"Mark McGwire's year was crippled by a knee injury.\\n\",
        'source' => 'espn'
    ]
---
test: Three trailing newlines in folded blocks
brief: >
    The keep and chomp indicators can also
    be applied to folded blocks.
yaml: |
    clipped: >
        This has one newline.



    same as \"clipped\" above: \"This has one newline.\\n\"

    stripped: >-
        This has no newline.



    same as \"stripped\" above: \"This has no newline.\"

    kept: >+
        This has four newlines.



    same as \"kept\" above: \"This has four newlines.\\n\\n\\n\\n\"
php: |
    [
      'clipped' => \"This has one newline.\\n\",
      'same as \"clipped\" above' => \"This has one newline.\\n\",
      'stripped' => 'This has no newline.',
      'same as \"stripped\" above' => 'This has no newline.',
      'kept' => \"This has four newlines.\\n\\n\\n\\n\",
      'same as \"kept\" above' => \"This has four newlines.\\n\\n\\n\\n\"
    ]
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/yaml/Tests/Fixtures/YtsFoldedScalars.yml";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("--- %YAML:1.0
test: Single ending newline
brief: >
    A pipe character, followed by an indented
    block of text is treated as a literal
    block, in which newlines are preserved
    throughout the block, including the final
    newline.
yaml: |
    ---
    this: |
        Foo
        Bar
php: |
    ['this' => \"Foo\\nBar\\n\"]
---
test: The '+' indicator
brief: >
    The '+' indicator says to keep newlines at the end of text
    blocks.
yaml: |
    normal: |
      extra new lines not kept

    preserving: |+
      extra new lines are kept


    dummy: value
php: |
    [
        'normal' => \"extra new lines not kept\\n\",
        'preserving' => \"extra new lines are kept\\n\\n\\n\",
        'dummy' => 'value'
    ]
---
test: Three trailing newlines in literals
brief: >
    To give you more control over how space
    is preserved in text blocks, YAML has
    the keep '+' and chomp '-' indicators.
    The keep indicator will preserve all
    ending newlines, while the chomp indicator
    will strip all ending newlines.
yaml: |
    clipped: |
        This has one newline.



    same as \"clipped\" above: \"This has one newline.\\n\"

    stripped: |-
        This has no newline.



    same as \"stripped\" above: \"This has no newline.\"

    kept: |+
        This has four newlines.



    same as \"kept\" above: \"This has four newlines.\\n\\n\\n\\n\"
php: |
    [
      'clipped' => \"This has one newline.\\n\",
      'same as \"clipped\" above' => \"This has one newline.\\n\",
      'stripped' => 'This has no newline.',
      'same as \"stripped\" above' => 'This has no newline.',
      'kept' => \"This has four newlines.\\n\\n\\n\\n\",
      'same as \"kept\" above' => \"This has four newlines.\\n\\n\\n\\n\"
    ]
---
test: Extra trailing newlines with spaces
todo: true
brief: >
    Normally, only a single newline is kept
    from the end of a literal block, unless the
    keep '+' character is used in combination
    with the pipe.  The following example
    will preserve all ending whitespace
    since the last line of both literal blocks
    contains spaces which extend past the indentation
    level.
yaml: |
    ---
    this: |
        Foo


    kept: |+
        Foo


php: |
    ['this' => \"Foo\\n\\n  \\n\",
      'kept' => \"Foo\\n\\n  \\n\"]

---
test: Folded Block in a Sequence
brief: >
    A greater-then character, followed by an indented
    block of text is treated as a folded block, in
    which lines of text separated by a single newline
    are concatenated as a single line.
yaml: |
    ---
    - apple
    - banana
    - >
        can't you see
        the beauty of yaml?
        hmm
    - dog
php: |
    [
        'apple',
        'banana',
        \"can't you see the beauty of yaml? hmm\\n\",
        'dog'
    ]
---
test: Folded Block as a Mapping Value
brief: >
    Both literal and folded blocks can be
    used in collections, as values in a
    sequence or a mapping.
yaml: |
    ---
    quote: >
        Mark McGwire's
        year was crippled
        by a knee injury.
    source: espn
php: |
    [
        'quote' => \"Mark McGwire's year was crippled by a knee injury.\\n\",
        'source' => 'espn'
    ]
---
test: Three trailing newlines in folded blocks
brief: >
    The keep and chomp indicators can also
    be applied to folded blocks.
yaml: |
    clipped: >
        This has one newline.



    same as \"clipped\" above: \"This has one newline.\\n\"

    stripped: >-
        This has no newline.



    same as \"stripped\" above: \"This has no newline.\"

    kept: >+
        This has four newlines.



    same as \"kept\" above: \"This has four newlines.\\n\\n\\n\\n\"
php: |
    [
      'clipped' => \"This has one newline.\\n\",
      'same as \"clipped\" above' => \"This has one newline.\\n\",
      'stripped' => 'This has no newline.',
      'same as \"stripped\" above' => 'This has no newline.',
      'kept' => \"This has four newlines.\\n\\n\\n\\n\",
      'same as \"kept\" above' => \"This has four newlines.\\n\\n\\n\\n\"
    ]
", "vendor/symfony/yaml/Tests/Fixtures/YtsFoldedScalars.yml", "/var/www/public/DevLaon/templates/vendor/symfony/yaml/Tests/Fixtures/YtsFoldedScalars.yml");
    }
}
