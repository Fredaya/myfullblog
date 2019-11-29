<?php

function validateTopics($topic)
{
    $errors = array();

    if (empty($topic['name'])) {
        array_push($errors, 'name is required');
    }


    $existingTopic = selectOne('topics', ['name' => $post['name']]);
    if ($existingTopic) {
        if (isset($post['update-topic']) && $existingTopic['id'] != $post['id']) {
            array_push($errors, 'name  already exists');
        }

        if (isset($post['add-topic'])) {
            array_push($errors, 'name  already exists');
        }
    }


    return $errors;
}
