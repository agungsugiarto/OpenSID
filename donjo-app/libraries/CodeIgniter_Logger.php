<?php

use Exception;
use Psr\Log\LoggerInterface;

class CodeIgniter_Logger implements LoggerInterface
{
    /**
     * {@inheritdoc}
     */
    public function emergency($message, array $context = array())
    {
        throw new Exception('Not implemented');
    }

    /**
     * {@inheritdoc}
     */
    public function alert($message, array $context = array())
    {
        throw new Exception('Not implemented');
    }

    /**
     * {@inheritdoc}
     */
    public function critical($message, array $context = array())
    {
        throw new Exception('Not implemented');
    }

    /**
     * {@inheritdoc}
     */
    public function error($message, array $context = array())
    {
        return log_message('error', $message);
    }

    /**
     * {@inheritdoc}
     */
    public function warning($message, array $context = array())
    {
        throw new Exception('Not implemented');
    }

    /**
     * {@inheritdoc}
     */
    public function notice($message, array $context = array())
    {
        throw new Exception('Not implemented');
    }

    /**
     * {@inheritdoc}
     */
    public function info($message, array $context = array())
    {
        return log_message('info', $message);
    }

    /**
     * {@inheritdoc}
     */
    public function debug($message, array $context = array())
    {
        return log_message('debug', $message);
    }

    /**
     * {@inheritdoc}
     */
    public function log($level, $message, array $context = array())
    {
        return log_message($level, $message);
    }
}