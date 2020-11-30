<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* themes/etisalat/templates/home/menu--footer.html.twig */
class __TwigTemplate_6c04fd1bf1198be72b8a7477410783575761343e105957374b43b08c57474a3d extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["import" => 21, "macro" => 43, "if" => 45, "for" => 51, "set" => 53];
        $filters = ["escape" => 36];
        $functions = ["link" => 57];

        try {
            $this->sandbox->checkSecurity(
                ['import', 'macro', 'if', 'for', 'set'],
                ['escape'],
                ['link']
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->getSourceContext());

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

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 21
        $context["menus"] = $this;
        // line 22
        echo "
";
        // line 27
        echo "<div class=\"col-sm-12 col-md-9\">
    ";
        // line 28
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($context["menus"]->getmenu_links(($context["items"] ?? null), ($context["attributes"] ?? null), 0));
        echo "
    <div class=\"copyright copyright-desktop \">
        &copy;<span dir=\"ltr\">2020</span>&nbsp;Etisalat. All Rights Reserved.
    </div>
</div>

<div class=\"col-sm-12 col-md-3\">
    <a class=\"etisalat-logo-expo\" href=\"https://www.etisalat.ae/en/enterprise-and-government/go-digital/expo-2020.jsp\" target=\"_blank\" title=\"Expo 2020\">
        <img src=\"";
        // line 36
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null)), "html", null, true);
        echo "/images/expo-2020.svg\" alt=\"Expo 2020\">
    </a>
    <div class=\"copyright copyright-mobile\">
        &copy;<span dir=\"ltr\">2020</span>&nbsp;Etisalat. All Rights Reserved.
    </div>
</div>

";
    }

    // line 43
    public function getmenu_links($__items__ = null, $__attributes__ = null, $__menu_level__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals([
            "items" => $__items__,
            "attributes" => $__attributes__,
            "menu_level" => $__menu_level__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            // line 44
            echo "    ";
            $context["menus"] = $this;
            // line 45
            echo "    ";
            if (($context["items"] ?? null)) {
                // line 46
                echo "        ";
                if ((($context["menu_level"] ?? null) == 0)) {
                    // line 47
                    echo "            <ul";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["attributes"] ?? null), "addClass", [0 => "footer-links-nav"], "method")), "html", null, true);
                    echo ">
            ";
                } else {
                    // line 49
                    echo "                <ul class=\"footer-links-nav\">
                ";
                }
                // line 51
                echo "                ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 52
                    echo "                    ";
                    // line 53
                    $context["classes"] = [];
                    // line 56
                    echo "                    <li";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($context["item"], "attributes", []), "addClass", [0 => ($context["classes"] ?? null)], "method")), "html", null, true);
                    echo ">
                        ";
                    // line 57
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->getLink($this->sandbox->ensureToStringAllowed($this->getAttribute($context["item"], "title", [])), $this->sandbox->ensureToStringAllowed($this->getAttribute($context["item"], "url", []))), "html", null, true);
                    echo "
                        ";
                    // line 58
                    if ($this->getAttribute($context["item"], "below", [])) {
                        // line 59
                        echo "                            ";
                        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($context["menus"]->getmenu_links($this->getAttribute($context["item"], "below", []), ($context["attributes"] ?? null), (($context["menu_level"] ?? null) + 1)));
                        echo "
                        ";
                    }
                    // line 61
                    echo "                    </li>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 63
                echo "            </ul>
        ";
            }
            // line 65
            echo "    ";
        } catch (\Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (\Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "themes/etisalat/templates/home/menu--footer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  156 => 65,  152 => 63,  145 => 61,  139 => 59,  137 => 58,  133 => 57,  128 => 56,  126 => 53,  124 => 52,  119 => 51,  115 => 49,  109 => 47,  106 => 46,  103 => 45,  100 => 44,  86 => 43,  74 => 36,  63 => 28,  60 => 27,  57 => 22,  55 => 21,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{#
/**
 * @file
 * Theme override to display a menu.
 *
 * Available variables:
 * - menu_name: The machine name of the menu.
 * - items: A nested list of menu items. Each menu item contains:
 *   - attributes: HTML attributes for the menu item.
 *   - below: The menu item child items.
 *   - title: The menu link title.
 *   - url: The menu link url, instance of \\Drupal\\Core\\Url
 *   - localized_options: Menu link localized options.
 *   - is_expanded: TRUE if the link has visible children within the current
 *     menu tree.
 *   - is_collapsed: TRUE if the link has children within the current menu tree
 *     that are not currently visible.
 *   - in_active_trail: TRUE if the link is in the active trail.
 */
#}
{% import _self as menus %}

{#
  We call a macro which calls itself to render the full tree.
  @see https://twig.symfony.com/doc/1.x/tags/macro.html
#}
<div class=\"col-sm-12 col-md-9\">
    {{ menus.menu_links(items, attributes, 0) }}
    <div class=\"copyright copyright-desktop \">
        &copy;<span dir=\"ltr\">2020</span>&nbsp;Etisalat. All Rights Reserved.
    </div>
</div>

<div class=\"col-sm-12 col-md-3\">
    <a class=\"etisalat-logo-expo\" href=\"https://www.etisalat.ae/en/enterprise-and-government/go-digital/expo-2020.jsp\" target=\"_blank\" title=\"Expo 2020\">
        <img src=\"{{ directory }}/images/expo-2020.svg\" alt=\"Expo 2020\">
    </a>
    <div class=\"copyright copyright-mobile\">
        &copy;<span dir=\"ltr\">2020</span>&nbsp;Etisalat. All Rights Reserved.
    </div>
</div>

{% macro menu_links(items, attributes, menu_level) %}
    {% import _self as menus %}
    {% if items %}
        {% if menu_level == 0 %}
            <ul{{ attributes.addClass(\"footer-links-nav\") }}>
            {% else %}
                <ul class=\"footer-links-nav\">
                {% endif %}
                {% for item in items %}
                    {%
        set classes = [
        ]
      %}
                    <li{{ item.attributes.addClass(classes) }}>
                        {{ link(item.title, item.url) }}
                        {% if item.below %}
                            {{ menus.menu_links(item.below, attributes, menu_level + 1) }}
                        {% endif %}
                    </li>
                {% endfor %}
            </ul>
        {% endif %}
    {% endmacro %}", "themes/etisalat/templates/home/menu--footer.html.twig", "C:\\xampp\\htdocs\\drupal\\theming-etisalat\\themes\\etisalat\\templates\\home\\menu--footer.html.twig");
    }
}
