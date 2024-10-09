<?php

function is_user_groupmember($group_id)
{
    if (is_user_logged_in()) {

        $group_builder = GroupBuilder\Core\GroupBuilderCore::get_instance();
        return $group_builder->group_builder_user_can('$group_id','edit');
    }
    return false;

}

add_action('init', 'is_user_groupmember');


