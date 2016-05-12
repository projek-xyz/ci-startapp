<?php

class App_Cache_redis extends CI_Cache_redis
{
    public function __destruct()
    {
        try {
            $this->_redis->close();
        } catch (RedisException $e) {
            // Do nothing
            log_message($e);
        }
    }
}
