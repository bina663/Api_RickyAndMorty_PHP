<?php
    $male = array_filter($content->results,function($e){
        return $e->gender == 'Male';
    });
    $female = array_filter($content->results,function($e){
        return $e->gender == 'Female';
    });
    $human = array_filter($content->results,function($e){
        return $e->species == 'Human';
    });
    $alien = array_filter($content->results,function($e){
        return $e->species == 'Alien';
    });
    $alive = array_filter($content->results,function($e){
        return $e->status == 'Alive';
    });
    $dead = array_filter($content->results,function($e){
        return $e->status == 'Dead';
    });
    $unknown = array_filter($content->results,function($e){
        return $e->status == 'unknown';
    });