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

/* modules/contrib/slick/templates/slick-wrapper.html.twig */
class __TwigTemplate_966801ddb6ddb2c1b567b446c0330b109651a244e49a14e1cdfff6344210d609 extends \Twig\Template
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
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 16
        $context["classes"] = [0 => "slick-wrapper", 1 => ((twig_get_attribute($this->env, $this->source,         // line 18
($context["settings"] ?? null), "nav", [], "any", false, false, true, 18)) ? ("slick-wrapper--asnavfor") : ("")), 2 => ((twig_get_attribute($this->env, $this->source,         // line 19
($context["settings"] ?? null), "skin", [], "any", false, false, true, 19)) ? (("slick-wrapper--" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "skin", [], "any", false, false, true, 19), 19, $this->source)))) : ("")), 3 => ((twig_get_attribute($this->env, $this->source,         // line 20
($context["settings"] ?? null), "skin_thumbnail", [], "any", false, false, true, 20)) ? (("slick-wrapper--" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "skin_thumbnail", [], "any", false, false, true, 20), 20, $this->source)))) : ("")), 4 => ((twig_get_attribute($this->env, $this->source,         // line 21
($context["settings"] ?? null), "vertical", [], "any", false, false, true, 21)) ? ("slick-wrapper--v") : ("")), 5 => ((twig_get_attribute($this->env, $this->source,         // line 22
($context["settings"] ?? null), "vertical_tn", [], "any", false, false, true, 22)) ? ("slick-wrapper--v-tn") : ("")), 6 => ((twig_get_attribute($this->env, $this->source,         // line 23
($context["settings"] ?? null), "thumbnail_position", [], "any", false, false, true, 23)) ? (("slick-wrapper--tn-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "thumbnail_position", [], "any", false, false, true, 23), 23, $this->source)))) : ("")), 7 => ((twig_in_filter("over", twig_get_attribute($this->env, $this->source,         // line 24
($context["settings"] ?? null), "thumbnail_position", [], "any", false, false, true, 24))) ? ("slick-wrapper--tn-overlay") : ("")), 8 => ((twig_in_filter("over", twig_get_attribute($this->env, $this->source,         // line 25
($context["settings"] ?? null), "thumbnail_position", [], "any", false, false, true, 25))) ? (("slick-wrapper--tn-" . twig_replace_filter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "thumbnail_position", [], "any", false, false, true, 25), 25, $this->source), ["over-" => ""]))) : (""))];
        // line 28
        ob_start();
        // line 29
        echo "  ";
        if (twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "nav", [], "any", false, false, true, 29)) {
            // line 30
            echo "    <div";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->withoutFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method", false, false, true, 30), 30, $this->source), "id"), "html", null, true);
            echo ">
      ";
            // line 31
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["items"] ?? null), 31, $this->source), "html", null, true);
            echo "
    </div>
  ";
        } else {
            // line 34
            echo "    ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["items"] ?? null), 34, $this->source), "html", null, true);
            echo "
  ";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    public function getTemplateName()
    {
        return "modules/contrib/slick/templates/slick-wrapper.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 34,  59 => 31,  54 => 30,  51 => 29,  49 => 28,  47 => 25,  46 => 24,  45 => 23,  44 => 22,  43 => 21,  42 => 20,  41 => 19,  40 => 18,  39 => 16,);
    }

    public function getSourceContext()
    {
        return new Source("{#
/**
 * @file
 * Default theme implementation for a slick wrapper.
 *
 * Available variables:
 * - items: A list of items containing main and thumbnail of slick.html.twig
 *   which can be re-position using option Thumbnail position.
 * - attributes: HTML attributes to be applied to the list.
 * - settings: An array containing the given settings.
 *
 * @ingroup themeable
 */
#}
{%
  set classes = [
    'slick-wrapper',
    settings.nav ? 'slick-wrapper--asnavfor',
    settings.skin ? 'slick-wrapper--' ~ settings.skin|clean_class,
    settings.skin_thumbnail ? 'slick-wrapper--' ~ settings.skin_thumbnail|clean_class,
    settings.vertical ? 'slick-wrapper--v',
    settings.vertical_tn ? 'slick-wrapper--v-tn',
    settings.thumbnail_position ? 'slick-wrapper--tn-' ~ settings.thumbnail_position|clean_class,
    'over' in settings.thumbnail_position ? 'slick-wrapper--tn-overlay',
    'over' in settings.thumbnail_position ? 'slick-wrapper--tn-' ~ settings.thumbnail_position|replace({ 'over-' : '' })
  ]
%}
{% spaceless %}
  {% if settings.nav %}
    <div{{ attributes.addClass(classes)|without('id') }}>
      {{ items }}
    </div>
  {% else %}
    {{ items }}
  {% endif %}
{% endspaceless %}
", "modules/contrib/slick/templates/slick-wrapper.html.twig", "/var/www/web/modules/contrib/slick/templates/slick-wrapper.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 16, "spaceless" => 28, "if" => 29);
        static $filters = array("clean_class" => 19, "replace" => 25, "escape" => 30, "without" => 30);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'spaceless', 'if'],
                ['clean_class', 'replace', 'escape', 'without'],
                []
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }
}
