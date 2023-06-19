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

/* themes/custom/law_theme/templates/layout/html.html.twig */
class __TwigTemplate_d5342ff7cc1c63f802aa2674579ad049 extends \Twig\Template
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
        // line 28
        $context["body_classes"] = [0 => ((        // line 29
($context["logged_in"] ?? null)) ? ("user-logged-in") : ("user-logged-out")), 1 => ((        // line 30
($context["is_front"] ?? null)) ? ("path-frontpage") : ("path-not-frontpage")), 2 => ((        // line 31
($context["root_path"] ?? null)) ? (("path-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(($context["root_path"] ?? null), 31, $this->source)))) : ("")), 3 => ((twig_get_attribute($this->env, $this->source,         // line 32
($context["path_info"] ?? null), "args", [], "any", false, false, true, 32)) ? (("path-" . $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["path_info"] ?? null), "args", [], "any", false, false, true, 32), 32, $this->source))) : ("")), 4 => ((twig_get_attribute($this->env, $this->source,         // line 33
($context["path_info"] ?? null), "query", [], "any", false, false, true, 33)) ? (("path-query-" . $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["path_info"] ?? null), "query", [], "any", false, false, true, 33), 33, $this->source))) : ("")), 5 => ((twig_get_attribute($this->env, $this->source,         // line 34
($context["head_title"] ?? null), "title", [], "any", false, false, true, 34)) ? (("path-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["head_title"] ?? null), "title", [], "any", false, false, true, 34), 34, $this->source)))) : ("")), 6 => ((        // line 35
($context["node_type"] ?? null)) ? (("page-node-type--" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(($context["node_type"] ?? null), 35, $this->source)))) : ("")), 7 => ((twig_get_attribute($this->env, $this->source,         // line 36
($context["head_title_array"] ?? null), "name", [], "any", false, false, true, 36)) ? (("site-name--" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["head_title_array"] ?? null), "name", [], "any", false, false, true, 36), 36, $this->source)))) : ("")), 8 => ((twig_get_attribute($this->env, $this->source,         // line 37
($context["theme"] ?? null), "name", [], "any", false, false, true, 37)) ? (("theme-name--" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "name", [], "any", false, false, true, 37), 37, $this->source)))) : ("")), 9 => ((        // line 38
($context["db_offline"] ?? null)) ? ("db-offline") : (""))];
        // line 41
        echo "<!DOCTYPE html>
<html";
        // line 42
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["html_attributes"] ?? null), 42, $this->source), "html", null, true);
        echo ">
  <head>
    <head-placeholder token=\"";
        // line 44
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(($context["placeholder_token"] ?? null), 44, $this->source));
        echo "\">
    <title>";
        // line 45
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->safeJoin($this->env, $this->sandbox->ensureToStringAllowed(($context["head_title"] ?? null), 45, $this->source), " | "));
        echo "</title>
    <css-placeholder token=\"";
        // line 46
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(($context["placeholder_token"] ?? null), 46, $this->source));
        echo "\">
    <js-placeholder token=\"";
        // line 47
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(($context["placeholder_token"] ?? null), 47, $this->source));
        echo "\">
  </head>
  <body";
        // line 49
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => ($context["body_classes"] ?? null)], "method", false, false, true, 49), 49, $this->source), "html", null, true);
        echo ">
    <a href=\"#main-content\" class=\"visually-hidden focusable skip-link\">
      ";
        // line 51
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Skip to main content"));
        echo "
    </a>
    ";
        // line 53
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["page_top"] ?? null), 53, $this->source), "html", null, true);
        echo "
    ";
        // line 54
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["page"] ?? null), 54, $this->source), "html", null, true);
        echo "
    ";
        // line 55
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["page_bottom"] ?? null), 55, $this->source), "html", null, true);
        echo "
    <js-bottom-placeholder token=\"";
        // line 56
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(($context["placeholder_token"] ?? null), 56, $this->source));
        echo "\">
  </body>
</html>

  <style>
    ";
        // line 61
        if (($context["default_search_img_url"] ?? null)) {
            // line 62
            echo "      .views-row .card .image-container{
        background-image: url(";
            // line 63
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["default_search_img_url"] ?? null), 63, $this->source), "html", null, true);
            echo ");
      }
    ";
        }
        // line 66
        echo "    ";
        if (($context["default_collection_img_url"] ?? null)) {
            // line 67
            echo "      .dar-search-collection-form .views-row .card .image-container .views-element-container{
        background-image: url(";
            // line 68
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["default_collection_img_url"] ?? null), 68, $this->source), "html", null, true);
            echo ");
      }
    ";
        }
        // line 71
        echo "
  </style>

";
    }

    public function getTemplateName()
    {
        return "themes/custom/law_theme/templates/layout/html.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  129 => 71,  123 => 68,  120 => 67,  117 => 66,  111 => 63,  108 => 62,  106 => 61,  98 => 56,  94 => 55,  90 => 54,  86 => 53,  81 => 51,  76 => 49,  71 => 47,  67 => 46,  63 => 45,  59 => 44,  54 => 42,  51 => 41,  49 => 38,  48 => 37,  47 => 36,  46 => 35,  45 => 34,  44 => 33,  43 => 32,  42 => 31,  41 => 30,  40 => 29,  39 => 28,);
    }

    public function getSourceContext()
    {
        return new Source("{#
/**
 * @file
 * Theme override for the basic structure of a single Drupal page.
 *
 * Variables:
 * - logged_in: A flag indicating if user is logged in.
 * - root_path: The root path of the current page (e.g., node, admin, user).
 * - node_type: The content type for the current node, if the page is a node.
 * - head_title: List of text elements that make up the head_title variable.
 *   May contain or more of the following:
 *   - title: The title of the page.
 *   - name: The name of the site.
 *   - slogan: The slogan of the site.
 * - page_top: Initial rendered markup. This should be printed before 'page'.
 * - page: The rendered page markup.
 * - path_info.args: Array of URL arguments un aliassed.
 * - page_bottom: Closing rendered markup. This variable should be printed after
 *   'page'.
 * - db_offline: A flag indicating if the database is offline.
 * - placeholder_token: The token for generating head, css, js and js-bottom
 *   placeholders.
 *
 * @see template_preprocess_html()
 */
#}
{%
  set body_classes = [
    logged_in ? 'user-logged-in' : 'user-logged-out',
    is_front ? 'path-frontpage' : 'path-not-frontpage',
    root_path ? 'path-' ~ root_path|clean_class,
    path_info.args ? 'path-' ~ path_info.args,
    path_info.query ? 'path-query-' ~ path_info.query,
    head_title.title ? 'path-' ~ head_title.title|clean_class,
    node_type ? 'page-node-type--' ~ node_type|clean_class,
    head_title_array.name ? 'site-name--' ~ head_title_array.name|clean_class,
    theme.name ? 'theme-name--' ~ theme.name|clean_class,
    db_offline ? 'db-offline',
  ]
%}
<!DOCTYPE html>
<html{{ html_attributes }}>
  <head>
    <head-placeholder token=\"{{ placeholder_token|raw }}\">
    <title>{{ head_title|safe_join(' | ') }}</title>
    <css-placeholder token=\"{{ placeholder_token|raw }}\">
    <js-placeholder token=\"{{ placeholder_token|raw }}\">
  </head>
  <body{{ attributes.addClass(body_classes) }}>
    <a href=\"#main-content\" class=\"visually-hidden focusable skip-link\">
      {{ 'Skip to main content'|t }}
    </a>
    {{ page_top }}
    {{ page }}
    {{ page_bottom }}
    <js-bottom-placeholder token=\"{{ placeholder_token|raw }}\">
  </body>
</html>

  <style>
    {% if default_search_img_url %}
      .views-row .card .image-container{
        background-image: url({{default_search_img_url}});
      }
    {% endif %}
    {% if default_collection_img_url %}
      .dar-search-collection-form .views-row .card .image-container .views-element-container{
        background-image: url({{default_collection_img_url}});
      }
    {% endif %}

  </style>

", "themes/custom/law_theme/templates/layout/html.html.twig", "/var/www/test.com/themes/custom/law_theme/templates/layout/html.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 28, "if" => 61);
        static $filters = array("clean_class" => 31, "escape" => 42, "raw" => 44, "safe_join" => 45, "t" => 51);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if'],
                ['clean_class', 'escape', 'raw', 'safe_join', 't'],
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
