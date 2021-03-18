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

/* flex-objects/types/pages/edit.html.twig */
class __TwigTemplate_d35ea1a2c9e048c024819f69ff0c9719de93a486adbbae1364758ac63720fba9 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'body' => [$this, 'block_body'],
            'back_button' => [$this, 'block_back_button'],
            'preview_button' => [$this, 'block_preview_button'],
            'delete_button' => [$this, 'block_delete_button'],
            'extra_buttons' => [$this, 'block_extra_buttons'],
            'save_button' => [$this, 'block_save_button'],
            'content_top' => [$this, 'block_content_top'],
            'topbar' => [$this, 'block_topbar'],
            'edit' => [$this, 'block_edit'],
            'content' => [$this, 'block_content'],
            'bottom' => [$this, 'block_bottom'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "flex-objects/types/default/edit.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 3
        $context["form"] = (($context["form"]) ?? ($this->getAttribute(($context["object"] ?? null), "form", [0 => ((($this->getAttribute($this->getAttribute(($context["admin"] ?? null), "session", []), "expert", []) != "0")) ? ("raw") : (""))], "method")));
        // line 4
        $context["title"] = (($context["title"]) ?? (((($this->getAttribute(($context["form"] ?? null), "getValue", [0 => "header.title"], "method", true, true) &&  !(null === $this->getAttribute(($context["form"] ?? null), "getValue", [0 => "header.title"], "method")))) ? ($this->getAttribute(($context["form"] ?? null), "getValue", [0 => "header.title"], "method")) : (((($this->getAttribute(($context["object"] ?? null), "title", [], "any", true, true) &&  !(null === $this->getAttribute(($context["object"] ?? null), "title", [])))) ? ($this->getAttribute(($context["object"] ?? null), "title", [])) : (($context["key"] ?? null)))))));
        // line 5
        $context["parent"] = $this->getAttribute(($context["object"] ?? null), "parent", []);
        // line 6
        $context["can_read"] = (($context["can_read"]) ?? ($this->env->getExtension('Grav\Common\Twig\TwigExtension')->boolFilter((($this->getAttribute(($context["object"] ?? null), "exists", [])) ? ($this->getAttribute(($context["object"] ?? null), "isAuthorized", [0 => "read", 1 => "admin", 2 => ($context["user"] ?? null)], "method")) : ($this->getAttribute(($context["parent"] ?? null), "isAuthorized", [0 => "create", 1 => "admin", 2 => ($context["user"] ?? null)], "method"))))));
        // line 7
        $context["can_copy"] = (($context["can_copy"]) ?? (($this->getAttribute(($context["parent"] ?? null), "exists", []) && $this->getAttribute(($context["parent"] ?? null), "isAuthorized", [0 => "create", 1 => "admin", 2 => ($context["user"] ?? null)], "method"))));
        // line 8
        $context["can_create"] = (($context["can_create"]) ?? (($this->getAttribute(($context["object"] ?? null), "exists", []) && $this->getAttribute(($context["object"] ?? null), "isAuthorized", [0 => "create", 1 => "admin", 2 => ($context["user"] ?? null)], "method"))));
        // line 9
        $context["can_save"] = (($context["can_save"]) ?? ($this->env->getExtension('Grav\Common\Twig\TwigExtension')->boolFilter((($this->getAttribute(($context["object"] ?? null), "exists", [])) ? ($this->getAttribute(($context["object"] ?? null), "isAuthorized", [0 => "update", 1 => "admin", 2 => ($context["user"] ?? null)], "method")) : ($this->getAttribute(($context["parent"] ?? null), "isAuthorized", [0 => "create", 1 => "admin", 2 => ($context["user"] ?? null)], "method"))))));
        // line 10
        $context["can_translate"] = (($context["can_translate"]) ?? ((($this->getAttribute(($context["admin"] ?? null), "multilang", []) && $this->getAttribute(($context["object"] ?? null), "hasFlexFeature", [0 => "page-translate"], "method")) &&  !$this->getAttribute(($context["object"] ?? null), "root", [], "method"))));
        // line 15
        $context["macro"] = $this;
        // line 1
        $this->parent = $this->loadTemplate("flex-objects/types/default/edit.html.twig", "flex-objects/types/pages/edit.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 17
    public function block_body($context, array $blocks = [])
    {
        // line 18
        echo "    ";
        $context["current_route"] = ("/" . $this->getAttribute(($context["route"] ?? null), "getRoute", [0 => 1], "method"));
        // line 19
        echo "
    ";
        // line 20
        if ( !$this->getAttribute(($context["object"] ?? null), "root", [], "method")) {
            // line 21
            echo "    ";
            $context["child"] = $this->getAttribute($this->getAttribute(($context["object"] ?? null), "children", []), "first", []);
            // line 22
            echo "    ";
            $context["prev"] = $this->getAttribute(($context["object"] ?? null), "prevSibling", []);
            // line 23
            echo "    ";
            $context["next"] = $this->getAttribute(($context["object"] ?? null), "nextSibling", []);
            // line 24
            echo "
    ";
            // line 25
            $context["parent_url"] = (((($context["parent"] ?? null) &&  !$this->getAttribute(($context["parent"] ?? null), "root", []))) ? ($this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->adminRouteFunc(($context["back_route"] ?? null))) : (""));
            // line 26
            echo "    ";
            $context["child_url"] = (((($context["can_read"] ?? null) && ($context["child"] ?? null))) ? ($this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->adminRouteFunc(((($context["current_route"] ?? null) . "/") . $this->getAttribute(($context["child"] ?? null), "slug", [])))) : (""));
            // line 27
            echo "    ";
            $context["prev_url"] = (((($context["can_read"] ?? null) && ($context["prev"] ?? null))) ? ($this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->adminRouteFunc(((($context["back_route"] ?? null) . "/") . $this->getAttribute(($context["prev"] ?? null), "slug", [])))) : (""));
            // line 28
            echo "    ";
            $context["next_url"] = (((($context["can_read"] ?? null) && ($context["next"] ?? null))) ? ($this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->adminRouteFunc(((($context["back_route"] ?? null) . "/") . $this->getAttribute(($context["next"] ?? null), "slug", [])))) : (""));
            // line 29
            echo "    ";
        }
        // line 30
        echo "    ";
        $context["back_url"] = (($context["back_url"]) ?? ($this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->adminRouteFunc($this->getAttribute(($context["flex"] ?? null), "adminRoute", [0 => $this->getAttribute(($context["directory"] ?? null), "getFlexType", [], "method")], "method"))));
        // line 31
        echo "
    ";
        // line 32
        $this->displayParentBlock("body", $context, $blocks);
        echo "
";
    }

    // line 35
    public function block_back_button($context, array $blocks = [])
    {
        // line 36
        echo "    ";
        $this->loadTemplate([0 => (("flex-objects/types/" . ($context["target"] ?? null)) . "/buttons/back.html.twig"), 1 => "flex-objects/types/pages/buttons/back.html.twig"], "flex-objects/types/pages/edit.html.twig", 36)->display(twig_array_merge($context, ["back_url" =>         // line 37
($context["back_url"] ?? null)]));
        // line 38
        echo "    ";
        if ( !$this->getAttribute(($context["object"] ?? null), "root", [], "method")) {
            // line 39
            echo "    ";
            $this->loadTemplate([0 => (("flex-objects/types/" . ($context["target"] ?? null)) . "/buttons/nav-prev.html.twig"), 1 => "flex-objects/types/pages/buttons/nav-prev.html.twig"], "flex-objects/types/pages/edit.html.twig", 39)->display(twig_array_merge($context, ["prev_url" =>             // line 40
($context["prev_url"] ?? null), "title" => $this->getAttribute(($context["prev"] ?? null), "route", [])]));
            // line 41
            echo "    ";
            $this->loadTemplate([0 => (("flex-objects/types/" . ($context["target"] ?? null)) . "/buttons/nav-parent.html.twig"), 1 => "flex-objects/types/pages/buttons/nav-parent.html.twig"], "flex-objects/types/pages/edit.html.twig", 41)->display(twig_array_merge($context, ["parent_url" =>             // line 42
($context["parent_url"] ?? null), "title" => $this->getAttribute(($context["parent"] ?? null), "route", [])]));
            // line 43
            echo "    ";
            $this->loadTemplate([0 => (("flex-objects/types/" . ($context["target"] ?? null)) . "/buttons/nav-child.html.twig"), 1 => "flex-objects/types/pages/buttons/nav-child.html.twig"], "flex-objects/types/pages/edit.html.twig", 43)->display(twig_array_merge($context, ["child_url" =>             // line 44
($context["child_url"] ?? null), "title" => $this->getAttribute(($context["child"] ?? null), "route", [])]));
            // line 45
            echo "    ";
            $this->loadTemplate([0 => (("flex-objects/types/" . ($context["target"] ?? null)) . "/buttons/nav-next.html.twig"), 1 => "flex-objects/types/pages/buttons/nav-next.html.twig"], "flex-objects/types/pages/edit.html.twig", 45)->display(twig_array_merge($context, ["next_url" =>             // line 46
($context["next_url"] ?? null), "title" => $this->getAttribute(($context["next"] ?? null), "route", [])]));
            // line 47
            echo "    ";
        }
    }

    // line 50
    public function block_preview_button($context, array $blocks = [])
    {
        // line 51
        echo "    ";
        if (($this->getAttribute(($context["object"] ?? null), "exists", []) &&  !$this->getAttribute(($context["object"] ?? null), "root", [], "method"))) {
            // line 52
            echo "    ";
            $this->loadTemplate([0 => (("flex-objects/types/" . ($context["target"] ?? null)) . "/buttons/preview.html.twig"), 1 => "flex-objects/types/pages/buttons/preview.html.twig"], "flex-objects/types/pages/edit.html.twig", 52)->display($context);
            // line 53
            echo "    ";
        }
    }

    // line 56
    public function block_delete_button($context, array $blocks = [])
    {
        // line 57
        echo "    ";
        // line 58
        echo "    ";
        if ( !$this->getAttribute(($context["object"] ?? null), "root", [], "method")) {
            // line 59
            echo "    ";
            $this->loadTemplate([0 => (("flex-objects/types/" . ($context["target"] ?? null)) . "/buttons/delete.html.twig"), 1 => "flex-objects/types/pages/buttons/delete.html.twig"], "flex-objects/types/pages/edit.html.twig", 59)->display($context);
            // line 60
            echo "    ";
        }
    }

    // line 63
    public function block_extra_buttons($context, array $blocks = [])
    {
        // line 64
        echo "    ";
        if (($this->getAttribute(($context["object"] ?? null), "exists", []) &&  !$this->getAttribute(($context["object"] ?? null), "root", [], "method"))) {
            // line 65
            echo "    ";
            if (($context["can_create"] ?? null)) {
                // line 66
                echo "    ";
                $this->loadTemplate([0 => (("flex-objects/types/" . ($context["target"] ?? null)) . "/buttons/add.html.twig"), 1 => "flex-objects/types/pages/buttons/add.html.twig"], "flex-objects/types/pages/edit.html.twig", 66)->display($context);
                // line 67
                echo "    ";
            }
            // line 68
            echo "    ";
            if (($context["can_copy"] ?? null)) {
                // line 69
                echo "    ";
                $this->loadTemplate([0 => (("flex-objects/types/" . ($context["target"] ?? null)) . "/buttons/copy.html.twig"), 1 => "flex-objects/types/pages/buttons/copy.html.twig"], "flex-objects/types/pages/edit.html.twig", 69)->display($context);
                // line 70
                echo "    ";
            }
            // line 71
            echo "    ";
            if (($context["can_save"] ?? null)) {
                // line 72
                echo "    ";
                $this->loadTemplate([0 => (("flex-objects/types/" . ($context["target"] ?? null)) . "/buttons/move.html.twig"), 1 => "flex-objects/types/pages/buttons/move.html.twig"], "flex-objects/types/pages/edit.html.twig", 72)->display($context);
                // line 73
                echo "    ";
            }
            // line 74
            echo "    ";
        }
    }

    // line 77
    public function block_save_button($context, array $blocks = [])
    {
        // line 78
        echo "    ";
        $this->loadTemplate([0 => (("flex-objects/types/" . ($context["target"] ?? null)) . "/buttons/save.html.twig"), 1 => "flex-objects/types/pages/buttons/save.html.twig"], "flex-objects/types/pages/edit.html.twig", 78)->display($context);
    }

    // line 81
    public function block_content_top($context, array $blocks = [])
    {
        // line 82
        echo "    ";
        if ((($context["allowed"] ?? null) && $this->getAttribute(($context["user"] ?? null), "authorize", [0 => "admin.super"], "method"))) {
            // line 83
            echo "    <div class=\"alert notice\">
        ";
            // line 84
            $context["save_location"] = (($this->getAttribute(($context["object"] ?? null), "getStorageFolder", [], "method")) ? ($this->getAttribute(($context["object"] ?? null), "getStorageFolder", [], "method")) : ($this->getAttribute(($context["directory"] ?? null), "getStorageFolder", [], "method")));
            // line 85
            echo "        ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.SAVE_LOCATION"), "html", null, true);
            echo ": <b>";
            echo twig_escape_filter($this->env, twig_trim_filter($this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc(($context["save_location"] ?? null), false, true), "/"), "html", null, true);
            echo " ";
            echo (( !$this->getAttribute(($context["object"] ?? null), "exists", [])) ? ("[NEW]") : (""));
            echo "</b> (type: <b>";
            (($this->getAttribute(($context["form"] ?? null), "getValue", [0 => "name"], "method")) ? (print (twig_escape_filter($this->env, $this->getAttribute(($context["form"] ?? null), "getValue", [0 => "name"], "method"), "html", null, true))) : (print ("default")));
            echo "</b>)
    </div>
    ";
        }
        // line 88
        echo "    ";
        if (($this->getAttribute(($context["object"] ?? null), "exists", []) && $this->getAttribute($this->getAttribute(($context["form"] ?? null), "flash", []), "exists", []))) {
            // line 89
            echo "        <div class=\"alert secondary-accent\">
            <i class=\"fa fa-lightbulb-o\"></i> You are editing a saved draft. <button class=\"button button-link\" type=\"submit\" name=\"task\" value=\"reset\" form=\"blueprints\">";
            // line 90
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.RESET"), "html", null, true);
            echo "</button>
        </div>
    ";
        }
        // line 93
        echo "    ";
        if ( !$this->getAttribute(($context["object"] ?? null), "exists", [])) {
            // line 94
            echo "        <div class=\"alert secondary-accent\">
            <i class=\"fa fa-lightbulb-o\"></i> This page will not exist until it is saved.
        </div>
    ";
        } elseif (        // line 97
($context["can_translate"] ?? null)) {
            // line 98
            echo "        ";
            $context["is_default"] = (($context["language"] ?? null) === ($context["default_language"] ?? null));
            // line 99
            echo "        ";
            if ((($context["is_default"] ?? null) && twig_in_filter(($context["default_language"] ?? null), ($context["object_languages"] ?? null)))) {
                // line 100
                echo "            ";
                if (( !($context["translate_include_default"] ?? null) && $this->getAttribute(($context["object"] ?? null), "property", [0 => "lang"], "method"))) {
                    // line 101
                    echo "            ";
                    // line 102
                    echo "            <div class=\"alert secondary-accent\">
                Using <strong>";
                    // line 103
                    echo twig_escape_filter($this->env, ((($this->getAttribute(($context["all_languages"] ?? null), ($context["object_language"] ?? null), [], "array", true, true) &&  !(null === $this->getAttribute(($context["all_languages"] ?? null), ($context["object_language"] ?? null), [], "array")))) ? ($this->getAttribute(($context["all_languages"] ?? null), ($context["object_language"] ?? null), [], "array")) : (($context["object_language"] ?? null))), "html", null, true);
                    echo "</strong> language override.
                ";
                    // line 104
                    echo (($this->getAttribute(($context["object"] ?? null), "hasTranslation", [0 => "", 1 => false], "method")) ? ("Unused <strong>Default</strong> language file also exists.") : (""));
                    echo "
            </div>
            ";
                } elseif (                // line 106
($context["translate_include_default"] ?? null)) {
                    // line 107
                    echo "                ";
                    if ( !$this->getAttribute(($context["object"] ?? null), "property", [0 => "lang"], "method")) {
                        // line 108
                        echo "                    <div class=\"alert secondary-accent\">
                        Using <strong>Default</strong> language file.
                    </div>
                ";
                    } elseif ($this->getAttribute(                    // line 111
($context["object"] ?? null), "hasTranslation", [0 => "", 1 => false], "method")) {
                        // line 112
                        echo "                    <div class=\"alert secondary-accent\">
                        Unused <strong>Default</strong> language file also exists.
                    </div>
                ";
                    }
                    // line 116
                    echo "            ";
                }
                // line 117
                echo "        ";
            } elseif ( !($context["has_translation"] ?? null)) {
                // line 118
                echo "        <div class=\"alert warning\">
            This page has not been translated to <i class=\"fa fa-flag-o\"></i> <strong>";
                // line 119
                echo twig_escape_filter($this->env, ((($this->getAttribute(($context["all_languages"] ?? null), ($context["language"] ?? null), [], "array", true, true) &&  !(null === $this->getAttribute(($context["all_languages"] ?? null), ($context["language"] ?? null), [], "array")))) ? ($this->getAttribute(($context["all_languages"] ?? null), ($context["language"] ?? null), [], "array")) : (($context["language"] ?? null))), "html", null, true);
                echo "</strong> language yet!
            ";
                // line 120
                if ((($context["language"] ?? null) == ($context["object_language"] ?? null))) {
                    // line 121
                    echo "                No fallback translations found.
            ";
                } else {
                    // line 123
                    echo "                Falling back to <strong>";
                    echo twig_escape_filter($this->env, ((($this->getAttribute(($context["all_languages"] ?? null), ($context["object_language"] ?? null), [], "array", true, true) &&  !(null === $this->getAttribute(($context["all_languages"] ?? null), ($context["object_language"] ?? null), [], "array")))) ? ($this->getAttribute(($context["all_languages"] ?? null), ($context["object_language"] ?? null), [], "array")) : (($context["object_language"] ?? null))), "html", null, true);
                    echo "</strong> language.
            ";
                }
                // line 125
                echo "        </div>
        ";
            }
            // line 127
            echo "    ";
        }
    }

    // line 130
    public function block_topbar($context, array $blocks = [])
    {
        // line 131
        echo "    ";
        if (($context["can_translate"] ?? null)) {
            // line 132
            echo "        <div id=\"admin-lang-toggle\" class=\"button-group\">
            <button type=\"button\" class=\"button disabled\">
                <i class=\"fa fa-flag-o\"></i>
                ";
            // line 135
            echo twig_escape_filter($this->env, ((($this->getAttribute(($context["all_languages"] ?? null), ($context["object_language"] ?? null), [], "array", true, true) &&  !(null === $this->getAttribute(($context["all_languages"] ?? null), ($context["object_language"] ?? null), [], "array")))) ? ($this->getAttribute(($context["all_languages"] ?? null), ($context["object_language"] ?? null), [], "array")) : (($context["object_language"] ?? null))), "html", null, true);
            echo "
            </button>
            ";
            // line 137
            if ((count(($context["object_languages"] ?? null)) > $this->env->getExtension('Grav\Common\Twig\TwigExtension')->intFilter(twig_in_filter(($context["object_language"] ?? null), ($context["object_languages"] ?? null))))) {
                // line 138
                echo "                <button type=\"button\" class=\"button dropdown-toggle\" data-toggle=\"dropdown\">
                    <i class=\"fa fa-caret-down\"></i>
                </button>
                <ul class=\"dropdown-menu language-switcher\">
                ";
                // line 142
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["object_languages"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["lang_code"]) {
                    // line 143
                    echo "                    ";
                    if (($context["lang_code"] != ($context["object_language"] ?? null))) {
                        // line 144
                        echo "                    <li>
                        <a href=\"";
                        // line 145
                        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->adminRouteFunc($this->getAttribute(($context["route"] ?? null), "getRoute", [0 => 1], "method"), $context["lang_code"]), "html", null, true);
                        echo "\">";
                        echo twig_escape_filter($this->env, ((($this->getAttribute(($context["all_languages"] ?? null), $context["lang_code"], [], "array", true, true) &&  !(null === $this->getAttribute(($context["all_languages"] ?? null), $context["lang_code"], [], "array")))) ? ($this->getAttribute(($context["all_languages"] ?? null), $context["lang_code"], [], "array")) : ($context["lang_code"])), "html", null, true);
                        echo "</a>
                    </li>
                    ";
                    }
                    // line 148
                    echo "                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lang_code'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 149
                echo "                </ul>
            ";
            }
            // line 151
            echo "        </div>
    ";
        }
        // line 153
        echo "
    <form id=\"admin-mode-toggle\">
        ";
        // line 155
        $context["normalText"] = $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.NORMAL");
        // line 156
        echo "        ";
        $context["expertText"] = $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.EXPERT");
        // line 157
        echo "        ";
        $context["maxLen"] = max([0 => twig_length_filter($this->env, ($context["normalText"] ?? null)), 1 => twig_length_filter($this->env, ($context["expertText"] ?? null))]);
        // line 158
        echo "        ";
        $context["normalText"] = $context["macro"]->getspanToggle(($context["normalText"] ?? null), ($context["maxLen"] ?? null));
        // line 159
        echo "        ";
        $context["expertText"] = $context["macro"]->getspanToggle(($context["expertText"] ?? null), ($context["maxLen"] ?? null));
        // line 160
        echo "
        <div class=\"switch-toggle switch-grav\">
            <input type=\"radio\" value=\"normal\" data-leave-url=\"";
        // line 162
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["route"] ?? null), "withGravParam", [0 => "mode", 1 => "normal"], "method"), "toString", [0 => true], "method"), "html", null, true);
        echo "\" id=\"normal\" name=\"mode-switch\" class=\"highlight\" ";
        if (($this->getAttribute($this->getAttribute(($context["admin"] ?? null), "session", []), "expert", []) == "0")) {
            echo " checked=\"checked\"";
        }
        echo ">
            <label for=\"normal\">";
        // line 163
        echo ($context["normalText"] ?? null);
        echo "</label>
            <input type=\"radio\" value=\"expert\" data-leave-url=\"";
        // line 164
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["route"] ?? null), "withGravParam", [0 => "mode", 1 => "expert"], "method"), "toString", [0 => true], "method"), "html", null, true);
        echo "\" id=\"expert\" name=\"mode-switch\" class=\"highlight\" ";
        if (($this->getAttribute($this->getAttribute(($context["admin"] ?? null), "session", []), "expert", []) == "1")) {
            echo " checked=\"checked\"";
        }
        echo ">
            <label for=\"expert\">";
        // line 165
        echo ($context["expertText"] ?? null);
        echo "</label>
            <a></a>
        </div>
    </form>
";
    }

    // line 171
    public function block_edit($context, array $blocks = [])
    {
        // line 172
        echo "    ";
        $this->loadTemplate("partials/blueprints.html.twig", "flex-objects/types/pages/edit.html.twig", 172)->display(twig_array_merge($context, ["context" => ($context["object"] ?? null), "data" => ($context["object"] ?? null), "blueprints" => $this->getAttribute(($context["form"] ?? null), "blueprint", [])]));
    }

    // line 175
    public function block_content($context, array $blocks = [])
    {
        // line 176
        echo "    ";
        $this->displayParentBlock("content", $context, $blocks);
        echo "

    ";
        // line 178
        $this->loadTemplate("partials/modal-changes-detected.html.twig", "flex-objects/types/pages/edit.html.twig", 178)->display($context);
        // line 179
        echo "
    ";
        // line 180
        if ($this->getAttribute(($context["object"] ?? null), "exists", [])) {
            // line 181
            echo "        ";
            $context["modal_data"] = $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->dataFunc(["route" => ("/" . $this->getAttribute(            // line 182
($context["object"] ?? null), "key", [])), "name" => ((($this->getAttribute($this->getAttribute(            // line 183
($context["object"] ?? null), "header", [], "any", false, true), "child_type", [], "any", true, true) &&  !(null === $this->getAttribute($this->getAttribute(($context["object"] ?? null), "header", [], "any", false, true), "child_type", [])))) ? ($this->getAttribute($this->getAttribute(($context["object"] ?? null), "header", [], "any", false, true), "child_type", [])) : (null))]);
            // line 185
            echo "
        <div class=\"remodal\" data-remodal-id=\"modal\" data-remodal-options=\"hashTracking: false\">
            ";
            // line 187
            $this->loadTemplate("partials/blueprints-new.html.twig", "flex-objects/types/pages/edit.html.twig", 187)->display(twig_array_merge($context, ["form" => null, "blueprints" => $this->getAttribute(($context["admin"] ?? null), "blueprints", [0 => "admin/pages/new"], "method"), "data" => ($context["modal_data"] ?? null), "form_id" => "new-page"]));
            // line 188
            echo "        </div>

        <div class=\"remodal\" data-remodal-id=\"modal-folder\" data-remodal-options=\"hashTracking: false\">
            ";
            // line 191
            $this->loadTemplate("partials/blueprints-new-folder.html.twig", "flex-objects/types/pages/edit.html.twig", 191)->display(twig_array_merge($context, ["form" => null, "blueprints" => $this->getAttribute(($context["admin"] ?? null), "blueprints", [0 => "admin/pages/new_folder"], "method"), "data" => ($context["modal_data"] ?? null), "form_id" => "new-folder"]));
            // line 192
            echo "        </div>

        <div class=\"remodal\" data-remodal-id=\"module\" data-remodal-options=\"hashTracking: false\">
            ";
            // line 195
            $this->loadTemplate("partials/blueprints-new.html.twig", "flex-objects/types/pages/edit.html.twig", 195)->display(twig_array_merge($context, ["form" => null, "blueprints" => $this->getAttribute(($context["admin"] ?? null), "blueprints", [0 => "admin/pages/modular_new"], "method"), "data" => ($context["modal_data"] ?? null), "form_id" => "new-module"]));
            // line 196
            echo "        </div>
    ";
        }
        // line 198
        echo "
    ";
        // line 200
        echo "
    <div class=\"remodal parents-container\" data-remodal-id=\"parents\" data-remodal-options=\"hashTracking: false, stack: true\">
        <form>
            <h1>Parents</h1>
            <div class=\"grav-loading\"><div class=\"grav-loader\">Loading...</div></div>
            <div class=\"parents-content\"></div>
            <div class=\"button-bar\">
                <a class=\"button secondary remodal-cancel\" data-remodal-action=\"cancel\" href=\"#\"><i class=\"fa fa-fw fa-close\"></i> ";
        // line 207
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.CANCEL"), "html", null, true);
        echo "</a>
                <a class=\"button\" data-parents-select href=\"#\"><i class=\"fa fa-fw fa-check\"></i> ";
        // line 208
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.CONTINUE"), "html", null, true);
        echo "</a>
            </div>
        </form>
    </div>

";
    }

    // line 215
    public function block_bottom($context, array $blocks = [])
    {
        // line 216
        echo "    ";
        $this->displayParentBlock("bottom", $context, $blocks);
        echo "
    <script>
        \$('.admin-pages .form-tabs .tabs-nav').css('margin-right', (\$('#admin-topbar').width() + 20) + 'px');
    </script>
";
    }

    // line 12
    public function getspanToggle($__input__ = null, $__length__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals([
            "input" => $__input__,
            "length" => $__length__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            // line 13
            echo "    ";
            echo (($this->env->getExtension('Grav\Common\Twig\TwigExtension')->repeatFunc("&nbsp;&nbsp;", ((($context["length"] ?? null) - twig_length_filter($this->env, ($context["input"] ?? null))) / 2)) . ($context["input"] ?? null)) . $this->env->getExtension('Grav\Common\Twig\TwigExtension')->repeatFunc("&nbsp;&nbsp;", ((($context["length"] ?? null) - twig_length_filter($this->env, ($context["input"] ?? null))) / 2)));
            echo "
";
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
        return "flex-objects/types/pages/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  557 => 13,  544 => 12,  534 => 216,  531 => 215,  521 => 208,  517 => 207,  508 => 200,  505 => 198,  501 => 196,  499 => 195,  494 => 192,  492 => 191,  487 => 188,  485 => 187,  481 => 185,  479 => 183,  478 => 182,  476 => 181,  474 => 180,  471 => 179,  469 => 178,  463 => 176,  460 => 175,  455 => 172,  452 => 171,  443 => 165,  435 => 164,  431 => 163,  423 => 162,  419 => 160,  416 => 159,  413 => 158,  410 => 157,  407 => 156,  405 => 155,  401 => 153,  397 => 151,  393 => 149,  387 => 148,  379 => 145,  376 => 144,  373 => 143,  369 => 142,  363 => 138,  361 => 137,  356 => 135,  351 => 132,  348 => 131,  345 => 130,  340 => 127,  336 => 125,  330 => 123,  326 => 121,  324 => 120,  320 => 119,  317 => 118,  314 => 117,  311 => 116,  305 => 112,  303 => 111,  298 => 108,  295 => 107,  293 => 106,  288 => 104,  284 => 103,  281 => 102,  279 => 101,  276 => 100,  273 => 99,  270 => 98,  268 => 97,  263 => 94,  260 => 93,  254 => 90,  251 => 89,  248 => 88,  235 => 85,  233 => 84,  230 => 83,  227 => 82,  224 => 81,  219 => 78,  216 => 77,  211 => 74,  208 => 73,  205 => 72,  202 => 71,  199 => 70,  196 => 69,  193 => 68,  190 => 67,  187 => 66,  184 => 65,  181 => 64,  178 => 63,  173 => 60,  170 => 59,  167 => 58,  165 => 57,  162 => 56,  157 => 53,  154 => 52,  151 => 51,  148 => 50,  143 => 47,  141 => 46,  139 => 45,  137 => 44,  135 => 43,  133 => 42,  131 => 41,  129 => 40,  127 => 39,  124 => 38,  122 => 37,  120 => 36,  117 => 35,  111 => 32,  108 => 31,  105 => 30,  102 => 29,  99 => 28,  96 => 27,  93 => 26,  91 => 25,  88 => 24,  85 => 23,  82 => 22,  79 => 21,  77 => 20,  74 => 19,  71 => 18,  68 => 17,  63 => 1,  61 => 15,  59 => 10,  57 => 9,  55 => 8,  53 => 7,  51 => 6,  49 => 5,  47 => 4,  45 => 3,  39 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'flex-objects/types/default/edit.html.twig' %}

{% set form = form ?? object.form(admin.session.expert != '0' ? 'raw') %}
{% set title = title ?? form.getValue('header.title') ?? object.title ?? key %}
{% set parent = object.parent %}
{% set can_read = can_read ?? (object.exists ? object.isAuthorized('read', 'admin', user) : parent.isAuthorized('create', 'admin', user))|bool %}
{% set can_copy = can_copy ?? (parent.exists and parent.isAuthorized('create', 'admin', user)) %}
{% set can_create = can_create ?? (object.exists and object.isAuthorized('create', 'admin', user)) %}
{% set can_save = can_save ?? (object.exists ? object.isAuthorized('update', 'admin', user) : parent.isAuthorized('create', 'admin', user))|bool %}
{% set can_translate = can_translate ?? (admin.multilang and object.hasFlexFeature('page-translate') and not object.root()) %}

{% macro spanToggle(input, length) %}
    {{ (repeat('&nbsp;&nbsp;', (length - input|length) / 2) ~ input ~ repeat('&nbsp;&nbsp;', (length - input|length) / 2))|raw }}
{% endmacro %}
{% import _self as macro %}

{% block body %}
    {% set current_route = '/' ~ route.getRoute(1) %}

    {% if not object.root() %}
    {% set child = object.children.first %}
    {% set prev = object.prevSibling %}
    {% set next = object.nextSibling %}

    {% set parent_url = parent and not parent.root ? admin_route(back_route) %}
    {% set child_url = can_read and child ? admin_route(current_route ~ '/' ~ child.slug) %}
    {% set prev_url = can_read and prev ? admin_route(back_route ~ '/' ~ prev.slug) %}
    {% set next_url = can_read and next ? admin_route(back_route ~ '/' ~ next.slug) %}
    {% endif %}
    {% set back_url = back_url ?? admin_route(flex.adminRoute(directory.getFlexType())) %}

    {{ parent() }}
{% endblock body %}

{% block back_button %}
    {% include ['flex-objects/types/' ~ target ~ '/buttons/back.html.twig', 'flex-objects/types/pages/buttons/back.html.twig']
        with { back_url: back_url } %}
    {% if not object.root() %}
    {% include ['flex-objects/types/' ~ target ~ '/buttons/nav-prev.html.twig', 'flex-objects/types/pages/buttons/nav-prev.html.twig']
        with { prev_url: prev_url, title: prev.route } %}
    {% include ['flex-objects/types/' ~ target ~ '/buttons/nav-parent.html.twig', 'flex-objects/types/pages/buttons/nav-parent.html.twig']
        with { parent_url: parent_url, title: parent.route } %}
    {% include ['flex-objects/types/' ~ target ~ '/buttons/nav-child.html.twig', 'flex-objects/types/pages/buttons/nav-child.html.twig']
        with { child_url: child_url, title: child.route } %}
    {% include ['flex-objects/types/' ~ target ~ '/buttons/nav-next.html.twig', 'flex-objects/types/pages/buttons/nav-next.html.twig']
        with { next_url: next_url, title: next.route } %}
    {% endif %}
{% endblock back_button %}

{% block preview_button %}
    {% if object.exists and not object.root() %}
    {% include ['flex-objects/types/' ~ target ~ '/buttons/preview.html.twig', 'flex-objects/types/pages/buttons/preview.html.twig'] %}
    {% endif %}
{% endblock preview_button %}

{% block delete_button %}
    {# FIXME: add support for deleting root file only #}
    {% if not object.root() %}
    {% include ['flex-objects/types/' ~ target ~ '/buttons/delete.html.twig', 'flex-objects/types/pages/buttons/delete.html.twig'] %}
    {% endif %}
{% endblock delete_button %}

{% block extra_buttons %}
    {% if object.exists and not object.root() %}
    {% if can_create %}
    {% include ['flex-objects/types/' ~ target ~ '/buttons/add.html.twig', 'flex-objects/types/pages/buttons/add.html.twig'] %}
    {% endif %}
    {% if can_copy %}
    {% include ['flex-objects/types/' ~ target ~ '/buttons/copy.html.twig', 'flex-objects/types/pages/buttons/copy.html.twig'] %}
    {% endif %}
    {% if can_save %}
    {% include ['flex-objects/types/' ~ target ~ '/buttons/move.html.twig', 'flex-objects/types/pages/buttons/move.html.twig'] %}
    {% endif %}
    {% endif %}
{% endblock extra_buttons %}

{% block save_button %}
    {% include ['flex-objects/types/' ~ target ~ '/buttons/save.html.twig', 'flex-objects/types/pages/buttons/save.html.twig'] %}
{% endblock save_button %}

{% block content_top %}
    {% if allowed and user.authorize('admin.super') %}
    <div class=\"alert notice\">
        {% set save_location = object.getStorageFolder() ?: directory.getStorageFolder() %}
        {{ \"PLUGIN_ADMIN.SAVE_LOCATION\"|tu }}: <b>{{ url(save_location, false, true)|trim('/') }} {{ not object.exists ? '[NEW]' }}</b> (type: <b>{{ (form.getValue('name') ?: 'default') }}</b>)
    </div>
    {% endif %}
    {% if object.exists and form.flash.exists %}
        <div class=\"alert secondary-accent\">
            <i class=\"fa fa-lightbulb-o\"></i> You are editing a saved draft. <button class=\"button button-link\" type=\"submit\" name=\"task\" value=\"reset\" form=\"blueprints\">{{ \"PLUGIN_ADMIN.RESET\"|tu }}</button>
        </div>
    {% endif %}
    {% if not object.exists %}
        <div class=\"alert secondary-accent\">
            <i class=\"fa fa-lightbulb-o\"></i> This page will not exist until it is saved.
        </div>
    {% elseif can_translate %}
        {% set is_default = language is same as(default_language) %}
        {% if is_default and default_language in object_languages %}
            {% if not translate_include_default and object.property('lang') %}
            {# Handle default language extension #}
            <div class=\"alert secondary-accent\">
                Using <strong>{{ all_languages[object_language] ?? object_language }}</strong> language override.
                {{ object.hasTranslation('', false) ? 'Unused <strong>Default</strong> language file also exists.'|raw }}
            </div>
            {% elseif translate_include_default %}
                {%  if not object.property('lang') %}
                    <div class=\"alert secondary-accent\">
                        Using <strong>Default</strong> language file.
                    </div>
                {% elseif object.hasTranslation('', false) %}
                    <div class=\"alert secondary-accent\">
                        Unused <strong>Default</strong> language file also exists.
                    </div>
                {% endif %}
            {% endif %}
        {% elseif not has_translation %}
        <div class=\"alert warning\">
            This page has not been translated to <i class=\"fa fa-flag-o\"></i> <strong>{{ all_languages[language] ?? language }}</strong> language yet!
            {% if language == object_language %}
                No fallback translations found.
            {% else %}
                Falling back to <strong>{{ all_languages[object_language] ?? object_language }}</strong> language.
            {% endif %}
        </div>
        {% endif %}
    {% endif %}
{% endblock content_top %}

{% block topbar %}
    {% if can_translate %}
        <div id=\"admin-lang-toggle\" class=\"button-group\">
            <button type=\"button\" class=\"button disabled\">
                <i class=\"fa fa-flag-o\"></i>
                {{ all_languages[object_language] ?? object_language }}
            </button>
            {% if count(object_languages) > (object_language in object_languages)|int %}
                <button type=\"button\" class=\"button dropdown-toggle\" data-toggle=\"dropdown\">
                    <i class=\"fa fa-caret-down\"></i>
                </button>
                <ul class=\"dropdown-menu language-switcher\">
                {% for lang_code in object_languages %}
                    {% if lang_code != object_language %}
                    <li>
                        <a href=\"{{ admin_route(route.getRoute(1), lang_code) }}\">{{ all_languages[lang_code] ?? lang_code }}</a>
                    </li>
                    {% endif %}
                {% endfor %}
                </ul>
            {% endif %}
        </div>
    {% endif %}

    <form id=\"admin-mode-toggle\">
        {% set normalText = 'PLUGIN_ADMIN.NORMAL'|tu %}
        {% set expertText = 'PLUGIN_ADMIN.EXPERT'|tu %}
        {% set maxLen = max([normalText|length, expertText|length]) %}
        {% set normalText = macro.spanToggle(normalText, maxLen) %}
        {% set expertText = macro.spanToggle(expertText, maxLen) %}

        <div class=\"switch-toggle switch-grav\">
            <input type=\"radio\" value=\"normal\" data-leave-url=\"{{ route.withGravParam('mode', 'normal').toString(true) }}\" id=\"normal\" name=\"mode-switch\" class=\"highlight\" {% if admin.session.expert == '0' %} checked=\"checked\"{% endif %}>
            <label for=\"normal\">{{ normalText|raw }}</label>
            <input type=\"radio\" value=\"expert\" data-leave-url=\"{{ route.withGravParam('mode', 'expert').toString(true) }}\" id=\"expert\" name=\"mode-switch\" class=\"highlight\" {% if admin.session.expert == '1' %} checked=\"checked\"{% endif %}>
            <label for=\"expert\">{{ expertText|raw }}</label>
            <a></a>
        </div>
    </form>
{% endblock topbar %}

{% block edit %}
    {% include 'partials/blueprints.html.twig' with { context: object, data: object, blueprints: form.blueprint } %}
{% endblock edit %}

{% block content %}
    {{ parent() }}

    {% include 'partials/modal-changes-detected.html.twig' %}

    {% if object.exists %}
        {% set modal_data = data({
            route: '/' ~ object.key,
            name: object.header.child_type ?? null
        }) %}

        <div class=\"remodal\" data-remodal-id=\"modal\" data-remodal-options=\"hashTracking: false\">
            {% include 'partials/blueprints-new.html.twig' with { form: null, blueprints: admin.blueprints('admin/pages/new'), data: modal_data, form_id: 'new-page' } %}
        </div>

        <div class=\"remodal\" data-remodal-id=\"modal-folder\" data-remodal-options=\"hashTracking: false\">
            {% include 'partials/blueprints-new-folder.html.twig' with { form: null, blueprints: admin.blueprints('admin/pages/new_folder'), data: modal_data, form_id: 'new-folder' } %}
        </div>

        <div class=\"remodal\" data-remodal-id=\"module\" data-remodal-options=\"hashTracking: false\">
            {% include 'partials/blueprints-new.html.twig' with { form: null, blueprints: admin.blueprints('admin/pages/modular_new'), data: modal_data, form_id: 'new-module' } %}
        </div>
    {% endif %}

    {# TODO: regular pages support extra modals from admin config #}

    <div class=\"remodal parents-container\" data-remodal-id=\"parents\" data-remodal-options=\"hashTracking: false, stack: true\">
        <form>
            <h1>Parents</h1>
            <div class=\"grav-loading\"><div class=\"grav-loader\">Loading...</div></div>
            <div class=\"parents-content\"></div>
            <div class=\"button-bar\">
                <a class=\"button secondary remodal-cancel\" data-remodal-action=\"cancel\" href=\"#\"><i class=\"fa fa-fw fa-close\"></i> {{ \"PLUGIN_ADMIN.CANCEL\"|tu }}</a>
                <a class=\"button\" data-parents-select href=\"#\"><i class=\"fa fa-fw fa-check\"></i> {{ \"PLUGIN_ADMIN.CONTINUE\"|tu }}</a>
            </div>
        </form>
    </div>

{% endblock content %}

{% block bottom %}
    {{ parent() }}
    <script>
        \$('.admin-pages .form-tabs .tabs-nav').css('margin-right', (\$('#admin-topbar').width() + 20) + 'px');
    </script>
{% endblock bottom %}
", "flex-objects/types/pages/edit.html.twig", "/Users/maik/Sites/maikw.github.io/user/plugins/flex-objects/admin/templates/flex-objects/types/pages/edit.html.twig");
    }
}
