<?php


// check user access permission function start
function can($can) {
    if (auth('web')->check() && auth('web')->user()->is_super_admin == false) {
        foreach (auth('web')->user()->role->permission as $permission) {
            if ($permission->key == $can) {
                return true;
            }
        }
        return false;
    }
    return back();
}
// check user access permission function end
?>
