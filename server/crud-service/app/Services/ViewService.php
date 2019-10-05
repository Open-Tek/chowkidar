<?php
/**
 * Created by PhpStorm.
 * User: gauravpunjabi
 * Date: 3/2/19
 * Time: 2:54 AM
 */

namespace App\Services;


class ViewService
{
    public static function controlButton($icon_code, $color, $id, $class_name)
    {
        return '<button id="'.$id.'" class="'.$class_name.' '.$icon_code.' btn '.$color.'"></button>';
    }

    public static function controlModalButton($icon_code, $color, $id, $class_name, $modal_id)
    {
        return '<button id="'.$id.'" class="'.$class_name.' '.$icon_code.' btn '.$color.'" data-toggle="modal" data-target="#'.$modal_id.'"></button>';
    }

    public static function controlLinkButton($icon_code, $color, $id, $link, $class_name)
    {
        return '<a href="'.$link.'" id="'.$id.'" class="'.$class_name.' '.$icon_code.' btn '.$color.'"></a>';
    }
}
