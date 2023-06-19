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

/* themes/contrib/bootstrap/templates/system/system-themes-page.html.twig */
class __TwigTemplate_86e1d1261692041667e77463c534e6bb extends Template
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
        // line 33
        echo "<div";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => "form-group"], "method", false, false, true, 33), 33, $this->source), "html", null, true);
        echo ">
  ";
        // line 34
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["theme_groups"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["theme_group"]) {
            // line 35
            echo "    ";
            // line 36
            $context["theme_group_classes"] = [0 => "system-themes-list", 1 => ("system-themes-list-" . $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source,             // line 38
$context["theme_group"], "state", [], "any", false, false, true, 38), 38, $this->source)), 2 => "clearfix", 3 => "panel", 4 => "panel-default"];
            // line 44
            echo "    <div";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["theme_group"], "attributes", [], "any", false, false, true, 44), "addClass", [0 => ($context["theme_group_classes"] ?? null)], "method", false, false, true, 44), 44, $this->source), "html", null, true);
            echo ">
      <div class=\"panel-heading\">
        <a class=\"panel-title\" href=\"#system-themes-list--";
            // line 46
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["theme_group"], "state", [], "any", false, false, true, 46), 46, $this->source), "html", null, true);
            echo "\" aria-controls=\"#system-themes-list--";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["theme_group"], "state", [], "any", false, false, true, 46), 46, $this->source), "html", null, true);
            echo "\" aria-expanded=\"false\" aria-pressed=\"false\" data-toggle=\"collapse\" role=\"button\">
          ";
            // line 47
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["theme_group"], "title", [], "any", false, false, true, 47), 47, $this->source), "html", null, true);
            echo " (";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, twig_length_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["theme_group"], "themes", [], "any", false, false, true, 47), 47, $this->source)), "html", null, true);
            echo ")
        </a>
      </div>
      ";
            // line 51
            $context["table_classes"] = [0 => "table", 1 => "panel-collapse", 2 => (((twig_get_attribute($this->env, $this->source,             // line 54
$context["theme_group"], "state", [], "any", false, false, true, 54) == "uninstalled")) ? ("collapse") : ("")), 3 => "fade", 4 => (((twig_get_attribute($this->env, $this->source,             // line 56
$context["theme_group"], "state", [], "any", false, false, true, 56) != "uninstalled")) ? ("in") : (""))];
            // line 59
            echo "      <table id=\"system-themes-list--";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["theme_group"], "state", [], "any", false, false, true, 59), 59, $this->source), "html", null, true);
            echo "\" class=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, twig_join_filter($this->sandbox->ensureToStringAllowed(($context["table_classes"] ?? null), 59, $this->source), " "), "html", null, true);
            echo "\">
        ";
            // line 60
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["theme_group"], "themes", [], "any", false, false, true, 60));
            foreach ($context['_seq'] as $context["_key"] => $context["theme"]) {
                // line 61
                echo "          ";
                // line 62
                $context["theme_classes"] = [0 => ((twig_get_attribute($this->env, $this->source,                 // line 63
$context["theme"], "is_default", [], "any", false, false, true, 63)) ? ("theme-default") : ("")), 1 => ((twig_get_attribute($this->env, $this->source,                 // line 64
$context["theme"], "is_admin", [], "any", false, false, true, 64)) ? ("theme-admin") : ("")), 2 => "theme-selector", 3 => "clearfix"];
                // line 69
                echo "          <tr";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["theme"], "attributes", [], "any", false, false, true, 69), "addClass", [0 => ($context["theme_classes"] ?? null)], "method", false, false, true, 69), 69, $this->source), "html", null, true);
                echo ">
            <td class=\"col-sm-3\">
              ";
                // line 71
                if (twig_get_attribute($this->env, $this->source, $context["theme"], "screenshot", [], "any", false, false, true, 71)) {
                    // line 72
                    echo "                ";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["theme"], "screenshot", [], "any", false, false, true, 72), 72, $this->source), "html", null, true);
                    echo "
              ";
                }
                // line 74
                echo "            </td>
            <td class=\"theme-info col-sm-9\">
              <h4 class=\"theme-info__header\">";
                // line 77
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["theme"], "name", [], "any", false, false, true, 77), 77, $this->source), "html", null, true);
                echo " ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["theme"], "version", [], "any", false, false, true, 77), 77, $this->source), "html", null, true);
                // line 78
                if (twig_get_attribute($this->env, $this->source, $context["theme"], "notes", [], "any", false, false, true, 78)) {
                    // line 79
                    echo "                  (";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->safeJoin($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["theme"], "notes", [], "any", false, false, true, 79), 79, $this->source), ", "));
                    echo ")";
                }
                // line 81
                echo "</h4>
              <div class=\"theme-info__description help-block\">";
                // line 82
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["theme"], "description", [], "any", false, false, true, 82), 82, $this->source), "html", null, true);
                echo "</div>
              ";
                // line 84
                echo "              ";
                if (twig_get_attribute($this->env, $this->source, $context["theme"], "incompatible", [], "any", false, false, true, 84)) {
                    // line 85
                    echo "                <div class=\"incompatible\">";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["theme"], "incompatible", [], "any", false, false, true, 85), 85, $this->source), "html", null, true);
                    echo "</div>
              ";
                } else {
                    // line 87
                    echo "                ";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["theme"], "operations", [], "any", false, false, true, 87), 87, $this->source), "html", null, true);
                    echo "
              ";
                }
                // line 89
                echo "            </td>
          </tr>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['theme'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 92
            echo "      </table>
    </div>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['theme_group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 95
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "themes/contrib/bootstrap/templates/system/system-themes-page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  161 => 95,  153 => 92,  145 => 89,  139 => 87,  133 => 85,  130 => 84,  126 => 82,  123 => 81,  118 => 79,  116 => 78,  112 => 77,  108 => 74,  102 => 72,  100 => 71,  94 => 69,  92 => 64,  91 => 63,  90 => 62,  88 => 61,  84 => 60,  77 => 59,  75 => 56,  74 => 54,  73 => 51,  65 => 47,  59 => 46,  53 => 44,  51 => 38,  50 => 36,  48 => 35,  44 => 34,  39 => 33,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/contrib/bootstrap/templates/system/system-themes-page.html.twig", "/app/web/themes/contrib/bootstrap/templates/system/system-themes-page.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("for" => 34, "set" => 36, "if" => 71);
        static $filters = array("escape" => 33, "length" => 47, "join" => 59, "safe_join" => 79);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['for', 'set', 'if'],
                ['escape', 'length', 'join', 'safe_join'],
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
