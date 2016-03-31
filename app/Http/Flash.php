<?php

namespace app\Http;

class Flash
{
    /**
     * Create a flash message.
     *
     * @param $title
     * @param $message
     * @param $level
     * @param string $key
     * @return mixed
     */
    public function create($title, $message, $level, $key = 'flash_message')
    {
        return session()->flash($key, [
            'title' => $title,
            'message' => $message,
            'level' => $level
        ]);
    }

    /**
     * Create an information flash message.
     *
     * @param $title
     * @param $message
     * @return mixed
     */
    public function info($title, $message)
    {
        return $this->create($title, $message, 'info');
    }

    /**
     * Create a success flash message.
     *
     * @param $title
     * @param $message
     * @return mixed
     */
    public function success($title, $message)
    {
        return $this->create($title, $message, 'success');
    }

    /**
     * Create an error flash message.
     *
     * @param $title
     * @param $message
     * @return mixed
     */
    public function error($title, $message)
    {
        return $this->create($title, $message, 'error');
    }

    /**
     * Create an overlay flash message.
     *
     * @param $title
     * @param $message
     * @param string $level
     * @return mixed
     */
    public function overlay($title, $message, $level = 'success')
    {
        return $this->create($title, $message, $level, 'flash_message_overlay');
    }
}
