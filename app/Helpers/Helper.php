<?php

    function getData()
    {
    $result = \Illuminate\Support\Facades\DB::table('users')->where('role', 2)
        ->get(['active', 'name', 'created_at', 'dateofbirth']);
    $result = is_array(json_decode(json_encode($result), associative: true));

    return $result;
}

?>


