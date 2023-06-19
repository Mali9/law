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

/* themes/custom/law_theme/templates/views-view-unformatted.html.twig */
class __TwigTemplate_609cbf744692ac9136ac9f9dfdae4fa9 extends \Twig\Template
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
        // line 18
        echo "<style>
img {
    vertical-align: middle;
    border-style: none;
    width: -webkit-fill-available;
    
}
.views-element-container {
    position: relative;
    overflow: hidden;
    text-align: center;
}
</style>
";
        // line 31
        if (($context["title"] ?? null)) {
            // line 32
            echo "  <h3>";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title"] ?? null), 32, $this->source), "html", null, true);
            echo "</h3>
";
        }
        // line 33
        echo ".
<div class=\"row\" style=\"text-align:center;\">

";
        // line 36
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["rows"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
            // line 37
            echo "  <div class=\"col-3\" style=\"width:400px;text-align:center\">
    <div class=\"card\">

    ";
            // line 40
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["row"], "content", [], "any", false, false, true, 40), 40, $this->source), "html", null, true);
            echo "
    </div></div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        echo "</div>";
    }

    public function getTemplateName()
    {
        return "themes/custom/law_theme/templates/views-view-unformatted.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 43,  76 => 40,  71 => 37,  67 => 36,  62 => 33,  56 => 32,  54 => 31,  39 => 18,);
    }

    public function getSourceContext()
    {
        return new Source("{#
/**
 * @file
 * Theme override to display a view of unformatted rows.
 *
 * Available variables:
 * - title: The title of this group of rows. May be empty.
 * - rows: A list of the view's row items.
 *   - attributes: The row's HTML attributes.
 *   - content: The row's content.
 * - view: The view object.
 * - default_row_class: A flag indicating whether default classes should be
 *   used on rows.
 *
 * @see template_preprocess_views_view_unformatted()
 */
#}
<style>
img {
    vertical-align: middle;
    border-style: none;
    width: -webkit-fill-available;
    
}
.views-element-container {
    position: relative;
    overflow: hidden;
    text-align: center;
}
</style>
{% if title %}
  <h3>{{ title }}</h3>
{% endif %}.
<div class=\"row\" style=\"text-align:center;\">

{% for row in rows %}
  <div class=\"col-3\" style=\"width:400px;text-align:center\">
    <div class=\"card\">

    {{ row.content }}
    </div></div>
{% endfor %}
</div>", "themes/custom/law_theme/templates/views-view-unformatted.html.twig", "/var/www/test.com/themes/custom/law_theme/templates/views-view-unformatted.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 31, "for" => 36);
        static $filters = array("escape" => 32);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if', 'for'],
                ['escape'],
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
