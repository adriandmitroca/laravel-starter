<?php

if (! function_exists('is_active')) {
    /**
     * Determine if given route action equals to current one.
     *
     * @param $action
     *
     * @return null|string
     */
    function is_active($action)
    {
        return ends_with(Route::currentRouteAction(), $action) ? 'active' : null;
    }
}

if (! function_exists('is_active_name')) {
    /**
     * Determine if given route alias equals to current one.
     *
     * @param $name
     *
     * @return null|string
     */
    function is_active_name($name)
    {
        return Route::current()->getName() == $name ? 'active' : null;
    }
}

if (! function_exists('hide_email')) {
    /**
     * Encrypts e-mail address and generates JavaScript encrypted string to avoid robots and malware.
     *
     * @source http://www.maurits.vdschee.nl/php_hide_email/
     *
     * @param $email
     *
     * @return string
     */
    function hide_email($email)
    {
        $character_set = '+-.0123456789@ABCDEFGHIJKLMNOPQRSTUVWXYZ_abcdefghijklmnopqrstuvwxyz';

        $key         = str_shuffle($character_set);
        $cipher_text = '';
        $id          = 'e' . rand(1, 999999999);

        for ($i = 0; $i < strlen($email); $i += 1) {
            $cipher_text .= $key[strpos($character_set, $email[$i])];
        }

        $script = 'var a="' . $key . '";var b=a.split("").sort().join("");var c="' . $cipher_text . '";var d="";';

        $script .= 'for(var e=0;e<c.length;e++)d+=b.charAt(a.indexOf(c.charAt(e)));';

        $script .= 'document.getElementById("' . $id . '").innerHTML="<a href=\\"mailto:"+d+"\\">"+d+"</a>"';

        $script = "eval(\"" . str_replace([ "\\", '"' ], [ "\\\\", '\"' ], $script) . "\")";

        $script = '<script type="text/javascript">/*<![CDATA[*/' . $script . '/*]]>*/</script>';

        return '<span id="' . $id . '">[javascript protected email address]</span>' . $script;

    }
}
