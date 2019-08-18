<?php

function active($path){
   // dd(request()->is($path));
    return request()->is($path) ? "active" : " ";
}